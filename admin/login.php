<?php
   include_once("includes/connect.php");
//    String hhh = "";

   session_start();
if (isset($_POST["submit"])) {
    # code...

   $email = $_POST["username"];

   $password = $_POST["passcode"];

  echo $password."\n";
  echo $email."\n";
   $sql = "SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'";
   $query = mysqli_query($conn,$sql);
   if($query){
      if(mysqli_num_rows($query) < 1){
          echo "User not found \n";
      }else{
          echo "You are logged in \n";
          $_SESSION["user"] = $email;
          header("location: home.php");
        
      }
   }
   mysqli_close($conn);
}

?>