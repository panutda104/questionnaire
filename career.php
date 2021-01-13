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
$range82 = $_POST['range82'];
$range83 = $_POST['range83'];

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
    knowledge_29,
    knowledge_30,
    knowledge_31
)
VALUES ('$knowledge_code','$personal_code','$range53','$range54','$range55','$range56','$range57','$range58','$range59','$range60','$range61','$range62','$range63','$range64','$range65','$range66','$range67','$range68','$range69','$range70','$range71','$range72','$range73','$range74','$range75','$range76','$range77','$range78','$range79','$range80','$range81','$range82','$range83')";
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

  function _count() {

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
  // }
</script>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\career.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

  <title>shade</title>
</head>

<body>
  <div class="slideshow-container">
    <form id="page1" class="page1" onsubmit="return check(this)" action="suggestion.php" method="POST">
      <div class="shade">
        <div class="text_header_shade">
          อาชีพที่เหมาะสม 10 อาชีพ
        </div>
        <p id="text_content1_shade1">ให้เลือกอาชีพที่ท่านคิดว่าเหมาะสมกับทักษะ ความรู้ และเจตคติของท่านมากที่สุด จำนวน 10 อาชีพ</p>
      </div>

      <div class="shade1" >
        <div class="text_shade1" id="container" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
          <p id="text_header_shade1">กลุ่มอาชีพที่ 1 Administrative Support</p>
          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="เลขานุการผู้บริหารและผู้ช่วยฝ่ายบริหาร">เลขานุการผู้บริหารและผู้ช่วยฝ่ายบริหาร (Executive Secretaries and Executive Administrative Assistants) <br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="ช่างคอมพิวเตอร์ (Computer Operators)">ช่างคอมพิวเตอร์ (Computer Operators) <br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="ตัวแทนฝ่ายบริการลูกค้า (Customer Service Representatives)">ตัวแทนฝ่ายบริการลูกค้า (Customer Service Representatives)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="ผู้ช่วยห้องสมุด (Library Assistants)">ผู้ช่วยห้องสมุด (Library Assistants)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานจัดการไฟล์เอกสาร (File Clerks)">พนักงานจัดการไฟล์เอกสาร (File Clerks)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานต้อนรับและให้ข้อมูล (Receptionists and Information Clerks)">พนักงานต้อนรับและให้ข้อมูล (Receptionists and Information Clerks)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานตอบจดหมาย/E-mail (Correspondence Clerks)">พนักงานตอบจดหมาย/E-mail (Correspondence Clerks)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานบันทึกข้อมูล (Data Entry Keyers)">พนักงานบันทึกข้อมูล (Data Entry Keyers)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานพิมพ์ข้อมูลและเวิร์ด (Word Processors and Typists)">พนักงานพิมพ์ข้อมูลและเวิร์ด (Word Processors and Typists)<br />

          <input type="checkbox" id="checkbox[]" name="checkbox[]" value="พนักงานสำนักงานทั่วไป (Office Clerks, General)">พนักงานสำนักงานทั่วไป (Office Clerks, General)<br />
        </div>


        <div class="shade1">
          <div class="text_shade2" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
            <p id="text_header_shade1">กลุ่มอาชีพที่ 2 Business Information Management</p>
            <div style="margin-top: 10px;">
              <input type="checkbox" name="checkbox[]" value="ผู้จัดการคอมพิวเตอร์และระบบสารสนเทศ (Computer and Information Systems Managers)">ผู้จัดการคอมพิวเตอร์และระบบสารสนเทศ (Computer and Information Systems Managers)<br />
            </div>

            <div style="margin-top: 10px;">
              <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการจัดการเอกสาร (Document Management Specialists)">ผู้เชี่ยวชาญด้านการจัดการเอกสาร (Document Management Specialists)<br />
            </div>

            <div style="margin-top: 10px;">
              <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการสนับสนุนผู้ใช้คอมพิวเตอร์ (Computer User Support Specialists)">ผู้เชี่ยวชาญด้านการสนับสนุนผู้ใช้คอมพิวเตอร์ (Computer User Support Specialists)<br />
            </div>

            <div style="margin-top: 10px;">
              <input type="checkbox" name="checkbox[]" value="ผู้จัดการโครงการเทคโนโลยีสารสนเทศ (Information Technology Project Managers)">ผู้จัดการโครงการเทคโนโลยีสารสนเทศ (Information Technology Project Managers)<br />
            </div>
          </div>

          <div class="shade1">
            <div class="text_shade3" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
              <p id="text_header_shade1">กลุ่มอาชีพที่ 3 Data Handling</p>
              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="ผู้เก็บรวบรวมข้อมูล (Data Archivists)">ผู้เก็บรวบรวมข้อมูล (Data Archivists) <br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="ผู้ดูแลข้อมูล (Data Sterwards)">ผู้ดูแลข้อมูล (Data Sterwards)<br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="ผู้ดูแลข้อมูลดิจิทัล (Digital Data Curator)">ผู้ดูแลข้อมูลดิจิทัล (Digital Data Curator)<br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="นักพัฒนาคลังข้อมูล (Data Warehouse Developer)">นักพัฒนาคลังข้อมูล (Data Warehouse Developer)<br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านคลังข้อมูล (Data Warehousing Specialists)">ผู้เชี่ยวชาญด้านคลังข้อมูล (Data Warehousing Specialists)<br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="สถาปนิก/ผู้ออกแบบฐานข้อมูล (Database Architects)">สถาปนิก/ผู้ออกแบบฐานข้อมูล (Database Architects)<br />
              </div>

              <div style="margin-top: 10px;">
                <input type="checkbox" name="checkbox[]" value="นักพัฒนาฐานข้อมูล (Database Developer)">นักพัฒนาฐานข้อมูล (Database Developer)<br />
              </div>
            </div>

            <div class="shade1">
              <div class="text_shade2" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                <p id="text_header_shade1">กลุ่มอาชีพที่ 4 Data Science</p>
                <div style="margin-top: 10px;">
                  <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ธุรกิจอัจฉริยะ (Business Intelligence Analysts)">นักวิเคราะห์ธุรกิจอัจฉริยะ (Business Intelligence Analysts) <br />
                </div>

                <div style="margin-top: 10px;">
                  <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ข้อมูล (Data Analyst)">นักวิเคราะห์ข้อมูล (Data Analyst)<br />
                </div>

                <div style="margin-top: 10px;">
                  <input type="checkbox" name="checkbox[]" value="นักวิทยาศาสตร์ข้อมูล (Data Scientist)">นักวิทยาศาสตร์ข้อมูล (Data Scientist)<br />
                </div>

                <div style="margin-top: 10px;">
                  <input type="checkbox" name="checkbox[]" value="วิศวกรข้อมูล (Data Engineer)">วิศวกรข้อมูล (Data Engineer)<br />
                </div>
              </div>

              <div class="shade1">
                <div class="text_shade3" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                  <p id="text_header_shade1">กลุ่มอาชีพที่ 5 Operations Management</p>
                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="ผู้บริหารฝ่ายบัญชี (Account Executive)"> ผู้บริหารฝ่ายบัญชี (Account Executive)<br />
                  </div>

                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="ผู้ประสานงานการตลาด (Marketing Coordinator)">ผู้ประสานงานการตลาด (Marketing Coordinator)<br />
                  </div>

                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="นักค้นหากลยุทธ์ด้านการตลาด (Search Marketing Strategists)">นักค้นหากลยุทธ์ด้านการตลาด (Search Marketing Strategists)<br />
                  </div>

                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="ร้านค้าออนไลน์ (Online Merchants)">ร้านค้าออนไลน์ (Online Merchants)<br />
                  </div>

                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="นักค้นหายุทธศาสตร์การตลาด (Search Marketing Strategists)">นักค้นหายุทธศาสตร์การตลาด (Search Marketing Strategists)<br />
                  </div>

                  <div style="margin-top: 10px;">
                    <input type="checkbox" name="checkbox[]" value="นักกลยุทธ์โซเชียลมีเดีย (Social Media Strategist)">นักกลยุทธ์โซเชียลมีเดีย (Social Media Strategist)<br />
                  </div>
                </div>

                <div class="shade1">
                  <div class="text_shade3" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                    <p id="text_header_shade1">กลุ่มอาชีพที่ 6 Mobile Application</p>
                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="นักพัฒนาแอปพลิเคชันมือถือ (Mobile Application Developer)">นักพัฒนาแอปพลิเคชันมือถือ (Mobile Application Developer)<br />
                    </div>

                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="นักพัฒนามือถือข้ามแพลตฟอร์ม (Cross-platform Mobile Developer)">นักพัฒนามือถือข้ามแพลตฟอร์ม (Cross-platform Mobile Developer)<br />
                    </div>

                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="นักพัฒนามือถือซามารีน (Xamarin Mobile Developer)">นักพัฒนามือถือซามารีน (Xamarin Mobile Developer)<br />
                    </div>

                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="นักพัฒนามือถือระบบปฎิบัติการ Android (Android Mobile Developer)">นักพัฒนามือถือระบบปฎิบัติการ Android (Android Mobile Developer)<br />
                    </div>

                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="นักพัฒนามือถือระบบปฎิบัติการ IOS (IOS Mobile Developer)">นักพัฒนามือถือระบบปฎิบัติการ IOS (IOS Mobile Developer)<br />
                    </div>

                    <div style="margin-top: 10px;">
                      <input type="checkbox" name="checkbox[]" value="ผู้ออกแบบ UI/UX (UI/UX Designer)">ผู้ออกแบบ UI/UX (UI/UX Designer)<br />
                    </div>
                  </div>

                  <div class="shade1">
                    <div class="text_shade4" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                      <p id="text_header_shade1">กลุ่มอาชีพที่ 7 Network Systems</p>
                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์เครือข่าย (Network Analyst)">นักวิเคราะห์เครือข่าย (Network Analyst) <br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ความปลอดภัย (Security Analyst)">นักวิเคราะห์ความปลอดภัย (Security Analyst)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ความปลอดภัยของข้อมูล (Information Security Analysts)">นักวิเคราะห์ความปลอดภัยของข้อมูล (Information Security Analysts)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการจัดการความปลอดภัย (Security Management Specialists)">ผู้เชี่ยวชาญด้านการจัดการความปลอดภัย (Security Management Specialists)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการสนับสนุนเครือข่ายคอมพิวเตอร์ (Computer Network Support Specialists)">ผู้เชี่ยวชาญด้านการสนับสนุนเครือข่ายคอมพิวเตอร์ (Computer Network Support Specialists)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้ดูแลเครือข่าย (Network Administrator)">ผู้ดูแลเครือข่าย (Network Administrator)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้ดูแลฐานข้อมูล (Database Administrators)">ผู้ดูแลฐานข้อมูล (Database Administrators)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้ดูแลระบบคอมพิวเตอร์และเครือข่าย (Network and Computer Systems Administrators)">ผู้ดูแลระบบคอมพิวเตอร์และเครือข่าย (Network and Computer Systems Administrators)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้ดูแลระบบรักษาความปลอดภัย (Security Administrator)">ผู้ดูแลระบบรักษาความปลอดภัย (Security Administrator)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="ผู้ทดสอบการบุกรุกระบบ (Penetration Tester)">ผู้ทดสอบการบุกรุกระบบ (Penetration Tester)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="วิศวกรระบบเครือข่าย (Network System Engineer)">วิศวกรระบบเครือข่าย (Network System Engineer)<br />
                      </div>

                      <div style="margin-top: 10px;">
                        <input type="checkbox" name="checkbox[]" value="สถาปนิก/ผู้ออกแบบเครือข่ายคอมพิวเตอร์ (Computer Network Architects)">สถาปนิก/ผู้ออกแบบเครือข่ายคอมพิวเตอร์ (Computer Network Architects)<br />
                      </div>
                    </div>

                    <div class="shade1">
                      <div class="text_shade44" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 8 Programming and Software Development</p>
                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="โปรแกรมเมอร์เกม (Game Programmer)">โปรแกรมเมอร์เกม (Game Programmer)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="โปรแกรมเมอร์คอมพิวเตอร์ (Computer Programmers)">โปรแกรมเมอร์คอมพิวเตอร์ (Computer Programmers)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="โปรแกรมเมอร์ระบบ Embedded (Embedded System Programmer)">โปรแกรมเมอร์ระบบ Embedded (Embedded System Programmer)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="นักพัฒนาซอฟต์แวร์ระบบ (Software Developers, Systems Software)">นักพัฒนาซอฟต์แวร์ระบบ (Software Developers, Systems Software)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="นักพัฒนาซอฟต์แวร์แอพพลิเคชั่น (Software Developers, Applications)">นักพัฒนาซอฟต์แวร์แอพพลิเคชั่น (Software Developers, Applications)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ระบบคอมพิวเตอร์ (Computer Systems Analysts)">นักวิเคราะห์ระบบคอมพิวเตอร์ (Computer Systems Analysts)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="ผู้ทดสอบซอฟต์แวร์ (Software Tester)">ผู้ทดสอบซอฟต์แวร์ (Software Tester)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="วิศวกรรมซอฟต์แวร์ (Software Engineer)">วิศวกรรมซอฟต์แวร์ (Software Engineer)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="วิศวกรและผู้ทดสอบคุณภาพซอฟต์แวร์ (Software Quality Assurance Engineers and Testers)">วิศวกรและผู้ทดสอบคุณภาพซอฟต์แวร์ (Software Quality Assurance Engineers and Testers)<br />
                        </div>

                        <div style="margin-top: 10px;">
                          <input type="checkbox" name="checkbox[]" value="วิศวกรระบบคอมพิวเตอร์/สถาปนิก (Computer Systems Engineers/Architects)">วิศวกรระบบคอมพิวเตอร์/สถาปนิก (Computer Systems Engineers/Architects)<br />
                        </div>
                      </div>

                      <div class="shade1">
                        <div class="text_shade4" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                          <p id="text_header_shade1">กลุ่มอาชีพที่ 9 Web and Digital Communications</p>
                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="เว็บมาสเตอร์ (Web Master)">เว็บมาสเตอร์ (Web Master) <br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="โปรแกรมเมอร์พัฒนา .NET (.NET Programmer)">โปรแกรมเมอร์พัฒนา .NET (.NET Programmer)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="นักเขียนดิจิทัล/บล็อกเกอร์ (Digital Copy Writer/Blogger)">นักเขียนดิจิทัล/บล็อกเกอร์ (Digital Copy Writer/Blogger)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="นักการตลาดบนเว็บ (Web Marketer)">นักการตลาดบนเว็บ (Web Marketer)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="นักพัฒนาเว็บ (Web Developers)">นักพัฒนาเว็บ (Web Developers)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value=">นักออกแบบเว็บไซต์ (Web Designer)">นักออกแบบเว็บไซต์ (Web Designer)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="ผู้เขียนเนื้อหาเว็บ (Web Content Writer)">ผู้เขียนเนื้อหาเว็บ (Web Content Writer)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Specialist)">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Specialist)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="ผู้ดูแลเว็บ (Web Administrators)">ผู้ดูแลเว็บ (Web Administrators)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="ผู้ดูแลโซเชียลมีเดีย (Social Media Administrator)">ผู้ดูแลโซเชียลมีเดีย (Social Media Administrator)<br />
                          </div>

                          <div style="margin-top: 10px;">
                            <input type="checkbox" name="checkbox[]" value="ผู้ทำ Youtuber/Vlogger (Youtuber/Vlogger)">ผู้ทำ Youtuber/Vlogger (Youtuber/Vlogger)<br />
                          </div>
                        </div>

                        <div class="shade1">
                          <div class="text_shade5" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                            <p id="text_header_shade1">กลุ่มอาชีพที่ 10 Research</p>
                            <div style="margin-top: 10px;">
                              <input type="checkbox" name="checkbox[]" value="นักวิจัย (Researcher)">นักวิจัย (Researcher)<br />
                            </div>

                            <div style="margin-top: 10px;">
                              <input type="checkbox" name="checkbox[]" value="นักวิทยาศาสตร์วิจัยคอมพิวเตอร์และสารสนเทศ (Computer and Information Research Scientists)">นักวิทยาศาสตร์วิจัยคอมพิวเตอร์และสารสนเทศ (Computer and Information Research Scientists)<br />
                            </div>

                            <div style="margin-top: 10px;">
                              <input type="checkbox" name="checkbox[]" value="ผู้ช่วยวิจัยด้านสังคมศาสตร์ (Social Science Research Assistants)">ผู้ช่วยวิจัยด้านสังคมศาสตร์ (Social Science Research Assistants)<br />
                            </div>
                          </div>


                          <div class="shade1">
                            <div class="text_shade6" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                              <p id="text_header_shade1">กลุ่มอาชีพที่ 11 Journalism and Broadcasting</p>
                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="โฆษก/ผู้ประกาศวิทยุและโทรทัศน์ (Radio and Television Announcers)">โฆษก/ผู้ประกาศวิทยุและโทรทัศน์ (Radio and Television Announcers)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="กวี นักแต่งเพลง และนักเขียนเชิงสร้างสรรค์ (Poets, Lyricists and Creative Writers)">กวี นักแต่งเพลง และนักเขียนเชิงสร้างสรรค์ (Poets, Lyricists and Creative Writers)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ช่างเทคนิคออกอากาศ (Broadcast Technicians)">ช่างเทคนิคออกอากาศ (Broadcast Technicians)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ช่างกล้อง โทรทัศน์ วิดีโอ และภาพเคลื่อนไหว (Camera Operators, Television, Video, and Motion Picture)">ช่างกล้อง โทรทัศน์ วิดีโอ และภาพเคลื่อนไหว (Camera Operators, Television, Video, and Motion Picture)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ช่างภาพ (Photographers)">ช่างภาพ (Photographers)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ช่างภาพข่าวดิจิทัล (Digital Photojournalist)">ช่างภาพข่าวดิจิทัล (Digital Photojournalist)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="นักเขียนข้อความโฆษณา (Copy Writers)">นักเขียนข้อความโฆษณา (Copy Writers)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="นักข่าวข้อมูล (Data Journalist)">นักข่าวข้อมูล (Data Journalist)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์ข่าว (Broadcast News Analysts)">นักวิเคราะห์ข่าว (Broadcast News Analysts)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="บรรณาธิการ (Editors)">บรรณาธิการ (Editors)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="บรรณาธิการภาพยนตร์และวิดีโอ (Film and Video Editors)">บรรณาธิการภาพยนตร์และวิดีโอ (Film and Video Editors)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้เขียนบทภาพยนตร์/ผู้เล่าเรื่อง (Screenplay Writer/Storyteller)">ผู้เขียนบทภาพยนตร์/ผู้เล่าเรื่อง (Screenplay Writer/Storyteller)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้ประกอบการวิทยุ (Radio Operators)">ผู้ประกอบการวิทยุ (Radio Operators)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้สร้างโครงเรื่อง (Storyline Creator)">ผู้สร้างโครงเรื่อง (Storyline Creator)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้สื่อข่าวและผู้เขียนข่าว (Reporters and Correspondents)">ผู้สื่อข่าวและผู้เขียนข่าว (Reporters and Correspondents)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้สื่อข่าววัน - แมน - แบนด์ (One-Man-Band Journalist)">ผู้สื่อข่าววัน - แมน - แบนด์ (One-Man-Band Journalist)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้สื่อข่าวออนไลน์ (Online Reporter)">ผู้สื่อข่าวออนไลน์ (Online Reporter)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้ออกแบบเชิงสร้างสรรค์ (Creative)">ผู้ออกแบบเชิงสร้างสรรค์ (Creative)<br />
                              </div>

                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="นักวิเคราะห์อัจฉริยะ/นักวิเคราะห์ข่าวกรอง (Intelligence Analysts)">นักวิเคราะห์อัจฉริยะ/นักวิเคราะห์ข่าวกรอง (Intelligence Analysts)<br />
                              </div>


                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="เจ้าหน้าที่ประชาสัมพันธ์ (Public Relations Officer)">เจ้าหน้าที่ประชาสัมพันธ์ (Public Relations Officer)<br />
                              </div>


                              <div style="margin-top: 10px;">
                                <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการประชาสัมพันธ์ (Public Relations Specialists)">ผู้เชี่ยวชาญด้านการประชาสัมพันธ์ (Public Relations Specialists)<br />
                              </div>
                            </div>

                            <div class="shade1">
                              <div class="text_shade3" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                                <p id="text_header_shade1">กลุ่มอาชีพที่ 12 Performing Arts</p>
                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="ช่างแต่งหน้า ละครและการแสดง (Makeup Artists, Theatrical and Performance)">ช่างแต่งหน้า ละครและการแสดง (Makeup Artists, Theatrical and Performance)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="นักแสดง (Actors)">นักแสดง (Actors)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="นักร้อง (Singers)">นักร้อง (Singers)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="ผู้กำกับ - เวที, ภาพเคลื่อนไหว, โทรทัศน์และวิทยุ (Directors- Stage, Motion Pictures, Television, and Radio)">ผู้กำกับ - เวที, ภาพเคลื่อนไหว, โทรทัศน์และวิทยุ (Directors- Stage, Motion Pictures, Television, and Radio)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="ผู้ผลิต/ผู้อำนวยการสร้าง (Producers)">ผู้ผลิต/ผู้อำนวยการสร้าง (Producers)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="ผู้อำนวยการโครงการ (Program Directors)">ผู้อำนวยการโครงการ (Program Directors)<br />
                                </div>

                                <div style="margin-top: 10px;">
                                  <input type="checkbox" name="checkbox[]" value="ผู้อำนวยการด้านเทคนิค/ผู้จัดการ (Technical Directors/Managers)">ผู้อำนวยการด้านเทคนิค/ผู้จัดการ (Technical Directors/Managers)<br />
                                </div>
                              </div>


                              <div class="shade1">
                                <div class="text_shade7" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                                  <p id="text_header_shade1">กลุ่มอาชีพที่ 13 Professional Support Services</p>
                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="ช่างเทคนิคห้องสมุด/เจ้าหน้าที่ห้องสมุด (Library Technicians)">ช่างเทคนิคห้องสมุด/เจ้าหน้าที่ห้องสมุด (Library Technicians)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="นักจดหมายเหตุ (Archivists)">นักจดหมายเหตุ (Archivists)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="นักออกแบบเทคนิคพิเศษ (Special Effect Designer)">นักออกแบบเทคนิคพิเศษ (Special Effect Designer)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="นักออกแบบและเทคโนโลยีการสอน (Instructional Designers and Technologists)">นักออกแบบและเทคโนโลยีการสอน (Instructional Designers and Technologists)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="บรรณารักษ์ดิจิทัล (Digital Librarians)">บรรณารักษ์ดิจิทัล (Digital Librarians)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านการรวบรวมภาพ เสียง และมัลติมีเดีย (Audio-Visual and Multimedia Collections Specialists)">ผู้เชี่ยวชาญด้านการรวบรวมภาพ เสียง และมัลติมีเดีย (Audio-Visual and Multimedia Collections Specialists)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="ผู้ประสานงานการเรียนการสอน (Instructional Coordinators)">ผู้ประสานงานการเรียนการสอน (Instructional Coordinators)<br />
                                  </div>

                                  <div style="margin-top: 10px;">
                                    <input type="checkbox" name="checkbox[]" value="ล่ามและนักแปล (Interpreters and Translators)">ล่ามและนักแปล (Interpreters and Translators)<br />
                                  </div>
                                </div>

                                <div class="shade1">
                                  <div class="text_shade8" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                                    <p id="text_header_shade1">กลุ่มอาชีพที่ 14 Teaching/Training</p>
                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ครูสอนเทคนิคมัธยมต้น (Technical Education Teachers, Middle School)">ครูสอนเทคนิคมัธยมต้น (Technical Education Teachers, Middle School)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ครูสอนเทคนิคมัธยมปลาย (Technical Education Teachers, Secondary School)">ครูสอนเทคนิคมัธยมปลาย (Technical Education Teachers, Secondary School)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ครูสอนด้านการสื่อสาร (Communications Teachers, Postsecondary)">ครูสอนด้านการสื่อสาร (Communications Teachers, Postsecondary)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ผู้ช่วยสอน (Teacher Assistants)">ผู้ช่วยสอน (Teacher Assistants)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ผู้ช่วยสอนระดับบัณฑิตศึกษา (Graduate Teaching Assistants)">ผู้ช่วยสอนระดับบัณฑิตศึกษา (Graduate Teaching Assistants)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="ผู้สอนพิเศษ (Tutors)">ผู้สอนพิเศษ (Tutors)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="อาจารย์วิทยาการคอมพิวเตอร์ (Computer Science Teachers, Postsecondary)">อาจารย์วิทยาการคอมพิวเตอร์ (Computer Science Teachers, Postsecondary)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="อาจารย์สาขาวิชาบรรณารักษศาสตร์ (Library Science Teachers, Postsecondary)">อาจารย์สาขาวิชาบรรณารักษศาสตร์ (Library Science Teachers, Postsecondary)<br />
                                    </div>

                                    <div style="margin-top: 10px;">
                                      <input type="checkbox" name="checkbox[]" value="อาจารย์สายอาชีวศึกษา (Vocational Education Teachers, Postsecondary)">อาจารย์สายอาชีวศึกษา (Vocational Education Teachers, Postsecondary)<br />
                                    </div>
                                  </div>

                                  <div class="shade1">
                                    <div class="text_shade8" style="font-size: 16px;font-family: 'Mitr', sans-serif;">
                                      <p id="text_header_shade1">กลุ่มอาชีพที่ 15 Visual Arts</p>
                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบกราฟิก (Graphic Designers)">นักออกแบบกราฟิก (Graphic Designers)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบกราฟิกเคลื่อนไหว (Motion Graphic Designer)">นักออกแบบกราฟิกเคลื่อนไหว (Motion Graphic Designer)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบวิดีโอเกม (Video Game Designers)">นักออกแบบวิดีโอเกม (Video Game Designers)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบชุดและจัดแสดง (Set and Exhibit Designers)">นักออกแบบชุดและจัดแสดง (Set and Exhibit Designers)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบตัวละครและฉาก (Character and Scene Designer)">นักออกแบบตัวละครและฉาก (Character and Scene Designer)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="นักออกแบบปั้นงาน 2D/3D (2D/3D Modeller)">นักออกแบบปั้นงาน 2D/3D (2D/3D Modeller)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="ผู้กำกับศิลป์ (Art Directors)">ผู้กำกับศิลป์ (Art Directors)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="ศิลปินมัลติมีเดียและแอนิเมชั่น (Multimedia Artists and Animators)">ศิลปินมัลติมีเดียและแอนิเมชั่น (Multimedia Artists and Animators)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="ผู้ประเมิน/ทดสอบสื่อดิจิทัล (Digital Media Evaluator/Testing)">ผู้ประเมิน/ทดสอบสื่อดิจิทัล (Digital Media Evaluator/Testing)<br />
                                      </div>

                                      <div style="margin-top: 10px;">
                                        <input type="checkbox" name="checkbox[]" value="ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Expert)">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Expert)<br />
                                      </div>
                                    </div>

                    
                                    <button type="submit" class=" button_shade1"> ถัดไป</button>
    </form>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- script load -->
  <script>
    function move() {
      var elem = document.getElementById("myBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 10) {
          clearInterval(id);
        } else {
          width++;
          elem.style.width = width + '%';
          document.getElementById("label").innerHTML = width * 1 + '%';
        }
      }
    }
  </script>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex - 1].style.display = "block";
    }
  </script>
</body>

</html>