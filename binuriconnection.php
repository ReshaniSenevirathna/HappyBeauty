<?php 

$con=mysql_connect("localhost","root","");
if(!$con){
	echo "failed";
}

$db=mysql_select_db("b");
if (!$db) {
	echo "failled";
}

 ?>