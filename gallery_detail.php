<?php include('header_front.php'); ?>
<?php include('function.php'); ?>
<?php
    $stmt = $safetyDb->prepare('SELECT JSON_EXTRACT(date,"$.date") AS jsondate,topic_training,path,alt,name_th FROM gallery 
    LEFT JOIN provinces ON provinces.id = gallery.id_provinces 
    WHERE status = "active" AND del = "false" AND id_group = ? ORDER BY sequence');
    $stmt->execute(array($_GET['gallery']));
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $objdate = json_decode($gallery[0]['jsondate'] ,TRUE);
    foreach ($objdate as $key => $value) {
        $objdate[$key] = DateThai($value);
    }
?>
<style>
.shadow {
    box-shadow: 0 10px 8px -8px black !important;
}

.shadow:hover {
    transform: scale(1.2);
    z-index: 99;
}

.vbox-content {
    margin: 0 !important;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.fix-width {
    max-width: 30%;
    filter: invert(76%) sepia(54%) saturate(3794%) hue-rotate(95deg) brightness(92%) contrast(73%);
}

.fix-height {
    height: calc(1vw + 25px);
}

.opacity_green {
    position: relative;
}

.opacity_green:after {
    background: #22c06c;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    opacity: 0;
    content: "";
    -webkit-transition: opacity 0.5s;
    -moz-transition: opacity 0.5s;
    -o-transition: opacity 0.5s;
    transition: opacity 0.5s;
    opacity: 0.8;
}

.why_training_box {
    padding-right: 0px;
    padding-left: 0px;
}

@media (min-width: 768px) {
    .container_small {
        max-width: 700px;
    }
}

@media (min-width: 992px) {
    .container_small {
        max-width: 700px;
    }
}

@media (min-width: 1200px) {
    .container_small {
        max-width: 900px;
    }
}

@media (min-width: 1920px) {
    .container_small {
        max-width: 1200px;
    }
}
</style>
<main id="main-container" class="main-container">

    <section class="section_banner_full_width">
        <img alt="<?php echo $menu_branch[0]['alt'];?>" src="<?php echo $base_url;?>/img/bg/bg-gallery.jpg">
    </section>

    <section style="position:relative;">
        <div class="why_training_box container_small">
            <div class="row m-b-50 p-t-40">
                <div class="col-md-4 col-12 mb-3 px-4">
                    <div class="box_shadow rounded_card mx-auto p-5">
                        <figure>
                            <img title="" class="fix-width" src="<?php echo $base_url;?>/img/logo/open-book.svg" alt="">
                        </figure>
                        <br>
                        <h4><b>หลักสูตร : </b></h4>
                        <p class="fix-height"><?php echo $gallery[0]['topic_training'];?></p>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3 px-4">
                    <div class="box_shadow rounded_card mx-auto p-5">
                        <figure>
                            <img title="" class="fix-width" src="<?php echo $base_url;?>/img/logo/location.svg" alt="">
                        </figure>
                        <br>
                        <h4><b>สถานที่ : </b></h4>
                        <p class="fix-height"><?php echo $gallery[0]['name_th'];?></p>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3 px-4">
                    <div class="box_shadow rounded_card mx-auto p-5">
                        <figure>
                            <img title="" class="fix-width" src="<?php echo $base_url;?>/img/logo/calendar.svg" alt="">
                        </figure>
                        <br>
                        <h4><b>วันที่ : </b></h4>
                        <p class="fix-height"><?php echo implode('<br>' ,$objdate);?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="opacity_green section_banner_full_width">
        <img alt="<?php echo $menu_branch[0]['alt'];?>" src="<?php echo $base_url;?>/img/bg/bg_detail_gallery1.jpg">
    </section>

    <div class="container p-b-80 p-t-80">
        <div class="d-flex flex-wrap d-flex justify-content-center">
            <?php foreach($gallery as $key=>$value){?>
            <a class="col-lg-3 col-md-4 col-12 p-3 venobox_gallery" data-title="<?php echo $value['topic_training'];?>"
                data-gall="gallery" href="<?php echo $base_url . $value['path'];?>">
                <div class="box">
                    <img title="" class="img-fluid rounded shadow" src="<?php echo $base_url . $value['path'];?>"
                        alt="<?php echo ($value['alt']) ? $value['alt'] . " " . ($key+1) : "";?>">
                </div>
            </a>
            <?php } ?>
        </div>

    </div>
</main>

<?php include('footer_front.php'); ?>