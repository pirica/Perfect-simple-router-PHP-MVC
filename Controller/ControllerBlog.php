<?php
namespace Controller;
class ControllerBlog
{
    public $title = "Blog Example";

    public function view(){
        require './Public/include/header.php';
        require './Public/view/blog.php';
        require './Public/include/footer.php';
    }    
}

$view = new ControllerBlog;
$view->view();
