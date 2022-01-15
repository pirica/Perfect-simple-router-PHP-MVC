<?php
namespace Controller;
class ControllerBlog
{
    public function view(){
        require '../Public/view/blog.php';
    }    
}

$view = new ControllerBlog;
$view->view();