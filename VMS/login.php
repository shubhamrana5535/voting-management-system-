<?php
session_start();
include'config.php';

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql = "SELECT* FROM userdata WHERE username='$username' AND mobile='$mobile' AND password='$password' AND standred='$std' ";

$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
	$sql="SELECT username,image,votes,id FROM userdata WHERE standred='group'";
	$result= mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$group = mysqli_fetch_all($result,MYSQLI_ASSOC);
		$_SESSION['group']=$group;
	
}
$data = mysqli_fetch_array($res);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['data']=$data;
echo'<script>
	
	window.location="partial/dashboard.php";
	</script>';
}else{
	echo'<script>
	alert("invalid data");
	window.location="index.php";
	</script>';
}

?>