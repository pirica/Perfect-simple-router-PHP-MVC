<?php
namespace Core;
class App 
{
    private $path;
    private $require;
    public $url = false;

    public function view($p,$r){
        $this->path = $p;
        $this->require = $r;

        $urlview = filter_var(filter_input(INPUT_GET,"url", FILTER_DEFAULT),FILTER_SANITIZE_URL) ;
        if($this->path == $urlview){
            require $this->require;                    
            return $this->url = true;            
        }
    }

    public function seo($p,$r){
        $this->path = $p;
        $this->require = $r;

        $urlseo = filter_var(urldecode($_SERVER['REQUEST_URI']), FILTER_SANITIZE_URL);
        if($this->path == $urlseo){
            require $this->require;
            return $this->url = true;
        }
    }
}

// view reads only the values that are in "/" in the URL that is, even using the get method will load the page ex: example/blog?pag=1
// view will only return "example/blog"
// seo returns the full url 