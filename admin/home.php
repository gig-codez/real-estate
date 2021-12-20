<?php include "includes/header.php";?>

<?php
    session_start();
     if(isset($_SESSION["user"])){
?>
	<style >
		body{
			 	background-image: url("../images/gome.png");
    background-size: 650px
	background-repeat: no-repeat;
	background-position: center;
		}
	</style>
</head>
<body>

<div class="sidebar">

  <a class="active" href="#home">Admin Menu</a>
  <a href="servicespage.php">Services</a>
  <a href="#contact">About Us</a>
  <a href="#about">Contact</a>
  <a href="logout.php">Logout</a>
</div>


<div class="content">

  <h1 class="header1">Real Estates Company Management Site.</h1>
  <p>"Are you looking for a property for buying, renting or do you have any property for sale. Dont be faked we are the best dealeres when it comes to property management." </p>
</div>

</body>
</html>
<?php }else{
	header("location: index.php");
} ?>