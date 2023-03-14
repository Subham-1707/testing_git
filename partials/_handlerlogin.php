<?php 
  $loginAlert=false;
 $showErr=false;
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnection.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    // $sql="select * from contacts where username='$username' AND password='$password'";
    $sql="select * from users where username='$username'";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
					                if ($num==1) {
					                        while ($row=mysqli_fetch_assoc($result)) {
					                                 
					                                 if (password_verify($password, $row['password'])) {
					                                     // code...
					                                    $loginAlert=true;
					                                     session_start();
					                                     $_SESSION['loggedin']=true;
					                                     $_SESSION['username']=$username;
					                                     $_SESSION['sno']=$row['sno'];
					                                     header("location: /iForum/index.php?loginsuccess=true");
					                                     exit();
					                                 }
					                                 else
					                                     {
					                                        $showErr="Invalid Password";
					                                     }
					                           }//end while
					                }
					                else
					                 {
					                    $showErr="Invalid username";
					                 }

             header("Location: /iForum/index.php?loginsuccess=false&error=$showErr"); 
              }

?>

