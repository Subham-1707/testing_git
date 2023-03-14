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
       $id= $_GET['catid'];
       $sql="SELECT * FROM categories WHERE  category_id=$id";
       $result=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($result))
       {
          $catname=$row['category_name'];
          $desc=$row['category_discription'];
       }
    ?>
  
   <?php 
    $showAlert=false;
     $method=$_SERVER['REQUEST_METHOD'];
     if($method=='POST')
     {
       //insert into thread into db
         $th_title= $_POST['title'];
         $th_desc= $_POST['desc'];

          $th_title= str_replace("<","&lt;", $th_title);
         $th_title= str_replace(">","&gt;", $th_title);

          $th_desc= str_replace("<","&lt;", $th_desc);
         $th_desc= str_replace(">","&gt;", $th_desc);

         $sno= $_POST['sno'];
         $sql= "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', ' $th_desc ', '$id', '$sno', current_timestamp());";
         $result=mysqli_query($conn,$sql);
          $showAlert=true;
     }
     if($showAlert){
                   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your thread has been added!Please wait for the community respond.
                    <button type="button" id="myBtn" class="close" data-dismiss="alert" aria-label="Close" >
                        <span aria-hidden="true">×</span>
            
        </button>
   
      </div>'; 
             }
   ?>

     <div class="container my-4 " style="width:70%;" >
        
        <div class="jumbotron">
          <h1 class="display-4">Welcome to <?php echo $catname ?> forum!</h1>
          <p class="lead"> <?php echo $desc ?> <p>
          <hr class="my-4">
          <p>This is the peer to peer forum where you can share your knowledge.<br>No Spam / Advertising / Self-promote in the forums is not allowed.
            Do not post copyright-infringing material.
            Do not post “offensive” posts, links or images. 
            Do not cross post questions. 
            Do not PM users asking for help.
        </p>
          <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
             </div>

               <!-- start Discussion -->
          <?php  
           if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true)
            {
             echo '<div class="container my-4 " style="width:70%;" >
               <form action=" '.$_SERVER["REQUEST_URI"].' " method="post">
              <div class="form-group">
                 <h2>Start Discussion:</h2>
                <label for="title"><b>Problem Title:</b></label>
                <input type="text" class="form-control" id="title" name="title"  aria-describedby="emailHelp" placeholder="Enter Title">
                <small id="emailHelp" class="form-text text-muted">keep your title short and crisp as possible</small>
              </div>
               <input type="hidden" name="sno" value="'.$_SESSION["sno"].'"> 
                <div class="form-group">
                    <label for="desc"><b>Ellaborate your concern:</b></label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                  </div>
              <button type="submit" class="btn btn-success">Submit</button>
           </form>
        </div>';
      }
    
         else{
                echo '<div class="container"  style="width:70%;">
                         <h2>Start Discussion:</h2>
                         <h5 class="font-weight-bold" style="color:red">You are not loggedin!Please login first</h5>
                      </div>';
         }
     ?> 

       <div class="container"  style="width:70%;">
           <h2>Browse Question:</h2>
           <hr>
           <?php
               $id= $_GET['catid'];
               $sql="SELECT * FROM `threads` WHERE `thread_cat_id`=$id";
               $result=mysqli_query($conn,$sql);
               $noResult=true;
               while($row=mysqli_fetch_assoc($result))
               {
                  $noResult=false;
                  $id=$row['thread_id'];
                  $title=$row['thread_title'];
                  $desc=$row['thread_desc'];
                  $thread_user_id=$row['thread_user_id'];
            
                   $thread_time = date_create($row['timestamp']);
            
                  $sql2="SELECT username FROM `users` WHERE sno= '$thread_user_id' ";
                  $result2=mysqli_query($conn,$sql2);
                  $row2=mysqli_fetch_assoc($result2);
                  

          echo '<div class="container">

                  <img src="media/profileMan.png" width="60px" class="mr-3" alt="...">
                  <span class="font-weight-bold" style="color:green">'.'Asked by '.$row2["username"].' at '.date_format($thread_time, " d-m-Y g:i A").'</span>

                 
                  <h5><a class="text-dark" href="threadques.php?threadid='.$id.'">'.$title.'</a></h5>
                
             
  
                    <p style="display:inline;">'.$desc.'</p>
                 
                  
                </div><hr>';
         }
 
                 
            
        //'<p class="font-weight-bold ">'.$row2["username"].' at '.date_format($thread_time, " d-m-Y g:i A");
         //<h5 class="font-weight-bold></h5>
                   
           

               

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

            
              <!--   <div class="media my-3">
                  <img src="media/profileMan.png" width="60px" class="mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0">How to setup path for java?</h5>
                    <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                  </div>
                </div> -->
                
      

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