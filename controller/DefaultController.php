<?php
namespace packages\infity\basicPack\controller;
use core\Render as Render;
use core\Controller as Controller;
use core\Application as Application;
use core\Message as Message;

/**************************************************
 * DefaultController
 * it's the main controller of a basic website
 * @author Antoine
 **************************************************/
class DefaultController extends Controller {
    
    /*******************************
     * Homepage
     *******************************/
    public function indexAction () {
        return new Render($this, 'Default/index.html.twig', array());
    }
    
    /*******************************
     * about the website page
     *******************************/
    public function aboutAction () {
        return new Render($this, 'Default/about.html.twig', array());
    }
    
    /******************************* 
     * Terms of use page
     *******************************/
    public function termsAction () {
        return new Render($this, 'Default/terms.html.twig',array(
            'company' => $this->config('COMPANY'),
            'publishingDirector' => $this->config('PUBLISHINGDIRECTOR'),
            'siteName' => (($this->config('SITENAME')=='')?(\Config::SITENAME):($this->config('SITENAME'))),
            'editor' => array(
                'name' => $this->config('COMPANY'),
                'address' => $this->config('EDITADR'),
                'country' => $this->config('EDITCOUNTRY'),
                'phone' => $this->config('EDITPHONE'),
                'mail' => $this->config('EDITMAIL'),
            ),
            'host' => array(
                'name' => $this->config('HOSTNAME'),
                'address' => $this->config('HOSTADR'),
                'country' => $this->config('HOSTCOUNTRY'),
                'phone' => $this->config('HOSTPHONE'),
                'mail' => $this->config('HOSTMAIL'),
            ),
            'credits' => array(
                'dev' => $this->config('DEVCREDITS'),
                'photo' => $this->config('PHOTOCREDITS'),
                'design' => $this->config('DESIGNCREDITS'),
                'webmaster' => $this->config('WEBMASTERCREDITS'),
            ),
        ));
    }
    
    /******************************* 
     * privacy page
     *******************************/
    public function privacyAction () {
        return new Render($this, 'Default/privacy.html.twig',array());
    }  
    
    /******************************* 
     * site map page
     *******************************/
    public function sitemapAction () {
        return new Render($this, 'Default/sitemap.html.twig',array());
    }
    
    /*******************************
     * Contact page
     *******************************/
    public function contactAction () {
        $destinataire = $this->config('CONTACTMAIL');
        $send= false;
        // load form
        $form = $this->formLoad('contact');
        // Pré-remplissage avec les valeurs précédemment entrées (s'il y en a)
        $form->bound($_POST);
        
        // Création d'un tableau des erreurs
        $error = array();
        // Validation des champs suivant les règles en utilisant les données du tableau $_POST
        if ($form->is_valid($_POST)) {
            // Si d'autres erreurs ne sont pas survenues
            if (empty($error)) {
                // Traitement du formulaire à faire ici
                function normalize_linebreaks($text) {
                        $text = str_replace("\r\n", "\n", $text); /* win -> un*x */
                        $text = str_replace("\r", "\n", $text); /* mac -> un*x */
                        return $text;
                    }
                $sujet = 'Contact Mission-Job: '.$form->get_cleaned_data('sujet');
		$message = "Email de : ".$form->get_cleaned_data('email')."\n"
                           ."Nom: ".$form->get_cleaned_data('nom')."\n"
                           ."Prénom: ".$form->get_cleaned_data('prenom')."\n"
                            ."Sujet: ".stripslashes($form->get_cleaned_data('sujet'))."\n"
                            ."Message: \n ".stripslashes(normalize_linebreaks($form->get_cleaned_data('message')));
                $headers = "From: <".$this->config('SENDER').">\n";
                $headers .= "Reply-To: ".$form->get_cleaned_data('email')."\n";
                $headers .= "Content-Type: text/plain; charset=\"utf-8\"";
                if(mail($destinataire,$sujet,$message,$headers)) {
                        $send= true;
                        Application::$session->setData('message', new Message('message_good','Votre message a bien &eacute;t&eacute; envoy&eacute;.'));
                } else {
                        Application::$session->setData('message', new Message('message_error','Une erreur c\'est produite lors de l\'envois du message.'));
                }
            } else {
                // On affiche les erreurs
                foreach ($error as $m) {
                    $mess = $m.'<br>';
                }
                Application::$session->setData('message', new Message('message_error',$mess));
            }
        }
        
        return new Render($this, 'Default/contact.html.twig', 
                array('form' => $form,
                    'error' => $error,
                    'send' => $send,
                    )
                );
    }
    
    /*******************************
     * Change website language
     *******************************/
    public function languageAction ($route,$lang) {

        $url = $this->app()->navigation()->getPrevPageClean();
        
        $this->app->languageManage()->setLanguage($this->app->languageManage()->detectToLanguage($lang));
        $this->app->languageManage()->saveLanguage(); //on met en session + cookie
        // confirmation message
        Application::$session->setData('message', new Message('message_info',$this->app->translate()->error('default')->getValue('change_language')));
        $detect = '';
        if (\Config::SEOLANG && \Config::SEOLANGMETHOD == 'SUBDIR') {
            $detect = str_replace('_','-', $this->app->languageManage()->getLanguage()->getDetect()).'/';
        }
        
        
        //gestion des réécritures
        if (\Config::HTAWRITE) {
            $url = str_replace("?/", "", $url);
            $this->redirectUrl("?/".$detect.$url);
        } else {
            $this->redirectUrl($detect.$url);
        }
    }


    /*******************************
     * 404 error
     *******************************/
    public function error404Action ($m ='') {
        return new Render($this, 'Default/error404.html.twig', array('message' => $m));
    }
    
    /*******************************
     * ajax test page
     *******************************/
    public function ajaxAction () {
        $ajax = $this->ajaxLoad('test');
        //var_dump($ajax);
        return new Render($this, 'Default/ajax.html.twig', array("myAjax" => $ajax));
    }
    
}