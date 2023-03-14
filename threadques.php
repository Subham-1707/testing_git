<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="forum-css/style.css">
    <title>Welcome to iDiscuss - Coding Forums</title>
   
</head>

<body style="background-color: #FBEEC1;">
    <?php include 'partials/_dbconnection.php'?>
    <?php include 'partials/_header.php'?>
    

    <?php
       $id= $_GET['threadid'];
       $sql="SELECT * FROM threads WHERE  thread_id=$id";
       $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($result))
       {
          $title=$row['thread_title'];
          $desc=$row['thread_desc'];
          $thread_user_id=$row['thread_user_id'];
       }
                  $sql2="SELECT username FROM `users` WHERE sno= '$thread_user_id' ";
                  $result2=mysqli_query($conn,$sql2);
                  $row2=mysqli_fetch_assoc($result2);
                  $posted_by=$row2['username'];
    ?>
  
       <?php 
    $showAlert=false;
     $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST')
     {
       //insert into comment db
         $comment= $_POST['comment'];
         $comment= str_replace("<","&lt;", $comment);
         $comment= str_replace(">","&gt;", $comment);

         $sno= $_POST['sno'];
         
$sql= "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '$sno', current_timestamp())";
         $result=mysqli_query($conn,$sql);
          $showAlert=true;
     }
     if($showAlert){
                   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your comment has been added!
                    <button type="button" id="myBtn" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true">×</span>
            
        </button>
   
      </div>'; 
             }
   ?>

     <div class="container my-4 " style="width:70%;" >
        
        <div class="jumbotron">
          <h3 > <?php echo $title ?></h3>
          <p class="lead"> <?php echo $desc ?> <p>
          <hr class="my-4">
          <p>This is the peer to peer forum where you can share your knowledge.<br>No Spam / Advertising / Self-promote in the forums is not allowed.
            Do not post copyright-infringing material.
            Do not post “offensive” posts, links or images. 
           
        </p>
         <p>Posted by <b><?php echo ucfirst($posted_by) ?></b> .</p>
        </div>
        
     </div> 
      <!-- Post Comment -->

         <?php  
           if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true)
            {
             echo '<div class="container" style="width:70%;">
                   
                        <form action=" '.$_SERVER['REQUEST_URI'].' " method="post">
                        
                             <h2>Post Comment:</h2>
                             <hr>
                            <div class="form-group">
                                <label for="desc"><b>Type your Comments:</b></label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                <input type="hidden" name="sno" value="'.$_SESSION["sno"].'"> 
                              </div>
                          <button type="submit" class="btn btn-success">Post</button>
                      </form>
             </div>';
      }
    
         else{
                echo '<div class="container"  style="width:70%;">
                         <h2>Post Comment:</h2>
                         <h5 class="font-weight-bold" style="color:red">You are not loggedin!Please login first</h5>
                      </div>';
         }
     ?>  
             <br>

       <div class="container"  id="ques" style="width:70%;">
           <h2 >Discussion:</h2>
           <hr>

           <?php
               $id= $_GET['threadid'];
               $sql="SELECT * FROM `comments` WHERE `thread_id`=$id";
               $result=mysqli_query($conn,$sql);
               $noResult=true;
               while($row=mysqli_fetch_assoc($result))
               {
                  $noResult=false;
                  $id=$row['comment_id'];
                  $content=$row['comment_content'];
                  $commentTime = date_create($row['comment_time']);
                  $thread_user_id=$row['comment_by'];

                  $sql2="SELECT username FROM `users` WHERE sno= '$thread_user_id' ";
                  $result2=mysqli_query($conn,$sql2);
                  $row2=mysqli_fetch_assoc($result2);
                
                 
                   echo '<div class="container">
                <img src="media/profileMan.png" width="60px" class="mr-3" alt="...">
                  <span class="font-weight-bold" style="color:green">'.'commented by '.$row2["username"].' at '.date_format($commentTime, " d-m-Y g:i A").'</span>

                 
                <p style="margin-left:70px;">'.$content.'</p>
                    
                 
                  
                </div><hr>';
            
          
                   }
                        
                 if($noResult)
                 {
                       echo'<div class="jumbotron jumbotron-fluid " >
                  <div class="container" >
                    <p class="display-4">No Result Found</p>
                    <p class="lead">Be a first user please ask the question</p>
                  </div>
                </div>';
                 }  
 
            ?> 
        </div>
       
    <?php include 'partials/_footer.php'?>
          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>


