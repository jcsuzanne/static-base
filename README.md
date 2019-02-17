#  README #



This README would normally document whatever steps are necessary to get your application up and running.



###  Front-End managements ###



#####  Requirements

* NPM v5.6.0

* Yarn v1.3.2

* Laravel Mix

* SCSS/SASS for CSS

* ES6 with Babel polyfill for JS



#####  Installation



I use a standalone version of Laravel Mix to compile/minification/live-watching sources managements.

More info here [Laravel Mix](https://laravel.com/docs/5.4/mix)



Just install the dependencies with *yarn install* command



All the settings is done inside *webpack.mix.js*



#####  First compilation or basic compilation



*yarn dev*



#####  Live Reload



Using Browsersync, just change the *proxy* parameter with your local IP



Then, launch with *yarn watch* and it will open a new tab in your browser with the app launched



#####  Minification



*yarn production*



#####  Add JS or CSS



To add a css in the app, add the file to *resources/css/builder.scss*



To add a js in the app, add the file to *resources/js/app.js*


###  Views and PHP Structure ###


The differents views are managed in the *public/views* folder.
You just need to create a new php file and set up the route in the **theview.php** file, then the url can match the view (through .htaccess rewrite rule)

Example : for domain.tld/my-url. In **theview.php**, just add in the $views array

	$views  =  array(
		''=>'home',
		'home'=>'home',
		'my-url'=>'my-file.php'
	);

Add all the folders and files you want in the *views* folder to organize and structure the code in the best way.
Just put all the shared modules in a specific folder and then include them in the global view to keep a modular organisation of the code.

## Public folder

All the assets are published in *public/build* folder.
All the views are in this *public* folder.

Just copy/paste the entire folder on your hosting to see it live.