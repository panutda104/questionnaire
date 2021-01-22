<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM dt_shade3_knowledge");
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


$sql = "INSERT INTO dt_shade3_knowledge
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
  <link rel="stylesheet" href="css\career.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  
  <style>
    	select, p, span {
        	font: 17px Calibri;
        }
    </style>
  <title>DT-career</title>

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
          <p id="text_header_shade1">ลำดับที่ 1 :</p>
            <div class="form-group row">
              <div class="col-sm-12">
                <select name="branch1" id="branch1" class="css_s2 form-control input-sm" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px " oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ')"oninput="setCustomValidity('')"  >
                    <option value="">- กรุณาเลือก -</option>
                        <option value="ผู้เขียนเนื้อหาเว็บ">ผู้เขียนเนื้อหาเว็บ</option>
                        <option value="ผู้เขียนเนื้อหาเว็บ">นักออกแบบเว็บไซต์</option>
                        <option value="นักการตลาดบนเว็บ">นักการตลาดบนเว็บ</option>
                        <option value="นักออกแบบเว็บไซต์">นักออกแบบเว็บไซต์</option>
                        <option value="นักพัฒนาเว็บ">นักพัฒนาเว็บ</option>
                        <option value=".NET โปรแกรมเมอร์">.NET โปรแกรมเมอร์</option>
                        <option value="เว็บมาสเตอร์">เว็บมาสเตอร์</option>
                        <option value="UI / UX Designer">UI / UX Designer</option>
                        <option value="นักพัฒนามือถือข้ามแพลตฟอร์ม">นักพัฒนามือถือข้ามแพลตฟอร์ม</option>
                        <option value="Xamarin Mobile Developer">Xamarin Mobile Developer</option>
                        <option value="นักพัฒนามือถือ Android">นักพัฒนามือถือ Android</option>
                        <option value="นักพัฒนามือถือ iOS">นักพัฒนามือถือ iOS</option>
                        <option value="นักพัฒนาแอปพลิเคชันมือถือ">นักพัฒนาแอปพลิเคชันมือถือ</option>
                        <option value="นักพัฒนาซอฟต์แวร์">นักพัฒนาซอฟต์แวร์</option>
                        <option value="วิเคราะห์ระบบ">วิเคราะห์ระบบ</option>
                        <option value="วิศวกรรมซอฟต์แวร์">วิศวกรรมซอฟต์แวร์</option>
                        <option value="เครื่องทดสอบซอฟต์แวร์">เครื่องทดสอบซอฟต์แวร์</option>
                        <option value="โปรแกรมเมอร์ระบบฝังตัว">โปรแกรมเมอร์ระบบฝังตัว</option>
                        <option value="นักเก็บข้อมูล">นักเก็บข้อมูล</option>
                        <option value="บรรณารักษ์ดิจิทัล">บรรณารักษ์ดิจิทัล</option>
                        <option value="ผู้ดูแลข้อมูลดิจิทัล">ผู้ดูแลข้อมูลดิจิทัล</option>
                        <option value="แอนิเมเตอร์">แอนิเมเตอร์</option>
                        <option value="ผู้ดูแลข้อมูล">ผู้ดูแลข้อมูล</option>
                        <option value="สถาปนิกข้อมูล">สถาปนิกข้อมูล</option>
                        <option value="วิศวกรข้อมูล">วิศวกรข้อมูล</option>
                        <option value="นักวิทยาศาสตร์ข้อมูล">นักวิทยาศาสตร์ข้อมูล</option>
                        <option value="นักวิเคราะห์ข้อมูล">นักวิเคราะห์ข้อมูล</option>
                        <option value="ผู้ดูแลระบบเครือข่าย">ผู้ดูแลระบบเครือข่าย</option>
                        <option value="วิศวกรระบบเครือข่าย">วิศวกรระบบเครือข่าย</option>
                        <option value="นักวิเคราะห์เครือข่าย">นักวิเคราะห์เครือข่าย</option>
                        <option value="ผู้เชี่ยวชาญด้านความปลอดภัย">ผู้เชี่ยวชาญด้านความปลอดภัย</option>
                        <option value="ผู้ดูแลระบบรักษาความปลอดภัย">ผู้ดูแลระบบรักษาความปลอดภัย</option>
                        <option value="เครื่องทดสอบการเจาะ">เครื่องทดสอบการเจาะ</option>
                        <option value="นักวิเคราะห์ความปลอดภัย">นักวิเคราะห์ความปลอดภัย</option>
                </select><br />
              </div>
            </div>            
               <br>
      </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 2 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch2" id="branch2" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>


              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 3 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch3" id="branch3" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 4 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch4" id="branch4" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 5 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch5" id="branch5" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 6 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch6" id="branch6" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 7 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch7" id="branch7" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 8 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch8" id="branch8" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 9 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch9" id="branch9" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>

              <div class="text_shade1" id="container" style="font-size: 16px;font-family:  'Mitr', sans-serif; margin-top: 30px;"  >
                  <p id="text_header_shade1">ลำดับที่ 10 :</p>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <select name="branch10" id="branch10" class="form-control" required="" style="border: 2px solid #ced4da;border-radius: 9px;font-family: 'Mitr', sans-serif; width: 100%; height: 40px; font-size: 18px" oninvalid="this.setCustomValidity('โปรดเลือกอาชีพ') "oninput="setCustomValidity('')">
                    </select><br />
                  </div>
                </div>               
                <br>
              </div>
                   
              <center><input type='submit' class="button1" type="submit" value="ถัดไป">
    </form>  
</doby>
     
 
    <script src="js/jquery.unduplicated.js"></script>  
      <script>  
        $(function(){
            
            // กรณีไม่ได้ กำหนดค่าเริ่มต้น
            $(".form-control").unduplicated(); 
            
            // กรณีกำหนดค่าเริ่มต้น
          //$(".css_s").unduplicated({
                //   initialVal:[2,3,1,4]
              //  });*/
        
            // กรณีกำหนดค่าเริ่มต้น
            $(".branch1").unduplicated({
                    initialVal:['การตลาด','การบัญชี','การโรงแรม','การเงิน']
                });
        });
      </script>
      
</html>