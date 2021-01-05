<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM career");
$i = 0;
$checkbox1 = $_POST['chkl'] ;  
if ($_POST["Submit" ]=="submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO career (name) VALUES ('".$checkboxl[$i]. "')";  
mysql_query($query) or die(mysql_error());  
}  
echo "Record is inserted";  
}  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\suggestion.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>shade</title>
</head>

<body>
            <section id="page1" class="page1">
                <div class="shade">
                    <div class="text_header_shade">
                    ข้อเสนอแนะ
                    </div>
                </div>
    
                <div class="shade1">
                    <div class="text_shade1">
                        <textarea></textarea>
                        <p id="text_content1_shade1">การยินยอมให้เก็บข้อมูลและยืนยันให้บันทึกข้อมูล *</p>
                   
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> ข้าพเจ้าตกลงยินยอมให้เก็บ รวบรวม และประมวลผลข้อมูล 6 ส่วน ได้แก่ 1) ข้อมูลส่วนบุคคล ได้แก่ ข้อมูลเพศ ข้อมูลอาชีพ/ตำแหน่งงานในปัจจุบัน ข้อมูลระยะเวลาในการประกอบอาชีพ/ตำแหน่งงานนี้ ข้อมูลผลการเรียนเฉลี่ย (GPAX) ข้อมูลสาขาวิชาที่เรียน/จบการศึกษา 2) ข้อมูลทักษะ 3) ข้อมูลเจตคติ 4) ข้อมูลความรู้ 5) อาชีพที่เหมาะสม และ 6) ข้อเสนอแนะ ของข้าพเจ้า โดยผู้วิจัยจะเก็บรักษาข้อมูลนี้เป็นความลับและไม่แบ่งปันหรือเปิดเผยข้อมูลส่วนบุคคล ของข้าพเจ้าต่อบุคคลหรือหน่วยงานอื่น ข้าพเจ้ามีสิทธิในฐานะเจ้าของข้อมูลส่วนบุคคลตาม พรบ.คุ้มครองส่วนบุคคล พ.ศ.2562 และก่อนให้ความยินยอมข้าพเจ้าได้อ่านและเข้าใจข้อกำหนดและเงื่อนไขในการเปิดเผยข้อมูลส่วนบุคคลซึ่งระบุไว้ด้านบนของความยินยอมนี้อย่างชัดเจนแล้ว</label><br>
                  
                    </div>
                </div>
                <button type="submit" class=" button_shade2" onclick="plusSlides(-1)" >ส่ง</button>   
            </section>
  
</body>

</html>