<?php
	// session_start();
	include"../includes/common.php";
 ?>
	<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css"/>
	<?php
	// if (isset($_SESSION["customer"])){
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
  <a href="#contact">About Us</a>
  <a href="#about">Contact</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
  <h1 class="header1">Real Estates Company Management Site.</h1>
  <p>"Are you looking for a property for buying, renting or do you have any property for sale. Dont be faked we are the best dealeres when it comes to property management." </p>
 		    <form action="" method="post">
			 <input type="text" name="client"/>
			<select>
				<option>Choose a property</option>
				<?php include_once ("displayProperty.php");?>
	       </select>  

			 <input type="time" name="time" />
			<input type="date" name="date"/>
		<input type="submit" name="submit" value="Book"/>
		</form>
</div>

	
</body>
</html>


<?php 
	// } else {
	// 	header("location : customerlogin.php");
	// }
?>