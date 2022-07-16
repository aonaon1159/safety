<?php include('header_front.php'); ?>
<?php 

    //ดึงข้อมูล job
    $stmt = $safetyDb->prepare("SELECT name,description,alt,path
    FROM job 
    WHERE status = 'active' AND del = 'false'");
    $stmt->execute();
    $job = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

.vbox-content {
    padding: 20px 10% !important;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <section class="section_banner_full_width">
        <img alt="ร่วมงานกับเรา" src="<?php echo $base_url;?>/img/bg/ร่วมงานกับเราที่toppro.jpg">
    </section>

    <?php if($job){//มีตำแหน่งเปิดรับสมัครหรือไม่?>
    <section class="p-b-80 p-t-80">
        <div class="container_small">
            <h2 class="text-center"><b>ตำแหน่งงานที่เปิดรับสมัคร</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                หากท่านสนใจตำแหน่งงานที่กำลังเปิดรับสมัครท่านสามารถร่วมงานกับทางเราได้โดยการส่งเมลมายังบริษัทของเราข้างล่างนี้
            </h5>
            <br>

            <?php foreach($job as $key => $value){?>
            <div class="row mb-3 p-t-40" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                <div class="col-lg-12 mb-4">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto d-flex align-items-center">
                        <div class="row">
                            <div class="col-md-4 col-12 align-self-center text-center">
                                <a class="venobox" data-gall="cert" href="<?php echo $base_url . $value['path'];?>">
                                    <div class="text-center">
                                        <img title="" class="img-fluid rounded_card img-job"
                                            src="<?php echo $base_url . $value['path'];?>"
                                            alt="<?php echo $value['alt'];?>">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-5 col-12 p-4 align-self-center">
                                <h3><b><?php echo $value['name'];?></b></h3>
                                <?php echo $value['description'];?>
                            </div>
                            <div class="col-md-3 col-12 pb-4 text-center align-self-center">
                                <a href="mailto:hrtoppro@topprobooking.com">
                                    <button class="btn btn--medium btn--green btn--green-hover-black btn--radius">
                                        สมัครงาน
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </section>
    <?php }?>

    <section class="p-t-10">
        <div class="div_inhouse d-flex align-items-center">
            <img title="" class="lazy people_inhouse" data-src="<?php echo $base_url;?>/img/bg/people_inhouse.png"
                alt="">

            <div class="content_inhouse d-flex align-items-center text-center color-white">
                <div>
                    <h2>
                        <b>
                            ร่วมงานกับเรา
                        </b>
                    </h2>
                    <h3>TOPPRO เปิดโอกาสให้บุคคลหลากหลายสาขาวิชาชีพ</h3>
                    <h3>ที่มีศักยภาพ และต้องการความก้าวหน้า มาร่วมสร้างความสำเร็จ</h3>
                    <h3>พัฒนาสถาบันฝึกอบรมด้านความปลอดภัย ให้เติบโตอย่างมั่นคงและยั่งยืน</h3>
                    <h3>
                        <a class="color-white" href="mailto:hrtoppro@topprobooking.com">
                            hrtoppro@topprobooking.com
                        </a>
                        โทร
                        <a class="color-white" href="tel:033135009">033-135-009</a>
                    </h3>
                </div>
            </div>
            <a href="mailto:hrtoppro@topprobooking.com">
                <button class="mr-4 btn btn--medium btn--black-hover-white btn--radius">
                    ติดต่อเรา
                </button>
            </a>
        </div>
    </section>

    <section class="white-bg p-b-80 p-t-80">
        <div class="container">
            <h2 class="text-center"><b>
                    WELCOME TO SAFETYINTHAI
                </b></h2>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h4><b>เกี่ยวกับบริษัทเรา</b></h4>
                            <hr class="hr_green hr_fix_width">
                            บริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จํากัด
                            ก่อตั้ง 17 กันยายน 2549 ศูนย์พัฒนาทรัพยากรมนุษย์ภาคตะวันออก ชลบุรี
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/LpQsJQDepyk?autoplay=1">
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
            </div>
        </div>
    </section>

    <section class="p-b-80 p-t-80">
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
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
$(".direction").html(
    "ร่วมเป็นส่วนหนึ่งกับเรา ได้แล้ววันนี้ที่ TOPPRO "
);
</script>