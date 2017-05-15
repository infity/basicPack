<?php
namespace packages\infity\basicPack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;

class AboutViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "a propos",
            "info" => "a propos du site."
        );

    }
}