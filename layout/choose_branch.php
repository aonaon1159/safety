<?php if($choose_branch){ ?>
<div class="container p-t-80 p-b-80 no_br">
    <h1 class="text-center"><b>อบรม <?php echo $head_choose_branch;?></b></h1>
    <hr class="hr_green mx-auto hr_fix_width">
    <h2 class="text-center"><b>เลือกสาขาเข้ารับการอบรม</b></h2>
    <h5 class="text-center">เราได้เปิดให้บริการครอบคลุมทุกพื้นที่ทั่วประเทศไทยทั้ง <?php echo count($choose_branch);?>
        สาขา
        <br>
        <?php echo implode(', ', array_column($choose_branch, 'namebranch')); ?>
    </h5>
    <br>
    <div class="row mb-3 p-t-40">

        <?php 
        foreach($choose_branch as $key=>$value){
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 py-4">
            <a href="<?php echo $value['url_page'];?>">
                <div class="box_shadow rounded_card mx-auto pl-3 pr-3 d-flex justify-content-center choose_fix-height effect_lift_up_green"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="row">
                        <div class="col-4 align-self-center p-l-20 p-r-20">
                            <div>
                                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/mark.png" alt="">
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-center">
                            <h5>
                                <b>
                                    <?php 
                                        echo ($type == "status_korporor") ? "คปอ " : "จป "; 
                                        echo $value['namebranch'];
                                    ?>
                                </b>
                            </h5>
                            <?php echo $name_training;?><br><?php echo $value['namebranch'];?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>

    </div>
</div>
<?php } ?>