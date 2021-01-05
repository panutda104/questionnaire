<style type="text/css">
  .hiddenform {
    display: none;
    margin-left: 45%;
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
  <link rel="stylesheet" href="css\style_index.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

  <title>index</title>
</head>

<body>
  <form id="page1" class="page1" action="personalinformation.php" method="POST">
    <div class="index">
      <div class="text_header_index">
        แบบสอบถาม เรื่อง การเก็บรวมรวบข้อมูลอาชีพที่เหมาะสมกับทักษะ ความรู้ และเจตคติ
        ของผู้ประกอบอาชีพด้านเทคโนโลยีดิจิทัลหรือนิเทศศาสตร์ดิจิทัล
      </div>
      <div>
        <p id="text_header_index">คำชี้แจง</p>
        <img src="images\1111.jpg">

        <p id="text_header_index">
          <input type="radio" name="checkbox_remember" onclick="showForm(1)"> การยินยอมเข้าร่วมวิจัย

        </p>

        <i>
          <p id="text_content1_index">ข้าพเจ้าได้อ่านแบบคำชี้แจงเกี่ยวกับการเข้าร่วมการเป็นผู้ตอบแบบสอบถามในโครงการวิจัย เรื่อง “การพัฒนาแบบจำลองการแนะนำวิชาชีพด้านดิจิทัลสำหรับหลักสูตรฐานสมรรถนะรายบุคคล” ซึ่งประกอบด้วย วัตถุประสงค์ของการวิจัย ประโยชน์โดยตรงที่จะได้รับจากการเข้าร่วมโครงการวิจัยในครั้งนี้ ขั้นตอนการปฏิบัติตัว ตลอดจนการรับรองจากผู้วิจัยที่จะเก็บรักษาข้อมูลในการตอบแบบสอบถามของข้าพเจ้าไว้เป็นความลับ และ ไม่ระบุชื่อหรือข้อมูลส่วนตัวเป็นรายบุคคลต่อสาธารณชน โดยผลการวิจัยจะนำเสนอในลักษณะภาพรวมที่เป็นการสรุปผลการวิจัยเพื่อประโยชน์ทางวิชาการเท่านั้น ข้าพเจ้าได้อ่านและเข้าใจตามคำอธิบายข้างต้นแล้ว จึงได้ลงนามยินยอมเข้าร่วมโครงการวิจัยนี้ด้วยความสมัครใจ</p>
        </i>
        <div id="myDIV" class="hiddenform">
          <input type='submit' class="button" type="submit" value="ถัดไป">
        </div>

      </div>
    </div>
  </form>

</html>