<?php include "includes/header.php";
 include_once "includes/connect.php";
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
   <b>Pending Visits</p>
    <table>
      <tr>
            <th>Client</th> 
            <th>Property</th> 
            <th>Date</th> 
            <th>Time</th> 
            <!-- <th>Location</th>  -->
      </tr>
    <?php
        $retrive = "SELECT * FROM visits";
        $query = mysqli_query($conn,$retrive);
        if (mysqli_num_rows($query)) {
          # code...
          while ($row = mysqli_fetch_assoc($query)) {
            # code...
            echo "<tr>";
            echo "<td>".$row["Client"]."</td>";
            echo "<td>".$row["Property"]."</td>";
            echo "<td>".$row["Date"]."</td>";

            echo "<td>".$row["Time"]."</td>";
            echo "</tr>";
          }

        }
    ?>
    </table>
  </div>

</div>
</body>
</html>