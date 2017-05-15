<?php
namespace packages\infity\basicpack\language\french\error;
use core\TranslateBound as TranslateBound;

class DefaultErrorTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "already_connected" => "Vous êtes déjà connecté!",
            "not_connected" => "Vous n'êtes pas connecté.",
            "msg_logout" => "Vous êtes maintenant déconnecté",
            "msg_login" => "Heureux de vous revoir!",
            "no_role" => "Erreur vous n'avez pas les droits requis",
            "change_language" => "La langue à été modifié avec succès"
        );

    }
}