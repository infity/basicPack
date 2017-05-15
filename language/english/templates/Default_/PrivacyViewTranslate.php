<?php
namespace packages\infity\basicpack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;


class PrivacyViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Privacy",
            "info" => "Privacy of ".\Config::SITENAME
        );

    }
}