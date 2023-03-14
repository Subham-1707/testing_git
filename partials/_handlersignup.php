<?php 
 $showAlert=false;
 $showErr=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      	include '_dbconnection.php';
      	        $username=$_POST['username'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];

                $email=$_POST['email'];
                $mobile=$_POST['mobile'];

                $exitsql="SELECT * from `users` where `username`='$username'";
                $result=mysqli_query($conn,$exitsql);
                $numrow=mysqli_num_rows($result);
                if ($numrow>0) {
                   $showErr="Username is already exit";
                 }
               else{

                if ($password==$cpassword)  {
                    $hash=password_hash($password, PASSWORD_DEFAULT);
                    $sql="INSERT INTO `users`( `username`, `password`, `email`, `mobileNo`, `date`) 
                    VALUES ('$username', '$hash', '$email', $mobile, current_timestamp())";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        $showAlert=true;
                        header("Location: /iForum/index.php?signupsuccess=true");
                        exit();
                    }
        
                    }
                      else{
                                
                           $showErr="Password do not match";
                             
                         }
  
               }
               header("Location: /iForum/index.php?signupsuccess=false&error=$showErr");

  }

?>


