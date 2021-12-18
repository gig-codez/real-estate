<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css">
  <link rel="stylesheet" type="text/css" href="../includes/design/mylogincss.css">
	<title>Customer Login</title>
</head>
<body>

    <form class="form" action="login.php" method="POST">
      <div class="title">Real Estate Site</div>
      <div class="subtitle">Customer login page</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="username" type="text"/>
        <div class="cut"></div>
        <label for="firstname" class="placeholder">User name</label>
      </div>

      <div class="input-container ic2">
        <input id="email" class="input" type="password" name="passcode" />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Password</label>
      </div>
      <button type="text" class="submit">Login</button>
</form>
    <div  style="margin-top: 600px; margin-left: -120px;">
    	<a href="./customerregistering.php"><button class="button1">Create Account</button></a>
    </div>
</body>
</html>