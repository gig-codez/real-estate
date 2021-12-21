<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../maincss.css">
  <link rel="stylesheet" type="text/css" href="../includes/design/mylogincss.css">
	<title>Admin Panel</title>

</head>
<body>

    <form class="form" action="login.php" method="POST">
      <div class="title">Real Estate Site</div>
      <div class="subtitle">Login to continue</div>

      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="username" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">User name</label>
      </div>

      <div class="input-container ic2">
        <input id="email" class="input" name="passcode" type="password" placeholder="" />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Password</label>
      </div>

      <input type="submit" class="submit" value="Login" name="submit"/>
</form>
    <!-- <div  style="margin-top: 600px; margin-left: -120px;">
    	<a href="welcomehomepage.html"><button class="button1">Back To Home</button></a>
    </div> -->
</body>
</html>