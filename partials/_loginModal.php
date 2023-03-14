
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to iDiscuss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/iForum/partials/_handlerlogin.php" method="post">
      <div class="modal-body">
        
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary container-fluid">Submit</button>

             
     <p class="text-center my-1">Are you New?  <a href=" partials/<button class="btn btn-outline-success  mx-2 my-2 my-sm-0  data-toggle="modal" data-target="#signupModal" > Please Signup Here</a></p>
           
          </form>

      <!-- <button class="btn btn-outline-success  mx-2 my-2 my-sm-0 " data-toggle="modal" data-target="#signupModal" >SignUp</button> -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->

      </div>

    </div>
  </div>
</div>