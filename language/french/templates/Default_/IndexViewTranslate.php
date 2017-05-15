<?php
namespace packages\infity\basicpack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;

class IndexViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "accueil",
            "info" => "Bienvenue sur le site ".\Config::SITENAME
        );

    }
}