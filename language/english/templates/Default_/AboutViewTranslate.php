<?php
namespace packages\infity\basicpack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;

class AboutViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "about",
            "info" => "about ".\Config::SITENAME
        );

    }
}