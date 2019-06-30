<?php
session_start();

$con = new mysqli("localhost", "id9969232_gauravj7", "gauravj7", "id9969232_logreg");
mysqli_select_db($con, 'id9969232_logreg');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
  $_SESSION['username'] = $name;
  header('location:home.php');
} else {
  header('location:login.php');
}

 ?>
