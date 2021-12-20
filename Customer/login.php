<?php

   session_start();
   include("../includes/common.php");

   $email = $_POST["username"];

   $password = $_POST["passcode"];

   $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
   $query = mysqli_query($conn,$sql);

   if($query){
      $_SESSION["customer"] = $email;

      if(mysqli_num_rows($query) < 1){
         header('location: customerlogin.php');
      }else{
        
      }
   }
   header('location: menu.php');  
   mysqli_close($conn);

?>