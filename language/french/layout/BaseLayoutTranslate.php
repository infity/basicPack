<?php
namespace packages\infity\basicPack\language\french\layout;
use core\TranslateBound as TranslateBound;

class BaseLayoutTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "menuHome" => "Accueil",
            "menuAbout" => "A propos de moi",
            "menuProduct" => array(
                "main" => "Galerie",
                "m1" => "Création Web",
                "m3" => "Application",
                "m2" => "Graphisme",
                ),
            "menuContact" => "Contact",
            "menuMentions" => "Mentions-légales",
            "menuSitemap" => "Plan du site",
            "m_logout" => "Déconnexion",
            "m_login" => "Connexion",
            "m_account" => "Mon compte",
            "m_register" => "Inscription",
            "user_welcome" => "Bonjour",
            'privacy' => 'Politique de confidentialité',
        );
        
    }
}