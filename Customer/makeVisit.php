<?php
session_start();
if (isset($_POST['submit'])) {
	# 
	include"../includes/common.php";

		$client = $_SESSION["client"];
		$property = $_POST['property'];
		$time = $_POST['time'];
		$date = $_POST['date'];
		
		$visitQuery = "INSERT INTO visits (`Client`,`Property`,`Time`,`Date`)VALUES('$client','$property','$time','$date');";
		mysqli_query($conn,$visitQuery);
		mysqli_close($conn);

        header("location: menu.php");
}
?>