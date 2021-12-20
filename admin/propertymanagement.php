<?php include("includes/PropertyHeader.php");?>
<?php include_once "includes/connect.php";?>
<body>

<div class="sidebar">
  <a class="active" href="#home">Property Management</a>
  <a href="#" id="triggerSearch">Search a Property</a>
  <a href="#" class="addProperty">Add a Property </a>
  <a href="#contact" class="update">Update a Property</a>
  <a href="#contact">Sale a Property</a>
  <a href="#contact">View sold Properties</a>
  <a href="#delete" class="delete">Delete a Property</a>
  <a href="home.php">Back to Home</a>
</div>
<div class="content">
  <h1 class="header1" style="opacity: 0.5;">Property Management</h1>
  <div>
    <p style="float: right; margin-top:-68px; font-size: 17px;"><?php echo $_SESSION['user'];?></p>

  </div>
<div class="update-panel">
  <table>
     <tr>
        <th>Property Name</th>
        <th>Owner</th>
        <th>Status</th>
        <th>Actions</th>
     </tr>
     <?php 
        $qt = mysqli_query($conn , "SELECT * FROM property");
        while ($pd = mysqli_fetch_assoc($qt)) {
          echo "<tr>";
          echo "<td>".$pd["prop_name"]."</td>";
          echo "<td>".$pd["prop_owner"]."</td>";
          echo "<td>".$pd["Status"]."</td>";
          echo "<tr>";
        }
     ?>
 </table>

</div>
  <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="input-search" >
  <form action="ResultSet.php" method="POST">
    <input type="text" name="query" placeholder="search Property details" style="padding:10px; width: 500px; margin-top:-6px;" required>
    <input  type="submit" value="Search" name="submit"/>
  </form>

<!-- <button style="margin-top:5px;"><a href="servicespage.php" style="text-decoration: none;">Back to Home</a></button> -->
</div> 

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->

  <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="deleteingproperty" >
  <form action="" method="POST">
    <!-- <input type="text" name="deletethis" placeholder="enter property name to delete" style="padding:16px; width: 900px; padding-top:-5px" required> -->
   <select name="del">
       <option>Choose property to delete</option>
       <?php include "DeleteProperty.php" ?>
   </select>
    <input type="submit" name="submit" value="Delete Property"/>
  </form>
  <?php include_once "deleteproperty.php";?>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->

<script type="text/javascript">
  document.querySelector("#triggerSearch").onclick = ()=>{
  //  alert("hi");
   document.querySelector(".input-search").classList.toggle("active");
   document.querySelector(".formdisplay").classList.remove("active");
   document.querySelector(".deleteingproperty").classList.remove("active");
   document.querySelector(".update-panel").classList.remove("active");
 }
  document.querySelector(".addProperty").onclick = ()=>{
   // alert("hi")
   document.querySelector(".input-search").classList.remove("active");
   document.querySelector(".deleteingproperty").classList.remove("active");
   document.querySelector(".formdisplay").classList.toggle("active");
   document.querySelector(".update-panel").classList.remove("active");
   
 }
 
 document.querySelector(".delete").onclick = ()=>{
   // alert("hi")
   document.querySelector(".formdisplay").classList.remove("active");
   document.querySelector(".input-search").classList.remove("active");

   document.querySelector(".deleteingproperty").classList.toggle("active");

   document.querySelector(".update-panel").classList.remove("active");
   
 }


  document.querySelector(".update").onclick = ()=>{
   // alert("hi")
   document.querySelector(".formdisplay").classList.remove("active");
   document.querySelector(".input-search").classList.remove("active");

   document.querySelector(".deleteingproperty").classList.remove("active");
   document.querySelector(".update-panel").classList.toggle("active");
   
 }
</script>


<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<div class="formdisplay" style="margin-top:-140px;"> 
  <form action="RegisterProperty.php" method="POST">
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
<!-- ///////////////////////////////////////////////////////////////////// -->

    </div>

  
</body>

</html>