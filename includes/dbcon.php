<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname =   "wbcgs";

    $connection = mysqli_connect($server, $username, $password, $dbname);
    
    if(!$connection){
        echo "Awaiting Resoources";
        }
       // echo "Successful";
    
?>