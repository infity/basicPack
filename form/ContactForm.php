<?php
namespace packages\infity\basicPack\form;
use core\FormBuilder as FormBuilder;

class ContactForm extends FormBuilder {
    
    public function  formBuild () {
        $this->method ='POST';        
        
        $this->form->id('contactForm');
        
        $this->form->add('Text', 'nom')
                        ->label('nom');
        $this->form->add('Text', 'prenom')
                        ->label('prenom');
        
        $this->form->add('Email', 'email')
                        ->label('email');
        
        $this->form->add('Text', 'sujet')
                        ->label('sujet');
                        //->Required(false);
        
        $this->form->add('Textarea', 'message')
                        ->label('message');
        
        $this->form->add('Submit', 'submit')
                        ->value('submit', true);
    }
}
