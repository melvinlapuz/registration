<?php
 include 'plugin.php';
?>

<div class="container" style="margin-top: 30vh; margin-left: 20vw;">
  <h2>Registration</h2>
 
    <div class="form-group">
    <form method="POST" action="config/addUser.php">
      <label class="control-label col-sm-2">Fullname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Fullname" placeholder="Enter Fullname" name="Fullname" required>
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Age" placeholder="Enter Age" name="Age" required>
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
</div>
