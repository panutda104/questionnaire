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
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">ชาย</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">หญิง</label><br>

          <p id="text_content1_shade12">อาชีพ/ตำแหน่งงานในปัจจุบัน: *</p>
          <input type="text" id="occ" name="job_now">

          <p id="text_content1_shade12">ระยะเวลาในการประกอบอาชีพ/ตำแหน่งงานนี้ *</p>
          <input type="radio" id="iocc" name="job_since" value="น้อยกว่า 1 ปี">
          <label for="น้อยกว่า 1 ปี">น้อยกว่า 1 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="1-3 ปี">
          <label for="1-3 ปี">1-3 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="4-6 ปี">
          <label for="4-6 ปี">4-6 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="7-9 ปี">
          <label for="7-9 ปี">7-9 ปี</label><br>
          <input type="radio" id="iocc" name="job_since" value="10 ปี ขึ้นไป">
          <label for="10 ปี ขึ้นไป">10 ปี ขึ้นไป</label><br>

          <p id="text_content1_shade12">ผลการเรียนเฉลี่ย (GPAX): *</p>
          <input type="text2" id="occ2" name="gpax">


          <p id="text_content1_shade12">สาขาวิชาที่เรียน/จบการศึกษา: *</p>
          <!-- <div class="custom-select" style="width:200px;"> -->
          <select name="branch">
            <option value="0">สาขาเกมและสื่ออินเทอร์แอคทีฟ</option>
            <option value="1">สาขาเทคโนโลยีเครือข่ายและระบบ</option>
            <option value="2">สาขาเทคโนโลยีเทคนิคศึกษา สำหรับครูช่าง</option>
            <option value="3">สาขาเทคโนโลยีการศึกษา สำหรับครูสามัญ</option>
            <option value="4">สาขาเทคโนโลยีคอมพิวเตอร์</option>
            <option value="5">สาขาเทคโนโลยีดิจิทัล</option>
            <option value="6">สาขาเทคโนโลยีดิจิทัลทางสื่อสารมวลชน</option>
            <option value="7">สาขาเทคโนโลยีมัลติมีเดียเเละเเอนิเมชั่น</option>
            <option value="8">สาขาเทคโนโลยีสารสนเทศ</option>
            <option value="9">สาขาเทคโนโลยีสารสนเทศเพื่อระบบสุขภาพ</option>
            <option value="10">สาขาเทคโนโลยีสารสนเทศและการจัดการ</option>
            <option value="11">สาขาเทคโนโลยีสารสนเทศและการสื่อสาร</option>
            <option value="12">สาขาเทคโนโลยีสารสนเทศและการสื่อสารเพื่อการศึกษา</option>
            <option value="13">สาขาเทคโนโลยีสารสนเทศธุรกิจ</option>
            <option value="14">สาขาเทคโนโลยีสารสนเทศศึกษา</option>
            <option value="15">สาขาเทคโนโลยีสื่อดิจิทัล</option>
            <option value="16">สาขากราฟิกดีไซน์</option>
            <option value="17">สาขาการจัดการเทคโนโลยีสารสนเทศ</option>
            <option value="18">สาขาการจัดการระบบสารสนเทศ</option>
            <option value="19">สาขาการจัดการสมัยใหม่และเทคโนโลยีสารสนเทศ</option>
            <option value="20">สาขาการพัฒนาสื่อประสมและเกม</option>
            <option value="21">สาขาคอมพิวเตอร์ธุรกิจ</option>
            <option value="22">สาขาคอมพิวเตอร์ธุรกิจและเทคโนโลยีสารสนเทศ</option>
            <option value="23">สาขาคอมพิวเตอร์ศึกษา</option>
            <option value="24">สาขานิเทศศาสตร์</option>
            <option value="25">สาขาบริหารเทคโนโลยีสารสนเทศ</option>
            <option value="26">สาขาภูมิสารสนเทศ</option>
            <option value="27">สาขาระบบเครือข่ายสื่อสาร</option>
            <option value="28">สาขาระบบฐานข้อมูลและระบบเชิงปัญญา</option>
            <option value="29">สาขาระบบธุรกิจอิเล็กทรอนิกส์</option>
            <option value="30">สาขาระบบสารสนเทศ</option>
            <option value="31">สาขาระบบสารสนเทศเพื่อการจัดการ</option>
            <option value="32">สาขาระบบสื่อผสม</option>
            <option value="33">สาขาวิทยาการข้อมูลและการวิเคราะห์เชิงลึก</option>
            <option value="34">สาขาวิทยาการคอมพิวเตอร์</option>
            <option value="35">สาขาวิทยาการสารสนเทศ</option>
            <option value="12">สาขาระบบสารสนเทศ</option>
            <option value="36">สาขาวิทยาศาสตร์คอมพิวเตอร์</option>
            <option value="38">สาขาวิศวกรรมเครือข่ายเเละอินเทอร์เน็ต</option>
            <option value="39">สาขาวิศวกรรมเครือข่ายและความปลอดภัย</option>
            <option value="40">สาขาวิศวกรรมข้อมูลขนาดใหญ่</option>
            <option value="41">สาขาวิศวกรรมคอมพิวเตอร์</option>
            <option value="42">สาขาวิศวกรรมซอฟต์แวร์</option>
            <option value="43">สาขาวิศวกรรมนวัตกรรมคอมพิวเตอร์</option>
            <option value="44">สาขาวิศวกรรมมัลติมีเดียและระบบอินเทอร์เน็ต</option>
            <option value="45">สาขาวิศวกรรมระบบและข้อมูล</option>
            <option value="46">สาขาวิศวกรรมสารสนเทศและการสื่อสาร</option>
            <option value="47">สาขาสารสนเทศการแพทย์</option>
            <option value="48">สาขาสารสนเทศศาสตร์</option>
            <option value="49">อื่นๆ:</option>

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