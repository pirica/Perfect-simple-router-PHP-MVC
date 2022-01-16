<?php
require './vendor/autoload.php';
require './Controller/global.php';

use Core\App;
$app = new App;

//Routers
$app->view("","./Controller/ControllerHome.php");
$app->view("blog","./Controller/ControllerBlog.php");








//seo
$app->seo("/sitemap.xml","./Controller/sitemap.php");
$app->seo("/robots.txt","./Controller/robots.php");

if($app->url == false){
    require './Controller/Controller404.php';
}

if(isset($conn)){
    mysqli_close($conn);
}

if(isset($connpdo)){         
    $connpdo = null;    
}
