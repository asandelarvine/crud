<?php

$serverName   = "localhost";
$userName     = "root";
$password     = "password";
$databaseName = "steve";


$conn=mysqli_connect($serverName,$userName,$password,$databaseName);

    if(!$conn){
        echo"not connected!!";
    // }else{
    //     echo"connected";
    }