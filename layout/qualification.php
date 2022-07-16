<?php
include_once('../base_url.php');
if(!isset($id_training) && $_POST['id_training']){
    $id_training = $_POST['id_training'];
}
if($id_training == 288 || $id_training == 123 || $id_training == 236){ //123 คปอpublic, 288 คปอออนไลน์, 236 คปอeng
    $qualification = "คณะกรรมการความปลอดภัยในการทำงาน";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "เป็นคปอ.";
    $qualification_detail[] = "1. เป็นคณะกรรมการความปลอดภัยในการทำงานของหน่วยงาน";
    $qualification_icon[] = "/img/logo/icon-นายจ้างยินยอม.png";
    $qualification_head[] = "นายจ้างยินยอม";
    $qualification_detail[] = "2. ได้รับการยินยอมจากนายจ้างให้เข้ารับการอบรม";
}
else if($id_training == 285 || $id_training == 124){//124 จปหัวหน้างานpublic 285 จปหัวหน้างานออนไลน์
    $qualification = "เจ้าหน้าที่ความปลอดภัยในการทำงานระดับหัวหน้างาน";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "เป็นหัวหน้างาน";
    $qualification_detail[] = "1. เป็นลูกจ้างระดับหัวหน้างานของหน่วยงาน";
    $qualification_icon[] = "/img/logo/icon-นายจ้างยินยอม.png";
    $qualification_head[] = "นายจ้างยินยอม";
    $qualification_detail[] = "2. ได้รับการยินยอมจากนายจ้างให้เข้ารับการอบรม";
}
else if($id_training == 286 || $id_training == 295 || $id_training == 125 || $id_training == 179 || $id_training == 237){//125,179,237 จปบริหารpublic thai,eng,จีน 286,295 จปหัวหน้างานอออนไลน์ thai,eng
    $qualification = "เจ้าหน้าที่ความปลอดภัยในการทำงานระดับบริหาร";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "เป็นลูกจ้าง";
    $qualification_detail[] = "1. เป็นลูกจ้างระดับบริหารของหน่วยงาน";
    $qualification_icon[] = "/img/logo/icon-นายจ้างยินยอม.png";
    $qualification_head[] = "นายจ้างยินยอม";
    $qualification_detail[] = "2. ได้รับการยินยอมจากนายจ้างให้เข้ารับการอบรม";
}
else if($id_training == 287 || $id_training == 126){//126 จปเทคนิคpublic 287 จปเทคนิคออนไลน์
    $qualification = "เจ้าหน้าที่ความปลอดภัยในการทำงานระดับเทคนิค";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "เป็นจป.หัวหน้างาน";
    $qualification_detail[] = "1. ผู้เข้ารับการอบรมต้องเป็นเจ้าหน้าที่ความปลอดภัยในการทำงานระดับหัวหน้างาน";
    $qualification_icon[] = "/img/logo/ใบเซอร์-จปเทคนิค.png";
    $qualification_head[] = "ผ่านการฝึกอบรม";
    $qualification_detail[] = "2.  ผ่านการฝึกอบรมหลักสูตรจป.หัวหน้างาน";
}
else if($id_training == 175){//175 อาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1 public
    $qualification = "อาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "มีประสบการณ์";
    $qualification_detail[] = "1. มีประสบการณ์การทำงานอย่างน้อย 1 ปีหรือ";
    $qualification_icon[] = "/img/logo/กำลังศึกษา.png";
    $qualification_head[] = "กำลังศึกษา";
    $qualification_detail[] = "2. ศึกษาระดับปวช.ปีสุดท้าย มีหนังสือรับรองจากสถานศึกษาหรือจบการศึกษาหรือ";
    $qualification_icon[] = "/img/logo/ใบเซอร์-จปเทคนิค.png";
    $qualification_head[] = "ผ่านการฝึกอบรม";
    $qualification_detail[] = "3. ผ่านการฝึกอบรมตามที่กำหนดไว้ในคุณสมบัติผู้เข้าทดสอบมาตรฐานฝีมือ 
    แรงงานแห่งชาติ";
}
else if($id_training == 154){//154 ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร public
    $qualification = "ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร";
    $qualification_icon[] = "/img/logo/อายุ18.png";
    $qualification_head[] = "อายุไม่ต่ำกว่า 18 ปีบริบูรณ์";
    $qualification_detail[] = "1. ผู้เข้ารับการทดสอบต้องมีอายุไม่ต่ำกว่า 18 ปีบริบูรณ์ นับถึงวันเข้ารับการทดสอบ และ";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "มีประสบการณ์";
    $qualification_detail[] = "2. มีประสบการณ์การทำงานหรือการปฏิบัติงาน หรือการประกอบอาชีพ 
    ในสาขาอาชีพช่างไฟฟ้า อิเล็กทรอนิกส์และคอมพิวเตอร์ สาขาช่างไฟฟ้าภายในอาคาร ไม่น้อยกว่า 3 ปี 
    หรือ";
    $qualification_icon[] = "/img/logo/ใบเซอร์-จปเทคนิค.png";
    $qualification_head[] = "ผ่านการฝึกอบรม";
    $qualification_detail[] = "3. ผ่านการฝึกอบรมฝีมือแรงงานในสาขาอาชีพช่างไฟฟ้า อิเล็กทรอนิกส์
    และคอมพิวเตอร์ สาขาช่างไฟฟ้าภายในอาคาร ไม่น้อยกว่า 60 ชั่วโมง และมีประสบการณ์
    การฝึกงานหรือการปฏิบัติงานในสาขาช่างไฟฟ้าภายในอาคารไม่น้อยกว่า 160 ชั่วโมง หรือ";
    $qualification_icon[] = "/img/logo/สำเร็จการศึกษา.png";
    $qualification_head[] = "สำเร็จการศึกษา";
    $qualification_detail[] = "4. เป็นผู้ที่สำเร็จการศึกษาไม่ต่ำกว่าระดับประกาศนียบัตรวิชาชีพ หรือเทียบเท่า 
    ในสาขาที่เกี่ยวกับสาขาอาชีพช่างไฟฟ้า อิเล็กทรอนิกส์และคอมพิวเตอร์ สาขาช่างไฟฟ้าภายในอาคาร";
}
else if($id_training == 128){//128 ความปลอดภัยในการทำงานบนที่สูง public
    $qualification = "ความปลอดภัยในการทำงานบนที่สูง";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "ระดับปฏิบัติงาน";
    $qualification_detail[] = "1. ผู้รับเหมาทุกคนในระดับปฏิบัติงานหรือระดับสูงกว่า";
    $qualification_icon[] = "/img/logo/ใบเซอร์-จปเทคนิค.png";
    $qualification_head[] = "การปฏิบัติงาน";
    $qualification_detail[] = "2. ผู้ที่มีการปฏิบัติงานบนที่สูง";
}
else if($id_training == 129){//129 เทคนิคการติดตั้งและการตรวจสอบนั่งร้าน public
    $qualification = "ความปลอดภัยในการทำงานบนที่สูง";
    $qualification_icon[] = "/img/logo/icon-เป็นหัวหน้าจป.png";
    $qualification_head[] = "ระดับปฏิบัติงาน";
    $qualification_detail[] = "1. ผู้รับเหมาทุกคนในระดับปฏิบัติงานหรือระดับสูงกว่า";
    $qualification_icon[] = "/img/logo/ใบเซอร์-จปเทคนิค.png";
    $qualification_head[] = "การปฏิบัติงาน";
    $qualification_detail[] = "2. ผู้ที่มีการปฏิบัติงานบนที่สูง";
}
else if($id_training == 163 || $id_training == 172 || $id_training == 434){//163 การตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี,172 ความปลอดภัยในการใช้สารเคมี,434 ความปลอดภัยในการทำงานกับสารเคมีอันตรายและการตอบโต้กรณีเกิดเหตุฉุกเฉิน
    $qualification = "ความปลอดภัยเกี่ยวกับสารเคมี";
    $qualification_icon[] = "/img/logo/สารเคมี3.png";
    $qualification_head[] = "เจ้าหน้าที่ความปลอดภัย";
    $qualification_icon[] = "/img/logo/สารเคมี2.png";
    $qualification_head[] = "ผู้ที่ปฎิบัติงานหรือทำงานกับสารเคมี";
    $qualification_icon[] = "/img/logo/สารเคมี1.png";
    $qualification_head[] = "ทีมฉุกเฉินในการเก็บกู้สารเคมี";
    $qualification_icon[] = "/img/logo/สารเคมี4.png";
    $qualification_head[] = "ผู้ที่สนใจทั่วไป";
}
else if($id_training == 432){//432 เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.) การเก็บรักษาสารเคมีและวัตถุอันตราย ตามกฎหมายของกรมโรงงานอุตสาหกรรม
    $qualification = "เตรียมตัวสอบเพื่อขึ้นทะเบียนเป็นบุคลากรเฉพาะ (บฉ.) การเก็บรักษาสารเคมีและวัตถุอันตราย ตามกฎหมายของกรมโรงงานอุตสาหกรรม";
    $qualification_icon[] = "/img/logo/สำเร็จการศึกษา.png";
    $qualification_head[] = "1. สำเร็จการศึกษา";
    $qualification_detail[] = "กำหนดให้เรียนวิชาเคมีไม่น้อยกว่า 8 หน่วยกิตหรือสำเร็จการศึกษาไม่ต่ำกว่าระดับมัธยมศึกษาตอนปลายและมีประสบการณ์หน้าที่ประจำโรงงานอุตสาหกรรม";
    $qualification_icon[] = "/img/logo/คะแนนสอบ.png";
    $qualification_head[] = "2. คะแนนในการทดสอบ";
    $qualification_detail[] = "ไม่ต่ำกว่าร้อยละ 80 ซึ่งผู้ที่จะทำหน้าที่เป็นบุคลากรเฉพาะปฏิบัติงานประจำสถานที่เก็บรักษาวัตถุอันตราย";
}
else if($id_training == 429){//429 การบริหารความปลอดภัยในการทำงานก่อสร้าง
    $qualification = "การบริหารความปลอดภัยในการทำงานก่อสร้าง";
    $qualification_icon[] = "/img/logo/ผู้ที่ปฎิบัติงานเกี่ยวกับงานก่อสร้าง.png";
    $qualification_head[] = "1. ผู้ที่ปฎิบัติงานเกี่ยวกับงานก่อสร้าง";
    $qualification_icon[] = "/img/logo/หัวหน้างาน.png";
    $qualification_head[] = "2. หัวหน้างาน";
    $qualification_icon[] = "/img/logo/ผู้ควบคุมงาน.png";
    $qualification_head[] = "3. ผู้ควบคุมงาน";
}
else if($id_training == 431){//431 ความปลอดภัยในการทำงานเกี่ยวกับเครื่องจักร
    $qualification = "ความปลอดภัยในการทำงานเกี่ยวกับเครื่องจักร";
    $qualification_icon[] = "/img/logo/พนักงานผู้ปฏิบัติงานกับเครื่องจักรหรือเครื่องมือ.png";
    $qualification_head[] = "1. พนักงานผู้ปฏิบัติงานกับเครื่องจักรหรือเครื่องมือ";
    $qualification_icon[] = "/img/logo/หัวหน้างานผู้ควบคุมดูแลงานที่ต้องใช้เครื่องจักรในการทำงาน.png";
    $qualification_head[] = "2. หัวหน้างานผู้ควบคุมดูแลงานที่ต้องใช้เครื่องจักรในการทำงาน";
    $qualification_icon[] = "/img/logo/ผู้ควบคุมงาน.png";
    $qualification_head[] = "3. เจ้าหน้าที่ความปลอดภัยในการทำงาน";
    $qualification_icon[] = "/img/logo/ช่างซ่อมและบำรุงรักษาเครื่องจักร.png";
    $qualification_head[] = "4. ช่างซ่อมและบำรุงรักษาเครื่องจักร ช่างเทคนิค วิศวกร ผู้ดูแลเครื่องจักร";
}

if(isset($qualification)){
?>
<div class="container_small p-t-80 p-b-80">
    <h2 class="text-center"><b>คุณสมบัติผู้เข้ารับการอบรม</b></h2>
    <hr class="hr_green mx-auto hr_fix_width"> <br>

    <h5 class="text-center">
        <?php echo $qualification;?> ต้องมีคุณสมบัติดังต่อไปนี้ </h5>

    <div class="row mb-3 p-t-40">

        <?php foreach($qualification_icon as $key => $value){?>
        <div
            class="<?php echo (count($qualification_icon) == 3) ? "col-lg col-md" : "col-lg-6 col-md-12" ;?> col-12 mb-4">
            <div
                class="box_shadow rounded_card effect_lift_up mx-auto p-4 qualification-fix-height d-flex align-items-center">
                <div class="row">
                    <div class="col-md-4 col-12 align-self-center text-center">
                        <img title="" class="img-fluid" src="<?php echo $base_url . $qualification_icon[$key];?>"
                            alt="">
                    </div>
                    <div class="col-md-8 col-12 align-self-center">
                        <h3><b><?php echo $qualification_head[$key];?></b></h3>
                        <?php echo $qualification_detail[$key];?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>
<?php } ?>