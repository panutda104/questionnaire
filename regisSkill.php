<html>
<head><meta http-equiv=Content-Type content="text/html; charset=utf-8"></head>
<body>
<?php session_start();
include("config.php");
$ckadmin=2;
mysqli_query($con,"SET NAMES UTF8");
//mysqli_query($con,$sql);
$_SESSION['branch']=$_POST['branch'];
$_SESSION['occupation1']=$_POST['occupation1'];
$_SESSION['occupation2']=$_POST['occupation2'];
$_SESSION['occupation3']=$_POST['occupation3'];
$sql="INSERT INTO regisSkill (branch,password,occupation1,occupation2,occupation3)
VALUES('"
.$_POST["branch"]."','"
.$_POST["occupation1"]."','"
.$_POST["occupation2"]."','"
.$_POST["occupation3"]."',"
.$ckadmin.")";
//$query=mysqli_query($con,$sql);
//echo $sql;
if(!mysqli_query($con,$sql)){
die("มี username อันนี้แล้ว<br><a href=WEB.php><input type=button name=back value= BACK ></a>". mysqli_error($con));
echo "<input type=button name=back value= BACK >";
}else {echo "สมัครเสร็จสิ้น";}
mysqli_close($con);
}
?>
<form action="shade1.php.php" method="post">
<input type="submit" name="submit" value=" ถัดไป ">
</form>
</body>
</html>