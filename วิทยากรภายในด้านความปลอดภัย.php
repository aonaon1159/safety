<?php include('header_front.php'); ?>

<?php 
    $id_training = 165;//วิทยากรภายในด้านความปลอดภัย

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
            <h2 class="text-center"><b>วิทยากรภายในด้านความปลอดภัย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (11).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การพัฒนาบุคลากรในองค์กรมีหลายวิธี การฝึกอบรม (Training)
                                เป็นเครื่องมือตัวหนึ่งที่ช่วยลดระยะเวลาในการพัฒนาบุคลากร
                                ทำให้บุคลากรมีประสิทธิภาพในการทำงานสูงขึ้น และทันกับความก้าวหน้าของเทคโนโลยีต่าง ๆ
                                ตลอดจนสามารถใช้การฝึกอบรมกับการพัฒนาทักษะด้านอ่อน (Soft Skill or Soft Side)
                                ให้กับบุคลากรในองค์กร เช่น ทัศนคติ ความฉลาดทางอารมณ์ หรือภาวะความเป็นผู้นำ เป็นต้น
                                เพื่อสร้างและปรับแนวคิด ไปสู่การเปลี่ยนแปลงค่านิยมและพฤติกรรมในการทำงาน
                                และการร่วมกันทำงานเป็นทีมอย่างมีความสุขได้
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
                                วิทยากรภายในองค์กรและ/หรือหัวหน้าตามสายปฏิบัติงานที่ต้องรับผิดชอบฝึกอบรมพนักงานให้มีประสิทธิภาพ
                                ควรมีการวางแผนและเตรียมการฝึกอบรมอย่างเป็นระบบ (Systematic Training)
                                มีความสามารถในการนำเสนอหรือถ่ายทอดอย่างมีประสิทธิภาพ
                                ตลอดจนมีคุณสมบัติที่ดีในการเป็นวิทยากร และเข้าใจบทบาทหน้าที่ของวิทยากร หรือเรียกว่ามี
                                “Mindset of Trainer” ที่ถูกต้องต่อวิชาชีพวิทยากรฝึกอบรม
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (8).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">วิทยากรภายในด้านความปลอดภัย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรวิทยากรภายในด้านความปลอดภัย
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">

                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab1" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="452" href="#tab2" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery7.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การสร้างวิทยากรภายในองค์กรเป็นสิ่งสำคัญที่แต่ละองค์กรจะต้องสร้างขึ้น เพราะวิทยากรภายใน
                        เป็นการสร้างผู้เชี่ยวชาญ และสามารถถ่ายทอดประสบการณ์ให้กับบุคลากร เช่น
                        การปฏิบัติงานภายในองค์กร ซึ่งวิทยากรภายในจะเข้าใจวัฒนธรรมขององค์กร ระบบงาน และทราบถึงปัญหาและเหตุปัจจัยต่าง ๆ
                        เป็นอย่างดี วิทยากรภายในจึงสามารถจัดการเนื้อหา ในการอบรมได้ตรงตามเป้าหมาย
                        รวมทั้งการสร้างวิทยากรภายในสามารถลดค่าใช้จ่ายในการจัดการอบรม
                        แทนการสรรหาวิทยากรภายนอกเพื่อเข้ามาอบรม
                        หลักสูตรวิทยากรภายในด้านความปลอดภัยเป็นหลักสูตรส่งเสริมความรู้ ทักษะ
                        ที่สำคัญในการเป็นวิทยากรได้อย่างมีประสิทธิภาพ<br><br>

                        วัตถุประสงค์<br>
                        1.ผู้เข้ารับการอบรมได้รับความรู้ความเข้าใจในการเป็นวิทยากรภายในด้านความปลอดภัย<br>
                        2.ผู้เข้ารับการอบรมสามารถนำความรู้ไปประยุกต์ใช้ต่อบทบาทการเป็นวิทยากรภายในด้านความปลอดภัย<br><br>

                        ผลที่คาดว่าจะได้รับ<br>
                        1. ผู้อบรมสามารถปฎิบัติงานได้ถูกต้องตามหลักการและเทคนิคการเป็นวิทยากร<br>
                        2.
                        ผู้อบรมสามารถนำความรู้ไปใช้ในการบริการจัดการด้านการออกแบบและการจัดการเรียนรู้ด้านความปลอดภัยได้ถูกต้อง
                        สอดคล้องกับกฎหมาย ระเบียบวิทยากรภายในด้านความปลอดภัย<br><br>

                        รูปแบบการฝึกอบรม<br>
                        1. เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2. เน้นการเรียนรู้แบบบูรณาการและภาพยนตร์<br>
                        3. เน้นกระบวนการสร้างสรรค์การเรียนรู้ (Constructive process of learning)<br>
                        4. เน้นการเรียนรู้แบบ Action Learning ฝึกปฏิบัติการเป็นวิทยากร (Role Play & Commentator)

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
                    วิทยากรภายในด้านความปลอดภัย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการเป็นวิทยากร-06.jpg" alt="">
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
                            <h5><b>วิทยากร คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            ผู้ที่ทำหน้าที่เป็นตัวการสำคัญ ที่จะทำให้ผู้เข้ารับการอบรม เกิดความรู้ความเข้าใจ เกิดทักษะ
                            เกิดทัศนคติที่ดีเกี่ยวกับเรื่องที่อบรม
                            จนกระทั่งผู้เข้ารับการอบรมเกิดการเรียนรู้และสามารถจุดประกาย
                            ความคิด เกิดการเปลี่ยนแปลงทัศนคติ หรือพฤติกรรมไปตามวัตถุประสงค์ของเรื่องหรือวิชานั้น ๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>คุณลักษณะของวิทยากร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            - บุคลิกภาพ<br>
                            - มีความรอบรู้<br>
                            - ไหวพริบปฏิภาณ<br>
                            - ร่าเริงสนุกสนาน<br>
                            - มีมนุษย์สัมพันธ์<br>
                            - มีความหยืดหยุ่น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การแต่งกาย ยึดหลัก 5 ส</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            - สุภาพ<br>
                            - สะอาด<br>
                            - สวมสบาย<br>
                            - สอดคล้องสถานการณ์<br>
                            - เสริมบุคลิกภาพ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <buttoๆn type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักสามใจ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            - สร้างความสนใจ<br>
                            - สร้างความเข้าใจ<br>
                            - เพื่อโน้มน้าวใจ
                        </div>
                    </buttoๆn>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจำและการเรียนรู้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            10 % - การอ่าน<br>
                            20 % - การได้ยิน<br>
                            30 % - การเห็น<br>
                            50 % - การเห็นและการได้ยิน<br>
                            70 % - การพูด<br>
                            90 % - การพูดและการทำ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเตรียมการของวิทยากร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            - เทคนิคการคัดกรองเนื้อหา<br>
                            - การจัดเรียงเนื้อหา<br>
                            - การเตรียมแผนการสอนและการออกแบบการสอน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักสำคัญ 3 คุม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) การควบคุมตนเอง<br>
                            (2) การควบคุมเนื้อหา<br>
                            (3) การควบคุมผู้ฟัง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>บันได 13 ขั้น</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) เตรียมให้พร้อม<br>
                            (2) ซักซ้อมให้ดี<br>
                            (3) ท่าทีให้สง่า<br>
                            (4) หน้าตาให้สุขุม<br>
                            (5) ทักที่ประชุมไม่วกวน<br>
                            (6) เริ่มต้นให้โน้มน้าว<br>
                            (7) เรื่องราวให้กระชับ<br>
                            (8) ตาจับที่ผู้ฟัง<br>
                            (9) เสียงดังให้พอดี<br>
                            (10) อย่าให้มีเอ้ออ้า<br>
                            (11) ดูเวลาให้พอกรบ<br>
                            (12) สรุปจบให้จับใจ<br>
                            (13) ยิ้มแย้มแจ่มใสตลอดการพูด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>
                                    การปรากฎกาย
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            - สง่างาม<br>
                            - จุดที่เหมาะสม<br>
                            - ยิ้มแย้มแจ่มใส<br>
                            - มีวัฒนธรรม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลัก 3 สบาย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) ฟังสบายหู<br>
                            (2) ดูสบายตา<br>
                            (3) พาสบายใจ
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