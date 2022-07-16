<?php include('header_front.php'); ?>
<?php
 $stmt = $bookingDb->prepare('SELECT id_training,topic_training FROM training WHERE id_training = 285 OR id_training = 286 OR id_training = 287 OR id_training = 288 OR id_training = 358 OR id_training = 295');
 $stmt->execute();
 $training = $stmt->fetchAll(PDO::FETCH_ASSOC);


//ดึงข้อมูลบทความที่เกี่ยวข้อง
$stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"');
$stmt->execute();
$related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

//หา banner
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
$stmt = $safetyDb->prepare($sql);
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

html {
    scroll-behavior: smooth;
}

.h_fix-height {
    height: calc(0.5vw + 60px);
}
.tab .nav-tabs li {
    width: 16.66%;
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

    <section class="p-t-160 p-t-50">
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

    <section class="white-bg p-t-80 p-b-80">
        <div class="container">
            <h1 class="text-center"><b>อบรม จป.หัวหน้างาน จป.บริหาร จป.เทคนิค คปอ.</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="text-center">
                <h5>เราได้เปิดให้บริการครอบคลุมทุกพื้นที่ทั่วประเทศไทยทั้ง 20 สาขา
                    ชลบุรี-ระยอง-มาบตาพุด-กรุงเทพ-นนทบุรี-สมุทรปราการ-ลาดกระบัง-สมุทรสาคร<br>นครปฐม-ปราจีนบุรี-สระบุรี-อยุธยา-นครราชสีมา-ขอนแก่น-อุดรธานี-พิษณุโลก-ลำพูน-เชียงใหม่-สุราษฎร์ธานี-สงขลา<br>ในหลักสูตรจป.หัวหน้างาน
                    จป.บริหาร จป.เทคนิค และคปอ.</h5>
            </div>
            <div class="row mb-3 p-t-40">

                <div class="col-md col-6 mb-3">
                    <a href="จปหัวหน้างาน">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/อบรมจปหัวหน้างาน.jpg"
                                            alt="อบรมจปหหัวหน้างาน">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>จป.หัวหน้างาน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับหัวหน้างาน
                                    </span>
                                </div>
                            </div>
                            <a href="จปหัวหน้างาน"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="จปบริหาร">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/อบรมจปบริหาร.jpg" alt="จปบริหาร">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>จป.บริหาร</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับบริหาร
                                    </span>
                                </div>
                            </div>
                            <a href="จปบริหาร"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="คปอ">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/อบรมคปอ.jpg" alt="คปอ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>คปอ.</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน
                                    </span>
                                </div>
                            </div>
                            <a href="คปอ"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="จปเทคนิค">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/อบรมจปเทคนิค.jpg" alt="จปเทคนิค">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>จป.เทคนิค</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับเทคนิค
                                    </span>
                                </div>
                            </div>
                            <a href="จปเทคนิค"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

            </div>
        </div>
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
            <h5 class="text-center" ><b style="color:red;">นายจ้างต้องแจ้งขึ้นทะเบียนต่อกรมสวัสดิการและคุ้มครองแรงงาน ก่อนกฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานฯ มีผลบังคับใช้ (วันที่ 16 ส.ค.65)</b></h5>
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

    <section>
        <?php include('layout/why_jorpor.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/prepare.php'); ?>
    </section>


<section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/RKRVvgvpXB0?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/bg/หน้าปก-จปคืออะไร.jpg"
                                alt="จปคืออะไร">
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

    <section class="white-bg">
        <?php include('layout/table_appointment.php'); ?>
    </section>

    <section>
        <?php include('layout/table_korporor.php'); ?>
    </section>

 <section class="white-bg bg_information">

        <div class="container p-b-80 p-t-80">

            <h1 class="text-center"><b>

                    ข้อมูลเกี่ยวกับจป. ที่เป็นประโยชน์

                </b></h1>

            <hr class="hr_green mx-auto hr_fix_width">

            <br>

            <div class="row information">

                <div class="col-md-6 col-12 my-3 ">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap1">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h3><b>กรรมการความปลอดภัย คือ</b></h3><i

                                class="fas fa-plus"></i>

                        </div>

                        <div id="collap1" class="collapse detail_collapse">

                            “กรรมการความปลอดภัย” หมายความว่า กรรมการความปลอดภัย อาชีวอนามัย
และสภาพแวดล้อมในการทำงานของสถานประกอบกิจการ ตาม กฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานบุคลากร หน่วยงาน หรือคณะบุคคลเพื่อดำเนินการด้านความปลอดภัยในสถานประกอบกิจการ พ.ศ. 2565

                        </div>

                    </button>

                </div>



                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap2">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h3><b>คณะกรรมการความปลอดภัย คือ</b></h3><i

                                class="fas fa-plus"></i>

                        </div>

                        <div id="collap2" class="collapse detail_collapse">

                            “คณะกรรมการความปลอดภัย” หมายความว่า คณะกรรมการความปลอดภัย อาชีวอนามัย
และสภาพแวดล้อมในการทำงานของสถานประกอบกิจการ ตาม กฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานบุคลากร หน่วยงาน หรือคณะบุคคลเพื่อดำเนินการด้านความปลอดภัยในสถานประกอบกิจการ พ.ศ.2565

                        </div>

                    </button>

                </div>

                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap3">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h3><b>ผู้แทนนายจ้างระดับบริหาร คือ</b></h3><i

                                class="fas fa-plus"></i>

                        </div>

                        <div id="collap3" class="collapse detail_collapse">

                            “ผู้แทนนายจ้างระดับบริหาร” หมายความว่า ลูกจ้างซึ่งเป็นผู้บริหารซึ่งมีหน้าที่และอำนาจ
ทำการแทนนายจ้างในการจ้าง การเลิกจ้าง การให้บำเหน็จ การลงโทษ หรือการวินิจฉัยข้อร้องทุกข์
และได้รับมอบหมายเป็นหนังสือให้เป็นผู้แทนนายจ้างระดับบริหารเพื่อปฏิบัติให้เป็นไป ตาม กฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานบุคลากร หน่วยงาน หรือคณะบุคคลเพื่อดำเนินการด้านความปลอดภัยในสถานประกอบกิจการ พ.ศ.2565


                        </div>

                    </button>

                </div>



                <div class="col-md-6 col-12 my-3">

                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"

                        data-toggle="collapse" data-target="#collap4">

                        <div class="d-flex justify-content-between align-items-center head_collap">

                            <h3><b>หน่วยงานความปลอดภัย คือ</b></h3><i class="fas fa-plus"></i>

                        </div>

                        <div id="collap4" class="collapse detail_collapse">

                            “หน่วยงานความปลอดภัย” หมายความว่า หน่วยงานความปลอดภัย อาชีวอนามัย และ
สภาพแวดล้อมในการทำงาน ตาม กฎกระทรวงการจัดให้มีเจ้าหน้าที่ความปลอดภัยในการทำงานบุคลากร หน่วยงาน หรือคณะบุคคลเพื่อดำเนินการด้านความปลอดภัยในสถานประกอบกิจการ พ.ศ.2565

                        </div>

                    </button>

                </div>

    </section>

    <section>
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/food.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
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

</script>