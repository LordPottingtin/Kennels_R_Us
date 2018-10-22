<?php
    //require("../model/database.php");

    $currentPage = filter_input(INPUT_POST, "action");
    if(is_null($currentPage)){
        $currentPage = filter_input(INPUT_GET, "action");
        if(is_null($currentPage)){
            $currentPage = "home";
        }
    }

    if ($currentPage == "home"){
        include("../index.php");

    }else if ($currentPage == "products"){
        $title = "Our Kennels";
        include("./product_list.php"); 
    }