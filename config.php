<?php 
	$con=mysqli_connect("localhost","root","") or die ("Could not connect");
	mysqli_select_db($con,"dog_cat")or die ("Could not Select DB!!");
	mysqli_query($con,"SET NAMES UTF8");
	mysqli_query($con,"SET Character_set_result=UTF8");
	mysqli_query($con,"SET Character_set_client=UTF8");
	mysqli_query($con,"SET Character_set_connection=UTF8");
?>