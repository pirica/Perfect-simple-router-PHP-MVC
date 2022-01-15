<?php
namespace Controller;
class ControllerBlog
{
    public $title = "Blog Example";

    public function view(){
        require '../Public/view/blog.php';
    }    
}

$view = new ControllerBlog;
$view->view();
