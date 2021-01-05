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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\career.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>shade</title>
</head>

<body>
        <div class="slideshow-container">
            <section id="page1" class="page1">
                <div class="shade">
                    <div class="text_header_shade">
                    อาชีพที่เหมาะสม 10 อาชีพ
                    </div>
                        <p id="text_content1_shade1">ให้เลือกอาชีพที่ท่านคิดว่าเหมาะสมกับทักษะ ความรู้ และเจตคติของท่านมากที่สุด จำนวน 10 อาชีพ</p>
                </div>
    
                <div class="shade1">
                    <div class="text_shade1">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 1 Administrative Support</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" name="chkl" value="เลขานุการผู้บริหารและผู้ช่วยฝ่ายบริหาร">เลขานุการผู้บริหารและผู้ช่วยฝ่ายบริหาร (Executive Secretaries and Executive Administrative Assistants)    <br />         
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl" value="ช่างคอมพิวเตอร์ (Computer Operators)">ช่างคอมพิวเตอร์ (Computer Operators) <br/>              
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" name="chkl" value="ตัวแทนฝ่ายบริการลูกค้า (Customer Service Representatives)">ตัวแทนฝ่ายบริการลูกค้า (Customer Service Representatives)<br/>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl[ ]">
                        <label class="container">ผู้ช่วยห้องสมุด (Library Assistants)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl[ ]">
                        <label class="container">พนักงานจัดการไฟล์เอกสาร (File Clerks)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl[ ]">
                        <label class="container">พนักงานต้อนรับและให้ข้อมูล (Receptionists and Information Clerks)
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl[ ]">
                        <label class="container">พนักงานตอบจดหมาย/E-mail (Correspondence Clerks)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" name="chkl[ ]" >
                        <label class="container">พนักงานบันทึกข้อมูล (Data Entry Keyers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">พนักงานพิมพ์ข้อมูลและเวิร์ด (Word Processors and Typists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">พนักงานสำนักงานทั่วไป (Office Clerks, General)
                        <span class="checkmark"></span>
                        </label>
                        </div>               
                </div>


                <div class="shade1">
                    <div class="text_shade2">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 2 Business Information Management</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ผู้จัดการคอมพิวเตอร์และระบบสารสนเทศ (Computer and Information Systems Managers)                                              
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >ผู้เชี่ยวชาญด้านการจัดการเอกสาร (Document Management Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านการสนับสนุนผู้ใช้คอมพิวเตอร์ (Computer User Support Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้จัดการโครงการเทคโนโลยีสารสนเทศ (Information Technology Project Managers)
                        <span class="checkmark"></span>
                        </label>
                        </div>     
                    </div>   

                    <div class="shade1">
                    <div class="text_shade3">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 3 Data Handling</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ผู้เก็บรวบรวมข้อมูล (Data Archivists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >ผู้ดูแลข้อมูล (Data Sterwards)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลข้อมูลดิจิทัล (Digital Data Curator)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนาคลังข้อมูล (Data Warehouse Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านคลังข้อมูล (Data Warehousing Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">สถาปนิก/ผู้ออกแบบฐานข้อมูล (Database Architects)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนาฐานข้อมูล (Database Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                    </div>   

                    <div class="shade1">
                    <div class="text_shade2">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 4 Data Science</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >นักวิเคราะห์ธุรกิจอัจฉริยะ (Business Intelligence Analysts)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักวิเคราะห์ข้อมูล (Data Analyst)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักวิทยาศาสตร์ข้อมูล (Data Scientist)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">วิศวกรข้อมูล (Data Engineer)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                    </div>   
                    
                    <div class="shade1">
                    <div class="text_shade3">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 5 Operations Management</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ผู้บริหารฝ่ายบัญชี (Account Executive)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >ผู้ประสานงานการตลาด (Marketing Coordinator)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักค้นหากลยุทธ์ด้านการตลาด (Search Marketing Strategists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ร้านค้าออนไลน์ (Online Merchants)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักค้นหายุทธศาสตร์การตลาด (Search Marketing Strategists)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักกลยุทธ์โซเชียลมีเดีย (Social Media Strategist)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     <div class="shade1">
                    <div class="text_shade3">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 6 Mobile Application</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >นักพัฒนาแอปพลิเคชันมือถือ (Mobile Application Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักพัฒนามือถือข้ามแพลตฟอร์ม (Cross-platform Mobile Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักพัฒนามือถือซามารีน (Xamarin Mobile Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนามือถือระบบปฎิบัติการ Android (Android Mobile Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนามือถือระบบปฎิบัติการ IOS (IOS Mobile Developer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ออกแบบ UI/UX (UI/UX Designer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     <div class="shade1">
                    <div class="text_shade4">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 7 Network Systems</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >นักวิเคราะห์เครือข่าย (Network Analyst)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักวิเคราะห์ความปลอดภัย (Security Analyst)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักวิเคราะห์ความปลอดภัยของข้อมูล (Information Security Analysts)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านการจัดการความปลอดภัย (Security Management Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านการสนับสนุนเครือข่ายคอมพิวเตอร์ (Computer Network Support Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลเครือข่าย (Network Administrator)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลฐานข้อมูล (Database Administrators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลระบบคอมพิวเตอร์และเครือข่าย (Network and Computer Systems Administrators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลระบบรักษาความปลอดภัย (Security Administrator)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ทดสอบการบุกรุกระบบ (Penetration Tester)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">วิศวกรระบบเครือข่าย (Network System Engineer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">สถาปนิก/ผู้ออกแบบเครือข่ายคอมพิวเตอร์ (Computer Network Architects)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     <div class="shade1">
                    <div class="text_shade4">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 8 Programming and Software Development</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >โปรแกรมเมอร์เกม (Game Programmer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >โปรแกรมเมอร์คอมพิวเตอร์ (Computer Programmers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">โปรแกรมเมอร์ระบบ Embedded (Embedded System Programmer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนาซอฟต์แวร์ระบบ (Software Developers, Systems Software)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนาซอฟต์แวร์แอพพลิเคชั่น (Software Developers, Applications)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักวิเคราะห์ระบบคอมพิวเตอร์ (Computer Systems Analysts)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ทดสอบซอฟต์แวร์ (Software Tester)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">วิศวกรรมซอฟต์แวร์ (Software Engineer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">วิศวกรและผู้ทดสอบคุณภาพซอฟต์แวร์ (Software Quality Assurance Engineers and Testers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">วิศวกรระบบคอมพิวเตอร์/สถาปนิก (Computer Systems Engineers/Architects)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                        </div> 

                    <div class="shade1">
                    <div class="text_shade4">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 9 Web and Digital Communications</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >เว็บมาสเตอร์ (Web Master)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >โปรแกรมเมอร์พัฒนา .NET (.NET Programmer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักเขียนดิจิทัล/บล็อกเกอร์ (Digital Copy Writer/Blogger)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักการตลาดบนเว็บ (Web Marketer)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักพัฒนาเว็บ (Web Developers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักออกแบบเว็บไซต์ (Web Designer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เขียนเนื้อหาเว็บ (Web Content Writer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Specialist)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลเว็บ (Web Administrators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ดูแลโซเชียลมีเดีย (Social Media Administrator)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ทำ Youtuber/Vlogger (Youtuber/Vlogger)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                        </div> 

                    <div class="shade1">
                    <div class="text_shade5">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 10 Research</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >นักวิจัย (Researcher)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักวิทยาศาสตร์วิจัยคอมพิวเตอร์และสารสนเทศ (Computer and Information Research Scientists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">ผู้ช่วยวิจัยด้านสังคมศาสตร์ (Social Science Research Assistants)
                        <span class="checkmark"></span>
                        </label>
                        </div>
                    </div>

                    
                    <div class="shade1">
                    <div class="text_shade6">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 11 Journalism and Broadcasting</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >โฆษก/ผู้ประกาศวิทยุและโทรทัศน์ (Radio and Television Announcers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >กวี นักแต่งเพลง และนักเขียนเชิงสร้างสรรค์ (Poets, Lyricists and Creative Writers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">ช่างเทคนิคออกอากาศ (Broadcast Technicians)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ช่างกล้อง โทรทัศน์ วิดีโอ และภาพเคลื่อนไหว (Camera Operators, Television, Video, and Motion Picture)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ช่างภาพ (Photographers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ช่างภาพข่าวดิจิทัล (Digital Photojournalist)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักเขียนข้อความโฆษณา (Copy Writers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักข่าวข้อมูล (Data Journalist)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                     <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักวิเคราะห์ข่าว (Broadcast News Analysts)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">บรรณาธิการ (Editors)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">บรรณาธิการภาพยนตร์และวิดีโอ (Film and Video Editors)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เขียนบทภาพยนตร์/ผู้เล่าเรื่อง (Screenplay Writer/Storyteller)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ประกอบการวิทยุ (Radio Operators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้สร้างโครงเรื่อง (Storyline Creator)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้สื่อข่าวและผู้เขียนข่าว (Reporters and Correspondents)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้สื่อข่าววัน - แมน - แบนด์ (One-Man-Band Journalist)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้สื่อข่าวออนไลน์ (Online Reporter)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ออกแบบเชิงสร้างสรรค์ (Creative)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักวิเคราะห์อัจฉริยะ/นักวิเคราะห์ข่าวกรอง (Intelligence Analysts)
                        <span class="checkmark"></span>
                        </label>
                        </div> 


                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">เจ้าหน้าที่ประชาสัมพันธ์ (Public Relations Officer)
                        <span class="checkmark"></span>
                        </label>
                        </div> 


                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านการประชาสัมพันธ์ (Public Relations Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                        </div> 

                    <div class="shade1">
                    <div class="text_shade3">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 12 Performing Arts</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ช่างแต่งหน้า ละครและการแสดง (Makeup Artists, Theatrical and Performance)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักแสดง (Actors)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักร้อง (Singers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้กำกับ - เวที, ภาพเคลื่อนไหว, โทรทัศน์และวิทยุ (Directors- Stage, Motion Pictures, Television, and Radio)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ผลิต/ผู้อำนวยการสร้าง (Producers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้อำนวยการโครงการ (Program Directors)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้อำนวยการด้านเทคนิค/ผู้จัดการ (Technical Directors/Managers)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     
                    <div class="shade1">
                    <div class="text_shade7">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 13 Professional Support Services</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ช่างเทคนิคห้องสมุด/เจ้าหน้าที่ห้องสมุด (Library Technicians)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักจดหมายเหตุ (Archivists)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักออกแบบเทคนิคพิเศษ (Special Effect Designer)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักออกแบบและเทคโนโลยีการสอน (Instructional Designers and Technologists)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">บรรณารักษ์ดิจิทัล (Digital Librarians)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านการรวบรวมภาพ เสียง และมัลติมีเดีย (Audio-Visual and Multimedia Collections Specialists)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ประสานงานการเรียนการสอน (Instructional Coordinators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ล่ามและนักแปล (Interpreters and Translators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     <div class="shade1">
                    <div class="text_shade8">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 14 Teaching/Training</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >ครูสอนเทคนิคมัธยมต้น (Technical Education Teachers, Middle School)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >ครูสอนเทคนิคมัธยมปลาย (Technical Education Teachers, Secondary School)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">ครูสอนด้านการสื่อสาร (Communications Teachers, Postsecondary)
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ช่วยสอน (Teacher Assistants)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ช่วยสอนระดับบัณฑิตศึกษา (Graduate Teaching Assistants)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้สอนพิเศษ (Tutors)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">อาจารย์วิทยาการคอมพิวเตอร์ (Computer Science Teachers, Postsecondary)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">อาจารย์สาขาวิชาบรรณารักษศาสตร์ (Library Science Teachers, Postsecondary)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">อาจารย์สายอาชีวศึกษา (Vocational Education Teachers, Postsecondary)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                     <div class="shade1">
                    <div class="text_shade8">
                        <p id="text_header_shade1">กลุ่มอาชีพที่ 15 Visual Arts</p> 
                        <div style="margin-top: 10px;" >
                        <input type="checkbox" >               
                        <label class="container" >นักออกแบบกราฟิก (Graphic Designers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <label>    
                        <input type="checkbox" >
                        <label class="container" >นักออกแบบวิดีโอเกม (Video Game Designers)
                        <span class="checkmark"></span>
                        </label>
                        </div>

                        <div style="margin-top: 10px;" > 
                        <input type="checkbox" >
                        <label class="container">นักออกแบบชุดและจัดแสดง (Set and Exhibit Designers)
                        </label>
                        </div>

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักออกแบบตัวละครและฉาก (Character and Scene Designer)
                        <span class="checkmark"></span>
                        </label>
                        </div>    
                        
                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">นักออกแบบปั้นงาน 2D/3D (2D/3D Modeller)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้กำกับศิลป์ (Art Directors)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ศิลปินมัลติมีเดียและแอนิเมชั่น (Multimedia Artists and Animators)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้ประเมิน/ทดสอบสื่อดิจิทัล (Digital Media Evaluator/Testing)
                        <span class="checkmark"></span>
                        </label>
                        </div> 

                        <div style="margin-top: 10px;">
                        <input type="checkbox" >
                        <label class="container">ผู้เชี่ยวชาญด้านโซเชียลมีเดีย (Social Media Expert)
                        <span class="checkmark"></span>
                        </label>
                        </div> 
                     </div>

                <button onclick="location.href='shade3_list.php'" class=" button_shade2 prev" onclick="plusSlides(-1)" >ย้อนกลับ</button>   
                <button onclick="location.href='suggestion.php'" class=" button_shade1 next" onclick="move() " onclick="plusSlides(1) " > ถัดไป</button>
            </section>
        </div>

    <section id="page2" class="page2">
    
    </section>


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
                document.getElementById("label").innerHTML = width * 1  + '%';
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
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
</script>
</body>

</html>