<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM shade3_knowledge");
$i = 0;
while ($row = mysqli_fetch_array($result)) {
  $i += 1;
}
$_SESSION['knowledge_code'] = 'S3_000' . $i;
$knowledge_code = $_SESSION['knowledge_code'];
$personal_code = $_SESSION['personal_code'];

$range53 = $_POST['range53'];
$range54 = $_POST['range54'];
$range55 = $_POST['range55'];
$range56 = $_POST['range56'];
$range57 = $_POST['range57'];
$range58 = $_POST['range58'];
$range59 = $_POST['range59'];
$range60 = $_POST['range60'];
$range61 = $_POST['range61'];
$range62 = $_POST['range62'];
$range63 = $_POST['range63'];
$range64 = $_POST['range64'];
$range65 = $_POST['range65'];
$range66 = $_POST['range66'];
$range67 = $_POST['range67'];
$range68 = $_POST['range68'];
$range69 = $_POST['range69'];
$range70 = $_POST['range70'];
$range71 = $_POST['range71'];
$range72 = $_POST['range72'];
$range73 = $_POST['range73'];
$range74 = $_POST['range74'];
$range75 = $_POST['range75'];
$range76 = $_POST['range76'];
$range77 = $_POST['range77'];
$range78 = $_POST['range78'];
$range79 = $_POST['range79'];
$range80 = $_POST['range80'];
$range81 = $_POST['range81'];


$sql = "INSERT INTO shade3_knowledge
(
    knowledge_code,
    personal_code,
    knowledge_1,
    knowledge_2,
    knowledge_3,
    knowledge_4,
    knowledge_5,
    knowledge_6,
    knowledge_7,
    knowledge_8,
    knowledge_9,
    knowledge_10,
    knowledge_11,
    knowledge_12,
    knowledge_13,
    knowledge_14,
    knowledge_15,
    knowledge_16,
    knowledge_17,
    knowledge_18,
    knowledge_19,
    knowledge_20,
    knowledge_21,
    knowledge_22,
    knowledge_23,
    knowledge_24,
    knowledge_25,
    knowledge_26,
    knowledge_27,
    knowledge_28,
    knowledge_29

)
VALUES ('$knowledge_code','$personal_code','$range53','$range54','$range55','$range56','$range57','$range58','$range59','$range60','$range61','$range62','$range63','$range64','$range65','$range66','$range67','$range68','$range69','$range70','$range71','$range72','$range73','$range74','$range75','$range76','$range77','$range78','$range79','$range80','$range81')";
//echo "CHECH SQL = ".$sql;
if (!mysqli_query($con, $sql)) {
  die(mysqli_error($con));
} else {
}
mysqli_close($con);
// echo "num = ".$_POST['range2'];
?>
<!DOCTYPE html>
<html lang="en">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $(function() {
    $('form').each(function() {
      var frm = $(this);
      $(this).find('input[type=checkbox]').click(function() {
        var len = $(frm).find('input[type=checkbox]:checked').length;
        if (len > 10) {
          $(this).attr('checked', false);
          alert('คุณสามารถเลือกได้สูงสุด 10 อาชีพ');
          //	$(frm).find('input[type=checkbox]').attr('disabled',true);
        }       
      });
    });
  });
  function _count(){
  
}
  // function check(obj) {
  //   len = obj.length;
  //   cnt = 0;
  //   max = 10;
  //   for (i = 0; i < len; i++) {
  //     if (obj[i].type == "checkbox" && obj[i].checked) {
  //       cnt++;
  //     }
  //   }
  //   if (cnt > max) {
  //     alert("Please check only three!!!");
  //     return false;
  //   } else {
  //     return true;
  //   }
   //}
</script>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href='../css/career.css'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

  <title>shade</title>
</head>

