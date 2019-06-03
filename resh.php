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
	<h1><center>START SEARCHING</center></h1>;
<br>
	<div class="well col-md-4 col-md-offset-4 box ">
	<form action="dataworker.php" method="post">
		<label for="Skin type">SKIN TYPE</label>
		<input type="text" placeholder="skin type" skin type="skin type" id="skin type" class="form-control"><br>
		
		<label for="AGE">AGE</label>
		<input type="text" name="age" id="age" placeholder="age" class="form-control"><br>
		
		<label for="type">BEAUTY CARE TYPE</label>
		<input type="text" name=r"type" id="purpose" type="type" class="form-control"><br>
		
		<label for="Brand Name">BRAND NAME</label>
		<input type="text" name="brand" id="brand" placeholder="Brand Name" class="form-control"><br>
		
		<label for="allajies">ALLERGIES FOR INGREDIENTS</label>
		<input type="text" name="allergies" id="allergies" placeholder="allergies" class="form-control"><br>
		
		<label for="country">COUNTRY</label>
		<input type="text" name="country" id="country" placeholder="country" class="form-control"><br>
		
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