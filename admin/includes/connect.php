<?php
   $conn = mysqli_connect("localhost","root","","rental");
   if(!$conn) {
        die("Error".mysqli_connect_error($conn));
   }else{
       echo ("Connected \n");
}
?>