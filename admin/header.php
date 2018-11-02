<?php session_start();

if (!isset($_SESSION['user'])) {
  echo "<script> window.location.assign('login.php')</script>";
}
require_once'mywork/mywork.php';
$obj = new khan();
 ?>
 
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
      <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p> Wellcome to <?php echo ucfirst($_SESSION['user']); ?></p>
      <a href="dashboard.php" class="btn btn-primary">Home</a>
      <a href="cat.php" class="btn btn-primary ">Categories</a>
      <a href="pro.php" class="btn btn-primary ">Products</a>
      <a href="logout.php" class="btn btn-danger pull-right">Logout</a>    
    </div>