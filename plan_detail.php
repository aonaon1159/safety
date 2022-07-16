<?php
header("Access-Control-Allow-Origin: *");
include_once('dbconnect_booking.php');
include_once('base_url.php');
include_once('function.php');

//กำหนดค่าตัวแปรที่ต้องใช้

if (isset($_POST['sl_group']) && $_POST['sl_group']) {
    if ($_POST['sl_group'] == 22) { // หลักสูตรออนไลน์
        $where[] = " (type_security = 1 OR type_security = 2 OR type_security = 3 OR type_security = 6 OR type_security = 7 OR type_security = 8) "; // ถ้าเป็นหลักสูตรออนไลน์ให้แยกหมวด 4 กับ 7 จาก type_security 1,2,3,6
    }

    $array_group = explode(',', $_POST['sl_group']);

    foreach ($array_group as $value) {
        $group_where[] = " id_group = " . $value;
    }

    if (!empty($group_where)) {
        $where[] = " (" . implode(' OR ', $group_where) . ") ";
    }
} else {
    $where[] = " (id_group = 16 OR id_group = 17 OR (id_group = 22 AND (type_security = 1 OR type_security = 2 OR type_security = 3 OR type_security = 6 OR type_security = 7 OR type_security = 8 ))) ";
}


if (isset($_POST['sl_training']) && $_POST['sl_training']) {
    $where[] = " course.id_training = " . $_POST['sl_training'];
}


if (isset($_POST['sl_branch']) && $_POST['sl_branch']) {
    $array_branch = explode(',', $_POST['sl_branch']);

    foreach ($array_branch as $value) {
        $branch_where[] = " course.id_branch = " . $value;
    }

    if (!empty($branch_where)) {
        $where[] = " (" . implode(' OR ', $branch_where) . ") ";
    }
}



if (isset($_POST['sl_month']) && $_POST['sl_month']) {
    $where[] = " MONTH(IF(new_datestart != '0000-00-00', new_datestart , datestart)) = " . $_POST['sl_month'];
}

$sql = 'SELECT course.id_training,id_group,course.id_branch,branch.namebranch,googlemap,detail_training,topic_training,nickname,id_course,sub,price_special,price_normal,price_normal_affter,IF(new_datestart != "0000-00-00", new_datestart , datestart) as datestart,IF(new_dateend != "0000-00-00", new_dateend , dateend) as dateend,course.status
    FROM course 
    LEFT JOIN training ON training.id_training = course.id_training
    LEFT JOIN branch ON branch.id_branch = course.id_branch
    LEFT JOIN location ON location.id_location = course.id_location
    WHERE IF(new_datestart != "0000-00-00", new_datestart , datestart) >= NOW() AND course.name_update !=""';

if (!empty($where)) {
    $sql .= " AND " . implode(' AND ', $where);
}

$sql .= ' ORDER BY IF(new_datestart != "0000-00-00", new_datestart , datestart) ';

