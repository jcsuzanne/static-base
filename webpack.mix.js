let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.options({
    autoprefixer: false,
    postCss: [
        require('autoprefixer')({
            browsers: ['last 2 versions','> 1%', 'IE 10' , 'Safari <= 8'],
            cascade:false
        })
    ]
});

let namesFiles = { js : 'front.js' , jsTop : 'top.js' , css : 'front.css' }
if (mix.inProduction()) {
    mix.minify([`public/build/${namesFiles.css}`,`public/build/${namesFiles.js}`,`public/build/${namesFiles.jsTop}`]);
} else {
    mix.copy('resources/js/vendor/modernizr-custom.js', `public/build/${namesFiles.jsTop}`)
   .js('resources/js/app.js', `public/build/${namesFiles.js}`)
   .sass('resources/css/builder.scss', `public/build/${namesFiles.css}`)
   .options({
        processCssUrls: false
    })
   .sourceMaps();
}

// BrowserSync
mix.browserSync({
    proxy : '192.168.1.11/pmvt-fe/public/',
    // proxy : '192.168.8.102/goodmoods-v2.com',
    cors:true,
    files: [
    'public/build/front.css',  // Generated .css file
    'public/build/front.js',    // Generated .js file
    // =====================================================================
    // You probably need only one of the below lines, depending
    // on which platform this project is being built upon.
    // =====================================================================
    'public/views/**', // Laravel-specific view files
    ]
});