<?php
    $server = "localhost";
    $user = "root";
    $password = "password";
    $db = "project";

    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die("Connection Failed ". mysqli_connect_error());
    }
?>