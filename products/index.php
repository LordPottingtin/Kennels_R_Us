<?php
    //require("../model/database.php");

   $action = filter_input(INPUT_POST, "action");
   if(is_null($action)){
        $action = filter_input(INPUT_GET, "action");
        if(is_null($action)){
            $action = "home";
        }
   } 

   if ($action == "home"){
        include("../index.php");

   } else if ($action == "products"){
        include("product_list.php");
        
   }
?>