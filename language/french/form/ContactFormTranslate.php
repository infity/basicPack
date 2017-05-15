<?php
namespace packages\infity\basicPack\language\french\form;
use core\TranslateBound as TranslateBound;


class ContactFormTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "nom" => "Votre nom",
            "prenom" => "Votre prénom",
            "email" => "Votre adresse email",
            "sujet" => "Sujet",
            "message" => "Votre Message",
            "submit" => "Envoyer"
        );

    }
}