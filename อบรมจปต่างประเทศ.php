<?php include('header_front.php'); ?>
<?php 
    $stmt = $bookingDb->prepare('SELECT id_training,topic_training FROM training WHERE id_training = 124 OR id_training = 125 OR id_training = 123 OR id_training = 126');
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

    <section class="p-t-160 p-t-50">
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

    <section class="white-bg p-t-80 p-b-80">
        <div class="container">
            <h1 class="text-center"><b>อบรมหลักสูตร เจ้าหน้าที่ความปลอดภัยในการทำงาน ภาษาต่างประเทศ</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="text-center">
                <h5>เราได้เปิดให้บริการครอบคลุมทุกพื้นที่ทั่วประเทศไทยทั้ง 20 สาขา
                    ชลบุรี-ระยอง-มาบตาพุด-กรุงเทพ-นนทบุรี-สมุทรปราการ-ลาดกระบัง-สมุทรสาคร<br>นครปฐม-ปราจีนบุรี-สระบุรี-อยุธยา-นครราชสีมา-ขอนแก่น-อุดรธานี-พิษณุโลก-ลำพูน-เชียงใหม่-สุราษฎร์ธานี-สงขลา<br>ในหลักสูตรจป.หัวหน้างาน
                    จป.บริหาร จป.เทคนิค และคปอ.</h5>
            </div>
            <div class="row mb-3 p-t-40">

                <div class="col-md col-6 mb-3">
                    <a href="คปอeng">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมคปอ-ภาษาอังกฤษ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>อบรม คปอ. (ENG)</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        คณะกรรมการ<br>ความปลอดภัยในการทำงาน อาชีวอนามัย
                                        และสภาพแวดล้อมในการทำงานของสถานประกอบกิจการ (ENG)
                                    </span>
                                </div>
                            </div>
                            <a href="คปอeng"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="จปบริหารจีน">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหารภาคภาษาจีน.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>อบรม จป.บริหารภาคภาษาจีน</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับบริหาร ภาคภาษาจีน
                                    </span>
                                </div>
                            </div>
                            <a href="จปบริหารจีน"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="จปบริหารeng">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url;?>/img/course/อบรมจปบริหาร-ภาษาอังกฤษ.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>อบรม จป.บริหาร (ENGLISH VERSION)</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                        เจ้าหน้าที่ความปลอดภัย<br>ในการทำงาน
                                        ระดับบริหาร (ENGLISH VERSION)
                                    </span>
                                </div>
                            </div>
                            <a href="จปบริหารeng"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
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

    <section>
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <a href="หลักสูตรจปออนไลน์">
        <section class="section_banner_full_width">
            <img alt="" src="<?php echo $base_url;?>/img/bg/bg-covid1.png">
        </section>
    </a>

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
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0 ;?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0 ;?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0 ;?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0 ;?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>