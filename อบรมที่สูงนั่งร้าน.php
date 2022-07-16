<?php include('header_front.php'); ?>
<?php 
    $id_training = 129;//เทคนิคการติดตั้งและความปลอดภัยนั่งร้าน

    //หา course outline 
    $stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
    $stmt->execute(array($id_training));
    $url_course_outline = $stmt->fetchColumn();
    
    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%นั่งร้าน%" OR tags LIKE "%scaffolding%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

.a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
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
            <h2 class="text-center"><b>อบรมนั่งร้าน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_scaffold (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                            <b>อบรมนั่งร้าน </b> เทคนิคการติดตั้งนั่งร้าน อบรมนั่งร้านชลบุรีต้องที่ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> อบรมนั่งร้านระยอง การติดตั้งนั่งร้านญี่ปุ่น คู่มือการติดตั้งนั่งร้านอบรมนั่งร้านตาม <a class="a-link d-inline" href="https://bit.ly/3mjAtDw"> กฎกระทรวงกำหนดมาตรฐานในการบริหาร จัดการ 
                            และดำเนินการด้านความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับนั่งร้านและค้ำยัน พ.ศ. 2564 </a> อบรมนั่งร้าน กรุงเทพ เทคนิคการ ติด ตั้ง นั่งร้าน อบรมนั่งร้าน ภาษาอังกฤษอบรมนั่งร้านชลบุรี 
                            อบรมนั่งร้าน ระยอง อบรม นั่งร้าน การติดตั้งนั่งร้านญี่ปุ่น คู่มือการติดตั้งนั่งร้าน
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
                                อันตรายที่เกิดขึ้นจากการทำงานบนนั่งร้านได้แก่ พนักงานพลัดตกจากนั่งร้าน การสะดุด ลื่น ล้ม
                                การร่วงหล่นของวัสดุ อุปกรณ์ การโค่นล้มของนั่งร้านและ อันตรายจากสภาพแวดล้อมในการทำงาน
                                <b>การที่ผู้ปฏิบัติงานได้รับการอบรมวิธีการติดตั้งนั่งร้านและการตรวจสอบนั่งร้านอย่างถูกวิธี
                                    และได้รับการฝึกปฏิบัติการติดตั้งนั่งร้านในการปฏิบัติงานจะช่วยลดอัตราการประสบอันตรายจากการปฏิบัติงาน</b>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_scaffold (8).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">เทคนิคการติดตั้งและความปลอดภัยนั่งร้าน (ชลบุรี)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมนั่งร้านได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_training="129"
                                    href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>เทคนิคการติดตั้งและการตรวจสอบนั่งร้าน (ชลบุรี)</h5>
                                </a></li>
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_training="596"
                                    data-id_branch="46" href="#tab2" role="tab" data-toggle="tab">
                                    <h5>ความปลอดภัยในการทำงานเกี่ยวกับนั่งร้าน (ออนไลน์)</h5>
                                </a></li>
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="582" href="#tab3" role="tab" data-toggle="tab">
                                    <h5>เทคนิคการออกแบบและการคํานวณวัสดุนั่งร้าน(ออนไลน์)</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="table2"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="table3"></div>
                            </div>
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
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/ocPOKCuL4v8?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/หลักสูตรอบรม เทคนิคการติดตั้งนั่งร้านและการตรวจสอบนั่งร้าน.jpg"
                                alt="เทคนิคการติดตั้งนั่งร้าน">
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
                            <h4><b>บรรยากาศการอบรมนั่งร้าน</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>บรรยากาศการอบรมนั่งร้าน
                                เน้นทำ Workshop ให้ได้ลงมือทำจริงในห้องเรียน ในบรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้นและสามารถนำไปใช้ได้จริงในการทำงาน</h5>
                            <br>
                            <br>
                            <div>
                                <a class="btn btn--medium btn--radius btn--red text-uppercase"
                                    href="https://www.youtube.com/c/TopproChannel">WATCH NOW
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/schedule_detail.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>


    <section>
        <div class="container p-t-80 p-b-80">
            <h2 class="text-center"><b>เทคนิคการติดตั้งและความปลอดภัยนั่งร้าน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="text-center">
        <h5>อบรมนั่งร้านกรุงเทพ เทคนิคการติดตั้งนั่งร้าน อบรมนั่งร้านภาษาอังกฤษ อบรมนั่งร้านชลบุรี อบรมนั่งร้านระยอง อบรมนั่งร้าน NPC คู่มือการติดตั้งนั่งร้าน <a class="a-link d-inline" href="https://bit.ly/3mjAtDw"> กฎกระทรวงกำหนดมาตรฐานในการบริหาร จัดการ 
                            และดำเนินการด้านความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับนั่งร้านและค้ำยัน พ.ศ. 2564 </a> ซึ่งประกาศราชกิจจานุเบกษาเมื่อวันที่ 1 มีนาคม 2564 </h5>
                            
                            <br>

            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความนั่งร้าน-06.jpg" alt="">
                </div>
            </div>
            <br>
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
                            <h5><b>ทำงานในที่สูง คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การทำงานในพื้นที่ปฏิบัติงานที่สูงจากพื้นดิน หรือ จากพื้นอาคาร ตั้งแต่ 2 เมตรขึ้นไป
                            ซึ่งลูกจ้างอาจพลัดตกลงมาได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>นั่งร้าน คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            โครงสร้างชั่วคราวที่สูงจากพื้นดิน หรือ จากพื้นอาคาร
                            หรือส่วนของสิ่งก่อสร้างสำหรับเป็นที่รองรับลูกจ้าง วัสดุ หรือเครื่องมือและอุปกรณ์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อันตรายจากการตกจากที่สูง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            แบ่งออกเป็น 5 ประเภท ได้แก่<br>
                            (1) ลื่น<br>
                            (2) สะดุด<br>
                            (3) ตกจากบันได<br>
                            (4) ตกจากที่สูง<br>
                            (5) การตกกระทบจากวัสดุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ป้องกันการตกจากที่สูงและวัสดุร่วงหล่นที่ตัวผู้ปฏิบัติงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) ฝึกอบรมให้กับผู้ที่ต้องขึ้นไปปฏิบัติงานบนที่สูง<br>
                            (2) สุขภาพของผู้ปฏิบัติงาน<br>
                            (3) สวมใส่อุปกรณ์ป้องกันอันตรายส่วนบุคคล
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ป้องกันการตกจากที่สูงและวัสดุร่วงหล่นในสถานที่ทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) จัดระบบงาน เพื่อจำกัดการทำงานบนที่สูง<br>
                            (2) ติดตั้งอุปกรณ์ป้องกันการตก เพื่อลดความเสี่ยง<br>
                            (3) พื้นที่ทำงานปราศจากปัจจัยที่ทำให้สะดุด ลื่น<br>
                            (4) กั้น หรือปิดช่องเปิดบนพื้นให้แข็งแรง พร้อมป้ายเตือนอันตราย<br>
                            (5) ติดตั้งหลังคาบริเวณทางเข้า-ออกอาคาร เพื่อป้องกันการร่วงตกของวัสดุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการร่วงหล่นของวัสดุในพื้นที่ปฏิบัติงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการสะดุด ลื่นล้ม บนพื้นที่ทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในการเดิน เคลื่อนย้าย หรือเปลี่ยนพื้นที่ปฏิบัติงาน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในงานติดตั้งหลังคาที่มีความลาดเอียง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
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

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในพื้นที่ที่เป็นสันขอบอาคาร และพื้นที่เปิดโล่ง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) จัดทำราว หรือรั้วปิดกั้นที่มั่นคง แข็งแรงโดยรอบ<br>
                            (2) ใช้สีแสดงให้เห็นเด่นชัดในระยะไกล<br>
                            (3) ติดตั้งตาข่ายนิรภัย<br>
                            (4) จัดให้มีป้าย และสัญลักษณ์เตือนภัย<br>
                            (5) สวมใส่อุปกรณ์ป้องกันการตก<br>
                            (6) มีแผนการช่วยเหลือ เมื่อเกิดเหตุฉุกเฉิน
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
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow fix_detail_course"
                        src="<?php echo $base_url;?>/img/bg/shutterstock2.jpg" alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ความปลอดภัยในการทำงานบนที่สูง</b></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            อบรมที่สูง เป็นหลักสูตรมาตรฐานสากล เพื่อให้ผู้เข้าอบรม
                            สามารถได้เรียนรู้เกี่ยวกับวิธีการปฏิบัติงานบนที่สูง
                            และวิธีการปฏิบัติงานอย่างปลอดภัย
                            ตามมาตรฐานสากล

                            <br><br>ผู้เข้าอบรมสามารถประเมินความเสี่ยง
                            อันตรายได้อย่างปลอดภัย ตามกฎหมาย งานบนที่สูง
                            โดยมีทีมวิทยากรคอยกำกับดูแลตลอดการฝึกอบรม
                            และคอยแนะนำวิธีการใช้อุปกรณ์ต่างๆ เทคนิคสำคัญๆ
                            ได้อย่างมืออาชีพ
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
                            ตระหนักถึงอันตรายความเสี่ยงและรู้ถึงมาตรการการทำงานบนที่สูง
                        <li><i class="fas fa-check-circle"></i>
                            สร้างความรู้ความเข้าใจเกี่ยวกับอุปกรณ์ต่าง ๆ การทำงานบนที่สูง
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            สามารถประเมินควบคุมอันตรายที่จะเกิดขึ้นจากการปฏิบัติงานบนที่สูง

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
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

$(".nav-tabs li a").on("click", function() {
    $(".head_nav").text($(this).text());
    $(".dt_nav").text($(this).text());
});
</script>