<?php

class UserManager extends Model {
  public function getUsers(){
    $this->getBdd();
    return $this->getAll('users','user');
  }










}


 ?>
