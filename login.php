<?php

   include("includes/common.php");
   session_start();
   $email = $_POST["username"];

   $password = $_POST["passcode"];

   $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
   $query = mysqli_query($conn,$sql);

   if($query){
      if(mysqli_num_rows($query) < 1){
         echo "Not found" ;
      }else{
         $_SESSION["customer"] = $email;
         header("location: customermenu.php");
         //  echo "You are logged in" ;
      }
   }
   header('location: index.php');
   mysqli_close($conn);

?>