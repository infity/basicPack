<?php
namespace packages\infity\basicpack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;

class TermsViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Legal information",
            "info" => "Legal information of ".\Config::SITENAME
        );

    }
}