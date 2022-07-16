<?php include('header_front.php'); ?>
<?php 
    $id_training = 128;//ความปลอดภัยในการทำงานบนที่สูง

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
    HAVING tags LIKE "%ที่สูง%" OR tags LIKE "%การทำงานบนที่สูง%"');
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
            <h1 class="text-center"><b>อบรม ที่สูง</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img title="" style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_height (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                หลักสูตร ความปลอดภัยในการทํางานบนที่สูง
                                ใครบ้างที่ต้องอบรมที่สูง ผู้ทำงานที่มีความเสี่ยงกับการตกจากที่สูง
                                งานก่อสร้าง งานบำรุงรักษา งานในระบบอุตสาหกรรม
                                งานสายส่งไฟฟ้า งานทำความสะอาด
                                หรือพนักงานในโรงงาน หัวหน้างานที่เกี่ยวข้องกับ
                                การทำงานบนที่สูง ผู้ปฏิบัติงาน ผู้รับเหมา พนักงาน
                                หรือบุคลากรที่เกี่ยวข้องกับการปฏิบัติงานบนที่สูงโดยตรง
                                และผู้ที่สนใจ ตระหนักถึงความเสี่ยง อันตราย และที่การป้องกัน
                                การเกิดขึ้นในการทำงานที่สูง และสามารถนำความรู้
                                ทั้งภาคทฤษฎี และภาคปฏิบัติ
                                หลักสูตรนี้ อบรม 1 วัน
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
                                อบรมที่สูง เป็นหลักสูตรมาตรฐานสากล เพื่อให้ผู้เข้าอบรมที่สูง
                                สามารถได้เรียนรู้เกี่ยวกับวิธีการปฏิบัติงานบนที่สูง
                                และวิธีการปฏิบัติงานอย่างปลอดภัย
                                ตามมาตรฐานสากล ผู้เข้าอบรมสามารถประเมินความเสี่ยง
                                อันตรายได้อย่างปลอดภัย ตามกฎหมาย งานบนที่สูง
                                โดยมีทีมวิทยากรคอยกำกับดูแลตลอดการฝึกอบรม
                                และคอยแนะนำวิธีการใช้อุปกรณ์ต่างๆ เทคนิคสำคัญๆ
                                ได้อย่างมืออาชีพ
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img title="" style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_height (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">อบรม ความปลอดภัยในการทำงานบนที่สูง</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรความปลอดภัยในการทำงานบนที่สูง
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="426" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                            <li style="width: 33.33%;" class="text-center" role="presentation"><a data-id_branch="17"
                                    data-id_training="<?php echo $id_training;?>" href="#tab3" role="tab"
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
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="table3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container p-t-80 p-b-80 no_br">
    <h2 class="text-center"><b>
            ภาพบรรยากาศการ อบรมที่สูง
        </b></h2>
    <hr class="hr_green mx-auto hr_fix_width">
    <div class="text-center">
        <h5>อบรมที่สูง เราเน้นเรียนจริง ปฏิบัติจริง ทดสอบภายใน 1 วัน และได้รับใบเซอร์ เทคนิคการใช้อุปกรณ์ป้องกันการตกจากที่สูงอย่างมืออาชีพ การติดตั้งอุปกรณ์กันตกชนิดต่าง ๆ ตามหลักมาตรฐานสากล อบรมที่สูงที่ดีที่สุด 
            ต้องอบรมที่เซฟตี้อินไทย อบรมการทำงานบนที่สูงเป็นการอบรมตามกฎหมายการทำงานบนที่สูงปี 2564 โดยผู้ที่ทำงานบนที่สูง นายจ้างจะต้องส่งให้พนักงานฝึกอบรมการเริ่มทำงานได้อย่างปลอดภัย</h5>
    </div>
    <br>
    <div class="row mx-auto">
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-02-07-06-65.jpg" alt="การทำงานบนที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-03-07-06-65.jpg" alt="การทำงานบนที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-04-07-06-65.jpg" alt="บนที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-05-07-06-65.jpg" alt="บนที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-06-07-06-65.jpg" alt="ที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-08-07-06-65.jpg" alt="ที่สูง อบรมที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-09-07-06-65.jpg" alt="ทำงานบนที่สูง อบรมการทำงานที่สูง">
        </div>
        <div class="col-md-3 col-6 mb-3">
            <img title="" class="img-fluid box_shadow" src="<?php echo $base_url;?>/img/template_gallery/อบรม-การทำงานบนที่สูง-อบรมความปลอดภัย-ชลบุรี-ระยอง-2565-2566-12-07-06-65.jpg" alt="ทำงานบนที่สูง อบรมทำงานที่สูง">
        </div>
    
    </div>
</div>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy"
                    data-src="<?php echo $base_url;?>/img/template_gallery/gallery_height (14).jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การทำงานบนที่สูง จัดได้ว่าเป็นการทำงานที่มีความเสี่ยงต่อการเกิดอุบัติเหตุที่สูง ซึ่งตามกฎกระทรวง
                        ได้กำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัย
                        และสภาพแวดล้อมในการทำงานเกี่ยวกับงานก่อสร้าง พ.ศ.2551 หมวด 11
                        การทำงานในสถานที่ที่มีอันตรายจากการตกจากที่สูง การพังทลาย และการกระเด็นหรือตกหล่นของวัสดุ
                        เพื่อเป็นแนวทางในการลดอุบัติเหตุจากการทำงานในที่สูงให้มีประสิทธิภาพ
                        ผู้ที่ทำงานที่สูงจะต้องมีความรู้ความเข้าใจต่อหลักการและหลักการปฏิบัติการทำงานที่สูงที่ถูกต้อง
                        เพื่อความปลอดภัยในการทำงานบนที่สูงของพนักงานและผู้ปฏิบัติงานที่สูงขององค์กรต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้าอบรมที่สูงมีความรู้และสามารถปฏิบัติงานบนที่สูงได้อย่างถูกต้องและปลอดภัย<br>
                        2.
                        เพื่อให้ผู้เข้ารับการอบรมที่สูงรู้ถึงอันตรายและวิธีป้องกันควบคุมอันตรายที่จะเกิดขึ้นจากการทำงานบนที่สูง<br>
                        3. เพื่อให้ผู้เข้ารับการอบรมที่สูงมีความรู้และแนวทางการจัดการทำงานบนที่สูงอย่างปลอดภัย<br>
                        4. เพื่อให้สามารถใช้อุปกรณ์ป้องกันภัยส่วนบุคคล (PPE) ในการทำงานบนที่สูงได้อย่างถูกต้อง<br>
                        5. เพื่อเรียนรู้กฎหมาย มาตรฐานในการทำงานบนที่สูงได้อย่างถูกต้อง<br>
                        6. เพื่อเรียนรู้จักอันตรายในการทำงานบนที่สูง<br>
                        7. ฝึกปฏิบัติงานบนที่สูงในรูปแบบต่างๆ เพื่อสามารถทำงานบนที่สูงได้อย่างปลอดภัย<br><br>
                        เนื้อหาการอบรม<br>
                        1. กฎหมายและมาตรฐานสากลที่เกี่ยวข้องกับการทำงานบนที่สูง<br>
                        2. สาเหตุการเกิดอุบัติเหตุและอันตรายในการทำงานเกี่ยวกับการทำงานบนที่สูง<br>
                        3. แนวทางการจัดการด้านความปลอดภัยและวิธีการทำงานบนที่สูงอย่างปลอดภัย<br>
                        4. อุปกรณ์และเครื่องมือเกี่ยวกับการป้องกันการตกจากที่สูง
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

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

   
    <section class="">
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
            สรุปกฎหมายความปลอดภัย 2564 เกี่ยวกับการทำงานบนที่สูง
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="text-center">
        <h5>ตามประกาศ <a class="a-link d-inline" href="https://bit.ly/3CeUX53" >กฎกระทรวง กำหนดมาตรฐานในการบริหาร จัดการ และดำเนินการด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน ในสถานที่ที่มีอันตรายจากการตกจากที่สูงและที่ลาดชัน จากวัสดุกระเด็นตกหล่น และพังทลาย และจากการตกลงไปในภาชนะเก็บหรือรองรับวัสดุ พ.ศ. ๒๕๖๔</a> “ทำงานในที่สูง” หมายความว่า การทำงานในพื้นที่ปฏิบัติงานที่สูงจากพื้นดิน หรือจากพื้นอาคาร ตั้งแต่สองเมตรขึ้นไปซึ่งลูกจ้างอาจพลัดตกลงมาได้</h5> <br>
    </div>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-03.jpg" alt="อบรมที่สูง กรุงเทพ" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-04.jpg" alt="อบรมที่สูง ฟรี" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-05.jpg" alt="อบรมที่สูง ราคา"width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-06.jpg" alt="อบรม ที่สูง นั่งร้าน" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-07.jpg" alt="อบรมที่สูง กฎหมาย" width="500" height="500" heights="(min-width:500px) 200px, 80%">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/อัพเดทการทำงานบนที่สูง2564-08.jpg" alt="อบรม ที่ สูง net"  width="500" height="500" heights="(min-width:500px) 200px, 80%">
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
                            <h5><b>ทำงานในที่สูง คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การทำงานในพื้นที่ปฏิบัติงานที่สูงจากพื้นดิน หรือ จากพื้นอาคาร ตั้งแต่ 2 เมตรขึ้นไป
                            ซึ่งลูกจ้างอาจพลัดตกลงมาได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>นั่งร้าน คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            โครงสร้างชั่วคราวที่สูงจากพื้นดิน หรือ จากพื้นอาคาร
                            หรือส่วนของสิ่งก่อสร้างสำหรับเป็นที่รองรับลูกจ้าง วัสดุ หรือเครื่องมือและอุปกรณ์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อันตรายจากการตกจากที่สูง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            แบ่งออกเป็น 5 ประเภท ได้แก่<br>
                            (1) ลื่น<br>
                            (2) สะดุด<br>
                            (3) ตกจากบันได<br>
                            (4) ตกจากที่สูง<br>
                            (5) การตกกระทบจากวัสดุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ป้องกันการตกจากที่สูงและวัสดุร่วงหล่นที่ตัวผู้ปฏิบัติงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) ฝึกอบรมให้กับผู้ที่ต้องขึ้นไปปฏิบัติงานบนที่สูง<br>
                            (2) สุขภาพของผู้ปฏิบัติงาน<br>
                            (3) สวมใส่อุปกรณ์ป้องกันอันตรายส่วนบุคคล
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ป้องกันการตกจากที่สูงและวัสดุร่วงหล่นในสถานที่ทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) จัดระบบงาน เพื่อจำกัดการทำงานบนที่สูง<br>
                            (2) ติดตั้งอุปกรณ์ป้องกันการตก เพื่อลดความเสี่ยง<br>
                            (3) พื้นที่ทำงานปราศจากปัจจัยที่ทำให้สะดุด ลื่น<br>
                            (4) กั้น หรือปิดช่องเปิดบนพื้นให้แข็งแรง พร้อมป้ายเตือนอันตราย<br>
                            (5) ติดตั้งหลังคาบริเวณทางเข้า-ออกอาคาร เพื่อป้องกันการร่วงตกของวัสดุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการร่วงหล่นของวัสดุในพื้นที่ปฏิบัติงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (1) อุปกรณ์ที่มีขนาดเล็ก ควรใส่ในภาชนะที่แข็งแรง<br>
                            (2) วัสดุอุปกรณ์ทุกชนิดต้องไม่วางกีดขวางทางเดิน<br>
                            (3) จัดเก็บเศษวัสดุที่เหลือใช้ในภาชนะที่แข็งแรง<br>
                            (4) จัดเก็บทำความสะอาดอย่างต่อเนื่อง<br>
                            (5) ใช้เครื่องมือให้เหมาะสมกับงาน<br>
                            (6) ใช้เชือกผูกรัดเครื่องมือ และอุปกรณ์ที่ใช้ในการทำงาน<br>
                            (7) ขนย้ายวัสดุอุปกรณ์อย่างถูกวิธี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการสะดุด ลื่นล้ม บนพื้นที่ทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) วัสดุอุปกรณ์ทุกชนิดจะต้องไม่วางกีดขวางทางเดิน<br>
                            (2) สายไฟ สายยาง ห้ามลากผ่านพื้นทางเดิน<br>
                            (3) บริเวณช่องทางขึ้น-ลงบันได ต้องไม่มีสิ่งกีดขวาง<br>
                            (4) พื้นที่ทำงานต้องมีราวกันตก และแผ่นกันของตก<br>
                            (5) พื้นที่ทำงานต้องไม่เปียกแฉะ<br>
                            (6) พื้นที่ทำงานจะต้องไม่มีคราบน้ำมัน จารบี<br>
                            (7) พื้นทางเดินต้องเรียบเสมอกัน<br>
                            (8) จัดเก็บทำความสะอาดอย่างต่อเนื่อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในการเดิน เคลื่อนย้าย หรือเปลี่ยนพื้นที่ปฏิบัติงาน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) มีราวกันตก หรือเชือกนิรภัยยึดติดกับโครงสร้างโดยรอบ<br>
                            (2) มีทางเดินชั่วคราวพร้อมราวกันตก<br>
                            (3) ติดตั้งตาข่ายนิรภัยยึดติดกับโครงสร้างที่มั่นคงแข็งแรง<br>
                            (4) ปิดกั้นบริเวณด้านล่างพื้นที่ปฏิบัติงาน<br>
                            (5) จัดเตรียมนั่งร้าน หรือเครื่องจักรกลที่กำหนดไว้ในแผนงาน<br>
                            (6) สวมใส่ และใช้อุปกรณ์ป้องกันการตกตลอดเวลา<br>
                            (7) ห้ามเคลื่อนย้ายร่างกายบนที่สูง โดยปราศจากการเกาะเกี่ยวเข็มขัดนิรภัย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในงานติดตั้งหลังคาที่มีความลาดเอียง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ทำราวกันตก หรือเชือกนิรภัยยึดติดกับโครงสร้างโดยรอบ<br>
                            (2) ติดตั้งตาข่ายนิรภัยยึดติดกับโครงสร้างที่มั่นคง<br>
                            (3) ล้อมด้านล่างพื้นที่ปฏิบัติงาน<br>
                            (4) สวมใส่อุปกรณ์ป้องกันการตก<br>
                            (5) มีการจัดวางวัสดุ และจัดทางผ่านที่ปลอดภัย<br>
                            (6) จัดเก็บเศษวัสดุ เมื่อมีการเปลี่ยนช่วงเวลาทำงาน<br>
                            (7) มีการตรวจสอบดูแลตลอดเวลาที่ปฏิบัติงาน<br>
                            (8) มีอุปกรณ์สื่อสาร และแผนการช่วยเหลือ เมื่อเกิดอุบัติเหตุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การป้องกันอันตรายจากการตกในพื้นที่ที่เป็นสันขอบอาคาร และพื้นที่เปิดโล่ง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) จัดทำราว หรือรั้วปิดกั้นที่มั่นคง แข็งแรงโดยรอบ<br>
                            (2) ใช้สีแสดงให้เห็นเด่นชัดในระยะไกล<br>
                            (3) ติดตั้งตาข่ายนิรภัย<br>
                            (4) จัดให้มีป้าย และสัญลักษณ์เตือนภัย<br>
                            (5) สวมใส่อุปกรณ์ป้องกันการตก<br>
                            (6) มีแผนการช่วยเหลือ เมื่อเกิดเหตุฉุกเฉิน
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/ocPOKCuL4v8?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/logo/preview_vd_height.jpg" alt="">
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
                            <h4><b>บรรยากาศการอบรม</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>บรรยากาศการอบรม
                                เน้นทำ Workshop ให้ได้ลงมือทำจริง<br>ในห้องเรียน ในบรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้น<br>และสามารถนำไปใช้ได้จริงในการทำงาน</h5>
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
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;include('layout/training_card.php'); ?>
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