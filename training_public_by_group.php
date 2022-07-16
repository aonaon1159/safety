<?php
    include_once('dbconnect_safety.php');
    include_once('base_url.php');

    //กำหนดค่าตัวแปรที่ต้องใช้

    if(isset($_POST['group_training_public']) && $_POST['group_training_public']) {
        $array_group = $_POST['group_training_public'];
        
        foreach($array_group as $value) {
            $group_where[] = " training_public.id_group_training_public = " . $value;
        }
         
        if(!empty($group_where)){
            $where[] = " (" . implode(' OR ' ,$group_where) . ") ";
        }
    }
    else if(isset($_POST['id_training_public']) && $_POST['id_training_public']){
        $where[] = " id_training_public = " . $_POST['id_training_public'];
    }
    $sql = 'SELECT name_group,topic_training,url_page,cover_img,training_public.alt,coach_img
    FROM training_public 
    LEFT JOIN group_training_public ON group_training_public.id_group_training_public = training_public.id_group_training_public
    LEFT JOIN menu_training ON menu_training.id_menu_training = training_public.id_menu_training
    WHERE training_public.status = "active" AND training_public.del = "false" AND name_category = ?';

    if(!empty($where)) {
        $sql .= " AND ". implode(' AND ', $where);
    }
    
    $sql .= ' ORDER BY training_public.id_group_training_public,training_public.sequence';

    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($_POST['name_category']));
    $training = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $group = array();
    foreach($training as $value){
        $group[$value['name_group']][] = $value;
    }

    //define star
    $star = array(4, 5);
?>

<?php 
    if(empty($training)){
?>
<div class="container">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2><b>ไม่พบข้อมูล</b></h2>
        </div>
    </div>
</div>
<?php 
    }
?>
<style>
.coach_img {
    border-radius: 100%;
    border: 1px solid #00000030;
    width: calc(1vw + 20px);
    background: #0000002e;
}

.text-star,
.fa-star,
.text-coach {
    font-size: calc(0.4vw + 6px) !important;
}

.checked,
.text-star {
    color: #F2BC40;
}

span.fa-star:not(.checked) {
    color: #f0f8ff;
}

.hr_fix_width {
    width: 5%;
}

.effect_lift_up_green {
    border: none !important;
}
</style>
<div class="container">

    <?php foreach($group as $key => $value1){?>

    <div class="row mb-5">
        <div class="col-12">
            <h5><b><?php echo $key;?></b></h5>
            <hr class="hr_green hr_fix_width">
        </div>

        <?php foreach($value1 as $key2 => $value2){ ?>

        <div class="col-lg-3 col-md-4 col-12 pr-4 py-4">
            <a href="<?php echo $value2['url_page'];?>">
                <div class="box_shadow rounded_card mx-auto effect_lift_up_green">
                    <figure>
                        <img title="" style="width:100%" src="<?php echo $base_url . $value2['cover_img'];?>"
                            alt="<?php echo $value2['alt'];?>">
                    </figure>
                    <div class="pl-4 pr-4 pb-3">
                        <div class="course-fix-height">
                            <h6><?php echo $value2['topic_training'];?></h6>
                        </div>
                        <hr>
                        <div class="my-3">
                            <div class="star">
                                <?php 
                                $rd_number = array_rand($star);
                                for($i=1 ; $i <= 5 ; $i++){
                                if($i <= $star[$rd_number]){
                                ?>
                                <span class="fa fa-star checked"></span>
                                <?php
                                }else{
                                ?>
                                <span class="fa fa-star"></span>
                                <?php
                                }
                                 }
                                ?>
                                <span
                                    class="ml-3 text-star"><b><?php echo number_format($star[$rd_number], 1);?></b></span>
                            </div>
                        </div>
                        <div class="align-self-center text-coach">
                            <img title="" class="img-fluid coach_img mr-2"
                                src="<?php echo $base_url . $value2['coach_img'];?>" alt="">
                            ผู้ทรงคุณวุฒิ
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <?php } ?>
    </div>

    <?php } ?>

</div>