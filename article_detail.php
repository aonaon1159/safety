<?php
    include_once('dbconnect_safety.php');
    include_once('base_url.php');
    include('function.php');

    //ดึงข้อมูล article
    $stmt = $safetyDb->prepare('SELECT id_article,cover_img,topic,meta_keyword,content,count_view,create_date,tag,promotion.name,promotion.path,promotion.alt,promotion.url,meta_description 
    FROM article 
    LEFT JOIN promotion ON promotion.id_promotion = article.id_promotion
    WHERE article.status = "active" AND article.del = "false" AND topic = ?');
    $stmt->execute(array($_GET['article']));
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($article){//ถ้ามีบทความให้ดำเนินการต่อ
        //เพิ่มจำนวนวิวบทความ
        $article[0]['count_view'] += 1;
        $stmt = $safetyDb->prepare('UPDATE article SET count_view = ?, update_time = NOW() WHERE id_article = ?');
        $result = $stmt->execute(array($article[0]['count_view'],$article[0]['id_article']));

        //เก็บข้อมูลรูป หัวข้อ รายละเอียด ที่จะใช้แชร์ไปใส่ใน header
        $article_title = $article[0]["topic"];
        $article_image = $base_url . $article[0]["cover_img"];

        $meta_keyword = $article[0]["meta_keyword"];
        $meta_description = $meta_description = isset($article[0]["meta_description"]) ? $article[0]["meta_description"] : trim(strip_tags($article[0]["content"]));
    }
    include('header_front.php');

    //ดึงข้อมูล article ล่าสุด
    $stmt = $safetyDb->prepare('SELECT id_article,topic,cover_img,alt,create_date 
    FROM article 
    WHERE status = "active" AND del = "false" 
    ORDER BY create_date DESC,update_time DESC
    LIMIT 3');
    $stmt->execute();
    $latest_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูล article ยอดนิยม
    $stmt = $safetyDb->prepare('SELECT id_article,topic,cover_img,alt,create_date
    FROM article 
    WHERE status = "active" AND del = "false"
    ORDER BY count_view DESC
    LIMIT 3');
    $stmt->execute();
    $hot_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูล promotion
    $stmt = $safetyDb->prepare('SELECT name,alt,path,url
    FROM promotion 
    WHERE status = "active" AND del = "false" AND NOW() BETWEEN startDate AND endDate
    ORDER BY sequence');
    $stmt->execute();
    $promotion = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($promotion){
        include_once('promotion_modal.php');
    }

?>
<style>
.related_article {
    padding: 0 5vw 0 5vw;
}

.slick-dots {
    padding-top: 20px;
}

.slick-dots li button {
    width: calc(1rem + 5px);
    height: calc(1rem + 5px);
}

.box_shadow dl,
.box_shadow ol,
.box_shadow ul {
    padding-left: 2rem !important;
}

.box_shadow li {
    list-style: disc !important;
}

.right__title {
    background-color: #22c06c;
    color: #fff;
    padding: 0.7rem;
    margin: auto;
}

.icon_share_facebook {
    filter: invert(30%) sepia(89%) saturate(467%) hue-rotate(183deg) brightness(88%) contrast(83%);
}

.icon_share_line {
    filter: invert(56%) sepia(41%) saturate(7351%) hue-rotate(90deg) brightness(107%) contrast(109%);
}

iframe {
    display: none;
}

@media (max-width: 767px) {
    .iframe-mobile-show {
        display: block;
    }
}

@media (min-width: 768px) {
    .iframe-destop-show {
        display: block;
    }
}

.gap_slider {
    padding-left: 20px;
    padding-right: 20px;
}

.detail_comment {
    font-size: calc(0.5vw + 5px);
}

.btn_promotion {
    background: #ff0000 !important;
    float: right;
    color: #ffffff !important;
}

.btn_promotion:hover {
    transform: scale(1.1);
}

.name_promotion {
    font-size: 1.75rem;
}

.close {
    color: #ff0000 !important;
    float: right;
    font-size: 1.3125rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}
.article-content a{
    color: #0d6efd;
    text-decoration: underline;
}
</style>

<main id="main-container" class="main-container">
    <section class="head__banner" style="position: relative;">
        <div class="container">
            <div class="row text_banner">
                <div class="col-12">
                    <h1><b>บทความ</b></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-5">
        <div class="row m-t-30">
            <div class="col-md-8 col-12 mb-5">
                <div class="box_shadow article-content p-3">
                    <?php if($article){ ?>
                    <div class="text-center">
                        <h1><b><?php echo $article[0]['topic']; ?></b></h1>
                    </div>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <br>
                    <?php echo $article[0]['content']; ?>

                    <?php }else{?>
                    <h3 class="text-center">ไม่พบข้อมูลบทความ</h3>
                    <?php } ?>
                </div>

                <?php 
                    if($article){
                        if($article[0]['path']){ ?>
                <div class="box_shadow p-3 mt-5">
                    <div class="row">
                        <div class="col-md-3 col-5">
                            <img title="" class="img-fluid lazy"
                                data-src="<?php echo $base_url . $article[0]['path'];?>"
                                alt="<?php echo $article[0]['alt'];?>">
                        </div>
                        <div class="col-md-9 col-7 d-flex flex-column justify-content-around text-center">
                            <span class="name_promotion"><?php echo $article[0]['name'];?>
                            </span>
                            <a class="btn btn--medium btn--radius btn_promotion mx-auto mb-1"
                                href="<?php echo $article[0]['url'];?>">จองอบรมตอนนี้
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="box_shadow p-3 mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h4><b>Comments</b></h4>
                            <hr class="hr_green hr_fix_width">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-3 col-4 p-3">
                            <img title="" class="img-fluid lazy"
                                data-src="<?php echo $base_url;?>/img/training_public/coach_img/businessman.png"
                                alt="businessman">
                        </div>
                        <div class="col-lg-11 col-md-9 col-8 p-3">
                            <input class="form-control required" id="name_commenter" name="name_commenter" type="text"
                                placeholder="ชื่อผู้แสดงความคิดเห็น">
                            <textarea class="form-control mt-3" id="comment" name="comment" rows="3"
                                placeholder="ความคิดเห็น"></textarea>
                            <button
                                class="btn btn--medium btn--radius btn--black btn--black-hover-green text-uppercase mt-3"
                                style="float: right;" onclick="send_comment()">
                                แสดงความคิดเห็น
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="div_comment">
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-4 col-12">
                <div class="box_shadow">

                    <?php if($promotion){?>
                    <div class="row right__title">
                        โปรโมชัน
                    </div>
                    <?php foreach($promotion as $key=>$value){?>
                    <a href="<?php echo $value['url'];?>">
                        <div class="row p-3 hover_green">
                            <div class="col-md-4 col-4">
                                <img title="" class="img-fluid lazy" data-src="<?php echo $base_url . $value['path'];?>"
                                    alt="<?php echo $value['alt'];?>">
                            </div>
                            <div class="col-md-8 col-8">
                                <p><?php echo $value['name'];?></p>
                            </div>
                        </div>
                    </a>
                    <?php } 
                    }
                    ?>

                    <div class="text-center"
                        style="vertical-align: bottom;width: 100%;height: 130px;background:linear-gradient(54deg, #7BC2DC 8.5%, #2792C3 118.2%);">
                        <iframe class="iframe-mobile-show"
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIamSafetyInThai&tabs=timeline&height=130&width=330&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
                            style="border:none;overflow:hidden;" width="330" height="130" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        <iframe class="iframe-destop-show"
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIamSafetyInThai&amp;tabs=timeline&amp;height=130&amp;width=480&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=true&amp;appId"
                            style="border:none;overflow:hidden;" width="480" height="130" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>

                    <div class="row right__title">
                        บทความล่าสุด
                    </div>
                    <?php foreach($latest_article as $key=>$value){?>
                    <a href="<?php echo $base_url;?>/article_detail?article=<?php echo $value['topic']?>">
                        <div class="row p-3 hover_green">
                            <div class="col-md-4 col-4">
                                <img title="" class="img-fluid lazy"
                                    data-src="<?php echo $base_url . $value['cover_img'];?>"
                                    alt="<?php echo $value['alt'];?>">
                            </div>
                            <div class="col-md-8 col-8">
                                <p><?php echo $value['topic'];?></p>
                                <span class="article_date pt-3"><?php echo DateThai($value['create_date']);?></span>
                            </div>
                        </div>
                    </a>

                    <?php } ?>

                    <div class="row right__title">
                        บทความยอดนิยม
                    </div>
                    <?php foreach($hot_article as $key=>$value){?>
                    <a href="article_detail?article=<?php echo $value['topic']?>">
                        <div class="row p-3 hover_green">
                            <div class="col-md-4 col-4">
                                <img title="" class="img-fluid lazy"
                                    data-src="<?php echo $base_url . $value['cover_img'];?>"
                                    alt="<?php echo $value['alt'];?>">
                            </div>
                            <div class="col-md-8 col-8">
                                <p><?php echo $value['topic'];?></p>
                                <span class="article_date"><?php echo DateThai($value['create_date']);?></span>
                            </div>
                        </div>
                    </a>
                    <?php } ?>


                    <div class="row right__title">
                        แบ่งปัน
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <a class="icon_share_facebook"
                                href="https://www.facebook.com/sharer/sharer.php?u=<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://เซฟตี้อินไทย.com$_SERVER[REQUEST_URI]";?>"
                                target="_blank" rel="noreferrer">
                                <img src="<?php echo $base_url;?>/img/logo/share-facebook.png" width="50" alt="">
                            </a>
                            <a class="icon_share_line"
                                href="https://social-plugins.line.me/lineit/share?url=<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://เซฟตี้อินไทย.com$_SERVER[REQUEST_URI]";?>"
                                target="_blank" rel="noreferrer">
                                <img src="<?php echo $base_url;?>/img/logo/logo-line.png" width="50" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>

<?php include('footer_front.php'); ?>

<script type="text/javascript">
var id_article =
    <?php echo (isset($article[0]['id_article']) && $article[0]['id_article']) ? $article[0]['id_article'] : 0 ;?>;

// disable_copytext();
get_comment();

function get_comment() {
    $.ajax({
        method: "POST",
        url: "article_comment.php",
        data: {
            id_article: id_article
        },
        success: function(result) {
            $('.div_comment').html(result);
        }
    });
}

function send_comment() {
    if (($.trim($("#name_commenter").val()).length != 0) && ($.trim($("#comment").val()).length != 0)) {
        $.ajax({
            method: "POST",
            url: "backend/act_manage.php?action=manage_comment",
            data: {
                id_article: id_article,
                name_commenter: $("#name_commenter").val(),
                comment: $("#comment").val()
            },
            success: function(result) {
                $("#name_commenter").val("");
                $("#comment").val("");
                get_comment();
            }
        });
    } else {
        alert("กรุณากรอกข้อมูลให้ครบ")
    }
}

$('.div_comment').on('click', ".close", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "backend/act_manage.php?action=del_comment",
            data: {
                id_article_comment: $(this).data('id')
            },
            success: function(result) {
                get_comment();
            }
        });
    }
}));

$(document).ready(function() {
    $('#promotion_modal').modal('show');
});

$('.carousel').carousel({
    interval: 2000
})
</script>