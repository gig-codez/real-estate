<?php
include "includes/connect.php";
if (isset($_POST["submit"])) {
        $update_id = $_POST['up_id'];
        $owner = $_POST['owner'];
        $loc = $_POST['locat'];
        $status = $_POST['stat'];
        $type = $_POST['type'];

        $update = "UPDATE property SET prop_owner='$owner' location='$loc' Status='$status' property_type='$type' WHERE id='$update_id'";

        $qy = mysqli_query($conn,$update);
        mysqli_close($conn);
        // header("location : propertymanagement.php");
        echo "<a href='./propertymanagement.php'>Continue</a>";
  }
?>