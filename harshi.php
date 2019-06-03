<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Google Maps Javascript API v3 Example: Add Marker with open infowindow on map click</title> 
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
		<script type="text/javascript" src="scripts/downloadxml.js"></script>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1><center>ONLINE PURCHASE</center></h1>;
<br>
	<div class="well col-md-4 col-md-offset-4 box ">
	<form action="dataworker.php" method="post">
		<label for="NAME">NAME</label>
		<input type="text" placeholder="name" name="name" id="name" class="form-control"><br>
		
		<label for="e-mail">E-MAIL</label>
		<input type="e-mail" name="e-mail" id="e-mail" placeholder="e-mail" class="form-control"><br>
		
		<label for="tel">PHONE NUMBER</label>
		<input type="text" name="tel" id="tel" placeholder="telephone" class="form-control"><br>
		
		<label for="credit card number">CREDIT CARD NO</label>
		<input type="text" name="credit card number" id="credit card number" placeholder="credit card number" class="form-control"><br>

		<label for="bank">BANK</label>
		<input type="text" name="bank" id="tel" placeholder="bank" class="form-control"><br>
	<div>
		
	</div>
		
 	
		<br>
		<input type="submit" value="SUBMIT" class="btn btn-primary">
		<input type="reset" value="RESET" class="btn btn-default">
		
	</form>


	<?php 
include ('binuriconnection.php');

 ?>

</body>
</html>