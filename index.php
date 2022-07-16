<?php include('header_front.php'); ?>
<?php include('function.php'); ?>

<?php 
$stmt = $safetyDb->prepare('SELECT path,url FROM banner WHERE status = "active" AND del = "false" AND NOW() BETWEEN startDate AND endDate ORDER BY sequence');
$stmt->execute();
$banner = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $bookingDb->prepare('SELECT id_training,topic_training FROM training WHERE id_group = 16 or id_group = 17');//id_group=16,17 คือ หมวด 4 ด้านความปลอดภัยในการทำงาน,หมวด 7 ด้านศูนย์ทดสอบ
$stmt->execute();
$training = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
.dot-gap__X--10 .slick-dots li {
    margin-right: 1vw;
}

.slider-dot-size--medium .slick-dots li button {
    width: 1vw;
    height: 1vw;
}

.text-parallax-l,
.text-parallax-r {
    color: #FFF;
    position: relative;
    opacity: 0;
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
}

.parallax_l:hover,
.text-parallax-l:hover,
.parallax_r:hover,
.text-parallax-r:hover {
    cursor: pointer;
}

.parallax {
    position: relative;
    height: calc(15vw + 200px);
}

.parallax_img {
    width: 50%;
    height: 100%;
    position: absolute;
    background-repeat: no-repeat;
    background-size: cover;
    --myVar: 0;
}

.parallax_img:after {
    background: #19232b;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    content: "";
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
    transition: opacity 0.5s;
    opacity: var(--myVar);
}

@media (max-width: 767px) {
    .nav-header {
        display: none;
    }
}

.people_inhouse {
    position: absolute;
    bottom: 0;
    left: 3vw;
    z-index: 2;
    height: 22vw;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}

/* สำหรับสลับการจัดเรียงแค่หน้านี้     */
.table_plan_of_year .order-1 {
    order: 2 !important;
}

.table_plan_of_year .order-2 {
    order: 1 !important;
}

.table_plan_of_year .order-md-1 {
    order: 2 !important;
}

.table_plan_of_year .order-md-2 {
    order: 1 !important;
}

.padding_top_virtual {
    padding-top: calc(0.5vw + 20px)
}

@media (min-width: 992px) {
    .padding_top_virtual {
        padding-top: calc(1vw + 150px);
    }
}

.a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
}

