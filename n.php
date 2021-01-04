<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\n.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
/*.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}*/

/* The dots/bullets/indicators */
/*.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}*/

.button_shade1 {
    margin-top: 270px;
    margin-left: 1rem;
    padding: 8px 30px;
    border-radius: 10px;
    font-size: 14px;
    font-family: 'Mitr', sans-serif;
    background-color: white; 
    border: 2px solid #4CAF50;
}

.button_shade2 {
    margin-top: 270px;
    margin-left: 19rem;
    padding: 8px 30px;
    border-radius: 10px;
    font-size: 14px;
    font-family: 'Mitr', sans-serif;
    background-color: white; 
    border: 2px solid #4CAF50;
}
/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
  <div class="slideshow-container">
            <section id="page1" class="page1">
                <div class="shade">
                    <div class="text_header_shade">
                        Shade 1 คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา
                    </div>
                    <div id="myProgress">
                        <div id="myBar">
                            <div id="label">0%</div>
                        </div>
                    </div>
                </div>
                <div class="shade1">
                    <div class="text_shade1">
                        <p id="text_header_shade1">Shade 1 คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา</p>
                        <p id="text_content1_shade1">คำชี้แจง: โปรดให้คะแนนที่ตรงกับระดับความสามารถของท่านมากที่สุดโดยลากแถบเลื่อน (Slider Scales) </br>
                         กำหนดเกณฑ์ 0 หมายถึง ไม่มีความสามารถ จนถึง 100 หมายถึง มีความสามารถมากที่สุด</p>
                        <p id="text_content2_shade1">คลิกปุ่ม "ถัดไป" เพื่อเริ่มทำแบบทดสอบ</p>
                        </div>
                </div>
            </section>
        </div>
</div>

<div class="mySlides">
<div class="slideshow-container">
            <section id="page2" class="page2">
                <div class="shade">
                    <div class="text_header_shade">
                        Shade 1 คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา.
                    </div>
                    <div id="myProgress">
                        <div id="myBar">
                            <div id="label">0%</div>
                        </div>
                    </div>
                </div>
    
                <div class="shade1">
                    <div class="text_shade1">
                    <p id="text_content1_shade1">คำถามเชิงจิตวิทยาวัดทักษะของนักศึกษา กำหนดเกณฑ์การให้คะแนนระดับความสามารถเป็น scale 0 ถึง 100</p>
                        <p id="text_header_shade1">1.คุณสามารถเขียนบรรยายเพื่อเล่าเรื่องจากประสบการณ์ของตนเองได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>
</div>

                        <p id="text_header_shade1">2.คุณสามารถเขียนบรรยายจากจิตนาการได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">3.คุณสามารถพึ่งพามโนภาพในการออกแบบได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">4.คุณสามารถทำงานกับสิ่งที่ปฏิบัติได้ทันที.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">5.คุณสามารถผสานการทำงานเข้ากับการเรียนรู้ได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">6.คุณสามารถเรียนรู้ ทำงานหนัก และมีระเบียบวินัยได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">7.คุณสามารถทำงานที่มีวิธีการเชิงตรรกะอย่างละเอียดได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">8.คุณสามารถเป็นผู้นำได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">9.คุณสามารถช่วยเหลือผู้อื่นในการแก้ไขสถานการณ์ความขัดแย้งได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">10.คุณสามารถพูดคุยและถ่ายทอดข้อมูลให้กับผู้อื่นในที่ทำงานให้เข้าใจได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">11.คุณสามารถบอกให้ผู้อื่นทำบางสิ่งบางอย่างตามที่คุณต้องการได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">12.คุณสามารถทำงานในสภาพแวดล้อมทางธุรกิจได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">13.คุณสามารถช่วยผู้อื่นในการแก้ปัญหาได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">14.คุณสามารถมีส่วนร่วมในการแก้ปัญหาทางวิทยาศาสตร์ได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">15.คุณสามารถเรียนรู้วิชาที่มีความเชื่อมโยงกับอาชีพที่อยากทำด้วยตนเองได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">16.คุณสามารถใช้ทักษะแบบทำด้วยมือและแบบทำด้วยเครื่องจักรได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">17.คุณสามารถเข้าไปมีส่วนร่วมในภาวะตึงเครียดและเสี่ยงอันตรายได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">18.คุณสามารถทำงานกลางแจ้งได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">19.คุณสามารถทำงานกับองค์กรและกลุ่มได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">20.คุณสามารถทำงานเป็นทีมหรือกลุ่มใหญ่ได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">21.คุณสามารถให้บริการที่เกี่ยวกับการพยาบาลหรือการดูแลสุขภาพได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">22.คุณสามารถพึ่งพาและเชื่อมั่นเพื่อนร่วมงานในการทำงานได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">23.คุณสามารถเข้าไปมีส่วนร่วมในประเด็นปัญหาสังคมได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">24.คุณสามารถเข้าไปมีส่วนร่วมในเหตุการณ์ปัจจุบันได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">25.คุณสามารถทำงานกับเด็กหรือคนหนุ่มสาวได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>

                        <p id="text_header_shade1">26.คุณสามารถสอนเด็ก วัยรุ่น หรือวัยผู้ใหญ่ได้.</p>
                        <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                        <p>Value: <span id="demo"></span></p>
                    </div>                                                                                              
                        </div>
                </div>               
            </section>
        </div>
 
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
