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
  <body style="background:#DAF7A6">
  <section style="background:#24F4CE">
 <pre> <h1 class="text-center text-warning p-3">V o t i n g  - S y s t e m</h1></pre>
  </section>
  <div class="container"><div class="row">
    <div class="col-md-4"><img src="../upload/1c3c0549e7f06deac938187e527c2192.gif" alt="" height="400px" width="400px"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4 p-3 text-center" style="background:#581845">
        <form action="../reg.php" method="POST" enctype="multipart/form-data">
            <h2 class="text-center text-white p-3">Register Account</h2>
            <div class="mb-3 form-group" >
                <input type="text" name="username" placeholder="Enter your Username" class="form-control" Required>
            </div>
            <div class="mb-3 form-group" >
                <input type="text" name="mobile" placeholder="Enter your Mobile Number" class="form-control" Required maxilength="10" minlength="10">
            </div>
            <div class="mb-3 form-group" >
                <input type="text" name="password" placeholder="Enter Password" class="form-control" Required maxilength="5" minlength="5">
            </div>
            <div class="mb-3 form-group" >
                <input type="text" name="cpassword" placeholder="Confirm Password" class="form-control" Required maxilength="5" minlength="5">
            </div>
            <div class="mb-3 form-group" >
                <input type="file" name="image" placeholder="Upload Image" class="form-control" Required >
            </div>
            <div class="mb-3 ">
                <select name="std" class=" form-control form-select" >
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            </div>
            <input class="btn btn-info" type="submit" name="submit" value="Register">
            <p>Already have an account? <a href="../index.php" class="text-light">Login here</a></p>
        </form>
    </div>
  </div></div><br>
  

        
  <section style="background:#24F4CE">
 <pre> <h1 class="text-center text-warning p-3">THANK YOU</h1></pre>
  </section>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>
