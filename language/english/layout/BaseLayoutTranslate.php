<?php
namespace packages\infity\basicPack\language\english\layout;
use core\TranslateBound as TranslateBound;

class BaseLayoutTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "menuHome" => "Home",
            "menuAbout" => "About me",
            "menuProduct" => array(
                "main" => "Galery",
                "m1" => "Web creations",
                "m3" => "Software",
                "m2" => "Design",
                ),
            "menuContact" => "Contact",
            "menuMentions" => "Terms of Use",
            "menuSitemap" => "Site Map",
            "m_logout" => "Sign out",
            "m_login" => "Sign in",
            "m_account" => "My account",
            "m_register" => "Sign up",
            "user_welcome" => "Hello",
            'privacy' => 'Privacy policy',
        );
    }
}