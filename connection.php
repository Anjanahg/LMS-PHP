<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'lmsphp';

// Creating Connection
$connection = mysqli_connect('localhost', 'root', '', 'lmsphp');

//Checking connection
if (mysqli_connect_error()){
    die('Database connection failed'. mysqli_connect_error());
//}else{
  //  echo "Connection Successful.";
    
}


?> 
