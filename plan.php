<?php include('header_front.php'); ?>
<?php 
   //ดึงข้อมูลแผนการอบรม
   $stmt = $safetyDb->prepare('SELECT path ,id_branch FROM plan WHERE status = "active" AND del = "false" ORDER BY sequence');
   $stmt->execute();
   $choose_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

   $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
   WHERE status = "active" AND del = "false" 
   HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"');
   $stmt->execute();
   $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

   if(isset($choose_branch)){
        foreach ($choose_branch as $key => $value) {
            $sql = 'SELECT namebranch FROM branch WHERE id_branch = ?';
            $stmt = $bookingDb->prepare($sql);
            $stmt->execute(array($value['id_branch']));
            $namebranch = $stmt->fetch(PDO::FETCH_ASSOC);
            $choose_branch[$key]['namebranch'] = $namebranch['namebranch'];
        }
    }

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
        <?php include('layout/tab_search.php'); ?>
    </div>

    <br>
    <br>
    
    
    <section class="p-t-50 table_plan_of_year">>
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

    <?php include('safety_plan2022.php'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3 order-2 order-md-1">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h1 class="text-center" style="font-weight: 1000;">
                                อบรมและพัฒนาพนักงานด้าน HR
                            </h1>
                            <hr class="hr_green mx-auto hr_fix_width">
                            &emsp;
                            <div class="text-center no_br">
                                ฝึกอบรมและพัฒนาพนักงานประจำปี 2022 ด้านการบริหารทรัพยากรบุคคลรูปแบบ In-house
                                Training & Public Training การบริหารทรัพยากรบุคคล ระดับเบื้องต้น (Preliminary)
                                การบริหารทรัพยากรบุคคลระดับกลาง (Intermediate) และ การบริหารทรัพยากรบุคคล ระดับสูง
                                (Advance)
                            </div>
                            <br><br>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn--medium btn--radius btn--black btn--black-hover-green text-uppercase"
                                    href="https://www.hrodthai.com/">อ่านเพิ่มเติม...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center order-1 order-md-2" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/อบรมHR.png"
                        alt="อบรมHR ผู้ชายถือธงสีแดง">
                </div>
            </div>
        </div>
    </section>

    

    <section class="white-bg">
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section>
        <?php if($choose_branch){ ?>
        <div class="container p-t-80 p-b-80 no_br">
            <h1 class="text-center"><b>แผนฝึกอบรม 2565</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row mb-3 p-t-40">
                <?php 
                foreach($choose_branch as $key=>$value){
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 py-4">
                    <a href="<?php echo $base_url . $value['path'];?>">
                        <div class="box_shadow rounded_card mx-auto pl-3 pr-3 d-flex justify-content-center choose_fix-height effect_lift_up_green"
                            data-aos="fade-up" data-aos-once="true">
                            <div class="row">
                                <div class="col-5 align-self-center">
                                    <div>
                                        <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/mark2.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-7 align-self-center text-center">
                                    <h5>
                                        <b>
                                            <?php 
                                        echo $value['namebranch'];
                                    ?>
                                        </b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
        <?php } ?>
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
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0 ;?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0 ;?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0 ;?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0 ;?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>