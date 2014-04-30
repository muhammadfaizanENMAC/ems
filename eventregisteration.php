<?php
session_start();
require"db.php";

if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["username"]) === 0){
$errName = '<p class="errText">Name must be from letters, dashes, spaces and must not start with dash</p>';}
else{
	$username = $_POST["username"];
}

if(preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0){
$errEmail = '<p class="errText">Email must comply with this mask: chars(.chars)@chars(.chars).chars(2-4)</p>';}else{
$email = $_POST["email"];
}


if(preg_match("/^d{1}-d{3}-d{3}-d{4}$/", $_POST["contactnumber"]) === 0){
$errPhone = '<p class="errText">Phone must comply with this mask: 1-333-333-4444</p>';}else{
$contactnumber = $_POST["contactnumber"];	
}
	
if(isset($_POST['submit']) &&(!empty($_POST['date']) )&&(!empty($_POST['eventtype']) ) &&(!empty($_POST['username']) )&&(!empty($_POST['contactnumber']) )){
	;
	$event = $_POST['eventtype'];
$date = $_POST['date'];
$email = $_POST["email"];
$contactnumber = $_POST["contactnumber"];
	$username = $_POST["username"];
		
			
	$sql = "INSERT INTO eventregistration ".
       "(eventtype,email, contactnumber,date, username) ".
       "VALUES ".
       "('$event','$email','$contactnumber' , '".$date."' , '$username')";

  $result = mysql_query($sql);
	if($result){
	die("value inserted");
	}else{
	die("not inserted");	
	}
	
	
	
}else{
header("location:registeration.php");	
}



?>