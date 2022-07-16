<?php include('header_front.php'); ?>
<?php
    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND recommend = "active" AND del = "false"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $safetyDb->prepare('SELECT id_training_inhouse,topic_training,detail_training,cover_img,alt,path_pdf FROM training_inhouse 
    WHERE type_training = "TH" AND status = "active" AND del = "false" ORDER BY sequence');
    $stmt->execute();
    $array_thai_course = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    $stmt = $safetyDb->prepare('SELECT id_training_inhouse,topic_training,detail_training,cover_img,alt,path_pdf FROM training_inhouse 
    WHERE type_training = "ENG" AND status = "active" AND del = "false" ORDER BY sequence');
    $stmt->execute();
    $array_eng_course = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

.button_left,
.button_right {
    color: #fff;
    background-color: #19232b;
    height: calc(3vw + 100px);
    cursor: pointer;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}

.button_left:hover,
.button_left.active,
.button_right:hover,
.button_right.active {
    background-color: #22c06c;
}

.course_box {
    border-radius: 15px;
}

@media (min-width: 769px) {
    .course_box {
        position: absolute;
        right: 0;
        bottom: -95px;
        left: 0;
    }
}

.head-fix-height {
    height: calc(0.5vw + 90px);
}

.detail-fix-height {
    height: calc(0.5vw + 120px);
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>
    <!-- ::::::  Start Hero Section  ::::::  -->
    <div style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <div class="container_small course_box box_shadow m-t-30">
            <div class="row">
                <div class="col-md-6 col-12 d-flex align-items-center justify-content-center text-center button_left">
                    <h1>หลักสูตรภาษาไทย</h1>
                </div>
                <div class="col-md-6 col-12 d-flex align-items-center justify-content-center text-center button_right">
                    <h1>หลักสูตรภาษาอังกฤษ</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="p-t-120 p-b-80">
        <div class="container">
            <h2 class="text-center"><b>หลักสูตรอบรมออนไลน์รูปแบบสัมมนา<span id="eng"></span><br>
                    VIRTUAL TRAINING ผ่าน ZOOM</br></b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center no_br">อยู่ที่ไหนก็สามารถเรียนหลักสูตรออนไลน์ผ่านโปรแกรม ZOOM Online
                ประหยัดค่าใช้จ่ายมากกว่าเดิม ผู้เรียนสามารถเรียนผ่านคอมพิวเตอร์ <br>หรือ มือถือได้ตามสะดวก
                ด้วยระบบภาพและเสียงคมชัดสูง Full HD ผู้เรียนสามารถถาม-ตอบได้แบบ Real-Time เสมือนเรียนใน Class
            </h5>
            <br>
            <div class="container_small">
                <div class="row mb-3 p-t-40 thai_course">
                    <?php foreach($array_thai_course as $key=>$value){?>
                    <div class="col-lg-4 col-md-6 col-12 p-4">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure>
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url . $value['cover_img'];?>"
                                            alt="<?php echo $value['alt'];?>">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height content-fix-line">
                                    <h5><b><?php echo $value['topic_training'];?></b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="detail-fix-height">
                                        <?php echo $value['detail_training'];?>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a target="_blank" href="<?php echo $base_url . $value['path_pdf'];?>"
                                    class="col-6 text-white text-center black-bg p-3"><b>รายละเอียดหลักสูตร</b>
                                </a>
                                <a href="https://topprobooking.com/inhouse?id_training=<?php echo $value['topic_training'];?>"
                                    class="col-6 text-white text-center green-bg p-3"><b>จองอบรม</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="row mb-3 p-t-40 eng_course" style="display:none;">
                    <?php foreach($array_eng_course as $key=>$value){?>
                    <div class="col-lg-4 col-md-6 col-12 p-4">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure>
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url . $value['cover_img'];?>"
                                            alt="<?php echo $value['alt'];?>">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center head-fix-height content-fix-line">
                                    <h5><b><?php echo $value['topic_training'];?></b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="detail-fix-height">
                                        <?php echo $value['detail_training'];?>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a target="_blank" href="<?php echo $base_url . $value['path_pdf'];?>"
                                    class="col-6 text-white text-center black-bg p-3"><b>รายละเอียดหลักสูตร</b>
                                </a>
                                <a href="https://topprobooking.com/inhouse?id_training=<?php echo $value['topic_training'];?>"
                                    class="col-6 text-white text-center green-bg p-3"><b>จองอบรม</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </section>

    <a href="หลักสูตรinhouse">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . '/img/bg/banner_inhouse.jpg';?>">
        </section>
    </a>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section class="white-bg p-t-30">
        <?php include('layout/ask_information.php'); ?>
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
$(".button_left").on("click", function() {
    $(".thai_course").show();
    $(".eng_course").hide();
    $("#eng").text("");
    $(this).addClass("active");
    $(".button_right").removeClass("active");
});

$(".button_right").on("click", function() {
    $(".thai_course").hide();
    $(".eng_course").show();
    $("#eng").text("ภาษาอังกฤษ");
    $(this).addClass("active");
    $(".button_left").removeClass("active");
});
</script>