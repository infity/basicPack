<?php
namespace packages\infity\basicPack\layout;
use \core\Layout as Layout;


/*******************************
 * BaseLayout
 * Layout spécial qui s'applique au template de base
 * elle sert pour les actions à réaliser sur toutes les pages (requête footer, chargement des menus...)
 * elle est appelé par class Render
 *******************************/
class BaseLayout extends Layout {
    /*******************************
     * generate data return array
     *******************************/
    public function build() {
        return array(
            'siteName' => $this->app->name()
            );
    }
}