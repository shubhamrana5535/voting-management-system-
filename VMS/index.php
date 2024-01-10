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
    <div class="col-md-6 p-3 text-center" style="background:#9FE2BF">
        <form action="login.php" method="POST">
            <h2 class="text-center text-light bg-danger p-3">Login</h2>
            <div class="mb-3 form-group" >
                <input type="text" name="username" placeholder="Enter Username" class="form-control" Required>
            </div>
            <div class="mb-3 form-group" >
                <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" Required maxilength="10" minlength="10">
            </div>
            <div class="mb-3 form-group" >
                <input type="text" name="password" placeholder="Enter Password" class="form-control" Required maxilength="5" minlength="5">
            </div>
            <div class="mb-3 ">
                <select name="std" class=" form-control form-select" >
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="submit">
           <p>Donot have any account? <a href="./partial/register.php "class="text-success">Register here</a></p>
        </form>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4"><img src="upload/happy-election-day-election-day.gif" alt="" height="400px" width="300px"></div>
  </div></div><br>
  
  <section style="background:#24F4CE">
 <pre> <h1 class="text-center text-warning p-3">THANK YOU</h1></pre>
  </section>
  
        
    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>