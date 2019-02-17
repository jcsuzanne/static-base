<?php
$views = array(
    ''=>'home',
    'home'=>'home',
);

$env = "local";
$lang = "en";

$share = ['url'=>'https://www.domain.tld/','text'=>urlencode('Text to share'),'rawText'=>'Text to share','img'=>'https://www.pmvtrust.ie/wp-content/uploads/2018/02/pmvt-1024x563.png','metaTitle'=>'Title Page'];

if(isset($_GET) && isset($_GET['page']) && !empty($_GET['page'])):
    $view = $views[$_GET['page']];
else:
    $view = 'home';
endif;
$layout = 'base';