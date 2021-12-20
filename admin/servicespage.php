<?php include "includes/header.php";
   session_start();
?>

  <style>
    body{
        background-image: url("images/serve.png");
    background-size: 400px;
  background-repeat: no-repeat;
  background-position: center;
  background-position:500px;

    }
  </style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Service Page</a>
  <a href="propertymanagement.php">Property Management</a>
  <a href="#">View Pending Visits</a>
  <a href="#contact">Report Section</a>
  <a href="./home.php">Back to Home</a>
</div>
<div class="content">
  <h1 class="header1">Real Estates Service Page</h1>
    <div>
    <p style="float: right; margin-top:-68px; font-size: 18px;"><?php echo $_SESSION['user']?></p>

  </div>

</div>
</body>
</html>