</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <a href="covid">
        <div class="nav-header">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <span>แนวทางของ SAFETYINTHAI ในการกลับมาเปิดให้บริการในสถานการณ์
                        COVID-19
                    </span>
                </div>
            </div>
        </div>
    </a>
    <!-- ::::::  Start Hero Section  ::::::  -->
    <div class="p-b-30 slider-dot-fix slider-dot slider-dot--center slider-dot-size--medium slider-dot-circle
        slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10" style="position: relative;">
        <div class="hero">
            <?php foreach($banner as $value){?>
            <div class="hero-slider">
                <a target="_blank" rel="noreferrer" href="<?php echo $value['url'];?>" aria-label="โปรโมชัน">
                    <img title="" class="lazy" data-src="<?php echo $base_url . $value['path'];?>" alt="">
                </a>
            </div>
            <?php } ?>
        </div> <!-- ::::::  End Hero Section  ::::::  -->
        <?php include('layout/tab_search.php'); ?>
    </div>

    <br>
    <section class="padding_top_virtual">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3 order-2 order-md-1">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h1 class="text-center" style="font-weight: 1000;">
                            คําประกาศสำคัญ PDPA (CCTV Privacy Notice)
                            </h1>
                            <hr class="hr_green mx-auto hr_fix_width">
                            &emsp;
                            <div class="text-center no_br">
                            ประกาศความเป็นส่วนตัวในการใช้กล้องวงจรปิด ("ประกาศ") ฉบับนี้ให้ข้อมูลเกี่ยวกับการดำเนินการเก็บรวบรวม ใช้หรือเปิดเผย ซึ่งข้อมูลที่สามารถทำให้สามารกระบุตัวท่านได้("ข้อมูลส่วนบุคคล") รวมทั้งสิทธิต่าง ๆ ของท่าน ดังนี้ ประกาศความเป็นส่วนตัวในการใช้กล้องวงจรปิด ("ประกาศ") ฉบับนี้ให้ข้อมูลเกี่ยวกับการดำเนินการเก็บรวบรวม ใช้หรือเปิดเผย ซึ่งข้อมูลที่สามารถทำให้สามารกระบุตัวท่านได้("ข้อมูลส่วนบุคคล") รวมทั้งสิทธิต่าง ๆ ของท่าน ดังนี้ <a class="a-link d-inline"  href="https://www.hrodthai.com/1900107-personal-data-protection"> พ.ร.บ.คุ้มครองข้อมูลส่วนบุคคล หรือ PDPA </a>มีผลบังคับใช้ในวันที่ 1 มิถุนายน 2565
                            </div>
                            
                            <div class="col-lg-5 col-md-6 col-12 mt-5 mx-auto">
                                <a target="_blank" rel="noreferrer"
                                href="<?php echo $base_url . "/pdf/คำประกาศเกี่ยวกับความเป็นส่วนตัวcctv.pdf";?>">
                                <button class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase"> อ่านเพิ่มเติม
                                </button>
                    </a>
                </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-12 mb-3 text-center order-1 order-md-2" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/pdpa-cctv-เซฟตี้อินไทย.png"
                        alt="pdpa-cctv-เซฟตี้อินไทย">
                </div>
            </div>
        </div>
    </section>

    <section class="p-t-50 table_plan_of_year">>
        <?php include('layout/table_plan_of_year.php'); ?>
    </section>

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
                                ฝึกอบรมและพัฒนาพนักงานประจำปี 2022<a class="a-link d-inline" href="https://www.hrodthai.com/top-supervisor"> ด้านการบริหารทรัพยากรบุคคล </a>รูปแบบ In-house
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


    <?php include('safety_plan2022.php'); ?>

    <section class="p-b-80 p-t-80">
        <?php include('layout/standard.php'); ?>
    </section>


   
    <a href="<?php echo $base_url . "/pdf/คำชี้แจงเกี่ยวกับข้อมูลส่วนบุคคล.pdf";?>">
        <section class="section_banner">
            <img alt="ประกาศ PDPA การเก็บข้อมูลของเว็บไซต์เซฟตี้อินไทย" src="<?php echo $base_url; ?>/img/bg/ประกาศ-PDPA-แจ้งนโยบายในการเก็บข้อมูล.jpg">
        </section>
    </a>

    

    <section>
        <div class="parallax d-flex align-items-center">
            <a class="parallax_img parallax_l" href="อบรมด้านความปลอดภัย" data-opacity="0" aria-label="ภาพอบรม"
                style="left:0;background-image: url('<?php echo $base_url;?>/img/bg/อบรมจป.jpg');">
            </a>
            <a class="parallax_img parallax_r" href="ศูนย์ทดสอบฝีมือแรงงาน" data-opacity="0" aria-label="ภาพอบรม"
                style="right:0;background-image: url('<?php echo $base_url;?>/img/bg/การขับรถโฟล์คลิฟท์.jpg');">
            </a>
            <div class="row mx-auto">
                <div class="col-6 d-flex justify-content-center">
                    <span class="text-parallax-l text-center">
                        <h1><b>หมวด 4</b></h1>
                        <h4>ด้านความปลอดภัยในการทำงาน<br>อาชีวอนามัย (Safety)</h4>
                    </span>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <span class="text-parallax-r text-center">
                        <h1><b>หมวด 7</b></h1>
                        <h4>ด้านศูนย์ทดสอบ</h4>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section class="white-bg p-t-30">
        <?php include('layout/contact_inhouse.php'); ?>
    </section>
    
    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>
    
    

    <section class="white-bg p-b-80 p-t-80">
        <div class="container">
            <h2 class="text-center"><b>
                    WELCOME TO เซฟตี้อินไทย
                </b></h2>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h4><b>เกี่ยวกับบริษัทเรา</b></h4>
                            <hr class="hr_green hr_fix_width">
                            บริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จํากัด
                            ก่อตั้ง 17 กันยายน 2549 ศูนย์พัฒนา<a class="a-link d-inline"  href="https://www.hrodthai.com/">ทรัพยากรมนุษย์</a>ภาคตะวันออก ชลบุรี
                            ได้ดำเนินธุรกิจบริการจัดอบรมและสัมมนาโดยได้รับการรับรองระบบการบริหารด้านคุณภาพมาตรฐาน
                            ISO
                            9001
                            version
                            2008
                            และได้ปรับเป็น ISO 9001 version 2015 จาก
                            URS
                            ได้ขึ้นทะเบียนเป็นสถาบันฝึกอบรมการพัฒนาความรู้
                            ปัจจุบันเราได้ดำเนินการมาแล้วมากกว่า 13 ปี
                            <br><br>
                            <div class="d-flex flex-row-reverse">
                                <a class="btn btn--medium btn--radius btn--black btn--black-hover-green text-uppercase"
                                    href="about">อ่านเพิ่มเติม...
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://xn--c3cugh2av8euch0i4b2c.com/eec">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url;?>/img/logo/company-profile-toppro.jpg"
                                alt="สถาบันฝึกอบรมด้านทรัพยากรมนุษย์และความปลอดภัย">
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
    </section>

    <section class="white-bg p-b-80 p-t-80">
        <div class="container">
            <h2 class="text-center" data-aos="fade-down" data-aos-duration="800"><b>ทำไมต้องอบรมกับเรา</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row train_with_me">
                <div class="col-md-4 text-center" data-aos="fade-down" data-aos-duration="1000">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/skills.svg" alt="">
                    <h4><b>วิทยากร</b></h4>
                    <p class="px-5 no_br">ทุกหลักสูตรอบรม
                        เราเลือกวิทยากรที่มีประสบการณ์การทำงานจริง
                        เพื่อความมั่นใจว่าท่านจะสามารถนำความรู้ที่ได้ไปประยุกต์ใช้ในการทำงาน
                    </p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-down" data-aos-duration="2000">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/appointment.svg" alt="">
                    <h4><b>ตารางอบรม</b></h4>
                    <p class="px-5 no_br">แผนการอบรมครอบคลุมตลอดทั้งปี<br>
                        ท่านสามารถเลือกเข้ารับการอบรม<br>ได้ตรงตามวันที่ท่านต้องการ
                    </p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-down" data-aos-duration="3000">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/certificate.svg" alt="">
                    <h4><b>มีใบ certificate</b></h4>
                    <p class="px-5 no_br">
                        เมื่อผ่านการทดสอบหลังจบหลักสูตรอบรม<br>ท่านจะได้รับใบประกาศนียบัตร<br>เพื่อการันตีว่าท่านได้ผ่านการอบรมจริง
                    </p>
                </div>
            </div>
        </div>
    </section>

   

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
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
$(".parallax_l,.text-parallax-l").hover(function() {
    $('.text-parallax-l').css("opacity", "1");
    $('.parallax_l').css('--myVar', '0.95');
}, function() {
    $('.text-parallax-l').css("opacity", "0");
    $('.parallax_l').css('--myVar', '0');
});
$(".parallax_r,.text-parallax-r").hover(function() {
    $('.text-parallax-r').css("opacity", "1");
    $('.parallax_r').css('--myVar', '0.95');
}, function() {
    $('.text-parallax-r').css("opacity", "0");
    $('.parallax_r').css('--myVar', '0');
});
</script>