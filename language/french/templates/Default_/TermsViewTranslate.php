<?php
namespace packages\infity\basicPack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;


class TermsViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Mentions légales",
            "info" => "Mentions légales du site ".\Config::SITENAME
        );

    }
}