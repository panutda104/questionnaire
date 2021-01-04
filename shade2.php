<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_shade.css">
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
                        Shade 2 คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา
                    </div>
                    <div id="myProgress">
                        <div id="myBar">
                            <div id="label">0%</div>
                        </div>
                    </div>
                </div>
    
                <div class="shade1">
                    <div class="text_shade1">
                        <p id="text_header_shade1">Shade 2 คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา</p>
                        <p id="text_content1_shade1">คำชี้แจง: โปรดให้คะแนนที่ตรงกับระดับความสามารถของท่านมากที่สุดโดยลากแถบเลื่อน (Slider Scales) </br>
                         กำหนดเกณฑ์ 0 หมายถึง ไม่มีความสามารถ จนถึง 100 หมายถึง มีความสามารถมากที่สุด</p>
                        <p id="text_content2_shade1">คลิกปุ่ม "ถัดไป" เพื่อเริ่มทำแบบทดสอบ</p>
                        </div>
                </div>

                <button class=" button_shade2 prev" onclick="plusSlides(-1)" >ย้อนกลับ</button>   
                <button onclick="location.href='shade2_list.php'" class=" button_shade1 next" onclick="move() " onclick="plusSlides(1) "> ถัดไป</button>
                
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
   
</body>

</html>