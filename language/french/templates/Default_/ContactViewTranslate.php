<?php
namespace packages\infity\basicPack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;

class ContactViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Contactez-moi",
            "info" => "Remplissez le formulaire suivant pour prendre contact avec moi.",
            "send" => "Le message a bien été envoyé!",
            "sujet" => "Sujet",
            "message" => "Votre Message",
            "submit" => "Envoyer"
        );

    }
}