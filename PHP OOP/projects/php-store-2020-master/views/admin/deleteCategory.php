<?php
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new CategoriesController();
    $data->removeCategory();
}else{
    Redirect::to("home");
}