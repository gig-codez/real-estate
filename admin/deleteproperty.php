<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css">
  <style >
  body{
    background-image:url('images/logo.png');
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
  </style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Property Management Page</a>
  <a href="#" class="searching">Search a Property</a>
  <a href="#"  class="registering">Add a Property </a>
  <a href="#contact" >Update a Property</a>
  <a href="#contact">Sale a Property</a>
  <a href="#contact">View sold Properties</a>
  <a href="#" class="delete">Delete a Property</a>
  <a href="./home.php">Back to Home</a>
</div>
<div class="content">
  <h1 class="header1" style="opacity: 0.5;">Property Management Page</h1>



  <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="input-search" >
  <form>
    <input type="text" name="deletethis" placeholder="enter the name of the property to delete" style="padding:16px; width: 900px; margin-top:-6px;" required>
    <button type="submit">Delete Property</button>
  </form>
<button style="margin-top:5px;"><a href="servicespage.html" style="text-decoration: none;">Back to Home</a></button>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->



</div>
<script type="text/javascript">
     document.querySelector(".delete").onclick = ()=>{
      // alert("hi")
      document.querySelector(".input-search").classList.toggle("active");
      
    }

</script>
</body>

</html>
<!-- onclick="document.getElementById('registering').style.visibility='visible';" -->