$stmt = $bookingDb->prepare($sql);
$stmt->execute();
$course = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="plan">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="5%" scope="col">
                        <h5>รุ่นที่</h5>
                    </th>
                    <th width="16%" scope="col">
                        <h5>วันที่จัดอบรม</h5>
                    </th>
                    <th class="th_course" width="30%" scope="col">
                        <h5>หลักสูตร</h5>
                    </th>
                    <th width="11%" scope="col">
                        <h5>เขตพื้นที่</h5>
                    </th>
                    <th width="10%" scope="col">
                        <h5>บุคคลทั่วไป</h5>
                    </th>
                    <th style="color:#F2BC40;" width="10%" class="icon-crown" scope="col">
                        <h5><i class="fas fa-crown"></i> สมาชิก</h5>
                    </th>
                    <th width="6%" scope="col">
                        <h5>รายละเอียด<br>หลักสูตร</h5>
                    </th>
                    <th width="6%" scope="col">
                        <h5>ขอใบเสนอราคา</h5>
                    </th>
                    <th width="6%" scope="col">
                        <h5>จองอบรม</h5>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (empty($course)) {
                ?>
                <tr>
                    <td colspan="8">
                        <h5><b>ไม่พบข้อมูล<b></h3>
                    </td>
                </tr>
                <?php
                }
                ?>

                <?php
                foreach ($course as $value) {
                    $date = ($value['datestart'] != $value['dateend']) ? date('j', strtotime($value['datestart'])) . " - " . date('j', strtotime($value['dateend'])) : date('j', strtotime($value['datestart']));
                ?>
                <tr>
                    <td
                        onclick="window.location='https://topprobooking.com/topprobooking/frontend/public_training/bookingstep2?id_course=<?php echo $value['id_course']; ?>'">
                        <?php echo $value['sub']; ?></td>
                    <td onclick="window.location='https://topprobooking.com/topprobooking/frontend/public_training/bookingstep2?id_course=<?php echo $value['id_course']; ?>'"
                        class="text-left">
                        <?php
                            echo $date . " " . substr(DateThai($value['dateend']), strpos(DateThai($value['dateend']), " "));
                            ?>
                    </td>
                    <td onclick="window.location='https://topprobooking.com/topprobooking/frontend/public_training/bookingstep2?id_course=<?php echo $value['id_course']; ?>'"
                        class="text-left">
                        <?php echo ($value['nickname']) ? $value['topic_training'] . " (" .  $value['nickname'] . ")" : $value['topic_training'];
                            echo ($value['id_branch'] == 46) ? "<img width='120vw' src='" . $base_url . "/img/logo/online training_type.svg' alt='อบรมออนไลน์'> " :
                                ""; ?>
                    </td>
                    <td>
                        <?php if (($value['googlemap'])) { ?>
                        <a href=<?php echo $value['googlemap']; ?> target=" _blank" rel="noreferrer">
                            <?php echo $value['namebranch']; ?>
                        </a>
                        <?php } else { ?>
                        <?php echo $value['namebranch']; ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo ($value['price_normal'] == 0) ? "ฟรี" : number_format($value['price_normal']) . ".-"; ?>
                        <?php if ($value['price_normal_affter'] != 0) { ?>
                        <sup>
                            <?php echo $value['price_normal_affter']; ?>
                        </sup>
                        <?php } ?>
                    </td>
                    <td class="icon-crown">
                        <i class="fas fa-crown"></i>
                        <?php echo ($value['price_special'] == 0) ? "ฟรี" : number_format($value['price_special']) . ".-"; ?>
                    </td>
                    <td class="icon-cart">
                        <a class="offcanvas-add-cart__link"
                            <?php echo ($value['detail_training']) ? "" : " style='pointer-events: none;cursor: default;' "; ?>href="<?php echo ($value['detail_training']) ? $value['detail_training'] : "#"; ?>"
                            target="_blank" rel="noreferrer">
                            <img src="<?php echo $base_url; ?>/img/logo/icon-table-3.png" alt="">
                        </a>
                    </td>
                    <td class="icon-cart">
                        <?php if ($value['status'] == 1) { ?>
                        <a class="offcanvas-add-cart__link"
                            href="https://topprobooking.com/quatation_pb.php?type=quotation&course=<?php echo $value['id_course']; ?>"
                            target="_blank" rel="noreferrer">
                            <img src="<?php echo $base_url; ?>/img/logo/icon-table-2.png" alt="">
                        </a>
                        <?php } else { ?>
                        <h5 class="full-color"><b>เต็ม</b></h5>
                        <?php } ?>
                    </td>
                    <td class="icon-cart">
                        <?php if ($value['status'] == 1) { ?>
                        <a class="offcanvas-add-cart__link"
                            href="https://topprobooking.com/topprobooking/frontend/public_training/bookingstep2?id_course=<?php echo $value['id_course']; ?>"
                            target="_blank" rel="noreferrer">
                            <img src="<?php echo $base_url; ?>/img/logo/icon-table-1.png" alt="">
                        </a>
                        <?php } else { ?>
                        <h5 class="full-color"><b>เต็ม</b></h5>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>