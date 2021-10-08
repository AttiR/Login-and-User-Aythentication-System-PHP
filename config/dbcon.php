<?php 

    //connection to dataBase

    ob_start(); // Enable us to use Headers

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "user_register_login";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
    
  
?>
