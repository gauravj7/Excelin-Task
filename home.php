<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style media="screen">
    body {
      background: url("nature.jpg");
      height: 100%;
      background-size: cover;

    }
    </style>
  </head>
  <body >
    <div class="container">
      <a class="float-right" href="logout.php">Logout</a>
      <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    </div>

  </body>
</html>
