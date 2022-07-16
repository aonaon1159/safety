<?php include('header_front.php'); ?>

<?php 
    $id_training = 461;//จิตสำนึกความปลอดภัยในการทำงาน

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
            <h2 class="text-center"><b>จิตสำนึกความปลอดภัยในการทำงาน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_mind (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                สิ่งที่ต้องคำนึงถึงเสมอในการปฏิบัติงานคือความปลอดภัย โดยเฉพาะลักษณะการทำงาน
                                ซึ่งมีความเสี่ยงที่จะได้รับ อันตรายจากการทำงานสูง
                                หากการป้องกันไม่รัดกุมเพียงพออาจก่อให้เกิดความเสียหายทั้งผู้ปฏิบัติงาน
                                วัตถุดิบและเครื่องจักรในการทำงาน
                                อุบัติเหตุส่วนใหญ่เกิดขึ้นจากการใช้เครื่องจักรโดยรู้เท่าไม่ถึงการณ์
                                และความประมาทของผู้ปฏิบัติงานเอง นอกจากนี้แล้วสภาพแวดล้อม ในการทำงาน เช่น
                                การวางผังโรงงาน อากาศ แสงสว่าง หรือเสียงก็อาจก่อให้เกิดอันตรายได้
                                หากสิ่งเหล่านั้นมีความบกพร่องและผิดจาก มาตรฐานที่กำหนดไว้
                                ดังนั้นความปลอดภัยในการทำงานจึงเป็นหัวใจสำคัญของการทำงาน
                                เมื่อมีความรู้และความเข้าใจที่ถูกต้องแล้วนั้น
                                โอกาสที่จะประสบอันตรายในขณะทำงานย่อมลดน้อยลง
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
                                ความปลอดภัยในการปฏิบัติงาน คือ สภาพที่ปลอดภัยจากอุบัติภัยต่างๆอันจะเกิดแก่ร่างกาย ชีวิต
                                หรือทรัพย์สินในขณะที่ปฏิบัติงาน ซึ่งก็คือ สภาพการทำงานที่ถูกต้องโดยปราศจาก "อุบัติเหตุ"
                                ในการทำงานนั่นเอง หลักสูตรนี้จึงได้ถูกออกแบบให้สร้างจิตสำนึกให้กับผู้เข้าอบรม
                                เพื่อให้อุบัติเหตุในการปฏิบัติงานเป็นศูนย์ และลดเหตุการณ์ที่เกิดขึ้นอย่างไม่คาดหมาย
                                เพื่อลดผลกระทบ กระเทือนต่อการทำงาน ที่จะทำให้ทรัพย์สินเสียหายหรือ บุคคลได้รับบาดเจ็บ
                                จากการเกิดอุบัติเหตุ
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_mind (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">จิตสำนึกความปลอดภัยในการทำงาน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรจิตสำนึกความปลอดภัยในการทำงาน
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="462" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery_mind (6).jpg"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การส่งเสริมและสร้างจิตสํานึกด้านความปลอดภัยในการทํางาน
                        โดยการปลูกจิตสํานึกของการรู้ถึงสาเหตุและผลกระทบ ที่อาจเกิดอุบัติเหตุ
                        รวมถึงกระบวนการหรือแนวทางแก้ไขปัญหาการควบคุมป้องกันและจัดการความปลอดภัย เมื่อเรารู้สาเหตุที่
                        ทําให้เกิดอุบัติเหตุ สามารถวางแผนและกําหนดมาตรการในการป้องกัน
                        รวมถึงคิดแนวทางควบคุมผลกระทบที่อาจเกิดตามมา จากอุบัติเหตุ
                        อันเป็นการสร้างและส่งเสริมอุบัติเหตุเป็นศูนย์ (Zero Accident)
                        ให้เกิดขึ้นภายในองค์กรต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. ผู้เข้ารับการอบรมเรียนรู้ เทคนิคการสร้างจิตสํานึกด้านความปลอดภัยในการทํางาน<br>
                        2. ผู้เข้ารับการอบรมสามารถนําเทคนิคการสร้างจิตสํานึกด้านความปลอดภัยในการทํางาน
                        เพื่อให้เกิดความปลอดภัยในองค์กร<br><br>
                        เนื้อหาการอบรม<br>
                        1. ความหมายของอุบัติเหตุและความสําคัญของการลดอุบัติเหตุ<br>
                        2. ความหมายและคําจําจัดความด้านอาชีวอนามัยและความปลอดภัยของคําว่า Incident , Near miss,
                        Accident<br>
                        3. ความสูญเสียและผลกระทบจากอุบัติเหตุ<br>
                        4. แนวคิด ความสําคัญของ และแนวการปฏิบัติตามมาตรฐานความปลอดภัยเพื่อให้เกิด Zero Accident<br>
                        5. เทคนิคการจิตสํานึกด้านความปลอดภัยในการทํางาน<br>
                        5.1 Safety Talk<br>
                        5.2 Safety week<br>
                        5.3 Safety Patrol<br>
                        5.4 Safety Program by JSA & KYT<br>
                        5.5 Lockout & Tag out<br>
                        6. Work shop วิเคราะห์หาสาเหตุการเกิดอุบัติเหตุ และแนวทางป้องกันและแก้ไขเชิงรุก
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
                    จิตสำนึกความปลอดภัยในการทำงาน
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
                            <h5><b>อุบัติเหตุจากการทำงานสามารถแบ่งออกเป็น 2 สาเหตุ คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) สาเหตุจากการปฏิบัติงานที่ไม่ปลอดภัย (Unsafe Act)<br>
                            เป็นการกระทำที่ไม่ปลอดภัยของผู้ปฏิบัติงานในขณะทำงาน ซึ่งอาจก่อให้เกิดอุบัติเหตุได้ เช่น<br>
                            - การใช้อุปกรณ์เครื่องมือที่เป็นเครื่องจักรกลต่าง ๆ โดยพลการหรือไม่ได้รับมอบหมาย<br>
                            - การทำงานที่มีอัตราเร่งความเร็วของงานและเครื่องจักรเกินกำหนด<br>
                            - การถอดอุปกรณ์ป้องกันออกจากเครื่องจักรโดยไม่มีเหตุอันสมควรสมควร<br>
                            - การดูแลซ่อมบำรุงอุปกรณ์เครื่องจักรในขณะที่กำลังทำงาน<br>
                            - การใช้เครื่องมืออุปกรณ์เครื่องจักรที่ชำรุดและไม่ถูกวิธี<br>
                            - ไม่ใส่ใจในคำแนะนำหรือคำเตือนความปลอดภัย<br>
                            - ทำการเคลื่อนย้ายหรือยกวัสดุที่มีขนาดใหญ่ มีน้ำหนักมาก
                            ด้วยท่าทางหรือวิธีการที่ไม่ปลอดภัย<br>
                            - ไม่สวมใสอุปกรณ์ป้องกันอันตรายส่วนบุคคล<br>
                            - การคึกคะนองหรือเล่นตลกขณะทำงาน<br>
                            (2) สภาพการทำงานที่ไม่ปลอดภัย (Unsafe Condition)<br>
                            คือสภาพแวดล้อมที่ไม่ปลอดภัยโดยรอบตัวของผู้ปฏิบัติงานขณะทำงาน
                            ซึ่งอาจเป็นสาเหตุของการเกิดอุบัติเหตุได้ เช่น<br>
                            - เครื่องจักรไม่มีอุปกรณ์ป้องกันอันตราย<br>
                            - อุปกรณ์เครื่องมือเครื่องจักรที่ออกแบบไม่เหมาะสมกับการใช้งาน<br>
                            - บริเวณพื้นที่ของการปฏิบัติงานไม่เหมาะสม<br>
                            - การจัดเก็บวัสดุสิ่งของอย่างไม่ถูกวิธี<br>
                            - การจัดเก็บสารเคมีหรือสารไวไฟที่เป็นอันตรายไม่ถูกวิธี<br>
                            - ไม่มีการจัดระเบียบและดูแลความสะดวกของสถานที่ทำงานให้ถูกต้องตามสุขลักษณะ<br>
                            - แสงสว่างไม่เพียงพอ<br>
                            - ไม่มีระบบระบายและถ่ายเทอากาศที่เหมาะสม<br>
                            - ไม่มีระบบเตือนภัยที่เหมาะสม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุบัติการณ์ (Incident) คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            เหตุการณ์ที่เกิดขึ้นโดยไม่คาดคิดเป็นเหตุน าไปสู่การเกิด
                            อุบัติเหตุ (Accident) หรือ เกือบเกิดอุบัติเหตุ (Near Miss)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุบัติเหตุ (Accident) คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            เหตุการณ์ไม่พึงประสงค์ ที่อาจเกิดขึ้น โดยไม่ได้คาดคิดไว้ล่วงหน้า หรือขาดการควบคุม
                            แต่เมื่อเกิดขึ้นแล้วมีผลให้เกิดการบาดเจ็บ เจ็บปุวย เสียชีวิตหรือความ
                            สูญเสียต่อทรัพย์สินสภาพแวดล้อมหรือสาธารณชน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เหตุการณ์เกือบเกิดอุบัติเหตุ (Near Miss) คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เหตุการณ์ไม่พึงประสงค์เมื่อเกิดขึ้นแล้ว
                            มีแนวโน้มที่จะก่อให้เกิดเป็นอุบัติเหตุ หรือเกือบได้รับบาดเจ็บ เจ็บปุวย เสียชีวิต
                            หรือความสูญเสียต่อ
                            ทรัพย์สิน สภาพแวดล้อมหรือสาธารณชน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความสูญเสียจากอุบัติเหตุ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            การเกิดอุบัติเหตุในแต่ละครั้ง ย่อมก่อให้เกิดความสูญเสียมากมาย นอกจากจะเกิดการบาดเจ็บ
                            การเจ็บป่วย หรือเสียชีวิต หรือแม้แต่ทรัพย์สินเสียหาย อุปกรณ์ เครื่องมือ
                            เครื่องจักรที่เกิดความเสียหาย ค่าใช้จ่ายในการซ่อมบำรุงแล้ว
                            ยังรวมถึงการสูญเสียเวลาในการผลิตที่ต้องหยุดและค่าใช้จ่ายอื่นๆ
                            หรือแม้แต่เสียภาพพจน์ของบริษัทความสูญเสียหรือค่าใช้จ่ายอันเนื่องมาจากการเกิดอุบัติเหตุในโรงงานอุตสาหกรรมนั้นอาจแบ่งออกได้เป็น
                            2 ประเภทใหญ่ ดังนี้คือ<br>
                            (1) ความสูญเสียทางตรง (Direct Loss) หมายถึง
                            จำนวนเงินที่ต้องจ่ายไปอันเกี่ยวเนื่องกับผู้ได้รับบาดเจ็บโดยตรงจากการเกิดอุบัติเหตุ
                            หรือเป็นค่าเสียหายที่แสดงให้เห็นอย่างเด่นชัด ได้แก่<br>
                            (1.1) ค่ารักษาพยาบาล<br>
                            (1.2) ค่าทดแทนจากการได้รับบาดเจ็บ<br>
                            (1.3) ค่าทำขวัญ<br>
                            (1.4) ค่าทำศพ<br>
                            (1.5) ค่าประกันชีวิต<br>
                            (2) ความสูญเสียทางอ้อม (Indirect Loss) หมายถึง ค่าใช้จ่ายอื่นๆ
                            (ซึ่งส่วนใหญ่จะคำนวณเป็นตัวเงินได้)
                            นอกเหนือจากค่าใช้จ่ายทางตรงสำหรับการเกิดอุบัติเหตุในแต่ละครั้ง ได้แก่<br>
                            (2.1) การสูญเสียเวลาในการทำงานของ<br>
                            (2.1.1) คนงานหรือผู้บาดเจ็บ เพื่อรักษาพยาบาล<br>
                            (2.1.2) คนงานอื่นหรือเพื่อนร่วมงานที่ต้องหยุดชะงักชั่วคราว
                            เนื่องจากช่วยเหลือผู้บาดเจ็บโดยการปฐมพยาบาล หรือนำส่งโรงพยาบาล อยากรู้อยากเห็น
                            การวิพากษ์วิจารณ์ ความตื่นตกใจ<br>
                            (2.1.3) หัวหน้างานหรือผู้บังคับบัญชา เนื่องจากช่วยเหลือผู้บาดเจ็บ สอบสวน
                            หาสาเหตุของการเกิดอุบัติเหตุ บันทึกและจัดทำรายงานการเกิดอุบัติเหตุ
                            จัดหาคนงานอื่นและฝึกสอนให้เข้าทำงานแทนผู้บาดเจ็บ
                            หาวิธีแก้ไขและป้องกันอุบัติเหตุไม่ให้เกิดซ้ำอีก<br>
                            (2.2) ค่าใช้จ่ายในการซ่อมแซมเครื่องจักร เครื่องมือ อุปกรณ์ ที่ได้รับความเสียหาย<br>
                            (2.3) วัตถุดิบหรือสินค้าที่ได้รับความเสียหายต้องทิ้ง ทำลายหรือขายเป็นเศษ<br>
                            (2.4) ผลผลิตลดลง เนื่องจากกระบวนการผลิตขัดข้อง ต้องหยุดชะงัก<br>
                            (2.5) ค่าสวัสดิการต่างๆของผู้บาดเจ็บ<br>
                            (2.6) ค่าจ้างแรงงานของผู้บาดเจ็บซึ่งโรงงานยังคงต้องจ่ายตามปกติ
                            แม้ว่าผู้บาดเจ็บจะทำงานยังไม่ได้เต็มที่หรือต้องหยุดงาน<br>
                            (2.7) การสูญเสียโอกาสในการทำกำไร เพราะผลผลิตลดลงจากการหยุดชะงักของกระบวนการผลิต
                            และการเปลี่ยนแปลงความต้องการของตลาด<br>
                            (2.8) ค่าเช่า ค่าไฟฟ้า น้ำประปา และโสหุ้ยต่างๆที่โรงงานยังคงต้องจ่ายตามปกติ
                            แม้ว่าโรงงานจะต้องหยุดหรือปิดกิจการหลายวันในกรณีเกิดอุบัติเหตุร้ายแรง<br>
                            (2.9) การเสียชื่อเสียงและภาพพจน์ของโรงงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กิจกรรมการรณรงค์ลดสถิติอุบัติเหตุจากการทำงานให้เป็นศูนย์ (Zero Accident Campaign)</b>
                            </h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            เป็นกิจกรรมรณรงค์ส่งเสริมให้สถานประกอบกิจการมีความมุ่งมั่นในการป้องกันการเกิดอุบัติเหตุจากการทำงาน
                            บนพื้นฐานแนวคิดที่ว่า “อุบัติเหตุที่มีสาเหตุเกี่ยวเนื่องกับการทำงานสามารถป้องกันได้”
                            โดยการลดสถิติการประสบอันตรายในสถานประกอบกิจการให้เป็นศูนย์
                            ผ่านการวางแผนและบริหารจัดการความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานอย่างต่อเนื่อง
                            ยังผลให้เกิดวัฒนธรรมความปลอดภัยเพื่อแรงงานปลอดภัยและสุขภาพอนามัยดี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วัตถุประสงค์การทำ Safety Talk</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) เพื่อให้เกิดความตระหนักรู้ถึงอันตรายที่แฝงเร้นอยู่ในสภาพแวดล้อมของการทำงาน<br>
                            (2) เพื่อเสริมสร้างให้เกิดจิตสำนึกความปลอดภัย<br>
                            (3) เพื่อเป็นการแลกเปลี่ยนเรียนรู้ ในวิธีการแก้ไขปัญหาและวิธี
                            การปรับปรุงงานเพื่อให้เกิดความปลอดภัยในการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักสำคัญ 8 ประการในการทำ Safety Talk</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) Credibility ความน่าเชื่อถือ<br>
                            (2) Context ความเหมาะสมของเนื้อหา<br>
                            (3) Content สาระส่วนเนื้อหา<br>
                            (4) Continuous ความต่อเนื่อง<br>
                            (5) Channel ช่องทางข่าวสาร<br>
                            (6) Capability ความสามารถของผู้รับ<br>
                            (7) Clarity ความแจ่มแจ้ง<br>
                            (8) Confidence ความมั่นใจ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัจจัยการทำ Safety Talk ที่ทำให้ประสบความสำเร็จ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            - เสียงดังฟังชัด<br>
                            - สีหน้าสอดคล้องจริงใจ<br>
                            - สายตาสบกับคู่สนทนา<br>
                            - ท่าทางเป็นธรรมชาติและสื่อความหมาย<br>
                            - ภาษาเข้าใจง่าย<br>
                            - เนื้อหาได้ประโยชน์<br>
                            - วัตถุประสงค์ที่ชัดเจน<br>
                            - สร้างบรรยากาศที่ดี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Lockout Tagout สำคัญอย่างไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            การทำงานกับเครื่องจักรทุกชนิดมีความเสี่ยงสูงต้องมีการป้องกันตัวเองและควบคุมอันตรายเอาไว้ให้ดี
                            เพราะหากร้ายแรงก็เป็นอันตรายถึงชีวิตได้เลย
                            โดยเฉพาะระบบล็อคและการแขวนป้ายเพื่อป้องกันอันตรายสำคัญมากต้องมีการจัดอบรม Lockout Tag out
                            ทุกบริษัทเพื่อให้พักงานทำงานกันได้อย่างเต็มที่จะปลอดภัย
                            เพราะว่าในกระบวนการบางอย่างของการใช้งานเครื่องจักรเราก็อาจจะไม่รู้ว่าอะไรอันตรายบ้าง<br><br>
                            ระบบล็อค Lock out คือ
                            เป็นการล็อคและตัดแยกระบบพลังงานออกไป การล็อคนั้นคนที่อบรม Lockout Tag out
                            จะทราบดีว่าเป็นการสร้างความมั่นใจว่าพลังงานได้ถูกแยกไปแล้วอยู่ในการควบคุมให้หยุดทำงานไปจนกว่าจะเสร็จกระบวนการ<br><br>
                            การแขวนป้าย Tag out คือ
                            เป็นการแขวนป้ายบนอุปกรณ์ตัดแยกพลังงานโดยจะต้องทำงานพร้อมกันกับรถบบล็อค ถึงได้เรียกว่า LOTO
                            โดยป้ายทะเบียนนี้จะเป็นตัวบอกว่าตอนนี้พลังงานกลไลของเครื่องจักรนั้นได้หยุดทำงานลงไปแล้ว
                            จนกว่าจะเอาป้ายออก
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
                            src="<?php echo $base_url;?>/img/template_gallery/gallery_mind (9).jpg">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for($i = 1; $i <= 66 ; $i++){?>
                    <div>
                        <img src="<?php echo $base_url;?>/img/template_gallery/gallery_mind (<?php echo $i;?>).jpg"
                            alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
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