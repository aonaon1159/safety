<?php 
if(!isset($id_training) && $_POST['id_training']){
    $id_training = $_POST['id_training'];
}
?>
<div class="schedule container_small p-t-80 p-b-80">
    <h2 class="text-center"><b>ตารางกำหนดการฝึกอบรม</b></h2>
    <hr class="hr_green mx-auto hr_fix_width">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="20%" scope="col">
                        <h5>วัน/เวลา</h5>
                    </th>
                    <th width="80%" scope="col">
                        <h5>กำหนดการฝึกอบรม</h5>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    if($id_training == 285 || $id_training == 124){//124 จปหัวหน้างานpublic 285 จปหัวหน้างานออนไลน์
                ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>

                <tr>
                    <td>08:00- 08:30</td>
                    <td>- ลงทะเบียน / พิธีเปิด</td>
                </tr>
                <tr>
                    <td>08:30-09:00</td>
                    <td>Pre -Test (ทดสอบก่อนการอบรม)</td>
                </tr>
                <tr>
                    <td>09:00 - 10:30</td>
                    <td>(1) หมวดวิชาที่ 1 ความรู้ทั่วไปเกี่ยวกับความปลอดภัยในการทำงานและ
                        บทบาทหน้าที่หัวหน้างาน
                        <br>(ก) ความรู้เกี่ยวกับความปลอดภัยและอาชีวอนามัย
                    </td>
                </tr>
                <tr>
                    <td>10:45 - 12:15</td>
                    <td>(ข) บทบาทของเจ้าหน้าที่ความปลอดภัยในการทำงานระดับหัวหน้างาน</td>
                </tr>
                <tr>
                    <td>12:15 - 13:15</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr>
                    <td>13:15 - 14:45</td>
                    <td>(2) หมวดวิชาที่ 2 กฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                        ในการทำงาน
                        <br>(ก) การบริหารกฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการ
                        ทำงานของกระทรวงแรงงาน
                    </td>
                </tr>
                <tr>
                    <td>15:00 - 16:30</td>
                    <td>(ข) สาระสำคัญของกฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                        ในการทำงานและการนำกฎหมายไปสู่การปฏิบัติ</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:00-08:30
                    </td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        08:30-09:00
                    </td>
                    <td>
                        (3) หมวดวิชาที่ 3 การค้นหาอันตรายจากการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        (ก) การตรวจความปลอดภัย<br>
                        (ข) การวิเคราะห์งานเพื่อความปลอดภัย<br>
                        (ค) การสอบสวนและการรายงานอุบัติเหตุ
                    </td>
                </tr>
                <tr>
                    <td>
                        12:15 - 13:15
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:15 - 14:45
                    </td>
                    <td>
                        (4) หมวดวิชาที่ 4 การป้องกันและควบคุมอันตราย<br>
                        (ก) การป้องกันและควบคุมอันตรายจากเครื่องจักร
                    </td>
                </tr>
                <tr>
                    <td>
                        15:00-16:30
                    </td>
                    <td>
                        (ข) การป้องกันและควบคุมอันตรายจากไฟฟ้า<br>
                        (ค) การป้องกันและควบคุมอันตรายจากการเคลื่อนย้ายและการจัดเก็บวัสดุ<br>
                        (ง) การป้องกันและระงับอัคคีภัยในสถานที่ประกอบกิจการ<br>
                        (ฉ) การป้องกันและควบคุมอันตรายจากสารเคมี<br>
                        (ช) การป้องกันและควบคุมปัญหาด้านการยศาสตร์<br>
                        (ซ) การป้องกันและควบคุมอันตรายในงานก่อสร้าง<br>
                        (ณ) การใช้อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล
                    </td>
                </tr>
                <tr>
                    <td>
                        16:30-17:00
                    </td>
                    <td>
                        Post - Test (ทดสอบหลังการอบรม)
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หมายเหตุ</b>
                    </td>
                    <td>
                        <b>
                            - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                            - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                            ผ่านการทดสอบหลังอบรม
                        </b>
                    </td>
                </tr>

                <?php }else if($id_training == 286 || $id_training == 295 || $id_training == 125 || $id_training == 179 || $id_training == 237){//125,179,237 จปบริหารpublic thai,eng,จีน 286,295 จปบริหารออนไลน์ thai,eng ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>

                <tr>
                    <td>08:00- 08:30</td>
                    <td>- ลงทะเบียน / พิธีเปิด</td>
                </tr>
                <tr>
                    <td>08:30-09:00</td>
                    <td>Pre -Test (ทดสอบก่อนการอบรม)</td>
                </tr>
                <tr>
                    <td>09:00 - 10:30</td>
                    <td>(1) หมวดวิชาที่ 1 การจัดการความปลอดภัยในการทำงาน<br>
                        (ก) แนวคิดการจัดการความปลอดภัยในการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>10:45 - 12:15</td>
                    <td>(ข) บทบาทของเจ้าหน้าที่ความปลอดภัยในการทำงานระดับบริหาร</td>
                </tr>
                <tr>
                    <td>12:15 - 13:15</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr>
                    <td>13:15 - 14:45</td>
                    <td>(2) หมวดวิชาที่ 2 กฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                        ในการทำงาน
                        <br>(ก) การบริหารกฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการ
                        ทำงานของกระทรวงแรงงาน
                    </td>
                </tr>
                <tr>
                    <td>15:00 - 16:30</td>
                    <td>(ข) สาระสำคัญของกฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                        ในการทำงานและการนำกฎหมายไปสู่การปฏิบัติ</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:30-09:00
                    </td>
                    <td>
                        - ลงทะเบียน<br>
                        (3) หมวดวิชาที่ 3 การจัดการอาชีวอนามัยและความปลอดภัย
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        (ก) แนวคิดการจัดการอาชีวอนามัยและความปลอดภัย<br>
                        (ข) แนวคิดมาตรฐานระบบการจัดการอาชีวอนามัยและความปลอดภัย
                        ของกระทรวงแรงงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        12:15 - 13:15
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:15 - 16:30
                    </td>
                    <td>
                        (ค) ระบบการจัดการอาชีวอนามัยและความปลอดภัยของสำนักงานมาตร
                        ฐานผลิตภัณฑ์อุตสาหกรรม<br>
                        (ง) การประยุกต์ใช้ระบบการจัดการอาชีวอนามัยและความปลอดภัยใน
                        สถานประกอบกิจการ
                    </td>
                </tr>
                <tr>
                    <td>
                        16:30-17:00
                    </td>
                    <td>
                        Post - Test (ทดสอบหลังการอบรม)
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หมายเหตุ</b>
                    </td>
                    <td>
                        <b>
                            - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                            - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                            ผ่านการทดสอบหลังอบรม
                        </b>
                    </td>
                </tr>

                <?php }else if($id_training == 287 || $id_training == 126){//126 จปเทคนิคpublic 287 จปเทคนิคออนไลน์ ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>

                <tr>
                    <td>08:00- 08:30</td>
                    <td>- ลงทะเบียน / พิธีเปิด</td>
                </tr>
                <tr>
                    <td>08:30-09:00</td>
                    <td>Pre -Test (ทดสอบก่อนการอบรม)</td>
                </tr>
                <tr>
                    <td>09:00 - 10:30</td>
                    <td>หมวดวิชาที่ 1 การจัดการความปลอดภัยในการทำงาน<br>
                        (ก) แนวคิดการจัดการความปลอดภัยในการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>10:45 - 12:15</td>
                    <td>(ข) บทบาทของเจ้าหน้าที่ความปลอดภัยในการทำงานระดับเทคนิค</td>
                </tr>
                <tr>
                    <td>12:15 - 13:15</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr>
                    <td>13:15 - 14:45</td>
                    <td>หมวดวิชาที่ 2 กฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อม
                        ในการทำงาน
                        <br>(ก) สาระสำคัญของกฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>15:00 - 16:30</td>
                    <td>(ข) การตรวจสอบความปลอดภัยตามข้อกำหนดของกฎหมาย</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:00-09:00
                    </td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        หมวดวิชาที่ 3 การวิเคราะห์งานเพื่อบ่งชี้อันตราย
                    </td>
                </tr>
                <tr>
                    <td>
                        10:45-12:15
                    </td>
                    <td>
                        (ก) เทคนิคการบ่งชี้อันตรายเพื่อป้องกันอุบัติเหตุจากการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        12:15 - 13:15
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:15 - 14:45
                    </td>
                    <td>
                        (ข) เทคนิคการบ่งชี้อันตรายเพื่อป้องกันโรคจากการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        15:00-16:30
                    </td>
                    <td>
                        (ค) เทคนิคการบ่งชี้อันตรายเพื่อป้องกันอุบัติเหตุร้ายแรง
                    </td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 3</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:00-09:00
                    </td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        หมวดวิชาที่ 4 การฝึกปฏิบัติการป้องกันและควบคุ้มอันตราย
                    </td>
                </tr>
                <tr>
                    <td>
                        10:45-12:15
                    </td>
                    <td>
                        (ก) การฝึกปฏิบัติการตรวจสอบความปลอดภัยตามข้อกำหนดกฎหมาย
                    </td>
                </tr>
                <tr>
                    <td>
                        12:15 - 13:15
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:15 - 14:45
                    </td>
                    <td>
                        (ข) การฝึกปฏิบัติการจัดทำขั้นตอนการปฏิบัติงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        15:00-16:30
                    </td>
                    <td>
                        (ค) การฝึกสอบสวนอุบัติเหตุและการจัดทำรายงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        16:30-17:00
                    </td>
                    <td>
                        Post - Test (ทดสอบหลังการอบรม) และมอบวุฒิบัตรแก่ผู้เข้ารับการอบรม
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หมายเหตุ</b>
                    </td>
                    <td>
                        <b>
                            - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                            - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                            ผ่านการทดสอบหลังอบรม
                        </b>
                    </td>
                </tr>

                <?php }else if($id_training == 288 || $id_training == 123 || $id_training == 236){ //123 คปอpublic, 288 คปอออนไลน์, 236 คปอeng?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>08:00- 08:30</td>
                    <td>- ลงทะเบียน / พิธีเปิด</td>
                </tr>
                <tr>
                    <td>08:30-09:00</td>
                    <td>Pre -Test (ทดสอบก่อนการอบรม)</td>
                </tr>
                <tr>
                    <td>09:00 - 10:30</td>
                    <td>แนวคิดระบบการจัดการความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการ
                        ทำงานของสถานประกอบกิจการอย่างมีประสิทธิภาพ
                    </td>
                </tr>
                <tr>
                    <td>10:45 - 12:15</td>
                    <td>การพิจารณาแผนงาน โครงการความปลอดภัยในการทำงานและความปลอดภัย
                        นอกงาน</td>
                </tr>
                <tr>
                    <td>12:15 - 13:15</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr>
                    <td>13:15 - 14:45</td>
                    <td>กฎกระทรวงกำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย
                        อาชีวอนามัยและสภาพแวดล้อมในการทำงาน พ.ศ 2549 และสาระสำคัญของ
                        กฎหมายความปลอดภัยในการทำงานที่เกี่ยวข้อง
                    </td>
                </tr>
                <tr>
                    <td>15:00 - 16:30</td>
                    <td>สาระสำคัญของกฎหมายความปลอดภัยในการทำงาน
                        การควบคุมและป้องกันการประสบอันตรายจากการทำงาน</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:00-09:00
                    </td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        การสำรวจความปลอดภัย
                    </td>
                </tr>
                <tr>
                    <td>
                        10:45-12:15
                    </td>
                    <td>
                        การจัดทำข้อบังคับ คู่มือและมาตรฐานความปลอดภัยในการทำงาน
                    </td>
                </tr>
                <tr>
                    <td>
                        12:15 - 13:15
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:15 - 14:45
                    </td>
                    <td>
                        การจัดทำข้อบังคับ คู่มือและมาตรฐานด้านความปลอดภัยในการทำงาน
                        การวางระบบการรายงานสภาพการทำงานที่ไม่ปลอดภัย
                    </td>
                </tr>
                <tr>
                    <td>
                        15:00-16:30
                    </td>
                    <td>
                        การประชุมและการติดตามงาน ทำแบบทดสอบหลังฝึกอบรม
                    </td>
                </tr>
                <tr>
                    <td>
                        16:30-17:00
                    </td>
                    <td>
                        Post - Test (ทดสอบหลังการอบรม)
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หมายเหตุ</b>
                    </td>
                    <td>
                        <b>
                            - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.45 - 15.00 น.<br>
                            - ผู้ที่จะได้รับวุฒิบัตรจะต้องเข้ารับการอบรมอย่างน้อยร้อยละ 90 ของเวลาทั้งหมดและ
                            ผ่านการทดสอบหลังอบรม
                        </b>
                    </td>
                </tr>

                <?php }else if($id_training == 129){//129 เทคนิคการติดตั้งและการตรวจสอบนั่งร้าน public ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:30- 09:00
                    </td>
                    <td>
                        - ทดสอบความรู้ก่อนการอบรม ( Pre-Test )
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-09:30
                    </td>
                    <td>
                        - กฎหมายที่เกี่ยวข้องกับนั่งร้าน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:30-10:00
                    </td>
                    <td>
                        - ประเภทของนั่งร้าน อุปกรณ์นั่งร้านและโครงสร้างนั่งร้าน
                    </td>
                </tr>
                <tr>
                    <td>
                        10:00-10:30
                    </td>
                    <td>
                        - กรณีศึกษาเกี่ยวกับสาเหตุและอุบัติเหตุที่เกี่ยวกับนั่งร้าน
                    </td>
                </tr>
                <tr>
                    <td>
                        10:30 - 10:45
                    </td>
                    <td>
                        พักเบรค
                    </td>
                </tr>
                <tr>
                    <td>
                        10:45 - 11:30
                    </td>
                    <td>
                        - ข้อกำหนดต่างๆ ในงานนั่งร้าน
                    </td>
                </tr>
                <tr>
                    <td>
                        11:30-12:00
                    </td>
                    <td>
                        - มาตรฐานในการติดตั้งนั่งร้าน
                    </td>
                </tr>
                <tr>
                    <td>
                        12:00-13:00
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:30 -14:30
                    </td>
                    <td>
                        - การเตรียมการติดตั้งนั่งร้านและเทคนิคการติดตั้งนั่งร้านแบบท่อและข้อต่อ
                    </td>
                </tr>
                <tr>
                    <td>
                        14:30 -14:45
                    </td>
                    <td>
                        พักเบรค
                    </td>
                </tr>
                <tr>
                    <td>
                        14:45 - 16:00
                    </td>
                    <td>
                        - การฝึกปฏิบัติการติดตั้งนั่งร้านแบบท่อและข้อต่อ
                    </td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:30- 09:00
                    </td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-10:30
                    </td>
                    <td>
                        - ข้อควรปฏิบัติในการปฏิบัติงานบนนั่งร้านอย่างไรให้ปลอดภัย
                    </td>
                </tr>
                <tr>
                    <td>
                        10:30-10:45
                    </td>
                    <td>
                        พักเบรค
                    </td>
                </tr>
                <tr>
                    <td>
                        10:45 - 12:00
                    </td>
                    <td>
                        - เทคนิคการตรวจสอบนั่งร้านแบบโครงสร้างสำเร็จและแบบท่อและข้อต่อ
                    </td>
                </tr>
                <tr>
                    <td>
                        12:00-13:00
                    </td>
                    <td>
                        พักเที่ยง
                    </td>
                </tr>
                <tr>
                    <td>
                        13:00 - 14:30
                    </td>
                    <td>
                        - เทคนิคการตรวจสอบนั่งร้านและโครงสร้างสำเร็จและแบบท่อและข้อต่อ (ต่อ)
                    </td>
                </tr>
                <tr>
                    <td>
                        14:30 - 14:45
                    </td>
                    <td>
                        พักเบรค
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>ภาคปฏิบัติ</b><br>
                        14:45 - 16:00
                    </td>
                    <td><br>
                        - การตรวจสอบนั่งร้านแบบโครงสร้างสำเร็จและแบบท่อและข้อต่อ<br>
                        - ทดสอบความรู้หลังการอบรม (Post-Test)
                    </td>
                </tr>

                <?php }else if($id_training == 154){//154 ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร public ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>08:00- 09:00</td>
                    <td>ลงทะเบียน ทดสอบก่อนฝึกอบรม</td>
                </tr>
                <tr>
                    <td>09:00-12:00</td>
                    <td> อบรมทบทวนความรู้ภาคทฤษฎี
                        เนื้อหาตรงตามกำหนดของราชการ</td>
                </tr>
                <tr>
                    <td>12:00 - 13:00</td>
                    <td>พักรับประทานอาหารกลางวัน
                    </td>
                </tr>
                <tr>
                    <td>13:00 - 16:00</td>
                    <td>ฝึกจริง (ต่อ) ตามโจทย์ทดสอบ
                        ภาคปฏิบัติของราชการ</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        08:00-09:00
                    </td>
                    <td>
                        ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>
                        09:00-12:00
                    </td>
                    <td>
                        การทดสอบความรู้ ภาคทฤษฎี
                    </td>
                </tr>
                <tr>
                    <td>
                        12:00-13:00
                    </td>
                    <td>
                        พักรับประทานอาหารกลางวัน
                    </td>
                </tr>
                <tr>
                    <td>
                        13:00 - 16:00
                    </td>
                    <td>
                        การทดสอบภาคความสามารถ
                        ภาคปฏิบัติ
                    </td>
                </tr>

                <?php }else if($id_training == 175){//175 อาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1 public ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 1</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>ระบบการทำความเย็นที่ใช้อยู่ในปัจจุบัน
                </tr>
                <tr>
                    <td></td>
                    <td>หลักการทำความเย็นทั่วไปและหลักทำความเย็นที่ใช้ในปัจจุบัน
                </tr>
                <tr>
                    <td></td>
                    <td>อุณหภูมิ ความร้อน การเปลี่ยนสถานะ การถ่ายเทความร้อน
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>อุปกรณ์หลักในวงจร และหน้าที่ของอุปกรณ์</td>
                </tr>
                <tr>
                    <td></td>
                    <td>การทำงานของวงจรสารทำความเย็น</td>
                </tr>
                <tr>
                    <td></td>
                    <td>อุปกรณ์เสริมในวงจรสารทำความเย็น ฝึกติดตั้งเครื่องฯ</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 2</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>อุปกรณ์และชิ้นเครื่องฯ ชนิด Wall type (ที่เตรียมไว้)
                </tr>
                <tr>
                    <td></td>
                    <td>การใช้เครื่องมืออย่างถูกต้อง</td>
                </tr>
                <tr>
                    <td></td>
                    <td>ชนิดของสารทำความเย็น
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>การทำสุญญากาศและการเติมสารทำความเย็นอย่างถูกต้อง</td>
                </tr>
                <tr>
                    <td></td>
                    <td>การอ่านแบบและการวางแผนติดตั้งเครื่องฯ</td>
                </tr>
                <tr>
                    <td></td>
                    <td>ฝึกติดตั้งเครื่องฯ (ตามแบบฝึกทดสอบ)</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>วันที่ 3</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>ทดสอบภาคทฤษฎีและภาคปฏิบัติตามแบบทดสอบมาตรฐานผีมือแรงงานแห่งชาติ</td>
                </tr>

                <?php }else if($id_training == 128){//128 ความปลอดภัยในการทำงานบนที่สูง public ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>ช่วงเช้า</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>08:30- 10:30</td>
                    <td>
                        - ลงทะเบียน และเปิดการอบรม<br>
                        - กฎหมายและมาตรฐานสากลที่เกี่ยวข้องกับการทำงานบนที่สูง<br>
                        - กฎกระทรวง กำหนดมาตราฐานในการบริหารและการจัดการด้านความปลอดภัย
                        อาชีวอนามัย และสภาพแวดล้อมในการทำงานเกี่ยวกับงานก่อสร้าง พ.ศ 2551
                        หมวด 11 การทำงานในสถานที่ที่มีอันตรายจากการตกจากที่สูงการพังทลายและ
                        การกระเด็นหรือตกหล่นของวัสดุ<br>
                        - แนวทางด้านความปลอดภัยตามมาตราฐานอื่นๆ</td>
                </tr>
                <tr>
                    <td>10:30-10:45</td>
                    <td>พักเบรค</td>
                </tr>
                <tr>
                    <td>10:45 - 12:00</td>
                    <td>
                        -สาเหตุการเกิดอุบัติเหตุและอันตรายในการทำงานเกี่ยวกับการทำงานบนที่สูง<br>
                        - สาเหตุการเกิดอุบัติเหตุและอันตรายในการทำงานเกี่ยวกับที่สูง<br>
                        - อันตรายที่อาจได้รับกรณีฉุกเฉิน
                    </td>
                </tr>
                <tr>
                    <td>12:00 - 13:00</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>ช่วงบ่าย</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        13:00-14:30
                    </td>
                    <td>
                        - แนวทางการจัดการด้านความปลอดภัยแลวิธีการทำงานบนที่สูงอย่างปลอดภัย<br>
                        - หลักการชี้บ่งอันตรายในการทำงานบนที่สูง<br>
                        - มาตรการเกี่ยวกับความปลอดภัยในการทำงานบนที่สูงตามลักษณะต่างๆ<br>
                        - หลักสูตรการตรวจสอบสภาพแวดล้อมและบริเวณพื้นที่การทำงานบนที่สูงให้ปลอดภัย<br>
                        - การวางแผนควบคุมและป้องกันอันตรายเกี่ยวกับการทำงานบนที่สูงและการเตรียม<br>
                        - การสำหรับการช่วยเหลือกู้ภัย
                    </td>
                </tr>
                <tr>
                    <td>
                        14:30-14:45
                    </td>
                    <td>
                        พักเบรค
                    </td>
                </tr>
                <tr>
                    <td>
                        14:45 - 16:00
                    </td>
                    <td>
                        - อุปกรณ์และเครื่องมือเกี่ยวกับการป้องกันการตกจากที่สูง<br>
                        - ชนิดและประเภทของอุปกรณ์ป้องกันการตกจากที่สูง<br>
                        - ส่วนประกอบและอุปกรณ์ต่างๆที่เกี่ยวข้องกับการตกจากที่สูง<br>
                        - อุปกรณ์ป้องกันอื่นๆตามลักษณะงาน<br>
                        <b>ถาม ตอบ และปิดการอบรม</b>
                    </td>
                </tr>

                <?php }else if($id_training == 127){//127 การขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี ?>
                <tr class="schedule_head_tr">
                    <td>
                        <b>ช่วงเช้า</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>08:30- 09:00</td>
                    <td>
                        - ลงทะเบียน
                    </td>
                </tr>
                <tr>
                    <td>09:00-12:00</td>
                    <td>- กฎหมายที่เกี่ยวข้องกับรถโฟล์คลิฟท์<br>
                        <b>ความรู้พื้นฐานและกฎหมายที่เกี่ยวข้อง</b><br>
                        - ความรู้พื้นฐานเกี่ยวกับรถโฟล์คลิฟท์<br>
                        - กฎหมายด้านความปลอดภัยในการทำงานที่เกี่ยวข้องกับรถโฟล์คลิฟท์<br>
                        - การใช้อุปกรณ์ป้องกันส่วนบุคคลสำหรับรถโฟล์คลิฟท์<br>
                        - ส่วนประกอบ/อุปกรณ์/ แผงควบคุมระบบไฟเดือนต่างๆ<br>
                        - การตรวจสอบความปลอดภัยก่อนการถูกใช้โฟล์คลิฟท์<br>
                        - การขับโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี<br>
                        - กฎจราจร/ข้อห้าม และเครื่องหมายเตือนต่างๆ<br>
                        - อันตรายที่เกิดจากรถโฟล์คลิฟท์ (กรณีศึกษาจากวิดีโอ)<br>
                        - กิจกรรมวิเคราะห์ความเสี่ยงความปลอดภัยในการทำงานของรถโฟล์คลิฟท์<br>
                        - แบบทดสอบหลังอบรม
                    </td>
                </tr>
                <tr>
                    <td>12:00 - 13:00</td>
                    <td>พักเที่ยง</td>
                </tr>
                <tr class="schedule_head_tr">
                    <td>
                        <b>ช่วงบ่าย</b>
                    </td>
                    <td>
                        <b>เนื้อหาการบรรยาย</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        13:00-16:00
                    </td>
                    <td>
                        - ลงทะเบียน<br>
                        <b>ภาคปฏิบัติรายบุคคล</b><br>
                        - การตรวจสอบและบำรุงรักษาโฟล์คลิฟท์ก่อนการใช้งาน<br>
                        - การปฏิบัติเมื่อรถโฟล์คลิฟท์เสีย หรือ เกิดปัญหาขัดข้อง<br>
                        - เทคนิคการยก / เคลื่อนย้าย / จัดเรียงและตักจ่ายสินค้า
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หมายเหตุ</b>
                    </td>
                    <td>
                        <b>
                            - พักเบรค (Coffee Break) เวลา 10.30 - 10.45 น., 14.30 - 14.45 น.<br>
                        </b>
                    </td>
                </tr>

                <?php }else {?>
                <tr>
                    <td colspan="2">
                        <h5><b>ไม่พบข้อมูล<b></h3>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php if(isset($url_course_outline)) { ?>
        <div class="col-lg-2 col-md-3 col-12 mt-5 mx-auto">
            <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline;?>">
                <button
                    class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                    เอกสารการอบรม
                </button>
            </a>
        </div>
        <?php } ?>
    </div>
</div>