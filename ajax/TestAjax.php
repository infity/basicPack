<?php
namespace packages\infity\basicpack\ajax;
use core\AjaxBuilder as AjaxBuilder;
use core\Ajax as Ajax;
use core\Application as Application;

class TestAjax extends AjaxBuilder {
    
    /************************************************************
     * ajaxBuild()
     * ici on construit notre requête Ajax
     ************************************************************/
    public function  ajaxBuild ($data = null) {        
        $this->ajax->add('nom_utilisateur', 'nom_utilisateur');
        $this->ajax->success('ajax'); //id du bloc HTML que l'on veut mettre à jour
    }
    
    /************************************************************
     * ajaxResponse()
     * ici on traite la requête ajax et on renvoie un résultat
     ************************************************************/
    public function ajaxResponse() {
        //var_dump($this->ajax->getAllCleanedData());
        echo $this->ajax->getCleanedData('nom_utilisateur');
        echo '<br>it works!';
        echo '<script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
        toastr["success"]("Ajax message", "Notification");
        toastr["warning"]("Ajax warning message", "Warning!");
        toastr["error"]("Ajax alert message", "Alert!");
        toastr["info"]("Ajax info message", "Info");
        </script>';
    }
}
