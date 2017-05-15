<?php
namespace packages\infity\basicPack\language\english\templates\Default_;
use core\TranslateBound as TranslateBound;

class ContactViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Contact me",
            "info" => "Complete the following form to contact me.",
            "send" => "The message was sent!",
            "sujet" => "Subject",
            "message" => "Message",
            "submit" => "Submit"
        );

    }
}