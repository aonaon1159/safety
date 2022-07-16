<div class="container_small p-t-80 p-b-80">
    <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-duration="1000">
            <h2><b>ลูกค้าของเรา</b></h2>
            <hr class="hr_green mx-auto hr_fix_width"><br>
        </div>
    </div>
    <div class="row">
        <?php for($i = 1; $i <= 24 ; $i++){?>
        <div class="col-2 d-flex align-items-center">
            <figure>
                <img title="" class="img-fluid img_customer"
                    src="<?php echo $base_url;?>/img/customer/ลูกค้าเซฟตี้อินไทย (<?php echo $i;?>).jpg"
                    alt="บริษัทที่เคยฝึกอบรมกับเซฟตี้อินไทย">
            </figure>
        </div>
        <?php } ?>
    </div>
</div>