<?php
SESSION_START();
require_once 'dbcon.php';
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$sql = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  if(strpos($Email, '@admin')){
    $_SESSION['status'] = "login";
    Header('Location: ../Admin/admin.php');
  }else{
    $_SESSION['status'] = "not login";
    Header('Location: ../students/student.php');
  }
   
}else {
  $_SESSION['error'] = "INVALID USERNAME OR PASSWORD";
  Header('Location: ../index.php');
}
$conn->close();
?>