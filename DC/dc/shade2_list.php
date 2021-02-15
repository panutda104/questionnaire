<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM dc_shade1_psychology");
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i += 1;
}
$_SESSION['psychology_code'] = 'S1_000' . $i;
$psychology_code = $_SESSION['psychology_code'];
$personal_code = $_SESSION['personal_code'];

$range = $_POST['range'];
$range2 = $_POST['range2'];
$range3 = $_POST['range3'];
$range4 = $_POST['range4'];
$range5 = $_POST['range5'];
$range6 = $_POST['range6'];
$range7 = $_POST['range7'];
$range8 = $_POST['range8'];
$range9 = $_POST['range9'];
$range10 = $_POST['range10'];
$range11 = $_POST['range11'];
$range12 = $_POST['range12'];
$range13 = $_POST['range13'];
$range14 = $_POST['range14'];
$range15 = $_POST['range15'];
$range16 = $_POST['range16'];
$range17 = $_POST['range17'];
$range18 = $_POST['range18'];
$range19 = $_POST['range19'];
$range20 = $_POST['range20'];
$range21 = $_POST['range21'];
$range22 = $_POST['range22'];
$range23 = $_POST['range23'];
$range24 = $_POST['range24'];
$range25 = $_POST['range25'];
$range26 = $_POST['range26'];

$sql = "INSERT INTO dc_shade1_psychology 
(
    psychology_code,
    personal_code,
    psychology_1,
    psychology_2,
    psychology_3,
    psychology_4,
    psychology_5,
    psychology_6,
    psychology_7,
    psychology_8,
    psychology_9,
    psychology_10,
    psychology_11,
    psychology_12,
    psychology_13,
    psychology_14,
    psychology_15,
    psychology_16,
    psychology_17,
    psychology_18,
    psychology_19,
    psychology_20,
    psychology_21,
    psychology_22,
    psychology_23,
    psychology_24,
    psychology_25,
    psychology_26

)
VALUES ('$psychology_code','$personal_code','$range','$range2','$range3','$range4','$range5','$range6','$range7','$range8','$range9','$range10','$range11','$range12','$range13','$range14','$range15','$range16','$range17','$range18','$range19','$range20','$range21','$range22','$range23','$range24','$range25','$range26')";
//echo "CHECH SQL = ".$sql;

if (!mysqli_query($con, $sql)) {
    die(mysqli_error($con));
} else {
}
mysqli_close($con);
//echo "num = ".$_POST['range2'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='../css/style_shade2_list.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>DC-shade2</title>
</head>

