<?php
    $env = "";

    $root = "";
    if($env == "dev"){
        $root = $_SERVER["DOCUMENT_ROOT"];
    }
    elseif($env == "pro"){
        $root = "https://shubham.com";
    }
    else{
        $root = "http://127.0.0.1";
    }
    

    $user = "root";
    $pass = "";
    $db = "db_pdo";
    $host = "localhost";
    

   

    
?>