<?php include('header_front.php'); ?>
<?php
$id_training = 154; //ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร

//หา course outline 
$stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
$stmt->execute(array($id_training));
$url_course_outline = $stmt->fetchColumn();

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

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h1 class="text-center"><b>อบรม ทดสอบช่างไฟฟ้าภายในอาคาร ระดับ 1</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery7.jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ประกาศกระทรวงแรงงาน เรื่อง กำหนดสาขาอาชีพ
                                ที่อาจเป็นอันตรายต่อสาธารณะซึ่งต้องดำเนินการโดยผู้ได้รับ
                                หนังสือรับรองความรู้ความสามารถ โดยกำหนดให้
                                สาขาอาชีพช่างไฟฟ้าอิเล็กทรอนิกส์และคอมพิวเตอร์
                                สาขาช่างไฟฟ้าภายในอาคาร
                                เป็นสาขาอาชีพที่อาจเป็นอันตรายต่อสาธารณะซึ่งต้องดำเนินการโดยผู้ได้รับหนังสือรับรองความรู้ความสามารถ
                                ตามพระราชบัญญัติส่งเสริมการพัฒนาฝีมือแรงงาน พ.ศ. 2545 และที่แก้ไขเพิ่มเติม
                                ประกาศกระทรวงแรงงานฉบับ
                                ดังกล่าวกำหนดให้มีผลใช้บังคับ เมื่อพ้นกำหนด 365
                                วันนับแต่วันประกาศในราชกิจจานุเบกษาเป็นต้นไปจึงมีผลใช้บังคับตั้งแต่วันที่ 26 ตุลาคม 2559
                                เป็นต้นไป
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
                                สาขาช่างไฟฟ้าภายในอาคาร หมายถึง ช่างซึ่งประกอบอาชีพในงานติดตั้งระบบไฟฟ้า
                                และอุปกรณ์ไฟฟ้าภายในอาคาร
                                การแก้ไขปัญหาข้อบกพร่อง และการตรวจสอบระบบไฟฟ้าภายในอาคาร
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery8.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <div class="why_training_box container_small p-b-80">
            <div class="row mb-3 p-t-40">
                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/ค่าลงทะเบียน.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="why-fix-height">
                            <div class="text-center">
                                ค่าลงทะเบียน<br>
                                ราคา 4,000 บาท<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto scale text-center">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/paper.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="p-2 why-fix-height scale-text">
                            <div class="text-center">
                                ดาวน์โหลดเอกสารการอบรมหลักสูตร ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร
                            </div>
                            <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">
                                <button class="btn btn--small btn--radius btn--green btn--green-hover-black font--light
                                    text-uppercase p-2 mt-2">
                                    เอกสารการอบรม
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/certificate.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="why-fix-height">
                            <div class="text-center">
                                เมื่อมาอบรมกับเราท่านจะได้รับ<br>
                                ใบประกาศวุฒิบัตรผ่านการอบรม
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">อบรมช่างไฟฟ้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table1" data-id_training="<?php echo $id_training; ?>"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy"
                    data-src="<?php echo $base_url; ?>/img/template_gallery/gallery_electric (6).jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        กฎหมายใหม่ล่าสุดกำหนดให้ผู้ที่ประกอบอาชีพช่างไฟและผู้ที่ทำงานเกี่ยวกับไฟฟ้า
                        ซึ่งเป็นผู้ประกอบอาชีพที่ก่อให้เกิดอันตรายต่อ
                        สาธารณะได้จะต้องมีหนังสือรับรองความรู้ความสามารถ หากช่างไฟฟ้าทำงานโดยไม่มีหนังสือรับรองฯนี้จะ
                        ผิดกฎหมาย มีโทษปรับนายจ้าง 30,000 บาท ปรับผู้ปฏิบัติงาน 5,000 บาท
                        ทั้งนี้ กฎหมายมีผลบังคับ ใช้ตั้งแต่วันที่ 26 ตุลาคม 2559 เป็นต้นไป ดังนั้น
                        ผู้ว่าจ้างผู้ประกอบอาชีพหรือ
                        ทำงานเกี่ยวกับระบบไฟฟ้าดังกล่าวต้องมีหนังสือรับรองฯ ตามกฎหมายบังคับ
                        เพื่อให้ “สอบผ่าน” การทดสอบมาตรฐานฝีมือแรงานและได้รับหนังสือรับรองความรู้ ความสามารถ
                        (License) ตามกฎหมาย ใหม่ล่าสุด !!! บังคับ ตุลาคม 2559
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">
                            <button
                                class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                                เอกสารการอบรม
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/schedule_detail.php'); ?>
    </section>

    <section>
        <?php include('layout/qualification.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="black-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3" data-aos="fade-right" data-aos-duration="1000">
                    <img style=" width:85%;" class="img-fluid"
                        src="<?php echo $base_url; ?>/img/bg/เอกสารการอบรมไฟฟ้า2.png" alt="เอกสารการอบรมไฟฟ้า">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>เอกสารที่ต้องใช้การอบรม</b>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <ul>
                            <br>
                            <li><i class="fas fa-check-circle"></i>
                                1. แบบ คร.10 คำขอหนังสือรับรองความรู้ความสามารถ
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                2. รูปถ่าย ขนาด 1 x 1.5 นิ้ว จำนวน 2 รูป</li>
                            <li><i class="fas fa-check-circle"></i>
                                3. สำเนาบัตรประจำตัวประชาชน
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                4. สำเนาใบรับรองผู้ผ่านทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                5. ใบรับรองประสบการณ์การทำงาน</li>
                            <li><i class="fas fa-check-circle"></i>
                                6. ใบรับรองผ่านการอบรม สัมมนา และประสบการณ์ด้านอื่นๆ
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                7. สำเนาวุฒิการศึกษา
                            </li>
                        </ul>
                        <br><br>
                        <p>
                            หมายเหตุ เอกสารรายการสำดับที่ 4-7 สามารถใช้ข้อมูลจากสมุดประจำตัวแทนได้
                            โดยไม่ต้องแสดงเอกสาร
                            หลักฐานช้ำอีก<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;
        include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/cert_skilled_labor.php'); ?>
    </section>



    <section class="white-bg">
        <div class="row mx-auto no_br">
            <div class="col-12 mb-3">
                <div class="d-flex green-bg div_gallery">
                    <div class="col-5 text-center align-self-center text_gallery">
                        <h2>ภาพบรรยากาศอบรม</h2>
                        <hr class="hr_green mx-auto" style="color: #fff !important;height: 2px !important;width:30%;">
                        <h5>อบรมด้านความปลอดภัยในการทำงานฯ และอบรมจป. <br>เน้นทำ Workshop
                            ให้ได้ลงมือทำจริงในห้องเรียน <br>ท่ามกลางบรรยากาศการเรียนที่เป็นกันเอง
                            <br>เรียนรู้แบบแลกเปลี่ยนความคิดเห็นและ<br>สามารถนำไปใช้ได้จริงในการทำงาน
                        </h5>
                    </div>
                    <div class="col-7">
                        <img style="width:100%;height:100%;"
                            src="<?php echo $base_url; ?>/img/template_gallery/gallery_electric (12).jpg" alt="">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for ($i = 1; $i <= 51; $i++) { ?>
                    <div>
                        <img src="<?php echo $base_url; ?>/img/template_gallery/gallery_electric (<?php echo $i; ?>).jpg"
                            alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-12 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            <h4><b>ช่างไฟฟ้า | เซฟตี้อินไทย</b></h4>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>ประกาศกระทรวงแรงงาน ตามพระราชบัญญัติส่งเสริมการพัฒนาฝีมือแรงงาน พ.ศ.
                                2545 และที่แก้ไขเพิ่มเติม
                                ให้สาขาช่างไฟฟ้าภายในอาคารเป็นสาขาอาชีพที่อาจเป็นอันตรายต่อสาธารณะซึ่งต้องดำเนินการโดยผู้ได้รับหนังสือรับรองความรู้ความสามารถ
                                หากฝ่าฝืนทำงานโดยไม่มีหนังสือรับรองจะมีความผิดตามกฎหมาย โทษปรับไม่เกิน 5,000 บาท
                                ส่วนนายจ้างที่ฝ่าฝืนจ้างช่างไฟฟ้าภายในอาคารที่ไม่มี หนังสือรับรองเข้าทำงานโทษปรับไม่เกิน
                                30,000 บาท โดยมีผลบังคับใช้ตั้งแต่วันที่ 26 ตุลาคม 2559 เป็นต้นมา</h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/AI8GwADH2Kw?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/อบรม ไฟฟ้าภายในอาคาร ระดับ 1.jpg"
                                alt="อบรม ไฟฟ้าภายในอาคาร ระดับ 1">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/17m9unwAADs?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/ภัยอันตรายที่เกิดจากไฟฟ้า.jpg"
                                alt="ภัยอันตรายที่เกิดจากไฟฟ้า">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/qLLEFZySOj0?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/กฎหมายที่เกี่ยวข้องกับการใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคล PPE  LAW BOOK PODCAST EP8.jpg"
                                alt="">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/u7mo47eGRNI?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/กฎหมายที่เกี่ยวข้องกับการทำงานไฟฟ้า.jpg"
                                alt="กฎหมายที่เกี่ยวข้องกับการทำงานไฟฟ้า">
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

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    ทดสอบระบบไฟฟ้าภายในอาคาร
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 text-center article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างไฟฟ้า-06.jpg" alt="">
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
                            <h5 class="text-left"><b>การรับรองความรู้ความสามารถ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การรับรองความรู้ความสามารถในการประกอบอาชีพของบุคคลที่ผ่านการประเมินในแต่ละระดับตามที่
                            คณะกรรมการประกาศกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>หนังสือรับรองความรู้ความสามารถ คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            หนังสือที่ออกให้แก่บุคคลที่ผ่านการรับรองความรู้ความสามารถ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>คุณสมบัติผู้ที่จะยื่นคำขอมีบัตรประจำตัวช่างไฟฟ้าภายในอาคาร
                                    มีอะไรบ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            (1) ผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ สาขาช่างไฟฟ้าภายในอาคาร<br>
                            (2) มีประสบการณ์การทำงานในสาขาอาชีพที่เกี่ยวข้องกับการประเมิน<br>
                            (3) มีคุณลักษณะส่วนบุคคลที่เหมาะสมในสาขาอาชีพที่ขอรับการประเมิน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>เอกสารที่ต้องใช้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) แบบ คร.10 คำขอหนังสือรับรองความรู้ความสามารถ<br>
                            (2) รูปถ่าย ขนาด 1 x 1.5 นิ้ว จำนวน 2 รูป<br>
                            (3) สำเนาบัตรประจำตัวประชาชน<br>
                            (4) สำเนาใบรับรองผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ<br>
                            (5) ใบรับรองประสบการณ์การทำงาน<br>
                            (6) ใบรับรองผ่านการอบรม สัมมนา และประสบการณ์ด้านอื่นๆ<br>
                            (7) สำเนาวุฒิการศึกษา<br>
                            หมายเหตุ เอกสารรายการลำดับที่ 4-7 สามารถใช้ข้อมูลจากสมุดประจำตัวแทนได้ โดยไม่ต้องแสดงเอกสาร
                            หลักฐานซ้ำอีก

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>เกณฑ์การประเมิน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ผู้เข้ารับการประเมินจะต้องมีคะแนนการประเมิน ตั้งแต่ 85 คะแนนขึ้นไป
                            โดยแบ่งเกณฑ์การประเมินดังนี้<br>
                            (1) ผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ 50 คะแนน<br>
                            (2) มีประสบการณ์การทำงาน / คุณวุฒิทางการศึกษา / ประสบการณ์การทำงาน / การอบรม สัมมนา 25
                            คะแนน<br>
                            (3) คุณลักษณะส่วนบุคคล 25 คะแนน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>การทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ สาขาช่างไฟฟ้าภายในอาคาร</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            อาศัยอำนาจตามความในมาตรา 22 วรรคสาม แห่งพระราชบัญญัติส่งเสริมการพัฒนาฝีมือแรงงาน พ.ศ.2545
                            คณะกรรมการส่งเสริมการพัฒนาฝีมือแรงงาน จึงกำาหนดคุณสมบัติของผู้เข้ารับการทดสอบ
                            สาขาอาชีพช่างไฟฟ้า
                            ภายในอาคาร ไว้ดังนี้<br>
                            (1) มีอายุ 18 ปีบริบูรณ์ (นับถึงวันยื่นสมัครขอทดสอบมาตรฐานฝีมือแรงงาน)<br>
                            (2) มีประสบการณ์การทำงานหรือปฏิบัติอาชีพเกี่ยวกับสาขาอาชีพช่างไฟฟ้าภายในอาคารไม่น้อยกว่า 1
                            ปี
                            หรือ<br>
                            (3) ผ่านการฝึกฝีมือแรงงานหรือฝึกอาชีพ ในสาขาอาชีพช่างไฟฟ้าภายในอาคารไม่น้อยกว่า 540 ชั่วโมง
                            หรือมี
                            ประสบการณ์จากการฝึก หรือปฏิบัติงานในกิจการในสาขาที่เกี่ยวข้องไม่น้อยกว่า 250 ชั่วโมง<br>
                            (4) เป็นผู้ที่จบการศึกษาไม่ต่ำกว่าระดับประกาศนียบัตรวิชาชีพ (ปวช.3)
                            ในสาขาที่เกี่ยวข้องกับอาชีพนี้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>คุณสมบัติของผู้เข้ารับการทดสอบ มาตรฐานฝีมือแรงงานแห่งชาติ
                                    <br>สาขาอาชีพช่างไฟฟ้าภายในอาคาร ระดับ 1</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) ผู้เข้ารับการทดสอบต้องมีอายุไม่ต่ำกว่า 18 ปีบริบูรณ์นับถึงวันสมัครเข้ารับการทดสอบ
                            และ<br>
                            (2) มีประสบการณ์การทํางานหรือประกอบอาชีพเกี่ยวกับสาขาอาชีพช่างไฟฟ้า
                            ภายในอาคารไม่น้อยกว่า 3 ปี หรือ<br>
                            (3) ผ่านการฝึกฝีมือแรงงานหรือฝึกอาชีพ ในสาขาอาชีพช่างไฟฟ้าภายในอาคาร
                            ไม่น้อยกว่า 540 ชั่วโมง และมีประสบการณ์จากการฝึก หรือปฏิบัติงานในกิจการในสาขาที่เกี่ยวข้อง
                            ไม่น้อยกว่า 250 ชั่วโมง หรือ<br>
                            (4) เป็นผู้ที่จบการศึกษาที่จบการศึกษาไม่ต่ํากว่าระดับประกาศนียบัตรวิชาชีพ
                            ในสาขาที่เกี่ยวข้องกับอาชีพนี้<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>คุณสมบัติของผู้เข้ารับการทดสอบ มาตรฐานฝีมือแรงงานแห่งชาติ
                                    <br>สาขาอาชีพช่างไฟฟ้าภายในอาคาร ระดับ 2</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) มีประสบการณ์การทํางานหรือประกอบอาชีพเกี่ยวกับสาขาอาชีพช่างไฟฟ้าภายในอาคารไม่น้อยกว่า 1
                            ปีนับตั้งแต่วันที่ได้
                            รับหนังสือรับรองมาตรฐานฝีมือแรงงานแห่งชาติระดับ 1 หรือ<br>
                            (2) ได้คะแนนรวมในการทดสอบ ระดับ 1 ไม่ต่ํากว่าร้อยละ 80<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>คุณสมบัติของผู้เข้ารับการทดสอบ มาตรฐานฝีมือแรงงานแห่งชาติ
                                    <br>สาขาอาชีพช่างไฟฟ้าภายในอาคาร ระดับ 3</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) มีประสบการณ์การทํางานหรือประกอบอาชีพเกี่ยวกับสาขาอาชีพช่างไฟฟ้าภายในอาคารไม่น้อยกว่า
                            1 ปี นับตั้งแต่วันที่ได้รับหนังสือรับรองมาตรฐานฝีมือแรงงานแห่งชาติ
                            ระดับ 2 หรือ<br>
                            (2) ได้คะแนนรวมในการทดสอบ ระดับ 2 ไม่ต่ํากว่าร้อยละ 80
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5 class="text-left"><b>การพัฒนาฝีมือแรงงาน คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            กระบวนการที่ทําให้ผู้รับการฝึกและประชากรวัยทํางานมีความสามารถในการพัฒนาปรับปรุงงาน มีฝีมือ
                            ความรู้ความสามารถ จรรยาบรรณ
                            แห่งวิชาชีพ และทัศนคติเกี่ยวกับการทํางานเพื่อพัฒนาเป็นแรงงานที่มีคุณภาพ อันได้แก่ การฝึกอบรม
                            ฝีมือแรงงาน การกําหนดมาตรฐานฝีมือแรงงาน การรับรองความรู้ความสามารถ และการอื่นที่เกี่ยวข้อง
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section class="p-t-10">
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/food.php'); ?>
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
$.ajax({
    method: "POST",
    url: "plan_detail.php",
    data: {
        sl_training: $('.table1').attr("data-id_training")
    },
    success: function(result) {
        $('.table1').html(result);
    }
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