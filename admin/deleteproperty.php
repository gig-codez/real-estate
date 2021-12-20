<?php

include("includes/connect.php");

if (isset($_POST["submit"])) {
    # code...
    $id = $_POST["del"];

    $delete = "DELETE FROM property WHERE id='$id'";
   $query =  mysqli_query($conn, $delete);
   if($query){
    // header("location : propertymanagement.php");
   }
    mysqli_close($conn);
   
    
}
?>