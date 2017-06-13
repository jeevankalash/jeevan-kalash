<?php

$host= "localhost";
$username= "root";
$password="";
$database= "jeevankalash";

$connect= mysqli_connect($host, $username, $password, $database);

if($connect){
	echo "connected"."<br>";
}
else{
	echo "not connected!!"."<br>";
	die;
}
?>