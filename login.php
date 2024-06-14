
<?php 
	include"header.php";
?>
<style>
   /*login css*/
 
   .form-horizontal.bg-info {
  margin-top: 10%;
  margin-inline: 30%;
  padding: 10px;
}

 
</style>
<body background="images/school.jpg">
    <div class="container">
        
        <form action="login_check.php" method="POST" class="form-horizontal bg-info" style="border-radius: 40px;padding-left: 40px;">
          <div class="form-group">
          <h2 class="text-center">Login Form</h2>
          <h4>
          <?php 
          //error_reporting(0);
          session_start();// session managed
          if (isset($_SESSION['loginMessage'])) {
              echo $_SESSION['loginMessage'];
              unset($_SESSION['loginMessage']); // Clear the session message
          }
           ?>
          </h4>
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
              
              
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"required>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                
              </div>
            </div>
          </div>
         
        </form>
      </div>
      <!-- Courses -->
  
 
   

