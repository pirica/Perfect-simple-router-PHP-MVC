<?php
require './vendor/autoload.php';
require './Controller/global.php';

use Core\App;
$app = new App;

//Routers
$app->view("","./Public/view/index.php");
//example controller
$app->view("blog","./Controller/ControllerBlog.php");







//seo
$app->seo("/sitemap.xml","./Controller/sitemap.php");
$app->seo("/robots.txt","./Controller/robots.php");

if($app->url == false){
    require './Public/view/404.php';
}

if(isset($conn)){
    mysqli_close($conn);
}

if(isset($connpdo)){         
    $connpdo = null;    
}