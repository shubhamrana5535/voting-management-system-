<?php
$servername="localhost";
$username="root";
$password="";
$db="vms";

$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	
	
}
?>
