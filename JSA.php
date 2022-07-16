<?php include('header_front.php'); ?>

<?php
$id_training = 160; //การวิเคราะห์งานเพื่อความปลอดภัย (JSA)

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
            <img alt="<?php echo $menu_branch[0]['alt']; ?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner']; ?>">
        </section>
        <?php include('layout/tab_search.php'); ?>
    </div>

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>การวิเคราะห์งานเพื่อความปลอดภัย (JSA)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (7).jpg"
                        alt="การวิเคราะห์งานเพื่อความปลอดภัย (JSA)">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                หลายองค์กร
                                ยังคงมีปัญหาด้านความปลอดภัยในการทำงานอย่างต่อเนื่องและไม่สามารถจะหยุดยั้งอุบัติเหตุที่เกิดขึ้นได้
                                ซึ่งเป็นเรื่องที่เราสามารถทำได้โดยไม่ยากนักเพียงแค่อาศัยเครื่องมือที่เรียกว่า JSA (Job
                                Safety Analysis) หรือ JHA (Job Hazard Analysis) หรือ
                                เทคนิคการวิเคราะห์งานเพื่อความปลอดภัย นั่นเอง
                                แม้จะเป็นเครื่องมือวิเคราะห์ความเสี่ยงที่เป็นสากล,เข้าใจง่ายและได้ผลดี
                                แต่เป็นที่น่าเสียดาย ที่หลายๆองค์กรยังไม่รู้จักหรือยังขาดความรู้ความเข้าใจที่จะนำ JSA
                                มาใช้ให้เกิดประโยชน์กับองค์กร
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
                                ดังนั้นเพื่อให้ พนักงาน,หัวหน้างานและผู้บริหาร
                                ได้เข้าใจถึงประโชยน์และเทคนิควิธีการนำเครื่องมือ JSA ไปใช้ให้เกิดประโยชน์ต่อองค์กร
                                ลดตุ้นทุนที่เกิดจากอุบัติเหตุ,ลดการบาดเจ็บ และสร้างระบบบริหารงานความปลอดภัยฯ
                                ที่ดูแลได้ง่ายอย่างทั่วถึง เราขอให้ท่านพิจารณา หลักสูตร
                                เทคนิคการวิเคราะห์งานเพื่อความปลอดภัย (JSA)
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (10).jpg"
                        alt="การวิเคราะห์งานเพื่อความปลอดภัย (JSA)">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การวิเคราะห์งานเพื่อความปลอดภัย (JSA)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการวิเคราะห์งานเพื่อความปลอดภัย (JSA)
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="319" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                    alt="การวิเคราะห์งานเพื่อความปลอดภัย (JSA)">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ระบบการบริหารความปลอดภัยสมัยใหม่ (Modern Safety Management)
                        ซึ่งเป็นเครื่องมือในการบริหารจัดการด้านความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทํางานมีระบบบริหารจัดการด้านผลกระทบที่เกิดกับสุขภาพจากการทํางานของผู้ปฏิบัติงานและลดความสูญเสียจากอุบัติเหตุหรือเหตุฉุกเฉินจาก
                        การทํางานซึ่งเน้นให้ผู้บริหารทุกระดับมีกิจกรรมเรื่องความปลอดภัยร่วมกับผู้ปฏิบัติงานกิจกรรมส่วนใหญ่ที่นํามาปฏิบัติใช้จะเน้นการป้องกันและการจัดการที่ต้นเหตุการส่งเสริมให้พนักงานมีพฤติกรรมและวัฒนธรรมความปลอดภัย
                        การวิเคราะห์งานเพื่อความปลอดภัย “ Job Safety Analysis”
                        เป็นอีกเครื่องมือในการค้นหาอันตรายที่มีอยู่ในแต่ละขั้นตอนของการทํางานแล้วกําหนดมาตรการในการป้องกันอันตรายโดยมีวิธีการศึกษาและบันทึกขั้นตอนของงานเพื่อ
                        ค้นหาอันตรายที่แฝงอยู่ กําหนดแนวทางที่ดีที่สุดในการทํางานเพื่อลด ขจัด ป้องกันควบคุมอันตราย
                        ที่ควบคุมมากขึ้น
                        พนักงานมีทัศนคติที่ดีด้านความปลอดภัยและสามารถนําผลการวิเคราะห์ไปใช้ในการวางแผนงานด้านความปลอดภัย
                        และปรับปรุง วิธีการทํางานสภาพแวดล้อมในการทํางานน่าอยู่น่าทํางานและมีความปลอดภัยมากขึ้น<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้อบรมเข้าใจความหมาย และหลักการของการวิเคราะห์งานเพื่อความปลอดภัยได้อย่างถูกต้อง<br>
                        2. เพื่อให้ผู้อบรมสามารถค้นหาอันตรายพร้อมทั้งหาสาเหตุและแนวทางการ ป้องกันได้อย่างเหมาะสม<br>
                        3. เพื่อให้ผู้อบรมมีส่วนร่วมในการดําเนินกิจกรรมเพื่อความปลอดภัยและส่งเสริมให้องค์กรสามารถนําผล
                        การวิเคราะห์ไปใช้ในการวางแผนงานด้านความปลอดภัย และปรับปรุงวิธีการทํางาน สภาพแวดล้อม
                        ในการทํางานให้ดีขึ้นส่งเสริมวัฒนธรรมองค์กรด้านความ ปลอดภัย และมีความปลอดภัยมากขึ้น<br><br>
                        ผลที่คาดว่าจะได้รับ<br>
                        1. ผู้อบรมเข้าใจความหมาย
                        และหลักการของการวิเคราะห์งานเพื่อความปลอดภัยได้อย่างถูกต้อง<br>
                        2. ผู้อบรมสามารถค้นหาอันตรายพร้อมทั้งหาสาเหตุและแนวทางการ ป้องกันได้อย่างเหมาะสม<br>
                        3. ผู้อบรมมีส่วนร่วมในการดําเนินกิจกรรมเพื่อความปลอดภัยและส่งเสริมให้องค์กรสามารถนําผลการ
                        วิเคราะห์ไปใช้ในการวางแผนงานด้านความปลอดภัยและปรับปรุง วิธีการทํางาน สภาพแวดล้อมในการ
                        ทํางานให้ดีขึ้นส่งเสริมวัฒนธรรมองค์กรด้านความปลอดภัย และมีความปลอดภัยมากขึ้น<br><br>
                        รูปแบบการฝึกอบรม<br>
                        1. เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2. เน้นการแลกเปลี่ยนเรียนรู้กิจกรรมเกมและภาพยนตร์ (Game and movie activities)<br>
                        3. เน้นกระบวนการสร้างสรรค์การเรียนรู้ (Constructive process of learning)<br>
                        4. Action Learning กิจกรรมกลุ่มย่อย SGA. (Smal Group Activity)<br>
                        5. แบบทดสอบ Pre-Test /Post Test.
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
                    การวิเคราะห์งานเพื่อความปลอดภัย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="text-center">
                <h5>JSA คือ เครื่องมือในการช่วยวิเคราะห์ หรือ
                    ประเมินอันตรายปัจจุบันเป็นที่นิยมมากขึ้นในการนำมาใช้ประเมินความเสี่ยงอันตรายในงานต่าง ๆ
                    เพื่อหามาตรการควบคุมและป้องกันอันตรายหรืออุบัติเหตุในกิจกรรมนั้นๆ
                </h5> <br> <br>

            </div>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-06.jpg" alt="jsa การค้นหาอันตราย">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-05.jpg" alt="jsa การค้นหาอันตราย">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-04.jpg" alt="jsa การค้นหาอันตราย">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-03.jpg" alt="jsa การค้นหาอันตราย">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-02.jpg" alt="jsa การค้นหาอันตราย">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความJSA-01.jpg" alt="jsa การค้นหาอันตราย">
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
                            <h5><b>JSA คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            เครื่องมือในการช่วยวิเคราะห์ หรือ
                            ประเมินอันตรายปัจจุบันเป็นที่นิยมมากขึ้นในการนำมาใช้ประเมินความเสี่ยงอันตรายในงานต่าง ๆ
                            เพื่อหามาตรการควบคุมและป้องกันอันตรายหรืออุบัติเหตุในกิจกรรมนั้นๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการวิเคราะห์งานเพื่อความปลอดภัยอาศัยหลัก 3 ประการ คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) ตระหนักถึงอันตรายที่เกิดขึ้นจากการทำงาน<br>
                            (2) ประเมินผลของอันตรายนั้น<br>
                            (3) หามาตรการป้องกันหรือควบคุมอันตรายนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ผู้ดำเนินการวิเคราะห์งานเพื่อความปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ผู้ดำเนินการวิเคราะห์งานเพื่อความปลอดภัย ควรจะเป็นผู้ที่เข้าใจ ขั้นตอนการทำงาน (Process)
                            ของงานเป็นอย่างดี สามารถแยกแยะขั้นตอนของงานได้อย่างละเอียด และ
                            ทราบถึงอันตรายที่แฝงมากับขั้นตอนต่าง ๆ ได้ดี
                            นอกจากนั้นแล้วยังทราบถึงขนาดความรุนแรงของอันตรายและวิธีการป้องกันอันตรายนั้น
                            ผู้ที่ทำการประเมิน JSA ส่วนใหญ่จึงมักจะให้หัวหน้างาน หรือ จป ในองค์กรเป็นผู้จัดทำ JSA
                            เพราะมีความรู้ความเข้าใจมากกว่าพนักงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แนวทางการเลือกงานที่จะวิเคราะห์เพื่อความปลอดภัย JSA</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            โดยปกติแล้วงานทุกงานควรจะได้รับการวิเคราะห์เพื่อความปลอดภัย ไม่ว่างานนั้นจะเป็นงานพิเศษหรือ
                            งานประจำ แต่การที่จะเลือกเพื่อทำการวิเคราะห์นั้นจะต้องเป็นไปตามระดับอันตรายและความสำคัญของ
                            งานนั้น ในการจัดลำดับความสำคัญของงานต่าง ๆ ควรจะพิจารณาจากสถิติ , ข้อมูล และรายงานต่าง ๆ
                            ของหน่วยงานดังเช่น<br>
                            (1) ความถี่ของการเกิดอุบัติเหตุของงาน<br>
                            (2) งานที่ชั่วคราว หรือทำเป็นครั้งคราว<br>
                            (3) ลักษณะของความรุนแรงที่แฝงอยู่ในงาน<br>
                            (4) งานใหม่ที่เกิดจากการเปลี่ยนแปลงกระบวนการผลิตหรือเปลี่ยนแปลงการใช้เครื่องมือชนิดใหม่
                            เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การดำเนินการวิเคราะห์งานเพื่อความปลอดภัย </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ก่อนที่จะเริ่มลงมือวิเคราะห์งานเพื่อความปลอดภัย ควรจะได้ทำการสำรวจสภาวะแวดล้อมของงานนั้น ๆ
                            โดยใช้แบบฟอร์มสำรวจที่ประกอบด้วยรายละเอียดดังต่อไปนี้<br>
                            (1) มีวัสดุเกะกะอยู่กับพื้นที่อาจทำให้พนักงานสะดุดลื่นล้มหรือไม่<br>
                            (2) แสงสว่างในบริเวณพื้นพอเพียงหรือไม่<br>
                            (3) มีอันตรายที่อาจเกิดจากไฟฟ้าในบริเวณนั้นหรือไม่<br>
                            (4) มีเครื่องมือ เครื่องจักรหรืออุปกรณ์ที่ต้องซ่อมหรือไม่<br>
                            (5) มีเสียงดังในบริเวณงานที่เป็นอุปสรรคในการสนทนาหรือไม่<br>
                            (6) อาจมีการระเบิดในบริเวณนั้นหรือไม่<br>
                            (7) เครื่องป้องกันและผจญเพลิงมีพร้อมที่จะใช้ได้หรือไม่
                            และพนักงานได้รับการฝึกเพื่อใช้งานหรือไม่<br>
                            (8) เครื่องจักรกลที่ใช้ในการเคลื่อนย้ายสิ่งของที่ได้รับการติดตั้งอุปกรณ์ที่จำเป็นหรือไม่
                            เช่น
                            เบรก , ที่กั้น
                            เหนือศีรษะ , ให้สัญญาณ , เสียงสัญญาณ<br>
                            (10) มีการทำเครื่องหมายชี้ทางออกฉุกเฉินหรือไม่<br>
                            (11) พนักงานได้รับการฝึกอบรมในการทำงานหรือไม่<br>
                            (12) พนักงานได้สวมใส่อุปกรณ์ป้องกันในการทำงานอย่างเหมาะสมหรือไม่<br>
                            (13) มีพนักงานบ่นปวดศีรษะ มีปัญหาการหายใจ วิงเวียนหรือได้รับกลิ่นฉุนหรือไม่<br>
                            (14) การระบายอากาศมีเพียงพอหรือไม่<br>
                            (15) มีการทดสอบ , ตรวจวัดว่ามีปริมาณออกซิเจน , ไอหรือก๊าซพิษหรือไม่
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การกำหนด SSOP ประกอบไปด้วย 3 ส่วนสำคัญ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            - ก่อนปฏิบัติงาน<br>
                            - ขณะปฏิบัติงาน<br>
                            - หลังปฏิบัติงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ตัวอย่างการทำ SSOP</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            มาตรฐานความปลอดภัยในการทำงานงาน : ขัดแท่งเหล็กหล่อด้วยเครื่องขัดแบบแน่น<br>
                            (1) ตรวจสอบที่ยึดกล่องและยางขอบกล่องให้อยู่ในสภาพปกติ<br>
                            (2) ตรวจสอบการ์ดครอบล้อหินขัด<br>
                            (3) การ์ดป้องกันแท่งเหล็กหล่นใส่เท้าและฉากกั้นเศษโลหะให้อยู่ในสภาพพร้อมใช้งาน<br>
                            (4) สวมถุงมือหนัง, รองเท้านิรภัยและแว่นตานิรภัย<br>
                            (5) เปิดสวิตซ์ล้อหินขัด ฟังเสียงว่ามีสิ่งผิดปกติหรือล้อหินแกว่งผิดปกติหรือไม่<br>
                            (6) เอื้อมมือไปหยิบแท่งเหล็กหล่อและจับให้แน่น<br>
                            (7) กดแท่งเหล็กหล่อบนล้อหินขัด ด้วยความระมัดระวังอย่าให้มือกระทบกับล้อหินขัด<br>
                            (8) วางแท่งเหล็กหล่อที่จัดเสร็จในกล่องซ้ายมือ โดยให้แท่งเหล็กใส่เข้าไปอย่างน้อยครึ่ง หนึ่ง
                            (1/2) แล้วจึงปล่อย<br>
                            (9) เมื่อปฏิบัติงานเสร็จให้ดับสวิตซ์ล้อหิน<br>
                            (10) ทำความสะอาดล้อหินและบริเวณข้างเคียง ถอดถุงมือหนังและแว่นตานิรภัย
                            มาทำความสะอาดแล้วเก็บ<br><br>

                            ข้อ 1-4 = ขั้นตอนก่อนปฏิบัติงาน (มาตรการในการวิเคราะห์งานเพื่อความปลอดภัย JSA)<br>
                            ข้อ 5-7 = ขั้นตอนในขณะปฏิบัติงานเพื่อความปลอดภัย<br>
                            ข้อ 8-10 = ขั้นตอนหลังการปฏิบัติงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเลือกงานที่จะวิเคราะห์เพื่อความปลอดภัย</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            โดยปกติแล้วงานทุกงานควรจะได้รับการวิเคราะห์เพื่อความปลอดภัย ไม่ว่างานนั้นจะเป็นงานพิเศษหรือ
                            งานประจำ แต่การที่จะเลือกเพื่อทำการวิเคราะห์นั้นจะต้องเป็นไปตามระดับอันตรายและความสำคัญของ
                            งานนั้น ในการจัดลำดับความสำคัญของงานต่าง ๆ ควรจะพิจารณาจากสถิติ , ข้อมูล และรายงานต่าง ๆ
                            ของหน่วยงานดังเช่น<br>
                            (1) ความถี่ของการเกิดอุบัติเหตุของงาน<br>
                            (2) ความพิการที่เกิดจากการทำงานในแต่ละงาน<br>
                            (3) ลักษณะของความรุนแรงที่แฝงอยู่ในงาน<br>
                            (4) งานใหม่ที่เกิดจากการเปลี่ยนแปลงกระบวนการผลิตหรือเปลี่ยนแปลงการใช้เครื่องมือชนิดใหม่
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>พนักงานที่เกี่ยวข้องกับงานที่จะวิเคราะห์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            ในการวิเคราะห์งานเพื่อความปลอดภัยนั้น พนักงานมีส่วนร่วมในการวิเคราะห์เป็นอย่างมาก
                            เป็นทั้งผู้ช่วยเหลือในการให้คำตอบในขั้นตอนต่าง ๆ
                            หรือเป็นตัวอย่างสาธิตเพื่อวิจัยหาอันตรายที่แฝงมากับขั้นตอนการทำงาน
                            ดังนั้นจึงควรจะได้ดำเนินการในส่วนที่เกี่ยวข้องกับพนักงานดังนี้<br>
                            (1) ควรเลือกพนักงานที่มีประสบการณ์ในงานนั้น และเป็นผู้ที่ให้ความร่วมมืออย่างเต็มที่
                            ในการเฝ้าสังเกตการทำงาน<br>
                            (2)
                            ควรชี้แจงให้พนักงานทราบถึงวัตถุประสงค์ว่าเป็นการศึกษาเพื่อให้ทราบถึงอันตรายเพื่อการขจัดและการควบคุมอันตรายนั้น
                            มิใช่เป็นการเฝ้าสังเกตเพื่อจับผิดพนักงาน<br>
                            (3) ควรจะให้พนักงานได้มีส่วนร่วมในการวิเคราะห์งานทุกขั้นตอน
                            นับตั้งแต่การทบทวนเกี่ยวกับขั้นตอนต่าง ๆ ของงาน
                            การหารือเกี่ยวกับอันตรายที่แฝงอยู่ในงานนั้นและการเสนอแนะเพื่อการปรับปรุงแก้ไข
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการวิเคราะห์งานเพื่อความปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            การวิเคราะห์งานเพื่อความปลอดภัย เริ่มจาก<br>
                            (1) พิจารณาเลือกงานที่จะวิเคราะห์จากงานต่าง ๆ ในหน่วยงาน<br>
                            (2) งานที่ได้รับการเลือกเพื่อการวิเคราะห์มักเป็นงานที่มีอันตรายและความสำคัญสูงสุด<br>
                            (3) ควรจะชี้แจงและหารือกับพนักงานที่ทำงานนั้นให้เป็นที่เข้าใจแล้วจึง<br>
                            (4) แบ่งแยกงานที่จะวิเคราะห์ออกเป็นขั้นตอนย่อย ๆ ต่อไป<br>
                            (5) ค้นหาอันตรายที่อาจเกิดขึ้นในแต่ละขั้นตอน ขั้นต่อไปก็<br>
                            (6) เสนอแนะเพื่อการป้องกันอันตรายและปรับปรุงแก้ไขของแต่ละขั้นตอน<br>
                            (7) ดำเนินการปรับปรุงแก้ไขตามข้อเสนอแนะ<br>
                            (8) จะต้องมีการปรับปรุงแก้ไขการวิเคราะห์งานเพื่อความปลอดภัยเป็นระยะ
                            เพื่อให้การวิเคราะห์นั้นมีประสิทธิภาพสูงสุด
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/pxM0N9u__jI?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url; ?>/img/bg/Job-Safety-Analysis-JSA-Member.jpg" alt="">
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
                            <h4><b>แนวทางปฏิบัติการชี้บ่งอันตรายด้วยJSA </b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5 class="no_br">
                                การวิเคราะห์งานเพื่อความปลอดภัย “Job Safety Analysis”
                                เป็นอีกเครื่องมือในการค้นหาอันตรายที่มีอยู่ในแต่ละขั้นตอนของการทํางานแล้วกําหนดมาตรการในการป้องกันอันตรายโดยมีวิธีการศึกษาและบันทึกขั้นตอนของงานเพื่อ
                                ค้นหาอันตรายที่แฝงอยู่ กําหนดแนวทางที่ดีที่สุดในการทํางานเพื่อลด ขจัด
                                ป้องกันควบคุมอันตราย ที่ควบคุมมากขึ้น
                                พนักงานมีทัศนคติที่ดีด้านความปลอดภัยและสามารถนําผลการวิเคราะห์ไปใช้ในการวางแผนงานด้านความปลอดภัย
                                และปรับปรุง วิธีการทํางานสภาพแวดล้อมในการทํางานน่าอยู่น่าทํางานและมีความปลอดภัยมากขึ้น
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
                        src="<?php echo $base_url; ?>/img/bg/การปลูกฝังพฤติกรรมด้านความปลอดภัย (BBS Behavior Based Safety)-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การปลูกฝังพฤติกรรมด้านความปลอดภัย (BBS Behavior Based Safety)</b></br>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            การปลูกฝังพฤติกรรมความปลอดภัย หรือ Behavior-Based Safety
                            เป็นเทคนิคที่นำมาใช้อย่างแพร่หลายในการสร้างพฤติกรรมความปลอดภัยให้กับผู้ปฏิบัติงาน
                            โดยอาศัยหลักการทางจิตวิทยา
                            และวิทยาศาสตร์ในการศึกษาว่าทำไมคนแต่ละคนจึงมีพฤติกรรมความปลอดภัยแตกต่างกัน
                            หลักการสำคyญที่นำมาใช้ คือ การสังเกตความปลอดภัย (Safety Observation) การแก้ไขให้ถูกต้อง
                            (Corrective Action) การประเมินผล (Evaluation) ตลอดจนเทคนิคในการสื่อสารด้วยเทคนิคการโค้ช
                            เพื่อป้องกันการเกิดซ้ำ (Acts to Prevent Recurrence)
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การปลูกฝังพฤติกรรมด้านความปลอดภัย">
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
                            เพื่อให้ผู้เข้าอบรมมีความรู้ความเข้าใจในหลักการ จัดทำโครงการสร้าง Behavior Based Safety :BBS
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อสร้างพฤติกรรมการทำงานที่ปลอดภัยให้กับผู้ที่เข้าร่วมอบรม</li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้าอบรมมีความรู้และเข้าใจหลักการพื้นฐานในการกำจัดพฤติกรรมที่ไม่ปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้าอบรมมีความเข้าใจถึงความสำคัญในการสร้างพฤติกรรมปลอดภัย
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