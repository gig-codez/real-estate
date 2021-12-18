
<?php
	session_start();

	if (isset($_SESSION["customer"])){ 
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title> -->
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css">
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
  <a href="./includes/logout.php">Logout</a>
</div>
<div class="content">
  <h1 class="header1">Real Estates Company Management Site.</h1>
  <p>"Are you looking for a property for buying, renting or do you have any property for sale. Dont be faked we are the best dealeres when it comes to property management." </p>
</div>
<!-- </body>
</html> -->


<?php 
	} else {
		header("location : customerlogin.php");
	}
?>