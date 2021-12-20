<?php

$propertyID = $_POST['deleteProperty'];

$deleteQuery = "DELETE FROM property WHERE id='$propertyID';";
mysqli_query($conn, $deleteQuery);
mysqli_close($conn);
echo "<script>alert('Property removed successfully..')</script>";
header("location: propertymanagement.php");
 
?>