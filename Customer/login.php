<?php

   include("../includes/common.php");
   session_start();
   $email = $_POST["username"];

   $password = $_POST["passcode"];

   $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
   $query = mysqli_query($conn,$sql);

   if($query){
      if(mysqli_num_rows($query) < 1){
         header('location: customerlogin.php');
      }else{
         $_SESSION["customer"] = $email;
      }
   }
   header('location: menu.php');
   mysqli_close($conn);

?>