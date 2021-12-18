<?php
   $conn = mysqli_connect("localhost","root","","rental");
   if(!$conn) {
        die("Error".mysqli_error($conn));
   }else{
       echo ("Connected \n");
}
?>