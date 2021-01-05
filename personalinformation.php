<?php
// include_once("config.php");
// $result =mysqli_query($con,"SELECT * FROM personal");
// $i=0;
// while($row=mysqli_fetch_array($result)){
//   $i+=1;
// }
// echo "ZZZZZZ = ".$i."<br />";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\style2_shade2.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

  <title>shade</title>
</head>

<body>
  <form action="shade1_list.php" method="post">

    <div class="slideshow-container">
      <!-- <section id="page1" class="page1"> -->

      <div class="shade">
        <div class="text_header_shade">
          แบบสอบถาม
        </div>
        <p id="text_content1_shade1">เรื่อง การเก็บรวมรวบข้อมูลอาชีพที่เหมาะสมกับทักษะ ความรู้ และเจตคติ ของผู้ประกอบอาชีพด้านเทคโนโลยีดิจิทัลหรือนิเทศศาสตร์ดิจิทัล</p>
      </div>

      <div class="shade1">
        <div class="text_shade1">
          <p id="text_header_shade1">ส่วนที่ 1: เก็บรวบรวมข้อมูลส่วนบุคคล</p>
          <p id="text_content1_shade11">เพศ: *</p>
          <input type="radio" id="male" name="gender" value="male" required >
          <label id="text_content1_shade13" for="male">ชาย</label><br>
          <input type="radio" id="female" name="gender" value="female" required>
          <label id="text_content1_shade13" for="female">หญิง</label><br>

          <p id="text_content1_shade12">อาชีพ/ตำแหน่งงานในปัจจุบัน: *</p>
          <input type="text" id="occ" name="job_now" required>

          <p id="text_content1_shade12">ระยะเวลาในการประกอบอาชีพ/ตำแหน่งงานนี้ *</p>
          <input type="radio" id="iocc" name="job_since" value="น้อยกว่า 1 ปี" required>
          <label id="text_content1_shade13" for="น้อยกว่า 1 ปี">น้อยกว่า 1 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="1-3 ปี" required>
          <label id="text_content1_shade13"  for="1-3 ปี">1-3 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="4-6 ปี" required>
          <label id="text_content1_shade13"  for="4-6 ปี">4-6 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="7-9 ปี" required>
          <label id="text_content1_shade13" for="7-9 ปี">7-9 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="10 ปี ขึ้นไป" required>
          <label id="text_content1_shade13" for="10 ปี ขึ้นไป">10 ปี ขึ้นไป</label><br>

          <p id="text_content1_shade12">ผลการเรียนเฉลี่ย (GPAX): *</p>
          <input type="text2" id="occ2" name="gpax" required>


          <p id="text_content1_shade12">สาขาวิชาที่เรียน/จบการศึกษา: *</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <select name="branch" required>
            <option value="สาขาเกมและสื่ออินเทอร์แอคทีฟ">สาขาเกมและสื่ออินเทอร์แอคทีฟ</option>
            <option value="สาขาเทคโนโลยีเครือข่ายและระบบ">สาขาเทคโนโลยีเครือข่ายและระบบ</option>
            <option value="สาขาเทคโนโลยีเทคนิคศึกษา">สาขาเทคโนโลยีเทคนิคศึกษา สำหรับครูช่าง</option>
            <option value="สาขาเทคโนโลยีการศึกษา สำหรับครูสามัญ">สาขาเทคโนโลยีการศึกษา สำหรับครูสามัญ</option>
            <option value="สาขาเทคโนโลยีคอมพิวเตอร์">สาขาเทคโนโลยีคอมพิวเตอร์</option>
            <option value="สาขาเทคโนโลยีดิจิทัล">สาขาเทคโนโลยีดิจิทัล</option>
            <option value="สาขาเทคโนโลยีดิจิทัลทางสื่อสารมวลชน">สาขาเทคโนโลยีดิจิทัลทางสื่อสารมวลชน</option>
            <option value="สาขาเทคโนโลยีมัลติมีเดียเเละเเอนิเมชั่น">สาขาเทคโนโลยีมัลติมีเดียเเละเเอนิเมชั่น</option>
            <option value="สาขาเทคโนโลยีสารสนเทศ">สาขาเทคโนโลยีสารสนเทศ</option>
            <option value="สาขาเทคโนโลยีสารสนเทศเพื่อระบบสุขภาพ">สาขาเทคโนโลยีสารสนเทศเพื่อระบบสุขภาพ</option>
            <option value="สาขาเทคโนโลยีสารสนเทศและการจัดการ">สาขาเทคโนโลยีสารสนเทศและการจัดการ</option>
            <option value="สาขาเทคโนโลยีสารสนเทศและการสื่อสาร">สาขาเทคโนโลยีสารสนเทศและการสื่อสาร</option>
            <option value="สาขาเทคโนโลยีสารสนเทศและการสื่อสารเพื่อการศึกษา">สาขาเทคโนโลยีสารสนเทศและการสื่อสารเพื่อการศึกษา</option>
            <option value="สาขาเทคโนโลยีสารสนเทศธุรกิจ">สาขาเทคโนโลยีสารสนเทศธุรกิจ</option>
            <option value="สาขาเทคโนโลยีสารสนเทศศึกษา">สาขาเทคโนโลยีสารสนเทศศึกษา</option>
            <option value="สาขาเทคโนโลยีสื่อดิจิทัล">สาขาเทคโนโลยีสื่อดิจิทัล</option>
            <option value="สาขากราฟิกดีไซน์">สาขากราฟิกดีไซน์</option>
            <option value="สาขาการจัดการเทคโนโลยีสารสนเทศ">สาขาการจัดการเทคโนโลยีสารสนเทศ</option>
            <option value="สาขาการจัดการระบบสารสนเทศ">สาขาการจัดการระบบสารสนเทศ</option>
            <option value="สาขาการจัดการสมัยใหม่และเทคโนโลยีสารสนเทศ">สาขาการจัดการสมัยใหม่และเทคโนโลยีสารสนเทศ</option>
            <option value="สาขาการพัฒนาสื่อประสมและเกม">สาขาการพัฒนาสื่อประสมและเกม</option>
            <option value="สาขาคอมพิวเตอร์ธุรกิจ">สาขาคอมพิวเตอร์ธุรกิจ</option>
            <option value="สาขาคอมพิวเตอร์ธุรกิจและเทคโนโลยีสารสนเทศ">สาขาคอมพิวเตอร์ธุรกิจและเทคโนโลยีสารสนเทศ</option>
            <option value="สาขาคอมพิวเตอร์ศึกษา">สาขาคอมพิวเตอร์ศึกษา</option>
            <option value="สาขานิเทศศาสตร์">สาขานิเทศศาสตร์</option>
            <option value="สาขาบริหารเทคโนโลยีสารสนเทศ">สาขาบริหารเทคโนโลยีสารสนเทศ</option>
            <option value="สาขาภูมิสารสนเทศ">สาขาภูมิสารสนเทศ</option>
            <option value="สาขาระบบเครือข่ายสื่อสาร">สาขาระบบเครือข่ายสื่อสาร</option>
            <option value="สาขาระบบฐานข้อมูลและระบบเชิงปัญญา">สาขาระบบฐานข้อมูลและระบบเชิงปัญญา</option>
            <option value="สาขาระบบธุรกิจอิเล็กทรอนิกส์">สาขาระบบธุรกิจอิเล็กทรอนิกส์</option>
            <option value="สาขาระบบสารสนเทศ">สาขาระบบสารสนเทศ</option>
            <option value="สาขาระบบสารสนเทศเพื่อการจัดการ">สาขาระบบสารสนเทศเพื่อการจัดการ</option>
            <option value="สาขาระบบสื่อผสม">สาขาระบบสื่อผสม</option>
            <option value="สาขาวิทยาการข้อมูลและการวิเคราะห์เชิงลึก">สาขาวิทยาการข้อมูลและการวิเคราะห์เชิงลึก</option>
            <option value="สาขาวิทยาการคอมพิวเตอร์">สาขาวิทยาการคอมพิวเตอร์</option>
            <option value="สาขาวิทยาการสารสนเทศ">สาขาวิทยาการสารสนเทศ</option>
            <option value="สาขาระบบสารสนเทศ">สาขาระบบสารสนเทศ</option>
            <option value="สาขาวิทยาศาสตร์คอมพิวเตอร์">สาขาวิทยาศาสตร์คอมพิวเตอร์</option>
            <option value="สาขาวิศวกรรมเครือข่ายเเละอินเทอร์เน็ต">สาขาวิศวกรรมเครือข่ายเเละอินเทอร์เน็ต</option>
            <option value="สาขาวิศวกรรมเครือข่ายและความปลอดภัย">สาขาวิศวกรรมเครือข่ายและความปลอดภัย</option>
            <option value="สาขาวิศวกรรมข้อมูลขนาดใหญ่">สาขาวิศวกรรมข้อมูลขนาดใหญ่</option>
            <option value="สาขาวิศวกรรมคอมพิวเตอร์">สาขาวิศวกรรมคอมพิวเตอร์</option>
            <option value="สาขาวิศวกรรมซอฟต์แวร์">สาขาวิศวกรรมซอฟต์แวร์</option>
            <option value="สาขาวิศวกรรมนวัตกรรมคอมพิวเตอร์">สาขาวิศวกรรมนวัตกรรมคอมพิวเตอร์</option>
            <option value="สาขาวิศวกรรมมัลติมีเดียและระบบอินเทอร์เน็ต">สาขาวิศวกรรมมัลติมีเดียและระบบอินเทอร์เน็ต</option>
            <option value="สาขาวิศวกรรมระบบและข้อมูล">สาขาวิศวกรรมระบบและข้อมูล</option>
            <option value="สาขาวิศวกรรมสารสนเทศและการสื่อสาร">สาขาวิศวกรรมสารสนเทศและการสื่อสาร</option>
            <option value="สาขาสารสนเทศการแพทย์">สาขาสารสนเทศการแพทย์</option>
            <option value="สาขาสารสนเทศศาสตร์">สาขาสารสนเทศศาสตร์</option>
            <option value="อื่นๆ:">อื่นๆ:</option>

          </select>
          <!-- </div> -->

          <p id="text_content2_shade1">คลิกปุ่ม "ถัดไป" เพื่อเริ่มทำแบบทดสอบ</p>
        </div>
      </div>
      <button onclick="location.href='questionnaire.php'" class=" button_shade2 prev">ย้อนกลับ</button>
      <button class=" button_shade1 next"> ถัดไป</button>
      <!-- </section> -->
    </div>
  </form>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>