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
        <div class="slideshow-container">
            <section id="page1" class="page1">
                <div class="shade">
                    <div class="text_header_shade">
                    ข้อเสนอแนะ
                    </div>
                </div>
    
                <div class="shade1">
                    <div class="text_shade1">
                    <form>
                    <textarea></textarea>
                    </form>
                    <p id="text_content1_shade1">การยินยอมให้เก็บข้อมูลและยืนยันให้บันทึกข้อมูล *</p>
                    <div>
                    </div>
                    <form action="">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> ข้าพเจ้าตกลงยินยอมให้เก็บ รวบรวม และประมวลผลข้อมูล 6 ส่วน ได้แก่ 1) ข้อมูลส่วนบุคคล ได้แก่ ข้อมูลเพศ ข้อมูลอาชีพ/ตำแหน่งงานในปัจจุบัน ข้อมูลระยะเวลาในการประกอบอาชีพ/ตำแหน่งงานนี้ ข้อมูลผลการเรียนเฉลี่ย (GPAX) ข้อมูลสาขาวิชาที่เรียน/จบการศึกษา 2) ข้อมูลทักษะ 3) ข้อมูลเจตคติ 4) ข้อมูลความรู้ 5) อาชีพที่เหมาะสม และ 6) ข้อเสนอแนะ ของข้าพเจ้า โดยผู้วิจัยจะเก็บรักษาข้อมูลนี้เป็นความลับและไม่แบ่งปันหรือเปิดเผยข้อมูลส่วนบุคคล ของข้าพเจ้าต่อบุคคลหรือหน่วยงานอื่น ข้าพเจ้ามีสิทธิในฐานะเจ้าของข้อมูลส่วนบุคคลตาม พรบ.คุ้มครองส่วนบุคคล พ.ศ.2562 และก่อนให้ความยินยอมข้าพเจ้าได้อ่านและเข้าใจข้อกำหนดและเงื่อนไขในการเปิดเผยข้อมูลส่วนบุคคลซึ่งระบุไว้ด้านบนของความยินยอมนี้อย่างชัดเจนแล้ว</label><br>
                    
                    </form>
                        </div>
                </div>

                <button class=" button_shade2" onclick="plusSlides(-1)" >ส่ง</button>   
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