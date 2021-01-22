<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <?php session_start();
    require_once("config.php");
    error_reporting(E_ERROR | E_PARSE);
    include_once("header.php");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\dt.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>

  <center>

<body>
  <?php
    include("body.php");
  ?>
  <div>
      <img src="./images/DIGITECH-header.png" alt="center"style="width: 25%;margin-top: 80px;" />
  </div>
  <div class="text_shade22" >
      โครงการจัดรูปแบบการบริหารวิชาการด้าน<br/>
      เทคโนโลยีดิจิทัลรูปใหม่
  <div>
    <br/>
    <div style="font-size: 18px;text-align: center;" >
        เป็นการจัดการศึกษารูปแบบใหม่ที่เน้นให้ผู้เรียนสามารถเลือกเรียนตามกลุ่มวิชาชีพที่สนใจ พัฒนาทักษะที่จําเป็นให้ผู้เรียนสามารถทํางานได้จริงและ<br/>ส่งเสริมการเรียนรู้ตลอดชีวิต
    </div>

    <hr class="style2">

    <div style="background-color: #efefef;height: 1000px; margin-top: 70px; ">
      <div>Degree Track</div>
        <p style="font-size: 22px;margin-top: 40px; text-align: center;" >หลักสูตรระดับปริญญาตรีด้านเทคโนโลยีดิจิทัลรูปแบบใหม่ ภายใต้ชื่อกลุ่มหลักสูตรศาสตร์และศิลป์ดิจิทัล โดยจัดการเรียนการสอนใน<br/>
          รูปแบบมอดูลหรือชุดวิชา (Modular Program) ทําให้ผู้เรียนได้รับทักษะและความรู้แบบเบ็ดเสร็จ สามารถเลือกเรียนตามกลุ่ม<br/>
          วิชาชีพที่สนใจ (Personalization)</p>

    <table border="0" style="width:70%; margin-top: 70px;"   >
        <tr>
          <th> <img src="./images/dt_cover.svg" alt="center"style="width: 40%; display: block;margin-left: auto;margin-right: auto; " /></th>
          <th><img src="./images/dc_cover.svg" alt="center"style="width: 40%; display: block;margin-left: auto;margin-right: auto; " /></th> 
        </tr>
        <tr>
          <td><p style="text-align: center;font-size: 26px;margin-top: 30px;">สาขาวิชาเทคโนโลยีดิจิทัล</p>
              <p style="font-size: 20px;text-align: center;">ศึกษาเกี่ยวกับการบริหารเทคโนโลยีดิจิทัลการพัฒนา<br/>
              ซอฟต์แวร์ การจัดการข้อมูลและวิทยาศาสตร์ข้อมูล เพื่อ<br/>
              คิดวิเคราะห์ วางแผนการทำงานอย่างเป็นระบบและบูรณา<br/>
              การความรู้ เพื่อสร้างสรรค์นวัตกรรมดิจิทัล</p></td>
          <td><p style="text-align: center;font-size: 26px;margin-top: 30px;">สาขาวิชานิเทศศาสตร์ดิจิทัล</p>
              <p style="font-size: 20px;text-align: center;">ศึกษาเกี่ยวกับเทคโนโลยีดิจิทัลเพื่อบูรณาการกับองค์<br/>
              ความรู้ทางด้านนิเทศศาสตร์ดิจิทัล เพื่อคิดสร้างสรรค์<br/>
              วางแผน เตรียมการผลิต ผลิต เผยแพร่ ประเมินผล และ<br/>
              วิเคราะห์วิพากษ์ผลงานสื่อดิจิทัล</p></td>
        </tr>
        <tr>
          <th><button type="button" onclick="location.href='dt.php'" class="button is-success animated bounceIn" style="border-radius: 20px;width: 200px; height: 50px;font-size: 18px;background-color: #0a428f;border: white;display: block;margin-left: auto;margin-right: auto;margin-top: 20px;">
            ดูหลักสูตร</button></th>
          <th><button type="button" onclick="location.href='DC/dc/DC.php'" class="button is-success animated bounceIn" style="border-radius: 20px;width: 200px; height: 50px;font-size: 18px;background-color: #0a428f;border: white;display: block;margin-left: auto;margin-right: auto;margin-top: 20px;">
            ดูหลักสูตร</button></th>
        </tr>
    </table>

    <div><hr class="style2"></div>
    </div>


</body>
<?php
  include("footer.php");
?>

</html>