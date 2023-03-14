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
    <style >
    	#maincontainer{
    		min-height: 100vh;
    	}
    </style>
</head>

<body style="background-color: #FBEEC1;">
    <?php include 'partials/_dbconnection.php'?>
    <?php include 'partials/_header.php'?>


         <!-- search result -->
         <div class="container my-4 " id="maincontainer" style="width:70%;" >
         	<div class="searhResult">
        	<h1>serach result for <em>"<?php echo $_GET['query'] ?>"</em></h1>
             <hr style="height:3px;border:none;background-color:#3d403d;" >
               <?php 
               $noResult=true;
               $query=$_GET['query'] ;
               $sql="SELECT * FROM `threads` WHERE MATCH(thread_title,thread_desc) against('$query')";
               $result=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_assoc($result))
               {
                  
                  $id=$row['thread_id'];
                  $title=$row['thread_title'];
                  $desc=$row['thread_desc'];
                  $url="threadques.php?threadid=". $id;

                  $noResult=false;
                  //Display the Search Result
                 echo' <div class="result">
			        	    <h3><a href="'.$url.'" class="text-dark">'.$title.'</a></h3>
			        	   <p>'.$desc .'</p>
        	          </div>';

              }

               if($noResult)
               {
               	 echo'<div class="jumbotron  ">
					  <div class="container">
					    <p class="display-4">No Result Found</p>
					    <p class="lead">Suggestion:<ul>
                          <li>specify the keyword simply</li>
                          <li>Make sure keyword must be different</li>
                          <li>Try more general word</li>
					    </ul></p>
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

