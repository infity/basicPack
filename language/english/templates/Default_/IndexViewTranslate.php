<?php
namespace packages\infity\basicpack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;

class IndexViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "home",
            "info" => "you're welcome in ".\Config::SITENAME
        );

    }
}