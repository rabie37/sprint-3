<?php
class Model {

public function getlogin(){
    if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
       if ($_REQUEST['username'] == 'rabie' &&  $_REQUEST['password'] == '123' ) 
         return 'login';
    
       else
           return 'invalide user';
    }
}

public function logout(){

}

}

?>