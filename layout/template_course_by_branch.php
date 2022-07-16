<?php include('header_front.php'); ?>
<?php 
    $stmt = $bookingDb->prepare('SELECT id_training,topic_training FROM training WHERE id_training = 124 OR id_training = 125 OR id_training = 179 OR id_training = 123 OR id_training = 126');
    $stmt->execute();
    $training = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $bookingDb->prepare('SELECT namebranch FROM branch WHERE id_branch = ?');
    $stmt->execute(array($id_branch));
    $topic_branch = $stmt->fetchColumn();

    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $stmt = $safetyDb->prepare("SELECT path_banner,alt FROM menu_branch WHERE url_page = ?");
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

@media (max-width: 576px) {
    .tab .nav-tabs li {
        width: 50% !important;
    }
}

.tab .nav-tabs li {
    /* width: 20%; */
    width: 16.66%;
}

html {
    scroll-behavior: smooth;
}

.div_inhouse {
    background-color: #19232b;
}

.btn--black-hover-white {
    background-color: #fff;
    color: #010101;
}

.head-fix-height {
    height: calc(1vw + 50px);
}

.td_left {
    text-align: left !important;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <div class="m-b-50" style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <?php include('layout/tab_search_training.php'); ?>
    </div>

    <section>
        <?php include('layout/dsd.php'); ?>
    </section>

    <section class="padding_bottom">
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

    <section class="p-b-50" style="position:relative">
        <?php include('layout/why_training.php'); ?>
    </section>

    <!-- <section class="white-bg p-t-80 p-b-80 padding_top">
        <div class="container">
            <h1 class="text-center"><b>อบรม จป.หัวหน้างาน บริหาร เทคนิค คปอ. <?php echo $topic_branch;?></b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center no_br">เราได้เปิดให้บริการครอบคลุมทุกพื้นที่ทั่วประเทศไทยทั้ง 20 สาขา<br>
                ชลบุรี-ระยอง-มาบตาพุด-กรุงเทพ-นนทบุรี-สมุทรปราการ-ลาดกระบัง-สมุทรสาคร
                นครปฐม-ปราจีนบุรี-สระบุรี-อยุธยา-นครราชสีมา-ขอนแก่น-อุดรธานี-พิษณุโลก-ลำพูน-เชียงใหม่-สุราษฎร์ธานี-สงขลา
                และยังมีบริการฝึกอบรมสัมนาในรูปแบบอินเฮ้าส์ In-House Training ทั่วประเทศไทย
            </h5>
            <div class="row mb-3 p-t-40">

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab1" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมจปหัวหน้างาน.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.หัวหน้างาน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับหัวหน้างาน
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหาร.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.บริหาร</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับบริหาร
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหาร-ภาษาอังกฤษ.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.บริหาร ENG</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน ระดับบริหาร<br>(ภาษาอังกฤษ)
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
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
                                        <img title="" class="img-fluid img_cover" src="<?php echo $base_url;?>/img/course/อบรมคปอ.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>คปอ.</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
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
                                        <img title="" class="img-fluid img_cover" src="<?php echo $base_url;?>/img/course/อบรมคปอ-ภาษาอังกฤษ.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>คปอ. ENG</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน (ภาษาอังกฤษ)
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปเทคนิค.jpg">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.เทคนิค</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับเทคนิค
                                    </span>
                                </div>
                            </div>
                            <span class="btn-block text-center btn--radius btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">จป.หัวหน้างาน </b><b><?php echo $topic_branch;?></b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมที่ต้องการได้
                โดยเลือกหลักสูตรอบรมจป.หัวหน้างาน จป.บริหาร
                <br>จป.บริหารENG คปอ. หรือจป.เทคนิค ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="text-center" role="presentation"><a data-id_training="124" href="#tab1"
                                    class="active" role="tab" data-toggle="tab"></i>
                                    <h5>จป.หัวหน้างาน</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="125" href="#tab2"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="179" href="#tab3"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร ENG</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="123" href="#tab4"
                                    role="tab" data-toggle="tab">
                                    <h5>คปอ.</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="236" href="#tab5"
                                role="tab" data-toggle="tab">
                                <h5>คปอ. ENG</h5>
                            </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="126" href="#tab6"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.เทคนิค</h5>
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
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="table4"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab5">
                                <div class="table5"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab6">
                                <div class="table6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="white-bg p-t-80 p-b-80 padding_top">
        <div class="container">
            <h1 class="text-center"><b>อบรม จป.หัวหน้างาน บริหาร เทคนิค คปอ. <?php echo $topic_branch;?></b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row mb-3 p-t-40">

                <div class="col-lg col-md-4 col-6 mb-3">
                    <a href="#table_course" data-link="tab1" onclick="return activaTab(this)">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure class="overflow-hidden">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมจปหัวหน้างาน.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.หัวหน้างาน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับหัวหน้างาน
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหาร.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.บริหาร</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับบริหาร
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหาร-ภาษาอังกฤษ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.บริหาร ENG</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน ระดับบริหาร<br>(ภาษาอังกฤษ)
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
                                            src="<?php echo $base_url;?>/img/course/อบรมคปอ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>คปอ.</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน
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
                                            src="<?php echo $base_url;?>/img/course/อบรมคปอ-ภาษาอังกฤษ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>คปอ. ENG</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน<br>(ภาษาอังกฤษ)
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
                                            src="<?php echo $base_url;?>/img/course/อบรมจปเทคนิค.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height">
                                    <h5><b>จป.เทคนิค</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับเทคนิค
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

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section class="white-bg p-b-80 p-t-80" id="table_course">
        <div class="container">
            <h2 class="text-center"><b class="head_nav">จป.หัวหน้างาน ออนไลน์</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมที่ต้องการได้
                โดยเลือกหลักสูตรอบรมจป.หัวหน้างานออนไลน์ จป.บริหารออนไลน์
                <br>จป.บริหารENGออนไลน์ คปอ.ออนไลน์ คปอ.ENGออนไลน์ หรือจป.เทคนิคออนไลน์ ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="text-center" role="presentation"><a data-id_training="285" href="#tab1"
                                    class="active" role="tab" data-toggle="tab"></i>
                                    <h5>จป.หัวหน้างาน ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="286" href="#tab2"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="295" href="#tab3"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร ENG ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="288" href="#tab4"
                                    role="tab" data-toggle="tab">
                                    <h5>คปอ. ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="358" href="#tab5"
                                    role="tab" data-toggle="tab">
                                    <h5>คปอ. ENG ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="287" href="#tab6"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.เทคนิค ออนไลน์</h5>
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
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="table4"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab5">
                                <div class="table5"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab6">
                                <div class="table6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg qualification">
    </section>

    <a href="สมัครสมาชิก">
        <section class="section_banner">
            <img alt="" src="<?php echo $base_url;?>/img/bg/สิทธิพิเศษสำหรับสมัครสมาชิก1900-540.jpg">
        </section>
    </a>

    <section class="white-bg table_schedule">
    </section>

    <section>
        <?php include('layout/why_jorpor.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/table_appointment.php'); ?>
    </section>

    <section>
        <?php include('layout/table_korporor.php'); ?>
    </section>

    <section class="white-bg bg_information">
        <?php include('layout/useful_information.php'); ?>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section>
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <a href="จปออนไลน์">
        <section class="section_banner">
            <img alt="" src="<?php echo $base_url;?>/img/bg/bg-covid1.png">
        </section>
    </a>

    <section>
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section class="black-bg">
        <?php include('layout/video_course.php'); ?>
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
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0 ;?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0 ;?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
function get_qualification(training) {
    $.ajax({
        method: "POST",
        url: "layout/qualification.php",
        data: {
            id_training: training
        },
        success: function(result) {
            $('.qualification').html(result);
        }
    });
}

function get_schedule(training) {
    $.ajax({
        method: "POST",
        url: "layout/schedule_detail.php",
        data: {
            id_training: training
        },
        success: function(result) {
            $('.table_schedule').html(result);
        }
    });
}

get_qualification(124); //แสดง qualification จปหัวหน้างานกรณียังไม่ได้กดหลักสูตรใด
get_schedule(124); //แสดงตาราง schedule จปหัวหน้างานกรณียังไม่ได้กดหลักสูตรใด

$(".nav-tabs li a").each(function(index, value) {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_training: $(this).attr("data-id_training"),
            // sl_branch: $('input[name="sl_branch"]').val()
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
});

function activaTab(tab) {
    $('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').tab('show');
    $(".head_nav").text($('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').text());
    get_qualification($('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').attr("data-id_training"));
    get_schedule($('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').attr("data-id_training"));
};

$(".nav-tabs li a").on("click", function() {
    $(".head_nav").text($(this).text());
    get_qualification($(this).attr("data-id_training"));
    get_schedule($(this).attr("data-id_training"));
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