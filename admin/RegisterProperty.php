<?php
  include_once "includes/connect.php";
if (isset($_POST["submit"])) {
  # code...

  $propertyName = $_POST['propertyname'];
  $propertyOwner =$_POST['propertyowner'];
  $propertyLocation = $_POST['propertylocation'];
  $propertyStatus = $_POST['propertystatus'];
  $propertyType = $_POST['propertytype'];

  $sql = "INSERT INTO `property` (`prop_name`,`prop_owner`,`location`,`Status`,`property_type`)VALUES('$propertyName','$propertyOwner','$propertyLocation','$propertyStatus','$propertyType');"; 
  mysqli_query($conn,$sql);
  mysqli_close($conn);

  echo "<script>alert('$propertyName has been registered sucessfully...');</script>";
}
?>