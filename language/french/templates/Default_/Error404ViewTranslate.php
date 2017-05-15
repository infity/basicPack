<?php
namespace packages\infity\basicPack\language\french\templates\Default_;
use core\TranslateBound as TranslateBound;

class Error404ViewTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "title" => "Oups! Erreur 404",
            "info" => "La requête souhaitée n'est pas disponible probablement à cause d'un lien brisé."
        );

    }
}