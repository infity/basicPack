<?php
namespace packages\infity\basicPack\language\english\error;
use core\TranslateBound as TranslateBound;

class DefaultErrorTranslate extends TranslateBound {
    public function __construct(){
        
        $this->translate = array(
            "already_connected" => "You are already logged in!",
            "not_connected" => "You are not logged in.",
            "msg_logout" => "You are now offline",
            "msg_login" => "Welcome Back!",
            "no_role" => "You are not Authorized to access.",
            "change_language" => "Your language is updated successfully"
        );
    }
}