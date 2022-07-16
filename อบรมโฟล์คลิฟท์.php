<?php include('header_front.php'); ?>
<?php 
    $id_training = 127;//การขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี

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

    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%โฟล์คลิฟท์%" OR tags LIKE "%forklift%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

.a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
}

html {
    scroll-behavior: smooth;
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

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>อบรมโฟล์คลิฟท์</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/เรียนขับโฟล์คลิฟท์ชลบุรี.jpg" alt="เรียนขับโฟล์คลิฟท์ชลบุรี อบรมโฟล์คลิฟท์">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                            <b>อบรมโฟล์คลิฟท์-รถยก ตามกฎหมาย 2564 - 2565</b> พร้อม สอบใบเซอร์โฟล์คลิฟท์-รถยก  โดยศูนย์ทดสอบมาตรฐานฝีมือแรงงาน
                            แบบบุคคลทั่วไปและแบบอินเฮ้าส์ ฝึกปฏิบัติจริง อบรมได้ทั้งเขตชลบุรีและระยอง หลักสูตรการขับรถโฟล์คลิฟท์-รถยก อย่างปลอดภัยและถูกวิธี <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> เน้นสอนเทคนิคการขับรถโฟล์คลิฟท์ 
                            ในการปฏิบัติงานได้อย่างถูกต้องปลอดภัย พร้อมวิธีการปฏิบัติตามที่กฎหมายกำหนด การขับและบำรุงรักษารถยกเครื่องยนต์อย่างถูกวิธีและปลอดภัย
                            สามารถนำความรู้จากการอบรมไปเคลื่อนย้ายสิ่งของ/ผลิตภัณฑ์ได้อย่างมีประสิทธิภาพ โดยรถโฟล์คลิฟท์-รถยก 
                            สามารถตรวจสอบดูและบำรุงรักษารถโฟล์คลิฟท์-รถยก เบื้องต้นได้อย่างถูกวิธี 
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
                            <b>อบรมโฟล์คลิฟท์-รถยก  </b> การขับและบำรุงรักษารถยกเครื่องยนต์อย่างถูกวิธีและปลอดภัย หลักสูตรการขับรถโฟล์คลิฟท์-รถยก อย่างปลอดภัยและถูกวิธี อบรมโฟล์คลิฟท์ชลบุรี อบรมโฟล์คลิฟท์ระยอง อบรมโฟล์คลิฟท์สมุทรปราการ อบรมที่ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> ดีที่สุด
                            ในะระยะเวลาในการอบรม 1 วัน ทดสอบผ่านรอรับ สอบใบเซอร์โฟล์คลิฟท์ ได้เลย อบรมโฟล์คลิฟท์ <a class="a-link d-inline" href="https://bit.ly/3FlokVU">ตามกฎกระทรวงเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564</a>
                            ข้อ 40 นายจ้างจะต้องจัดให้ลูกจ้างซึ่งทำหน้าที่เป็นผู้ขับรถยก ผ่านการฝึกอบรมเกี่ยวกับการใช้รถยกแต่ละประเภท ความปลอดภัยในการขับรถยก การตรวจสอบและบำรุงรักษารถยก 
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/อบรมโเซฟตี้อินไทยฟล์คลิฟท์ ฟรี 2565.jpg" alt="อบรมโฟล์คลิฟท์ ฟรี 2565">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

<br> <br>
    <section class="white-bg padding_top p-t-80 p-b-80">
        <div class="container">
            <h1 class="text-center"><b>อบรมโฟล์คลิฟท์ อบรมรถยก ตามกฎหมาย</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="text-center">
                <h5>ข้อ ๔๐ นายจ้างต้องจัดให้ลูกจ้างซึ่งจะทำหน้าที่เป็นผู้ขับรถยกผ่านการฝึกอบรมเกี่ยวกับการใช้รถยกแต่ละประเภทความปลอดภัยในการขับรถยก การตรวจสอบและบำรุงรักษารถยกโดยวิทยากรซึ่งมีความรู้ ความเชี่ยวชาญ และประสบการณ์การทำงานเกี่ยวกับรถยก ตามหลักสูตรที่อธิบดีประกาศกำหนด </h5>
            </div>
            <div class="row mb-3 p-t-40">
                <div class="col-md col-6 mb-3">
                    <a href="https://เซฟตี้อินไทย.com/%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%A1%E0%B9%82%E0%B8%9F%E0%B8%A5%E0%B9%8C%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%9F%E0%B8%97%E0%B9%8C#tab1">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/การขับโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี.jpg"
                                            alt="อบรมโฟล์คลิฟท์ ภาษาอังกฤษอบรมโฟล์คลิฟท์ ฟรีอบรมโฟล์คลิฟท์ ราคาอบรมโฟล์คลิฟท์ ฟรี 2564อบรมโฟล์คลิฟท์ กรุงเทพอบรมโฟล์คลิฟท์ ชลบุรีอบรมโฟล์คลิฟท์ ตามกฎหมายอบรมโฟล์คลิฟท์ ระยองอบรมโฟล์คลิฟท์ อยุธยา">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>อบรมการขับรถโฟล์คลิฟท์ รถยก</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                    การขับและการตรวจสอบบำรุงรักษารถยกเครื่องยนต์อย่างปลอดภัยและถูกวิธี
                                    </span>
                                </div>
                            </div>
                            <a href="https://เซฟตี้อินไทย.com/%E0%B8%AD%E0%B8%9A%E0%B8%A3%E0%B8%A1%E0%B9%82%E0%B8%9F%E0%B8%A5%E0%B9%8C%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%9F%E0%B8%97%E0%B9%8C#tab1"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="การฝึกขับรถโฟล์คลิฟท์">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/การฝึกขับรถโฟล์คลิฟท์.jpg" alt="การฝึกขับรถโฟล์คลิฟท์">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>การฝึกขับรถโฟล์คลิฟท์ รถยก</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                    การฝึกขับรถยกอย่างปลอดภัยและถูกวิธีไม่มีพื้นฐานการขับรถโฟล์คลิฟท์ก็เรียนได้ ใช้เวลาเรียน 2 วันขับได้แน่นอน 
                                    </span>
                                </div>
                            </div>
                            <a href="การฝึกขับรถโฟล์คลิฟท์"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>ดูตารางอบรม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="อบรมโฟล์คลิฟท์แบบยืนขับ">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/การขับรถโดฟล์คลิฟท์แบบยืน.jpg" alt="อบรมโฟล์คลิฟท์แบบยืนขับ">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>รถยกไฟฟ้า รถโฟล์คลิฟท์แบบยืนขับ</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                    การขับและการตรวจสอบบำรุงรักษารถยกไฟฟ้าอย่างปลอดภัยและถูกวิธี
                                    </span>
                                </div>
                            </div>
                            <a href="อบรมโฟล์คลิฟท์แบบยืนขับ"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md col-6 mb-3">
                    <a href="การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี">
                        <div class="box_shadow rounded_card mx-auto">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <figure style="overflow: hidden;">
                                        <img title="" class="img-fluid img_cover"
                                            src="<?php echo $base_url; ?>/img/course/การขับรถโฟล์คลิฟท์รถสเเตกเกอร์.jpg" alt="การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี">
                                    </figure>
                                </div>
                            </div>
                            <div class="pl-4 pr-4 pb-2">
                                <div class="row text-center h_fix-height">
                                    <h5><b>การขับรถสแตกเกอร์</b></h5>
                                </div>
                                <div class="row text-center">
                                    <span class="content course-fix-height">
                                    การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี
                                    </span>
                                </div>
                            </div>
                            <a href="การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี"
                                class="btn-block text-center btn--black btn--black-hover-green p-3"><b>รายละเอียดเพิ่มเติม</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="white-bg" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">อบรมโฟล์คลิฟท์</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมโฟล์คลิฟท์ รถยก การขับรถโฟล์คลิฟท์-รถยกอย่างปลอดภัยและถูกวิธี พร้อมสอบใบเซอร์โฟล์คลิฟท์-รถยก หลังผ่านการทดสอบ 
            </h5>
            <h5 class="text-center" ><b style="color:red;">ข้อ ๔๐ นายจ้างต้องจัดให้ลูกจ้างซึ่งจะทำหน้าที่เป็นผู้ขับรถยกผ่านการฝึกอบรมเกี่ยวกับการใช้รถยกแต่ละประเภทความปลอดภัยในการขับรถยก การตรวจสอบและบำรุงรักษารถยกโดยวิทยากรซึ่งมีความรู้ ความเชี่ยวชาญ และประสบการณ์การทำงานเกี่ยวกับรถยก ตามหลักสูตรที่อธิบดีประกาศกำหนด</b></h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab1" class="active" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="17"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
                                    data-toggle="tab">
                                    <h5>สมุทรปราการ</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="table2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <div class="container p-t-80 p-b-80 no_br">
    <h2 class="text-center"><b>
            ภาพบรรยากาศการ อบรมโฟล์คลิฟท์-รถยก 
        </b></h2>
    <hr class="hr_green mx-auto hr_fix_width">
    <div class="text-center">
        <h5>เรียนจริง ปฏิบัติจริง ทดสอบภายใน 1 วัน การันตีขับเป็น สอบใบเซอร์โฟล์คลิฟท์ สำหรับใช้สมัครงาน เราบริการอบรมโฟล์คลิฟท์พื้นที่ ชลบุรี ระยอง สมุทรปราการ และมีบริการรูปแบบ Public & In-house Training

และหลักสูตร อื่นๆ ที่เกี่ยวกับด้านความปลอดภัยในการทำงาน</h5>
    </div>
    <br>
    <div class="row mx-auto">
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ใบเซอร์โฟล์คลิฟท์สอบที่ไหน.jpg" alt="ใบเซอร์โฟล์คลิฟท์สอบที่ไหน อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ฝึกขับรถโฟล์คลิฟท์.jpg" alt="ฝึกขับรถโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/เรียนขับโฟล์คลิฟท์.jpg" alt="เรียนขับโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
            </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/สอนโฟล์คลิฟท์ดีที่สุด.jpg" alt="สอบใบเซอร์โฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/เรียนขับโฟล์คลิฟท์ชลบุรี.jpg" alt="เรียนขับโฟล์คลิฟท์ชลบุรี อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/เรียนขับรถโฟล์คลิฟท์ระยอง.jpg" alt="เรียนขับรถโฟล์คลิฟท์ระยอง อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/สอบใบเซอร์ฟอร์ลิฟท์.jpg" alt="สอบใบเซอร์ฟอร์ลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/หาสอบโฟล์คลิฟท์.jpg" alt="หาสอบโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรมโเซฟตี้อินไทยฟล์คลิฟท์ ฟรี 2565.jpg" alt="อบรมโฟล์คลิฟท์ ฟรี 2565 อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม ขับรถโฟล์คลิฟท์.jpg" alt="อบรม ขับรถโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม โฟล์คลิฟท์.jpg" alt="อบรม โฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรมการขับรถโฟล์คลิฟท์.jpg" alt="อบรมการขับรถโฟล์คลิฟท์">
        </div>
    </div>
</div>

<a href="การฝึกขับรถโฟล์คลิฟท์">
        <section class="section_banner">
            <img alt="คุณกำลังกังวลขับรถโฟล์คลิฟท์ไม่เป็นใช่ไหม" src="<?php echo $base_url; ?>/img/bg/คุณกำลังกังวลขับรถโฟล์คลิฟท์ไม่เป็นใช่ไหม.jpg">
        </section>
    </a>

    <section class="white-bg">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title = width: 100%; height: auto; class="lazy"
                    data-src="<?php echo $base_url;?>/img/template_gallery/สอนโฟล์คลิฟท์ดีที่สุด.jpg" alt="สอบใบเซอร์โฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การทำงานในโรงงานอุตสาหกรรมรถโฟล์คลิฟท์ถือว่าเป็นอุปกรณ์/พาหนะผ่อนแรงที่มีความสำคัญในการจัดการสินค้าในด้านการผลิตและการขนส่งสินค้าเป็นอย่างมาก
                        รถเป็นพาหนะที่เคลื่อนที่ด้วยความเร็ว จึงเป็นสิ่งที่มีความเสี่ยงสูงในการที่จะทำให้เกิดอุบัติเหตุ
                        ดังนั้นเป็นสิ่งทีแต่ละองค์กรจะต้องตระหนักและให้ความสำคัญต่อการส่งเสริมความรู้แก่ผู้ขับโฟล์คลิฟท์
                        ในเรื่องการเตรียมความพร้อม และมาตรฐานการใช้งาน ตลอดจนความรู้ในการขับขี่อย่างปลอดภัย
                        เพื่อส่งเสริมให้เกิดความปลอดภัยในการทำงานต่อไป จำเป็นต้องมีการ จัดให้มีการ อบรมโฟล์คลิฟท์
                        เพื่อความปลอดภัยในการปฏิบัติงาน และเป็นไปตามการพัฒนาบุคคลากรที่ ISO9001 กำหนด<br><br>
                        วัตถุประสงค์<br>
                        1. ผู้เข้ารับการอบรมสามารถนำเทคนิคการขับรถโฟล์คลิฟท์ ในการปฏิบัติงานได้อย่างถูกต้องปลอดภัย<br>
                        2. สามารถนำความรู้จากการอบรมไปเคลื่อนย้ายสิ่งของ/ผลิตภัณฑ์ได้อย่างมีประสิทธิภาพ
                        โดยรถโฟล์คลิฟท์<br>
                        3. สามารถตรวจสอบดูและบำรุงรักษารถโฟล์คลิฟท์เบื้องต้น ได้อย่างถูกวิธี<br><br>
                        เนื้อหาหลักสูตร<br>
                        1. กฎหมายด้านความปลอดภัยในการทำงานที่เกี่ยวข้องกับการใช้งานรถโฟล์คลิฟท์<br>
                        2. ความรู้พื้นฐานเกี่ยวกับรถโฟล์คลิฟท์ที่ผู้ใช้งานต้องรู้<br>
                        3. การใช้อุปกรณ์ป้องกันส่วนบุคคลรถโฟล์คลิฟท์มีอะไรบ้าง?<br>
                        4. ส่วนประกอบ/อุปกรณ์ / แผงควบคุมและระบบไฟเตือนต่างๆ ของโฟล์คลิฟท์<br>
                        5. การตรวจสอบความปลอดภัยก่อนการใช้โฟล์คลิฟท์<br>
                        6. สอนการขับโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี<br>
                        7. เทคนิคการยก / เคลื่อนย้าย / จัดเรียงและตักจ่ายสินค้า<br>
                        8. การตรวจและบำรุงรักษาโฟล์คลิฟท์เบื้องต้น ตามระยะเวลาชั่วโมงการทำงาน<br>
                        9. การปฏิบัติเมื่อโฟล์คลิฟท์เสีย<br>
                        10. กฎจราจร / ข้อห้าม และเครื่องหมายเตือนต่างๆในโรงงาน<br>
                        11. การวัดผลทั้งภาคทฤษฎี และปฏิบัติ ก่อนและหลังการอบรม<br>
                        12. อันตรายที่เกิดจากรถโฟล์คลิฟท์ กรณีศึกษาจากวีดีโอ<br>
                        13. กิจกรรมการวิเคราะห์ความเสี่ยงความปลอดภัยในการทำงานของรถโฟล์คลิฟท์
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline;?>">
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

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-12 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            <h3><b>อบรมโฟล์คลิฟท์ 2565-2666</b></h3>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>อบรมโฟล์คลิฟท์ตามกฎหมาย บรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้น<br>และสามารถนำไปใช้ได้จริงในการทำงาน</h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/rJb72qKaJZo?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/อบรมหลักสูตร การขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี.jpg" alt="บรรยากาศอบรมโฟล์คลิฟท์">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/omo4w2TJQzk?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/หลักสูตร การขับรถโฟล์คลิฟท์.jpg" alt="บรรยากาศสอบโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
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

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

  

    <div class="container p-t-80 p-b-80 no_br">
    <h2 class="text-center"><b>
            สอบใบเซอร์ฟอร์ลิฟท์ รถยก
        </b></h2>
    <hr class="hr_green mx-auto hr_fix_width">
    <div class="text-center">
        <h5>สอบใบเซอร์โฟล์คลิฟท์ ทดสอบภายใน 1 วัน การันตีขับเป็น สอบใบเซอร์โฟล์คลิฟท์ เราบริการอบรมโฟล์คลิฟท์พื้นที่ ชลบุรี ระยอง สมุทรปราการ และมีบริการรูปแบบ Public & In-house Training <a class="a-link d-inline" href="https://bit.ly/3FlokVU">ตามกฎกระทรวงเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564</a> ข้อ 40 นายจ้างจะต้องจัดให้ลูกจ้างซึ่งทำหน้าที่เป็นผู้ขับรถยก ผ่านการฝึกอบรมเกี่ยวกับการใช้รถยกแต่ละประเภท ความปลอดภัยในการขับรถยก การตรวจสอบและบำรุงรักษารถยก</h5>
    </div>
    <br>
    <div class="row mx-auto" id="course">
        <div class="col-md-3 col-6 mb-3" id="">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ซื้อใบเซอร์โฟล์คลิฟท์.jpg" alt="ใบเซอร์โฟล์คลิฟท์สอบที่ไหน อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ใบเซอร์ โฟล์ค ลิ ฟ ท์ หาย.jpg" alt="ใบเซอร์โฟล์คลิฟท์ สอบที่ไหน อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ใบเซอร์โฟล์คลิฟท์มีอายุกี่ปี.jpg" alt="ใบเซอร์โฟล์คลิฟท์สอบที่ไหน อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรมใบเซอร์โฟล์คลิฟท์.jpg" alt="ใบเซอร์โฟล์คลิฟท์ สอบที่ไหน อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ใบเซอร์โฟล์คลิฟท์ ระยอง.jpg" alt="เรียนขับโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/ใบเซอร์โฟล์คลิฟท์ สอบที่ไหน.jpg" alt="สอบใบเซอร์โฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรมโฟล์คลิฟท์ ฟรี 2565.jpg" alt="เรียนขับโฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรมโฟล์คลิฟท์ ฟรี.jpg" alt="สอบใบเซอร์โฟล์คลิฟท์ อบรมโฟล์คลิฟท์">
        </div>
        
    </div>
</div>
        

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
            อบรมโฟล์คลิฟท์-รถยก 
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="text-center">
        <h5>ตามประกาศ <a class="a-link d-inline" href="https://bit.ly/3GfkaP6" >กระทรวงอุตสาหกรรมเรื่อง รถฟอร์คลิฟ-รถยก (Forklift) ที่ใช้ก๊าซปิโตรเลียมเหลวเป็นเชื้อเพลิง พ.ศ.2545 </a>-2565 

กำหนดให้รถฟอร์คลิฟ (Forklift) ที่ใช้ก๊าซปิโตรเลียมเหลวเป็นเชื้อเพลิง ที่นำมาใช้ในโรงงานต้องมีมาตรการคุ้มครองความปลอดภัยดังต่อไปนี้ </h5> <br>
    </div>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-01.jpg" alt="อบรมโฟล์คลิฟท์ รถยก" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-02.jpg" alt="อบรมโฟล์คลิฟท์ -รถยก" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-03.jpg" alt="อบรมโฟล์คลิฟท์ รถยก"width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-04.jpg" alt="อบรมโฟล์คลิฟท์" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-05.jpg" alt="โฟล์คลิฟท์" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความโฟล์คลิฟท์-06.jpg" alt="โฟล์คลิฟท์"  width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-3 col-8 mx-auto">
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
                            <h5><b>โฟล์คลิฟท์หรือรถยก คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            เครื่องจักรอุตสาหกรรมที่ช่วยทุ่นแรงในการเคลื่อนย้ายสินค้าต่างๆ
                            สามารถใช้ได้ในธุรกิจหลายประเภทไม่ว่าจะเป็นธุรกิจอาหาร-เครื่องดื่ม วัสดุก่อสร้าง
                            โรงงานผลิตต่างๆ ตลอดจนธุรกิจขนส่งและคลังสินค้า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>โฟล์คลิฟท์ออกได้เป็น 2 กลุ่มใหญ่ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) โฟล์คลิฟท์ชนิดเครื่องยนต์ เป็นโฟล์คลิฟท์ที่มีการออกแบบมาเพื่อให้ทนทานต่อการทำงานกลางแจ้ง
                            มีประสิทธิภาพสูง สามารถใช้งานได้ต่อเนื่อง<br>
                            (2) โฟล์คลิฟท์พลังงานไฟฟ้า
                            เป็นโฟล์คลิฟท์ที่มีแหล่งพลังงานจากแบตเตอรี่ ปราศจากมลพิษ เงียบ และดูแลรักษาง่าย
                            เหมาะสำหรับการใช้งานในคลังสินค้า<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>โฟล์คลิฟท์ชนิดน้ำมันดีเซล คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            โฟล์คลิฟท์ที่มีสมรรถนะสูง สามารถทำงานได้รวดเร็วและต่อเนื่อง
                            เครื่องยนต์มีกำลังมากเหมาะสำหรับงานหนัก โดยมีขนาดตั้งแต่ 1.5 – 16.0 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>โฟล์คลิฟท์ชนิดน้ำมันเบนซิน-แอลพีจี คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            โฟล์คลิฟท์ที่มีสมรรถนะสูง ใช้เชื้อเพลิงได้ 2 ระบบ ทั้งน้ำมันเบนซินและก๊าซแอลพีจี
                            ประหยัดต้นทุนค่าเชื้อเพลิงได้มากกว่าโฟล์คลิฟท์ดีเซล
                            และสามารถใช้งานได้ทั้งกลางแจ้งและในคลังสินค้าเนื่องจากมีมลพิษน้อยกว่า โดยมีขนาดตั้งแต่ 1.5 –
                            5.5 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>โฟล์คลิฟท์พลังงานไฟฟ้า ประเภทนั่งขับ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            โฟล์คลิฟท์ที่ใช้งานคล้ายกับโฟล์คลิฟท์ชนิดเครื่องยนต์
                            สมรรถนะโดยรวมจะต่ำกว่าโฟล์คลิฟท์ชนิดเครื่องยนต์แต่จะมีความเสถียรในการทำงานมากกว่า
                            มีทั้งชนิดขับเคลื่อน 3 ล้อ ขนาดตั้งแต่ 1.3 – 2.0 ตัน และชนิดขับเคลื่อน 4 ล้อ ขนาดตั้งแต่ 1.0
                            – 3.5 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>โฟล์คลิฟท์พลังงานไฟฟ้า สำหรับคลังสินค้า คือ </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            โฟล์คลิฟท์ที่มีหลายรูปแบบเพื่อตอบสนองต่อการใช้งานที่หลากหลายในคลังสินค้าประเภทต่างๆ
                            มีทั้งโฟล์คลิฟท์ชนิดยืนขับ ขนาดตั้งแต่ 1.0 – 3.0 ตัน และโฟล์คลิฟท์ชนิดนั่งข้างขับ
                            ขนาดตั้งแต่ 1.4 – 2.0 ตัน ซึ่งเหมาะกับการใช้งานในคลังสินค้าที่มีทางวิ่งแคบ
                            ทำให้ลูกค้าสามารถจัดเก็บสินค้าได้มากขึ้น
                            อีกทั้งยังมีโฟล์คลิฟท์เฉพาะทางสำหรับการใช้งานในห้องเก็บของหรือคลังสินค้าที่มีเพดานต่ำอย่างแฮนด์พาเลท
                            แฮนด์พาเลทไฟฟ้า สแตกเกอร์ไฟฟ้า ออเดอร์พิกเกอร์ และอื่นๆอีกมากมาย
                            เพื่อช่วยให้คุณสามารถทำงานได้อย่างสะดวกราบรื่นและรวดเร็ว
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ส่วนประกอบของโฟล์คลิฟท์ มีดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) เสารถโฟล์คลิฟท์ (Mast) คือ อุปกรณ์รางเลื่อนสำหรับให้ส่วนของงาขึ้น-ลง
                            โดยทั่วไปเสารถโฟล์คลิฟท์จะมี 2 ท่อน ซึ่งยกได้ประมาณ 3 เมตร แต่ถ้าต้องการยกได้สูง 5-6 เมตร
                            จะต้องเปลี่ยนเสาให้สูงขึ้น หรือใช้เสา 3 ท่อน (Full Free Mast) เสา 3 ท่อน คือ
                            อุปกรณ์พิเศษของเสา เป็นเสาที่สามารถนำไปใช้ในสถานที่ที่มีความจำกัดได้<br>
                            (2) งารถโฟล์คลิฟท์ (Fork) คือ อุปกรณ์ที่ใช้ยกสิ่งของต่างๆ และงายังเป็นอุปกรณ์ที่ "อันตราย"
                            ที่สุด งานของรถโฟล์คลิฟท์มีหลายประเภท ขึ้นอยู่กับลักษณะของสิ่งของที่ต้องการยก<br>
                            (3) กระบอกไฮดรอลิค (Hydraulic) โดยมาตราฐานรถโฟล์คลิฟท์จะมีกระบอกไฮดรอลิคอยู่ 3 ชุด
                            ดังนี้<br>
                               (3.1) กระบอกยก คือ กระบอกไฮดรอลิคที่ทำหน้าที่ยกงาขึ้นลง มี 2 กระบอก<br>
                               (3.2) กระบอกคว่ำ-หงาย คือ กระบอกไฮดรอลิคที่ทำหน้าที่เอียงเสาไปหน้าและหลัง มี 2 กระบอก<br>
                               (3.3) กระบอกบังคับเลี้ยว คือ กระบอกไฮดรอลิคที่ทำหน้าที่บังคับการเลี้ยวของรถโฟล์คลิฟท์
                            ในส่วนนี้จะมีกระบอกเดียว<br>
                            (4) ล้อหน้า (Front Wheel) คือ ล้อที่มีหน้าที่ 3 ประการ ดังนี้<br>
                               (4.1) รับน้ำหนักบรรทุก หรือ ล้อโหลด<br>
                               (4.2) ขับเคลื่อน<br>
                               (4.3) เบรค<br>
                            (5) ล้อหลัง (Rear Wheel) คือ ล้อที่ทำหน้าที่บังคับเลี้ยว
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การใช้รถยก (Forklift) อย่างปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) ผู้ขับขี่ต้องเป็นผู้ที่ผ่านการฝึกอบรมมีใบอนุญาตขับขี่ได้เท่านั้น<br>
                            (2) ต้องมีการตรวจสอบรถยกทุกวัน ก่อนการปฏิบัติงาน
                            หรือพบเหตุผิดปกติให้รายงานผู้ที่รับผิดชอบทันที และห้ามใช้รถที่ผิดปกติ
                            หรือมีลักษณะที่ไม่ปลอดภัยต่อการใช้งาน<br>
                            (3) บรรทุกสิ่งของตามพิกัดที่กำหนด<br>
                            (4) บีบแตรให้สัญญาณทุกครั้งเมื่อเลี้ยว ถอยหลัง ทางข้าม ประตูเข้า-ออก หรือมุมอับ<br>
                            (5) ไม่ขับเร็ว ใช้ความเร็วรถพอเหมาะกับสภาพพื้นผิวถนน น้ำหนักบรรทุก และสภาพบริเวณทำงาน<br>
                            (6) ทำป้ายบอกพิกัดน้ำหนักยก ติดไว้ที่รถยกเห็นได้ชัดเจน<br>
                            (7) ให้มีสัญญาณเสียงหรือแสงไฟเตือนภัยในขณะทำงาน<br>
                            (8) ให้กำหนดเส้นทางและตีเส้นช่องทางเดินรถยกในอาคารหรือบริเวณที่มีการใช้รถยกเป็นประจำ<br>
                            (9) ติดตั้งกระจกนูน หรือวัสดุอื่นที่มีคุณสมบัติคล้ายกันไว้ที่บริเวณทางแยก
                            หรือทางโค้งที่มองไม่เห็นเส้นทางข้างหน้า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สิ่งที่ห้ามปฏิบัติในการใช้รถยก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ห้ามผู้อื่นขึ้นโดยสารบนรถ<br>
                            (2) ห้ามยื่นแขน ขา ศีรษะ ออกนอกรถขณะขับ<br>
                            (3) ห้ามขนย้ายสิ่งของที่จัดไม่เป็นระเบียบ<br>
                            (4) ห้ามออกรถเร็ว หยุดรถ หรือเลี้ยวกะทันหัน<br>
                            (5) ห้ามขับรถเหยียบของบนพื้นห้ามยืน เดิน หรือทำงานใต้งารถยกที่กำลังทำงาน<br>
                            (6) ห้ามยกของสูงบังระดับสายตาของผู้ขับ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ทำไมเราต้องตรวจสภาพรถยก ก่อน และ หลัง การใช้งาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) เพื่อให้รถยกมีสภาพพร้อมใช้งาน<br>
                            (2) เพื่อความปลอดภัยของคนขับรถยกและผู้ร่วมงาน<br>
                            (3) เพื่อประหยัดค่าใช้จ่ายให้กับองค์กร
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section class="white-bg p-t-10">
        <?php include('layout/contact_inhouse.php'); ?>
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

<script>
$(".nav-tabs li a").each(function(index, value) {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_training: $(this).attr("data-id_training"),
            sl_branch: $(this).attr("data-id_branch")
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
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