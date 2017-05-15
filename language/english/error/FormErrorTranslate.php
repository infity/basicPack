<?php
namespace packages\infity\basicPack\language\english\error;
use core\TranslateBound as TranslateBound;

class FormErrorTranslate extends TranslateBound {
    
    public function __construct(){
        
        $this->translate = array(
            "same_id" => "This form ID already exist! Potential conflicts detected!",
            "fields_name_unknow" => "doesn't exist in form",
            "fields_name" => "A field called",
            "fields_name_exist" => "already exist in form",
            "required_field" => "This field is required.",
            "maxlength" => "The maximum length is %d chars.",
            "unknow_error" => "Unknow error : ",
            "invalid_email" => "This is not a valid email",
            "invalid_date" => "Unknow date.",
            "invalid_date_format" => "The date entered does not respect the format requirements (%s).",
            "invalid_file_extension" => "This extension is forbidden! (are allowed: %s).",
            "file_too_big" => "Too large file! (maximum: %d bytes).",
            "incorrect_value" => "The provided value is prohibited."
        );
        
    }
}