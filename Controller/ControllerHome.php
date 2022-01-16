<?php
namespace Controller;
class ControllerHome
{    
    public $title = "Simple Perfect Router";
      

    public function view(){
        require './Public/include/header.php';
        require './Public/view/index.php.';
        require './Public/include/footer.php';
    }    
}

$view = new ControllerHome;
$view->view();
