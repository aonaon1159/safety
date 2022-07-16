<?php include('header_front.php'); ?>

<?php
$id_training = 467; //ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน

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
            <h2 class="text-center"><b>ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (17).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การสร้างความปลอดภัยและอาชีวอนามัยในการทำงานจะส่งเสริมประสิทธิภาพในการทำงานทั้งต่อพนักงานและคู่ค้า
                                ผู้รับเหมา ตลอดจนผู้เกี่ยวข้องอื่นๆ
                                ให้สามารถทำงานได้อย่างต่อเนื่องควบคู่ไปกับการมีสุขอนามัยที่ดี นอกจากนี้
                                การบริหารโรงไฟฟ้าด้วยความมุ่งมั่นและใส่ใจต่อความปลอดภัยขั้นสูงสุดยังสร้างความเชื่อมั่นและไว้ใจให้เกิดขึ้นกับชุมชมโดยรอบอีกด้วย
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
                                จึงเป็นปัญหากับหลายองค์กรเกี่ยวกับการบ่งชี้รายการกฎหมายที่เกี่ยวข้องกับความปลอดภัย
                                อาชีวอนามัยและสภาพแวดล้อมในการทำงานขององค์กรที่มีความซับซ้อนและซ้ำกันเพื่อให้การดำเนินงานของทีมกฎหมายมีประสิทธิภาพจึงจำเป็นต้องมีการอบรมเพื่อทำให้สามารถบ่งชี้และขึ้นทะเบียนกฎหมายได้ถูกต้อง
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (11).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย
                    <br>อาชีวอนามัยและสภาพแวดล้อมในการทำงาน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย
                อาชีวอนามัยและสภาพแวดล้อมในการทำงาน
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="468" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url; ?>/img/template_gallery/gallery13.jpg"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        เนื่องด้วยปัจจุบัน ประเทศไทยได้ประกาศใช้ พรบ.ความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทำงาน พ.ศ.
                        2554 เป็นผลทำให้มีกฏกระทรวงแรงงานใหม่ๆ
                        ทยอยออกมาบังคับใช้อย่างต่อเนื่องและมีผลให้กฏหมายด้านความปลอดภัยในการทำงานมีการปรับปรุงอยู่ตลอดเวลา
                        สืบเนื่่องจากการปรับปรุงเปลี่ยนแปลงนี้
                        ทำให้โรงงานอุตสาหกรรมหรือสถานประกอบการที่เข้าข่ายที่ต้องทำตามกฏหมายปรับตัวไม่ทันเกิดผลเสียในด้านความเสี่ยงอันตรายที่เกิดกับพนักงานและเกิดความเสียงในการดำเนินธุรกิจ
                        เนื่องด้วยอำนาจแห่ง พรบ.ความปลอดภัยฯ ให้อำนาจเจ้าพนักงาน สั่งหยุดการดำเนินงาน
                        และยังกำหนดโทษสูงสุดไว้ จำคุกไม่เกิน 1 ปี และหรือปรับไม่เกิน 400,000 บาท
                        จึงมีความจำเป็นอย่างสูงยิ่งที่
                        หัวหน้างานและผู้บริหารต้องรู้และปฏิบัติให้สอดคล้องกับการเปลี่ยนแปลงที่เกิดขึ้น
                        เพื่อบริหารความเสี่ยงทางธุรกิจและบริหารความปลอดภัยในองค์กร<br><br>

                        หัวข้อการอบรม<br>
                        1) หลักการความสำคัญและความเป็นมาของ กฏหมายความปลอดภัยในการทำงาน<br>
                        2) วัตถุประสงค์และเหตุที่ต้องปฏิบัติตามกฏหมาย<br>
                        3) กฏหมายด้านความปลอดภัยในการทำงาน พรบ.ความปลอดภัยฯ 2554<br>
                        4) กฏกระทรวงและประกาศกรมสวัสดิการและคุ้มครองแรงงาน ที่กำเนิดจาก พรบ.ความปลอดภัยฯ 2554<br>
                        5) กฏกระทรวง ฉบับเดิม ที่ยังมีผลบังคับใช้<br>
                        6) หลักการประเมินความสอดคล้องและการบริหารงานด้านกฏหมายในองค์กร<br>
                        7) Work shop การทำ check list และ แผนงาน (ภาคปฏิบัติ)
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
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความฝึกประเมิน-03.jpg"
                        alt="ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความฝึกประเมิน-02.jpg"
                        alt="ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน">
                </div>
                <div class="col-md-4 col-12 mb-4 offset-md-2 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความฝึกประเมิน-01.jpg"
                        alt="ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความฝึกประเมิน-04.jpg"
                        alt="ฝึกประเมินความสอดคล้อง กฎหมายความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน">
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
                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap1">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การกระทำหรือสภาพการทำงานซึ่งปลอดจากเหตุอันจะทำให้เกิดการประสบอันตรายต่อชีวิต ร่างกาย จิตใจ
                            หรือสุขภาพอนามัยอันเนื่องจากการทำงานหรือเกี่ยวกับการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>นายจ้าง คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            นายจ้างตามกฎหมายว่าด้วยการคุ้มครองแรงงาน และให้หมายความรวมถึง
                            ผู้ประกอบกิจการซึ่งยอมให้บุคคลหนึ่งบุคคลใดมาทำงานหรือทำผลประโยชน์ให้แก่หรือในสถาน
                            ประกอบกิจการ ไม่ว่าการทำงานหรือการทำผลประโยชน์นั้นจะเป็นส่วนหนึ่งส่วนใด หรือทั้งหมดใน
                            กระบวนการผลิตหรือธุรกิจในความรับผิดชอบของผู้ประกอบกิจการนั้นหรือไม่กตาม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ลูกจ้าง คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ลูกจ้างตามกฎหมายว่าด้วยการคุ้มครองแรงงาน
                            และให้หมายความรวมงผู้ซึ่งได้รับความยินยอมให้ทำงานหรือทำผลประโยชน์ให้แก่หรือในสถานประกอบกิจการของนายจ้าง
                            ไม่ว่าจะเรียกชื่ออย่างไรก็ตาม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ผู้บริหาร คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            ลูกจ้างตั้งแต่ระดับผู้จัดการในหน่วยงานขึ้นไป
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หัวหน้างาน คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ลูกจ้างซึ่งทำหน้าที่ควบคุม ดูแล บังคับบัญชา หรือสั่งให้ลูกจ้าง
                            ทำงานตามหน้าที่ของหน่วยงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เจ้าหน้าที่ความปลอดภัยในการทำงาน คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            ลูกจ้างซึ่งนายจ้างแต่งตั้งให้ปฏิบัติหน้าที่ด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงานตามพระราชบัญญัตินี้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สถานประกอบกิจการ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            หน่วยงานแต่ละแห่งของนายจ้างที่มีลูกจ้างทำงานอยู่ใน
                            หน่วยงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>คณะกรรมการ คือ</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            คณะกรรมการความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                            ในการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การขอขึ้นทะเบียน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            บุคคลใดประสงค์จะให้บริการในการตรวจวัด ตรวจสอบ ทดสอบ รับรอง ประเมินความเสี่ยง
                            รวมทั้งจัดฝึกอบรมหรือให้คำปรึกษาเพื่อส่งเสริมความปลอดภัยอาชีวอนามัย และสภาพแวดล้อม
                            ในการทำงานตามมาตรฐานที่กำหนดในกฎกระทรวงที่ออกตามมาตรา 8 เป็นความประสงค์ของ
                            กรมสวัสดิการและคุ้มครองแรงงานจะต้องขึ้นทะเบียนต่อสำนักความปลอดภัยแรงงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            ให้นายจ้างจัดและดูแลให้ลูกจ้างสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลที่ได้มาตรฐานตามที่อธิบดีประกาศกำหนดลูกจ้างมีหน้าที่สวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลและดูแลรักษาอุปกรณ์ตาม
                            วรรคหนึ่งให้สามารถใช้งานได้ตามสภาพและลักษณะของงานตลอดระยะเวลาทำงานในกรณีที่ลูกจ้างไม่สวมใส่อุปกรณ์ดังกล่าว
                            ให้นายจ้างสั่งให้ลูกจ้างหยุดการทำงานนั้นจนกว่าลูกจ้างจะสวมใส่อุปกรณ์ดังกล่าว
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
        <?php include('layout/video_course.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/course_hot.php'); ?>
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