<body>
<form id="page1" class="page1" action="shade3_list.php" method="post">
                <div class="shade">
                    <div class="text_header_shade2">
                        ส่วนที่ 3  เก็บรวบรวมข้อมูลเจตคติ
                    </div>
                </div>
    
                <div class="shade2">
                    <div>
                        <p id="text_content1_shade1_1">คำถามเชิงจิตวิทยาเก็บรวบรวมข้อมูลเจตคติของนักศึกษา </p>
                        <i>
                            <p id="text_content1_shade1">คำชี้แจง: โปรดให้คะแนนที่ตรงกับระดับความชอบของท่านมากที่สุด โดยลากแถบเลื่อน (Slider Scales) กำหนดเกณฑ์ 0 หมายถึง ไม่ชอบ จนถึง 100 หมายถึง ชอบมากที่สุด</p>
                        </i>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">1 . คุณชอบเขียนบรรยายเพื่อเล่าเรื่องจากประสบการณ์ของตนเอง</p>
                        <div class="range-wrap27">
                            <div class="range-value27" id="rangeV27"></div>
                                <input name="range27" id="range27" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">2 . คุณชอบเขียนบรรยายจากจิตนาการ </p>
                        <div class="range-wrap28">
                            <div class="range-value28" id="rangeV28"></div>
                                <input name="range28" id="range28" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">3 . คุณชอบพึ่งพามโนภาพในการออกแบบ </p>
                        <div class="range-wrap29">
                            <div class="range-value29" id="rangeV29"></div>
                                <input name="range29"  id="range29" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">4 . คุณชอบทำงานกับสิ่งที่ปฏิบัติได้ทันที  </p>
                        <div class="range-wrap30">
                            <div class="range-value30" id="rangeV30"></div>
                                <input name="range30" id="range30" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">5 . คุณชอบผสานการทำงานเข้ากับการเรียนรู้  </p>
                        <div class="range-wrap31">
                            <div class="range-value31" id="rangeV31"></div>
                                <input name="range31" id="range31" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">6 . คุณชอบเรียนรู้ ทำงานหนัก และมีระเบียบวินัย  </p>
                        <div class="range-wrap32">
                            <div class="range-value32" id="rangeV32"></div>
                                <input name="range32" id="range32" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">7 . คุณชอบทำงานที่มีวิธีการเชิงตรรกะอย่างละเอียด  </p>
                        <div class="range-wrap33">
                            <div class="range-value33" id="rangeV33"></div>
                                <input name="range33" id="range33" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">8 . คุณชอบการฝึกอบรมความเป็นผู้นำ  </p>
                        <div class="range-wrap34">
                            <div class="range-value34" id="rangeV34"></div>
                                <input name="range34" id="range34" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">9 . คุณชอบช่วยเหลือผู้อื่นในการแก้ไขสถานการณ์ความขัดแย้ง   </p>
                        <div class="range-wrap35">
                            <div class="range-value35" id="rangeV35"></div>
                                <input name="range35" id="range35" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">10 . คุณชอบพูดคุยและถ่ายทอดข้อมูลให้กับผู้อื่นในที่ทำงานให้เข้าใจ   </p>
                        <div class="range-wrap36">
                            <div class="range-value36" id="rangeV36"></div>
                                <input name="range36" id="range36" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">11 . คุณชอบบอกให้ผู้อื่นทำบางสิ่งบางอย่างตามที่คุณต้องการ   </p>
                        <div class="range-wrap37">
                            <div class="range-value37" id="rangeV37"></div>
                                <input name="range37" id="range37" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">12 . คุณชอบทำงานในสภาพแวดล้อมทางธุรกิจ    </p>
                        <div class="range-wrap38">
                            <div class="range-value38" id="rangeV38"></div>
                                <input name="range38" id="range38" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div> 
                    <div>
                        <p id="text_content2_shade2">13 . คุณชอบมีส่วนร่วมในการแก้ปัญหาทางวิทยาศาสตร์    </p>
                        <div class="range-wrap39">
                            <div class="range-value39" id="rangeV39"></div>
                                <input name="range39" id="range39" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">14 . คุณชอบเรียนรู้วิชาที่มีความเชื่อมโยงกับอาชีพที่อยากทำด้วยตนเอง    </p>
                        <div class="range-wrap40">
                            <div class="range-value40" id="rangeV40"></div>
                                <input name="range40" id="range40" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">15 . คุณชอบช่วยผู้อื่นในการแก้ปัญหา    </p>
                        <div class="range-wrap41">
                            <div class="range-value41" id="rangeV41"></div>
                                <input name="range41" id="range41" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">16 . คุณชอบใช้ทักษะแบบทำด้วยมือและแบบทำด้วยเครื่องจักร    </p>
                        <div class="range-wrap42">
                            <div class="range-value42" id="rangeV42"></div>
                                <input name="range42" id="range42" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">17 . คุณชอบเข้าไปมีส่วนร่วมในภาวะตึงเครียดและเสี่ยงอันตรายได้     </p>
                        <div class="range-wrap43">
                            <div class="range-value43" id="rangeV43"></div>
                                <input name="range43" id="range43" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">18 . คุณชอบทำงานกลางแจ้ง      </p>
                        <div class="range-wrap44">
                            <div class="range-value44" id="rangeV44"></div>
                                <input name="range44" id="range44" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">19 . คุณชอบทำงานกับองค์กรและกลุ่ม      </p>
                        <div class="range-wrap45">
                            <div class="range-value45" id="rangeV45"></div>
                                <input name="range45"id="range45" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">20 . คุณชอบทำงานเป็นทีมหรือกลุ่มใหญ่      </p>
                        <div class="range-wrap46">
                            <div class="range-value46" id="rangeV46"></div>
                                <input name="range46" id="range46" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">21 . คุณชอบให้บริการที่เกี่ยวกับการพยาบาลหรือการดูแลสุขภาพ       </p>
                        <div class="range-wrap47">
                            <div class="range-value47" id="rangeV47"></div>
                                <input name="range47" id="range47" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">22 . คุณขอบพึ่งพาและเชื่อมั่นเพื่อนร่วมงานในการทำงาน       </p>
                        <div class="range-wrap48">
                            <div class="range-value48" id="rangeV48"></div>
                                <input name="range48" id="range48" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">23 . คุณชอบเข้าไปมีส่วนร่วมในประเด็นปัญหาสังคม       </p>
                        <div class="range-wrap49">
                            <div class="range-value49" id="rangeV49"></div>
                                <input name="range49" id="range49" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">24 . คุณชอบเข้าไปมีส่วนร่วมในเหตุการณ์ปัจจุบัน       </p>
                        <div class="range-wrap50">
                            <div class="range-value50" id="rangeV50"></div>
                                <input name="range50" id="range50" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">25 . คุณชอบทำงานกับเด็กหรือคนหนุ่มสาว       </p>
                        <div class="range-wrap51">
                            <div class="range-value51" id="rangeV51"></div>
                                <input  name="range51" id="range51" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <div>
                        <p id="text_content2_shade2">26 . คุณชอบสอนเด็ก วัยรุ่น หรือวัยผู้ใหญ่       </p>
                        <div class="range-wrap52">
                            <div class="range-value52" id="rangeV52"></div>
                                <input name="range52" id="range52" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                        </div>
                    </div>
                    <br><br>             
                </div>
                <center><input type='submit' class="button1" type="submit" value="ถัดไป">
                
            </form>
     

