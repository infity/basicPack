<?php
namespace packages\infity\basicpack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;

class Error404ViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Oups! 404 error",
            "info" => "we are sorry, but the request is not available."
        );

    }
}