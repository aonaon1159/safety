<?php include('header_front.php'); ?>
<?php
    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND recommend = "active" AND del = "false"
    ORDER BY create_date DESC');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner,alt FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูล training_public 
    $stmt = $safetyDb->prepare('SELECT id_training_public,topic_training FROM training_public
    LEFT JOIN group_training_public ON group_training_public.id_group_training_public = training_public.id_group_training_public
    WHERE status = "active" AND del = "false" AND name_category = 7
    ORDER BY sequence');
    $stmt->execute();
    $training_public = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงข้อมูล group_training_public
    $stmt = $safetyDb->prepare('SELECT id_group_training_public,name_group FROM group_training_public WHERE name_category = 7');
    $stmt->execute();
    $group_training_public = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
@media (min-width: 769px) {
    .search_box {
        margin-top: -100px;
    }
}

@media (min-width: 768px) {
    .content_inhouse {
        padding-left: 10vw;
        padding-right: 4vw;
    }
}

.people_inhouse {
    position: absolute;
    bottom: 0;
    right: 3vw;
    z-index: 2;
    height: 22vw;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <div style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <div>
            <form method="post" id="form_search" enctype="multipart/form-data">
                <div class="container_small search_box box_shadow pt-4 pb-3">
                    <div class="row mb-3 px-4">
                        <div class="col-md-3 col-12 mb-3 align-self-center">
                            <h4 class="text-nowrap pr-4"><b>ค้นหาหลักสูตร</b></h4>
                        </div>
                        <div class="col-md-9 col-12 mb-3 align-self-center">
                            <div class="border_gradient">
                                <div>
                                    <select class="form-control m-5" name="sl_training_public" id="sl_training_public">
                                        <option></option>
                                        <?php foreach($training_public as $key => $value){?>
                                        <option value="<?php echo $value['id_training_public'];?>">
                                            <?php echo $value['topic_training'];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4><b>เลือกกลุ่มของหลักสูตร</b></h4>
                        </div>
                        <?php foreach($group_training_public as $key => $value){?>
                        <div class="col-lg-3 col-6 py-2">
                            <label for="group_training_public<?php echo $key;?>">
                                <input type="checkbox" name="group_training_public[]"
                                    id="group_training_public<?php echo $key;?>"
                                    value="<?php echo $value['id_group_training_public'];?>">
                                <span><?php echo $value['name_group'];?></span>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section id="training_public" class="p-b-80 p-t-80">
    </section>

    <a href="หลักสูตรinhouse">
        <section class="section_banner_full_width">
            <img alt="" src="<?php echo $base_url . '/img/bg/banner_inhouse.jpg';?>">
        </section>
    </a>

    <section>
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php include('layout/contact_inhouse2.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/customer.php'); ?>
    </section>

</main>
<?php include('footer_front.php'); ?>
<script type="text/javascript">
$('#sl_training_public').select2({
    allowClear: true,
    placeholder: "เลือกหลักสูตร"
});

fecth_training();

function fecth_training(id_training_public) {
    var array_val = $('input[name="group_training_public[]"]:checked').map(function() {
        return $(this).val();
    }).get();

    $.ajax({
        type: "POST",
        url: "training_public_by_group.php",
        data: {
            id_training_public: id_training_public,
            group_training_public: array_val,
            name_category: 7
        },
        success: function(result) {
            $('#training_public').html(result);
        }
    });
}

$('input[name="group_training_public[]"]').on('click', (function(e) {
    $('#sl_training_public').val('').change();

    fecth_training();
}));


$('#sl_training_public').on('select2:select', (function(e) {
    $('input[name="group_training_public[]"]:checked').each(function(index) {
        $(this).prop('checked', false);
    });

    fecth_training($(this).val());
}));
</script>