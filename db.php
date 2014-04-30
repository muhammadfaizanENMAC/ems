<?php


$username = "root";
$password = "";
$hostname = "localhost"; 


$dbhandle = mysql_connect($hostname, $username, $password);
 

$selected = mysql_select_db("bookingcab",$dbhandle)
 
?>