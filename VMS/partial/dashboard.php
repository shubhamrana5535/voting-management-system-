<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location:../index.php');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
  $status='<b class="text-success">Voted</b>';

}else{
  $status='<b class="text-danger"> Not Voted</b>';
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link  rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body style="background:#CABCC3">
  <div class="container my-5">
  <pre class="bg-info text-warning text-center p-2 m-0">
	 <a href="../index.php" class="btn btn-success " style="float:left"> Back</a><a href="logout.php" class="btn btn-danger " style="float:right"> Logout</a> </pre>
	 
  <h1 class="p-3 m-3">Voting System</h1>
  <div class="row">
    <div class="col-md-7">
      <?php
    if(isset($_SESSION['group'])){
      $group = $_SESSION['group'];
      for($i=0;$i<count($group);$i++){
        ?>
        <div class="row">
        <div class="col-md-4">
          <img src="../upload/<?php echo $group[$i]['image'];?>" alt="image" height="150px" width="150px">
        </div>
        <div class="col-md-8">
          <strong class="text-dark h-5 p-2">Group Name:-</strong>
          <?php echo $group[$i]['username'];?><br>
          <strong class="text-dark h-5 p-2">Votes:-</strong>
          <?php echo $group[$i]['votes'];?><br>
        </div>
      </div>
      <br>
      <form action="../voting.php" method="POST">
        <input type="hidden" name="groupvote" value="<?php echo $group[$i]['votes'];?>">

        <input type="hidden" name="groupid" value="<?php echo $group[$i]['id'];?>">
        <?php
        if($_SESSION['status']==1){
          ?>
          <button class="btn btn-success p-3">voted</button><br>
          <?php
        }else{
          ?>
          <button class="btn btn-danger p-3" type="submit">vote</button><br>
          <?php
        }


        ?>

      </form>
      <hr><br>
      <?php
      }
    }else{
      ?>
      <div class="container"><p>No group to display</p></div>
      <?php
    }
    ?>
	
      
	  
    </div>
    
    <div class="col-md-5 ">
      <img class="p-2" src="../upload/<?php echo $data['image'];?>" height="90px" width="90px" alt="user"><br>
      <strong class="text-dark h-5 p-2">Name:-</strong><?php echo $data['username'];?><br>
      <strong class="text-dark h-5 p-2">Mobile:-</strong><?php echo $data['mobile'];?><br>
      <strong class="text-dark h-5 p-2">Status:-</strong><?php echo $status;?><br>
    </div>
  </div>

  </div>
  
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>