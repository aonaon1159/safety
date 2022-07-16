<?php include('header_front.php'); ?>

<?php 
    $id_training = 394;//การสร้างจิตสำนึกด้านสิ่งแวดล้อมและความปลอดภัย

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
            <h2 class="text-center"><b>การสร้างจิตสำนึกด้านสิ่งแวดล้อมและความปลอดภัย</b></h2>
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
                            จิตสํานึกและรับผิดชอบต่อสิ่งแวดล้อม (Environmental Responsibility – ER)
                            คือ การมีจิตสํานึก ตระหนัก ให้ความสําคัญ และมีความรับผิดชอบต่อสังคมและสิ่งแวดล้อม รวมทั้ง
                            มีความมุ่งมั่น และทุ่มเทที่จะอนุรักษ์และรักษาสิ่งแวดล้อม สังคม และชุมชนให้น่าอยู่ ตลอดจนเข้าไปมีส่วนร่วม
                            ในการปฏิบัติงานหรือร่วมกิจกรรมต่างๆ ที่เกี่ยวข้องกับสังคม และสิ่งแวดล้อมขององค์กรอย่างเต็มที่เพื่อเกิด
                            ประโยชน์ต่อชุมชน สังคม และสิ่งแวดล้อม

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
                            อบรมการสร้างจิตสำนึกด้านสิ่งแวดล้อมและความปลอดภัย ดีที่สุด ในปี 2022 ต้องอบรมที่ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a>
                            โครงการสร้างจิตสำนึกด้านความปลอดภัยการสร้าง จิตสำนึก และความรับผิดชอบกิจกรรมสร้างจิตสำนึกด้านความปลอดภัย
                            หลักสูตรการสร้างจิตสำนึกด้านความปลอดภัยจิตสำนึกด้านความปลอดภัย 4 แบบ เพื่อสร้างจิตสำนึกความปลอดภัยในการทำงานการสร้างจิตสํานึก compliance อบรม 1 วันจบ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%AA%E0%B8%A1%E0%B8%B2%E0%B8%8A%E0%B8%B4%E0%B8%81"> สมัครสมาชิก </a>จ่ายค่าอบรมถูกกว่า 
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
            <h2 class="text-center"><b class="head_nav">การสร้างจิตสำนึกด้านสิ่งแวดล้อมและความปลอดภัย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการสร้างจิตสำนึกด้านสิ่งแวดล้อมและความปลอดภัย
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="394" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
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
                        องค์กรต่าง ๆ ที่มีมาตรฐานในการบริหารจัดการย่อมให้ความสำคัญต่อด้านความปลอดภัย ความปลอดภัยต้องมาเป็นอันดับ
                        แรก (Safety First) การมีเป้าหมายด้านความปลอดภัยในการท าอุบัติเหตุให้เป็นศูนย์ (Zero Accident) นอกจากด้านความปลอดภัย
                        แล้วการบริหารการจัดการสิ่งแวดล้อมก็เป็นสิ่งสำคัญที่ต้องให้ความสำคัญควบคู่กันไป ดังนั้นการให้ความรู้ในการปฏิบัติตามกฎหมาย
                        ด้านความปลอดภัยในการทำงานและสิ่งแวดล้อมจึงเป็นสิ่งที่องค์กรควรส่งเสริมให้หัวหน้างานและพนักงาน เพื่อสร้างคุณภาพชีวิตที่ดี
                        ให้กับพนักงานและส่งเสริมภาพลักษณ์ที่ดีสร้างความเชื่อมั่นให้กับลูกค้าในลำดับต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. ผู้เข้ารับการอบรมเรียนรู้ เทคนิคการสร้างจิตสำนึกด้านความปลอดภัยและสิ่งแวดล้อมในการทำงาน<br>
                        2. ผู้เข้ารับการอบรมสามารถนำเทคนิคการสร้างจิตสำนึกด้านความปลอดภัยและสิ่งแวดล้อมในการทำงาน<br><br>
                        เนื้อหาการอบรม<br>
                        การสร้างจิตสำนึกด้านสิ่งแวดล้อม<br>
                        1. ความรู้เบื้องต้นมาตรฐานด้านสิ่งแวดล้อม ISO 14001 และกฎหมายสิ่งแวดล้อมที่สำคัญ<br>
                        2. สิ่งแวดล้อมที่เกี่ยวข้องกับการทำงานและการประเมินผลกระทบด้านสิ่งแวดล้อม<br>
                        3. การสร้างจิตสำนึกการจัดการสิ่งแวดล้อมในการทำงาน<br>
                        3.1 การประหยัดทรัพยากรต่างๆ<br>
                        3.2 ประโยชน์ของการสร้างจิตสำนึกด้านสิ่งแวดล้อม<br>
                        4. การจัดการสิ่งแวดล้อมให้มีคุณภาพอย่างต่อเนื่อง<br>
                        5. Workshop การประเมินผลกระทบด้านสิ่งแวดล้อม<br>
                        การจิตสำนึกด้านความปลอดภัยในการทำงาน <br>
                        1. ความหมายของอุบัติเหตุและความสำคัญของการลดอุบัติเหตุ<br>
                        2. ความหมายและคำจำจัดความด้านอาชีวอนามัยและความปลอดภัย <br>
                        ของคำว่า Incident , Near miss, Accident<br>
                        3. ความสูญเสียและผลกระทบจากอุบัติเหตุ<br>
                        4. แนวคิดและความสำคัญของ Zero Accident <br>
                        5. เทคนิคการจิตสำนึกด้านความปลอดภัยในการทำงาน<br>
                        5.1 Safety Talk 5.2 Safety week 5.3 Safety Patrol <br>
                        5.4 Safety Program by JSA & KYT 5.5 Lockout & Tag out<br>
                        6. Workshop วิเคราะห์หาสาเหตุการเกิดอุบัติเหตุ และแนวทางป้องกันและแก้ไขเชิงรุก<br><br>
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
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
            เทคนิค การจิตสำนึกด้านความปลอดภัยในการทำงานด้านสิ่งแวดล้อม
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="text-center">
                <h5>เทคนิคการจิตสำนึกด้านความปลอดภัยในการทำงาน หนึ่งในหลักการที่ช่วยเสริมสร้างจิตสำนึกด้านสิ่งแวดล้อมนั่นก็คือ JSA เครื่องมือในการช่วยวิเคราะห์ หรือ
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