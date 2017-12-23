<?php
include 'constants.php';
$host    = host;
$user    = user;
$pass    = pass;
$dbname  = dbname;

$con = mysqli_connect($host,$user,$pass,$dbname);
define('ROOTPATH', __DIR__);



function validate($value)
{
    return $value;
}


// if($con){
//     echo 'Connection Successfull';
// } else {
//     echo 'Connection Failed';
// }