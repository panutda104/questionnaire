<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM dc_shade2_attitude");
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i += 1;
}
$_SESSION['attitude_code'] = 'S2_000' . $i;
$attitude_code = $_SESSION['attitude_code'];
$personal_code = $_SESSION['personal_code'];

$range27 = $_POST['range27'];
$range28 = $_POST['range28'];
$range29 = $_POST['range29'];
$range30 = $_POST['range30'];
$range31 = $_POST['range31'];
$range32 = $_POST['range32'];
$range33 = $_POST['range33'];
$range34 = $_POST['range34'];
$range35 = $_POST['range35'];
$range36 = $_POST['range36'];
$range37 = $_POST['range37'];
$range38 = $_POST['range38'];
$range39 = $_POST['range39'];
$range40 = $_POST['range40'];
$range41 = $_POST['range41'];
$range42 = $_POST['range42'];
$range43 = $_POST['range43'];
$range44 = $_POST['range44'];
$range45 = $_POST['range45'];
$range46 = $_POST['range46'];
$range47 = $_POST['range47'];
$range48 = $_POST['range48'];
$range49 = $_POST['range49'];
$range50 = $_POST['range50'];
$range51 = $_POST['range51'];
$range52 = $_POST['range52'];


$sql = "INSERT INTO dc_shade2_attitude
(
    attitude_code,
    personal_code,
    attitude_1,
    attitude_2,
    attitude_3,
    attitude_4,
    attitude_5,
    attitude_6,
    attitude_7,
    attitude_8,
    attitude_9,
    attitude_10,
    attitude_11,
    attitude_12,
    attitude_13,
    attitude_14,
    attitude_15,
    attitude_16,
    attitude_17,
    attitude_18,
    attitude_19,
    attitude_20,
    attitude_21,
    attitude_22,
    attitude_23,
    attitude_24,
    attitude_25,
    attitude_26
)
VALUES ('$attitude_code','$personal_code','$range27','$range28','$range29','$range30','$range31','$range32','$range33','$range34','$range35','$range36','$range37','$range38','$range39','$range40','$range41','$range42','$range43','$range44','$range45','$range46','$range47','$range48','$range49','$range50','$range51','$range52')";
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
    <link rel="stylesheet" href='../css/style_shade3_list.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>DC-shade3</title>
</head>

