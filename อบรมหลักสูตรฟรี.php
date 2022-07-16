<?php include('header_front.php'); ?>

<?php
//หา banner
$stmt = $safetyDb->prepare('SELECT path,url FROM banner WHERE status = "active" AND del = "false" AND NOW() BETWEEN startDate AND endDate ORDER BY sequence');
$stmt->execute();
$banner = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <!-- ::::::  Start Hero Section  ::::::  -->
    <div class="p-b-30 slider-dot-fix slider-dot slider-dot--center slider-dot-size--medium slider-dot-circle
        slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10" style="position: relative;">
        <div class="hero">
            <?php foreach ($banner as $value) { ?>
            <div class="hero-slider">
                <a target="_blank" rel="noreferrer" href="<?php echo $value['url']; ?>">
                    <img title="" class="lazy" data-src="<?php echo $base_url . $value['path']; ?>" alt="">
                </a>
            </div>
            <?php } ?>
        </div> <!-- ::::::  End Hero Section  ::::::  -->
    </div>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="white-bg" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">อบรมหลักสูตรฟรี</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">อบรมด้านความปลอดภัย (Safety)ฟรี
                สามารถอบรมได้ทั่วประเทศ สัมมนาออนไลน์ผ่านโปรแกรม ZOOM Online จำนวนจำกัด บริษัทละ 2 ท่าน เท่านั้น
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table1"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section>
        <div class="container_small p-b-80 p-t-80">
            <h2 class="text-center"><b>
                    สิ่งที่ได้รับหลังผ่านการอบรม
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img title="" class="box_shadow" style="height:auto;width:75%"
                        src="<?php echo $base_url; ?>/img/cert/cert_jorpor.jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 text-center m-auto no_br">
                            <h5>
                                เมื่อมาอบรมกับเราท่านจะได้รับ<br>
                                ใบประกาศวุฒิบัตรผ่านการอบรม<br>หรือใบเซอร์อิเล็กทรอนิกส์
                                1 ฉบับ/ท่าน <br>เพียงชำระเงิน 399.-
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="สมัครสมาชิก">
        <section class="section_banner">
            <img alt="" src="<?php echo $base_url; ?>/img/bg/สิทธิพิเศษสำหรับสมัครสมาชิก.jpg">
        </section>
    </a>

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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step1.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step2.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step3.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step4.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step5.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step6.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step7.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step8.png"
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
                    <div class="box_shadow rounded_card p-5 mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure>
                                    <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/step9.png"
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
                <source src="<?php echo $base_url; ?>/img/bg/gallery_slider.mp4" type="video/mp4">
            </video>
            <div class="container_small">
                <div class="row p-t-50 p-b-50">
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url; ?>/img/logo/wallet-filled-money-tool.svg"
                                alt="อบรมจป.ราคาถูก">
                        </figure>
                        <h4><b>ประหยัดกว่า</b></h4>
                        <p>อบรมจป.ได้ในราคาพิเศษลดสูงสุดถึง 47%
                            และสามารถยื่นกรมพัฒนาฝีมือแรงงานได้</b>
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/live.svg" alt="">
                        </figure>
                        <h4><b>สอนสด (Live)</b></h4>
                        <p>การเรียนการสอนแบบสอนสด ตอบโต้กับอาจารย์ผู้สอนได้ตลอดการเรียนรู้
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url; ?>/img/logo/certificate-black.svg" alt="">
                        </figure>
                        <h4><b>ใบประกาศวุฒิบัตร</b></h4>
                        <p>ท่านจะได้รับใบประกาศวุฒิบัตรผ่านการอบรมหรือใบเซอร์อย่างเป็นทางการ 1 ฉบับ
                        </p>
                    </div>
                    <div class="col-lg col-md-6 col-12">
                        <figure>
                            <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/logo/clock.svg" alt="">
                        </figure>
                        <h4><b>ประหยัดเวลา</b></h4>
                        <p>
                            ตัดเรื่องเวลาและค่าใช้จ่ายที่ต้องเสียให้กับการเดินทางทิ้งไปได้เลย
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section>
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

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
$.ajax({
    method: "POST",
    url: "plan_detail.php",
    data: {
        sl_branch: 46,
        sl_group: 21

    },
    success: function(result) {
        $('.table1').html(result);
    }
});
</script>