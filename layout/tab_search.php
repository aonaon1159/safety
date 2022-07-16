<?php
$stmt = $bookingDb->prepare('SELECT id_branch,namebranch FROM branch WHERE id_branch != 46 ORDER BY namebranch'); // 46 คือสถานที่ระบุหลักสูตรออนไลน์
$stmt->execute();
$branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
$month = array(1=>"มกราคม", 2=>"กุมภาพันธ์", 3=>"มีนาคม", 4=>"เมษายน", 5=>"พฤษภาคม", 6=>"มิถุนายน", 7=>"กรกฎาคม", 8=>"สิงหาคม", 9=>"กันยายน", 10=>"ตุลาคม", 11=>"พฤศจิกายน", 12=>"ธันวาคม");
?>

<div class="tab_search">
    <form method="post" id="form_search" action="course_search" enctype="multipart/form-data">
        <div class="container search_box box_shadow pt-4 pb-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><b>ค้นหาหลักสูตร</b></h2>
                </div>
            </div>
            <div class="row mb-3 px-4">
                <div class="col-md-10 col-12 mb-3">
                    <div class="row m-0 border_gradient">
                        <div class="col-md-3 col-12 border-right">
                            <select class="form-control" name="sl_group" id="sl_group">
                                <option></option>
                                <!-- 16,17 คือหลักสูตรของ Safetyinthai -->
                                <option value="16,17">
                                    หลักสูตร Public
                                </option>
                                <!-- 22 คือ หลักสูตรออนไลน์ -->
                                <option value="22">
                                    หลักสูตรออนไลน์
                                </option>
                            </select>
                        </div>
                        <div class="col-md-3 col-12 border-right">
                            <select class="form-control" name="sl_training" id="sl_training">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-3 col-12 border-right">
                            <select class="form-control" name="sl_branch" id="sl_branch">
                                <option></option>
                                <?php foreach($branch as $key => $row){
                                ?>
                                <option value="<?php echo $row['id_branch'];?>">
                                    <?php echo $row['namebranch'];?>
                                </option>
                                <?php 
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-12">
                            <select class="form-control" name="sl_month" id="sl_month">
                                <option></option>
                                <?php foreach($month as $key => $value){?>
                                <option value="<?php echo $key;?>">
                                    <?php echo $value;?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-12 align-self-center">
                    <button
                        class="btn btn-block btn--medium btn--radius btn--transparent btn--green btn--green-hover-black font--light text-uppercase submit-search">
                        <i class="fas fa-search"></i>
                        &nbsp;ค้นหา
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>