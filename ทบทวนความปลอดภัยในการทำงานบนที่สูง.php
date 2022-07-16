<?php include('header_front.php'); ?>

<?php 
    $id_training = 232;//ทบทวนความปลอดภัยในการทำงานบนที่สูง

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
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
            <h2 class="text-center"><b>ทบทวนความปลอดภัยในการทำงานบนที่สูง</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การทำงานบนที่สูง หรือทำงานต่างระดับที่ต้องเสี่ยงกับการตกจากที่สูง เช่น งานก่อสร้าง
                                งานบำรุงรักษา งานงานในระบบอุตสาหกรรม งานสายส่งไฟฟ้า งานทำความสะอาด
                                หรือแม้กระทั่งการทำงานในหลุม บ่อ เป็นต้น
                                งานดังกล่าวนี้มีความจำเป็นอย่างยิ่งที่ผู้ปฏิบัติงานจะต้องได้รับความรู้ ความเข้าใจ
                                และได้รับการฝึกฝนในการปฏิบัติงานเพื่อให้เกิดความปลอดภัยมากที่สุดในระหว่างที่มีการปฏิบัติงานบนที่สูงโดยหลักสูตรการฝึกอบรมนี้จัดทำขึ้นตามข้อกำหนดขั้นพื้นฐานของมาตรฐาน
                                ANSI Z359.2 และข้อกำหนดของ OSHA 1926.503 รวมไปถึง European Standards
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
                                สามารถทำให้พนักงาน ผู้รับเหมา หรือบุคลากรที่เกี่ยวข้องกับการปฏิบัติงานบนที่สูงโดยตรง
                                จะได้หันมาให้ความสำคัญ ตระหนักถึงความเสี่ยง อันตราย
                                และมีการป้องกันอันตรายที่อาจจะเกิดขึ้นในงานบนที่สูง
                                รวมไปถึงการได้นำความรู้ความเข้าใจทั้งในภาคทฤษฎี
                                และภาคปฏิบัติมาเป็นหลักในการปฏิบัติงานบนที่สูงในสถานประกอบการเพื่อให้เกิดความปลอดภัยต่อไป
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (9).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ทบทวนความปลอดภัยในการทำงานบนที่สูง</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรทบทวนความปลอดภัยในการทำงานบนที่สูง
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="444" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery7.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การทำงานบนที่สูง จัดได้ว่าเป็นการทำงานที่มีความเสี่ยงต่อการเกิดอุบัติเหตุที่สูง ซึ่งตามกฎกระทรวง
                        ได้กำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัย
                        และสภาพแวดล้อมในการทำงานเกี่ยวกับงานก่อสร้าง พ.ศ.2551 หมวด 11
                        การทำงานในสถานที่ที่มีอันตรายจากการตกจากที่สูง การพังทลาย และการกระเด็นหรือตกหล่นของวัสดุ
                        เพื่อเป็นแนวทางในการลดอุบัติเหตุจากการทำงานในที่สูงให้มีประสิทธิภาพ
                        ผู้ที่ทำงานที่สูงจะต้องมีความรู้ความเข้าใจต่อหลักการและหลักการปฏิบัติการทำงานที่สูงที่ถูกต้อง
                        เพื่อความปลอดภัยในการทำงานบนที่สูงของพนักงานและผู้ปฏิบัติงานที่สูงขององค์กรต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้าอบรมมีความรู้และสามารถปฏิบัติงานบนที่สูงได้อย่างถูกต้องและปลอดภัย<br>
                        2.
                        เพื่อให้ผู้เข้ารับการอบรมรู้ถึงอันตรายและวิธีป้องกันควบคุมอันตรายที่จะเกิดขึ้นจากการทำงานบนที่สูง<br>
                        3. เพื่อให้ผู้เข้ารับการอบรมมีความรู้และแนวทางการจัดการทำงานบนที่สูงอย่างปลอดภัย<br>
                        4. เพื่อให้สามารถใช้อุปกรณ์ป้องกันภัยส่วนบุคคล (PPE) ในการทำงานบนที่สูงได้อย่างถูกต้อง<br>
                        5. เพื่อเรียนรู้กฎหมาย มาตรฐานในการทำงานบนที่สูงได้อย่างถูกต้อง<br>
                        6. เพื่อเรียนรู้จักอันตรายในการทำงานบนที่สูง<br>
                        7. ฝึกปฏิบัติงานบนที่สูงในรูปแบบต่างๆ เพื่อสามารถทำงานบนที่สูงได้อย่างปลอดภัย<br><br>
                        เนื้อหาการอบรม<br>
                        1. กฎหมายและมาตรฐานสากลที่เกี่ยวข้องกับการทำงานบนที่สูง<br>
                        2. สาเหตุการเกิดอุบัติเหตุและอันตรายในการทำงานเกี่ยวกับการทำงานบนที่สูง<br>
                        3. แนวทางการจัดการด้านความปลอดภัยและวิธีการทำงานบนที่สูงอย่างปลอดภัย<br>
                        4. อุปกรณ์และเครื่องมือเกี่ยวกับการป้องกันการตกจากที่สูง
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" href="<?php echo $url_course_outline;?>">
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
                    ทบทวนความปลอดภัยในการทำงานบนที่สูง
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความที่สูง-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความที่สูง-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 offset-md-2 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความที่สูง-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความที่สูง-04.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-8 mx-auto">
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
                            <h5><b>การทำงานบนที่สูง คืออะไร ?</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การปฏิบัติงานใด ๆ ก็ตามในบริเวณที่มีความต่างระดับของพื้นที่ทำงาน และมีโอกาสที่บุคคล
                            หรือวัสดุจะตกจากที่สูงจากระดับหนึ่งสู่ระดับที่ต่ำกว่า เช่น บ่อ หลุม ช่องเปิด หลังคา
                            บริเวณที่มีทางขึ้น-ลง หรือบันได บริเวณลาดชัน พื้นที่สูงที่มีพื้นผิวไม่แข็งแรงมั่นคง หรือลื่น
                            เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักความปลอดภัยในการทำงานบนที่สูงมีอะไรบ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) การทำงานบนที่สูงเกิน 2 เมตรขึ้นไป จะต้องมีการป้องกันการตกหล่น
                            และมีการติดตั้งนั่งร้าน<br>
                            (2) การทำงานบนที่สูงเกิน 4 เมตรขึ้นไป ผู้ปฏิบัติงานจะต้องสวมใส่เข็มขัดนิรภัยหรือสายช่วยชีวิต
                            ต้องมีตาข่ายนิรภัยรอง และมีราวกันตก<br>
                            (3) ช่องเปิดหรือปล่องต่างๆ ต้องมีฝาปิด หรือรั้วกั้นความสูงไม่น้อยกว่า 90 เซนติเมตร<br>
                            (4) ทำงานบนที่ลาดชันเกิน 15 องศา ต้องมีการติดตั้งนั่งร้าน<br>
                            (5) อุปกรณ์เครื่องมือที่ใช้บนที่สูง ต้องมีการผูกยึด ไม่ให้ตกลงมาด้านล่าง<br>
                            (6) การใช้บันไดแบบเคลื่อนย้ายได้ มุมบันไดที่อยู่ตรงข้ามกับผนังที่พิง จะต้องวางทำมุม 75
                            องศา<br>
                            (7) การใช้รถเครน ต้องมีแผ่นเหล็กรองขาช้าง เพื่อป้องกันการวางไม่ได้ระนาบหรืออ่อนตัว
                            ซึ่งคนขับรถเครนและผู้ให้สัญญาณต้องผ่านการอบรม
                            และรถเครนต้องผ่านการตรวจสอบจากเจ้าหน้าที่บำรุงรักษาที่เกี่ยวข้อง
                            ก่อนนำเข้าใช้งานในเขตหวงห้ามทุกครั้ง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฎพื้นฐาน (ก่อนการทำงานบนที่สูง)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            (1) ผู้ปฏิบัติงานต้องเป็นผู้ได้รับมอบหมายและมีคุณสมบัติในการทงานบนที่สูง<br>
                            (2) สวมใส่เครื่องแต่งกายให้รัดกุมและเรียบร้อย<br>
                            (3) เลือกจุดยึดที่แข็งแรงสามารถรองรับแรงกระเมื่อเกิดการตกได้<br>
                            (4) สวมอุปกรณ์ป้องกันอันตรายส่วนบุคคลขณะทำงานเสมอ ได้แก่ ถุงมือที่ปราศจากน้ำมัน
                            รองเท้านิรภัย
                            เข็มขัดนิรภัยชนิดเต็มตัว (Full body harness) และสายช่วยชีวิต (Lanyard, SRL) เป็นต้น<br>
                            (5) เตรียมแผนการช่วยเหลือ และอุปกรณ์ช่วยเหลือ เช่น Tripod และ Winch เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฎการขึ้นที่สูง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) การขึ้นหรือลงบันไดแนวตั้ง ให้ขึ้นลงทีละคน<br>
                            (2) บันไดจะต้องถูกจับยึดให้แน่นและมั่นคง<br>
                            (3) ขณะขึ้นหรือลงบันได ให้จับขอบบันไดด้วยมือ 2 ข้าง และก้าวขึ้นลงด้วยความเร็วปกติ<br>
                            (4) ห้ามถือเครื่องมือ หรืออุปกรณ์ใดๆ ขณะปีนขึ้นลงบันได
                            หากมีเครื่องมือหรืออุปกรณ์ที่จำเป็นในการใช้งาน
                            ให้พกพาโดยการใส่ไว้ในกระเป๋าที่ติดกับเข็มขัดเท่านั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการใช้บันไดพาดอย่างปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) การเลือกประเภทของบันได ต้องเป็นบันไดที่รองรับน้ำหนักผู้ปฏิบัติงานและงานได้
                            มีความยาวพอเหมาะ หากทำงานเกี่ยวกับไฟฟ้า วัสดุที่ใช้ทำบันไดต้องเป็นฉนวนไฟฟ้า<br>
                            (2) ตรวจสภาพก่อนใช้งาน โดยตัวบันไดต้องไม่ชำรุด<br>
                            (3) บันไดที่มีความยาวไม่เกิน 5 เมตรสามารถยกเคลื่อนย้ายด้วยคนคนเดียวได้
                            โดยใช้วิธีพาดกับไหล่แนวนอน ปลายด้านหน้ายาว 2 เมตร ส่วนแขนอีกข้างคอยพยุงควบคุมทิศทาง<br>
                            (4) การปีนบันได ต้องใช้บันไดที่แข็งแรง วางบันไดบนฐานที่มั่นคง ไม่ลื่น และวางให้ทำมุมประมาณ
                            75
                            องศา<br>
                            (5) การทำงานบนบันได้ งานที่ทำจะต้องห่างจากบันไดขั้นบนไม่เกิน 1 เมตร
                            หากทำงานในที่สูงตามเกณฑ์ต้องใส่เข็มขัดนิรภัย<br>
                            (6) ห้ามดัดแปลงนำบันไดไปใช้งานอย่างอื่น เช่น พาดทำเป็นทางเดินระหว่างตึก
                            และห้ามนั่งทำงานบนบันได
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฎการทำงานบนที่สูง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (1) ห้ามทำงานบนที่สูงเพียงลำพังคนเดียว<br>
                            (2) ห้ามเคลื่อนไหวตัวรวดเร็ว เมื่อทำงานสูงกว่าพื้นดินเกิน 2 เมตร<br>
                            (3) ห้ามโยนสิ่งของหรือเครื่องมือให้แก่ผู้อยู่บนที่สูง<br>
                            (4) ห้ามทิ้งสิ่งของหรือเครื่องมือลงสู่เบื้องล่าง<br>
                            (5) การตัด การเชื่อมบนที่สูง ให้ตรวจสอบและเคลื่อนย้ายเชื้อเพลิง
                            และสารไวไฟทุกชนิดในพื้นที่เบื้องล่างก่อน รวมถึงขณะตัดหรือเชื่อม ให้ทำด้วยความระมัดระวัง<br>
                            (6) ผู้ควบคุมงานต้องดูแลไม่ให้ใครเดินผ่านเบื้อล่างจุดทำงาน<br>
                            (7) ระวังขอยกหรือ Hanger ชน เมื่อจำเป็นต้องทำงานในเส้นทางของขอยก<br>
                            (8) ขณะยืนบนหลังคากระเบื้อง ห้ามเหยียบที่แผ่นกระเบื้องโดยตรง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการร่วงหล่นของวัสดุในพื้นที่ปฏิบัติงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            การป้องกันอันตรายจากการร่วงหล่นของวัสดุในพื้นที่ปฏิบัติงาน<br>
                            (1) อุปกรณ์ที่มีขนาดเล็ก ควรใส่ในภาชนะที่แข็งแรง<br>
                            (2) วัสดุอุปกรณ์ทุกชนิดต้องไม่วางกีดขวางทางเดิน<br>
                            (3) จัดเก็บเศษวัสดุที่เหลือใช้ในภาชนะที่แข็งแรง<br>
                            (4) จัดเก็บทำความสะอาดอย่างต่อเนื่อง<br>
                            (5) ใช้เครื่องมือให้เหมาะสมกับงาน<br>
                            (6) ใช้เชือกผูกรัดเครื่องมือ และอุปกรณ์ที่ใช้ในการทำงาน<br>
                            (7) ขนย้ายวัสดุอุปกรณ์อย่างถูกวิธี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการสะดุด ลื่นล้ม บนพื้นที่ทำงาน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) วัสดุอุปกรณ์ทุกชนิดจะต้องไม่วางกีดขวางทางเดิน<br>
                            (2) สายไฟ สายยาง ห้ามลากผ่านพื้นทางเดิน<br>
                            (3) บริเวณช่องทางขึ้น-ลงบันได ต้องไม่มีสิ่งกีดขวาง<br>
                            (4) พื้นที่ทำงานต้องมีราวกันตก และแผ่นกันของตก<br>
                            (5) พื้นที่ทำงานต้องไม่เปียกแฉะ<br>
                            (6) พื้นที่ทำงานจะต้องไม่มีคราบน้ำมัน จารบี<br>
                            (7) พื้นทางเดินต้องเรียบเสมอกัน<br>
                            (8) จัดเก็บทำความสะอาดอย่างต่อเนื่อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในการเดิน เคลื่อนย้าย
                                    หรือเปลี่ยนพื้นที่ปฏิบัติงาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            การป้องกันอันตรายจากการตกในการเดิน เคลื่อนย้าย หรือเปลี่ยนพื้นที่ปฏิบัติงาน<br>
                            (1) มีราวกันตก หรือเชือกนิรภัยยึดติดกับโครงสร้างโดยรอบ<br>
                            (2) มีทางเดินชั่วคราวพร้อมราวกันตก<br>
                            (3) ติดตั้งตาข่ายนิรภัยยึดติดกับโครงสร้างที่มั่นคงแข็งแรง<br>
                            (4) ปิดกั้นบริเวณด้านล่างพื้นที่ปฏิบัติงาน<br>
                            (5) จัดเตรียมนั่งร้าน หรือเครื่องจักรกลที่กำหนดไว้ในแผนงาน<br>
                            (6) สวมใส่ และใช้อุปกรณ์ป้องกันการตกตลอดเวลา<br>
                            (7) ห้ามเคลื่อนย้ายร่างกายบนที่สูง โดยปราศจากการเกาะเกี่ยวเข็มขัดนิรภัย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในงานติดตั้งหลังคาที่มีความลาดเอียง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) ทำราวกันตก หรือเชือกนิรภัยยึดติดกับโครงสร้างโดยรอบ<br>
                            (2) ติดตั้งตาข่ายนิรภัยยึดติดกับโครงสร้างที่มั่นคง<br>
                            (3) ล้อมด้านล่างพื้นที่ปฏิบัติงาน<br>
                            (4) สวมใส่อุปกรณ์ป้องกันการตก<br>
                            (5) มีการจัดวางวัสดุ และจัดทางผ่านที่ปลอดภัย<br>
                            (6) จัดเก็บเศษวัสดุ เมื่อมีการเปลี่ยนช่วงเวลาทำงาน<br>
                            (7) มีการตรวจสอบดูแลตลอดเวลาที่ปฏิบัติงาน<br>
                            (8) มีอุปกรณ์สื่อสาร และแผนการช่วยเหลือ เมื่อเกิดอุบัติเหตุ
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
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/Bq71i3vDXk8?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/logo/preview_vd_height.jpg" alt="">
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
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h4><b>บรรยากาศการอบรม</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>บรรยากาศการอบรม
                                เน้นทำ Workshop ให้ได้ลงมือทำจริง<br>ในห้องเรียน ในบรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้น<br>และสามารถนำไปใช้ได้จริงในการทำงาน</h5>
                            <br>
                            <br>
                            <div>
                                <a class="btn btn--medium btn--radius btn--green btn--green-hover-black text-uppercase"
                                    href="gallery">อ่านเพิ่มเติม...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow fix_detail_course"
                        src="<?php echo $base_url;?>/img/bg/ความปลอดภัยในการทำงานบนที่สูง-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ความปลอดภัยในการทำงานบนที่สูง</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            ความปลอดภัยในการทำงานบนที่สูงการทำงานบนที่สูง Working at height
                            ถือเป็นงานเสี่ยงอันตรายตามกฎหมายความปลอดภัยฯในการทำงาน
                            ปัจจุบันมีอุบัติเหตุที่เกิดจากการพลัดตก (Fall) จากที่สูงเพิ่มขึ้นอย่างต่อเนื่อง
                            ความเสี่ยง(Risk)เหล่านี้มักพบได้ในงานอุตสาหกรรมต่างๆเช่น งานก่อสร้าง งานติดตั้งนั่งร้าน
                            งานติดตั้ง และ ซ่อมบำรุง งานโรยตัวทำความสะอาดเช็ดกระจกบนตึกสูง เป็นต้น
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การทำงานบนที่สูง">
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
                            เพื่อเสริมสร้างความรู้ความเข้าใจให้ตระหนักถึงอันตราย ความเสี่ยง
                            และรู้ถึงมาตรการการขึ้นไปทำงานบนที่สูงในรูปแบบต่างๆ ได้อย่างปลอดภัย
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อเสริมสร้างความรู้ความเข้าใจเกี่ยวกับอุปกรณ์ต่างๆ ที่เกี่ยวข้องกับการทำงานบนที่สูง
                            รวมไปถึงขั้นตอนการตรวจเช็คอุปกรณ์ และการใช้งานในอุปกรณ์ต่างๆ ได้
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อเสริมสร้างความรู้ความเข้าใจให้สามารถบ่งชี้และแยกแยะอันตราย ประเมินควบคุม
                            อันตรายที่จะเกิดขึ้นจากการปฏิบัติงานบนที่สูง มีการป้องกันการตกจากที่สูง
                            และปฏิบัติงานบนที่สูงได้อย่างปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อเสริมสร้างความรู้ความเข้าใจถึงพื้นฐานการปฐมพยาบาล
                            และขั้นตอนการช่วยเหลือผู้ได้รับอุบัติเหตุจากการตกจากที่สูงได้อย่างถูกต้องในเบื้องต้นได้
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