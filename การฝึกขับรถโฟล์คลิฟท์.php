<?php include('header_front.php'); ?>

<?php 
    $id_training = 167;//การฝึกขับรถโฟล์คลิฟท์

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner,alt FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //หา course outline 
    $stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
    $stmt->execute(array($id_training));
    $url_course_outline = $stmt->fetchColumn();

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
            <h2 class="text-center"><b>การฝึกขับรถโฟล์คลิฟท์</b></h2>
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
                            <b>อบรมโฟล์คลิฟท์ตามกฎหมาย 2564 - 2565</b> พร้อมใบเซอร์ โดยศูนย์ทดสอบมาตรฐานฝีมือแรงงาน
                            แบบบุคคลทั่วไปและแบบอินเฮ้าส์ ฝึกปฏิบัติจริง อบรมได้ทั้งเขตชลบุรีและระยอง หลักสูตรการขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> เน้นสอนเทคนิคการขับรถโฟล์คลิฟท์ 
                            ในการปฏิบัติงานได้อย่างถูกต้องปลอดภัย พร้อมวิธีการปฏิบัติตามที่กฎหมายกำหนด 
                            สามารถนำความรู้จากการอบรมไปเคลื่อนย้ายสิ่งของ/ผลิตภัณฑ์ได้อย่างมีประสิทธิภาพ โดยรถโฟล์คลิฟท์
                            สามารถตรวจสอบดูและบำรุงรักษารถโฟล์คลิฟท์เบื้องต้นได้อย่างถูกวิธี
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
                            <b>อบรมโฟล์คลิฟท์ </b> หลักสูตรการขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี อบรมโฟล์คลิฟท์ชลบุรี อบรมโฟล์คลิฟท์ระยอง อบรมโฟล์คลิฟท์สมุทรปราการ อบรมที่ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> ดีที่สุด
                            ในะระยะเวลาในการอบรม 1 วัน ทดสอบผ่านรอรับใบเซอร์ได้เลย อบรมโฟล์คลิฟท์ <a class="a-link d-inline" href="https://bit.ly/3FlokVU">ตามกฎกระทรวงเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2564</a>
                            ข้อ 40 นายจ้างจะต้องจัดให้ลูกจ้างซึ่งทำหน้าที่เป็นผู้ขับรถยก ผ่านการฝึกอบรมเกี่ยวกับการใช้รถยกแต่ละประเภท ความปลอดภัยในการขับรถยก การตรวจสอบและบำรุงรักษารถยก 
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/อบรมโฟล์คลิฟท์ ฟรี 2565.jpg" alt="อบรมโฟล์คลิฟท์ ฟรี 2565">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การฝึกขับรถโฟล์คลิฟท์</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการฝึกขับรถโฟล์คลิฟท์
                ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table1" data-id_training="<?php echo $id_training;?>"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/4dq_r3ko0JI?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/อบรมหลักสูตร สอนขับรถโฟล์คลิฟท์ อย่างปลอดภัยและถูกวิธี.jpg"
                                alt="การฝึกขับรถโฟล์คลิฟท์">
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
                            <h3><b>บรรยากาศการ อบรมการฝึกขับรถโฟล์คลิฟท์</b></h3>
                            <hr class="hr_green hr_fix_width">
                            <h5>หากคุณกำลังกังวลว่าขับโฟล์คลิฟท์ไม่เป็น จะเรียนได้หรือไม่ เราจะสอนเทคนิคในการขับโฟล์คลิฟท์เราการันตีว่า ใช้เวลาเรียนเพียงแค่ 2 วันคุณจะขับเป็นแน่นอน ถ้า อยากทราบว่าที่ไหนสอนขับรถโฟล์คลิฟท์บ้าง เซฟตี้อินไทย สอนการขับโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี</h5>
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
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    การฝึกขับรถโฟล์คลิฟท์
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="text-center">
        <h5>เรียนจริง ปฏิบัติจริง ทดสอบภายใน 1 วัน การันตีขับเป็น และได้รับใบเซอร์ สำหรับใช้สมัครงาน เราบริการอบรมโฟล์คลิฟท์พื้นที่ ชลบุรี ระยอง สมุทรปราการ และมีบริการรูปแบบ Public & In-house Training

และหลักสูตร อื่นๆ ที่เกี่ยวกับด้านความปลอดภัยในการทำงาน</h5>
    </div>
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(3).jpg" alt="การฝึกขับรถโฟล์คลิฟท์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(5).jpg" alt="การฝึกขับรถโฟล์คลิฟท์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(6).jpg" alt="การฝึกขับรถโฟล์คลิฟท์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(7).jpg" alt="การฝึกขับรถโฟล์คลิฟท์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(8).jpg" alt="โฟล์คลิฟท์">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/6ขั้นตอนขับโฟล์คลิฟท์อย่างถูกต้อง(9).jpg" alt="โฟล์คลิฟท์">
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
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;include('layout/training_card.php'); ?>
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