<?php

  require_once('models/models.php');
  class Controller{
      public $Model;

      public function __construct(){
          $this->Model = new Model();
      }
      public function invoke(){
          $result = $this->Model->getlogin();

          if($result == 'login')
            include 'views/profile.php';
          else
            include 'views/login.php';
      }
  }


