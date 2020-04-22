<?php

class User {
  // Nos variables
  private $_id_user;
  private $_username;
  private $_password_user;
  private $_mail_username;
  private $_confirmation_token;

    // Constructeur
    public function __construct(array $data){
      $this->hydrate($data);
    }

      // Hydratation
      public function hydrate(array $data){
        foreach($data as $key => $value){
          $method = 'set' ucfirst($key);

          if(method_exists($this, $method))
            $this->$method($value);
        }
      }


        // Getters

        public function getid_user(){
          return $this->id_user
        }

          public function getusername(){
            return $this->$username
          }

            public function getpassword_user(){
              return $this->password_user
            }

              public function getmail_username(){
                return $this->mail_username
              }

                public function getconfirmation_token(){
                  return $this->confirmation_token
                }



        // Settters

        public function setId_user($id_user){
          $id_user = (int) $id_user;

          if($id_user > 0)
            $this->_id_user = $id_user;
        }

          public function setUsername($username){
            if(is_string($username))
              $this->_username = $username;
          }

            public function setPassword_user($password_user){
              if(is_string($password_user))
                $this->_password_user = $password_user;
            }

              public function setMail_username($mail_username){
                if(is_string($mail_username))
                  $this->_mail_username = $mail_username;
              }

                public function setConfirmation_token($confirmation_token){
                  if(is_string($confirmation_token))
                    $this->_confirmation_token = $confirmation_token;
                }

}

 ?>
