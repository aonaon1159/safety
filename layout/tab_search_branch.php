<?php
$stmt = $bookingDb->prepare('SELECT id_branch,namebranch FROM branch WHERE id_branch != 46 ORDER BY namebranch'); // 46 คือสถานที่ระบุหลักสูตรออนไลน์
$stmt->execute();
$branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
$month = array(1=>"มกราคม", 2=>"กุมภาพันธ์", 3=>"มีนาคม", 4=>"เมษายน", 5=>"พฤษภาคม", 6=>"มิถุนายน", 7=>"กรกฎาคม", 8=>"สิงหาคม", 9=>"กันยายน", 10=>"ตุลาคม", 11=>"พฤศจิกายน", 12=>"ธันวาคม");
?>

<div class="tab_search">
    <form method="post" id="form_search" action="course_search" enctype="multipart/form-data">
        <div class="container_small search_box box_shadow pt-4 pb-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><b>ค้นหาหลักสูตร</b></h2>
                </div>
            </div>
            <div class="row mb-3 px-4">
                <div class="col-lg-8 col-12 mb-3">
                    <div class="row m-0 border_gradient">
                        <div class="col-md-6 col-12 border-right">
                            <select class="form-control" name="sl_branch" id="sl_branch">
                                <option></option>
                                <?php foreach($branch as $key => $row){ ?>
                                <option value="<?php echo $row['id_branch'];?>">
                                    <?php echo $row['namebranch'];?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 col-12">
                            <select class="form-control" name='sl_month' id="sl_month">
                                <option></option>
                                <option value='1'>มกราคม</option>
                                <option value='2'>กุมภาพันธ์</option>
                                <option value='3'>มีนาคม</option>
                                <option value='4'>เมษายน</option>
                                <option value='5'>พฤษภาคม</option>
                                <option value='6'>มิถุนายน</option>
                                <option value='7'>กรกฎาคม</option>
                                <option value='8'>สิงหาคม</option>
                                <option value='9'>กันยายน</option>
                                <option value='10'>ตุลาคม</option>
                                <option value='11'>พฤศจิกายน</option>
                                <option value='12'>ธันวาคม</option>
                            </select>
                        </div>
                        <input type="hidden" value="16,17" name="sl_group">
                        <input type="hidden" value="<?php echo $id_training;?>" name="sl_training">
                    </div>
                </div>

                <div class="col-lg-4 col-12 align-self-center">
                    <button
                        class="btn btn-block btn--medium btn--radius btn--transparent btn--green btn--green-hover-black font--light text-uppercase">
                        <i class="fas fa-search"></i>
                        &nbsp;ค้นหา
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>