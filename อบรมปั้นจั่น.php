<?php include('header_front.php'); ?>

<?php 

    //หา banner

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';

    $stmt = $safetyDb->prepare($sql);

    $stmt->execute(array($actual_link));

    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);



    //ดึงข้อมูลบทความที่เกี่ยวข้อง

    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 

    WHERE status = "active" AND del = "false" 

    HAVING tags LIKE "%เครน%" OR tags LIKE "%ปั้นจั่น%"');

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


html {
    scroll-behavior: smooth;
}

.gallery_slider img {
    filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(189deg) brightness(104%) contrast(106%);
    width: 20%;
}

.head-fix-height {
    height: calc(1vw + 120px);
}

@media (max-width: 576px) {
    .tab .nav-tabs li {
        width: 50% !important;
    }
}

.tab .nav-tabs li {
    width: 16.66%;
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

            <h1 class="text-center"><b>เครน-ปั้นจั่น</b></h1>

            <hr class="hr_green mx-auto hr_fix_width">

            <br>

            <br>

            <div class="row">

                <div class="col-md-6 col-12 mb-3 text-center">

                    <img style="max-width: 75%;" class="box_shadow"

                        src="<?php echo $base_url;?>/img/template_gallery/อบรมปั้นจั่นออนไลน์.jpg" alt="อบรมปั้นจั่นออนไลน์">

                </div>

                <div class="col-md-6 col-12 align-self-center mb-3">

                    <div class="row">

                        <div class="col-lg-9 col-md-11 col-12 m-auto">

                            <h6>

                            <b>อบรมเครน (Crane) ตามกฎหมาย 2552 - 2564 </b>หรืออบรมปั้นจั่น เป็นหลักสูตรการอบรมสำหรับผู้ที่ทำงานร่วมกับการใช้เครนหรือปั้นจั่นตามราชกิจจานุเบกษา เผยแพร่กฎกระทรวงแรงงาน เกี่ยวกับการกำหนดให้นายจ้างบริหาร จัดการและดำเนินการด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน ให้เป็นไปตามมาตรฐานที่กำหนดในกฎกระทรวงและเพื่อให้การทำงานเกี่ยวกับเครื่องจักร ปั้นจั่น และหม้อน้ำ ให้มีมาตรฐาน อันจะทำให้ลูกจ้างมีความปลอดภัยในการทำงานมากขึ้น อบรมได้ทั้งเขตชลบุรีและระยอง สอบใบเซอร์ปั้นจั่น ใบเซอร์เครน กฎหมายทบทวนปั้นจั่น

อบรมทบทวนปั้นจั่น กฎหมาย อบรม เครน ทุก 2 ปีที่เซฟตี้อินไทย

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

                            <b>เซฟตี้อินไทย</b> ให้บริการการอบรมปั้นจั่น (เครน) ชนิดปั้นจั่นเหนือศีรษะ, ปั้นปั่นขาสูง,

                            ปั้นจั่นชนิดอยู่กับที่ชนิดอื่น ปั้นจั่นชนิดเหนือศีรษะ ปั้นจั่นขาสูง และปั้นจั่นชนิดอยู่กับที่ชนิดอื่นปั้นจั่นชนิดปั้นจั่นหอสูง รถหลักสูตรการอบรมหรือทบทวนการทำงานเกี่ยวกับปั้นจั่นอบรมตามข้อกำหนดของกฏหมายใหม่ปี 2552 และ <a class="a-link d-inline" href="https://bit.ly/30r1XP1">กฎกระทรวงกำหนดมาตรฐานในการบริหาร จัดการ และดำเนินการด้านความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ.2564</a>

                                โดยวิทยากรที่มีประสบการณ์การทำงานเกี่ยวกับเครน

                                และผ่านการอบรมเทคนิคการเป็นวิทยากรปั้นจั่น มีคุณสมบัติตามที่กฏหมายกำหนด

                                ผู้ผ่านการอบรมจะได้รับใบวุฒิบัตร

                            </h6>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-12 mb-3 text-center">

                    <img style="max-width: 75%;" class="box_shadow"

                        src="<?php echo $base_url;?>/img/template_gallery/อบรม 4 ผู้ ปั้นจั่น.jpg" alt="อบรมปั้นจั่นออนไลน์

อบรม 4 ผู้ ปั้นจั่น 

กฎหมายอบรมปั้นจั่น 2564

อบรม เครน ทุก 2 ปี

อบรมริกเกอร์

อบรมเครน 4 ผู้ ภาษาอังกฤษ

อบรมเครน 4 ผู้ มีอะไรบ้าง

อบรมปั้นจั่น กฎหมาย

สรุปกฎหมายปั้นจั่น 2564 

กฎหมายรถยก 2564 

กฎหมายปั้นจั่น 2552 pdf

อัพเดทกฎหมายความปลอดภัยใหม่ 2564">

                </div>

            </div>

        </div>

    </section>



    <section style="position: relative;">

        <?php include('layout/why_training.php'); ?>

    </section>

    <section class="white-bg padding_top p-t-80 p-b-80">
        <div class="container"><br><br><br><br>
            <h2 class="text-center"><b>อบรมเครน ปั้นจั่น ตามกฎหมายกำหนด</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row mb-3 p-t-40">
                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab1" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้บังคับปั้นจั่น-ชนิด-ปั้นจั่นหอสูง-รถ-เรือปั้นจั่น.jpg" alt="ใบเซอร์ปั้นจั่น">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นหอสูง รถ เรือปั้นจั่น</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นหอสูง รถ เรือปั้นจั่น<br>
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

                    <a href="#table_course2" data-link="tab2" onclick="return activaTab(this)">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover"

                                            src="<?php echo $base_url;?>/img/course/ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น-ผู้ยึดเกาะวัสดุ-ชนิดปั้นจั่นเหนือศีรษะ.jpg" alt="">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center head-fix-height">

                                    <h5><b>ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ ชนิดปั้นจั่นเหนือศีรษะ</b></h5>

                                </div>

                                <div class="row text-center">

                                    <span class="course-fix-height">

                                    ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ ชนิดปั้นจั่นเหนือศีรษะ

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

                    <a href="#table_course3" data-link="tab3" onclick="return activaTab(this)">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover"

                                            src="<?php echo $base_url;?>/img/course/ผู้ควบคุมการใช้ปั้นจั่น.jpg" alt="">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center head-fix-height">

                                    <h5><b>ผู้ควบคุมการใช้ปั้นจั่น</b></h5>

                                </div>

                                <div class="row text-center">

                                    <span class="course-fix-height">

                                    ผู้ควบคุมการใช้ปั้นจั่น

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
                    <a href="#table_course4" data-link="tab4" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover" src="<?php echo $base_url;?>/img/course/ผู้บังคับปั้นจั่น-ชนิด-ปั้นจั่นเหนือศีรษะ-ปั่นจั่นขาสูง-และปั้นจั่นอยู่กับที่ชนิดอื่นๆ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นเหนือศีรษะ ปั่นจั่นขาสูง และปั้นจั่นอยู่กับที่ชนิดอื่นๆ</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นเหนือศีรษะ ปั่นจั่นขาสูง และปั้นจั่นอยู่กับที่ชนิดอื่นๆ
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
                    <a href="#table_course5" data-link="tab5" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover" src="<?php echo $base_url;?>/img/course/เครน4ผู้.jpg" alt="เครน 4 ผู้ ชนิดปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูง และปั้นจั่นชนิดอยู่กับที่ชนิดอื่น">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>เครน 4 ผู้ ชนิดปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูง และปั้นจั่นชนิดอยู่กับที่ชนิดอื่น</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ และผู้ควบคุมปั้นจั่น
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
                    <a href="#table_course6" data-link="tab6" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/ผู้บังคับปั้นจั่น-ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น-ผู้ยึดเกาะวัสดุ-และผู้ควบคุมการ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>เครน 4 ผู้ ชนิดปั้นจั่นหอสูง รถ เรือปั้นจั่น</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                    ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ และผู้ควบคุมการใช้ปั้นจั่น
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



    <section class="p-b-80 p-t-80">

        <?php include('layout/standard.php'); ?>

    </section>



    <section class="white-bg" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">ผู้บังคับปั้นจั่นชนิด ปั้นจั่นหอสูง รถ เรือปั้นจั่น</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้บังคับปั้นจั่นชนิด ปั้นจั่นหอสูง รถ เรือปั้นจั่น (18 ชั่วโมง) พร้อมรับใบเซอร์
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="140"
                                    href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้บังคับปั้นจั่นชนิด ปั้นจั่นหอสูง รถ เรือปั้นจั่น</h5>
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
            <div class="container p-b-90 p-t-90" id="table_course2"></div>
            <h1 class="text-center"><b class="head_nav">ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ ชนิดปั้นจั่นเหนือศีรษะ</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ ชนิดปั้นจั่นเหนือศีรษะ (12 ชั่วโมง) พร้อมรับใบเซอร์
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="143"
                                    href="#tab2" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ ชนิดปั้นจั่นเหนือศีรษะ</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab2">
                                <div class="table2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-b-90 p-t-90" id="table_course3"></div>
            <h1 class="text-center"><b class="head_nav">ผู้ควบคุมการใช้ปั้นจั่น</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้ควบคุมการใช้ปั้นจั่น (12 ชั่วโมง) พร้อมรับใบเซอร์</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="144"
                                    href="#tab3" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้ควบคุมการใช้ปั้นจั่น</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab3">
                                <div class="table3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-b-90 p-t-90" id="table_course4"></div>
            <h1 class="text-center"><b class="head_nav">ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูงและปั้นจั่นอยู่กับที่ชนิดอื่นๆ</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้บังคับปั้นจั่น ชนิด ปั้นจั่นเหนือศีรษะ ปั่นจั่นขาสูงและปั้นจั่นอยู่กับที่ชนิดอื่นๆ (12 ชั่วโมง) พร้อมรับใบเซอร์</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="145"
                                    href="#tab4" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้บังคับปั้นจั่น ชนิด ปั้นจั่นเหนือศีรษะ ปั่นจั่นขาสูง
                                        และปั้นจั่นอยู่กับที่ชนิดอื่นๆ</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab4">
                                <div class="table4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-b-90 p-t-90" id="table_course5"></div>
            <h1 class="text-center"><b class="head_nav">ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุและผู้ควบคุมปั้นจั่น ชนิดปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูงและปั้นจั่นชนิดอยู่กับที่ชนิดอื่น (เครน 4 ผู้)</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุและผู้ควบคุมปั้นจั่น ชนิดปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูงและปั้นจั่นชนิดอยู่กับที่ชนิดอื่น (เครน 4 ผู้) (18 ชั่วโมง) พร้อมรับใบเซอร์</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="141"
                                    href="#tab5" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุและผู้ควบคุมปั้นจั่น ชนิดปั้นจั่นเหนือศีรษะ ปั้นจั่นขาสูง และปั้นจั่นชนิดอยู่กับที่ชนิดอื่น (เครน 4 ผู้)</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab5">
                                <div class="table5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-b-90 p-t-90" id="table_course6"></div>
            <h1 class="text-center"><b class="head_nav">ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุและผู้ควบคุมการใช้ปั้นจั่น ชนิดปั้นจั่นหอสูง รถ เรือปั้นจั่น</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุและผู้ควบคุมการใช้ปั้นจั่น ชนิดปั้นจั่นหอสูง รถ เรือปั้นจั่น (24 ชั่วโมง) พร้อมรับใบเซอร์</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="192"
                                    href="#tab6" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ผู้บังคับปั้นจั่น ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น ผู้ยึดเกาะวัสดุ
                                        และผู้ควบคุมการใช้ปั้นจั่น ชนิดปั้นจั่นหอสูง รถ เรือปั้นจั่น</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab6">
                                <div class="table6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-b-90 p-t-90" id="table_course7"></div>
            <h1 class="text-center"><b class="head_nav">ทบทวนการทำงานเกี่ยวกับปั้นจั่น</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมทบทวนการทำงานเกี่ยวกับปั้นจั่น พร้อมรับใบเซอร์</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_training="501"
                                    href="#tab7" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ทบทวนการทำงานเกี่ยวกับปั้นจั่น</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab7">
                                <div class="table7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="white-bg p-t-30">
        <?php include('layout/contact_inhouse.php'); ?>
    </section>
    

    <section>

        <?php include('layout/prepare.php'); ?>

    </section>





    <section class="white-bg">

        <?php include('layout/received.php'); ?>

    </section>



    <section class="white-bg">

        <?php include('layout/qualification.php'); ?>

    </section>



    <section>

        <?php $id_group = 17;include('layout/training_card.php'); ?>

    </section>





    <section class="white-bg">

        <div class="container_small p-t-80 p-b-80">

            <h2 class="text-center"><b>

                    เครน-ปั้นจั่น

                </b></h2>

            <hr class="hr_green mx-auto hr_fix_width">

            <h5>สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔  </h5>

            <br>

            <div class="row mx-auto">

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-01.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 ปั้นจั่นตามกฎหมายมีกี่ชนิดกฎหมายเกี่ยวกับไฟฟ้า 2564 สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

                </div>

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-02.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

                </div>

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-03.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

                </div>

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-04.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

                </div>

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-05.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

                </div>

                <div class="col-md-4 col-12 mb-4 article_course">

                    <img title="" class="img-fluid box_shadow"

                        src="<?php echo $base_url;?>/img/template_article/บทความเครน-06.jpg" alt="สรุปกฎหมายปั้นจั่น 2564 กฎหมายรถยก 2564  กฎหมายปั้นจั่น 2552 pdf อัพเดทกฎหมายความปลอดภัยใหม่ 2564 

ปั้นจั่นตามกฎหมายมีกี่ชนิด

กฎหมายเกี่ยวกับไฟฟ้า 2564 

สรุปกฎกระทรวง เครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564 

กฎกระทรวงฯ เครื่องจักร ปั้นจั่น และ หม้อน้ำ พ.ศ. ๒๕๖๔ ">

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

                            <h5><b>ชนิดของปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap1" class="collapse detail_collapse">

                            ปั้นจั่นเป็นเครื่องจักรที่เหมาะสมสำหรับเคลื่อนย้ายวัสดุที่มีน้ำหนักมากแต่วัสดุควรมีรูปร่างแข็งแรง

                            ถ้าเป็นวัสดุที่อ่อนตัวง่ายหรือเป็นของเหลวต้องบรรจุอยู่ในภาชนะที่แข็งแรง

                            ปั้นจั่นใช้เคลื่อนย้ายวัสดุขึ้นลงในแนวดิ่ง แล้วเคลื่อนที่ไปมาโดยรอบหรือตามทิศทางที่กำหนดไว้

                            ทั้งนี้การทำงานของปั้นจั่นจะผ่านทางสลิง ซึ่งทำด้วยเหล็กเส้นบางๆ ถักสานเป็นโครง

                            ตัวปั้นจั่นจะมีโครงสร้างเป็นเหล็กถัก เพื่อให้สามารถรับน้ำหนัก หรือภาระได้ตามออกแบบ และสำคัญ

                            คือ มีน้ำหนักเบา

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap2">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ปั้นจั่นได้เป็น 2 แบบ คือ</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap2" class="collapse detail_collapse">

                            (1) ปั้นจั่นชนิดที่อยู่กับที่ หมายถึง ปั้นจั่นที่อุปกรณ์ต่างๆ

                            และเครื่องต้นกำลังติดตั้งอยู่บนขาตั้ง ล้อเลื่อน รางเลื่อน หรือหอสูง

                            การใช้งานจะถูกจำกัดตามระยะที่ขาตั้งหรือล้อเลื่อนจะเคลื่อนที่ไปได้

                            หรือแขนของปั้นจั่นที่ติดบนหอสูงจะยาวไปถึงปั้นจั่นอยู่กับที่ใช้มากในโรงงานอุตสาหกรรม ท่าเรือ

                            และการก่อสร้างอาคารสูง<br>

                            (2) ปั้นจั่นชนิดเคลื่อนที่ หมายถึง ปั้นจั่นที่อุปกรณ์ต่างๆ

                            และเครื่องต้นกำลังติดตั้งอยู่บนยานพาหนะที่ขับเคลื่อนในตัวเอง เช่น รถบรรทุก หรือรถตีนตะขาบ

                            สามารถเคลื่อนที่ไปทำงานที่บริเวณอื่นๆ ที่อยู่ห่างไกลได้อย่างรวดเร็ว

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap3">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ความปลอดภัยในการใช้ปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap3" class="collapse detail_collapse">

                            (1)

                            ผู้ควบคุมปั้นจั่นต้องมีความรู้ในการควบคุมกฎความปลอดภัยและสัญญาณมือที่ใช้ในการเคลื่อนย้ายวัสดุ<br>

                            (2) กรณีที่ห้องควบคุมปั้นจั่นอยู่สูงจากพื้น บันไดขึ้นจะต้องมีครอบป้องกันโดยตลอด

                            ขั้นบันไดต้องมีความแข็งแรง<br>

                            (3) ผู้ควบคุมปั้นจั่นต้องมีสุขภาพแข็งแรงไม่เจ็บป่วย

                            ขณะปฏิบัติงานต้องสวมชุดปฏิบัติงานที่รัดกุม

                            ใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลตามความเหมาะสม เช่น ปลั๊กอุดหู หรือหมวกนิรภัย

                            เป็นต้น<br>

                            (4) ก่อนเปิดสวิตซ์ใหญ่ควบคุมการทำงาน ควรตรวจปุ่มควบคุมการทำงานว่าอยู่ในตำแหน่งปิด

                            จากนั้นจึงเปิดสวิตซ์ใหญ่ แล้วทดสอบระบบการทำงานต่างๆ เช่น การเคลื่อนที่เดินหน้า-ถอยหลัง

                            ขึ้น-ลง เบรก สัญญาณ เสียง และแสง เป็นต้น<br>

                            (5)

                            ผู้ควบคุมการเคลื่อนย้ายวัสดุซึ่งอยู่ข้างล่างจะต้องรู้จักวิธีการส่งสัญญาณมือที่ใช้ในการเคลื่อนย้ายอย่างถูกต้อง

                            และต้องสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล เช่น หมวกนิรภัย รองเท้านิรภัย และถุงมือหนัง

                            เป็นต้น<br>

                            (6) รู้น้ำหนักของที่จะยก และไม่ยกเกินที่เครื่องจักรสามารถยกระยะนั้น

                            ตามมาตรฐานที่กำหนดไว้<br>

                            (7) กรณีที่ใช้ปั่นจั่นชนิดเคลื่อนที่ ก่อนยกเคลื่อนย้ายวัสดุต้องใช้ตีนช้าง (Outrigger)

                            ยันกับพื้นที่มั่นคงแข็งแรงให้เรียบร้อย<br>

                            (8) การเริ่มยกขึ้นครั้งแรก ควรดำเนินการอย่างช้าๆ

                            และยกขึ้นเพียงเล็กน้อยเพื่อตรวจสอบความสมดุลย์และความสามารถในการยก

                            กรณีที่วัสดุที่ยกหนักใกล้เคียงกับพิกัดกำหนด ควรทดสอบการทำงานของเบรคด้วย<br>

                            (9) ขณะวัสดุที่เคลื่อนย้ายลอยสูงจากพื้น จะต้องปฏิบัติ ดังนี้<br>

                            (9.1) ไม่สัมผัสสิ่งกีดขวาง หรือข้ามศีรษะผู้ปฏิบัติงานอื่น<br>

                            (9.2) ห้ามผู้ปฏิบัติงานเกาะบนสิ่งของที่ยก<br>

                            (9.3) กรณีที่เป็นปั้นจั่นชนิดที่อยู่กับที่ ควรมีสัญญาณเสียงและแสง<br>

                            (9.4) หลีกเลี่ยงการแขวนสิ่งของไว้กลางอากาศ แต่ถ้าจำเป็นต้องล็อคเครื่องด้วย

                            ห้ามใช้เบรคเพียงอย่างเดียว<br>

                            (9.5) กรณีมีลมพัดแรงมากจนวัสดุที่เคลื่อนย้ายแกว่งไปมาอย่างรุนแรงต้องรีบวางวัสดุลงทันที<br>

                            (9.6) เมื่อจำเป็นต้องวางของต่ำมากๆ ต้องเหลือลวดสลิงไว้มากกว่า 2 รอบบนดรัม<br>

                            (10) การใช้ปั้นจั่นตั้งแต่ 2 เครื่องขึ้นไปยกของร่วมกัน<br>

                            ให้สัญญาณมือผู้ควบคุมการเคลื่อนย้ายเพียงคนเดียว<br>

                            (11) การใช้ปั้นจั่นใกล้กับสายไฟฟ้าแรงสูง ชิ้นส่วนต่างๆ

                            ของปั้นจั่นต้องห่างจากสายไฟไม่น้อยกว่า

                            3 เมตร หรือตามขนาดของแรงเคลื่อนไฟฟ้า ถ้าไม่สามารถทำตามระยะที่กำหนดได้

                            ต้องมีผู้คอยสังเกตและให้สัญญาณเตือน<br>

                            (12) การใช้ปั้นจั่นชนิดที่มีการถ่วงน้ำหนักด้านท้าย ห้ามถ่วงเพิ่มจากที่กำหนด<br>

                            (13) การปฏิบัติงานตอนกลางคืนควรมีไฟแสงสว่างให้เพียงพอทั่วบริเวณที่ปฏิบัติงาน

                            แต่แสงไฟต้องไม่รบกวนการปฏิบัติงานของผู้ควบคุมปั้นจั่น<br>

                            (14) กรณีที่ใช้ปั้นจั่นบนตึกสูง ต้องมีสัญญาณไฟหรือสัญญาณบอกตำแหน่งให้เครื่องบินทราบ<br>

                            (15) การยกของต้องยกขึ้นในแนวดิ่ง ให้รอกตะขอตรงกับศูนย์กลางของน้ำหนักที่ยก

                            และตรงกึ่งกลางแขนของปั้นจั่น<br>

                            (16) ปรับให้ตัวปั้นจั่นมีเสถียรภาพมากที่สุด และได้ดิ่ง<br>

                            (17) เมื่อหยุดหรือเลิกใช้งานปั้นจั่น ผู้ควบคุมควรปฏิบัติ ดังนี้<br>

                            (17.1) วางสิ่งของที่ยกค้างอยู่ลงกับพื้น<br>

                            (17.2) กว้านหรือม้วน ลวดสลิงและตะขอ เก็บเข้าที่<br>

                            (17.3) ใส่เบรคและอุปกรณ์ล็อคชิ้นส่วนที่เคลื่อนไหวได้<br>

                            (17.4) ปลดสวิตซ์ใหญ่ที่จ่ายไฟให้ปั้นจั่น<br>

                            (18) ห้ามผู้ไม่มีส่วนเกี่ยวข้องอยู่ในห้องควบคุมปั้นจั่น<br>

                            (19) ภายในห้องควบคุมปั้นจั่น

                            ไม่ควรมีเครื่องมือที่ไม่เกี่ยวข้องเก็บไว้แต่ต้องมีถังดับเพลิง<br>

                            (20) ต้องบำรุงรักษาเป็นระยะฯ โดยเฉพาะบริเวณที่มีการเคลื่อนไหวหรือเสียดสี

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap4">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>การตรวจปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap4" class="collapse detail_collapse">

                            ควรกระทำทุก 1 หรือ 3 เดือน หรือตามบริษัทผู้ผลิตแนะนำ แต่ไม่น้อยกว่าที่กฎหมายกำหนด

                            สำหรับปั้นจั่นที่หยุดใช้งานเกินกว่า 1 เดือน เมื่อนำมาใช้งานควรตรวจสอบเช่นกัน

                            การตรวจสอบปั้นจั่นทำได้ดังนี้<br>

                            (1) ตรวจการทำงานของอุปกรณ์และชิ้นส่วนควบคุมปั้นจั่น เพื่อหาการสึกหรอ การชำรุด

                            หรือความผิดปกติอื่นๆ<br>

                            (2) ตรวจการทำงานและการชำรุดของต้นกำลังระบบส่งกำลัง ผ้าเบรคและคลัช เป็นต้น<br>

                            (3) ตรวจที่รองรับ เช่น คาน เสา รางเลื่อน แขน และโครงสร้าง เป็นต้น เพื่อหาการสึกหรอ สนิม

                            ผุกร่อน และบิดเบี้ยว โดยเฉพาะบริเวณที่เชื่อมหรือยึดด้วยสลักเกลียว<br>

                            (4) ตรวจการชำรุดหรือสึกหรอของรอกหรือดรัม โดยเส้นผ่าศูนย์กลางของดรัมต้องมากกว่าของลวดสลิง 15

                            ต่อ 1<br>

                            (5) ตรวจการชำรุดหรือสึกหรอของลวดสลิง เชือก หรือโซ่ ตามที่กล่าวแล้ว<br>

                            (6) ตรวจตะขอและที่ล็อค เพื่อดูการชำรุด บิดงอ ปากถ่าง หรือแตกร้าว<br>

                            (7) สำหรับปั้นจั่นที่ติดตั้งบนรถบรรทุก ต้องตรวจสอบรถบรรทุกเกี่ยวกับเบรค ยาง พวงมาลัย

                            และไฟสัญญาณต่างๆ

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap5">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ความปลอดภัยในการยกของ</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap5" class="collapse detail_collapse">

                            ก่อนที่จะมีการยกของนั้นควรได้มีการตรวจสอบสภาพของการจับยึด

                            การควบคุมทิศทางของของที่ยกสลิงและอุปกรณ์ โดยเฉพาะอุปกรณ์ที่มีการทำลายทิ้ง

                            เพื่อไม่ให้มีการนำมาใช้โดยรู้เท่าไม่ถึงการณ์ กฎทั่วไปประกอบด้วย<br>

                            (1) การจับยึดของที่จะยกต้องมีความแน่นหนาและเหมาะสม

                            เพื่อไม่ให้เกิดการร่วงหล่นขณะที่มีการยกของขึ้นที่สูง<br>

                            (2) ต้องมีการใช้เชือกหรือสลิง (Tagline)

                            ในการควบคุมบังคับทิศทางการหมุนหรือแกว่งตัวของของที่ยก<br>

                            (3) ของที่จะยกจะต้องไม่ถูกยึดติดกับอะไร หรือถูกสิ่งอื่นทับอยู่

                            และสลิงทุกเส้นต้องได้รับแรงเท่ากัน โดยดูได้จากความตึงของสลิง และใช้สลิงที่ยาวเท่ากัน<br>

                            (4) ห้ามใช้ปั้นจั่นในการลาก ดึง สิ่งของโดยเด็ดขาด เพราะอาจทำให้ปั้นจั่นล้มได้<br>

                            (5) ต้องระวังไม่ให้สลิงพันกัน เพราะจะทำให้สลิงขาด และเกิดอันตรายได้<br>

                            (6) ต้องแจ้งให้ที่ไม่เกี่ยวข้องกับการทำงานออกจากพื้นที่ทำงานก่อนที่จะมีการยก

                            ยกเว้นว่าจะได้รับมอบหมายและอบรมในการทำงานกับบริเวณที่มีอันตราย<br>

                            (7) ห้ามคนนั่งหรือขึ้นไปกับของที่จะยกเด็ดขาด

                            เนื่องจากสลิงอาจขาดได้ทุกเมื่อขณะที่ไม่มีอุปกรณ์ความปลอดภัยอื่นมาช่วย<br>

                            (8) ก่อนหมุนเคลื่อนที่ หรือหมุนของที่ยก

                            ผู้ควบคุมหน้างานต้องดูรัศมีที่จะหมุนไปไม่มีอะไรมากีดขวาง หรือเป็นอันตรายต่อผู้ที่ทำงาน

                            เพราะคนขับรถปั้นจั่นอาจมองไม่เห็นชัดเจน<br>

                            (9) ห้ามคนทำงานใต้ของที่แขวน ถ้าไม่มีการยึดอย่างแน่นหนาและตรวจสอบอย่างดีจากผู้ควบคุมงาน

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap6">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ผู้บังคับปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap6" class="collapse detail_collapse">

                            คือผู้ที่ทำหน้าที่บังคับการทำงานของปั้นจั่นให้เคลื่อนไปในตำแหน่งต่าง ๆ ตามที่ต้องการ

                            เป็นหน้าที่สำคัญที่ต้องใช้ผู้ที่มีความรู้และผ่านการอบรม

                            เพราะไม่ใช่แค่การควบคุมปั้นจั่นเพียงอย่างเดียวแต่ยังหมายถึงความปลอดภัยและชีวิตของเพื่อนร่วมด้วย

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap7">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ผู้ให้สัญญาณแก่ผู้บังคับปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap7" class="collapse detail_collapse">

                            คือผู้ที่ทำหน้าที่ให้สัญญาณมือหรือส่งสัญญาณโดยใช้เครื่องมือสื่อสารต่าง ๆ

                            ให้ผู้บังคับปั้นจั่นได้ทราบ เพราะหากสื่อสารผิดก็จะทำให้การบังคับปั้นจั่นเกิดปัญหาตามมาได้

                            ในการอบรมปั้นจั่นจึงจำเป็นต้องอบรมควบคู่กันไปในทุก ๆ

                            หลักสูตรเพื่อความปลอดภัยในการทำงานมากที่สุด

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap8">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ผู้ยึดเกาะวัสดุ</b></h5>

                            <i class="fas fa-plus"></i>

                        </div>

                        <div id="collap8" class="collapse detail_collapse">

                            คือผู้ที่ทำหน้าที่นำวัสดุต่าง ๆ

                            ผูกหรือมัดติดกับปั้นจั่นเพื่อให้เคลื่อนไปไว้ในตำแหน่งที่ต้องการ

                            โดยจะต้องเรียนรู้เกี่ยวกับการขนย้ายอุปกรณ์หรือวัสดุต่าง ๆ

                            อย่างถูกวิธีเพื่อไม่ให้ตกหล่นและสามารถอยู่บนปั้นจั่นได้อย่างมั่นคง

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap9">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>ผู้ควบคุมการใช้ปั้นจั่น</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap9" class="collapse detail_collapse">

                            คือผู้ที่มีหน้าที่ควบคุมการสั่งการผู้บังคับปั้นจั่น

                            โดยผู้ควบคุมการใช้ปั้นจั่นจะทำหน้าที่ควบคุมปั้นจั่นในเรื่องของน้ำหนัก การยึดเกาะ และอื่น ๆ

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap10">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h5><b>การใช้ปั้นจั่น ใช้อย่างไรให้ปลอดภัย</b></h5><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap10" class="collapse detail_collapse">

                            - น้ำหนักสิ่งของที่ยกจะต้องมีขนาดตามที่กำหนด

                            ก่อนที่จะยกสิ่งของชนิดใดควรทราบก่อนว่าของชนิดนั้นจำกัดน้ำหนักเอาไว้เท่าไหร่

                            เพื่อไม่ให้น้ำหนักเกินมาตรฐานที่กำหนดและเพื่อความปลอดภัยในการทำงาน<br>

                            - ผู้ที่ไม่เกี่ยวข้องไม่ควรเข้าไปในพื้นที่ปฏิบัติงาน

                            ในสถานที่ปฏิบัติงานควรมีแค่ผู้ที่ปฏิบัติงานเท่านั้น

                            ไม่ควรให้ผู้ที่ไม่เกี่ยวข้องเข้ามาในพื้นที่เพราะอาจทำให้เกิดอันตรายได้<br>

                            - สวมใส่ชุดหรืออุปกรณ์เพื่อความปลอดภัย

                            ผู้ปฏิบัติหน้าที่จะต้อวสวมใส่อุปกรณ์เซฟตี้เพื่อความปลอดภัย เช่น ชุดเซฟตี้ หมวกนิรภัย ฯลฯ<br>

                            - มีไหวพริบและสติสัมปชัญญะที่ดี ควรมีสติสัมปชัญญะที่ดีพร้อมสำหรับการทำงาน<br>

                            - ตรวจสอบ ตรวจเช็คระบบต่าง ๆ ให้พร้อมสำหรับการทำงาน ควรตรวจสอบระบบการทำงานต่าง ๆ

                            ก่อนว่าพร้อมสำหรับการทำงานหรือไม่ หากมีอุปกรณ์ชำรุดจะได้แก้ไขทันเวลา<br>

                            - ต้องติดตั้งสัญญาณไฟบอกตำแหน่งก่อนทำงาน

                            หากใช้ปั้นจั่นตอนกลางคืนหรืออยู่ในความสูงจะต้องติดสัญญาณไฟเพื่อบอกตำแหน่งให้เครื่องบินได้ทราบ

                        </div>

                    </button>

                </div>

            </div>

        </div>

    </section>



    <section>

        <?php include('layout/related_article.php'); ?>

    </section>



    <section class="black-bg">

        <div class="container p-b-80 p-t-80 no_br">

            <div class="row">

                <div class="col-md-12 col-12 align-self-center mb-3">

                    <div class="row">

                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">

                            <h4><b>เครน เรียกอีกชื่อหนึ่งว่า “ปั้นจั่น“ | เซฟตี้อินไทย</b></h4>

                            <hr class="hr_green mx-auto hr_fix_width">

                            <h5>“เครน” คือ เครื่องจักรกลที่ใช้ยกสิ่งของหนัก ขึ้นลงตามแนวดิ่ง

                                และเคลื่อนย้ายสิ่งของเหล่านั้น ในลักษณะแขวนลอยไปตามแนวราบ มี 2 แบบ คือ เครนเคลื่อนที่ได้

                                (Mobile Cranes) และเครนเคลื่อนที่ไม่ได้ (Stationary Cranes)</h5>

                            <br>

                            <br>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-12 mb-3" style="position: relative">

                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/hMJ3yfhftks?autoplay=1">

                        <div class="play-youtube-video text-center">

                            <img style="width:100%;max-height:422px;"

                                src="<?php echo $base_url;?>/img/bg/vdo_cover_crane.jpg" alt="">

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

                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/2_YEeJximrc?autoplay=1">

                        <div class="play-youtube-video text-center">

                            <img style="width:100%;max-height:422px;"

                                src="<?php echo $base_url;?>/img/bg/การให้สัญญาณมือ.jpg" alt="">

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







    <section class="white-bg">

        <?php include('layout/course_hot.php'); ?>

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