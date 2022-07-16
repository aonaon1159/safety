<?php include('header_front.php'); ?>

<?php 
    $id_training = 173;//การจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน

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
            <h2 class="text-center"><b>การจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (1).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทํางาน เป็นปัจจัยพื้นฐานในการทํางาน
                                ของพนักงานทุกคน ซึ่งถือเป็นภาระหน้าที่อย่างหนึ่งที่ทุกคนต้องช่วยกันปฏิบัติงาน
                                ด้วยความปลอดภัย
                                มีสุขภาพที่ดีและสภาพแวดล้อมที่เหมาะสมอย่างสม่ําเสมออย่างต่อเนื่อง
                                เพื่อป้องกันอันตรายที่อาจเกิดขึ้นได้
                                กฎ ข้อบังคับและคู่มือความปลอดภัยอาชีวอนามัย และสภาพแวดล้อมในการทํางานฉบับนี้ได้กําหนดกฎ
                                การปฏิบัติงานพร้อมทั้งอธิบายและชี้แจงถึงมาตรฐานของการปฏิบัติงาน
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
                                เพื่อให้เกิดความปลอดภัยไม่เกิดโรคจากการทํางาน
                                และไม่ให้มีผลกระทบต่อปัญหาด้านสิ่งแวดล้อมตามพื้นที่ปฏิบัติงานต่างๆ โดยเนื้อหาของ
                                กฎ ข้อบังคับฯ ฉบับนี้เป็นส่วนหนึ่งของแผนการจัดการด้านความปลอดภัย อาชีวอนามัย
                                และสภาพแวดล้อม
                                ในการทํางาน พนักงานทุกคนควรศึกษาคู่มือฉบับนี้อย่างละเอียดจนเกิดความเข้าใจ
                                และสามารถนําไปปฏิบัติได้
                                อย่างถูกต้อง และหรือศึกษาการปฏิบัติก่อนเริ่มปฏิบัติงานหรือเปลี่ยนงานใหม่ทุกครั้ง
                                ทั้งนี้เป็นการกําจัด ลด
                                ควบคุม ป้องกันการสูญเสียและความเสียหายที่อาจเกิดขึ้นต่อตนเอง ทรัพย์สิน และชุมชน

                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (2).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="435" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery10.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        กฎกระทรวงแรงงานกำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย
                        อาชีวอนามัยและสภาพแวดล้อมในการทำงาน พ.ศ.2549
                        ได้กำหนดเนื้อหาส่วนหนึ่งที่สำคัญยิ่งต่องานความปลอดภัยในการทำงาน ดังนี้ หมวด 1 บททั่วไป ข้อ 3
                        ให้นายจ้างจัดให้มีข้อบังคับและคู่มือว่าด้วยความปลอดภัย
                        ในการทำงานไว้ในสถานประกอบกิจการ ข้อบังคับว่าด้วยความปลอดภัยในการทำงานตามวรรคหนึ่ง
                        อย่างน้อยต้องกำหนดขั้นตอนและวิธีการปฏิบัติงานที่ปลอดภัย
                        เพื่อควบคุมมิให้มีการกระทำที่อาจก่อให้เกิดความไม่ปลอดภัยในการทำงานทั้งนี้นายจ้างต้องจัดให้มีการอบรมและฝึกปฏิบัติจนกว่าลูกจ้างจะสามารถทำงานได้อย่างถูกต้อง
                        ปลอดภัยรวมทั้งจัดวางระบบควบคุมกำกับดูแล
                        โดยกำหนดให้เป็นหน้าที่รับผิดชอบของเจ้าหน้าที่ความปลอดภัยในการทำงานทุกระดับ
                        ซึ่งข้อบังคับและคู่มือว่าด้วยความปลอดภัยในการทำงานมีความแตกต่างกัน ทั้งลักษณะของเนื้อหา
                        กระบวนการจัดทำ และการนำไปใช้ประโยชน์
                        จึงจำเป็นต้องมีความรู้ความเข้าใจเพื่อให้สามารถจัดทำและใช้ประโยชน์ได้อย่างถูกต้องและมีประสิทธิภาพตามเจตนารมณ์ของกฎหมาย<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้มีความรู้ความเข้าใจเกี่ยวกับข้อบังคับและคู่มือว่าด้วยความปลอดภัยในการทำงาน<br>
                        2) เพื่อทราบขั้นตอนในการจัดทำเนื้อหาข้อบังคับและคู่มือ<br>
                        3) เพื่อฝึกปฏิบัติการจัดทำข้อบังคับจากงานตัวอย่าง<br><br>

                        เนื้อหาการอบรม<br>
                        1) อธิบายเจตนารมณ์ของกฎหมายจัดทำข้อบังคับและคู่มือ<br>
                        2) ความแตกต่างของข้อบังคับและคู่มือว่าด้วยความปลอดภัยในการทำงาน<br>
                        3) เนื้อหาและขั้นตอนการจัดทำคู่มือว่าด้วยความปลอดภัยในการทำงาน<br>
                        4) ฝึกปฏิบัติการจัดทำคู่มือว่าด้วยความปลอดภัยในการทำงาน<br>
                        5) เนื้อหาและขั้นตอนการจัดทำข้อบังคับว่าด้วยความปลอดภัยในการทำงาน<br>
                        6)
                        การชี้บ่งอันตรายวิธีต่างๆและการประเมินความเสี่ยงเพื่อให้ได้มาตรการที่จะนำมาใช้จัดทำข้อบังคับว่าด้วยความปลอดภัยในการทำงาน<br>
                        7) ฝึกปฏิบัติการจัดทำข้อบังคับว่าด้วยความปลอดภัยในการทำงานจากงานตัวอย่าง
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

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    การจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-01.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-02.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-03.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-04.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-05.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความจิตสำนึกความปลอดภัยในการทำงาน-06.jpg"
                        alt="">
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
                            <h5><b>การจัดทำข้อบังคับและคู่มือความปลอดภัยในการทำงาน ประกอบด้วย</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) ขั้นตอนและวิธีปฎิบัติงานที่ปลอดภัย
                            ซึ่งจะมีความหมายในลักษณะเดียวกับมาตรฐานการปฏิบัติงานด้านความปลอดภัยที่รวมถึงขั้นตอนการปฏิบัติงานอย่างปลอดภัย<br>
                            (2)
                            สาหรับคู่มือว่าด้วยความปลอดภัยในการทางานจะเป็นเอกสารที่รวบรวมข้อมูลสำคัญเกี่ยวกับความปลอดภัยในการทำงาน
                            เช่น นโยบาย เป้าหมาย กฎระเบียบและข้อบังคับต่างๆ ซึ่งรวมถึงกฎหมาย กฎระเบียบ
                            ข้อแนะหรือมาตรฐานด้านความปลอดภัยในการทำงาน และมาตรการต่างๆ ในด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงานเพื่อประโยชน์ในด้านต่างๆเช่น
                            การควบคุมและป้องกันการประสบอันตรายจากการทำงาน การปฎิบัติงาน การฝึกอบรม การสอนงาน เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ส่วนประกอบของข้อบังคับและคู่มือว่าดวยความปลอดภัยในการทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) นโยบายอาชีวอนามัยความปลอดภัยและสภาพแวดล้อมในการทำงาน<br>
                            (2) โครงสร้างการบริหารจัดการอาชีวอนามัยความปลอดภัยและสภาพแวดล้อม
                            ในการทำงาน<br>
                            (3) บทบาทหน้าที่ของหน่วยงานความปลอดภัยและบุคคลากรที่เกี่ยวข้อง<br>
                            (4) กฎความปลอดภัยต่างๆ เช่น กฎความปลอดภัยทั่วไป , กฎความปลอดภัยเฉพาะงาน,
                            กฎความปลอดภัยเฉพาะพื้นที่<br>
                            (5) ขั้นตอนปฎิบัตังานอย่างปลอดภัย ( JSA )<br>
                            (6) ขั้นตอนการปฎิบิตักรณีเกิดเหตฉุกเฉิน<br>
                            (7) ระเบียบปฏิบัติ/คำสั่งต่างๆที่เกี่ยวกับความปลอดภัย<br>
                            (8) ข้อมูลอ้างอิงอื่นๆตามความเหมาะสม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>นโยบายอาชีวอนามัยและความปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) เป็นส่วนหนึ่งของธุรกิจ<br>
                            (2) เหมาะสมกับลักษณะและความเสี่ยง<br>
                            (3) ดำเนินการตามกฎหมายและข้อกำหนดอื่นๆ<br>
                            (4) ปรับปรุงและป้องกันอันตรายที่จะเกิดขึ้น<br>
                            (5) จัดสรรทรัพยากรให้เพียงพอและเหมาะสม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ระบบ Lock out/Tag out</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ระบบการปฏิบัติงานเฉพาะอย่างเพื่อควบคุมความเสี่ยงไม่ให้เกิดความสูญเสีย
                            ซึ่งสามารถใช้เป็นระบบอิสระหรือ
                            ร่วมกับระบบอนุญาตเข้าทำงานเฉพาะอย่าง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วัตถุประสงค์ของระบบล็อคกุญแจ (Lock Out)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) แยกพลังงานหรือทำให้เครื่องจักร อุปกรร์ไม่สามารถทำงาน<br>
                            (2) ตัดแหล่งกำเนิกพลังงาน การเดินเครื่องหรือการปลดปล่อยพลังงาน<br>
                            (3) ป้องกันการเกิดบาดเจ็บต่อพนักงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการวิเคราะห์งานเพื่อความปลอดภัย มี 4 ขั้นตอน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ขั้นตอนที่ 1 การเลือกงานที่ทำการวิเคราะห์<br>
                            ขั้นตอนที่ 2 การจัดลำดับวิธีการทำงานเป็นขั้นตอนที่เหมาะสม<br>
                            ขั้นตอนที่ 3 การค้นหาอันตรายที่จะเกิดขึ้นในแต่ละขั้นตอน<br>
                            ขั้นตอนที่ 4 การกำหนดวิธีการทำงานที่ถูกต้องปลอดภัยและสามารถป้องกันอันตรายที่พบได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการแก้ไขปัญหา ขจัด หรือลดอันตราย
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            โดยการประยุกต์หลักการป้องกัน ควบคุม
                            อันตรายที่เกิดจากสภาพการทำงานและ
                            สภาพแวดล้อมการทำงาน ดังนี้<br>
                            - การควบกุมที่แหล่งเกิดอันตราย (Source)<br>
                            - การควบคุมที่ทางผ่าน (Part)<br>
                            - การควบคุมที่ตัวบุคคล (Receiver)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>คำที่ไม่ควรใช้ในการเสนอมาตรการแก้ไข</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            - อย่าประมาท<br>
                            - โปรดระมัดระวัง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>คำที่ควรระบุที่ชัดเจนในการเสนอมาตรการแก้ไข</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            - ทำอะไร<br>
                            - ทำอย่างไร
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการวิเคราะห์งานเพื่อความปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            เพื่อค้นหาอันตรายหรืออุบัติเหตุที่อาจเกิดขึ้นจากในแต่ละส่วน
                            ของงานอันเป็นการกระทำพื้นฐานที่จะป้องกันอุบัติเหตุ
                            ไม่ให้เกิดขึ้น
                            ผู้ที่ทำการวิเคราะห์คือผู้ที่รู้ขั้นตอนของานนั้นดีที่สุด
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