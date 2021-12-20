<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css">
  <style>
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
  .update-panel{
    visibility: hidden;
    opacity: 0;
    transition: 0.3s ease-in-out;
  }

  .update-panel.active{
    visibility: visible;
    opacity: 1;

  }
  </style>
</head>