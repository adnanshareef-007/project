<?php
    $servername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="banking";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $$dbname);
     
    if (!$conn){
        die("Connection Failed: " .mysqli_connect_error());
    }