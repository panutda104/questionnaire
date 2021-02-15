<?php session_start();
include_once("config.php");
$result = mysqli_query($con, "SELECT * FROM dt_personal");
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i += 1;
}
$_SESSION['personal_code'] = 'P000' . $i;
$code = $_SESSION['personal_code'];
$gender = $_POST['gender'];
$occ = $_POST['job_now'];
$time = $_POST['job_since'];
$gpa = $_POST['gpax'];
$study = $_POST['branch'];
$other = $_POST['txtbox'];
$sql = "INSERT INTO dt_personal (personal_code,personal_gender,personal_occ,personal_time,personal_gpa,personal_study,personal_other)
VALUES ('$code','$gender','$occ','$time','$gpa','$study','$other')";
if (!mysqli_query($con, $sql)) {
    die(mysqli_error($con));
} else {
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style_shade1_list.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <title>DT-shade1</title>
</head>

<body>
    <!-- <form action="shade1_list.php" method="post"> -->

    <form id="page1" class="page1" action="shade2_list.php" method="post">
        <div class="shade">
            <div class="text_header_shade">
                ส่วนที่ 2 เก็บรวบรวมข้อมูลทักษะ
            </div>
        </div>

        <div class="shade1">
            <div>
                <p id="text_content1_shade1_1">คำถามเชิงจิตวิทยาเก็บรวบรวมข้อมูลทักษะ </p>
                <i>
                    <p id="text_content1_shade1">คำชี้แจง: โปรดให้คะแนนที่ตรงกับระดับความสามารถของท่านมากที่สุด โดยลากแถบเลื่อน (Slider Scales) กำหนดเกณฑ์ 0 หมายถึง ไม่มีความสามารถ จนถึง 100 หมายถึง มีความสามารถมากที่สุด</p>
                </i>
                <p id="text_content2_shade1">1 . คุณสามารถเขียนบรรยายเพื่อเล่าเรื่องจากประสบการณ์ของตนเองได้</p>
                <div class="range-wrap">
                    <div class="range-value" id="rangeV"></div>
                    <input min="0" max="100" name="range" id="range" type="range" value="0" step="1" style="margin: auto;" style="margin: auto;">
                    <div id="doneena1"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">2 . คุณสามารถเขียนบรรยายจากจินตนาการได้</p>
                <div class="range-wrap2">
                    <div class="range-value2" id="rangeV2"></div>
                    <input name="range2" id="range2" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena2"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">3 . คุณสามารถพึ่งพามโนภาพในการออกแบบได้</p>
                <div class="range-wrap3">
                    <div class="range-value3" id="rangeV3"></div>
                    <input name="range3" id="range3" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena3"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">4 . คุณสามารถทำงานกับสิ่งที่ปฏิบัติได้ทันที</p>
                <div class="range-wrap4">
                    <div class="range-value4" id="rangeV4"></div>
                    <input name="range4" id="range4" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena4"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">5 . คุณสามารถผสานการทำงานเข้ากับการเรียนรู้ได้ </p>
                <div class="range-wrap5">
                    <div class="range-value5" id="rangeV5"></div>
                    <input name="range5" id="range5" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena5"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">6 . คุณสามารถเรียนรู้ ทำงานหนัก และมีระเบียบวินัยได้ </p>
                <div class="range-wrap6">
                    <div class="range-value6" id="rangeV6"></div>
                    <input name="range6" id="range6" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena6"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">7 . คุณสามารถทำงานที่มีวิธีการเชิงตรรกะอย่างละเอียดได้ </p>
                <div class="range-wrap7">
                    <div class="range-value7" id="rangeV7"></div>
                    <input name="range7" id="range7" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena7"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">8 . คุณสามารถเป็นผู้นำได้ </p>
                <div class="range-wrap8">
                    <div class="range-value8" id="rangeV8"></div>
                    <input name="range8" id="range8" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena8"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">9 . คุณสามารถช่วยเหลือผู้อื่นในการแก้ไขสถานการณ์ความขัดแย้งได้ </p>
                <div class="range-wrap9">
                    <div class="range-value9" id="rangeV9"></div>
                    <input name="range9" id="range9" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena9"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">10 . คุณสามารถพูดคุยและถ่ายทอดข้อมูลให้กับผู้อื่นในที่ทำงานให้เข้าใจได้ </p>
                <div class="range-wrap10">
                    <div class="range-value10" id="rangeV10"></div>
                    <input name="range10" id="range10" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena10"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">11 . คุณสามารถบอกให้ผู้อื่นทำบางสิ่งบางอย่างตามที่คุณต้องการได้ </p>
                <div class="range-wrap11">
                    <div class="range-value11" id="rangeV11"></div>
                    <input name="range11" id="range11" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena11"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">12 . คุณสามารถทำงานในสภาพแวดล้อมทางธุรกิจได้ </p>
                <div class="range-wrap12">
                    <div class="range-value12" id="rangeV12"></div>
                    <input name="range12" id="range12" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena12"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">13 . คุณสามารถช่วยผู้อื่นในการแก้ปัญหาได้ </p>
                <div class="range-wrap13">
                    <div class="range-value13" id="rangeV13"></div>
                    <input name="range13" id="range13" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena13"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">14 . คุณสามารถมีส่วนร่วมในการแก้ปัญหาทางวิทยาศาสตร์ได้ </p>
                <div class="range-wrap14">
                    <div class="range-value14" id="rangeV14"></div>
                    <input name="range14" id="range14" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena14"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">15 . คุณสามารถเรียนรู้วิชาที่มีความเชื่อมโยงกับอาชีพที่อยากทำด้วยตนเองได้ </p>
                <div class="range-wrap15">
                    <div class="range-value15" id="rangeV15"></div>
                    <input name="range15" id="range15" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena15"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">16 . คุณสามารถใช้ทักษะแบบทำด้วยมือและแบบทำด้วยเครื่องจักรได้ </p>
                <div class="range-wrap16">
                    <div class="range-value16" id="rangeV16"></div>
                    <input name="range16" id="range16" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena16"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">17 . คุณสามารถเข้าไปมีส่วนร่วมในภาวะตึงเครียดและเสี่ยงอันตรายได้ </p>
                <div class="range-wrap17">
                    <div class="range-value17" id="rangeV17"></div>
                    <input name="range17" id="range17" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena17"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">18 . คุณสามารถทำงานกลางแจ้งได้ </p>
                <div class="range-wrap18">
                    <div class="range-value18" id="rangeV18"></div>
                    <input name="range18" id="range18" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena18"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">19 . คุณสามารถทำงานกับองค์กรและกลุ่มได้ </p>
                <div class="range-wrap19">
                    <div class="range-value19" id="rangeV19"></div>
                    <input name="range19" id="range19" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena19"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">20 . คุณสามารถทำงานเป็นทีมหรือกลุ่มใหญ่ได้ </p>
                <div class="range-wrap20">
                    <div class="range-value20" id="rangeV20"></div>
                    <input name="range20" id="range20" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena20"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">21 . คุณสามารถให้บริการที่เกี่ยวกับการพยาบาลหรือการดูแลสุขภาพได้ </p>
                <div class="range-wrap21">
                    <div class="range-value21" id="rangeV21"></div>
                    <input name="range21" id="range21" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena21"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">22 . คุณสามารถพึ่งพาและเชื่อมั่นเพื่อนร่วมงานในการทำงานได้ </p>
                <div class="range-wrap22">
                    <div class="range-value22" id="rangeV22"></div>
                    <input name="range22" id="range22" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena22"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">23 . คุณสามารถเข้าไปมีส่วนร่วมในประเด็นปัญหาสังคมได้ </p>
                <div class="range-wrap23">
                    <div class="range-value23" id="rangeV23"></div>
                    <input name="range23" id="range23" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena23"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">24 . คุณสามารถเข้าไปมีส่วนร่วมในเหตุการณ์ปัจจุบันได้ </p>
                <div class="range-wrap24">
                    <div class="range-value24" id="rangeV24"></div>
                    <input name="range24" id="range24" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena24"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">25 . คุณสามารถทำงานกับเด็กหรือคนหนุ่มสาวได้ </p>
                <div class="range-wrap25">
                    <div class="range-value25" id="rangeV25"></div>
                    <input name="range25" id="range25" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena25"> </div>
                </div>
                <hr />
            </div>

            <div>
                <p id="text_content2_shade1">26 . คุณสามารถสอนเด็ก วัยรุ่น หรือวัยผู้ใหญ่ได้ </p>
                <div class="range-wrap26">
                    <div class="range-value26" id="rangeV26"></div>
                    <input name="range26" id="range26" type="range" min="0" max="100" value="0" step="1" style="margin: auto;">
                    <div id="doneena26"> </div>
                </div>
                <hr />
            </div>

            <br><br>
        </div>
        <center><input type='submit' class="button" type="submit" value="ถัดไป">

    </form>

    <style>
        #doneena1 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena2 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;

        }

        #doneena3 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena4 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena5 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena6 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena7 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena8 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena9 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena10 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena11 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena12 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena13 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena14 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena15 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena16 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena17 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena18 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena19 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena20 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena21 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena22 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena23 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena24 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena25 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #doneena26 {
            font-size: 16px;
            font-family: 'Mitr', sans-serif;
            font-style: italic;
            color: #6b7a87;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>

    <!-- script Range -->
    <script>
        const
            range = document.getElementById('range'),
            rangeV = document.getElementById('rangeV'),
            doneena1 = document.getElementById('doneena1'),
            setValue = () => {
                const
                    newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                    newPosition = 10 - (newValue * 0.2);
                rangeV.innerHTML = `<span>${range.value}</span>`;
                rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
                if (range.value == 100) {
                    doneena1.innerHTML = `คุณสามารถสื่อสารโดยการเขียนบรรยายเพื่อเล่าเรื่องจากประสบการณ์ของตนเองตามความเหมาะสมกับความต้องการของผู้อ่านได้อย่างมีประสิทธิภาพมาก`; /////// let to show value at S1_list
                } else if (range.value == 0) {
                    doneena1.innerHTML = `คุณไม่สามารถสื่อสารโดยการเขียนบรรยายเพื่อเล่าเรื่องจากประสบการณ์ของตนเองตามความเหมาะสมกับความต้องการของผู้อ่าน`;

                } else {
                    doneena1.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue);
        range.addEventListener('input', setValue);
    </script>

    <!-- script Range2 -->
    <script>
        const
            range2 = document.getElementById('range2'),
            rangeV2 = document.getElementById('rangeV2'),
            doneena2 = document.getElementById('doneena2'),
            setValue2 = () => {
                const
                    newValue2 = Number((range2.value - range2.min) * 100 / (range2.max - range2.min)),
                    newPosition2 = 10 - (newValue2 * 0.2);
                rangeV2.innerHTML = `<span>${range2.value}</span>`;
                rangeV2.style.left = `calc(${newValue2}% + (${newPosition2}px))`;
                if (range2.value == 100) {
                    doneena2.innerHTML = `คุณสามารถสื่อสารโดยการเขียนบรรยายจากจินตนาการของตนเองตามความเหมาะสมกับความต้องการของผู้อ่านได้อย่างมีประสิทธิภาพมาก`; /////// let to show value at S1_list
                } else if (range2.value == 0) {
                    doneena2.innerHTML = `คุณไม่สามารถสื่อสารโดยการเขียนบรรยายจากจินตนาการของตนเองตามความเหมาะสมกับความต้องการของผู้อ่าน`;

                } else {
                    doneena2.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue2);
        range2.addEventListener('input', setValue2);
    </script>

    <!-- script Range3 -->
    <script>
        const
            range3 = document.getElementById('range3'),
            rangeV3 = document.getElementById('rangeV3'),
            doneena3 = document.getElementById('doneena3'),
            setValue3 = () => {
                const
                    newValue3 = Number((range3.value - range3.min) * 100 / (range3.max - range3.min)),
                    newPosition3 = 10 - (newValue3 * 0.2);
                rangeV3.innerHTML = `<span>${range3.value}</span>`;
                rangeV3.style.left = `calc(${newValue3}% + (${newPosition3}px))`;
                if (range3.value == 100) {
                    doneena3.innerHTML = `คุณสามารถพึ่งพามโนภาพในการออกแบบ การสร้าง หรือการปรับปรุงอุปกรณ์และเทคโนโลยีเพื่อตอบสนองความต้องการของผู้ใช้ได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range3.value == 0) {
                    doneena3.innerHTML = `คุณไม่สามารถพึ่งพามโนภาพในการออกแบบ การสร้าง หรือการปรับปรุงอุปกรณ์และเทคโนโลยีเพื่อตอบสนองความต้องการของผู้ใช้`;

                } else {
                    doneena3.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue3);
        range3.addEventListener('input', setValue3);
    </script>

    <!-- script Range4 -->
    <script>
        const
            range4 = document.getElementById('range4'),
            rangeV4 = document.getElementById('rangeV4'),
            doneena4 = document.getElementById('doneena4'),
            setValue4 = () => {
                const
                    newValue4 = Number((range4.value - range4.min) * 100 / (range4.max - range4.min)),
                    newPosition4 = 10 - (newValue4 * 0.2);
                rangeV4.innerHTML = `<span>${range4.value}</span>`;
                rangeV4.style.left = `calc(${newValue4}% + (${newPosition4}px))`;
                if (range4.value == 100) {
                    doneena4.innerHTML = ` คุณสามารถดำเนินงาน ควบคุมการทำงาน และตรวจสอบการดำเนินงานหรือตัวชี้วัดอื่น ๆ ของอุปกรณ์หรือระบบต่าง ๆ ได้อย่างคล่องแคล่วมาก`; /////// let to show value at S1_list
                } else if (range4.value == 0) {
                    doneena4.innerHTML = `คุณไม่สามารถดำเนินงาน ควบคุมการทำงาน และตรวจสอบการดำเนินงานหรือตัวชี้วัดอื่น ๆ ของอุปกรณ์หรือระบบต่าง ๆ `;

                } else {
                    doneena4.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue4);
        range4.addEventListener('input', setValue4);
    </script>

    <!-- script Range5 -->
    <script>
        const
            range5 = document.getElementById('range5'),
            rangeV5 = document.getElementById('rangeV5'),
            doneena5 = document.getElementById('doneena5'),
            setValue5 = () => {
                const
                    newValue5 = Number((range5.value - range5.min) * 100 / (range5.max - range5.min)),
                    newPosition5 = 10 - (newValue5 * 0.2);
                rangeV5.innerHTML = `<span>${range5.value}</span>`;
                rangeV5.style.left = `calc(${newValue5}% + (${newPosition5}px))`;
                if (range5.value == 100) {
                    doneena5.innerHTML = `คุณสามารถผสานการทำงานเข้ากับการเรียนรู้ในเรื่องต่าง ๆ ได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range5.value == 0) {
                    doneena5.innerHTML = `คุณไม่สามารถผสานการทำงานเข้ากับการเรียนรู้ในเรื่องต่าง ๆ`;

                } else {
                    doneena5.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue5);
        range5.addEventListener('input', setValue5);
    </script>

    <!-- script Range6 -->
    <script>
        const
            range6 = document.getElementById('range6'),
            rangeV6 = document.getElementById('rangeV6'),
            doneena6 = document.getElementById('doneena6'),
            setValue6 = () => {
                const
                    newValue6 = Number((range6.value - range6.min) * 100 / (range6.max - range6.min)),
                    newPosition6 = 10 - (newValue6 * 0.2);
                rangeV6.innerHTML = `<span>${range6.value}</span>`;
                rangeV6.style.left = `calc(${newValue6}% + (${newPosition6}px))`;
                if (range6.value == 100) {
                    doneena6.innerHTML = `คุณสามารถเรียนรู้ วิเคราะห์ ตรวจสอบ ประเมินผลการปฏิบัติงานของตนเอง บุคคลอื่น หรือองค์กร เพื่อทำการปรับปรุงหรือดำเนินการแก้ไขได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range6.value == 0) {
                    doneena6.innerHTML = `คุณไม่สามารถเรียนรู้ วิเคราะห์ ตรวจสอบ ประเมินผลการปฏิบัติงานของตนเอง บุคคลอื่น หรือองค์กร เพื่อทำการปรับปรุงหรือดำเนินการแก้ไข`;

                } else {
                    doneena6.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue6);
        range6.addEventListener('input', setValue6);
    </script>

    <!-- script Range7 -->
    <script>
        const
            range7 = document.getElementById('range7'),
            rangeV7 = document.getElementById('rangeV7'),
            doneena7 = document.getElementById('doneena7'),
            setValue7 = () => {
                const
                    newValue7 = Number((range7.value - range7.min) * 100 / (range7.max - range7.min)),
                    newPosition7 = 10 - (newValue7 * 0.2);
                rangeV7.innerHTML = `<span>${range7.value}</span>`;
                rangeV7.style.left = `calc(${newValue7}% + (${newPosition7}px))`;
                if (range7.value == 100) {
                    doneena7.innerHTML = ` คุณสามารถวิเคราะห์ความต้องการและข้อกำหนดของผลิตภัณฑ์เพื่อสร้างการออกแบบที่เหมาะสมด้วยตนเองได้ดี`; /////// let to show value at S1_list
                } else if (range7.value == 0) {
                    doneena7.innerHTML = `คุณไม่สามารถวิเคราะห์ความต้องการและข้อกำหนดของผลิตภัณฑ์เพื่อสร้างการออกแบบที่เหมาะสมได้`;

                } else {
                    doneena7.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue7);
        range7.addEventListener('input', setValue7);
    </script>

    <!-- script Range8 -->
    <script>
        const
            range8 = document.getElementById('range8'),
            rangeV8 = document.getElementById('rangeV8'),
            doneena8 = document.getElementById('doneena8'),
            setValue8 = () => {
                const
                    newValue8 = Number((range8.value - range8.min) * 100 / (range8.max - range8.min)),
                    newPosition8 = 10 - (newValue8 * 0.2);
                rangeV8.innerHTML = `<span>${range8.value}</span>`;
                rangeV8.style.left = `calc(${newValue8}% + (${newPosition8}px))`;
                if (range8.value == 100) {
                    doneena8.innerHTML = `คุณสามารถสร้างแรงจูงใจ พัฒนา และชี้นำผู้คนในขณะทำงาน โดยระบุคนที่ดีที่สุดสำหรับแต่ละงานได้อย่างเหมาะสมมาก `; /////// let to show value at S1_list
                } else if (range8.value == 0) {
                    doneena8.innerHTML = `คุณไม่สามารถสร้างแรงจูงใจ พัฒนา และชี้นำผู้คนในขณะทำงาน โดยระบุคนที่ดีที่สุดสำหรับแต่ละงาน`;

                } else {
                    doneena8.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue8);
        range8.addEventListener('input', setValue8);
    </script>

    <!-- script Range9 -->
    <script>
        const
            range9 = document.getElementById('range9'),
            rangeV9 = document.getElementById('rangeV9'),
            doneena9 = document.getElementById('doneena9'),
            setValue9 = () => {
                const
                    newValue9 = Number((range9.value - range9.min) * 100 / (range9.max - range9.min)),
                    newPosition9 = 10 - (newValue9 * 0.2);
                rangeV9.innerHTML = `<span>${range9.value}</span>`;
                rangeV9.style.left = `calc(${newValue9}% + (${newPosition9}px))`;
                if (range9.value == 100) {
                    doneena9.innerHTML = `คุณสามารถช่วยเหลือผู้อื่นในการแก้ไขสถานการณ์ความขัดแย้ง โดยชักชวนผู้อื่นให้เปลี่ยนความคิดหรือพฤติกรรมของเขา หรือพยายามปรับความแตกต่างเข้าหากันได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range9.value == 0) {
                    doneena9.innerHTML = `คุณไม่สามารถช่วยเหลือผู้อื่นในการแก้ไขสถานการณ์ความขัดแย้ง โดยชักชวนผู้อื่นให้เปลี่ยนความคิดหรือพฤติกรรมของเขา หรือพยายามปรับความแตกต่างเข้าหากัน`;

                } else {
                    doneena9.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue9);
        range9.addEventListener('input', setValue9);
    </script>

    <!-- script Range10 -->
    <script>
        const
            range10 = document.getElementById('range10'),
            rangeV10 = document.getElementById('rangeV10'),
            doneena10 = document.getElementById('doneena10'),
            setValue10 = () => {
                const
                    newValue10 = Number((range10.value - range10.min) * 100 / (range10.max - range10.min)),
                    newPosition10 = 10 - (newValue10 * 0.2);
                rangeV10.innerHTML = `<span>${range10.value}</span>`;
                rangeV10.style.left = `calc(${newValue10}% + (${newPosition10}px))`;
                if (range10.value == 100) {
                    doneena10.innerHTML = `คุณสามารถพูดคุยกับผู้อื่นเพื่อถ่ายทอดข้อมูลได้อย่างมีประสิทธิภาพมาก `; /////// let to show value at S1_list
                } else if (range10.value == 0) {
                    doneena10.innerHTML = `คุณไม่สามารถพูดคุยกับผู้อื่นเพื่อถ่ายทอดข้อมูล`;

                } else {
                    doneena10.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue10);
        range10.addEventListener('input', setValue10);
    </script>

    <!-- script Range11 -->
    <script>
        const
            range11 = document.getElementById('range11'),
            rangeV11 = document.getElementById('rangeV11'),
            doneena11 = document.getElementById('doneena11'),
            setValue11 = () => {
                const
                    newValue11 = Number((range11.value - range11.min) * 100 / (range11.max - range11.min)),
                    newPosition11 = 10 - (newValue11 * 0.2);
                rangeV11.innerHTML = `<span>${range11.value}</span>`;
                rangeV11.style.left = `calc(${newValue11}% + (${newPosition11}px))`;
                if (range11.value == 100) {
                    doneena11.innerHTML = ` คุณสามารถชักชวนผู้อื่นให้เปลี่ยนความคิดหรือพฤติกรรมของเขาได้ทุกครั้ง`; /////// let to show value at S1_list
                } else if (range11.value == 0) {
                    doneena11.innerHTML = `คุณไม่สามารถชักชวนผู้อื่นให้เปลี่ยนความคิดหรือพฤติกรรมของเขา `;

                } else {
                    doneena11.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue11);
        range11.addEventListener('input', setValue11);
    </script>

    <!-- script Range12 -->
    <script>
        const
            range12 = document.getElementById('range12'),
            rangeV12 = document.getElementById('rangeV12'),
            doneena12 = document.getElementById('doneena12'),
            setValue12 = () => {
                const
                    newValue12 = Number((range12.value - range12.min) * 100 / (range12.max - range12.min)),
                    newPosition12 = 10 - (newValue12 * 0.2);
                rangeV12.innerHTML = `<span>${range12.value}</span>`;
                rangeV12.style.left = `calc(${newValue12}% + (${newPosition12}px))`;
                if (range12.value == 100) {
                    doneena12.innerHTML = ` คุณสามารถพิจารณาต้นทุนและผลประโยชน์ที่สัมพันธ์กับการกระทำที่อาจเกิดขึ้น เพื่อเลือกสิ่งที่เหมาะสมที่สุดได้อย่างมีประสิทธิภาพมาก`; /////// let to show value at S1_list
                } else if (range12.value == 0) {
                    doneena12.innerHTML = `คุณไม่สามารถพิจารณาต้นทุนและผลประโยชน์ที่สัมพันธ์กับการกระทำที่อาจเกิดขึ้น เพื่อเลือกสิ่งที่เหมาะสมที่สุด `;

                } else {
                    doneena12.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue12);
        range12.addEventListener('input', setValue12);
    </script>

    <!-- script Range13 -->
    <script>
        const
            range13 = document.getElementById('range13'),
            rangeV13 = document.getElementById('rangeV13'),
            doneena13 = document.getElementById('doneena13'),
            setValue13 = () => {
                const
                    newValue13 = Number((range13.value - range13.min) * 100 / (range13.max - range13.min)),
                    newPosition13 = 10 - (newValue13 * 0.2);
                rangeV13.innerHTML = `<span>${range13.value}</span>`;
                rangeV13.style.left = `calc(${newValue13}% + (${newPosition13}px))`;
                if (range13.value == 100) {
                    doneena13.innerHTML = `คุณสามารถช่วยผู้อื่นในการแก้ปัญหา โดยระบุสาเหตุของข้อผิดพลาดในการดำเนินงานและตัดสินใจว่าควรทำอย่างไรได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range13.value == 0) {
                    doneena13.innerHTML = `คุณไม่สามารถช่วยผู้อื่นในการแก้ปัญหา โดยระบุสาเหตุของข้อผิดพลาดในการดำเนินงานและตัดสินใจว่าควรทำอย่างไร`;

                } else {
                    doneena13.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue13);
        range13.addEventListener('input', setValue13);
    </script>

    <!-- script Range14 -->
    <script>
        const
            range14 = document.getElementById('range14'),
            rangeV14 = document.getElementById('rangeV14'),
            doneena14 = document.getElementById('doneena14'),
            setValue14 = () => {
                const
                    newValue14 = Number((range14.value - range14.min) * 100 / (range14.max - range14.min)),
                    newPosition14 = 10 - (newValue14 * 0.2);
                rangeV14.innerHTML = `<span>${range14.value}</span>`;
                rangeV14.style.left = `calc(${newValue14}% + (${newPosition14}px))`;
                if (range14.value == 100) {
                    doneena14.innerHTML = `คุณสามารถใช้กฎและวิธีการทางวิทยาศาสตร์เพื่อแก้ปัญหาได้อย่างมีประสิทธิภาพมาก `; /////// let to show value at S1_list
                } else if (range14.value == 0) {
                    doneena14.innerHTML = `คุณไม่สามารถใช้กฎและวิธีการทางวิทยาศาสตร์เพื่อแก้ปัญหา`;

                } else {
                    doneena14.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue14);
        range14.addEventListener('input', setValue14);
    </script>

    <!-- script Range15 -->
    <script>
        const
            range15 = document.getElementById('range15'),
            rangeV15 = document.getElementById('rangeV15'),
            doneena15 = document.getElementById('doneena15'),
            setValue15 = () => {
                const
                    newValue15 = Number((range15.value - range15.min) * 100 / (range15.max - range15.min)),
                    newPosition15 = 10 - (newValue15 * 0.2);
                rangeV15.innerHTML = `<span>${range15.value}</span>`;
                rangeV15.style.left = `calc(${newValue15}% + (${newPosition15}px))`;
                if (range15.value == 100) {
                    doneena15.innerHTML = ` คุณสามารถทำความเข้าใจสิ่งต่าง ๆ ที่เชื่อมโยงหรือสัมพันธ์กับงานหรืออาชีพที่ตนเองทำได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range15.value == 0) {
                    doneena15.innerHTML = `คุณไม่สามารถทำความเข้าใจสิ่งต่าง ๆ ที่เชื่อมโยงหรือสัมพันธ์กับงานหรืออาชีพที่ตนเองทำ`;

                } else {
                    doneena15.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue15);
        range15.addEventListener('input', setValue15);
    </script>

    <!-- script Range16 -->
    <script>
        const
            range16 = document.getElementById('range16'),
            rangeV16 = document.getElementById('rangeV16'),
            doneena16 = document.getElementById('doneena16'),
            setValue16 = () => {
                const
                    newValue16 = Number((range16.value - range16.min) * 100 / (range16.max - range16.min)),
                    newPosition16 = 10 - (newValue16 * 0.2);
                rangeV16.innerHTML = `<span>${range16.value}</span>`;
                rangeV16.style.left = `calc(${newValue16}% + (${newPosition16}px))`;
                if (range16.value == 100) {
                    doneena16.innerHTML = `คุณสามารถติดตั้งอุปกรณ์ ใช้อุปกรณ์ สิ่งอำนวยความสะดวก และวัสดุที่จำเป็นในการทำงาน ได้อย่างคล่องแคล่วมาก `; /////// let to show value at S1_list
                } else if (range16.value == 0) {
                    doneena16.innerHTML = `คุณไม่สามารถติดตั้งอุปกรณ์ ใช้อุปกรณ์ สิ่งอำนวยความสะดวก และวัสดุที่จำเป็นในการทำงาน`;

                } else {
                    doneena16.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue16);
        range16.addEventListener('input', setValue16);
    </script>

    <!-- script Range17 -->
    <script>
        const
            range17 = document.getElementById('range17'),
            rangeV17 = document.getElementById('rangeV17'),
            doneena17 = document.getElementById('doneena17'),
            setValue17 = () => {
                const
                    newValue17 = Number((range17.value - range17.min) * 100 / (range17.max - range17.min)),
                    newPosition17 = 10 - (newValue17 * 0.2);
                rangeV17.innerHTML = `<span>${range17.value}</span>`;
                rangeV17.style.left = `calc(${newValue17}% + (${newPosition17}px))`;
                if (range17.value == 100) {
                    doneena17.innerHTML = `คุณสามารถเข้าไปมีส่วนร่วมในสภาวะต่าง ๆ ทั้งสภาวะตึงเครียดและเสี่ยงอันตรายได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range17.value == 0) {
                    doneena17.innerHTML = `คุณไม่สามารถเข้าไปมีส่วนร่วมในสภาวะต่าง ๆ ทั้งสภาวะตึงเครียดและเสี่ยงอันตราย`;

                } else {
                    doneena17.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue17);
        range17.addEventListener('input', setValue17);
    </script>

    <!-- script Range18 -->
    <script>
        const
            range18 = document.getElementById('range18'),
            rangeV18 = document.getElementById('rangeV18'),
            doneena18 = document.getElementById('doneena18'),
            setValue18 = () => {
                const
                    newValue18 = Number((range18.value - range18.min) * 100 / (range18.max - range18.min)),
                    newPosition18 = 10 - (newValue18 * 0.2);
                rangeV18.innerHTML = `<span>${range18.value}</span>`;
                rangeV18.style.left = `calc(${newValue18}% + (${newPosition18}px))`;
                if (range18.value == 100) {
                    doneena18.innerHTML = `คุณสามารถทำงานกลางแจ้ง นอกอาคาร หรือบริเวณที่โล่งแจ้งไม่มีอะไรปกคลุมได้ดีมาก `; /////// let to show value at S1_list
                } else if (range18.value == 0) {
                    doneena18.innerHTML = `คุณไม่สามารถทำงานกลางแจ้ง นอกอาคาร หรือบริเวณที่โล่งแจ้งไม่มีอะไรปกคลุม`;

                } else {
                    doneena18.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue18);
        range18.addEventListener('input', setValue18);
    </script>

    <!-- script Range19 -->
    <script>
        const
            range19 = document.getElementById('range19'),
            rangeV19 = document.getElementById('rangeV19'),
            doneena19 = document.getElementById('doneena19'),
            setValue19 = () => {
                const
                    newValue19 = Number((range19.value - range19.min) * 100 / (range19.max - range19.min)),
                    newPosition19 = 10 - (newValue19 * 0.2);
                rangeV19.innerHTML = `<span>${range19.value}</span>`;
                rangeV19.style.left = `calc(${newValue19}% + (${newPosition19}px))`;
                if (range19.value == 100) {
                    doneena19.innerHTML = `คุณสามารถทำงานร่วมกับผู้อื่นในองค์กร และทำงานเป็นทีมได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range19.value == 0) {
                    doneena19.innerHTML = `คุณไม่สามารถทำงานร่วมกับผู้อื่นในองค์กร และไม่สามารถทำงานเป็นทีมได้`;

                } else {
                    doneena19.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue19);
        range19.addEventListener('input', setValue19);
    </script>

    <!-- script Range20 -->
    <script>
        const
            range20 = document.getElementById('range20'),
            rangeV20 = document.getElementById('rangeV20'),
            doneena20 = document.getElementById('doneena20'),
            setValue20 = () => {
                const
                    newValue20 = Number((range20.value - range20.min) * 100 / (range20.max - range20.min)),
                    newPosition20 = 10 - (newValue20 * 0.2);
                rangeV20.innerHTML = `<span>${range20.value}</span>`;
                rangeV20.style.left = `calc(${newValue20}% + (${newPosition20}px))`;
                if (range20.value == 100) {
                    doneena20.innerHTML = `คุณสามารถปรับการทำงานของตนเองให้เข้ากับผู้อื่นหรือทีมได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range20.value == 0) {
                    doneena20.innerHTML = `คุณไม่สามารถปรับการทำงานของตนเองให้เข้ากับผู้อื่นหรือทีมได้`;

                } else {
                    doneena20.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue20);
        range20.addEventListener('input', setValue20);
    </script>

    <!-- script Range21 -->
    <script>
        const
            range21 = document.getElementById('range21'),
            rangeV21 = document.getElementById('rangeV21'),
            doneena21 = document.getElementById('doneena21'),
            setValue21 = () => {
                const
                    newValue21 = Number((range21.value - range21.min) * 100 / (range21.max - range21.min)),
                    newPosition21 = 10 - (newValue21 * 0.2);
                rangeV21.innerHTML = `<span>${range21.value}</span>`;
                rangeV21.style.left = `calc(${newValue21}% + (${newPosition21}px))`;
                if (range21.value == 100) {
                    doneena21.innerHTML = `คุณสามารถปฐมพยาบาลเบื้องต้น หรือดูแลสุขภาพของตนเองได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range21.value == 0) {
                    doneena21.innerHTML = `คุณไม่สามารถปฐมพยาบาลเบื้องต้น หรือดูแลสุขภาพของตนเองได้`;

                } else {
                    doneena21.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue21);
        range21.addEventListener('input', setValue21);
    </script>

    <!-- script Range22 -->
    <script>
        const
            range22 = document.getElementById('range22'),
            rangeV22 = document.getElementById('rangeV22'),
            doneena22 = document.getElementById('doneena22'),
            setValue22 = () => {
                const
                    newValue22 = Number((range22.value - range22.min) * 100 / (range22.max - range22.min)),
                    newPosition22 = 10 - (newValue22 * 0.2);
                rangeV22.innerHTML = `<span>${range22.value}</span>`;
                rangeV22.style.left = `calc(${newValue22}% + (${newPosition22}px))`;
                if (range22.value == 100) {
                    doneena22.innerHTML = ` คุณสามารถไว้วางใจ เชื่อมั่น และพึ่งมาเพื่อนร่วมงานในการทำงานร่วมกันได้อย่างดีมาก`; /////// let to show value at S1_list
                } else if (range22.value == 0) {
                    doneena22.innerHTML = `คุณไม่สามารถไว้วางใจ เชื่อมั่น และพึ่งมาเพื่อนร่วมงานในการทำงานร่วมกัน`;

                } else {
                    doneena22.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue22);
        range22.addEventListener('input', setValue22);
    </script>

    <!-- script Range23 -->
    <script>
        const
            range23 = document.getElementById('range23'),
            rangeV23 = document.getElementById('rangeV23'),
            doneena23 = document.getElementById('doneena23'),
            setValue23 = () => {
                const
                    newValue23 = Number((range23.value - range23.min) * 100 / (range23.max - range23.min)),
                    newPosition23 = 10 - (newValue23 * 0.2);
                rangeV23.innerHTML = `<span>${range23.value}</span>`;
                rangeV23.style.left = `calc(${newValue23}% + (${newPosition23}px))`;
                if (range23.value == 100) {
                    doneena23.innerHTML = `คุณสามารถเข้าไปมีส่วนร่วมกับประเด็นปัญหาสังคม และตระหนักถึงปฏิกิริยาของผู้อื่นและทำความเข้าใจปฏิกิริยาเหล่านั้นได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range23.value == 0) {
                    doneena23.innerHTML = `คุณไม่สามารถเข้าไปมีส่วนร่วมกับประเด็นปัญหาสังคม และตระหนักถึงปฏิกิริยาของผู้อื่นและทำความเข้าใจปฏิกิริยาเหล่านั้น`;

                } else {
                    doneena23.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue23);
        range23.addEventListener('input', setValue23);
    </script>

    <!-- script Range24 -->
    <script>
        const
            range24 = document.getElementById('range24'),
            rangeV24 = document.getElementById('rangeV24'),
            doneena24 = document.getElementById('doneena24'),
            setValue24 = () => {
                const
                    newValue24 = Number((range24.value - range24.min) * 100 / (range24.max - range24.min)),
                    newPosition24 = 10 - (newValue24 * 0.2);
                rangeV24.innerHTML = `<span>${range24.value}</span>`;
                rangeV24.style.left = `calc(${newValue24}% + (${newPosition24}px))`;
                if (range24.value == 100) {
                    doneena24.innerHTML = `คุณสามารถเขียนโปรแกรมคอมพิวเตอร์เพื่อวัตถุประสงค์ต่าง ๆได้ดีด้วยตนเอง `; /////// let to show value at S1_list
                } else if (range24.value == 0) {
                    doneena24.innerHTML = `คุณไม่สามารถเขียนโปรแกรมคอมพิวเตอร์เพื่อวัตถุประสงค์ต่าง ๆได้`;

                } else {
                    doneena24.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue24);
        range24.addEventListener('input', setValue24);
    </script>

    <!-- script Range25 -->
    <script>
        const
            range25 = document.getElementById('range25'),
            rangeV25 = document.getElementById('rangeV25'),
            doneena25 = document.getElementById('doneena25'),
            setValue25 = () => {
                const
                    newValue25 = Number((range25.value - range25.min) * 100 / (range25.max - range25.min)),
                    newPosition25 = 10 - (newValue25 * 0.2);
                rangeV25.innerHTML = `<span>${range25.value}</span>`;
                rangeV25.style.left = `calc(${newValue25}% + (${newPosition25}px))`;
                if (range25.value == 100) {
                    doneena25.innerHTML = `คุณสามารถทำงานต่าง ๆ ร่วมกับผู้อื่นได้ โดยเฉพาะเด็กหรือคนหนุ่มสาวได้อย่างดีมาก `; /////// let to show value at S1_list
                } else if (range25.value == 0) {
                    doneena25.innerHTML = `คุณไม่สามารถทำงานต่าง ๆ ร่วมกับผู้อื่นได้ โดยเฉพาะเด็กหรือคนหนุ่มสาว`;

                } else {
                    doneena25.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue25);
        range25.addEventListener('input', setValue25);
    </script>

    <!-- script Range26 -->
    <script>
        const
            range26 = document.getElementById('range26'),
            rangeV26 = document.getElementById('rangeV26'),
            doneena26 = document.getElementById('doneena26'),
            setValue26 = () => {
                const
                    newValue26 = Number((range26.value - range26.min) * 100 / (range26.max - range26.min)),
                    newPosition26 = 10 - (newValue26 * 0.2);
                rangeV26.innerHTML = `<span>${range26.value}</span>`;
                rangeV26.style.left = `calc(${newValue26}% + (${newPosition26}px))`;
                if (range26.value == 100) {
                    doneena26.innerHTML = `คุณสามารถสื่อสารโดยการเขียนบรรยายจากจินตนาการของตนเองตามความเหมาะสมกับความต้องการของผู้อ่านได้อย่างมีประสิทธิภาพมาก `; /////// let to show value at S1_list
                } else if (range26.value == 0) {
                    doneena26.innerHTML = `คุณไม่สามารถสื่อสารโดยการเขียนบรรยายจากจินตนาการของตนเองตามความเหมาะสมกับความต้องการของผู้อ่าน`;

                } else {
                    doneena26.innerHTML = '';
                }
            };
        document.addEventListener("DOMContentLoaded", setValue26);
        range26.addEventListener('input', setValue26);
    </script>

</html>