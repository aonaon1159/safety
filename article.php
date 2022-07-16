<?php include('header_front.php'); ?>
<?php include('function.php'); ?>
<?php 
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt FROM article 
    WHERE status = "active" AND recommend = "active" AND del = "false"
    ORDER BY sequence');
    $stmt->execute();
    $article_recommend = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt FROM article 
    WHERE status = "active" AND del = "false"
    ORDER BY  `article`.`create_date` DESC');
    $stmt->execute();
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
@media (min-width: 360px) {
    .article-slider .article {
        max-width: calc(35vw + 140px);
        margin: 0 4rem 0 4rem;
    }
}

@media (min-width: 768px) {
    .article-slider .article {
        max-width: calc(50vw + 140px);
        margin: 0 2rem 0 2rem;
    }
}

@media (min-width: 1320px) {
    .article-slider .article {
        max-width: calc(50vw + 140px);
        margin: 0 3rem 0 3rem;
    }
}

@media (min-width: 1440px) {
    .article-slider .article {
        max-width: calc(40vw + 150px);
        margin: 0 4rem 0 4rem;
    }
}

@media (min-width: 1920px) {
    .article-slider .article {
        max-width: calc(35vw + 150px);
        margin: 0 5rem 0 5rem;
    }
}

.article-slider .article {
    opacity: 40%;
    box-shadow: 0 8px 6px -6px black;
    background: #fff;
    position: relative;
    overflow: hidden;
}

.slick-center .article {
    opacity: 100% !important;
}

.default-slider-3grid-2rows img,
.article-slider img {
    width: 100%;
    height: 100%;
}

.slick-dots {
    padding-top: 20px;
}

.slick-dots li button {
    width: 2rem;
    height: 2rem;
}

.bg-safety {
    background: linear-gradient(54deg, rgb(0, 128, 128) 8.5%, rgb(174, 206, 100) 118.2%);
    background-repeat: no-repeat;
    background-size: 100vw calc(20vh + 200px);
}

.text_shadow {
    text-shadow: 2px 2px 5px #0009;
}

@media (min-width: 768px) {
    .container_all_article {
        max-width: 80% !important;
    }
}

@media (min-width: 992px) {
    .container_all_article {
        max-width: 100% !important;
    }
}

@media (min-width: 1200px) {
    .container_all_article {
        max-width: 1100px !important;
    }
}

@media (min-width: 1440px) {
    .container_all_article {
        max-width: 1200px !important;
    }
}

@media (min-width: 1920px) {
    .container_all_article {
        max-width: 1300px !important;
    }
}

@media (min-width: 2560px) {
    .container_all_article {
        max-width: 1500px !important;
    }
}

.article .btn,
.container_all_article .btn {
    font-size: calc(0.4rem + 5px);
}

.slider-dots-3grid-2rows {
    width: 200px;
}

.slider-dots-3grid-2rows .slick-center li button {
    background: #22c06c;
}
</style>
<main id="main-container" class="main-container bg-safety">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white mb-5 pt-5">
                <span class="text_shadow" style="font-size: 2.5rem;"><b>บทความ</b></span>
                <h2 class="text_shadow">บทความด้านความปลอดภัยจากทีมงาน SAFETYINTHAI
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <div class="default-slider">
                    <div class="article-slider">

                        <?php foreach($article_recommend as $key=>$value){
                             $value['content'] = substr(strip_tags($value['content']),1,700);
                        ?>

                        <div class="article rounded_card">
                            <div class="row">
                                <div class="col-md-6 col-12 d-flex align-items-center">
                                    <img title="" class="lazy" data-src="<?php echo $base_url . $value['cover_img'];?>"
                                        alt="<?php echo $value['alt'];?>">
                                </div>
                                <div class="col-md-6 col-12 p-4">
                                    <div class="row article-fix-height mt-3">
                                        <h4><b><?php echo $value['topic'];?></b></h4>
                                    </div>
                                    <div class="row">
                                        <span class="pb-3 article_date"><?php echo DateThai($value['create_date']);?>
                                            <hr class="hr_gray">
                                        </span>
                                    </div>
                                    <div class="row">
                                        <p class="content-fix-line">
                                            <?php echo strip_tags($value['content']);?>
                                        </p>

                                    </div>
                                    <div class="row">
                                        <div class="ml-auto text-right pr-3 pb-4" style="">
                                            <a href="article_detail?article=<?php echo $value['topic']?>"
                                                class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular"
                                                tabindex="0">อ่านเพิ่มเติม
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row p-2 countview text-right">
                                        <span>
                                            <i class="fas fa-eye"></i>
                                            <?php echo $value['count_view'];?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container container_all_article">
        <div class="row mb-3 m-t-50">
            <div class="col-12">
                <h2><b>บทความทั้งหมด</b></h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <div
                    class="default-slider slider-dot slider-dot--center slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
                    <div class="default-slider-3grid-2rows gap__row--30">

                        <?php foreach($article as $key=>$value){
                             $value['content'] = substr(strip_tags($value['content']),1,800);
                        ?>
                        <div class="container">
                            <a href="article_detail?article=<?php echo $value['topic']?>">
                                <div class="box_shadow rounded_card mx-auto">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <figure class="overflow-hidden">
                                                <?php if($key < 9) { ?>
                                                <img title="" class="img-fluid img_cover"
                                                    src="<?php echo $base_url . $value['cover_img'];?>"
                                                    alt="<?php echo $value['alt'];?>">
                                                <?php }else{ ?>
                                                <img title="" class="img-fluid img_cover"
                                                    data-lazy="<?php echo $base_url . $value['cover_img'];?>"
                                                    alt="<?php echo $value['alt'];?>">
                                                <?php } ?>
                                            </figure>
                                        </div>

                                    </div>
                                    <div class="p-4 pb-5">
                                        <div class="row article-fix-height">
                                            <h4><b><?php echo $value['topic'];?></b></h4>
                                        </div>
                                        <div class="row">
                                            <span
                                                class="pb-3 article_date"><?php echo DateThai($value['create_date']);?>
                                                <hr class="hr_gray">
                                            </span>
                                        </div>
                                        <div class="row">
                                            <p class="content-fix-line">
                                                <?php echo strip_tags($value['content']);?>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="ml-auto col-6 text-right pr-3">
                                                <a href="article_detail?article=<?php echo $value['topic']?>"
                                                    class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular"
                                                    tabindex="0">อ่านเพิ่มเติม
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row countview p-2">
                                            <span>
                                                <i class="fas fa-eye"></i>
                                                <?php echo $value['count_view'];?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="d-flex justify-content-center slider-dot-style--fill-white-active-green">
                    <div class="slider-dots-3grid-2rows slick-dots">
                        <?php for ($i= 1; $i <= round((count($article) / 6)) ; $i++) { 
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