<body>
  
    <form id="page1" class="page1" onsubmit="return check(this)" action="suggestion.php" method="POST">
      <div class="shade">
            <p id="text_content1_shade1_1">อาชีพที่เหมาะสม 10 อาชีพ </p>
            <i>
                <p id="text_content1_shade1">ให้เลือกอาชีพที่ท่านคิดว่าเหมาะสมกับทักษะ ความรู้ และเจตคติของท่านมากที่สุด จำนวน 10 อาชีพ</p>
            </i>
      </div>

      <div class="shade1" >
        <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
          <p id="text_header_shade1">ลำดับที่ 1:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch1" id="branch1" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px " oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>            
               <br>
              </div>

  <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
          <p id="text_header_shade1">ลำดับที่ 2:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch2" id="branch2" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>               
               <br>
              </div>

              <div class="text_shade1" id="container" style="font-size:16px;font-family: 'Mitr', sans-serif;  margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 3:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch3" id="branch3" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')" >
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>            
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 4:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch4" id="branch4" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>              
                 <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 5:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch5" id="branch5" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>            
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 6:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch6" id="branch6" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>              
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 7:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch7" id="branch7" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')" >
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>                 
                 <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 8:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch8" id="branch8" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')" >
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>            
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 9:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch9" id="branch9" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select><br />
                </div>
                </div>           
                 <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif; margin-top: 30px; ">
          <p id="text_header_shade1">ลำดับที่ 10:</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <div class="form-group row">
                    <div class="col-sm-12">
                    <select name="branch10" id="branch10" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif;width: 900px; height: 40px; font-size: 18px"oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')">
                    <option value="">- กรุณาเลือก -</option>
                    <option value="นักออกแบบกราฟิก">นักออกแบบกราฟิก</option>
                        <option value="นักออกแบบกราฟิกเคลื่อนไหว">นักออกแบบกราฟิกเคลื่อนไหว</option>
                        <option value="นักออกแบบ UI">นักออกแบบ UI</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="ช่างภาพ">ช่างภาพ</option>
                        <option value="นักเขียนสำเนาดิจิทัล / บล็อกเกอร์">นักเขียนสำเนาดิจิทัล / บล็อกเกอร์</option>
                        <option value="Youtuber / Vlogger">Youtuber / Vlogger</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="ผู้ดูแลโซเชียลมีเดีย">ผู้ดูแลโซเชียลมีเดีย</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="นักออกแบบตัวละคร">นักออกแบบตัวละคร</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ศิลปินมัลติมีเดีย">ศิลปินมัลติมีเดีย</option>
                        <option value="ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง">ผู้เขียนบทภาพยนตร์ / ผู้เล่าเรื่อง</option>
                        <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        <option value="ตากล้อง">ตากล้อง</option>
                        <option value="โปรแกรมตัดต่อวิดีโอและเสียง">โปรแกรมตัดต่อวิดีโอและเสียง</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="ผู้สร้างโครงเรื่อง">ผู้สร้างโครงเรื่อง</option>
                        <option value="ตัวละครและนักออกแบบฉาก">ตัวละครและนักออกแบบฉาก</option>
                        <option value="2D / 3D Modeller">2D / 3D Modeller</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="นักออกแบบเทคนิคพิเศษ">นักออกแบบเทคนิคพิเศษ</option>
                        <option value="โปรแกรมเมอร์เกม">โปรแกรมเมอร์เกม</option>
                        <option value="ตัวออกแบบ UI เกม">ตัวออกแบบ UI เกม</option>
                        <option value="โปรดิวเซอร์">โปรดิวเซอร์</option>
                        <option value="สร้างสรรค์">สร้างสรรค์</option>
                        <option value="ผู้บริหารฝ่ายบัญชี">ผู้บริหารฝ่ายบัญชี</option>
                        <option value="เจ้าหน้าที่ประชาสัมพันธ์">เจ้าหน้าที่ประชาสัมพันธ์</option>
                        <option value="ผู้ประสานงานการตลาด">ผู้ประสานงานการตลาด</option>
                        <option value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย</option>
                        <option value="นักกลยุทธ์โซเชียลมีเดีย">นักกลยุทธ์โซเชียลมีเดีย</option>
                        <option value="ช่างภาพข่าวดิจิทัล">ช่างภาพข่าวดิจิทัล</option>
                        <option value="นักข่าวข้อมูล">นักข่าวข้อมูล</option>
                        <option value="ผู้สื่อข่าวออนไลน์">ผู้สื่อข่าวออนไลน์</option>
                        <option value="นักข่าววงเดียว">นักข่าววงเดียว</option>
                        <option value="นักออกแบบ UX">นักออกแบบ UX</option>
                        <option value="ตัวออกแบบ UI มือถือ">ตัวออกแบบ UI มือถือ</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="ผู้ประเมิน / ทดสอบสื่อดิจิทัล">ผู้ประเมิน / ทดสอบสื่อดิจิทัล</option>
                        <option value="นักวิจัย">นักวิจัย</option>
                        <option value="นักศึกษาระดับบัณฑิตศึกษา">นักศึกษาระดับบัณฑิตศึกษา</option>
                    </select>
                    <br />
                </div>
                </div> 
                <br>
              </div>

  
  </div>                   
                <center><input type='submit' class="button1" type="submit" value="ถัดไป">
    </form>
</body>
</html>
