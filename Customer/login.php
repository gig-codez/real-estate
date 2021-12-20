<?php

   session_start();
   include("../includes/common.php");

   $email = $_POST["username"];
   $_SESSION["client"] = $_POST["username"];
   $password = $_POST["passcode"];

   $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password';";
   $query = mysqli_query($conn,$sql);
   if($query){
      if(mysqli_num_rows($query) > 1){
         header("location: menu.php");
      }
   }else{
      $error = mysqli_error($conn);
      echo "<script>alert('$error')</script>";

   }
   
   mysqli_close($conn);

?>