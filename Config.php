<?php
namespace packages\infity\basicpack;


class Config {
    
    
    /**************** basicpack CONFIG *******************/
    const CONTACTMAIL = 'your@mail.com';
    const SENDER = 'contactform@bd.net';
    
    /**************** LEGAL INFORMATION PROPERTIES *******************/
    const SITENAME = ''; // used in legal information, you can keep this field empty to use \Config::SITENAME
    const PUBLISHINGDIRECTOR = 'You';
    
    /*EDITOR*/
    const COMPANY = 'Company Name';// editor name
    const EDITADR = '3 rue du Paradis 75000 Paris';// editor's address
    const EDITCOUNTRY = 'FRANCE';// editor's country
    const EDITPHONE = '+33 (0)1 45 45 45 45 45 45';// editor phone
    const EDITMAIL = 'nomail@nomail.nomail';
    
    /*HOST*/
    const HOSTNAME = 'HostName';
    const HOSTADR = '3 rue du Paradis 75000 Paris';// host address
    const HOSTCOUNTRY = 'FRANCE';// host country
    const HOSTPHONE = '+33 (0)1 45 45 45 45 45 45';// host phone
    const HOSTMAIL = 'nomail@nomail.nomail';
    
    /*CREDITS*/
    const PHOTOCREDITS = '© Infity'; //photo credits
    const DEVCREDITS = '© Infity Framework: <a href="#" title="Infity Framework" target="_blank">Infity website</a> <br> © Infity/basicpack'; //dev credits
    const DESIGNCREDITS = '© Infity <a href="#" title="Infity Framework" target="_blank">Infity website</a> <br> © BootStrap <a href="http://getbootstrap.com" title="BootStrap" target="_blank">bootstrap.com</a>'; //design credits
    const WEBMASTERCREDITS = ''; //webmaster credits
}