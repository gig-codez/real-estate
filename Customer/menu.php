	<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css"/>
	<?php
	session_start();
	include("../includes/common.php");

	if (isset($_SESSION['client'])) {
		# code...
 ?>
	<style >
		body{
			 	background-image: url("../images/gome.png");
				background-size: 800px;
				background-repeat: no-repeat;
				background-position: center;
		}
	</style>
 </head>

<body>

<div class="sidebar">
  <a class="active" href="#home">Customer's Menu</a>
  <a href="#">Make a Field Visit</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
  <p class="header1"><?php echo $_SESSION["client"]; ?></p>
  <p>"Are you looking for a property for buying, renting or do you have any property for sale. Dont be faked we are the best dealeres when it comes to property management." </p>
  <form action="makeVisit.php" method="POST">
	  <table>
		  <tr>
			  <td>Choose Property</td>
			  <td><select name="property" style="padding:7px; width:500px;">
				<option>Choose a property</option>
				<?php include_once "displayProperty.php";?>
	        </select></td>
		  </tr>
		  <tr>
			  <td>Time Of Booking</td>
			  <td><input type="time" name="time" style="padding:7px; width:500px;"></td>
		  </tr>
		  <tr>
			  <td>Date Of Booking</td>
			  <td><input type="date" name="date" style="padding:7px; width:500px;"></td>
		  </tr>
		  <tr>
			  <td><input type="submit" name="submit" value="Book" style="padding:10px;width:120px;"></td>
		  </tr>
	  </table>
		</form>
   </div>

</body>
</html>


<?php 
	} else {
		header("location : customerlogin.php");
	}
?>