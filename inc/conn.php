<?php
include 'constants.php';
$host    = host;
$user    = user;
$pass    = pass;
$dbname  = dbname;

$con = mysqli_connect($host,$user,$pass,$dbname);

// if($con){
//     echo 'Connection Successfull';
// } else {
//     echo 'Connection Failed';
// }