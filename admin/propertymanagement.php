<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css">
  <style>
  body{background-image:url(images/logo.png);
  background-size: 500px;
  background-repeat: no-repeat;
  background-position: center;

  }
  .input-search{
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
  }
  .input-search.active{
    visibility: visible;
    opacity: 1;
  }
  .formdisplay{
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
  }
  .formdisplay.active{
    visibility: visible;
    opacity: 1;
  }
  .deleteingproperty{
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
  }
  .deleteingproperty.active{
    visibility: visible;
    opacity: 1;

  }

  </style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Property Management Page</a>
  <p id="triggerSearch">Search a Property</p>
  <a href="#" class="registering">Add a Property </a>
  <a href="#contact" >Update a Property</a>
  <a href="#contact">Sale a Property</a>
  <a href="#contact">View sold Properties</a>
  <a href="#delete">Delete a Property</a>
  <a href="home.php">Back to Home</a>
</div>
<div class="content">
  <h1 class="header1" style="opacity: 0.5;">Property Management Page</h1>
  <div>
    <p style="float: right; margin-top:-68px; font-size: 17px;"><?php echo $_SESSION['user'];?></p>

  </div>


  <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="input-search" >
  <form>
    <input type="text" name="searchdata" placeholder="search Property details" style="padding:16px; width: 900px; margin-top:-6px;" required>
    <button type="submit">Search</button>
  </form>
<button style="margin-top:5px;"><a href="servicespage.php" style="text-decoration: none;">Back to Home</a></button>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->


  <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="deleteingproperty" >
  <form action="deleteproperty.php" method="POST">
    <!-- <input type="text" name="deletethis" placeholder="enter property name to delete" style="padding:16px; width: 900px; padding-top:-5px" required> -->
   <select name="deleteProperty">
       <option>Choose property to delete</option>
       <?php include_once "property.php"; ?>
   </select>
    <button type="submit">Delete Property</button>
  </form>

</div>
<script type="text/javascript">
        document.getElementById("triggerSearch").onclick = function() {
          alert("This");
        }
      </script>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->



<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="formdisplay" style="margin-top:-140px;"> 
  <form action="" method="POST">
    <p style="font-size: 18px; margin-top: 5px; text-align: center; margin-left: -24px; color: red;">Register the property by completing the form below</p>
    <div>
    <table>
      <tr>
        <td style="font-size: 20px;">Property Name:</td>
        <td><input type="text" placeholder="Enter property name" name="propertyname" style="padding:9px; width:600px;" required></td>
      </tr>
      <tr>
        <td style="font-size: 20px;">Property Owner:</td>
        <td><input type="text" placeholder="Enter property owner name" name="propertyowner" style="padding:9px; width:600px;" required></td>
      </tr>
      <tr>
        <td style="font-size: 20px;">Property Location:</td>
        <td><input type="text" placeholder="Enter property location" name="propertylocation" style="padding:9px; width:600px;" required></td>
      </tr>
      <tr>
        <td>Property Status:</td>
        <td><select name="propertystatus" style="padding:5px; width:620px;">
          <option value="sale" style="">For Sale</option>
          <option value="renting">For renting</option>
        </select></td>
      </tr>
      <tr>
        <td>Property Type:</td>
        <td><select name="propertytype" style="padding:5px; width:620px;">
          <option value="land" style="">Land</option>
          <option value="house">House</option>
        </select></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit" style="margin-top: 10px;">Register Property</button></td>
        <td><a href="servicespage.php" style="text-decoration:none; padding:19px; background-color:blue; color:white;">Back To Menu </a></td>
      </tr>
    </table>
  </form>
</div>
<?php include_once "RegisterProperty.php"; ?>
<!-- ///////////////////////////////////////////////////////////////////// -->

    </div>

  
<?php include "includes/PropertyJs.php";?>
</body>

</html>
<!-- onclick="document.getElementById('registering').style.visibility='visible';" -->