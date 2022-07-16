<?php include('header_front.php'); ?>

<?php
$id_training = 432; //เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.) การเก็บรักษาสารเคมีและวัตถุอันตราย ตามกฎหมายของกรมโรงงานอุตสาหกรรม

//หา banner
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
$stmt = $safetyDb->prepare($sql);
$stmt->execute(array($actual_link));
$menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

//หา course outline 
$stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
$stmt->execute(array($id_training));
$url_course_outline = $stmt->fetchColumn();
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
            <h2 class="text-center"><b>เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.)
                    การเก็บรักษาสารเคมีและวัตถุอันตราย ตามกฎหมายของกรมโรงงานอุตสาหกรรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (17).jpg"
                        alt="การอบรมหลักสูตรบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ตามที่กรมโรงงานอุตสาหกรรม ได้ออกประกาศกระทรวงอุตสาหกรรม เรื่อง
                                การกำหนดให้สถานประกอบการวัตถุอันตรายมีบุคลากรเฉพาะรับผิดชอบความปลอดภัยการเก็บรักษาวัตถุอันตรายที่กรมโรงงานอุตสาหกรรมรับผิดชอบ
                                พ.ศ. 2551 ได้กำหนดให้บุคลากรเฉพาะคือผู้ที่มีหน้าที่รับผิดชอบด้านความปลอดภัยใน
                                เรื่องการเก็บรักษาวัตถุอันตราย
                                จะต้องสอบผ่านการทดสอบวัดความรู้หลักสูตรความปลอดภัยการเก็บรักษาวัตถุ
                                อันตรายตามหลักเกณฑ์และวิธีการที่กรมโรงงานอุตสาหกรรมกำหนด
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
                                หลักสูตรนี้จึงจัดขึ้นมาเพื่อเป็นการเตรียมความพร้อมสำหรับบุคลากรเฉพาะรับผิดชอบความปลอดภัยการเก็บรักษาวัตถุอันตราย
                                ก่อนเข้ารับการทดสอบตามประกาศกระทรวงอุตสาหกรรม เรื่อง การกำหนดให้สถานประกอบการ
                                วัตถุอันตรายมีบุคลากรเฉพาะรับผิดชอบความปลอดภัยการเก็บรักษาวัตถุอันตราย
                                ที่กรมโรงงานอุตสาหกรรมรับผิดชอบ พ.ศ. 2551
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (12).jpg"
                        alt="การอบรมหลักสูตรบุคลากรเฉพาะ (บฉ.)">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.)
                    การเก็บรักษาสารเคมี<br>และวัตถุอันตรายตามกฎหมายของกรมโรงงานอุตสาหกรรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรเตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.)
                การเก็บรักษาสารเคมีและวัตถุอันตรายตามกฎหมายของกรมโรงงานอุตสาหกรรม
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="424" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training; ?>" href="#tab2" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
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

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy"
                    data-src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (2).jpg"
                    alt="บรรยากาศการอบรมบุคลากรเฉพาะ (บฉ.)">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ตามที่กรมโรงงานอุตสาหกรรม ได้ออกประกาศกระทรวงอุตสาหกรรม เรื่อง
                        การกำหนดให้สถานประกอบการวัตถุอันตรายมีบุคลากรเฉพาะรับผิดชอบ
                        ความปลอดภัยการเก็บรักษาวัตถุอันตรายที่กรมโรงงานอุตสาหกรรมรับผิดชอบ พ.ศ. 2551
                        ได้กำหนดให้บุคลากรเฉพาะคือผู้ที่มีหน้าที่รับผิดชอบ
                        ด้านความปลอดภัยใน เรื่องการเก็บรักษาวัตถุอันตราย
                        จะต้องสอบผ่านการทดสอบวัดความรู้หลักสูตรความปลอดภัยการเก็บรักษาวัตถุ
                        อันตรายตามหลักเกณฑ์และวิธีการที่กรมโรงงานอุตสาหกรรมกำหนด
                        หลักสูตรนี้จึงจัดขึ้นมาเพื่อเป็นการเตรียมความพร้อมสำหรับบุคลากรเฉพาะรับผิดชอบ
                        ความปลอดภัยการเก็บรักษาวัตถุอันตราย ก่อนเข้ารับการทดสอบตามประกาศกระทรวงอุตสาหกรรม เรื่อง
                        การกำหนดให้สถานประกอบการ
                        วัตถุอันตรายมีบุคลากรเฉพาะรับผิดชอบความปลอดภัยการเก็บรักษาวัตถุอันตราย
                        ที่กรมโรงงานอุตสาหกรรมรับผิดชอบ พ.ศ. 2551<br><br>

                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีความรู้
                        ความเข้าใจเกี่ยวกับความปลอดภัยในการเก็บรักษาวัตถุอันตราย<br>
                        2. เพื่อให้ผู้เข้ารับการอบรมเตรียมความพร้อมก่อนเข้ารับการทดสอบตามประกาศกระทรวงอุตสาหกรรม เรื่อง
                        การกำหนดให้สถานประกอบการ
                        วัตถุอันตรายมีบุคลากรเฉพาะรับผิดชอบความปลอดภัยการเก็บรักษาวัตถุอันตราย
                        ที่กรมโรงงานอุตสาหกรรมรับผิดชอบ พ.ศ. 2551<br><br>

                        เนื้อหาการอบรม<br>
                        - กฎหมายที่เกี่ยวข้อง<br>
                        - การจำแนกสารเคมีตามหลักสากล UN Transportation ,GHS<br>
                        - เกณฑ์การจำแนกสารเคมีวัตถุอันตรายเพื่อการจัดเก็บ<br>
                        - โครงสร้างอาคาร อุปกรณ์สิ่งติดตั้งคุ้มครองความปลอดภัยการเก็บรักษา<br>
                        - การดูแลรักษาสารเคมี และวัตถุอันตรายที่จัดเก็บ<br>
                        - ข้อกำหนดพิเศษที่จำเป็นกับสารเคมีวัตถุอันตรายบางประเภท<br>
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

    <section>
        <div class="schedule container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>ตารางกำหนดการฝึกอบรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="20%" scope="col">
                                <h5>วัน/เวลา</h5>
                            </th>
                            <th width="80%" scope="col">
                                <h5>กำหนดการฝึกอบรม</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr class="schedule_head_tr">
                            <td>
                                <b>วันที่ 1</b>
                            </td>
                            <td>
                                <b>เนื้อหาการบรรยาย</b>
                            </td>
                        </tr>

                        <tr>
                            <td>08:00- 08:30</td>
                            <td>- ลงทะเบียน / พิธีเปิด</td>
                        </tr>
                        <tr>
                            <td>08:30-09:00</td>
                            <td>Pre -Test (ทดสอบก่อนการอบรม)</td>
                        </tr>
                        <tr>
                            <td>09:00 - 10:30</td>
                            <td>(1) กฎหมายที่เกี่ยวข้อง
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>(2) การจำแนกสารเคมีตามหลักสากa UN Transportation , GHS</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>(3) เกณฑ์การจำแนกสารเคมีวัตถุอันตรายเพื่อการจัดเก็บ</td>
                        </tr>
                        <tr>
                            <td>12:00 - 13:00</td>
                            <td>พักเที่ยง</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>(4) โครงสร้างอาคาร อุปกรณ์สิ่งติดตั้งคุ้มครองความปลอดภัยการเก็บรักษา

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>(5) การดูแลรักษาสารเคมี และวัตถุอันตรายที่จัดเก็บ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>(6) ข้อกำหนดพิเศษที่จำเป็นกับสารเคมีวัตถุอันตรายบางประเภท</td>
                        </tr>
                        <tr>
                            <td>15:30 - 16:00</td>
                            <td> ทดสอบหลังการอบรม / มอบวุฒิบัตร
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>หมายเหตุ</b>
                            </td>
                            <td>
                                <b>
                                    - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                                    - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                                    ผ่านการทดสอบหลังอบรม
                                </b>
                            </td>
                        </tr>


                    </tbody>
                </table>

                <?php if (isset($url_course_outline)) { ?>
                <div class="col-lg-2 col-md-3 col-12 mt-5 mx-auto">
                    <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">
                        <button
                            class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                            เอกสารการอบรม
                        </button>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ(บฉ.)
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>

            <div class="text-center">
                <h5>ถ้าต้องการเตรียมความพร้อมที่จะเป็นบฉ.การเก็บรักษาสารเคมีและวัตถุอันตราย
                    ตามกฎหมายกระทรวงอุตสาหกรรม นี่คือหลักสูตรติวเพื่อวัตถุประสงค์ดังกล่าว วิธีการอบรม
                    จะเป็นการติวเข้ม
                    และมีการสอบเพื่อเป็นการทดสอบให้เกิดความมั่นใจในการไปสอบข้อสอบจริง
                    ของกรมโรงงานอุตสาหกรรม
                    จะช่วยทำให้ผู้รับการอบรมเข้าใจเนื้อหาและเจตนารมณ์ของกฎหมายที่เกี่ยวข้อง
                    และได้เห็นตัวอย่างการดำเนินงาน
                    ที่จะนำไปประยุกต์ในการทำงาน</h5> <br> <br>

            </div>

            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-01.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-02.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-03.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-04.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-05.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความบุคลากรเฉพาะ-06.jpg"
                        alt="หลักสูตรสำหรับอบรมบุคลากรเฉพาะ (บฉ.)">
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
                            <h5><b>การใช้งานสารเคมีและการเก็บอย่างถูกวิธี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) มีการจัดเก็บอย่างถูกวิธี และเก็บไว้ในที่ปลอดภัย<br>
                            (2) มีการกำจัดสารเคมีที่หกหรือรั่วอย่างถูกวิธี<br>
                            (3) กำจัดภาชนะที่ใช้แล้วอย่างถูกต้อง<br>
                            (4) ควรแบ่งสารเคมีมาใช้เท่าที่จำเป็น<br>
                            (5)
                            ภาชนะที่ใช้ควรมีป้ายหรือฉลากบอกชนิดของสารเคมีและควรปิดภาชนะทุกครั้งที่ใช้งานเสร็จ<br>
                            (6) ไม่ควรสูบบุหรี่ ดื่มหรือรับประทานอาหารขณะใช้สารเคมี<br>
                            (7) การเคลื่อนย้ายสารเคมี ควรใช้ด้วยความระมัดระวัง<br>
                            (8) เลือกใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคลที่เหมาะสมกับชนิดของสารเคมี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>บุคลากรเฉพาะมีหน้าที่อะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            บุคลากรเฉพาะมีหน้าที่และความรับผิดชอบ ดังนี้ <br>
                            (1)
                            ปฏิบัติงานให้สถานที่เก็บรักษาวัตถุอันตรายมีความปลอดภัยตามประกาศกรมโรงงานอุตสาหกรรม
                            เรื่อง คู่มือการเก็บรักษาสารเคมีและวัตถุอันตราย พ.ศ. 2550
                            หรือตามหลักเกณฑ์นานาชาติโดยความเห็นชอบจากกรมโรงงานอุตสาหกรรม <br>

                            (2) จัดทำแผนความปลอดภัยการเก็บรักษาวัตถุอันตรายประจำปีเก็บไว้ ณ
                            สถานที่เก็บรักษาวัตถุอันตรายสามารถให้พนักงานเจ้าหน้าที่ตรวจสอบรายงานได้ตลอดเวลา<br>
                            (3) จัดทำและรับรองรายงานความปลอดภัยการเก็บรักษาวัตถุอันตราย <br>
                            (4) ทำหน้าที่ให้ข้อมูลที่ถูกต้องต่อกรมโรงงานอุตสาหกรรม
                            กรณีที่เกิดอุบัติภัยจากสถานที่เก็บรักษาวัตถุอันตราย <br>
                            (5)
                            หากบุคลากรเฉพาะไม่ประสงค์ทำหน้าที่หรือไม่ได้รับมอบหมายจากผู้ประกอบการวัตถุอันตรายให้รับผิดชอบการเก็บรักษาวัตถุอันตรายต่อไป
                            <br>
                            แล้วแต่กรณีต้องแจ้งให้กรมโรงงานอุตสาหกรรมทราบล่วงหน้าเป็นลายลักษณ์อักษรไม่น้อยกว่า
                            15 วัน
                            ก่อนวันที่จะไม่ดำเนินการดังกล่าว <br>
                            (6)
                            การจดทะเบียนเป็นบุคลากรเฉพาะให้เป็นไปตามหลักเกณฑ์และวิธีการที่กรมโรงงานอุตสาหกรรมประกาศกำหนด<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>พื้นฐานในการควบคุมสารเคมี มีดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            หลักการที่ 1 แหล่งกำเนิดของสารเคมี (เป็นวิธีที่มีประสิทธิภาพสูงสุด)<br>
                            กำจัดสารที่เป็นอันตราย หรือทดแทนโดยการใช้สารอื่นที่มีอันตรายน้อยกว่า
                            เปลี่ยนกระบวนการผลิตใหม่ เช่น ใช้ระบบเปียกแทนระบบแห้ง
                            เพื่อมิให้เกิดฝุ่นฟุ้งกระจาย
                            แยกกระบวนการผลิตที่มีอันตรายออกต่างหาก
                            สร้างที่ปกปิดกระบวนการผลิตให้มิดชิด มิให้สารเคมีฟุ้งกระจายออกไป
                            ติดตั้งระบบดูดอากาศเฉพาะที่
                            การบำรุงรักษา เครื่องมือ เครื่องจักร<br><br>

                            หลักการที่ 2 ทางผ่านของสารเคมี<br>
                            การบำรุงรักษาสถานที่ทำงานให้สะอาดเรียบร้อย
                            การติดตั้งระบบระบายอากาศทั่วไป
                            เพิ่มระยะทางให้ผู้ปฏิบัติห่างจากแหล่งสารเคมี
                            การตรวจหาปริมาณสารเคมีเทียบกับค่ามาตรฐานความปลอดภัยจะต้องปรับปรุง
                            แก้ไขหากสูงเกินกว่าค่ามาตรฐานความปลอดภัย<br><br>

                            หลักการที่ 3 การป้องกันที่ผู้ปฏิบัติงาน<br>
                            การให้การศึกษาและการฝึกอบรมให้ทราบถึงอันตรายและการป้องกัน
                            การลดชั่วโมงการทำงานที่เกี่ยวกับสารเคมีที่เป็นอันตรายให้น้อยลง
                            การหมุนเวียนหรือการสับเปลี่ยนหน้าที่การปฏิบัติงาน
                            การให้ผู้ปฏิบัติงานทำงานอยู่ในห้องที่ควบคุมเป็นพิเศษ
                            การตรวจสุขภาพก่อนเข้าทำงาน
                            จัดให้มีอุปกรณ์ป้องกันอันตรายส่วนบุคคลที่เหมาะสมกับสภาพอันตราย
                            จัดเตรียมอุปกรณ์สำหรับการทำความสะอาดร่างกาย สถานที่เปลี่ยนและเก็บเสื้อผ้า
                            รวมถึงการจัดการซักผ้าที่ปนเปื้อนสารเคมี
                            ติดป้ายสัญลักษณ์ ห้ามปฏิบัติ/สิ่งที่ต้องปฏิบัติ เพื่อเตือนอันตราย เช่น
                            ระวังสารเคมีอันตราย
                            ห้ามสูบบุหรี่ เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สถานที่และอุปกรณ์เมื่อทำงานกับสารเคมีอันตราย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) ที่ชำระล้างสารเคมี
                            ติดตั้งให้ลูกจ้างสามารถใช้ได้ทันทีในกรณีฉุกเฉิน
                            อย่างน้อยต้องมีที่ล้างตาและฝักบัวชำระล้างร่างกายจากสารเคมีอันตราย<br>
                            (2) ที่ล้างมือและล้างหน้า
                            ไม่น้อยกว่า 1 ที่ต่อลูกจ้าง 15 คน และให้เพิ่มจำนวนขึ้นตามสัดส่วนของลูกจ้าง
                            (ส่วนที่เกิน 7
                            คนให้ถือเป็น 15 คน)<br>
                            (3) ห้องอาบนํ้า
                            เพื่อใช้ชำระร่างกายไม่น้อยกว่า 1 ห้องต่อลูกจ้าง 15 คน
                            และให้เพิ่มจำนวนขึ้นตามสัดส่วนของลูกจ้าง (ส่วนที่เกิน 7 คนให้ถือเป็น 15 คน)
                            และต้องจัดของใช้ที่จำเป็นสำหรับการชำระล้างสารเคมีอันตรายออกจากร่างกายให้เพียงพอและใช้ได้ตลอดเวลา<br>
                            (4) อุปกรณ์ปฐมพยาบาล
                            อุปกรณ์และเวชภัณฑ์ที่จำเป็นสำหรับการปฐมพยาบาลลูกจ้างที่ได้รับอันตรายจากสารเคมี<br>
                            (5) อุปกรณ์ดับเพลิง
                            ต้องเหมาะสมกับสารเคมีอันตรายแต่ละชนิด และเพียงพอสำหรับการผจญเพลิงขั้นต้น<br>
                            (6) ชุดทำงานกับสารเคมี
                            ชุดทำงานเฉพาะสำหรับลูกจ้างซึ่งทำงานเกี่ยวกับสารเคมีอันตรายและที่เก็บชุดทำงานที่ใช้แล้ว
                            ให้เหมาะสมกับสารเคมีอันตรายประเภทนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฏหมายความปลอดภัยเกี่ยวกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ห้ามนายจ้างยินยอมหรือปล่อยปละละเลยให้ลูกจ้างหรือบุคคลใดเข้าพักอาศัยหรือพักผ่อน
                            ในสถานที่ทำงานเกี่ยวกับสารเคมีอันตรายหรือในยานพาหนะขนส่งสารเคมี
                            นายจ้างผู้ใดฝ่าฝืนหรือไม่ปฏิบัติตามกฎหมายต้องระวางโทษจำคุกไม่เกิน 1 ปี
                            ปรับไม่เกิน 400,000
                            บาท หรือทั้งจำทั้งปรับ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>MSDS หรือ SDS หมายถึง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            เอกสารข้อมูลความปลอดภัยสารเคมี
                            ที่แสดงข้อมูลเฉพาะของสารเคมีแต่ละตัวเกี่ยวกับลักษณะความเป็นอันตรายของสารเคมีองค์ประกอบ
                            ของสารเคมี พิษ วิธีใช้ การเก็บ การกำจัดและการจัดการอื่น ๆ
                            ซึ่งจะต้องมีประจำไว้ในห้องปฏิบัติการทุกห้องเพื่อความสะดวกและความปลอดภัยในการใช้สารเคมีในห้องปฏิบัติการโดยข้อมูลที่แสดงในเอกสารต้องเป็นไปตาม
                            มาตรฐานที่กฎหมายกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อมูลที่อยู่ใน MSDS หรือ SDS ของสารเคมี ประกอบด้วย 16
                                    หัวข้อดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) ข้อมูลเกี่ยวกับสารเคมีและบริษัทผู้ผลิตและจัดจำหน่าย<br>
                            (2) องค์ประกอบ / ข้อมูลเกี่ยวกับองค์ประกอบของสารเคมี<br>
                            (3) ข้อมูลเกี่ยวกับอันตรายของสารเคมี<br>
                            (4) มาตรการปฐมพยาบาล<br>
                            (5) มาตรการการผจญเพลิง<br>
                            (6) มาตรการเมื่อมีอุบัติเหตุสารเคมีหกรั่วไหล<br>
                            (7) ข้อปฏิบัติการใช้สารเคมีและการเก็บรักษา<br>
                            (8) การควบคุมการสัมผัสสารเคมี / การป้องกันส่วนบุคคล<br>
                            (9) คุณสมบัติทางกายภาพและทางสารเคมี<br>
                            (10) ความเสถียรและการไวต่อปฏิกิริยา<br>
                            (11) ข้อมูลด้านพิษวิทยา<br>
                            (12) ข้อมูลผลกระทบต่อระบบนิเวศน์<br>
                            (13) ข้อพิจารณาในการกำจัด<br>
                            (14) ข้อมูลเกี่ยวกับการขนส่ง<br>
                            (15) ข้อมูลเกี่ยวกับกฎข้อบังคับ<br>
                            (16) ข้อมูลอื่น ๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุปกรณ์ป้องกันอันตรายจากสารเคมี มีอยู่หลายชนิดดังนี้</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) อุปกรณ์ป้องกันศีรษะ เช่น หมวกยาง หรือหมวกแข็ง<br>
                            (2) อุปกรณ์ป้องกันใบหน้า ดวงตา เช่น กะบังหน้า แว่นตาการสารเคมี<br>
                            (3) อุปกรณ์ป้องกันระบบทางเดินหายใจ เช่น หน้ากากป้องกันสารเคมี<br>
                            (4) อุปกรณ์ป้องกันมือ เช่น ถุงมือยาง<br>
                            (5) อุปกรณ์ป้องกันลำตัว เช่น ชุดป้องกันสารเคมีแบบใช้แล้วทิ้ง ชุด PVC<br>
                            (6) อุปกรณ์ป้องกันเท้า เช่น รองเท้ายาง รองเท้าบูท
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การปฏิบัติงานที่เกี่ยวข้องกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) การเตรียมสารเคมีพวกกรด ด่าง หรือสารระเหย ควรทำในตู้ดูดควัน<br>
                            (2) ห้ามเทน้ำลงกรด<br>
                            (3) ไม่ใช้จุกแก้วกับขวดบรรจุสารละลายด่าง เพราะจุกจะติดกับขวดจนเปิดไม่ได้<br>
                            (4) ไม่ใช้จุกยางกับขวดบรรจุตัวทำละลายอินทรีย์ เช่น แอลกอฮอล์ อะซีโตน<br>
                            (5) ห้ามใช้เปลวไฟในการให้ความร้อนแก่ของเหลวไวไฟ หรือในขบวนการกลั่น<br>
                            (6) หลีกเลี่ยงการสูดดมไอระเหยของสารเคมี
                            ห้ามทดสอบชนิดของสารเคมีโดยการดมกลิ่นโดยตรงอย่างเด็ดขาด<br>
                            (7) การดูดสารละลายโดยใช้ปิเปต ห้ามใช้ปากดูด ให้ใช้ลูกยาง<br>
                            (8) ในกรณีที่มีสารระเหยไวไฟ (Volatile flammable material)
                            ควรใช้ตู้ดูดควันในการถ่ายเท ผสม
                            หรือ ให้ความร้อนสารเคมี<br>
                            (9) อ่านคู่มือ และเพิ่มความระมัดระวังเป็นพิเศษ
                            เมื่อต้องปฏิบัติงานเกี่ยวข้องกับสารก่อมะเร็ง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเภทสารเคมีอันตรายตามหลักสากล</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            ประเภทที่ 1 วัตถุระเบิด : สารที่ก่อให้เกิดการระเบิด
                            ที่สามารถเกิดปฏิกิริยาทางเคมีได้ด้วยตัวมันเอง
                            ทำให้เกิดก๊าซที่มีความดันและเกิดความร้อนอย่างรวดเร็ว เช่น พลุอากาศ
                            ลูกระเบิด<br>
                            ประเภทที่ 2 ก๊าซ :
                            สารที่เกิดการรั่วไหลสามารถก่อให้เกิดอันตรายจากการลุกติดไฟหรือเป็นพิษ เช่น
                            ก๊าซหุงต้ม ก๊าซไนโตรเจน ก๊าซคาร์บอนไดออกไซด์<br>
                            ประเภทที่ 3 ของเหลวไวไฟ : ของเหลวผสมที่มีจุดวาบไฟ (Flash Point) ไม่เกิน 60.5
                            องศาเซลเซียส
                            เช่น อะซิโตน<br>
                            ประเภทที่ 4 ของแข็งไวไฟ :
                            ของแข็งที่สามารถติดไฟได้ง่ายจากการได้รับความร้อนจากประกายไฟ
                            หรือจากการเสีดสี เช่น กำมะถัน ฟอสฟอรัส<br>
                            ประเภทที่ 5 สารออกซิไดส์และออร์แกนิกเปอร์ออกไซด์:
                            สารออกซิไดส์เป็นสารที่ไม่ติดไฟแต่ให้ออกซิเจน ช่วยให้วัตถุอื่นเกิดการลุกไหม้
                            เช่น
                            โซเดียมเปอร์ออกไซด์ และสารออร์แกนิกเปอร์ออกไซด์ :
                            เป็นสารที่ช่วยในการเผาสารที่ลุกไหม้ หรือ
                            ทำปฏิกิริยากับสารอื่น เช่น อะซีโตนเปอร์ออกไซด์<br>
                            ประเภทที่ 6 สารพิษและสารติดเชื้อ : สารพิษ
                            เป็นสารที่สามารถทำให้เสียชีวิตหรือได้รับบาดเจ็บรุนแรงต่อสุขภาพของคน เช่น
                            โซเดียมไซยาไนด์
                            และสารติดเชื้อ : เป็นสารที่มีเชื้อโรคปนเปื้อน
                            เป็นสาเหตุของการเกิดโรคในสัตว์และคน เช่น
                            แบคทีเรีย<br>
                            ประเภทที่ 7 วัตถุกัมมันตรังสี :
                            วัตถุที่สามารถแผ่รังสีที่มองไม่เห็นอย่างต่อเนื่อง เช่น
                            โคบอลต์-60<br>
                            ประเภทที่ 8 สารกัดกร่อน : สารที่มีปฏิกิริยาเคมี
                            มีฤทธิ์กัดกร่อนทำความเสียหายต่อเนื้อเยื่อของสิ่งมีชีวิตอย่างรุนแรง เช่น
                            โซเดียวไฮดรอกไซด์<br>
                            ประเภทที่ 9 วัตถุอื่น ๆ ที่เป็นอันตราย
                            :สารหรือสิ่งของที่ในขณะขนส่งเป็นสารอันตราย
                            ไม่ได้จัดอยู่ในประเภทที่ 1-8 เช่น ปุ๋ย
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
        <?php $id_group = 17;
        include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/TWLWWMSLdS0?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid" src="<?php echo $base_url; ?>/img/bg/อันตรายจากสารเคมี.jpg"
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
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h4><b>สารเคมีอันตราย</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5 class="no_br">การทำงานกับสารเคมีอันตราย สารเคมีรั่วไหล ซึ่งอาจทำให้ลูกจ้างได้รับสารเคมี
                                อันตราย เช่น การผลิตการควบการหกรั่วไหลสารเคมี การติดฉลาก การห่อหุ้ม การเคลื่อนย้าย
                                การเก็บรักษา การถ่ายเท การขนถ่าย การขนส่ง การกำจัด
                                การทำลายการเก็บสารเคมีอันตรายที่ไม่ใช้แล้ว รวมทั้ง การป้องกัน การบำรุงรักษา การซ่อมแซม
                                และการทำความสะอาดเครื่องมือเครื่องใช้
                                ตลอดจนภาชนะบรรจุสารเคมีอันตรายควรจัดให้พนักงานที่ทำงานกับสารเคมีอันตรายได้รับการฝึกอบรมการทำงานกับสารเคมีก่อนทำงานเสมอ 
                            </h5>
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
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url; ?>/img/bg/ความปลอดภัยในการใช้สารเคมี-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="ความรู้สำหรับการอบรมบุคลากรเฉพาะ (บฉ.)">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ความปลอดภัยในการใช้สารเคมี</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            วัตถุดิบที่สำคัญที่เกี่ยวข้องกับการผลิตและอุตสาหกรรมคือ สารเคมี
                            และสารเคมีบางประเภทคือสิ่งที่ก่อให้เกิดอันตรายแก่ผู้ปฏิบัติงานหรือสิ่งที่เรียกว่า
                            สารเคมีอันตราย การทำงานกับสารเคมีอันตราย สารเคมีรั่วไหล
                            ซึ่งอาจทำให้ลูกจ้างได้รับสารเคมีอันตราย เช่น การผลิต
                            การควบการหกรั่วไหลสารเคมี การติดฉลาก
                            การห่อหุ้ม การเคลื่อนย้าย การเก็บรักษา การถ่ายเท การขนถ่าย การขนส่ง การกำจัด
                            การทำลาย
                            การเก็บสารเคมีอันตรายที่ไม่ใช้แล้ว รวมทั้ง การป้อง การบำรุงรักษา การซ่อมแซม
                            และการทำความสะอาดเครื่องมือเครื่องใช้ ตลอดจนภาชนะบรรจุสารเคมีอันตราย
                            การกำหนดตามมาตรฐานในการบริหารจัดการสารเคมี และดำเนินการด้านความปลอดภัย
                            อาชีวอนามัย
                            และสภาพแวดล้อม
                            ในการทำงานเกี่ยวกับสารเคมีอันตรายจึงเป็นสิ่งสำคัญต่อเหตุการณ์ฉุกเฉินสารเคมีรั่วไหล
                            และมีความปลอดภัยของผู้ปฏิบัติงาน สิ่งแวดล้อม
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="ความปลอดภัยในการใช้สารเคมี">
                                <button
                                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                                    รายละเอียดเพิ่มเติม
                                </button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <ul>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมมีความรู้ ความเข้าใจ
                            ต่อการจัดการความปลอดภัยในการทำงานกับสารเคมี
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมสามารถนำความรู้เรื่องจัดการสารเคมีไปใช้ในการปฎิบัติงานด้วยปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมทราบถึงชนิด อันตรายจากเคมีอันตรายในที่ทำงานที่มีผลต่อสุขภาพ
                            การจัดการสารเคมีอันตราย เช่น การใช้ การเก็บ การรักษา การขนย้าย สารเคมี
                            เป็นต้น
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0; ?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0; ?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0; ?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0; ?>;
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