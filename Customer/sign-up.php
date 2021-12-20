<?php 
session_start();
include("../includes/common.php");

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $location = $_POST['location'];


    $sql = "INSERT INTO `users` (`username`,`password`,`location`)VALUES('$username','$password','$location');";
  
    $query = mysqli_query($conn, $sql);
    if($query){
        $_SESSION["client"] = $username;
        
        header('location: menu.php');
    }else{
      echo "Error".mysqli_connect_error($conn);
    }
} else {
    # code...
}
?>