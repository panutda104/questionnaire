<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM suggestion");
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    $i += 1;
}
$_SESSION['suggestion_code'] = 'Sug_000' . $i;
$suggestion_code = $_SESSION['suggestion_code'];
$personal_code = $_SESSION['personal_code'];
$suggest = $_POST['suggest_box'];

$sql = "INSERT INTO suggestion(
  suggestion_code,
  personal_code,
  suggestion
) VALUES ('$suggestion_code','$personal_code','$suggest')";

// echo $sql;
if (!mysqli_query($con, $sql)) {
  die(mysqli_error($con));
} else {
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\finish.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

  <title>shade</title>
</head>

<body>
  <form id="page1" class="page1" action="index.php">
    <div class="shade1">
      <div class="text_shade1">
        <div class="text_header_shade">คุณได้ทำแบบสอบถามเรียบร้อยแล้ว</div>

        <div class="img_finish">
            <center><img src="images\finish.png">
        </div>

      </div>
        <center><button  class="button_finish">ออก</button>
    </div>
  </form>
</body>

</html>