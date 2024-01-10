<?php
include'config.php';
if(isset($_POST['submit'])){
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";
	
	$username = $_POST['username'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	
	$image = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	
	   $std = $_POST['std'];
	   if($password!=$cpassword){
		   echo'<script>
		   alert("passward not macth");
		   window.location="partial/register.php";
		   </script>';
	   }else{
		move_uploaded_file($tmp_name,"upload/".$image);
	   
	
	$sql = "INSERT INTO userdata(username,mobile,password,image,standred,status,votes)
			VALUES('".$username."','".$mobile."','".$password."','".$image."','".$std."',0,0)";
			
			$result = mysqli_query($conn,$sql);
			if($result){
				 echo '<script>
		   alert("registration succesfull");
		   window.location="index.php";
		   </script>';
		   
				
			
}
	   }
	   $conn->close();
}


?>