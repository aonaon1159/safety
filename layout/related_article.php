<?php 
   include_once('function.php'); 
?>
<div class="container_small p-t-80 p-b-80">
    <h2 class="text-center"><b>บทความที่เกี่ยวข้อง</b></h2>
    <hr class="hr_green mx-auto hr_fix_width">
    <div class="row mb-3 p-t-40">
        <div class="default-slider">
            <div class="default-slider-3grid-1rows gap__row--20">

                <?php foreach($related_article as $key=>$value){
                    $value['content'] = substr(strip_tags($value['content']),1,700);//$value['content']
                ?>
                <div class="gap_slider">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="overflow-hidden">
                                    <img title="" class="img-fluid img_cover"
                                        src="<?php echo $base_url . $value['cover_img'];?>"
                                        alt="<?php echo $value['alt'];?>">
                                </figure>
                            </div>

                        </div>
                        <div class="p-4 pb-5">
                            <div class="row article-fix-height content-fix-line">
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
                                <div class="ml-auto col-6 text-right pr-3">
                                    <a href="article_detail?article=<?php echo $value['topic']?>"
                                        class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular"
                                        tabindex="0">อ่านเพิ่มเติม
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-8 mx-auto">
            <a href="article">
                <button
                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                    ดูทั้งหมด
                </button>
            </a>
        </div>
    </div>
</div>

