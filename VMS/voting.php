<?php
session_start();
include'config.php';
$votes=$_POST['groupvote'];
$totalvotes = $votes+1;

$gid=$_POST['groupid'];
$uid = $_SESSION['id'];

$updatevotes = mysqli_query($conn,"update userdata set votes='$totalvotes' where id='$gid'");

$updatestatus = mysqli_query($conn,"update userdata set status=1 where id='$uid '");

if($updatevotes and $updatestatus){
$getgroup = mysqli_query($conn,"select username,image,votes,id from userdata where standred='group'");

$groups = mysqli_fetch_all($getgroup,MYSQLI_ASSOC);
$_SESSION['groups'] = $groups;
$_SESSION['status'] = 1;

echo'<script>
    alert("voted succussfully");
    window.location="partial/dashboard.php";
    </script>';

}else{
    echo'<script>
    alert("error !!  vote after some time");
    window.location="partial/dashboard.php";
    </script>';

}
?>