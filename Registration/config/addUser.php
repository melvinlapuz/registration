<?php
SESSION_START();
require_once 'dbcon.php';

$Fullname = $_POST['Fullname'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];


$_SESSION['Access'] = "not login";
if($_SESSION['Access'] == "login"){

$sql = "INSERT INTO users (Fullname, Age, Email, Password)
VALUES ('$Fullname','$Age','$Email', '$Password')";

    if ($conn->query($sql) === TRUE) {

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    $_SESSION['message'] = "Wait for Admin approval";
    Header('Location: ../index.php');
}

$conn->close();
?>