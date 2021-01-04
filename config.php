<?php 
	$con=mysqli_connect("localhost","root","12345") or die ("Could not connect");
	mysqli_select_db($con,"questionnaire")or die ("Could not Select DB!!");
	mysqli_query($con,"SET NAMES UTF8");
	mysqli_query($con,"SET Character_set_result=UTF8");
	mysqli_query($con,"SET Character_set_client=UTF8");
	mysqli_query($con,"SET Character_set_connection=UTF8");
?>