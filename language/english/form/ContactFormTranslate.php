<?php
namespace packages\infity\basicPack\language\english\form;
use core\TranslateBound as TranslateBound;


class ContactFormTranslate extends TranslateBound {
    
    public function __construct(){
        
        $this->translate = array(
            "nom" => "Name",
            "prenom" => "Firstname",
            "email" => "Email",
            "sujet" => "Subject",
            "message" => "Message",
            "submit" => "Submit"
        );
    }
}