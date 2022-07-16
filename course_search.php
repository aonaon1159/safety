<?php include('header_front.php'); ?>
<?php
$stmt = $safetyDb->prepare('SELECT path,alt,url FROM banner WHERE status = "active" AND del = "false" AND NOW() BETWEEN startDate AND endDate ORDER BY sequence');
$stmt->execute();
$banner = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%จป%" OR tags LIKE "%คปอ%"  ');
$stmt->execute();
$related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

//ตรวจสอบว่าอยู่ id_group = 17 หรือไม่ (หมวด 7 ด้านศูนย์ทดสอบ)
if (isset($_POST['sl_training']) && $_POST['sl_training']) {
    $stmt = $bookingDb->prepare('SELECT id_group FROM training WHERE id_training = ?');
    $stmt->execute(array($_POST['sl_training']));
    $id_group = $stmt->fetchColumn();
}
?>
<style>
.dot-gap__X--10 .slick-dots li {
    margin-right: 1vw;
}

.slider-dot-size--medium .slick-dots li button {
    width: 1vw;
    height: 1vw;
}

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
    <!-- ::::::  Start Hero Section  ::::::  -->
    <div class="white-bg p-b-30 slider-dot-fix slider-dot slider-dot--center slider-dot-size--medium slider-dot-circle
        slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10" style="position: relative;">
        <div class="hero mb-3">
            <?php foreach ($banner as $value) { ?>
            <div class="hero-slider">
                <a target="_blank" rel="noreferrer" href="<?php echo $value['url']; ?>"><img
                        src="<?php echo $base_url . $value['path']; ?>" alt="<?php echo $value['alt']; ?>"></a>
            </div>
            <?php } ?>
        </div> <!-- ::::::  End Hero Section  ::::::  -->
        <?php include('layout/tab_search.php'); ?>
    </div>

    <br><br>
    <section class="bg-white p-b-80 p-t-120">
        <div class="container">
            <h2 class="text-center"><b>ตารางอบรม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="table_search"></div>
        </div>
    </section>
    <br>

    <section>
        <?php include('toppromember.php');?>
    </section>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="bg-white p-b-60">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php include('layout/training_card.php'); ?>
    </section>

    <section <?php echo ($id_group == 17) ? "" : "class='bg-white p-t-10'"; ?>>
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <a href="จปออนไลน์">
        <section class="section_banner">
            <img alt="จปออนไลน์" src="<?php echo $base_url; ?>/img/bg/bg-covid1.png">
        </section>
    </a>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section class="p-b-80 p-t-80 black-bg">
        <div class="container">
            <div class="row">
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
                                <a class="btn btn--medium btn--radius btn--black btn--black-hover-green text-uppercase"
                                    href="gallery">อ่านเพิ่มเติม...
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/QEA4Erg0uSI?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid"
                                src="<?php echo $base_url; ?>/img/logo/preview_vd_jorpor.jpg" alt="">
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
            </div>
        </div>
    </section>

    <section class="bg-white">
        <?php include('layout/food.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section class="bg-white">
        <?php include('layout/customer.php'); ?>
    </section>
</main>


<?php include('footer_front.php'); ?>


<script>
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0; ?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0; ?>;
var sl_branch = "<?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0; ?>";
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0; ?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
$(document).on('submit', '#form_search', function() {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_group: $("#sl_group").val(),
            sl_training: $("#sl_training").val(),
            sl_branch: $("#sl_branch").val(),
            sl_month: $("#sl_month").val()
        },
        success: function(result) {
            $('.table_search').html(result);
            $('#overlay').css("display", "none");
            $(".search_box").css("z-index", "0");
        }
    });
    return false;
});

$.ajax({
    method: "POST",
    url: "plan_detail.php",
    data: {
        sl_group: sl_group,
        sl_training: sl_training,
        sl_branch: sl_branch,
        sl_month: sl_month
    },
    success: function(result) {
        $('.table_search').html(result);
    }
});
</script>