<?php include('header_front.php'); ?>
<?php 
    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner,alt FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $stmt = $bookingDb->prepare('SELECT id_training,topic_training FROM training WHERE id_training = 285 OR id_training = 286 OR id_training = 287 OR id_training = 288 OR id_training = 358 OR id_training = 295');
    $stmt->execute();
    $training = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //ดึงบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
@media (min-width: 768px) {
    .content_inhouse {
        padding-left: 10vw;
        padding-right: 4vw;
    }
}

.people_inhouse {
    position: absolute;
    bottom: 0;
    right: 3vw;
    z-index: 2;
    height: 22vw;
}

.step-fix-height {
    height: calc(1vw + 130px)
}

html {
    scroll-behavior: smooth;
}

.gallery_slider img {
    filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(189deg) brightness(104%) contrast(106%);
    width: 20%;
}

.head-fix-height {
    height: calc(1vw + 50px);
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

    <div class="m-b-50" style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <div class="tab_search">
            <form method="post" id="form_search" action="course_search" enctype="multipart/form-data">
                <div class="container_small search_box box_shadow pt-4 pb-3">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2><b>ค้นหาหลักสูตรออนไลน์</b></h2>
                        </div>
                    </div>
                    <div class="row mb-3 px-4">
                        <div class="col-lg-8 col-12 mb-3">
                            <div class="row m-0 border_gradient">
                                <div class="col-md-8 col-12 border-right">
                                    <select class="form-control" name="sl_training" id="sl_training">
                                        <option></option>
                                        <?php foreach($training as $value){?>
                                        <option value="<?php echo $value['id_training'];?>">
                                            <?php echo $value['topic_training'];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <select class="form-control" name='sl_month' id="sl_month">
                                        <option></option>
                                        <option value='1'>มกราคม</option>
                                        <option value='2'>กุมภาพันธ์</option>
                                        <option value='3'>มีนาคม</option>
                                        <option value='4'>เมษายน</option>
                                        <option value='5'>พฤษภาคม</option>
                                        <option value='6'>มิถุนายน</option>
                                        <option value='7'>กรกฎาคม</option>
                                        <option value='8'>สิงหาคม</option>
                                        <option value='9'>กันยายน</option>
                                        <option value='10'>ตุลาคม</option>
                                        <option value='11'>พฤศจิกายน</option>
                                        <option value='12'>ธันวาคม</option>
                                    </select>
                                </div>
                                <input type="hidden" value="22" name="sl_group">
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 align-self-center">
                            <button
                                class="btn btn-block btn--medium btn--radius btn--transparent btn--green btn--green-hover-black font--light text-uppercase">
                                <i class="fas fa-search"></i>
                                &nbsp;ค้นหา
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <br><br>
    <section class="p-t-50">
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

    <section class="p-t-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/course-online.png" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h1 class="text-center" style="font-weight: 1000;">
                                อบรม จป.ออนไลน์<br>

                            </h1>
                            <hr class="hr_green mx-auto hr_fix_width">
                            &emsp;
                            <div class="text-center no_br">
                                <b>หลักสูตรเจ้าหน้าที่ความปลอดภัยในการทำงาน</b>
                                อยู่ที่ไหนก็สามารถเรียนหลักสูตรออนไลน์ผ่านโปรแกรม ZOOM Online
                                ประหยัดค่าใช้จ่ายมากกว่าเดิม
                                ผู้เรียนสามารถเรียนผ่านคอมพิวเตอร์หรือมือถือได้ตามสะดวก
                                ด้วยระบบภาพและเสียงคมชัดสูง Full HD อีกด้วย
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg p-t-80 p-b-80">
        <div class="container">
            <h2 class="text-center"><b>หลักสูตรออนไลน์</b></h2>
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
            <h5 class="text-center" ><b style="color:red;">นายจ้างต้องแจ้งขึ้นทะเบียนต่อกรมสวัสดิการและคุ้มครองแรงงาน ก่อนกฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานฯ มีผลบังคับใช้ (วันที่ 16 ส.ค.65)</b></h5>
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

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/RKRVvgvpXB0?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/bg/หน้าปก-จปคืออะไร.jpg"
                                alt="จป.คืออะไร">
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
                            <h4><b>จป.คืออะไร ?</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5 class="no_br">จป. คือ เจ้าหน้าที่ความปลอดภัยในการทำงาน
                                เป็นบุคลากรทางด้านอาชีวอนามัยและความปลอดภัย
                                ที่กฏหมายกำหนด</h5>
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

    <section class="white-bg qualification">
    </section>

    <section>
        <?php include('layout/received.php'); ?>
    </section>

    <section class="white-bg p-t-80 p-b-80">
        <div class="container">
            <h2 class="text-center"><b>เงื่อนไขการรับวุฒิบัตร</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center" style="line-height: 2rem;">เพียงแค่คุณเข้าร่วมรับฟังการอบรมสัมมนาออนไลน์
                ตามจำนวนชั่วโมงที่กฎหมายกำหนด
                <br>หลังจากผ่านการทดสอบ คุณก็รอรับวุฒิบัตรที่บ้านได้เลย
            </h5>
            <div class="row mb-3 p-t-40">

                <div class="col-lg col-md-6 col-8 mb-3 mx-auto">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/course-online1.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 condition-fix-height">
                            <div class="row text-center">
                                <h5>1. ลงทะเบียน</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-6 col-8 mb-3 mx-auto">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/course-online2.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 condition-fix-height">
                            <div class="row text-center">
                                <h5>2. ทำแบบทดสอบ<br>
                                    วัดความรู้ก่อนอบรม</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-6 col-8 mb-3 mx-auto">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/course-online3.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 condition-fix-height">
                            <div class="row text-center">
                                <h5>3. เข้ารับการอบรม<br>
                                    ตามที่กฏหมายกำหนด</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-6 col-8 mb-3 mx-auto">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/course-online4.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 condition-fix-height">
                            <div class="row text-center">
                                <h5>4. ทำแบบทดสอบ<br>
                                    หลังอบรม
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-6 col-8 mb-3 mx-auto">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/course-online5.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 condition-fix-height">
                            <div class="row text-center">
                                <h5>5. รอรับวุฒิบัตร</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="black-bg">
        <?php include('layout/howto_zoom.php'); ?>
    </section>

    <section class="p-t-80 p-b-50">
        <div class="container_small">
            <h2 class="text-center"><b>ขั้นตอนเข้ารับการอบรมออนไลน์</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up  p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step1.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>1. ท่านต้องมีบัตรประจำตัวประชาชน</b></h4>
                            </h4>
                            <p>
                                หรือเอกสารที่ราชการออกให้
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step2.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>2. เปิดกล้องตลอดการอบรม</b></h4>
                            </h4>
                            <p>
                                1 ท่าน/เครื่อง เพื่อยืนยันตัวตนตลอดการอบรม
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step3.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>3. ลงทะเบียนเข้ารับการอบรม</b></h4>
                            </h4>
                            <p>
                                รอบเช้า 8:00-8:30 | รอบบ่าย 12:30-13:00
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step4.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>4. ทำแบบทดสอบวัดความรู้ก่อนการอบรม</b></h4>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step5.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>5.เข้ารับการอบรม</b></h4>
                            </h4>
                            <p>
                                ระยะเวลาตามที่กฎหมายกำหนด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step6.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>6. ระหว่างการอบรม</b></h4>
                            </h4>
                            <p>
                                จะมีการสุ่มเช็คชื่อ โดยการจับภาพหน้าจอ
                                หากท่านไม่อยู่ ขอตัดสิทธิ์ในการแจกวุฒิบัตร
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step7.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>7. ผู้มีสิทธิ์เข้ารับการอบรม</b></h4>
                            </h4>
                            <p>
                                จะต้องเป็นผู้ที่มีรายชื่อในใบลงทะเบียนเท่านั้น
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step8.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>8. USERNAME ให้เปลี่ยนเป็นชื่อ-นามสกุล</b></h4>
                            </h4>
                            <p>
                                ให้ใช้ชื่อ-นามสกุลจริงตามบัตรประจำตัวประชาชน
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/step9.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="row text-center step-fix-height">
                            <h4><b>9. ทำการทดสอบหลังการอบรม</b></h4>
                            </h4>
                            <p>
                                ผ่านเกณฑ์การทดสอบ 60% ขึ้นไป
                                หากไม่ผ่านเกณฑ์จะไม่ได้รับวุฒิบัตร
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="container-fluid p-t-80 color-white gallery_slider">
            <h2 class="text-center"><b>ภาพบรรยากาศในการอบรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <video autoplay loop preload="none" style="width: 100%;-webkit-filter: grayscale(0%);" muted plays-inline>
                <source src="<?php echo $base_url;?>/img/bg/gallery_slider.mp4" type="video/mp4">
            </video>
            <div class="container_small">
                <div class="row p-t-50 p-b-50">
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url;?>/img/logo/wallet-filled-money-tool.svg" alt="">
                        </figure>
                        <h4><b>ประหยัดกว่า</b></h4>
                        <p>อบรมจป.ได้ในราคาพิเศษลดสูงสุดถึง 47%
                            และสามารถยื่นกรมพัฒนาฝีมือแรงงานได้</b>
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/live.svg" alt="">
                        </figure>
                        <h4><b>สอนสด (Live)</b></h4>
                        <p>การเรียนการสอนแบบสอนสด ตอบโต้กับอาจารย์ผู้สอนได้ตลอดการเรียนรู้
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/certificate-black.svg"
                                alt="">
                        </figure>
                        <h4><b>ใบประกาศวุฒิบัตร</b></h4>
                        <p>ท่านจะได้รับใบประกาศวุฒิบัตรผ่านการอบรมหรือใบเซอร์อย่างเป็นทางการ 1 ฉบับ
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/clock.svg" alt="">
                        </figure>
                        <h4><b>ประหยัดเวลา</b></h4>
                        <p>
                            ตัดเรื่องเวลาและค่าใช้จ่ายที่ต้องเสียให้กับการเดินทางทิ้งไปได้เลย
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section class="white-bg">
        <?php include('layout/related_article.php'); ?>
    </section>

    <section>
        <?php include('layout/ask_information.php'); ?>
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

get_qualification(124); //แสดง qualification จปหัวหน้างานกรณียังไม่ได้กดหลักสูตรใด

$(".nav-tabs li a").each(function(index, value) {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_training: $(this).attr("data-id_training"),
            sl_group: 22
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
});

$(".nav-tabs li a").on("click", function() {
    $(".head_nav").text($(this).text());
    get_qualification($(this).attr("data-id_training"));
});

function activaTab(tab) {
    $('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').tab('show');
    $(".head_nav").text($('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').text());
    get_qualification($('.nav-tabs a[href="#' + tab.getAttribute("data-link") + '"]').attr("data-id_training"));
};
</script>