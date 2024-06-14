
<?php 
	include"header.php";
?>
<style>
   /*login css*/
 
   .form-horizontal.bg-info {
  margin-top: 15%;
  margin-inline: 30%;
  padding: 10px;
}

textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: vertical; /* Allows vertical resizing */
}
 
</style>
<body background="images/school.jpg">
<div class="container">
  
  <form action="data_check.php" method="POST" class="form-horizontal bg-info"style="color:white;border-radius:5%;padding-left:50px;padding-top:25px;">
  <h2 class="text-center"style="color:white" >Contact Form</h2>
      
        <?php
            error_reporting(0);
            session_start();

            if(isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                echo "<h4 class='text-center text-warning'>Successful ! Thank you for your message!</h4>";
                // Unset the session variable if you want to clear it after displaying the message.
                unset($_SESSION['message']);
            }
            ?>

       
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone"required>
      </div>
    </div>
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10 text">
      <textarea id="message" name="message" rows="4" placeholder="Type your message here..."></textarea>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"name="sent"><h3 class="btn-info">SENT</h3></button>
        <button type="reset" class="btn btn-info"><h3 class="btn-info">Reset</h3></button>
      </div>
    </div>
	
  </form>
</div>
      <!-- Courses -->
  
 
   

