<?php 
echo "loging you out Please wait...";
  session_start();
  session_unset();
  session_destroy();
  header("location: /iForum");
  exit();
?>