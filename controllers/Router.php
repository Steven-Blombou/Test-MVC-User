<?php

class Router {

  private $_ctrl;
  private $_view;

    public function routeReq(){
      try{
        // Chargement Auto des class
        spl_autoload_register(function($class){
          require_once('models/'.$class.'.php');
        });

        $url = '';

          // Le controller est inclus selon l action de l'utilisateur
        if(isset($GET['url'])){
          $url = explode('/',filter_var($GET['url'], FILTER_SANITIZE_URL));

          $controller = ucfirst(strtolower($url[0]));
          $controllerClass = "Controller". $controller;
          $controllerFile = "controllers/" .$controllerClass.".php";

          if(file_exists($controlleFile)){
            require_once('controllerFile');
            $this->_ctrl = new $controllerClass($url);
          }else
            throw new Exception('Page Introuvable');
        }else
        {
            require_once('controllers/ControllerUser.php');
            $this->_crtl = new ControllerUser($url);
        }

      }

      //  Gestion des erreurs
      catch(Exception $e){

        $errorMsg = $e->getMessage();
        require_once('views/viewError.php');

      }
    }
}




 ?>
