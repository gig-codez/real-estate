<?php 
session_start();
include_once("includes/common.php");

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $location = $_POST['location'];


    $sql = "INSERT INTO `users` (`username`,`location`,`password`)VALUES('$username','$password','$location');";
    $query = mysqli_query($conn, $sql);
    if($query){
        $_SESSION["username"] = $username;
        header('location: customermenu.php');
    }else{
      echo "Error".mysqli_connect_error($conn);

    }
} else {
    # code...
}
?>