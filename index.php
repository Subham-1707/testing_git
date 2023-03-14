<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="forum-css/style.css">
    <link rel="icon"  href="media/logo">
    <title>Welcome to iDiscuss - Coding Forums</title>
   
</head>

<body  style="background-color: #FBEEC1;">
    <?php include 'partials/_dbconnection.php'?>
    <?php include 'partials/_header.php'?>
    
   <!-- slider start here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/s1.jpg" class="d-block w-100 slideh" alt="...">
    </div>
    <div class="carousel-item">
      <img src="media/s2.jpg" class="d-block w-100 slideh" alt="...">
    </div>
    <div class="carousel-item">
      <!--  <img src="https://source.unsplash.com/1600x400/?computer,programing" class="d-block w-100" alt="...">  -->
  <img src="media/s3.png" class="d-block w-100 slideh"   alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- category container start here -->
   <h2 class="text-center">iDiscuss-Browse Category</h2>
     <div class="container">
        
         <div class="row my-4">
           <!-- fetch all the category -->
           <!-- use  loop to iterate categories -->
              <?php
                 $sql="SELECT * FROM `categories` ";
                 $result=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_assoc($result))
                 {
                    $id=$row['category_id'];
                    $catname=$row['category_name'];
                    $desc=$row['category_discription'];
                    echo '<div class="col-md-4 my-2">
            <div class="card" style="width: 18rem;">
                <img src="media/c'.$id.'.jpg" class="card-img-top" alt="something is wrong in img" >
                      <div class="card-body">
                        <h5 class="card-title"><a href="threads.php?catid='.$id.'">'.$catname.'</a></h5>
                        <p class="card-text">'.substr($desc,0,100).'...</p>
                            <a href="threads.php?catid='.$id.'" class="btn btn-primary">view threads</a>
                      </div>
                 </div>
             </div>';
                 }
              ?>
            
            
         </div>
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