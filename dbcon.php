<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ecomproject";

    $connect = mysqli_connect($host, $username, $password, $database);

    if(!$connect){
       die("Failed: " .mysqli_connect_error());
    }
    else{

    }
?>