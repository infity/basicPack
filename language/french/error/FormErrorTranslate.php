<?php
namespace packages\infity\basicPack\language\french\error;
use core\TranslateBound as TranslateBound;

class FormErrorTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "same_id" => "Cet identifiant formulaire existe déjà ! Conflits potentiels détectés !",
            "fields_name_unknow" => "n'existe pas dans le formulaire identifié par",
            "fields_name" => "Un champ nommé",
            "fields_name_exist" => "existe déjà dans le formulaire identifié par",
            "required_field" => "Ce champ est obligatoire.",
            "maxlength" => "La longueur maximale est de %d caractères.",
            "unknow_error" => "Erreur inconnue : ",
            "invalid_email" => "Ce n'est pas une adresse e-mail valide.",
            "invalid_date" => "La date entrée n'existe pas.",
            "invalid_date_format" => "La date entrée ne respecte pas le format imposé (%s).",
            "invalid_file_extension" => "Cette extension est interdite ! (sont autorisées : %s).",
            "file_too_big" => "Fichier trop volumineux ! (maximum : %d octets).",
            "incorrect_value" => "La valeur fournie est interdite."
        );

    }
}
