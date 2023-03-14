<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="forum-css/style.css"> -->
    <link rel="stylesheet"  href="forum-css/contact.css">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style >
        .container{
            min-height: 50vh;
           
            top: 100px;
        }
        body{
            background-color: orange;
         }
         h2{
            text-align: center;
             text-shadow: 2px 2px 2px darkred;
         }

    </style>
</head>

<body>
    <?php include 'partials/_header.php'?>
       
       <!-- jumbotron -->
       
              <div class="container my-4" style="margin-top: 0;">
               <h2 class="display-4" >Contact us</h2>
               <hr style="height:3px;border:none;background-color:#3d403d;">
               
                <p class="font-italic">Contact details of Subhamcode Software Services Pvt. Ltd.  Our team is always ready to provide servies. conatct us by given below details</p>
<hr class="my-4">
  <div class="container">
  <div class="row">
    <div class="col-sm">
     <div class="card" style="width: 20rem;">
  <div class="card-header">
    Official Address
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">2 nd. Floor, street-25,</li>
    <li class="list-group-item">Near Patel chowk, sector-9C</li>
    <li class="list-group-item">Bpkaro -827009 , Jharkhand</li>
  </ul>
</div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 20rem; ">
  <div class="card-header">
    Call Details
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">For Sales - 938680600</li>
    <li class="list-group-item">For HR / Accounts - 8969979999</li>
    <li class="list-group-item">For Technical Support - 9546286767</li>
  </ul>
</div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 20rem;">
  <div class="card-header">
   Email Us
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">info@subhamcodess.com</li>
    <li class="list-group-item">hr@subhamcodess.com</li>
    <li class="list-group-item">support@subhamcodess.com</li>
  </ul>
</div>
    </div>
  </div>
 <hr>
<!-- contact body -->
       <div class="container my-4 " style=" width: 40%; border: 1px solid darkslategrey;   box-shadow: 5px 5px 3px gray;">
      
        <h3 class="display-10 text-center font-weight-normal">Fill form & contact us</h3><hr>
           <form action="index.php" method="post" class="py-2">

    <i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
    <label for="fname"> Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
    <label for="lname">Email:</label>
    <input type="email" id="lname" name="email" placeholder="Your last name..">

    <i class="fa fa-globe fa-lg" aria-hidden="true"></i>
    <label for="country">Country:</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

     <i class="fa fa-keyboard-o fa-lg" aria-hidden="true"></i>
    <label for="subject">Subject:</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

     <button type="submit" class="btn btn-success container-fluid">Submit</button>

  </form>
 
</div>

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