<?php
namespace Controller;
class Controller404
{    
    public $title = "404";

    public function view(){
        require './Public/include/header.php';
        require './Public/view/404.php';
        require './Public/include/footer.php';
    }    
}

$view = new Controller404;
$view->view();
