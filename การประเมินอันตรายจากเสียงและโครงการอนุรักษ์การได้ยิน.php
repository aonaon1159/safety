<?php include('header_front.php'); ?>

<?php 
    $id_training = 449;//การประเมินอันตรายจากเสียงและโครงการอนุรักษ์การได้ยิน

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
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <?php include('layout/tab_search.php'); ?>
    </div>

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>การประเมินอันตรายจากเสียงและโครงการอนุรักษ์การได้ยิน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ความบกพร่องหรือการสูญเสียการได้ยิน (Hearing Loss) หรือโรคประสาทหูเสื่อมนั้น
                                นอกจากจะเป็นไปตามธรรมชาติของคนเราที่มีอายุมากขึ้นแล้ว ก็ยังมีสาเหตุอื่น ๆ
                                ที่อาจจะถูกมองข้ามไป นั่นก็คือ
                                รูปแบบการดำเนินชีวิตที่อยู่ภายใต้สภาพแวดล้อมซึ่งเสี่ยงต่อการเกิดอุบัติเหตุที่ศีรษะ
                                การติดเชื้อภายในช่องหู คอ จมูก หรือแม้แต่การรับประทานยาบางชนิด (เช่น
                                ยาปฏิชีวนะจำพวกยาควินินหรือแอสไพริน หรือยารักษาโรคมะเร็งบางชนิด)
                                รวมถึงการสัมผัสกับเสียงดังที่ยากต่อการหลีกเลี่ยงเช่น เสียงรถยนต์
                                รถมอเตอร์ไซด์ในย่านที่มีการจราจรหนาแน่น
                                แต่สาเหตุหลักของการสูญเสียการได้ยินที่มักพบอยู่บ่อย ๆ ก็คือ
                                “การสูญเสียการได้ยินจากการสัมผัสเสียงดังที่เกิดจากสภาพแวดล้อมในการทำงาน (Occupational
                                Noise–Induced Hearing Loss)” เช่น เสียงเครื่องจักร หรือเครื่องยนต์กลไกต่าง ๆ ในที่ทำงาน
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
                                ซึ่งการสัมผัสกับเสียงดังเกินมาตรฐานจากที่ทำงานเป็นระยะเวลานาน ๆ
                                ย่อมส่งผลให้เกิดอาการสูญเสียการได้ยินทั้งแบบชั่วคราวและถาวรได้
                                ก่อนที่จะเข้าสู่เนื้อหาของโครงการอนุรักษ์การได้ยิน (HCP) เรามาทบทวนกันสักนิด
                                เกี่ยวกับการกำเนิดเสียง ประเภทของเสียง กลไกการได้ยินเสียง อันตรายจากเสียงดัง
                                การสูญเสียการได้ยินจากการสัมผัสเสียงดัง
                                และปัจจัยที่มีผลต่อการเกิดภาวะการสูญเสียการได้ยินจากการสัมผัสเสียงดังในที่ทำงาน
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (8).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การประเมินอันตรายจากเสียงและโครงการอนุรักษ์การได้ยิน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการประเมินอันตรายจากเสียงและโครงการอนุรักษ์การได้ยิน
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="450" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="table2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery13.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        โดยที่กฎกระทรวงกําหนดมาตรฐานในการบริหาร จัดการ และดําเนินการด้านความปลอดภัย
                        อาชีวอนามัยและสภาพแวดล้อมในการทํางานเกี่ยวกับความร้อน แสงสว่างและเสียง พ.ศ. 2559
                        กําหนดให้นายจ้างจัดทํามาตรการอนุรักษ์การได้ยินในสถานประกอบกิจการในกรณีทีสภาวะการทํางานในสถานประกอบกิจการมีระดับเสียงที่ลูกจ้างได้รับ
                        เฉลี่ยตลอดระยะเวลาการทํางานแปดชั่วโมง ตั้งแต่แปดสิบห้าเดซิเบลเอขึ้นไป
                        ตามหลักเกณฑ์และวิธีการที่อธิบดีประกาศกําหนดให้นายจ้างจัดทํามาตรการอนุรักษ์การได้ยินใน
                        สถานประกอบกิจการเป็นลายลักษณ์อักษร<br><br>

                        วัตถุประสงค์<br>
                        -
                        เพื่อให้ผู้เข้ารับการอบรมทราบถึงหลักเกณฑ์และวิธีการในการจัดทําโครงการอนุรักษ์การได้ยินตามที่กฎหมายกําหนด<br>
                        - เพื่อให้ผู้เข้ารับการอบรมสามารถจัดทําโครงการอนุรักษ์การได้ยินได้อย่างถูกวิธี<br>
                        -
                        ผู้เข้ารับการอบรมสามารถนำมาตรการป้องกันอันตรายเกี่ยวกับเสียงที่เหมาะสมไปใช้ในโรงงานเพื่อลดผลกระทบของเสียงได้<br><br>

                        หัวข้ออบรม<br>
                        - ประกาศกรมสวัสดิการฯ หลักเกณฑ์และวิธีการจัดทํามาตรการอนุรักษ์การได้ยินในสถานประกอบกิจการ
                        ๒๕๖๑<br>
                        - มาตรการอนุรักษ์การได้ยินในสถานประกอบกิจการ<br>
                        - การทดสอบสมรรถภาพการได้ยิน (Audiometric sting)<br>
                        - การแจ้งผลการทดสอบสมรรถภาพการได้ยิน<br>
                        - การทดสอบสมรรถภาพ กรณีต้องทดสอบสมรรถภาพการได้ยินของลูกจ้างซํ้า<br>
                        - เกณฑ์การพิจารณาผลการทดสอบสมรรถภาพการได้ยิน<br>
                        - มาตรการป้องกันอันตราย พบว่าลูกจ้างสูญเสียการได้ยินที่หูข้างใดข้างหนึ่ง
                        ตั้งแต่สิบห้าเดซิเบลขึ้นไปความถี่ ใดความถี่หนึ่ง<br>
                        - การทําและติดแผนผังแสดงระดับเสียง (Noise Contour Map)<br>
                        - การจัดทําโครงการอนุรักษ์การได้ยิน ( Hearing Conservation Program )<br>
                        - การประเมินการสัมผัสเสียงดังของลูกจ้างในสถานประกอบกิจการ<br>
                        - มาตรการอนุรักษ์การได้ยินในสถานประกอบกิจการ<br>
                        - การเฝ้าระวังการได้ยิน<br>
                        - การประเมินผลและทบทวนการจัดการมาตรการอนุรักษ์การได้ยินในสถานประกอบกิจการ<br>
                        - บันทึกข้อมูลและจัดทําเอกสารการดําเนินการตามข้อ 3 ถึงข้อ 10 เก็บไว้ในสถานประกอบกิจการ
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline;?>">
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

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    การประเมินอันตรายจากเสียงและโครงการอนุรักษ์การได้ยิน
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความอนุรักษ์การได้ยิน-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความอนุรักษ์การได้ยิน-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความอนุรักษ์การได้ยิน-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความอนุรักษ์การได้ยิน-01.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-8 mt-4 mx-auto">
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
                            <h5><b>การอนุรักษ์การได้ยิน (Hearing Conservation)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            คืออมาตรการที่จัดทำขึ้นสำหรับลดการสัมผัสเสียงดังจากการทำงานอย่างต่อเนื่อง
                            เพื่อลดและป้องกันการสูญเสียการได้ยินโดยระดับเสียงที่ต้องดำเนินการมาตรการอนุรักษ์การได้ยิน
                            (Action level) เมื่อพบว่าผู้ปฏิบัติงานได้รับสัมผัสเสียงเฉลี่ยตลอดระยะเวลาการทำงาน 8
                            ชั่วโมงตั้งแต่ 85 เดซิเบลเอขึ้นไป โดยมีรายละเอียดที่ต้องดำเนินการดังนี้<br>
                            (1) นโยบายการอนุรักษ์การได้ยิน<br>
                            (2) การเฝ้าระวังเสียงดัง (Noise Monitoring)<br>
                            a.การสำรวจและตรวจวัดระดับเสียง<br>
                            b.การศึกษาระยะเวลาสัมผัสเสียงดัง<br>
                            c.การประเมินการสัมผัสเสียงดังของลูกจ้าง<br>
                            (3) การเฝ้าระวังการได้ยิน (Hearing Monitoring)<br>
                            (4) หน้าที่ความรับผิดชอบของผู้ที่เกี่ยวข้อง<br>
                            (5) การจัดทำและติดแผนผังแสดงระดับเสียง<br>
                            (6) การอบรมให้ความรู้<br>
                            (7) การประเมินและทบทวนการจัดการมาตรการอนุรักษ์การได้ยินการบริหารมาตรการอนุรักษ์การได้ยินนั้น
                            ถือเป็นจุดเริ่มต้น เพื่อแสดงให้เห็นถึงความตระหนักถึงอันตรายของเสียงดัง
                            ซึ่งการบริหารโครงการนั้นประกอบไปด้วย การกำหนดนโยบาย หน้าที่ความรับผิดชอบของผู้ที่เกี่ยวข้อง
                            การอบรมให้ความรู้ การประเมินและทบทวนการจัดการมาตรการอนุรักษ์การได้ยิน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>นโยบายการอนุรักษ์การได้ยิน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ผู้บริหารสูงสุดควรเป็นผู้กำหนดนโยบาย
                            โดยอาศัยการมีส่วนร่วมของผู้ปฏิบัติงานในการกำหนดนโยบายบนพื้นฐานของการนำไปปฏิบัติให้มีประสิทธิภาพ
                            ต้องจัดทำเป็นเอกสาร และลงนามโดยผู้บริหาร
                            สูงสุดของหน่วยงาน พร้อมทั้งเผยแพร่ให้ผู้เกี่ยวข้องทุกฝ่ายทราบและถือปฏิบัติ
                            ข้อแนะนำที่ควรระบุในนโยบายการอนุรักษ์การได้ยิน<br>
                            (1) กำหนดระยะเวลาสำหรับการเฝ้าระวังเสียงดังและอันตรายอื่นๆ รวมถึงการเลือกใช้เครื่องมือ
                            และการอบรมให้ความรู้แก่พนักงาน ให้เหมาะสมกับลักษณะการทำงาน<br>
                            (2) การให้คำปรึกษาอย่างทันท่วงทีแก่พนักงานที่ต้องเข้ารับการทดสอบสมรรถภาพการได้ยิน<br>
                            (3) ชี้บ่งการใช้อุปกรณ์ป้องกันการได้ยินที่ถูกต้องในแต่ละพื้นที่<br>
                            (4) ให้ความรู้ ฝึกอบรม สร้างจิตสำนึกให้แก่พนักงานเพื่อสนับสนุนมาตรการอนุรักษ์การได้ยิน<br>
                            (5) มีโปรแกรมควบคุมประสิทธิภาพของเครื่องทดสอบสมรรถภาพการได้ยิน
                            และการบริหารจัดการการเก็บบันทึกผลการทดสอบสมรรถภาพการได้ยิน<br>
                            (6) ทบทวนผลการทดสอบสมรรถภาพการได้ยิน เพื่อประเมินประสิทธิภาพของมาตรการอนุรักษ์การได้ยิน<br>
                            (7) ส่งเสริมพนักงานให้มีการป้องกันการสัมผัสเสียงดังนอกเวลาการทำงาน<br>
                            (8) การจัดซื้ออุปกรณ์ป้องกันการได้ยิน เครื่องทดสอบสมรรถภาพการได้ยิน เครื่องวัดระดับเสียง
                            และการเลือกซื้อเครื่องจักรที่เงียบ ในนโยบายต้องแสดงให้เห็นถึงเหตุผลว่าทำไม
                            จึงต้องดำเนินการเพื่อสนับสนุนมาตรการอนุรักษ์การได้ยิน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเฝ้าระวังเสียงดัง (Noise Monitoring)
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            การเฝ้าระวังเสียงดัง มีการดำเนินการ 3 ขั้นตอนได้แก่ การสำรวจและตรวจวัดระดับเสียง การศึกษา
                            ระยะเวลาสัมผัสเสียงดัง และการประเมินการสัมผัสเสียงดัง
                            เพื่อหาพื้นที่การทำงานที่มีความเสี่ยงและการ
                            ค้นหาพนักงานกลุ่มเสี่ยงที่มีโอกาสรับสัมผัสเสียงดังตลอดระยะเวลาการทำงาน 8 ชั่วโมงตั้งแต่ 85
                            เดซิเบลเอ
                            ขึ้นไป
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสำรวจและตรวจวัดระดับเสียง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เมื่อทำการสำรวจพื้นที่การทำงาน ผู้รับผิดชอบควรระบุรูปแบบของเสียง พื้นที่ที่ควรดำเนินการ
                            ตรวจวัดระดับเสียง และวางแผนการตรวจวัดระดับเสียง ซึ่งเครื่องมือที่ใช้ในการตรวจวัดระดับเสียง
                            ต้องเป็น
                            เครื่องมือที่มีมาตรฐาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องวัดเสียง (Sound level meter)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ใช้ตรวจวัดในกรณีที่ระดับเสียงคงที่
                            และต้องการประเมินเสียงที่ทุกๆความถี่หรือเพื่อเป็นการวัดในเบื้องต้น ต้องได้มาตรฐาน IEC 61672
                            หรือ IEC 651 Type 2 หรือ
                            เทียบเท่า เช่น ANSI S 1.4 , BS EN 60651, AS/NZS 1259.1 เป็นต้น หรือดีกว่า เช่น IEC 60804, BS
                            EN
                            60804 , AS/NZS 1259.2 เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินการสัมผัสเสียงดัง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            จากการศึกษาระยะเวลาการสัมผัสเสียง จะเป็นข้อมูลเพื่อใช้ในการคำนวณหาระดับเสียงเฉลี่ยตลอด
                            ระยะเวลาการทำงานในแต่ละวัน โดยปกติหากลูกจ้างปฏิบัติงานบริเวณเดิมตลอด 8
                            ชั่วโมงการทำงานและเป็น
                            บริเวณที่มีเสียงดังสม่ำเสมอ การแปรผลข้อมูลจะไม่ยุ่งยาก
                            แต่ในกรณีที่ลูกจ้างปฏิบัติงานในบริเวณที่มีเสียงไม่
                            สม่ำเสมอ หรือต้องย้ายไปจุดต่างๆที่มีระดับเสียงต่างกัน
                            และไม่สามารถใช้เครื่องวัดปริมาณเสียงสะสมได้ อาจ
                            ใช้สูตรการคำนวณหาระดับเสียงเฉลี่ยตลอดระยะเวลาการทำงานในแต่ละวัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Baseline Audiogram</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            เมื่อรับพนักงานใหม่หรือเมื่อมีการย้ายเปลี่ยนงานมาทำงานในที่ที่มีเสียงดัง
                            (TWA 8 ชม. > 85 เดซิเบล เอ) ต้องทำการตรวจการได้ยินเพื่อเป็นข้อมูลพื้นฐานสำหรับคนๆนั้น
                            ข้อมูลนี้
                            สำคัญมาก
                            จึงควรดำเนินการตรวจการได้ยินด้วยวิธีการที่ถูกต้องเพื่อจะได้ผลการตรวจเป็นจริงมากที่สุด ควร
                            ทำการตรวจก่อนเข้าทำงานในที่ที่มีเสียงดัง ถ้าทำไม่ได้ควรดำเนินการภายใน 30 วัน และให้ทำการตรวจ
                            ภายหลังการไม่สัมผัสเสียงดังอย่างน้อย 14 ชั่วโมง
                            ผลการตรวจวัดนี้จะใช้เป็นฐานการพิจารณาว่าเกิดการ
                            สูญเสียการได้ยินหรือไม่เมื่อมีการตรวจครั้งต่อไป (Annual Audiogram)
                            และมีโอกาสเป็นไปได้ที่ผลการตรวจ
                            การได้ยินครั้งหลังๆ ปรากฎว่ามีการได้ยินดีกว่าเดิม กรณีเช่นนี้ให้ใช้ค่าที่ตรวจได้ใหม่มาเป็น
                            New Baseline
                            Audiogram
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Annual Audiogram</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            ต้องทำการตรวจประจำปีให้กับผู้สัมผัสเสียงข้างต้น และถ้าเป็นไปได้ผู้ที่สัมผัสเสียงดังที่ระดับ
                            100 เดซิเบล เอ ขึ้นไป ควรตรวจการได้ยินทุก 6 เดือน ในกรณีที่พบว่ามีการสูญเสียการ
                            ได้ยิน 15 เดซิเบลหรือมากกว่าที่ความถี่ 500, 1000, 2000, 3000, 4000, หรือ 6000 เฮิรตซ์
                            ในหูข้างใดข้างหนึ่งต้องทำการตรวจการได้ยินใหม่ทันที (Retest Audiogram) ด้วยวิธีการเช่นนี้
                            ผู้ทำการตรวจการได้ยินต้อง
                            อ่านผลการตรวจทันที จะนำมาอ่านค่าในภายหลังไม่ได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Retest Audiogram</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            จะต้องทำการทดสอบใหม่ทันทีที่พบว่าผลการตรวจการได้ยินมีการสูญเสียขึ้นโดยผู้ทำการตรวจการได้ยินต้องอธิบายการตรวจใหม่ต้องสวมใส่ที่ครอบหูใหม่ให้กับผู้ถูกตรวจ
                            เพื่อให้แน่ใจว่า
                            สวมใส่ได้ถูกต้อง ถ้าผลการตรวจไม่เหมือนเดิมให้ใช้ผลการตรวจใหม่เป็นตัวอ้างอิงและบันทึก
                            และถ้าผลการตรวจการได้ยินพบว่ามีการสูญเสียการได้ยิน 15 เดซิเบลหรือมากกว่าที่ความถี่ 500,
                            1000, 2000, 3000,
                            4000 หรือ 6000 เฮิรตซ์ ในหูข้างใดข้างหนึ่ง ให้ทำการตรวจการได้ยินเพื่อยืนยันผล (Confirmation
                            Audiogram)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Confirmation Audiogram</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            ให้ทำการตรวจการได้ยินเพื่อยืนยันผลการตรวจภายใน 30 วัน นับจากวันที่ทำ Annual หรือ Retest
                            Audiogram แนะนำว่าควรทำการตรวจให้เร็วที่สุด และระหว่างนั้นควรมี
                            การตรวจสอบเรื่องการสวมใส่อุปกรณ์ป้องกันการสูญเสียการได้ยินว่าสวมใส่ถูกต้องหรือไม่
                            เลือกใช้ถูกต้องหรือไม่ ให้ทำการแก้ไขหรือปรับปรุง ถ้าพบว่ายังไม่ถูกต้อง
                            ผลการตรวจครั้งนี้ให้ถือเป็นผลการตรวจการได้ยินที่
                            จะถูกเก็บบันทึกไว้
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section class="black-bg">
        <?php include('layout/video_course.php'); ?>
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
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
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0 ;?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0 ;?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0 ;?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0 ;?>;
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