<body>
    <form id="page1" class="page1" action="career.php" method="post">
    <div class="shade">
            <div class="text_header_shade3">
                ส่วนที่ 4 เก็บรวบรวมข้อมูลความรู้
            </div>
        </div>

        <div class="shade3">
            <div>
                <p id="text_content1_shade1_1">คำถามเก็บรวบรวมข้อมูลความรู้ของนักศึกษา</p>
                <i>
                    <p id="text_content1_shade1">คำชี้แจง: โปรดให้คะแนนที่ตรงกับระดับความรู้ของท่านมากที่สุด โดยลากแถบเลื่อน (Slider Scales) กำหนดเกณฑ์ 0 หมายถึง ไม่มีความรู้ จนถึง 100 หมายถึง มีความรู้มากที่สุด</p>
                </i>
            </div>
            <div>
                <p id="text_content2_shade3">1 . การบริหารและการจัดการ (Administration and Management) </p>
                <div class="range-wrap53">
                    <div class="range-value53" id="rangeV53"></div>
                    <input name="range53" id="range53" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena53"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">2 . ชีววิทยา (Biology) </p>
                <div class="range-wrap54">
                    <div class="range-value54" id="rangeV54"></div>
                    <input name="range54" id="range54" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena54"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">3 . อาคารและการก่อสร้าง (Building and Construction) </p>
                <div class="range-wrap55">
                    <div class="range-value55" id="rangeV55"></div>
                    <input name="range55" id="range55" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena55"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">4 . เคมี (Chemistry) </p>
                <div class="range-wrap56">
                    <div class="range-value56" id="rangeV56"></div>
                    <input name="range56" id="range56" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena56"> </div>
                </div>
                </hr>
            </div>
            <div>
                <p id="text_content2_shade3">5 . งานด้านเสมียนหรือธุรการ (Clerical) </p>
                <div class="range-wrap57">
                    <div class="range-value57" id="rangeV57"></div>
                    <input name="range57" id="range57" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena57"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">6 . การสื่อสารและสื่อ (Communications and Media) </p>
                <div class="range-wrap58">
                    <div class="range-value58" id="rangeV58"></div>
                    <input name="range58" id="range58" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena58"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">7 . คอมพิวเตอร์และอิเล็กทรอนิกส์ (Computers and Electronics) </p>
                <div class="range-wrap59">
                    <div class="range-value59" id="rangeV59"></div>
                    <input name="range59" id="range59" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                </div>
            </div>
            <div>
                <p id="text_content2_shade3">8 . ลูกค้าและบริการส่วนบุคคล (Customer and Personal Service) </p>
                <div class="range-wrap60">
                    <div class="range-value60" id="rangeV60"></div>
                    <input name="range60" id="range60" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena60"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">9 . ออกแบบ (Design) </p>
                <div class="range-wrap61">
                    <div class="range-value61" id="rangeV61"></div>
                    <input name="range61" id="range61" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena61"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">10 . เศรษฐศาสตร์และการบัญชี (Economics and Accounting) </p>
                <div class="range-wrap62">
                    <div class="range-value62" id="rangeV62"></div>
                    <input name="range62" id="range62" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena62"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">11 . การศึกษาและการฝึกอบรม (Education and Training) </p>
                <div class="range-wrap63">
                    <div class="range-value63" id="rangeV63"></div>
                    <input name="range63" id="range63" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena63"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">12 . วิศวกรรมและเทคโนโลยี (Engineering and Technology) </p>
                <div class="range-wrap64">
                    <div class="range-value64" id="rangeV64"></div>
                    <input name="range64" id="range64" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena64"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">13 . ภาษาอังกฤษ (English Language) </p>
                <div class="range-wrap65">
                    <div class="range-value65" id="rangeV65"></div>
                    <input name="range65" id="range65" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena65"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">14 . การผลิตอาหาร (Food Production) </p>
                <div class="range-wrap66">
                    <div class="range-value66" id="rangeV66"></div>
                    <input name="range66" id="range66" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena66"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">15 . ภาษาต่างประเทศ (Foreign Language) </p>
                <div class="range-wrap67">
                    <div class="range-value67" id="rangeV67"></div>
                    <input name="range67" id="range67" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena67"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">16 . ภูมิศาสตร์ (Geography) </p>
                <div class="range-wrap68">
                    <div class="range-value68" id="rangeV68"></div>
                    <input name="range68" id="range68" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena68"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">17 . ประวัติศาสตร์และโบราณคดี (History and Archeology) </p>
                <div class="range-wrap69">
                    <div class="range-value69" id="rangeV69"></div>
                    <input name="range69" id="range69" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena69"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">18 . กฎหมายและการปกครอง (Law and Government) </p>
                <div class="range-wrap70">
                    <div class="range-value70" id="rangeV70"></div>
                    <input name="range70" id="range70" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena70"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">19 . คณิตศาสตร์ (Mathematics) </p>
                <div class="range-wrap71">
                    <div class="range-value71" id="rangeV71"></div>
                    <input name="range71" id="range71" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena71"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">20 . เชิงกล (Mechanical) </p>
                <div class="range-wrap72">
                    <div class="range-value72" id="rangeV72"></div>
                    <input name="range72" id="range72" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena72"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">21 . ยาและทันตกรรม (Medicine and Dentistry) </p>
                <div class="range-wrap73">
                    <div class="range-value73" id="rangeV73"></div>
                    <input name="range73" id="range73" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena73"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">22 . บุคลากรและทรัพยากรมนุษย์ (Personnel and Human Resources) </p>
                <div class="range-wrap74">
                    <div class="range-value74" id="rangeV74"></div>
                    <input name="range74" id="range74" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena74"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">23 . ปรัชญาและเทววิทยา (Philosophy and Theology) </p>
                <div class="range-wrap75">
                    <div class="range-value75" id="rangeV75"></div>
                    <input name="range75" id="range75" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena75"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">24 . ฟิสิกส์ (Physics) </p>
                <div class="range-wrap76">
                    <div class="range-value76" id="rangeV76"></div>
                    <input name="range76" id="range76" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena76"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">25 . การผลิตและการแปรรูป (Production and Processing) </p>
                <div class="range-wrap77">
                    <div class="range-value77" id="rangeV77"></div>
                    <input name="range77" id="range77" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena77"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">26 . จิตวิทยา (Psychology) </p>
                <div class="range-wrap78">
                    <div class="range-value78" id="rangeV78"></div>
                    <input name="range78" id="range78" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena78"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">27 . ความปลอดภัยสาธารณะและความปลอดภัย (Public Safety and Security) </p>
                <div class="range-wrap79">
                    <div class="range-value79" id="rangeV79"></div>
                    <input name="range79" id="range79" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena79"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">28 . การขายและการตลาด (Sales and Marketing) </p>
                <div class="range-wrap80">
                    <div class="range-value80" id="rangeV80"></div>
                    <input name="range80" id="range80" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena80"> </div>
                </div>
                <hr />
            </div>
            <div>
                <p id="text_content2_shade3">29 . สังคมวิทยาและมานุษยวิทยา (Sociology and Anthropology) </p>
                <div class="range-wrap81">
                    <div class="range-value81" id="rangeV81"></div>
                    <input name="range81" id="range81" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena81"> </div>
                </div>
                <hr />
            </div>
            <br>
        </div>

        <center><input type='submit' class="button2" type="submit" value="ถัดไป">

    </form>

    <style>
        #doneena53 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena54 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena55 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena56 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena57 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena58 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena59 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena60 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena61 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena62 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena63 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena64 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena65 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena66 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena67 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena68 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena69 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena70 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena71 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena72 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena73 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena74 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena75 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena76 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena77 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena78 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena79 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena80 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }

        #doneena81 {
            font-size: 13px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            
        }
    </style>
    <!-- script Range53 -->
    <script>
        const
            range53 = document.getElementById('range53'),
            rangeV53 = document.getElementById('rangeV53'),
            doneena53 = document.getElementById('doneena53'),
            setValue53 = () => {
                const
                    newValue53 = Number((range53.value - range53.min) * 100 / (range53.max - range53.min)),
                    newPosition53 = 10 - (newValue53 * 0.2);
                rangeV53.innerHTML = `<span>${range53.value}</span>`;
                rangeV53.style.left = `calc(${newValue53}% + (${newPosition53}px))`;
                if (range53.value == 100) {
                    doneena53.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการทางธุรกิจและการจัดการที่เกี่ยวข้องกับการวางแผนกลยุทธ์ การจัดสรรทรัพยากร การสร้างแบบจำลองทรัพยากรมนุษย์ เทคนิคการเป็นผู้นำ วิธีการผลิต และการประสานงานของบุคคลและทรัพยากร `; /////// let to show value at S1_list
                } else if (range53.value == 0) {
                    doneena53.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการทางธุรกิจและการจัดการที่เกี่ยวข้องกับการวางแผนกลยุทธ์ การจัดสรรทรัพยากร การสร้างแบบจำลองทรัพยากรมนุษย์ เทคนิคการเป็นผู้นำ วิธีการผลิต และการประสานงานของบุคคลและทรัพยากร`;

                } else {
                    doneena53.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue53);
        range53.addEventListener('input', setValue53);
    </script>

    <!-- script Range54 -->
    <script>
        const
            range54 = document.getElementById('range54'),
            rangeV54 = document.getElementById('rangeV54'),
            doneena54 = document.getElementById('doneena54'),
            setValue54 = () => {
                const
                    newValue54 = Number((range54.value - range54.min) * 100 / (range54.max - range54.min)),
                    newPosition54 = 10 - (newValue54 * 0.2);
                rangeV54.innerHTML = `<span>${range54.value}</span>`;
                rangeV54.style.left = `calc(${newValue54}% + (${newPosition54}px))`;
                if (range54.value == 100) {
                    doneena54.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับสิ่งมีชีวิตในพืชและสัตว์ เนื้อเยื่อ เซลล์ การทำงาน การพึ่งพา และการมีปฏิสัมพันธ์ซึ่งกันและกันของสิ่งแวดล้อม`; /////// let to show value at S1_list
                } else if (range54.value == 0) {
                    doneena54.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับสิ่งมีชีวิตในพืชและสัตว์ เนื้อเยื่อ เซลล์ การทำงาน การพึ่งพา และการมีปฏิสัมพันธ์ซึ่งกันและกันของสิ่งแวดล้อม`;

                } else {
                    doneena54.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue54);
        range54.addEventListener('input', setValue54);
    </script>

    <!-- script Range55 -->
    <script>
        const
            range55 = document.getElementById('range55'),
            rangeV55 = document.getElementById('rangeV55'),
            doneena55 = document.getElementById('doneena55'),
            setValue55 = () => {
                const
                    newValue55 = Number((range55.value - range55.min) * 100 / (range55.max - range55.min)),
                    newPosition55 = 10 - (newValue55 * 0.2);
                rangeV55.innerHTML = `<span>${range55.value}</span>`;
                rangeV55.style.left = `calc(${newValue55}% + (${newPosition55}px))`;
                if (range55.value == 100) {
                    doneena55.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับวัสดุ วิธีการ และเครื่องมือที่เกี่ยวข้องในการก่อสร้างหรือซ่อมแซมบ้าน อาคาร หรือสิ่งปลูกสร้างอื่น ๆ เช่น ทางหลวงและถนน`; /////// let to show value at S1_list
                } else if (range55.value == 0) {
                    doneena55.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับวัสดุ วิธีการ และเครื่องมือที่เกี่ยวข้องในการก่อสร้างหรือซ่อมแซมบ้าน อาคาร หรือสิ่งปลูกสร้างอื่น ๆ เช่น ทางหลวงและถนน`;
                } else {
                    doneena55.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue55);
        range55.addEventListener('input', setValue55);
    </script>

    <!-- script Range56 -->
    <script>
        const
            range56 = document.getElementById('range56'),
            rangeV56 = document.getElementById('rangeV56'),
            doneena56 = document.getElementById('doneena56'),
            setValue56 = () => {
                const
                    newValue56 = Number((range56.value - range56.min) * 100 / (range56.max - range56.min)),
                    newPosition56 = 10 - (newValue56 * 0.2);
                rangeV56.innerHTML = `<span>${range56.value}</span>`;
                rangeV56.style.left = `calc(${newValue56}% + (${newPosition56}px))`;
                if (range56.value == 100) {
                    doneena56.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับองค์ประกอบทางเคมี โครงสร้าง และคุณสมบัติของสาร กระบวนการทางเคมี และการเปลี่ยนแปลงที่เกิดขึ้น ซึ่งรวมถึงการใช้สารเคมีและการมีปฏิกิริยาระหว่างกัน สัญญาณอันตราย เทคนิคการผลิต และวิธีการจัดการ`; /////// let to show value at S1_list
                } else if (range56.value == 0) {
                    doneena56.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับองค์ประกอบทางเคมี โครงสร้าง และคุณสมบัติของสาร กระบวนการทางเคมี และการเปลี่ยนแปลงที่เกิดขึ้น ซึ่งรวมถึงการใช้สารเคมีและการมีปฏิกิริยาระหว่างกัน สัญญาณอันตราย เทคนิคการผลิต และวิธีการจัดการ`;
                } else {
                    doneena56.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue56);
        range56.addEventListener('input', setValue56);
    </script>

    <!-- script Range57 -->
    <script>
        const
            range57 = document.getElementById('range57'),
            rangeV57 = document.getElementById('rangeV57'),
            doneena57 = document.getElementById('doneena57'),
            setValue57 = () => {
                const
                    newValue57 = Number((range57.value - range57.min) * 100 / (range57.max - range57.min)),
                    newPosition57 = 10 - (newValue57 * 0.2);
                rangeV57.innerHTML = `<span>${range57.value}</span>`;
                rangeV57.style.left = `calc(${newValue57}% + (${newPosition57}px))`;
                if (range57.value == 100) {
                    doneena57.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับขั้นตอนและระบบการบริหาร และธุรการ เช่น การประมวลผลคำ การจัดการไฟล์และบันทึก การถอดความ การออกแบบแบบฟอร์ม ขั้นตอนสำนักงาน และอื่น ๆ `; /////// let to show value at S1_list
                } else if (range57.value == 0) {
                    doneena57.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับขั้นตอนและระบบการบริหาร และธุรการ เช่น การประมวลผลคำ การจัดการไฟล์และบันทึก การถอดความ การออกแบบแบบฟอร์ม ขั้นตอนสำนักงาน และอื่น ๆ `;
                } else {
                    doneena57.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue57);
        range57.addEventListener('input', setValue57);
    </script>

    <!-- script Range58 -->
    <script>
        const
            range58 = document.getElementById('range58'),
            rangeV58 = document.getElementById('rangeV58'),
            doneena58 = document.getElementById('doneena58'),
            setValue58 = () => {
                const
                    newValue58 = Number((range58.value - range58.min) * 100 / (range58.max - range58.min)),
                    newPosition58 = 10 - (newValue58 * 0.2);
                rangeV58.innerHTML = `<span>${range58.value}</span>`;
                rangeV58.style.left = `calc(${newValue58}% + (${newPosition58}px))`;
                if (range58.value == 100) {
                    doneena58.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับการผลิตสื่อ การสื่อสาร เทคนิคและวิธีการเผยแพร่ ซึ่งรวมถึงวิธีการอื่น ๆ ในการแจ้งเตือนและให้ความบันเทิงผ่านการเขียน การพูด และภาพ `; /////// let to show value at S1_list
                } else if (range58.value == 0) {
                    doneena58.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับการผลิตสื่อ การสื่อสาร เทคนิคและวิธีการเผยแพร่ ซึ่งรวมถึงวิธีการอื่น ๆ ในการแจ้งเตือนและให้ความบันเทิงผ่านการเขียน การพูด และภาพ`;
                } else {
                    doneena58.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue58);
        range58.addEventListener('input', setValue58);
    </script>

    <!-- script Range59 -->
    <script>
        const
            range59 = document.getElementById('range59'),
            rangeV59 = document.getElementById('rangeV59'),
            doneena59 = document.getElementById('doneena59')
        setValue59 = () => {
            const
                newValue59 = Number((range59.value - range59.min) * 100 / (range59.max - range59.min)),
                newPosition59 = 10 - (newValue59 * 0.2);
            rangeV59.innerHTML = `<span>${range59.value}</span>`;
            rangeV59.style.left = `calc(${newValue59}% + (${newPosition59}px))`;
            if (range59.value == 100) {
                doneena59.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับแผงวงจร ตัวประมวลผล ชิป อุปกรณ์อิเล็กทรอนิกส์ ฮาร์ดแวร์และซอฟต์แวร์คอมพิวเตอร์ รวมถึงแอปพลิเคชันและการเขียนโปรแกรม`; /////// let to show value at S1_list
            } else if (range59.value == 0) {
                doneena59.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับแผงวงจร ตัวประมวลผล ชิป อุปกรณ์อิเล็กทรอนิกส์ ฮาร์ดแวร์และซอฟต์แวร์คอมพิวเตอร์ รวมถึงแอปพลิเคชันและการเขียนโปรแกรม`;
            } else {
                doneena59.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue59);
        range59.addEventListener('input', setValue59);
    </script>

    <!-- script Range60 -->
    <script>
        const
            range60 = document.getElementById('range60'),
            rangeV60 = document.getElementById('rangeV60'),
            doneena60 = document.getElementById('doneena60')
        setValue60 = () => {
            const
                newValue60 = Number((range60.value - range60.min) * 100 / (range60.max - range60.min)),
                newPosition60 = 10 - (newValue60 * 0.2);
            rangeV60.innerHTML = `<span>${range60.value}</span>`;
            rangeV60.style.left = `calc(${newValue60}% + (${newPosition60}px))`;
            if (range60.value == 100) {
                doneena60.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและกระบวนการในการให้บริการลูกค้าและบริการส่วนบุคคล ซึ่งรวมถึงการประเมินความต้องการของลูกค้า มาตรฐานคุณภาพการบริการ และการประเมินความพึงพอใจของลูกค้า`; /////// let to show value at S1_list
            } else if (range60.value == 0) {
                doneena60.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและกระบวนการในการให้บริการลูกค้าและบริการส่วนบุคคล ซึ่งรวมถึงการประเมินความต้องการของลูกค้า มาตรฐานคุณภาพการบริการ และการประเมินความพึงพอใจของลูกค้า`;
            } else {
                doneena60.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue60);
        range60.addEventListener('input', setValue60);
    </script>

    <!-- script Range61 -->
    <script>
        const
            range61 = document.getElementById('range61'),
            rangeV61 = document.getElementById('rangeV61'),
            doneena61 = document.getElementById('doneena61')
        setValue61 = () => {
            const
                newValue61 = Number((range61.value - range61.min) * 100 / (range61.max - range61.min)),
                newPosition61 = 10 - (newValue61 * 0.2);
            rangeV61.innerHTML = `<span>${range61.value}</span>`;
            rangeV61.style.left = `calc(${newValue61}% + (${newPosition61}px))`;
            if (range61.value == 100) {
                doneena61.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเทคนิคการออกแบบเครื่องมือ และหลักการที่เกี่ยวข้องในการผลิต โดยมีแผนทางเทคนิคที่แม่นยำ พิมพ์เขียว ภาพวาด และแบบจำลอง`; /////// let to show value at S1_list
            } else if (range61.value == 0) {
                doneena61.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเทคนิคการออกแบบเครื่องมือ และหลักการที่เกี่ยวข้องในการผลิต โดยมีแผนทางเทคนิคที่แม่นยำ พิมพ์เขียว ภาพวาด และแบบจำลอง`;
            } else {
                doneena61.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue61);
        range61.addEventListener('input', setValue61);
    </script>

    <!-- script Range62 -->
    <script>
        const
            range62 = document.getElementById('range62'),
            rangeV62 = document.getElementById('rangeV62'),
            doneena62 = document.getElementById('doneena62')
        setValue62 = () => {
            const
                newValue62 = Number((range62.value - range62.min) * 100 / (range62.max - range62.min)),
                newPosition62 = 10 - (newValue62 * 0.2);
            rangeV62.innerHTML = `<span>${range62.value}</span>`;
            rangeV62.style.left = `calc(${newValue62}% + (${newPosition62}px))`;
            if (range62.value == 100) {
                doneena62.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีปฏิบัติทางเศรษฐศาสตร์ การบัญชี การตลาด การเงิน การธนาคาร การวิเคราะห์ และการรายงานข้อมูลทางการเงิน`; /////// let to show value at S1_list
            } else if (range62.value == 0) {
                doneena62.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีปฏิบัติทางเศรษฐศาสตร์ การบัญชี การตลาด การเงิน การธนาคาร การวิเคราะห์ และการรายงานข้อมูลทางการเงิน`;
            } else {
                doneena62.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue62);
        range62.addEventListener('input', setValue62);
    </script>

    <!-- script Range63 -->
    <script>
        const
            range63 = document.getElementById('range63'),
            rangeV63 = document.getElementById('rangeV63'),
            doneena63 = document.getElementById('doneena63')
        setValue63 = () => {
            const
                newValue63 = Number((range63.value - range63.min) * 100 / (range63.max - range63.min)),
                newPosition63 = 10 - (newValue63 * 0.2);
            rangeV63.innerHTML = `<span>${range63.value}</span>`;
            rangeV63.style.left = `calc(${newValue63}% + (${newPosition63}px))`;
            if (range63.value == 100) {
                doneena63.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการสำหรับสร้างหลักสูตรและออกแบบการฝึกอบรม การสอนสำหรับบุคคลและกลุ่ม และการวัดผลการฝึกอบรม`; /////// let to show value at S1_list
            } else if (range63.value == 0) {
                doneena63.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการสำหรับสร้างหลักสูตรและออกแบบการฝึกอบรม การสอนสำหรับบุคคลและกลุ่ม และการวัดผลการฝึกอบรม`;
            } else {
                doneena63.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue63);
        range63.addEventListener('input', setValue63);
    </script>

    <!-- script Range64 -->
    <script>
        const
            range64 = document.getElementById('range64'),
            rangeV64 = document.getElementById('rangeV64'),
            doneena64 = document.getElementById('doneena64')
        setValue64 = () => {
            const
                newValue64 = Number((range64.value - range64.min) * 100 / (range64.max - range64.min)),
                newPosition64 = 10 - (newValue64 * 0.2);
            rangeV64.innerHTML = `<span>${range64.value}</span>`;
            rangeV64.style.left = `calc(${newValue64}% + (${newPosition64}px))`;
            if (range64.value == 100) {
                doneena64.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับการใช้งานวิทยาศาสตร์และเทคโนโลยีวิศวกรรม ซึ่งรวมถึงการใช้หลักการ เทคนิค ขั้นตอน และอุปกรณ์ในการออกแบบและการผลิตสินค้า และบริการต่าง ๆ `; /////// let to show value at S1_list
            } else if (range64.value == 0) {
                doneena64.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับการใช้งานวิทยาศาสตร์และเทคโนโลยีวิศวกรรม ซึ่งรวมถึงการใช้หลักการ เทคนิค ขั้นตอน และอุปกรณ์ในการออกแบบและการผลิตสินค้า และบริการต่าง ๆ`;
            } else {
                doneena64.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue64);
        range64.addEventListener('input', setValue64);
    </script>

    <!-- script Range65 -->
    <script>
        const
            range65 = document.getElementById('range65'),
            rangeV65 = document.getElementById('rangeV65'),
            doneena65 = document.getElementById('doneena65')
        setValue65 = () => {
            const
                newValue65 = Number((range65.value - range65.min) * 100 / (range65.max - range65.min)),
                newPosition65 = 10 - (newValue65 * 0.2);
            rangeV65.innerHTML = `<span>${range65.value}</span>`;
            rangeV65.style.left = `calc(${newValue65}% + (${newPosition65}px))`;
            if (range65.value == 100) {
                doneena65.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับโครงสร้างและเนื้อหาของภาษาอังกฤษ รวมถึงความหมายและการสะกดคำศัพท์ กฎขององค์ประกอบและไวยากรณ์`; /////// let to show value at S1_list
            } else if (range65.value == 0) {
                doneena65.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับโครงสร้างและเนื้อหาของภาษาอังกฤษ รวมถึงความหมายและการสะกดคำศัพท์ กฎขององค์ประกอบและไวยากรณ์`;
            } else {
                doneena65.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue65);
        range65.addEventListener('input', setValue65);
    </script>

    <!-- script Range66 -->
    <script>
        const
            range66 = document.getElementById('range66'),
            rangeV66 = document.getElementById('rangeV66'),
            doneena66 = document.getElementById('doneena66')
        setValue66 = () => {
            const
                newValue66 = Number((range66.value - range66.min) * 100 / (range66.max - range66.min)),
                newPosition66 = 10 - (newValue66 * 0.2);
            rangeV66.innerHTML = `<span>${range66.value}</span>`;
            rangeV66.style.left = `calc(${newValue66}% + (${newPosition66}px))`;
            if (range66.value == 100) {
                doneena66.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเทคนิคและอุปกรณ์สำหรับเพาะปลูก การเจริญเติบโต และเก็บเกี่ยวผลิตภัณฑ์อาหาร (ทั้งพืชและสัตว์) เพื่อการบริโภค รวมถึงการจัดเก็บและเทคนิคการจัดการ`; /////// let to show value at S1_list
            } else if (range66.value == 0) {
                doneena66.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเทคนิคและอุปกรณ์สำหรับเพาะปลูก การเจริญเติบโต และเก็บเกี่ยวผลิตภัณฑ์อาหาร (ทั้งพืชและสัตว์) เพื่อการบริโภค รวมถึงการจัดเก็บและเทคนิคการจัดการ`;
            } else {
                doneena66.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue66);
        range66.addEventListener('input', setValue66);
    </script>

    <!-- script Range67 -->
    <script>
        const
            range67 = document.getElementById('range67'),
            rangeV67 = document.getElementById('rangeV67'),
            doneena67 = document.getElementById('doneena67')
        setValue67 = () => {
            const
                newValue67 = Number((range67.value - range67.min) * 100 / (range67.max - range67.min)),
                newPosition67 = 10 - (newValue67 * 0.2);
            rangeV67.innerHTML = `<span>${range67.value}</span>`;
            rangeV67.style.left = `calc(${newValue67}% + (${newPosition67}px))`;
            if (range67.value == 100) {
                doneena67.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับโครงสร้างและเนื้อหาของภาษาต่างประเทศ (ที่ไม่ใช่ภาษาอังกฤษ) รวมถึงความหมายและการสะกดคำศัพท์ กฎขององค์ประกอบและไวยากรณ์ และการออกเสียง`; /////// let to show value at S1_list
            } else if (range67.value == 0) {
                doneena67.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับโครงสร้างและเนื้อหาของภาษาต่างประเทศ (ที่ไม่ใช่ภาษาอังกฤษ) รวมถึงความหมายและการสะกดคำศัพท์ กฎขององค์ประกอบและไวยากรณ์ และการออกเสียง`;
            } else {
                doneena67.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue67);
        range67.addEventListener('input', setValue67);
    </script>

    <!-- script Range68 -->
    <script>
        const
            range68 = document.getElementById('range68'),
            rangeV68 = document.getElementById('rangeV68'),
            doneena68 = document.getElementById('doneena68')
        setValue68 = () => {
            const
                newValue68 = Number((range68.value - range68.min) * 100 / (range68.max - range68.min)),
                newPosition68 = 10 - (newValue68 * 0.2);
            rangeV68.innerHTML = `<span>${range68.value}</span>`;
            rangeV68.style.left = `calc(${newValue68}% + (${newPosition68}px))`;
            if (range68.value == 100) {
                doneena68.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการในการอธิบายคุณสมบัติของที่ดิน ทะเล และมวลอากาศ รวมถึงลักษณะทางกายภาพ สถานที่ ความสัมพันธ์และการกระจายของพืช สัตว์ และชีวิตมนุษย์`; /////// let to show value at S1_list
            } else if (range68.value == 0) {
                doneena68.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการในการอธิบายคุณสมบัติของที่ดิน ทะเล และมวลอากาศ รวมถึงลักษณะทางกายภาพ สถานที่ ความสัมพันธ์และการกระจายของพืช สัตว์ และชีวิตมนุษย์`;
            } else {
                doneena68.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue68);
        range68.addEventListener('input', setValue68);
    </script>

    <!-- script Range69 -->
    <script>
        const
            range69 = document.getElementById('range69'),
            rangeV69 = document.getElementById('rangeV69'),
            doneena69 = document.getElementById('doneena69')
        setValue69 = () => {
            const
                newValue69 = Number((range69.value - range69.min) * 100 / (range69.max - range69.min)),
                newPosition69 = 10 - (newValue69 * 0.2);
            rangeV69.innerHTML = `<span>${range69.value}</span>`;
            rangeV69.style.left = `calc(${newValue69}% + (${newPosition69}px))`;
            if (range69.value == 100) {
                doneena69.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเหตุการณ์ในประวัติศาสตร์ สาเหตุ ตัวชี้วัด และผลกระทบต่ออารยธรรมและวัฒนธรรม`; /////// let to show value at S1_list
            } else if (range69.value == 0) {
                doneena69.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเหตุการณ์ในประวัติศาสตร์ สาเหตุ ตัวชี้วัด และผลกระทบต่ออารยธรรมและวัฒนธรรม`;
            } else {
                doneena69.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue69);
        range69.addEventListener('input', setValue69);
    </script>

    <!-- script Range70 -->
    <script>
        const
            range70 = document.getElementById('range70'),
            rangeV70 = document.getElementById('rangeV70'),
            doneena70 = document.getElementById('doneena70')
        setValue70 = () => {
            const
                newValue70 = Number((range70.value - range70.min) * 100 / (range70.max - range70.min)),
                newPosition70 = 10 - (newValue70 * 0.2);
            rangeV70.innerHTML = `<span>${range70.value}</span>`;
            rangeV70.style.left = `calc(${newValue70}% + (${newPosition70}px))`;
            if (range70.value == 100) {
                doneena70.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับกฎหมาย ข้อกฎหมาย ขั้นตอนของศาล เรื่องราว กฎระเบียบของรัฐบาล คำสั่งผู้บริหาร กฎของหน่วยงาน และกระบวนการทางการเมืองในระบอบประชาธิปไตย`; /////// let to show value at S1_list
            } else if (range70.value == 0) {
                doneena70.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับกฎหมาย ข้อกฎหมาย ขั้นตอนของศาล เรื่องราว กฎระเบียบของรัฐบาล คำสั่งผู้บริหาร กฎของหน่วยงาน และกระบวนการทางการเมืองในระบอบประชาธิปไตย`;
            } else {
                doneena70.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue70);
        range70.addEventListener('input', setValue70);
    </script>

    <!-- script Range71 -->
    <script>
        const
            range71 = document.getElementById('range71'),
            rangeV71 = document.getElementById('rangeV71'),
            doneena71 = document.getElementById('doneena71')
        setValue71 = () => {
            const
                newValue71 = Number((range71.value - range71.min) * 100 / (range71.max - range71.min)),
                newPosition71 = 10 - (newValue71 * 0.2);
            rangeV71.innerHTML = `<span>${range71.value}</span>`;
            rangeV71.style.left = `calc(${newValue71}% + (${newPosition71}px))`;
            if (range71.value == 100) {
                doneena71.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเลขคณิต พีชคณิต เรขาคณิต แคลคูลัส สถิติ และการใช้งาน`; /////// let to show value at S1_list
            } else if (range71.value == 0) {
                doneena71.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเลขคณิต พีชคณิต เรขาคณิต แคลคูลัส สถิติ และการใช้งาน`;
            } else {
                doneena71.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue71);
        range71.addEventListener('input', setValue71);
    </script>

    <!-- script Range72 -->
    <script>
        const
            range72 = document.getElementById('range72'),
            rangeV72 = document.getElementById('rangeV72'),
            doneena72 = document.getElementById('doneena72')
        setValue72 = () => {
            const
                newValue72 = Number((range72.value - range72.min) * 100 / (range72.max - range72.min)),
                newPosition72 = 10 - (newValue72 * 0.2);
            rangeV72.innerHTML = `<span>${range72.value}</span>`;
            rangeV72.style.left = `calc(${newValue72}% + (${newPosition72}px))`;
            if (range72.value == 100) {
                doneena72.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเครื่องจักรและเครื่องมือ รวมถึงการออกแบบ การใช้ การซ่อมแซม และการบำรุงรักษา`; /////// let to show value at S1_list
            } else if (range72.value == 0) {
                doneena72.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับเครื่องจักรและเครื่องมือ รวมถึงการออกแบบ การใช้ การซ่อมแซม และการบำรุงรักษา`;
            } else {
                doneena72.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue72);
        range72.addEventListener('input', setValue72);
    </script>

    <!-- script Range73 -->
    <script>
        const
            range73 = document.getElementById('range73'),
            rangeV73 = document.getElementById('rangeV73'),
            doneena73 = document.getElementById('doneena73')
        setValue73 = () => {
            const
                newValue73 = Number((range73.value - range73.min) * 100 / (range73.max - range73.min)),
                newPosition73 = 10 - (newValue73 * 0.2);
            rangeV73.innerHTML = `<span>${range73.value}</span>`;
            rangeV73.style.left = `calc(${newValue73}% + (${newPosition73}px))`;
            if (range73.value == 100) {
                doneena73.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับข้อมูลและเทคนิคที่จำเป็นในการวินิจฉัยและรักษาอาการบาดเจ็บของมนุษย์ โรคและความผิดปกติ ซึ่งรวมถึงอาการทางเลือกในการรักษา คุณสมบัติของยาและการมีปฏิสัมพันธ์ และมาตรการดูแลสุขภาพเชิงป้องกัน`; /////// let to show value at S1_list
            } else if (range73.value == 0) {
                doneena73.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับข้อมูลและเทคนิคที่จำเป็นในการวินิจฉัยและรักษาอาการบาดเจ็บของมนุษย์ โรคและความผิดปกติ ซึ่งรวมถึงอาการทางเลือกในการรักษา คุณสมบัติของยาและการมีปฏิสัมพันธ์ และมาตรการดูแลสุขภาพเชิงป้องกัน`;
            } else {
                doneena73.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue73);
        range73.addEventListener('input', setValue73);
    </script>

    <!-- script Range74 -->
    <script>
        const
            range74 = document.getElementById('range74'),
            rangeV74 = document.getElementById('rangeV74'),
            doneena74 = document.getElementById('doneena74')
        setValue74 = () => {
            const
                newValue74 = Number((range74.value - range74.min) * 100 / (range74.max - range74.min)),
                newPosition74 = 10 - (newValue74 * 0.2);
            rangeV74.innerHTML = `<span>${range74.value}</span>`;
            rangeV74.style.left = `calc(${newValue74}% + (${newPosition74}px))`;
            if (range74.value == 100) {
                doneena74.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและขั้นตอนสำหรับการสรรหาบุคลากร การคัดเลือก การฝึกอบรม การจ่ายผลตอบแทนและผลประโยชน์ แรงงานสัมพันธ์และการเจรจาต่อรอง และระบบข้อมูลบุคลากร`; /////// let to show value at S1_list
            } else if (range74.value == 0) {
                doneena74.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและขั้นตอนสำหรับการสรรหาบุคลากร การคัดเลือก การฝึกอบรม การจ่ายผลตอบแทนและผลประโยชน์ แรงงานสัมพันธ์และการเจรจาต่อรอง และระบบข้อมูลบุคลากร`;
            } else {
                doneena74.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue74);
        range74.addEventListener('input', setValue74);
    </script>

    <!-- script Range75 -->
    <script>
        const
            range75 = document.getElementById('range75'),
            rangeV75 = document.getElementById('rangeV75'),
            doneena75 = document.getElementById('doneena75')
        setValue75 = () => {
            const
                newValue75 = Number((range75.value - range75.min) * 100 / (range75.max - range75.min)),
                newPosition75 = 10 - (newValue75 * 0.2);
            rangeV75.innerHTML = `<span>${range75.value}</span>`;
            rangeV75.style.left = `calc(${newValue75}% + (${newPosition75}px))`;
            if (range75.value == 100) {
                doneena75.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับระบบปรัชญาและศาสนาที่แตกต่างกัน ซึ่งรวมถึงหลักการพื้นฐาน ค่านิยม จริยธรรม วิธีการคิด การปฏิบัติ และผลกระทบที่มีต่อวัฒนธรรมมนุษย์`; /////// let to show value at S1_list
            } else if (range75.value == 0) {
                doneena75.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับระบบปรัชญาและศาสนาที่แตกต่างกัน ซึ่งรวมถึงหลักการพื้นฐาน ค่านิยม จริยธรรม วิธีการคิด การปฏิบัติ และผลกระทบที่มีต่อวัฒนธรรมมนุษย์`;
            } else {
                doneena75.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue75);
        range75.addEventListener('input', setValue75);
    </script>

    <!-- script Range76 -->
    <script>
        const
            range76 = document.getElementById('range76'),
            rangeV76 = document.getElementById('rangeV76'),
            doneena76 = document.getElementById('doneena76')
        setValue76 = () => {
            const
                newValue76 = Number((range76.value - range76.min) * 100 / (range76.max - range76.min)),
                newPosition76 = 10 - (newValue76 * 0.2);
            rangeV76.innerHTML = `<span>${range76.value}</span>`;
            rangeV76.style.left = `calc(${newValue76}% + (${newPosition76}px))`;
            if (range76.value == 100) {
                doneena76.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการทางกายภาพ กฎ ความสัมพันธ์ และการประยุกต์ใช้ในการทำความเข้าใจเกี่ยวกับของเหลว วัตถุ การเปลี่ยนแปลงของชั้นบรรยากาศ เครื่องจักรกล ระบบไฟฟ้า โครงสร้างและกระบวนการของอะตอม`; /////// let to show value at S1_list
            } else if (range76.value == 0) {
                doneena76.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการทางกายภาพ กฎ ความสัมพันธ์ และการประยุกต์ใช้ในการทำความเข้าใจเกี่ยวกับของเหลว วัตถุ การเปลี่ยนแปลงของชั้นบรรยากาศ เครื่องจักรกล ระบบไฟฟ้า โครงสร้างและกระบวนการของอะตอม`;
            } else {
                doneena76.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue76);
        range76.addEventListener('input', setValue76);
    </script>

    <!-- script Range77 -->
    <script>
        const
            range77 = document.getElementById('range77'),
            rangeV77 = document.getElementById('rangeV77'),
            doneena77 = document.getElementById('doneena77')
        setValue77 = () => {
            const
                newValue77 = Number((range77.value - range77.min) * 100 / (range77.max - range77.min)),
                newPosition77 = 10 - (newValue77 * 0.2);
            rangeV77.innerHTML = `<span>${range77.value}</span>`;
            rangeV77.style.left = `calc(${newValue77}% + (${newPosition77}px))`;
            if (range77.value == 100) {
                doneena77.innerHTML = ` คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับวัตถุดิบ กระบวนการผลิต การควบคุมคุณภาพ ต้นทุน และเทคนิคอื่น ๆ เพื่อเพิ่มประสิทธิภาพการผลิตและการกระจายสินค้า`; /////// let to show value at S1_list
            } else if (range77.value == 0) {
                doneena77.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับวัตถุดิบ กระบวนการผลิต การควบคุมคุณภาพ ต้นทุน และเทคนิคอื่น ๆ เพื่อเพิ่มประสิทธิภาพการผลิตและการกระจายสินค้า`;
            } else {
                doneena77.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue77);
        range77.addEventListener('input', setValue77);
    </script>

    <!-- script Range78 -->
    <script>
        const
            range78 = document.getElementById('range78'),
            rangeV78 = document.getElementById('rangeV78'),
            doneena78 = document.getElementById('doneena78')
        setValue78 = () => {
            const
                newValue78 = Number((range78.value - range78.min) * 100 / (range78.max - range78.min)),
                newPosition78 = 10 - (newValue78 * 0.2);
            rangeV78.innerHTML = `<span>${range78.value}</span>`;
            rangeV78.style.left = `calc(${newValue78}% + (${newPosition78}px))`;
            if (range78.value == 100) {
                doneena78.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับพฤติกรรมและประสิทธิภาพของมนุษย์ รู้ถึงความสามารถที่แตกต่างกันของแต่ละบุคคล บุคลิกภาพ และความสนใจ การเรียนรู้และแรงจูงใจ วิธีการวิจัยทางจิตวิทยา การประเมินและการรักษาความผิดปกติของพฤติกรรมและอารมณ์ `; /////// let to show value at S1_list
            } else if (range78.value == 0) {
                doneena78.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับพฤติกรรมและประสิทธิภาพของมนุษย์ รู้ถึงความสามารถที่แตกต่างกันของแต่ละบุคคล บุคลิกภาพ และความสนใจ การเรียนรู้และแรงจูงใจ วิธีการวิจัยทางจิตวิทยา การประเมินและการรักษาความผิดปกติของพฤติกรรมและอารมณ์`;
            } else {
                doneena78.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue78);
        range78.addEventListener('input', setValue78);
    </script>

    <!-- script Range79 -->
    <script>
        const
            range79 = document.getElementById('range79'),
            rangeV79 = document.getElementById('rangeV79'),
            doneena79 = document.getElementById('doneena79')
        setValue79 = () => {
            const
                newValue79 = Number((range79.value - range79.min) * 100 / (range79.max - range79.min)),
                newPosition79 = 10 - (newValue79 * 0.2);
            rangeV79.innerHTML = `<span>${range79.value}</span>`;
            rangeV79.style.left = `calc(${newValue79}% + (${newPosition79}px))`;
            if (range79.value == 100) {
                doneena79.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับนโยบาย ขั้นตอน และกลยุทธ์ในการส่งเสริมท้องถิ่นที่มีประสิทธิภาพ รัฐหรือการดำเนินงานด้านความมั่นคงของชาติเพื่อคุ้มครองประชาชน ข้อมูล ทรัพย์สิน และสถาบันต่าง ๆ `; /////// let to show value at S1_list
            } else if (range79.value == 0) {
                doneena79.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับนโยบาย ขั้นตอน และกลยุทธ์ในการส่งเสริมท้องถิ่นที่มีประสิทธิภาพ รัฐหรือการดำเนินงานด้านความมั่นคงของชาติเพื่อคุ้มครองประชาชน ข้อมูล ทรัพย์สิน และสถาบันต่าง ๆ`;
            } else {
                doneena79.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue79);
        range79.addEventListener('input', setValue79);
    </script>

    <!-- script Range80 -->
    <script>
        const
            range80 = document.getElementById('range80'),
            rangeV80 = document.getElementById('rangeV80'),
            doneena80 = document.getElementById('doneena80')
        setValue80 = () => {
            const
                newValue80 = Number((range80.value - range80.min) * 100 / (range80.max - range80.min)),
                newPosition80 = 10 - (newValue80 * 0.2);
            rangeV80.innerHTML = `<span>${range80.value}</span>`;
            rangeV80.style.left = `calc(${newValue80}% + (${newPosition80}px))`;
            if (range80.value == 100) {
                doneena80.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการในการแสดงออก การส่งเสริมและการขายผลิตภัณฑ์หรือบริการ ซึ่งรวมถึงกลยุทธ์ทางการตลาด การสาธิตผลิตภัณฑ์ เทคนิคการขาย และระบบควบคุมการขาย`; /////// let to show value at S1_list
            } else if (range80.value == 0) {
                doneena80.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับหลักการและวิธีการในการแสดงออก การส่งเสริมและการขายผลิตภัณฑ์หรือบริการ ซึ่งรวมถึงกลยุทธ์ทางการตลาด การสาธิตผลิตภัณฑ์ เทคนิคการขาย และระบบควบคุมการขาย`;
            } else {
                doneena80.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue80);
        range80.addEventListener('input', setValue80);
    </script>

    <!-- script Range81 -->
    <script>
        const
            range81 = document.getElementById('range81'),
            rangeV81 = document.getElementById('rangeV81'),
            doneena81 = document.getElementById('doneena81')
        setValue81 = () => {
            const
                newValue81 = Number((range81.value - range81.min) * 100 / (range81.max - range81.min)),
                newPosition81 = 10 - (newValue81 * 0.2);
            rangeV81.innerHTML = `<span>${range81.value}</span>`;
            rangeV81.style.left = `calc(${newValue81}% + (${newPosition81}px))`;
            if (range81.value == 100) {
                doneena81.innerHTML = `คุณมีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับพฤติกรรมและการเปลี่ยนแปลงของกลุ่ม แนวโน้มและอิทธิพลทางสังคม การอพยพของมนุษย์ ชาติพันธุ์ วัฒนธรรม ประวัติและกำเนิด`; /////// let to show value at S1_list
            } else if (range81.value == 0) {
                doneena81.innerHTML = `คุณไม่มีความรู้ ความเข้าใจอย่างลึกซึ้ง เกี่ยวกับพฤติกรรมและการเปลี่ยนแปลงของกลุ่ม แนวโน้มและอิทธิพลทางสังคม การอพยพของมนุษย์ ชาติพันธุ์ วัฒนธรรม ประวัติและกำเนิด`;
            } else {
                doneena81.innerHTML = '';
            }
        };
        document.addEventListener("DOMContentLoaded", setValue81);
        range81.addEventListener('input', setValue81);
    </script>


</html>