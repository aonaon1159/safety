<?php include('header_front.php'); ?>
<?php include('function.php'); ?>
<?php
    if(empty($_POST['dateS'])){
        $stmt = $safetyDb->prepare('SELECT id_gallery,name_th,topic_training,JSON_EXTRACT(date,"$.date") AS jsondate,path,alt FROM gallery 
        LEFT JOIN provinces ON provinces.id = gallery.id_provinces
        WHERE status = "active" AND del = "false" AND sequence = 1
        ORDER BY jsondate DESC');
        $stmt->execute();
    }else{
        $dateS_search = strval(date("Y-m-d", strtotime($_POST['dateS'])));
        $range = $_POST['range'];

        $arrayDate=[];
        for($i=0; $i<=$range ; $i++){
            array_push($arrayDate , date("Y-m-d",strtotime("$i day", strtotime($dateS_search))));
        }

        foreach($arrayDate as $value) {
            $date_having[] = " jsondate LIKE '%" . $value . "%'";
        }

        if(!empty($date_having)){
            $having[] = " (" . implode(' OR ' ,$date_having) . ") ";
        }

        $sql = 'SELECT id_gallery,name_th,topic_training,JSON_EXTRACT(date,"$.date") AS jsondate,path,alt FROM gallery 
        LEFT JOIN provinces ON provinces.id = gallery.id_provinces
        WHERE status = "active" AND del = "false" AND sequence = 1';

        if(!empty($having)) {
            $sql .= " HAVING ". implode(' AND ', $having);
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
    }
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
.default-slider-3grid-2rows img {
    width: 100%;
    height: 30vh;
    filter: brightness(50%);
}

.box {
    position: relative;
}

.gallery {
    max-width: 80vw !important;
    box-shadow: 0 8px 6px -6px black;
    margin: auto;
}

.namebranch {
    white-space: nowrap;
    max-width: 50%;
    overflow: hidden;
    text-overflow: ellipsis;
}

table tbody>tr td {
    padding: 2px 7px !important;
}

table thead>tr>th {
    padding: 5px !important;
}

.slick-dots {
    padding-top: 20px;
}

.slick-dots li button {
    width: 2rem;
    height: 2rem;
}

.text_over {
    color: #fff;
    position: absolute;
    z-index: 99;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 40%;
    /* Adjust this value to move the positioned div up and down */
    text-align: center;
    width: 60%;
    /* Set the width of the positioned div */
}

@media (min-width: 768px) {
    .container_gallery {
        max-width: 500px;
    }
}

@media (min-width: 992px) {
    .container_gallery {
        max-width: 700px;
    }
}

@media (min-width: 1200px) {
    .container_gallery {
        max-width: 900px;
    }
}

@media (min-width: 1920px) {
    .container_gallery {
        max-width: 900px;
    }
}

.container_gallery {
    margin-right: auto;
    margin-left: auto;
}

#date:focus {
    border-color: #22c06c;
    box-shadow: 0 0 0 0.2rem rgb(34 192 108 / 25%);
}

.fix-height {
    height: calc(3vw + 150px);
    overflow: hidden;
}

@media (min-width: 769px) {
    .padding_140 {
        padding-top: 140px;
    }
}

.slider-dots-4grid-2rows {
    width: 200px;
}

.slider-dots-4grid-2rows .slick-center li button {
    background: #22c06c;
}
</style>
<main id="main-container" class="main-container">
    <div class="m-b-50" style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>" src="<?php echo $base_url;?>/img/bg/bg-gallery.jpg">
        </section>
        <div class="tab_search">
            <div class="container_gallery search_box box_shadow pt-4 pb-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2><b>ค้นหาภาพอบรม</b></h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-4 col-10 mt-2 mb-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <label class="text-nowrap">วันที่ : &nbsp;</label>
                            <div class="header-search__content pos-relative border_gradient"
                                style="border-radius: 5px !important;">
                                <input type="text" id="date" placeholder="เลือกวันที่" class="form-control"
                                    style="border: 0;"
                                    value="<?php echo (isset($_POST['dateS'])) ? (strval(date("d-m-Y", strtotime($_POST['dateS']))) . " | " . strval(date("d-m-Y", strtotime($_POST['dateE'])))) : "" ;?>">
                                <button class="pos-absolute" style="border-right:double 2px #22c06c"
                                    aria-label="Search">
                                    <img src="<?php echo $base_url;?>/img/logo/calendar.svg" alt=""
                                        style="max-width: 70%;filter: invert(50%) sepia(3%) saturate(1283%) hue-rotate(167deg) brightness(89%) contrast(88%);">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-9 text-center align-self-center mt-2 mb-3">
                        <button
                            class="btn btn-block btn--medium btn--radius btn--transparent btn--green btn--green-hover-black font--light text-uppercase submit-search">
                            <i class="fas fa-search"></i>
                            &nbsp;ค้นหา
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row padding_140">
            <div class="col-12 mb-3">
                <div
                    class="default-slider slider-dot slider-dot--center slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
                    <div class="default-slider-4grid-2rows gap__row--20">
                        <?php foreach($gallery as $key=>$value){
                            $objdate = json_decode($value['jsondate'] ,TRUE);
                        ?>
                        <div class="container p-b-30 px-4">
                            <div class="box_shadow rounded_card ">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <figure class="fix-height">
                                            <img title="" class="img-fluid img_cover"
                                                src="<?php echo $base_url . $value['path'];?>"
                                                alt="<?php echo $value['alt'];?>">
                                        </figure>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="gallery-fix-height">
                                        <h6 class="mb-5"><b><?php echo $value['topic_training'];?></b></h6>
                                    </div>
                                    <hr>
                                    <div class="row mb-3 d-flex align-items-center">
                                        <div class="col-2">
                                            <img title="" class="img-fluid"
                                                src="<?php echo $base_url;?>/img/logo/calendar.svg" alt="">
                                        </div>
                                        <div class="col-10"><?php echo DateThai($objdate[0]);?></div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-2">
                                            <img title="" class="img-fluid"
                                                src="<?php echo $base_url;?>/img/logo/location.svg" alt="">
                                        </div>
                                        <div class="col-10"><?php echo $value['name_th'];?></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="gallery_detail?gallery=<?php echo $value['id_gallery']?>"
                                        class="col-6 text-white text-center black-bg p-3"><b><img
                                                style="max-width: 18%;filter: invert(97%) sepia(96%) saturate(11%) hue-rotate(340deg) brightness(104%) contrast(101%);display: inline-block;"
                                                src="<?php echo $base_url;?>/img/logo/picture.svg" alt="">
                                            &nbsp;ดูทั้งหมด</b>
                                    </a>
                                    <a target="_blank" rel="noreferrer"
                                        href="http://www.facebook.com/sharer.php?u=<?php echo urlencode($_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/".pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)."?gallery=".$value['id_gallery']); ?>"
                                        class="col-6 text-white text-center green-bg p-3"><b><img
                                                style="max-width: 16%;filter: invert(97%) sepia(96%) saturate(11%) hue-rotate(340deg) brightness(104%) contrast(101%);display: inline-block;"
                                                src="<?php echo $base_url;?>/img/logo/share.svg" alt=""> &nbsp;แชร์</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="d-flex justify-content-center slider-dot-style--fill-white-active-green">
                    <div class="slider-dots-4grid-2rows slick-dots">
                        <?php for ($i= 1; $i <= ceil((count($gallery) / 8)) ; $i++) { 
                        ?>
                        <li role="presentation" class=""><button type="button" role="tab"
                                id="slick-slide-control1<?php echo $i;?>" aria-controls="slick-slide1<?php echo $i;?>"
                                tabindex="-1"><?php echo $i;?></button></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include('footer_front.php'); ?>

<script>
$('#date').daterangepicker({
    opens: 'left',
    locale: {
        format: 'DD-MM-YYYY',
        separator: " | "
    }
});

$(".submit-search").on("click", function() {
    startDate = $('#date').data('daterangepicker').startDate.format('YYYY-MM-DD');
    endDate = $('#date').data('daterangepicker').endDate.format('YYYY-MM-DD');

    $.ajax({
        method: "POST",
        url: "gallery.php",
        data: {
            dateS: startDate,
            range: moment(endDate).diff(moment(startDate), 'day')
        },
        success: function(result) {
            $('body').html(result);
        }
    });
});

$("#date").on("change", function() {
    startDate = $('#date').data('daterangepicker').startDate.format('YYYY-MM-DD');
    endDate = $('#date').data('daterangepicker').endDate.format('YYYY-MM-DD');
});
</script>