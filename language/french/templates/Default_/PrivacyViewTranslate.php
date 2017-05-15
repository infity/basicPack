<?php
namespace packages\infity\basicpack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;


class PrivacyViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Charte de confidentialité",
            "info" => "Charte de confidentialité du site ".\Config::SITENAME
        );

    }
}