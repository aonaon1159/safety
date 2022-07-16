<?php include('header_front.php'); ?>
<?php     
    //หา course outline 
    $stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
    $stmt->execute(array($id_training));
    $url_course_outline = $stmt->fetchColumn();

    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูล choose branch
    $stmt = $safetyDb->prepare('SELECT url_page,namebranch FROM menu_branch WHERE status = "active" AND del = "false" AND ' . $type . ' = "active" ORDER BY namebranch,status DESC,update_time DESC');
    $stmt->execute();
    $choose_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $stmt = $safetyDb->prepare("SELECT path_banner,alt FROM menu_training WHERE url_page = ?");
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

.effect_lift_up_green {
    border: 2px solid rgba(255, 255, 255, .2);
}

.tab .nav-tabs li {
    width: 16.66%;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <div style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <?php include('layout/tab_search_branch.php'); ?>
    </div>

    <section class="white-bg p-t-50 padding_bottom">
        <?php include('layout/dsd.php'); ?>
    </section>

    <section style="position:relative">
        <?php include('layout/why_training2.php'); ?>
    </section>

    <section class="padding_top">
        <?php include('layout/choose_branch.php'); ?>
    </section>

    <section class="white-bg p-b-80 p-t-80" id="table_course">
        <div class="container">
            <h2 class="text-center"><b class="head_nav">จป.หัวหน้างาน ออนไลน์</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมที่ต้องการได้
                โดยเลือกหลักสูตรอบรมจป.หัวหน้างานออนไลน์ จป.บริหารออนไลน์
                <br>จป.บริหารENGออนไลน์ คปอ.ออนไลน์ คปอ.ENGออนไลน์ หรือจป.เทคนิคออนไลน์ ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="text-center" role="presentation"><a data-id_training="285" href="#tab1"
                                    class="active" role="tab" data-toggle="tab"></i>
                                    <h5>จป.หัวหน้างาน ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="286" href="#tab2"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="295" href="#tab3"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.บริหาร ENG ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="288" href="#tab4"
                                    role="tab" data-toggle="tab">
                                    <h5>คปอ. ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="358" href="#tab5"
                                    role="tab" data-toggle="tab">
                                    <h5>คปอ. ENG ออนไลน์</h5>
                                </a></li>
                            <li class="text-center" role="presentation"><a data-id_training="287" href="#tab6"
                                    role="tab" data-toggle="tab">
                                    <h5>จป.เทคนิค ออนไลน์</h5>
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
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="table4"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab5">
                                <div class="table5"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab6">
                                <div class="table6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/principle.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/schedule_detail.php'); ?>
    </section>

    <section>
        <?php include('layout/qualification.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/table_appointment.php'); ?>
    </section>

    <section>
        <?php include('layout/table_korporor.php'); ?>
    </section>

    <section class="white-bg bg_information">
        <?php include('layout/useful_information.php'); ?>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <a href="หลักสูตรinhouse">
        <section class="section_banner_full_width">
            <img alt="" src="<?php echo $base_url; ?>/img/bg/banner_inhouse.jpg">
        </section>
    </a>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section>
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <a href="จปออนไลน์">
        <section class="section_banner">
            <img alt="" src="<?php echo $base_url; ?>/img/bg/bg-covid1.png">
        </section>
    </a>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section>
        <?php include('layout/video_course.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/related_article.php'); ?>
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
            sl_group: 22
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
});

$(".nav-tabs li a").on("click", function() {
    $(".head_nav").text($(this).text());
    get_qualification($(this).attr("data-id_training"));
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