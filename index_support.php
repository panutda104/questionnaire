<?php session_start();
include_once("../config.php");
$result = mysqli_query($con, "SELECT * FROM tb_personal");
$num = 0;
while ($row = mysqli_fetch_array($result)) {
    $num += 1;
}
$_SESSION['personal_code'] = 'P000' . $num;
$code = $_SESSION['personal_code'];
$sql1 = "SELECT * FROM tb_personal WHERE personal_study_code = '" . $_SESSION["user_id"] . "'";
$check_user = mysqli_query($con, $sql1);
$show = mysqli_fetch_array($check_user);
if ($show['personal_code'] === null || $show['personal_code'] === '') {
    $sql = "INSERT INTO tb_personal(personal_code,personal_study_code,personal_study,personal_occ_1,personal_occ_2,personal_occ_3) VALUES ('" . $code . "','" . $_SESSION["user_id"] . "','" . $_POST["personal_study"] . "','" . $_POST["opt1"] . "','" . $_POST["opt2"] . "','" . $_POST["opt3"] . "');";
} else {
    $sql = "UPDATE `tb_personal` SET `personal_study`='" . $_POST["personal_study"] . "', `personal_occ_1`='" . $_POST["opt1"] . "',`personal_occ_2`='" . $_POST["opt2"] . "',`personal_occ_3`='" . $_POST["opt3"] . "' WHERE `personal_study_code` ='" . $_SESSION["user_id"] . "';";
}
if (!mysqli_query($con, $sql)) {
    die(mysqli_error($con));
} else {
}

?>
<script>
  window.location = "termcondition.php";
</script>