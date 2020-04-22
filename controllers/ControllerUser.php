<?php

class ControllerUser {
  private $_userManager;
  private $_view;

    public function __construct($url){
      if(isset($url) AND count($url)>1)
      throw new Exception('Page Introuvable');
      else
        $this->users();
    }

      private function users(){
        $this->_userManager = new UserManager;
        $users = $this->_UserManager->getUsers();

        require_once('views/viewUser.php');
      }

}

 ?>
