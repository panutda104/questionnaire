<?php session_start();
error_reporting(E_ERROR | E_PARSE);
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM career");
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    $i += 1;
}
$_SESSION['career_code'] = 'C_000' . $i;
$career_code = $_SESSION['career_code'];
$personal_code = $_SESSION['personal_code'];
$study1 = $_POST['branch1'];
$study2 = $_POST['branch2'];
$study3 = $_POST['branch3'];
$study4 = $_POST['branch4'];
$study5 = $_POST['branch5'];
$study6 = $_POST['branch6'];
$study7 = $_POST['branch7'];
$study8 = $_POST['branch8'];
$study9 = $_POST['branch9'];
$study10 = $_POST['branch10'];


$sql = "INSERT INTO career ( career_code, personal_code,career_1,career_2, career_3,career_4,career_5,career_6,career_7,career_8,career_9,career_10)
VALUES ('$career_code','$personal_code','$study1','$study2','$study3','$study4','$study5','$study6','$study7','$study8','$study9','$study10')";
if (!mysqli_query($con, $sql)) {
    die(mysqli_error($con));
} else {
}
mysqli_close($con);
?>
<style type="text/css">
    .hiddenform2 {
        display: none;
    }
</style>
<script type="text/javascript">
    function showForm(flag) {
        document.getElementById('myDIV').style.display = flag === 1 ? 'block' : 'none';
    }
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='../css/suggestion.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>shade</title>
</head>

<body>
    
    <form id="page1" class="page1" action="finish.php" method="POST">
        <div class="shade">
            <div class="text_header_shade">
                ข้อเสนอแนะ
            </div>
        </div>
        <div class="shade1">
            <div class="text_shade1">
                <div class="text_header_shade11" style="font-size: 20px; font-family: 'Mitr', sans-serif; font-weight: bolder;">
                    ข้อเสนอแนะเพิ่มเติม
                </div>

                <textarea name="suggest_box"></textarea>

                <p id="text_content1_shade1">การยินยอมให้เก็บข้อมูลและยืนยันให้บันทึกข้อมูล</p>

                <input type="radio" name="checkbox_remember" onclick="showForm(1)">

                <label for="vehicle1" style="font-family: 'Mitr', sans-serif;"> ข้าพเจ้าตกลงยินยอมให้เก็บ รวบรวม และประมวลผลข้อมูล 6 ส่วน ได้แก่ 1) ข้อมูลส่วนบุคคล ได้แก่ ข้อมูลเพศ ข้อมูลอาชีพ/ตำแหน่งงานในปัจจุบัน ข้อมูลระยะเวลาในการประกอบอาชีพ/ตำแหน่งงานนี้ ข้อมูลผลการเรียนเฉลี่ย (GPAX) ข้อมูลสาขาวิชาที่เรียน/จบการศึกษา 2) ข้อมูลทักษะ 3) ข้อมูลเจตคติ 4) ข้อมูลความรู้ 5) อาชีพที่เหมาะสม และ 6) ข้อเสนอแนะ ของข้าพเจ้า โดยผู้วิจัยจะเก็บรักษาข้อมูลนี้เป็นความลับและไม่แบ่งปันหรือเปิดเผยข้อมูลส่วนบุคคลของข้าพเจ้าต่อบุคคลหรือหน่วยงานอื่น ข้าพเจ้ามีสิทธิในฐานะเจ้าของข้อมูลส่วนบุคคลตาม พรบ.คุ้มครองส่วนบุคคล พ.ศ.2562 และก่อนให้ความยินยอมข้าพเจ้าได้อ่านและเข้าใจข้อกำหนดและเงื่อนไขในการเปิดเผยข้อมูลส่วนบุคคลซึ่งระบุไว้ด้านบนของความยินยอมนี้อย่างชัดเจนแล้ว</label><br>

            
        
                <div id="myDIV" class="hiddenform2">
                    <center><button type="submit" class=" button_shade2">ส่งแบบสอบถาม</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
