<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Open Chart</title>
  </head>
  <body>
    

    <div class="container">
      <h1>Hello, world!</h1>
      <div class="row">
      <div class="col-sm-5 mx-auto">        
      <!-- Default form subscription -->
      <form action="" class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4">Please Login</p>
    <!-- User Name -->
    <input type="text" id="" class="form-control mb-4" placeholder="User Name" name="txtuname" required>
    <!-- password -->
    <input type="password" name="txtupass" id="" class="form-control mb-4" placeholder="Password" required>
    <!-- Sign in button -->
    <button class="btn btn-info btn-block" type="submit" name="btnlogin">Sign in</button>
</form>
<?php
if (isset($_POST['btnlogin'])) {
  $a = $_POST['txtuname'];
  $b = $_POST['txtupass'];
  include("mywork/mywork.php");
  $obj = new khan();
 $r = $obj->Login($a,$b);  
 if($r > 0) {
   $_SESSION['user'] = $a;
   echo "<script>window.location.assign('dashboard.php')</script>";
 }
 else{
  echo "<script> alert('Sory try again');</script>";
 }
}
 ?>
      </div>
    </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>