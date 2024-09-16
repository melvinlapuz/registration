<?php
SESSION_START();
include 'plugin.php';
$_SESSION['status'] = "not login";
?>

<div class="container" style="margin-top: 32vh; margin-left: 22vw;">
  <h2>Login</h2>
 
    <div class="form-group">
    <form method="POST" action="config/LoginAuth.php">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="Email" placeholder="Enter email" name="Email">
      </div>
    </div>
    <div class="form-group mb-2">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password">
      </div>
    </div>
    <div style="color: red;">
   <?php 
   
   if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
   }
   ?>
   <div style="color: green;">
   <?php
   if(isset( $_SESSION['message'])){
    echo$_SESSION['message'];
    unset($_SESSION['message']);
   }
   ?>
   </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        <button type="submit" formaction="Registration.php" class="btn btn-secondary mt-2">Registration</button>
        </form>
      </div>
    </div>
</div>
