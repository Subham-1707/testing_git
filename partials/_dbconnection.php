<?php 
   //connection to db
  $server="localhost";
  $username="root";
  $password="12345";
  $database="forum";

  $conn=mysqli_connect($server,$username,$password,$database);
  if ($conn) {
  	// echo "DB connection successfully!";
  }
  else
  {
  	die("Fail to Connect to DB ".mysqli_connect_error());
  }
?>

