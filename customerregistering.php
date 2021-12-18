<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./includes/design/maincss.css">
  <link rel="stylesheet" type="text/css" href="./includes/design/mylogincss.css">
	<title>login.html</title>
</head>
<body>
<?php ?>
    <form action="sign-up.php" method="POST" class="form">
      <div class="title">Real Estate Site</div>
      <div class="subtitle">Customer registration</div>

      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="username" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">User name</label>
      </div>

      <div class="input-container ic2">
        <input id="password1" class="input" type="text" name="location"/>
        <div class="cut cut-short"></div>
        <label for="password1" class="placeholder">Location</label>
      </div>
      <div class="input-container ic2">
        <input id="password2" class="input" name="password" type="password"/>
        <div class="cut cut-short"></div>
        <label for="password2" class="placeholder">Password</label>
      </div>
      <input  type="submit" name="submit" class="submit" value="Register"/>
</form>


    <div  style="margin-top: 570px; margin-left: -210px; padding:15px;">
    	<a href="index.php"><button class="button1">Back To Home</button></a>
    </div>
    <div  style="margin-top: 570px; margin-left: -40px; margin-right: 20px; padding:20px; ">
      <a href="customerlogin.php"><button class="button1">Login</button></a>
    </div>

</body>
</html>