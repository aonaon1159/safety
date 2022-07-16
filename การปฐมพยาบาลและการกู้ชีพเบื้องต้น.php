<?php include('header_front.php'); ?>
<?php include('function.php'); ?>
<?php
$id_training = 155; //การปฐมพยาบาลและการกู้ชีพเบื้องต้น (First Aid & CPR Basic)

//หา banner
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = 'SELECT path_banner,alt FROM menu_training WHERE url_page = ?';
$stmt = $safetyDb->prepare($sql);
$stmt->execute(array($actual_link));
$menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

//หา course outline 
$stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
$stmt->execute(array($id_training));
$url_course_outline = $stmt->fetchColumn();
?>
<style>
.people_inhouse {
    position: absolute;
    bottom: 0;
    left: 3vw;
    z-index: 2;
    height: 22vw;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <div style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt']; ?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner']; ?>">
        </section>
        <?php include('layout/tab_search.php'); ?>
    </div>


    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>การปฐมพยาบาลและการกู้ชีพเบื้องต้น (First Aid & CPR Basic)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (17).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                เหตุการณ์ฉุกเฉินทางสุขภาพจากภัยพิบัติอุบัติเหตุหรือการป่วยรุนแรง
                                ส่งผลให้เกิดภาวะเสี่ยงต่อการเสียชีวิตสิ่งสำคัญเร่งด่วนคือผู้ที่อยู่ในเหตุการณ์ขณะนั้นสามารถทำการกู้ชีพและปฐมพยาบาลอย่างถูกต้อง
                                รวดเร็ว มีประสิทธิภาพ เพื่อช่วยให้ผู้ป่วย หรือผู้บาดเจ็บที่หมดสติหยุดหายใจ หัวใจหยุดเต้น
                                จากสถานการณ์ฉุกเฉินต่างๆ เช่น ภาวะหัวใจวายเฉียบพลัน กล้ามเนื้อหัวใจขาดเลือดเฉียบพลัน
                                จมน้ำ การทำงานในที่อับอากาศ ไฟฟ้าช็อต อุบัติเหตุทางท้องถนน
                                หรือผู้ป่วยจากอาการของโรคที่มีอาการรุนแรง ซึ่งในช่วงเวลาสั้นๆ
                                เมื่อเกิดการหยุดหายใจเป็นช่วงเวลาที่มีความสำคัญมาก
                                ผู้ป่วยอาจเสียชีวิตหรือสมองตายหากสมองขาดออกซิเจนนานเกิน 4 - 6 นาที การช่วยชีวิต ณ
                                จุดเกิดเหตุอย่างถูกต้องและรวดเร็วจะช่วยให้ผู้ป่วยรอดชีวิต
                                หรือยืดระยะเวลาให้ผู้ป่วยได้รับการส่งต่อไปยังทีมแพทย์ฉุกเฉินได้อย่างปลอดภัย
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                หลักการของการช่วยฟื้นคืนชีพ (Cardio Pulmonary Resuscitation:CPR) คือการช่วย
                                ให้เกิดการไหลเวียนของเลือดในร่างกายเพื่อป้องกันภาวะสมอง หัวใจ
                                และเนื้อเยื่อของอวัยวะสำคัญ
                                ขาดออกซิเจน ด้วยการกดหน้าอกและการช่วยหายใจในช่วงที่ผู้ป่วยหยุดหายใจและหัวใจหยุดเต้น
                                การช่วยฟื้นคืนชีพด้วยการกดหน้าอกจะช่วยให้ผู้ป่วยรอดชีวิตได้ร้อยละ 3 – 5
                                กรณีที่ใช้เครื่องฟื้น
                                คืนคลื่นหัวใจด้วยไฟฟ้าแบบอัตโนมัติหรือเครื่อง เออีดี(Automated External Defibrillator:
                                AED) ร่วมด้วยจะช่วยเพิ่มอัตราการรอดชีวิตให้สูงขึ้นถึงร้อยละ 45-50
                                ปัจจุบันมักพบเครื่องเออีดี
                                ติดตั้งอยู่ตามสถานที่สำคัญต่างๆ
                                เพื่อให้สามารถนำไปใช้ในการช่วยชีวิตผู้ป่วยได้อย่างทันท่วงที
                                การช่วยฟื้นคืนชีพ การใช้เครื่องเออีดีและการปฐมพยาบาลฉุกเฉิน จึงเป็นความรู้ขั้นพื้นฐาน
                                ที่ประชาชนคนไทยทุกคนต้องได้รับการอบรม หรือเรียนรู้เพื่อเพิ่มโอกาสรอดของผู้ป่วยผู้บาดเจ็บ
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การปฐมพยาบาลและการกู้ชีพเบื้องต้น (First Aid & CPR Basic)</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการปฐมพยาบาลและการกู้ชีพเบื้องต้น (First Aid & CPR Basic)
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training; ?>" href="#tab2" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-12 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            <h4><b>การปฐมพยาบาลเบื้องต้น</b></h4>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>การปฐมพยาบาลเบื้องต้น เหตุการณ์ฉุกเฉินทางสุขภาพจากภัยพิบัติอุบัติเหตุ หรือ การป่วยรุนแรง ส่งผลให้เกิดภาวะเสี่ยงต่อการเสียชีวิตสิ่งสำคัญเร่งด่วนคือ การปฐมพยาบาลอย่างถูกต้อง เพื่อช่วยผู้ป่วย หรือผู้บาดเจ็บที่หมดสติหยุดหายใจ หัวใจหยุดเต้น จากสถานการณ์ฉุกเฉิน</h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/Gd4Cgk8LGVs?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/การปฐมพยาบาลและการกู้ชีพเบื้องต้น-เซฟตี้อินไทย.jpg" alt="การปฐมพยาบาลและการกู้ชีพเบื้องต้น-เซฟตี้อินไทย">
                            <button class="ytp-large-play-button ytp-button" aria-label="Play"><svg height="100%"
                                    version="1.1" viewBox="0 0 68 48" width="100%">
                                    <path class="ytp-large-play-button-bg"
                                        d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                        fill="#f00"></path>
                                    <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/8vcqDOoHWOw?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="https://img.youtube.com/vi/8vcqDOoHWOw/maxresdefault.jpg" alt="6 ขั้นตอนการปฐมพยาบาลเบื้องต้น">
                            <button class="ytp-large-play-button ytp-button" aria-label="Play"><svg height="100%"
                                    version="1.1" viewBox="0 0 68 48" width="100%">
                                    <path class="ytp-large-play-button-bg"
                                        d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                        fill="#f00"></path>
                                    <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-5 col-12 text-center">
                    <a class="btn btn--medium btn--radius btn--red text-uppercase"
                        href="https://www.youtube.com/c/TopproChannel">WATCH NOW
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy" data-src="<?php echo $base_url; ?>/img/template_gallery/gallery5.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ความรู้เรื่องการปฐมพยาบาลเบื้องต้นและการช่วยฟื้นคืนชีพ เป็นสิ่งที่องค์กรต่าง ๆ
                        ควรให้ความรู้กับพนักงานเป็นอย่างมาก เพราะเรื่องความเจ็บป่วยหรืออุบัติเหตุ
                        เป็นสิ่งที่เราไม่สามารถคาดการณ์ล่วงหน้าว่าจะเกิดขึ้นเมื่อไหร่
                        แม้บางครั้งเราจะมีมาตรการดูแลเรื่องความปลอดภัยเป็นอย่างดี แล้วก็ตาม
                        ดังนั้นการจัดการระบบส่งเสริมความรู้เรื่องระบบการปฐมพยาบาลเบื้องต้นและการช่วยฟื้นคืนชีพจึงเป็นความสำคัญในการสร้างความรู้สึกปลอดภัย
                        และความภาคภูมิใจในสถานที่ทำงาน
                        ในการช่วยกันดูแลพนักงานที่เกิดความเจ็บป่วยและเกิดอุบัติแบบกระทันหัน
                        ก่อนการช่วยชีวิตจากทางการแพทย์และพยาบาลต่อไป<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้ผู้เข้ารับการอบรมมีทักษะในการปฐมพยาบาล
                        สามารถช่วยเหลือตนเองและบุคคลใกล้ตัวได้อย่างปลอดภัยก่อนถึงโรงพยาบาล<br>
                        2) เพื่อให้ผู้เข้ารับการอบรมสามารถพัฒนาศักยภาพในด้านการดูแลสุขภาพตนเองของบุคลากร<br><br>

                        เนื้อหาหลักสูตร<br>
                        1) การปฐมพยาบาลเบื้องต้น (First Aid)
                        เป็นหลักสูตรสอนการปฐมพยาบาลระดับพื้นฐานที่พนักงานทุกคนสามารถช่วยเหลือผู้ประสบภัยได้เบื้องต้นอย่างมืออาชีพ<br>
                        2) การช่วยฟื้นคืนชีพ (CPR) การช่วยเหลือด้วยการฟื้นคืนชีพ
                        จากวิทยากรมืออาชีพที่ช่วยเหลือผู้ประสบภัยได้จริง พร้อมปฏิบัติจริง<br>
                        3) work shop การฝึกปฏิบัติการปฐมพยาบาลและการช่วยฟื้นคืนชีพ (CPR)
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" href="<?php echo $url_course_outline; ?>">
                            <button
                                class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                                เอกสารการอบรม
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="schedule container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>ตารางกำหนดการฝึกอบรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="20%" scope="col">
                                <h5>วัน/เวลา</h5>
                            </th>
                            <th width="80%" scope="col">
                                <h5>กำหนดการฝึกอบรม</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr class="schedule_head_tr">
                            <td>
                                <b>วันที่ 1</b>
                            </td>
                            <td>
                                <b>เนื้อหาการบรรยาย</b>
                            </td>
                        </tr>

                        <tr>
                            <td>08:30 - 09:00</td>
                            <td>- ลงทะเบียน/ทดสอบก่อนการอบรม</td>
                        </tr>
                        <tr>
                            <td>Session 1</td>
                            <td><b>หลักการปฐมพยาบาลทั่วไป (First Aid Principle)</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินอาการของผู้เจ็บปวยเบื้องต้น</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินสถานการณ์และกลไกการบาดเจ็บการประเมินจุดเกิดเหตุ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินความปลอดภัยของสถานการณ์และสภาพแวดล้อม</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การควบคุมสถานการณ์หรือร้องขอความช่วยเหลือจากหน่วยงานเฉพาะ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินระบบประสาทเบื้องต้นและสัญญาณชีพ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฏิบัติการตรวจรางกายผู้เจ็บป่วยเบื้องต้น</td>
                        </tr>
                        <tr>
                            <td>Session 2</td>
                            <td><b>การปฐมพยาบาลผู้ป่วยที่มีภาวะฉุกเฉินทางการแพทย์</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยเป็นลม</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยไม่รู้สึกตัว</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยจมน้ำ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยโรคกล้ามเนื้อหัวใจขาดเลือดเฉียบพลัน</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยโรคหลอดเลือดสมอง</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยภาวะชัก</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยเบาหวานมีภาวะฉุกเฉิน</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฐมพยาบาลผู้ป่วยถูกงูกัด</td>
                        </tr>
                        <tr>
                            <td>Session 3</td>
                            <td><b>การปฐมพยาบาลบาดแผล และการตกเลือด</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- โครงสร้างของผิวหนังชนิดของหลอดเลือดและการตกเลือด</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การปฐมพยาบาลบาดแผลชนิดต่างๆ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การใช้ผ้าสามเหลี่ยมห้ามเลือด</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- เทคนิคการใช้ผ้ายดในการห้ามเลือด</td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Session 4</td>
                            <td><b>การปฐมพยาบาลผู้ป่วยบาดเจ็บที่กล้ามเนื้อ ข้อต่อ และกระดูก</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- โครงสร้างของกล้ามเนื้อ ข้อต่อ และกระดูก</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ลักษณะการบาดเจ็บของกล้ามเนื้อและข้อต่อ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การปฐมพยาบาลผู้ป่วยบาดเจ็บที่กล้ามเนื้อ หรือข้อต่อ การหักของกระดูกชนิดต่างๆ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- แนวคิดในการเลือกเผือกชัวคราวชนิดต่างๆ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การเข้าเฝือกชั่วคราวชนิดต่างๆ</td>
                        </tr>
                        <tr>
                            <td>Session 5</td>
                            <td><b>หลักการปฐมพยาบาลทั่วไป (First Aid Principle)</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินอาการของผู้เจ็บป่วยเบื้องต้น</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินสถานการณ์และกลไกการบาดเจ็บการประเมินจุดเกิดเหตุ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเงินความปลอดภัยของสถานการณ์และสภาพแวดล้อม</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การควบคุมสถานการณ์หรือร้องขอความช่วยเหลือจากหน่วยงานเฉพาะ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การประเมินระบบประสาทเบื้องต้นและสัญญาณชีพ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ปฏิบัติการตรวจร่างกายผู้เจ็บป่วยเบื้องต้น</td>
                        </tr>
                        <tr>
                            <td>08:30 - 09:00</td>
                            <td>- ลงทะเบียน/ทดสอบก่อนการอบรม</td>
                        </tr>
                        <tr>
                        <tr>
                            <td>12:00 - 13:00</td>
                            <td> พักเที่ยง
                            </td>
                        </tr>
                        <tr>
                            <td>Session 6</td>
                            <td><b>ปฏิบัติการกู้ชีพขั้นพื้นฐาน (Cardiopulmonary Resuscitation: CPR)</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- แนวทางและความสำคัญของการกู้ชีพขั้นพื้นฐาน</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ข้อบ่งชี้ในการปฏิบัติการช่วยฟื้นคืนชีพ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ลำดับขั้นในการปฏิบัติการช่วยฟื้นคืนชีพ (สำคัญ คือ A B C ซึ่งต้องทำตามลำดับคือ)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> A - Airway: การเปิดทางเดินหายใจให้โล่ง</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> B - Breathing: การช่วยให้หายใจ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> C - Circulation: การนวดหัวใจเพื่อช่วยให้เกิดเลือดไหลเวียน</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- วิธีและหลักการนวดหัวใจผายปอดปฏิบัติการกู้ชีพ (CPR)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- ขั้นตอนการนวดหัวใจผายปอดกู้ชีพ (CPR)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การช่วยเหลือการหยุดหายใจและหัวใจหยุดเต้น Cardiopulmonary
                                resuscitation (CPR)</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- การปฏิบัติการช่วยชีวิตขั้นพื้นฐานผู้ใหญ่ (Adult CPR)</td>
                        </tr>
                        <tr>
                            <td>
                                <b>หมายเหตุ</b>
                            </td>
                            <td>
                                <b>
                                    - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                                    - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                                    ผ่านการทดสอบหลังอบรม
                                </b>
                            </td>
                        </tr>


                    </tbody>
                </table>

                <?php if (isset($url_course_outline)) { ?>
                <div class="col-lg-2 col-md-3 col-12 mt-5 mx-auto">
                    <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">
                        <button
                            class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                            เอกสารการอบรม
                        </button>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    การปฐมพยาบาลและการกู้ชีพเบื้องต้น
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-06.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-05.jpg" alt="การปฐมพยาบาลเบื้องต้น">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-04.jpg" alt="การปฐมพยาบาลเบื้องต้น">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-03.jpg" alt="การปฐมพยาบาลเบื้องต้น">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-02.jpg" alt="การปฐมพยาบาลเบื้องต้น">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความการปฐมพยาบาล-01.jpg" alt="การปฐมพยาบาลเบื้องต้น">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-3 col-8 mx-auto">
                    <a href="article">
                        <button
                            class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                            ดูทั้งหมด
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg bg_information">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b>
                    ข้อมูลที่เป็นประโยชน์
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row information">
                <div class="col-md-6 col-12 my-3 ">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap1">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปฏิบัติการช่วยฟื้นคืนชีพ (Cardiopulmonary Resuscitation:CPR) คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การช่วยเหลือผู้ที่หยุดหายใจและหัวใจหยุดเต้น ทำให้ผู้ป่วยกลับมาหายใจ
                            หรือมีการนำออกซิเจนเข้าสู่ร่างกาย
                            และเกิดการไหลเวียนเลือดไปเลี้ยงอวัยวะต่างๆ ของร่างกายโดยเฉพาะสมองกับหัวใจ จนกระทั่ง
                            ระบบต่างๆ กลับมาทำหน้าที่ได้ตามปกติเป็นการป้องกันการเสียชีวิต หรือเนื้อเยื่อได้รับ
                            ความเสียหายอย่างถาวรจากการขาดออกซิเจน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเมินความปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ณ จุดเกิดเหตุ เมื่อพิจารณาว่าปลอดภัยแล้วจึงเข้าไปหาผู้ป่วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินผู้ป่วย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            โดยการปลุกเรียกผู้ป่วย ถ้ารู้จักชื่อให้เรียกชื่อ แต่ถ้าไม่รู้จักชื่อให้
                            เรียก “คุณๆ” ด้วยเสียงดัง พร้อมกับใช้มือตบที่บ่าทั้ง 2 ข้าง 3 ครั้ง 2 รอบ ขณะที่
                            ตาจ้องมองไปที่ใบหน้าของผู้ป่วย ดูว่าผู้ป่วยมีการกระพริบตาหรือไม่ หากผู้ป่วย
                            ไม่มีอาการตอบสนอง ให้ตะโกนขอความช่วยเหลือ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเมินการหายใจ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            โดยการตรวจสอบการหายใจ ให้มองไปที่หน้าอก หน้าท้อง
                            ว่ามีการขยับขึ้นลงหรือไม่ ใช้เวลาไม่น้อยกว่า 5 วินาทีแต่ไม่เกิน 10 วินาที
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การกดหน้าอก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            วิธีการกดหน้าอก ให้ใช้ส้นมือข้างหนึ่งวางลงบนกึ่งกลางหน้าอก (กึ่งกลางระหว่างหัวนมทั้งสองข้าง)
                            แล้วใช้มืออีกข้างหนึ่งวางทับด้านบน ใช้นิ้วมือ
                            ทั้งสองข้างล็อกกันไว้แขนทั้งสองข้างเหยียดตรง ไหล่ของผู้ช่วยเหลือตั้งฉากกับหน้าอก
                            ของผู้ป่วย ให้ใช้น้ำหนักจากไหล่กดลงมา แขนเหยียดตรง กดลงในแนวแรงตั้งฉากกับพื้น
                            ใช้ข้อสะโพกเป็นจุดหมุน เวลาในการกดและปล่อยมือขึ้นต้องเท่ากัน แรงและเร็ว
                            เป็นจังหวะให้ได้คุณภาพสูง ดังนี้<br>
                            - กดลึกลงไป 5 - 6 เซนติเมตร หรือ 2 - 2.4 นิ้ว<br>
                            - อัตราเร็วในการกดหน้าอก 100 - 120 ครั้งต่อนาที<br>
                            - ขัดจังหวะ หรือหยุดกดหน้าอกให้น้อยกว่า 10 วินาที<br>
                            - ถอนมือขึ้นมาเพื่อให้หน้าอกขยายคืนสู่ตำแหน่งเดิมทุกครั้ง<br>
                            - ไม่เป่าลมช่วยหายใจโดยเป่าลมเข้ามากเกินไป<br>
                            - กดหน้าอก 30 ครั้ง สลับกับการเป่าปาก 2 ครั้ง นับเป็นหนึ่งรอบ ประเมินซ้ำทุก 5 รอบ
                            หมายเหตุ : ในกรณีที่ไม่มีอุปกรณ์ช่วยหายใจ หรือผู้ช่วยเหลือไม่ทำการเป่าปาก ให้กดหน้าอก
                            อย่างเดียวต่อเนื่อง 200 ครั้ง หรือประมาณ 2 นาที แล้วประเมินซ้ำ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเออีดี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (Automatic External Defibrillator:AED) คืออุปกรณ์อิเล็กทรอนิกส์
                            แบบพกพาที่สามารถ วินิจฉัย ภาวะหัวใจเต้นผิดปกติที่อันตรายแก่ชีวิต (ชนิด Ventricular
                            Fibrillation
                            หรือหัวใจห้องล่างเต้นแผ่นระรัวที่ไม่มีสัญญาณชีพ และ Ventricular Tachycardia) ได้โดย
                            อัตโนมัติและสามารถ ให้การรักษา โดยปล่อยไฟฟ้าไปช็อก หรือกระตุกหัวใจเพื่อหยุดภาวะหัวใจ
                            เต้นผิดปกตินั้นให้หัวใจกลับมาเต้นใหม่ในจังหวะที่ถูกต้อง
                            เครื่องเออีดีมักพบติดตั้งในพื้นที่สาธารณะที่มีประชาชน หรือผู้ใช้บริการจำนวนมาก
                            เช่น สถานีรถสาธารณะ โรงพยาบาล โรงเรียน สนามบิน สนามกีฬา ห้างสรรพสินค้า ฯลฯ
                            เพื่อใช้ในการช่วยชีวิตผู้ที่มีอาการหัวใจหยุดเต้นกะทันหันให้รอดชีวิตได้ทันท ่วงทีในอนาคต
                            มีแนวโน้มการติดตั้งเครื่องเออีดีเพิ่มมากขึ้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเคลื่อนย้ายผู้ป่วย ผู้บาดเจ็บในภาวะฉุกเฉิน
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ในกรณีที่เกิดเหตุฉุกเฉิน สามารถทำการปฐมพยาบาล ณ
                            จุดเกิดเหตุได้ไม่ควรเคลื่อนย้ายผู้ป่วยโดยไม่มีความจำเป็น
                            เนื่องจากการเคลื่อนย้ายอาจทำให้ผู้ป่วยเกิดความเจ็บปวด หรือ
                            มีอาการบาดเจ็บมากกว่าเดิม โดยเฉพาะผู้ป่วยที่มีอาการบาดเจ็บบริเวณศีรษะ คอ
                            กระดูกสันหลังควรรอให้เจ้าหน้าที่ทางการแพทย์ที่มีความเชี่ยวชาญพร้อมอุปกรณ์ที่ปลอดภัยทำการเคลื่อนย้ายผู้ป่วยเพื่อส่งรักษาต่อการเคลื่อนย้ายผู้ป่วยจะพิจารณากระทำในกรณีที่จำเป็นเร่งด่วน<br>
                            - สถานการณ์ไม่ปลอดภัย หรือกำลังจะไม่ปลอดภัย ตัวอย่างเช่น ไฟไหม้เสี่ยงต่อการระเบิด
                            อันตรายจากสารเคมีรั่วไหล หรือตึกถล่ม เป็นต้น<br>
                            - จำเป็นต้องเคลื่อนย้ายเพื่อเข้าไปให้ความช่วยเหลือผู้บาดเจ็บคนอื่นที่มีอาการหนักกว่า<br>
                            - เพื่อสามารถให้การรักษาได้อย่างเหมาะสม ตัวอย่างเช่น ผู้ที่หมดสติล้มลงบนบันไดและจำเป็นต้องทำ
                            CPR ซึ่งจำเป็นต้องปฏิบัติบนพื้นผิวราบ<br>
                            - ความปลอดภัยของเจ้าหน้าที่ช่วยชีวิต เป็นสิ่งที่มีความสำคัญอย่างมาก
                            อย่างไรก็ตามถ้าเคลื่อนย้ายออกไปจากบริเวณที่เกิดเหตุแล้วจะทำให้เกิดความปลอดภัยกับเจ้าหน้าที่
                            ช่วยชีวิต ควรพยายามเคลื่อนย้ายไปยังบริเวณที่ปลอดภัยจะดีกว่า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ก่อนการเคลื่อนย้าย ผู้ช่วยเหลือควรประเมิน ดังต่อไปนี้</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            - สภาพผู้ป่วย ให้แน่ใจว่าผู้เจ็บป่วยไม่มีการบาดเจ็บของอวัยวะสำคัญ ศีรษะ ด้านหลัง
                            กระดูกสันหลัง<br>
                            - ความสูงและน้ำหนักของผู้ป่วย<br>
                            - ความแข็งแรงของผู้ช่วยเหลือ<br>
                            - อุปสรรค เช่น บันได ช่องทางผ่านแคบ<br>
                            - ระยะทางในการเคลื่อนย้าย<br>
                            - คนอื่นๆ ที่สามารถให้ความช่วยเหลือได้<br>
                            - การช่วยเหลือและการส่งต่อผู้ป่วย

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หมายเลขโทรศัพท์ระบบบริการฉุกเฉินทางการแพทย์ที่ควรทราบ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) เหตุด่วน เหตุร้าย เจ้าหน้าที่ตำรวจ 191<br>
                            (2) ศูนย์ดับเพลิง สัตว์เข้าบ้าน 199<br>
                            (3) ศูนย์นเรนทร (สถาบันการแพทย์ฉุกเฉินแห่งชาติ) 1669<br>
                            (4) ศูนย์นเรนทร (วชิรพยาบาล) 1554<br>
                            (5) หน่วยแพทย์กู้ชีพ กรุงเทพมหานคร 1555<br>
                            (6) ศูนย์เอราวัณ (กรุงเทพมหานคร) 1646<br>
                            (7) อุบัติเหตุทางน้ำกองบัญชาการตำรวจ 1196<br>
                            (8) ศูนย์ปลอดภัยทางน้ำกรมเจ้าท่า 1199<br>
                            (9) ศูนย์พิษวิทยา โรงพยาบาลรามาธิบดี 1367<br>
                            (10) ศูนย์ความปลอดภัยคมนาคม 1356<br>
                            (11) สายด่วนสุขภาพจิต 1323<br>
                            (12) ศูนย์ช่วยเหลือเร่งด่วน กระทรวงพัฒนาสังคมและความมั่นคงมนุษย์ 1507<br>
                            (13) ศูนย์รับแจ้งข่าวยาเสพติด 1688
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การแจ้งเหตุฉุกเฉินเพื่อขอความช่วยเหลือผู้แจ้งควรให้ข้อมูล ดังนี</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) เกิดเหตุอะไร<br>
                            (2) สถานที่เกิดเหตุ<br>
                            (3) จำนวนผู้บาดเจ็บและอาการโดยสรุป ผู้บาดเจ็บ ผู้ป่วยเป็นอะไร/ มีอาการอย่างไร/ รู้สึกตัว/
                            รู้สติตื่น พูดได้หรือไม่<br>
                            (4) ผู้บาดเจ็บ หรือผู้ป่วยอยู่ที่ไหน<br>
                            (5) ชื่อและหมายเลขโทรศัพท์ของผู้แจ้งเหตุ<br>
                            หมายเหตุ เมื่อท่านโทรไปที่ 1669 แล้ว เจ้าหน้าที่จากศูนย์รับแจ้งเหตุฯ
                            จะถามข้อมูลเหล่านี้จากท่าน ขอให้ท่านตั้งสติแล้วตอบคำถามตามความเป็นจริง
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

  

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;
        include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

   


    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url; ?>/img/bg/การประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การประเมินความเสี่ยงด้านความปลอดภัย </br>(Safety Risk
                            assessment)</b></br>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            การชี้บ่งอันตรายและประเมินความเสี่ยงจากการทำงาน ( Risk Assessment )
                            เป็นวิธีการและขั้นตอนที่ระบุลำดับความเสี่ยงของอันตรายทั้งหมดที่เกี่ยวข้องกับกิจกรรมของงาน
                            ที่ครอบคลุมขั้นตอนการทำงาน สถานที่ เครื่องจักร อุปกรณ์ บุคลากร ที่อาจก่อให้เกิดการบาดเจ็บ
                            ความเจ็บป่วย ความเสียหายต่อทรัพย์สินและสิ่งแวดล้อม หรือสิ่งต่าง ๆ รวมกัน
                            ในหัวข้อนี้จะอธิบายถึงหลักการ และวิธีการประเมินความเสี่ยงด้านความปลอดภัยและอาชีวอนามัย
                            การอธิบายถึงความจำเป็นที่ต้องประเมินความเสี่ยงการประมาณระดับความเสี่ยงโดยคำนึงถึง
                            ความรุนแรงและโอกาสที่จะเกิดอันตราย เพื่อนำมาพิจารณาว่าเป็นความเสี่ยงที่ยอมรับได้
                            หรือยอมรับไม่ได้ และการวางแผนควบคุมความเสี่ยงที่ยอมรับไม่ได้
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การประเมินความเสี่ยงด้านความปลอดภัย">
                                <button
                                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                                    รายละเอียดเพิ่มเติม
                                </button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <ul>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อทราบปัจจัยเสี่ยงอันตรายและการชี้บ่งอันตรายพร้อมการค้นหาอันตราย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อฝึกปฏิบัติในการวิเคราะห์งานเพื่อความปลอดภัย (JSA)
                            และการกำหนดมาตรฐานความปลอดภัยในการทำงาน</li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อกำหนดให้ผู้เข้ารับการอบรมสามารถจัดทำการวิเคราะห์งานและมาตรฐานความปลอดภัยในการทำงานของส่วนงาน
                            แผนกที่ตนเองรับผิดชอบ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg p-t-10">
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <section>
        <?php include('layout/food.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/customer.php'); ?>
    </section>
</main>
<?php include('footer_front.php'); ?>

<script>
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0; ?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0; ?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0; ?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0; ?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
$(".nav-tabs li a").each(function(index, value) {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_training: $(this).attr("data-id_training"),
            sl_branch: $(this).attr("data-id_branch")
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
});

$(".information").on("click", ".btn_collap.collapsed", function(e) {
    e.preventDefault();
    $('.information .collapse').not(this).collapse('hide');

    $(this).find('i').removeClass("collap_close").addClass("collap_open");
    $(this).find('i').removeClass("fa-plus").addClass("fa-minus");
})

$(".collapse").on('hide.bs.collapse', function() {
    $(this).parent("button").find('i').removeClass("collap_open").addClass("collap_close");
    $(this).parent("button").find('i').removeClass("fa-minus").addClass("fa-plus");
});
</script>