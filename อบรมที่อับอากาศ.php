<?php include('header_front.php'); ?>
<?php 
    $id_training = 127;//การขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี

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
    HAVING tags LIKE "%อับอากาศ%" OR tags LIKE "%ที่อับอากาศ%"');
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
            <h2 class="text-center"><b>อบรมที่อับอากาศ</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/สอบใบเซอร์ฟอร์ลิฟท์.jpg" alt="เรียนขับโฟล์คลิฟท์ชลบุรี อบรมโฟล์คลิฟท์">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                            <b>อบรมที่อับอากาศ 2564 2565</b> อบรมที่อับอากาศ 2564 2565 ราคาดีที่สุดในชลบุรี <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> เน้นสอนปฏิบัติจริง
                            อบรม ที่อับอากาศ ปทุมธานี อบรมที่อับอากาศ 4 ผู้ ระยอง อบรม ที่อับอากาศ ฟรี หลักสูตร อบรม ที่ อับ อากาศ อบรมที่อับอากาศ สระบุรี งานที่อับอากาศ ภาษาอังกฤษ
                            ที่อับอากาศ กฎหมาย ข้อสอบที่อับอากาศ ปริมาณออกซิเจนในที่อับอากาศ อับอากาศ 4 ผู้

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
                            <b>อบรมที่อับอากาศ </b> "ที่อับอากาศ (Confined Space) คือ ที่ซึ่งมีทางเข้าออกจำกัด หรือไม่ได้ออกแบบไว้สำหรับเป็นสถานที่ทำงานอย่างต่อเนื่องเป็นประจำ และ มีสภาพอันตราย หรือ มีบรรยากาศอันตราย เช่น อุโมงค์ ถ้ำ บ่อ หลุม ห้องใต้ดิน ห้องนิรภัย ถังน้ำมัน ถังหมัก ถัง ไซโล ท่อ เตา ภาชนะ หรือสิ่งอื่นที่มีลักษณะคล้ายกัน"
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/หาสอบโฟล์คลิฟท์.jpg" alt="อบรมโฟล์คลิฟท์ ฟรี 2565">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>
   
    <section class="white-bg padding_top p-t-80 p-b-80">
        <div class="container">
            <br> <br>
            <h2 class="text-center"><b>อบรมที่อับอากาศ</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row mb-3 p-t-40">
            <div class="text-center">
        <h5>ประกาศกรมสวัสดิการและคุ้มครองแรงงาน เรื่องหลักเกณฑ์ วิธีการ และหลักสูตรการฝึกอบรมความปลอดภัยในการทำงานในที่อับอากาศ พ.ศ. 2564 หมวด 2 ข้อ 2 ให้นายจ้างจัดให้มีการฝึกอบรมความปลอดภัยในการทำงานในที่อับอากาศแก่ลูกจ้างผู้มีหน้าที่รับผิดชอบในการอนุญาต ผู้ควบคุมงาน ผู้ช่วยเหลือ และผู้ปฏิบัติงานในที่อับอากาศ และจัดให้มีการฝึกอบรมเพื่อทบทวนความปลอดภัยในการทำงานในที่อับอากาศ ตามหลักเกณฑ์ วิธีการและหลักสูตรการฝึกอบรมที่กำหนดไว้ในประกาศนี้</h5> <br>
    </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab1" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้อนุญาตในที่อับอากาศ.jpg" alt="ผู้อนุญาตในที่อับอากาศ อบรมที่อับอากาศ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>	ผู้อนุญาต</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ต้องเป็นผู้ที่ผ่านการอบรมดับเพลิงขั้นต้น<br>และมีวุฒิบัตรรับรองการอบรม
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab2" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้ควบคุมในที่อับอากาศ.jpg" alt="ผู้ควบคุมในที่อับอากาศ อบรมที่อับอากาศ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ผู้ควบคุมงาน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ต้องเป็นผู้ที่ผ่านการอบรมดับเพลิงขั้นต้นและมีวุฒิบัตรรับรองการอบรม
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab3" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้ช่วยในที่อับอากาศ.jpg" alt="ผู้ช่วยในที่อับอากาศ อบรมที่อับอากาศ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ผู้ช่วยเหลือ</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    พนักงานที่ได้รับมอบหมายให้เป็นผู้รับผิดชอบในการช่วยเหลือผู้ที่ปฏิบัติงานในที่อับอากาศ
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab4" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้ปฏิบัติงานในที่อับอากาศ.jpg" alt="ผู้ปฏิบัติงานในที่อับอากาศ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ผู้ปฏิบัติงาน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ต้องเป็นผู้ที่ผ่านการอบรมดับเพลิงขั้นต้นและมีวุฒิบัตรรับรองการอบรม
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab5" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมอับอากาศ 4 ผู้.jpg" alt="อบรมอับอากาศ 4 ผู้">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>รวมหลักสูตรอับอากาศ</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ผู้อนุญาต ผู้ควบคุมงาน ผู้ช่วยเหลือ และผู้ปฏิบัติงานในที่อับอากาศ (รวมทุกหลักสูตร)
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab6" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ทบทวนความปลอดภัยในการทำงานที่อับอากาศ.jpg" alt="ทบทวนความปลอดภัยในการทำงานที่อับอากาศ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ทบทวนที่อับอากาศ</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ต้องเป็นผู้ที่ผ่านการอบรมดับเพลิงขั้นต้นและมีวุฒิบัตรรับรองการอบรม
                                    </span>
                                </div>
                            </div>
                            <span
                                class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="white-bg p-t-10">
        <?php include('layout/contact_inhouse.php'); ?>
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
            <h2 class="text-center"><b>
            อบรม ที่อับอากาศ
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="text-center">
        <h5>อบรมอับอากาศ กฎกระทรวงกำหนดมาตรฐานในการบริหาร จัดการ และดำเนินการด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานเกี่ยวกับที่อับอากาศ พ.ศ. 2562</h5> <br>
    </div>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อบรมที่อับอากาศ 2564.jpg" alt="อบรม ที่อับอากาศ ออนไลน์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อบรมที่อับอากาศ 2565.jpg" alt="อบรม ที่อับอากาศ ออนไลน์ ฟร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อบรมที่อับอากาศ 4 ผู้ ระยอง.jpg" alt="อบรมที่อับอากาศ 2564">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อบรม ที่อับอากาศ ฟรี.jpg" alt="อบรมที่อับอากาศ 2565">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อบรม ที่อับอากาศ ปทุมธานี.jpg" alt="อบรม ที่อับอากาศ">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/หลักสูตร อบรม ที่ อับ อากาศ npc.jpg" alt="อบรม ที่อับอากาศ">
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
                    ข้อมูลที่อับอากาศ ที่เป็นประโยชน์
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row information">
                <div class="col-md-6 col-12 my-3 ">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap1">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ที่อับอากาศ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                        "ที่อับอากาศ (Confined Space) หมายความว่า ที่ซึ่งมีทางเข้าออกจำกัดหรือไม่ได้ออกแบบไว้สำหรับเป็นสถานที่ทำงานอย่างต่อเนื่องเป็นประจำ และ มีสภาพอันตราย หรือ มีบรรยากาศอันตราย

                        เช่น อุโมงค์ ถ้ำ บ่อ หลุม ห้องใต้ดิน ห้องนิรภัย ถังน้ำมัน ถังหมัก ถัง ไซโล ท่อ เตา ภาชนะ หรือสิ่งอื่นที่มีลักษณะคล้ายกัน" อ้างอิงจาก กฎกระทรวงกำหนดมาตรฐานในการบริหาร จัดการ และดำเนินการด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานเกี่ยวกับที่อับอากาศ พ.ศ. 2562

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สภาพอันตรายในที่อับอากาศ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                        สภาพอันตราย คือ สภาพหรือสภาวะที่อาจทำให้ลูกจ้างได้รับอันตรายจากการทำงาน โดยมีอย่างใดอย่างหนึ่ง ดังต่อไปนี้

                        (1) มีวัตถุหรือวัสดุที่อาจก่อให้เกิดการจมลงของลูกจ้าง หรือทับถมลูกจ้างที่เข้าไปทำงาน

                        (2) มีสภาพที่อาจทำให้ลูกจ้างตก ถูกกัก หรือติดอยู่ภายใน

                        (3) มีสภาวะที่ลูกจ้างมีความเสี่ยงที่จะได้รับอันตรายจากบรรยากาศอันตราย

                        (4) สภาพอี่นใดที่อาจเป็นอันตรายต่อร่างกายภาพหรือชีวิตที่อธิบดีประกาศกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>บรรยากาศอันตรายในที่อับอากาศ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                        บรรยากาศอันตราย หมายความว่า สภาพอากาศที่อาจทำให้ลูกจ้างได้รับอันตรายจากสภาวะอย่างใดอย่างหนึ่ง ดังนี้

                        (1) มีออกซิเจนต่ำกว่าร้อยละ 19.5 หรือมากกว่าร้อยละ 23.5 โดยปริมาตร

                        (2) มีก๊าซ ไอ หรือละอองที่ติดไฟหรือระเบิดได้ เกินร้อยละ 10 ของค่าความเข้มข้นขั้นต่ำของสารเคมีแต่ละชนิดในอากาศที่อาจติดไปหรือระเบิดได้  (Lower Flammable limit หรือ lower explosive limit)

                        (3) มีฝุ่นที่ติดไฟหรือระเบิดได้ ซึ่งมีค่าความเข้มข้นเท่ากับ หรือมากกว่าค่าความเข้มข้นต่ำสุดของฝุ่นที่ติดไฟหรือระเบิดได้แต่ละชนิด (minimum explosible concentration)

                        (4) มีค่าความเข้มข้นของสารเคมีแต่ละชนิดเกินมาตรฐานที่กำหนดตามกฎกระทรวงว่าด้วยการกำหนดมาตรฐานในการบริหารจัดการฯ เกี่ยวกับสารเคมีอันตราย

                        (5) สภาวะอื่นใดที่อาจเป็นอันตรายต่อร่างกายหรือชีวิตตามที่อธิบดีประกาศกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ที่อับอากาศ ภาษาอังกฤษ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                        ที่อับอากาศหรือ Confined space คือ ที่ซึ่งมีทางเข้าออกจำกัด และมีการระบายอากาศไม่เพียงพอที่จะทำให้อากาศภายในอยู่ในสภาพถูกสุขลักษณะและปลอดภัย รวมทั้งไม่ได้ออกแบบไว้เป็นสถานที่ทำงานอย่างต่อเนื่องเป็นประจำ เช่น อุโมงค์ ถ้ำ บ่อ หลุม ห้องใต้ดิน ห้องนิรภัย ถังน้ำมัน ถังหมัก ถังไซโล ท่อ เตา ภาชนะ หรือสิ่งอื่นที่มีลักษณะคล้ายกัน และตามนิยามกฎหมายความปลอดภัยที่อับอากาศยังรวมถึง บรรยากาศอันตรายซึ่งหมายถึง สภาพอากาศที่อาจทำให้ลูกจ้างได้รับอันตรายจากสภาวะอย่างหนึ่งอย่างใด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัจจัยการพิจารณาว่าพื้นที่ใดจัดเป็น ที่อับอากาศ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                        1. เป็นพื้นที่ซึ่งมีปริมาตรขนาดเล็ก แต่ใหญ่พอที่คนจะเข้าไปปฏิบัติงานได้ปัจจัยการพิจารณาว่าพื้นที่ใดจัดเป็นที่อับอากาศ

                        2. เป็นพื้นที่ที่อยู่ในสภาพจำกัดไม่ให้มีการเข้าออกได้โดยสะดวก พื้นที่ภายในมีความเสี่ยงต่อการบาดเจ็บหรือเสียชีวิตเนื่องจากสภาพอากาศที่เป็นอันตราย เช่น มีก๊าซ หรือไอ ฯลฯ ที่ไม่สามารถระบายออกและส่งผลกระทบต่อสุขภาพของลูกจ้างในบริเวณนั้น อาจสูดดมแก๊สพิษเข้าสู่ร่างกายหรือมีออกซิเจนไม่เพียงพอ

                        3. สภาพการเข้าออกไม่สะดวกทำให้การกู้ภัยหรือกู้ชีวิตเป็นไปด้วยความยากลำบาก

                        4. ช่องเปิด ทางเข้า ทางออก มีขนาดเล็กหรือมีจำนวนจำกัด มีการระบายอากาศตามธรรมชาติไม่เพียงพอ

                        5. เป็นพื้นที่ที่ไม่ได้ออกแบบให้ปฏิบัติงานอย่างต่อเนื่อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ระบบการทำงานที่มีความปลอดภัย ในที่อับอากาศ </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                        1. มีผู้อนุญาต ผู้ควบคุมงาน หรือเจ้าของพื้นที่เข้าดูแลรับผิดชอบพื้นที่อับอากาศ

                        2. ผู้ที่เกี่ยวข้องทั้งหมด (ผู้ปฏิบัติงาน ผู้ช่วยเหลือหรือผู้เฝ้าระวัง ผู้ควบคุมงาน และผู้อนุญาต) ต้องผ่านการอบรมและมีความรู้ความสามารถในการทำงานในสถานที่อับอากาศ

                        ค. มีการตัดระบบการทำงานของเครื่องจักร กระแสไฟฟ้า และการป้อนวัสดุ

                        ง. ทำความสะอาดพื้นที่โดยรอบเพื่อไม่มีสิ่งที่เป็นอันตราย ก่อนเข้าปฏิบัติงานในที่อับอากาศ 

                        จ. ทำการตรวจสอบและดำเนินการให้ช่องทางเข้าออก สะดวก ปลอดภัย

                        ฉ. มีระบบระบายอากาศที่เหมาะสมก่อนเข้าทำงาน และตลอดระยะเวลาที่ทำงาน 

                        ช. มีการตรวจวัดสภาพบรรยากาศสำหรับการปฏิบัติงานในที่อับอากาศ

                        ซ. เลือกใช้เครื่องมือที่เหมาะกับลักษณะงาน และแสงสว่างเพียงพอ

                        ฌ. มีการเลือกใช้เครื่องช่วยหายใจ หรือ SCBA ที่เหมาะสม

                        ญ. มีป้ายเตือนอันตรายและห้ามเข้า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเตรียมการสำหรับเหตุฉุกเฉินให้พร้อมก่อนเริ่มการเข้าปฏิบัติงานในที่อับอากาศ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                        1. ตรวจสอบและเตรียมความพร้อมในการแจ้งกรณีเกิดเหตุฉุกเฉิน

                        2. จัดเตรียมเครื่องมือกู้ภัยและช่วยชีวิตที่พร้อมใช้งานได้อย่างทันสถานการณ์

                        3. ทีมฉุกเฉินและทีมกู้ภัยมีสมรรถนะตอบสนองต่อภาวะฉุกเฉินที่อาจเกิดขึ้นจากการทำงานใน ที่อับอากาศ ได้ทันสถานการณ์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจัดโปรแกรมการจัดการเพื่อความปลอดภัยในการเข้าทำงานใน ที่อับอากาศ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                        1. ชี้บ่งอันตรายพื้นที่ที่ถือว่าเป็นที่อับอากาศ

                        2. มีระบบการอนุญาตให้เข้าปฏิบัติงานในที่อับอากาศ

                        3. จัดให้ผู้มีหน้าที่เกี่ยวข้อง (ผู้ปฏิบัติงาน ผู้ช่วยเหลือหรือผู้เฝ้าระวัง ผู้ควบคุมงาน และผู้อนุญาต) และผู้ที่มีความรู้ความสามารถอบรมการปฏิบัติงานในที่อับอากาศ

                        4. มีการวางแผน และทำการประเมินความเสี่ยงในการเข้าปฏิบัติงานในที่อับอากาศแต่ละครั้ง

                        5. มีขั้นตอนการปฏิบัติงานและขั้นตอนการตรวจวัดสภาพบรรยากาศอันตราย

                        6. มีป้ายเตือนอันตราย

                        7. มีระบบการป้องกันการเข้าในที่อับอากาศโดยพลการ

                        8. จัดอุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล อุปกรณ์การช่วยชีวิต หรืออุปกรณ์พิเศษอื่นตามลักษณะการปฏิบัติงาน

                        9. จัดให้มีระบบระบายอากาศที่เหมาะสมก่อนเข้าทำงาน และตลอดระยะเวลาที่ทำงาน

                        10. มีแผนกู้ภัยฉุกเฉินสำหรับลูกจ้างหรือผู้ประสบภัยในสถานที่อับอากาศ
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
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