<!-- script Range27 -->
            <script>
                const
                    range27 = document.getElementById('range27'),
                    rangeV27 = document.getElementById('rangeV27'),
                    setValue27 = ()=>{
                        const
                        newValue27 = Number( (range27.value - range27.min) * 100 / (range27.max - range27.min) ),
                        newPosition27 = 10 - (newValue27 * 0.2);
                        rangeV27.innerHTML = `<span>${range27.value}</span>`;
                        rangeV27.style.left = `calc(${newValue27}% + (${newPosition27}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue27);
                    range27.addEventListener('input', setValue27);
            </script>

<!-- script Range28 -->
            <script>
                const
                    range28 = document.getElementById('range28'),
                    rangeV28 = document.getElementById('rangeV28'),
                    setValue28 = ()=>{
                        const
                        newValue28 = Number( (range28.value - range28.min) * 100 / (range28.max - range28.min) ),
                        newPosition28 = 10 - (newValue28 * 0.2);
                        rangeV28.innerHTML = `<span>${range28.value}</span>`;
                        rangeV28.style.left = `calc(${newValue28}% + (${newPosition28}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue28);
                    range28.addEventListener('input', setValue28);
            </script>

<!-- script Range29 -->
            <script>
                const
                    range29 = document.getElementById('range29'),
                    rangeV29 = document.getElementById('rangeV29'),
                    setValue29 = ()=>{
                        const
                        newValue29 = Number( (range29.value - range29.min) * 100 / (range29.max - range29.min) ),
                        newPosition29 = 10 - (newValue29 * 0.2);
                        rangeV29.innerHTML = `<span>${range29.value}</span>`;
                        rangeV29.style.left = `calc(${newValue29}% + (${newPosition29}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue29);
                    range29.addEventListener('input', setValue29);
            </script>

<!-- script Range30 -->
            <script>
                const
                    range30 = document.getElementById('range30'),
                    rangeV30 = document.getElementById('rangeV30'),
                    setValue30 = ()=>{
                        const
                        newValue30 = Number( (range30.value - range30.min) * 100 / (range30.max - range30.min) ),
                        newPosition30 = 10 - (newValue30 * 0.2);
                        rangeV30.innerHTML = `<span>${range30.value}</span>`;
                        rangeV30.style.left = `calc(${newValue30}% + (${newPosition30}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue30);
                    range30.addEventListener('input', setValue30);
            </script>

<!-- script Range31 -->
            <script>
                const
                    range31 = document.getElementById('range31'),
                    rangeV31 = document.getElementById('rangeV31'),
                    setValue31 = ()=>{
                        const
                        newValue31 = Number( (range31.value - range31.min) * 100 / (range31.max - range31.min) ),
                        newPosition31 = 10 - (newValue31 * 0.2);
                        rangeV31.innerHTML = `<span>${range31.value}</span>`;
                        rangeV31.style.left = `calc(${newValue31}% + (${newPosition31}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue31);
                    range31.addEventListener('input', setValue31);
            </script>

<!-- script Range32 -->
            <script>
                const
                    range32 = document.getElementById('range32'),
                    rangeV32 = document.getElementById('rangeV32'),
                    setValue32 = ()=>{
                        const
                        newValue32 = Number( (range32.value - range32.min) * 100 / (range32.max - range32.min) ),
                        newPosition32 = 10 - (newValue32 * 0.2);
                        rangeV32.innerHTML = `<span>${range32.value}</span>`;
                        rangeV32.style.left = `calc(${newValue32}% + (${newPosition32}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue32);
                    range32.addEventListener('input', setValue32);
            </script>

<!-- script Range33 -->
            <script>
                const
                    range33 = document.getElementById('range33'),
                    rangeV33 = document.getElementById('rangeV33'),
                    setValue33 = ()=>{
                        const
                        newValue33 = Number( (range33.value - range33.min) * 100 / (range33.max - range33.min) ),
                        newPosition33 = 10 - (newValue33 * 0.2);
                        rangeV33.innerHTML = `<span>${range33.value}</span>`;
                        rangeV33.style.left = `calc(${newValue33}% + (${newPosition33}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue33);
                    range33.addEventListener('input', setValue33);
            </script>

<!-- script Range34 -->
            <script>
                const
                    range34 = document.getElementById('range34'),
                    rangeV34 = document.getElementById('rangeV34'),
                    setValue34 = ()=>{
                        const
                        newValue34 = Number( (range34.value - range34.min) * 100 / (range34.max - range34.min) ),
                        newPosition34 = 10 - (newValue34 * 0.2);
                        rangeV34.innerHTML = `<span>${range34.value}</span>`;
                        rangeV34.style.left = `calc(${newValue34}% + (${newPosition34}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue34);
                    range34.addEventListener('input', setValue34);
            </script>

<!-- script Range35 -->
            <script>
                const
                    range35 = document.getElementById('range35'),
                    rangeV35 = document.getElementById('rangeV35'),
                    setValue35 = ()=>{
                        const
                        newValue35 = Number( (range35.value - range35.min) * 100 / (range35.max - range35.min) ),
                        newPosition35 = 10 - (newValue35 * 0.2);
                        rangeV35.innerHTML = `<span>${range35.value}</span>`;
                        rangeV35.style.left = `calc(${newValue35}% + (${newPosition35}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue35);
                    range35.addEventListener('input', setValue35);
            </script>

<!-- script Range36 -->
            <script>
                const
                    range36 = document.getElementById('range36'),
                    rangeV36 = document.getElementById('rangeV36'),
                    setValue36 = ()=>{
                        const
                        newValue36 = Number( (range36.value - range36.min) * 100 / (range36.max - range36.min) ),
                        newPosition36 = 10 - (newValue36 * 0.2);
                        rangeV36.innerHTML = `<span>${range36.value}</span>`;
                        rangeV36.style.left = `calc(${newValue36}% + (${newPosition36}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue36);
                    range36.addEventListener('input', setValue36);
            </script>

<!-- script Range37 -->
            <script>
                const
                    range37 = document.getElementById('range37'),
                    rangeV37 = document.getElementById('rangeV37'),
                    setValue37 = ()=>{
                        const
                        newValue37 = Number( (range37.value - range37.min) * 100 / (range37.max - range37.min) ),
                        newPosition37 = 10 - (newValue37 * 0.2);
                        rangeV37.innerHTML = `<span>${range37.value}</span>`;
                        rangeV37.style.left = `calc(${newValue37}% + (${newPosition37}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue37);
                    range37.addEventListener('input', setValue37);
            </script>

<!-- script Range38 -->
            <script>
                const
                    range38 = document.getElementById('range38'),
                    rangeV38 = document.getElementById('rangeV38'),
                    setValue38 = ()=>{
                        const
                        newValue38 = Number( (range38.value - range38.min) * 100 / (range38.max - range38.min) ),
                        newPosition38 = 10 - (newValue38 * 0.2);
                        rangeV38.innerHTML = `<span>${range38.value}</span>`;
                        rangeV38.style.left = `calc(${newValue38}% + (${newPosition38}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue38);
                    range38.addEventListener('input', setValue38);
            </script>

<!-- script Range39 -->
            <script>
                const
                    range39 = document.getElementById('range39'),
                    rangeV39 = document.getElementById('rangeV39'),
                    setValue39 = ()=>{
                        const
                        newValue39 = Number( (range39.value - range39.min) * 100 / (range39.max - range39.min) ),
                        newPosition39 = 10 - (newValue39 * 0.2);
                        rangeV39.innerHTML = `<span>${range39.value}</span>`;
                        rangeV39.style.left = `calc(${newValue39}% + (${newPosition39}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue39);
                    range39.addEventListener('input', setValue39);
            </script>

<!-- script Range40 -->
            <script>
                const
                    range40 = document.getElementById('range40'),
                    rangeV40 = document.getElementById('rangeV40'),
                    setValue40 = ()=>{
                        const
                        newValue40 = Number( (range40.value - range40.min) * 100 / (range40.max - range40.min) ),
                        newPosition40 = 10 - (newValue40* 0.2);
                        rangeV40.innerHTML = `<span>${range40.value}</span>`;
                        rangeV40.style.left = `calc(${newValue40}% + (${newPosition40}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue40);
                    range40.addEventListener('input', setValue40);
            </script>

<!-- script Range41 -->
            <script>
                const
                    range41 = document.getElementById('range41'),
                    rangeV41 = document.getElementById('rangeV41'),
                    setValue41 = ()=>{
                        const
                        newValue41 = Number( (range41.value - range41.min) * 100 / (range41.max - range41.min) ),
                        newPosition41 = 10 - (newValue41* 0.2);
                        rangeV41.innerHTML = `<span>${range41.value}</span>`;
                        rangeV41.style.left = `calc(${newValue41}% + (${newPosition41}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue41);
                    range41.addEventListener('input', setValue41);
            </script>

<!-- script Range42 -->
            <script>
                const
                    range42 = document.getElementById('range42'),
                    rangeV42 = document.getElementById('rangeV42'),
                    setValue42 = ()=>{
                        const
                        newValue42 = Number( (range42.value - range42.min) * 100 / (range42.max - range42.min) ),
                        newPosition42 = 10 - (newValue42* 0.2);
                        rangeV42.innerHTML = `<span>${range42.value}</span>`;
                        rangeV42.style.left = `calc(${newValue42}% + (${newPosition42}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue42);
                    range42.addEventListener('input', setValue42);
            </script>

<!-- script Range43 -->
            <script>
                const
                    range43 = document.getElementById('range43'),
                    rangeV43 = document.getElementById('rangeV43'),
                    setValue43 = ()=>{
                        const
                        newValue43 = Number( (range43.value - range43.min) * 100 / (range43.max - range43.min) ),
                        newPosition43 = 10 - (newValue43* 0.2);
                        rangeV43.innerHTML = `<span>${range43.value}</span>`;
                        rangeV43.style.left = `calc(${newValue43}% + (${newPosition43}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue43);
                    range43.addEventListener('input', setValue43);
            </script>

<!-- script Range44 -->
            <script>
                const
                    range44 = document.getElementById('range44'),
                    rangeV44 = document.getElementById('rangeV44'),
                    setValue44 = ()=>{
                        const
                        newValue44 = Number( (range44.value - range44.min) * 100 / (range44.max - range44.min) ),
                        newPosition44 = 10 - (newValue44* 0.2);
                        rangeV44.innerHTML = `<span>${range44.value}</span>`;
                        rangeV44.style.left = `calc(${newValue44}% + (${newPosition44}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue44);
                    range44.addEventListener('input', setValue44);
            </script>

<!-- script Range45 -->
            <script>
                const
                    range45 = document.getElementById('range45'),
                    rangeV45 = document.getElementById('rangeV45'),
                    setValue45 = ()=>{
                        const
                        newValue45 = Number( (range45.value - range45.min) * 100 / (range45.max - range45.min) ),
                        newPosition45 = 10 - (newValue45* 0.2);
                        rangeV45.innerHTML = `<span>${range45.value}</span>`;
                        rangeV45.style.left = `calc(${newValue45}% + (${newPosition45}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue45);
                    range45.addEventListener('input', setValue45);
            </script>

<!-- script Range46 -->
            <script>
                const
                    range46 = document.getElementById('range46'),
                    rangeV46 = document.getElementById('rangeV46'),
                    setValue46 = ()=>{
                        const
                        newValue46 = Number( (range46.value - range46.min) * 100 / (range46.max - range46.min) ),
                        newPosition46 = 10 - (newValue46* 0.2);
                        rangeV46.innerHTML = `<span>${range46.value}</span>`;
                        rangeV46.style.left = `calc(${newValue46}% + (${newPosition46}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue46);
                    range46.addEventListener('input', setValue46);
            </script>

<!-- script Range47 -->
            <script>
                const
                    range47 = document.getElementById('range47'),
                    rangeV47 = document.getElementById('rangeV47'),
                    setValue47 = ()=>{
                        const
                        newValue47 = Number( (range47.value - range47.min) * 100 / (range47.max - range47.min) ),
                        newPosition47 = 10 - (newValue47* 0.2);
                        rangeV47.innerHTML = `<span>${range47.value}</span>`;
                        rangeV47.style.left = `calc(${newValue47}% + (${newPosition47}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue47);
                    range47.addEventListener('input', setValue47);
            </script>

<!-- script Range48 -->
            <script>
                const
                    range48 = document.getElementById('range48'),
                    rangeV48 = document.getElementById('rangeV48'),
                    setValue48 = ()=>{
                        const
                        newValue48 = Number( (range48.value - range48.min) * 100 / (range48.max - range48.min) ),
                        newPosition48 = 10 - (newValue48* 0.2);
                        rangeV48.innerHTML = `<span>${range48.value}</span>`;
                        rangeV48.style.left = `calc(${newValue48}% + (${newPosition48}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue48);
                    range48.addEventListener('input', setValue48);
            </script>

<!-- script Range49 -->
            <script>
                const
                    range49 = document.getElementById('range49'),
                    rangeV49 = document.getElementById('rangeV49'),
                    setValue49 = ()=>{
                        const
                        newValue49 =  Number( (range49.value - range49.min) * 100 / (range49.max - range49.min) ),
                        newPosition49 = 10 - (newValue49* 0.2);
                        rangeV49.innerHTML = `<span>${range49.value}</span>`;
                        rangeV49.style.left = `calc(${newValue49}% + (${newPosition49}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue49);
                    range49.addEventListener('input', setValue49);
            </script>

<!-- script Range50 -->
            <script>
                const
                    range50 = document.getElementById('range50'),
                    rangeV50 = document.getElementById('rangeV50'),
                    setValue50 = ()=>{
                        const
                        newValue50 =  Number( (range50.value - range50.min) * 100 / (range50.max - range50.min) ),
                        newPosition50 = 10 - (newValue50* 0.2);
                        rangeV50.innerHTML = `<span>${range50.value}</span>`;
                        rangeV50.style.left = `calc(${newValue50}% + (${newPosition50}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue50);
                    range50.addEventListener('input', setValue50);
            </script>

<!-- script Range51 -->
            <script>
                const
                    range51 = document.getElementById('range51'),
                    rangeV51 = document.getElementById('rangeV51'),
                    setValue51 = ()=>{
                        const
                        newValue51 =  Number( (range51.value - range51.min) * 100 / (range51.max - range51.min) ),
                        newPosition51 = 10 - (newValue51* 0.2);
                        rangeV51.innerHTML = `<span>${range51.value}</span>`;
                        rangeV51.style.left = `calc(${newValue51}% + (${newPosition51}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue51);
                    range51.addEventListener('input', setValue51);
            </script>

<!-- script Range52 -->
            <script>
                const
                    range52 = document.getElementById('range52'),
                    rangeV52 = document.getElementById('rangeV52'),
                    setValue52 = ()=>{
                        const
                        newValue52 =  Number( (range52.value - range52.min) * 100 / (range52.max - range52.min) ),
                        newPosition52 = 10 - (newValue52* 0.2);
                        rangeV52.innerHTML = `<span>${range52.value}</span>`;
                        rangeV52.style.left = `calc(${newValue52}% + (${newPosition52}px))`;
                    };
                    document.addEventListener("DOMContentLoaded", setValue52);
                    range52.addEventListener('input', setValue52);
            </script>


</html>