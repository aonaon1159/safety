<?php include('header_front.php'); ?>

<?php 
    $id_training = 158;//กิจกรรมการค้นหาอันตรายในการทำงาน ด้วย CCCF

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner,alt FROM menu_training WHERE url_page = ?';
    $stmt = $safetyDb->prepare($sql);
    $stmt->execute(array($actual_link));
    $menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //หา course outline 
    $stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
    $stmt->execute(array($id_training));
    $url_course_outline = $stmt->fetchColumn();
?>

<style>
.people_inhouse {
    position: absolute;
    bottom: 0;
    left: 3vw;
    z-index: 2;
    height: 22vw;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}
</style>

<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <div style="position: relative;">
        <section class="section_banner_full_width">
            <img alt="<?php echo $menu_branch[0]['alt'];?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner'];?>">
        </section>
        <?php include('layout/tab_search.php'); ?>
    </div>

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>กิจกรรมการค้นหาอันตรายในการทำงาน ด้วย CCCF</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (13).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ในปัจจุบันพบว่า อุบัติเหตุที่เกิดจากการทำงานนั้นมีอัตราที่สูงขึ้น
                                ซึ่งสาเหตุที่เกิดนั้นมีหลายประการ
                                ผู้ประกอบการหรือเจ้าของโรงงานอุตสาหกรรมจะต้องปฏิบัติอย่างไรหรือมีนโยบายที่ชัดเจนอย่างไรในการลดอุบัติเหตุอันเกิดจากการทำงานในสถานประกอบการ
                                และให้ความเชื่อมั่นความปลอดภัยในการทำงานแก่คนงาน
                                การทำงานที่มีความปลอดภัยคือสภาพที่ไม่มีภยันตราย
                                ดังนั้นความปลอดภัยในการทำงานจึงหมายถึงการทำงานที่ปราศจากอันตราย
                                ไม่เสี่ยงต่อการเกิดอุบัติเหตุ กล่าวคือ ไม่ก่อให้เกิดสิ่งต่าง ๆ ได้แก่ การเจ็บป่วย
                                หรือเป็นโรค การบาดเจ็บ พิการ หรือตาย ทรัพย์สินเสียหาย เสียเวลา ขบวนการผลิตหยุดชะงัก
                                คนงานเสียขวัญและกำลังใจในการทำงาน กิจการเสียชื่อเสียง
                                ซึ่งทั้งหมดนี้ล้วนแต่เป็นผลเสียทั้งสิ้น การกีดกันทางการค้าระหว่างประเทศ
                                ก็ได้ยกเอาประเด็นเรื่องความปลอดภัยในการทำงานมาเป็นเครื่องมือพิจารณาในการค้าขายระหว่างประเทศ
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                เนื่องจากความปลอดภัยในการทำงานนั้นเป็นปัจจัยพื้นฐานในการเพิ่มผลผลิตที่มีคุณภาพ
                                รัฐบาลจึงสนับสนุนส่งเสริมให้ผู้ประกอบการ เสริมสร้างประสิทธิภาพการผลิตสินค้าที่มีคุณภาพ
                                โดยเน้นให้สถานประกอบการคำนึงถึงความปลอดภัยในการทำงาน
                                ได้มีการออกระเบียบโดยกรมโรงงานอุตสาหกรรม ว่าด้วยหลักเกณฑ์การชี้บ่งอันตราย
                                การประเมินความเสี่ยง และการจัดทำแผนงานบริหารความเสี่ยง พ.ศ.2543 ขึ้น
                                เพื่อให้ผู้ประกอบกิจการโรงงาน หรือผู้ขอรับใบอนุญาตประกอบกิจการโรงงาน
                                หรือใบอนุญาตขยายโรงงาน
                                ต้องจัดทำรายงานการวิเคราะห์ความเสี่ยงจากอันตรายที่อาจเกิดจากการประกอบกิจการโรงงาน
                                โดยต้องทำการศึกษา วิเคราะห์ และทบทวนการดำเนินงานเพื่อชี้บ่งอันตราย ประเมินความเสี่ยง
                                และจัดทำแผนงานการจัดการความเสี่ยง
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (9).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">กิจกรรมการค้นหาอันตรายในการทำงาน ด้วย CCCF</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรกิจกรรมการค้นหาอันตรายในการทำงาน ด้วย CCCF
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="515" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ชลบุรี</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="table2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery6.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        กิจกรรม CCCF (Completely Check Completely Find-Out) เป็นกิจกรรมที่เน้น
                        ให้องค์กรหรือสถานประกอบกิจการค้นหาเหตุการณ์ผิดปกติหรือเหตุการณ์ หรือเหตุการณ์เฉียด (Near Miss)
                        เพื่อวิเคราะห์และกำหนดมาตรการป้องกันและแก้ไข
                        ที่อาจนำไปสู่การเกิดอุบัติเหตุในการทำงานกิจกรรมการค้นหาจุด
                        อันตรายและการจัดการกับจุดอันตราย
                        ทำให้องค์กรหรือสถานประกอบกิจการสามารถนำไปประยุกต์ใช้ได้เพื่อลดและ
                        ควบคุมอุบัติเหตุในการทำงานกิจกรรม CCCF
                        เป็นกิจกรรมที่ต้องการให้พนักงานทุกคนทุกระดับมีส่วนร่วมในการ
                        ค้นหาอันตรายในพื้นที่ ปฏิบัติงานของตนเอง หรือวิธีการปฏิบัติงานที่อาจมีความเสี่ยง
                        โดยช่วยกันทำการค้นหา
                        อันตราย โดยใช้หลัก "Genchi - Genbutsu" หรือที่แปลว่า "ของจริง สถานะที่จริง" หรือ
                        การเข้าไปเฝ้าสังเกตที่หน้า
                        งานจริง และช่วยกันปรับปรุงแก้ไขให้อันตรายเหล่านั้นหมดไป<br><br>
                        วัตถุประสงค์ <br>
                        1) เพื่อให้ผู้อบรมสร้างวัฒนธรรมด้านความปลอดภัยจากการป้องกันอันตรายก่อนเกิดอุบัติเหตุ<br>
                        2) เพื่อให้ผู้อบรมมีความรู้ ความเข้าใจและทราบถึงแนวทางการค้นหาเหตุการณ์ผิดปกติ<br>
                        3) เพื่อให้ผู้อบรมมีความรู้และนำหลักการไปตรวจสถานที่ ทั้งหมดทุกจุดทุกพื้นที่ในองค์กร<br>
                        4) เพื่อให้ผู้อบรมมีทักษะการสร้างจิตสำนึกด้านความปลอดภัยและวิเคราะห์ปัญหาในสถานที่ทำงานจริ<br>

                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline;?>">
                            <button
                                class="btn btn-block btn--medium btn--radius btn--green btn--green-hover-black font--light text-uppercase">
                                เอกสารการอบรม
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    กิจกรรมการค้นหาอันตรายในการทำงาน ด้วย CCCF
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความกิจกรรมค้นหาอันตราย-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความกิจกรรมค้นหาอันตราย-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความกิจกรรมค้นหาอันตราย-03.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-3 col-8 mx-auto">
                    <a href="article">
                        <button
                            class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                            ดูทั้งหมด
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg bg_information">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b>
                    ข้อมูลที่เป็นประโยชน์
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row information">
                <div class="col-md-6 col-12 my-3 ">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap1">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>CCCF คืออะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            cccf คือกิจกรรมที่เน้นให้องค์กรหรือสถานประกอบการค้นหาเหตุการณ์ผิดปกติ หรือเหตุการณ์เฉียด
                            (Near Miss)
                            เพื่อวิเคราะห์และกำหนดมาตรการป้องกันและแก้ไขเหตุการณ์ผิดปกติหรือเหตุการณ์เฉียดนั้นไม่ให้นำไปสู่การเกิดอุบัติเหตุในการทำงาน
                            รวมทั้งมีตัวอย่างกิจกรรมการค้นหาจุดอันตรายและการจัดการกับจุดอันตรายนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สัดส่วนของการเกิดอุบัติเหตุ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            อัตราส่วนของการเกิดอุบัติเหตุโดยจากการศึกษาของ Frank E. Bird
                            พบว่าสัดส่วนของการเกิดอุบัติเหตุคือ 1 : 10 : 30 : 600
                            1 หมายถึง อุบัติเหตุที่เกิดขึ้นแล้วทำให้เกิดการบาดเจ็บที่รุนแรงถึงขั้นพิการหรือเสียชีวิต
                            10 หมายถึง อุบัติหตุที่มีการบาดเจ็บเพียงเล็กน้อย
                            30 หมายถึง อุบัติเหตุที่เกิดแล้วทำให้ทรัพย์สินเสียหาย
                            600 หมายถึง เหตุเกือบกลายเป็นอุบัติเหตุ (Near Miss)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>CCCF ย่อมาจากอะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            cccf ย่อมาจาก Completely Check Completely Find-Out
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนกิจกรรม CCCF มีอะไรบ้าง </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            ขั้นตอนกิจกรรม CCCF มีดังนี้ <br>
                            (1)ประกาศนโยบายความปลอดภัยและกิจกรรม CCCF ต่อพนักงาน<br>
                            (2) ดำเนินกิจกรรม CCCF อย่างจริงจัง<br>
                            (3) รับการตรวจสอบ<br>
                            (4) สนับสนุนกิจกรรมความปลอดภัยสนับสนุนกิจกรรม CCCF<br>
                            (5) ทบทวนมาตรฐานการทำงาน<br>
                            (6) สำรวจความปลอดภัยโดยผู้บริหาร<br>
                            (7) ขยายผลดำเนินกิจกรรม CCCF<br>
                            (8) สรุปและรายงานผลการดำเนินงาน CCCF
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการจัดทำ CCCF มีอะไรบ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ขั้นตอนการจัดทำ CCCF มีดังนี้<br>
                            (1) ประกาศนโยบายความปลอดภัยและกิจกรรม CCCF ต่อพนักงาน<br>
                            (2) ดำเนินกิจกรรม CCCF อย่างจริงจัง<br>
                            (3) รับการตรวจสอบ<br>
                            (4) สนับสนุนกิจกรรมความปลอดภัยสนับสนุนกิจกรรม CCCF<br>
                            (5) ทบทวนมาตรฐานการทางาน<br>
                            (6) สำรวจความปลอดภัยโดยผู้บริหาร<br>
                            (7) ขยายผลดำเนินกิจกรรม CCCF<br>
                            (8) สรุปและรายงานผลการดำเนินงาน CCCF
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กิจกรรม CCCF คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            กิจกรรม CCCF คือกิจกรรมการค้นหา และ ประเมินอันตราย ภาษาอังกฤษเรียกว่า Completely Check
                            Completely Find Out หรือที่เราย่อๆ “ CCCF ” ACTIVITY (กิจกรรม CCCF) เป็นกิจกรรมที่จัดทำขึ้น
                            เพื่อรณรงค์ด้านความปลอดภัยให้กับพนักงานทุกคน โดยเปิดโอกาสให้แสดงความคิดเห็น, ค้นหาอันตราย
                            และประเมินอันตรายจากงานและสถานที่ทำงานของตนเองโดยใช้หลัก 3GEN (หลัก 3 จริง หน้างานจริง
                            ของจริง สภาพการณ์จริง) หรือการเข้าไปสังเกตที่หน้างานจริง
                            และช่วยกันปรับปรุงแก้ไขให้อันตรายเหล่านั้นหมดไป
                            ซึ่งเป็นกิจกรรมที่ถูกกำหนดและให้ปฏิบัติภายใต้นโยบายการบริหารงานของบริษัทโตโยต้า
                            บริษัทที่มีค้าขายทำธุรกิจกับบริษัทโตโยต้าจะต้องทำกิจกรรมนี้ และต้องรายงานผลจากการทำกิจกรรม
                            ซึ่งเป็นส่วนหนึ่งการประเมินบริษัทคู่ค้า (SUPPLIER) ทั่วประเทศ วัตถุประสงค์ในการทำกิจกรรมนี้
                            คือ ต้องการให้พนักงานทุกคนสามารถมองอันตรายที่หน้างานออกหรือที่บางบริษัทเรียกว่า KY หรือ KYT
                            เป็นการหยั่งรู้อันตราย รู้ได้ว่าการกระทำใดหรือสภาพแวดล้อมของสิ่งใดคือสิ่งที่ไม่ปลอดภัย
                            ควรปรับปรุง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เทคนิคการชี้บ่งอันตรายทั้ง 6 ประเภทของการดำเนินกิจกรรม CCCF คือ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) อันตรายจากเครื่องจักร (Caught by Machine)<br>
                            (2) อันตรายจากวัตถุหนักตกใส่ (Contact with Heavy Objects)<br>
                            (3) อันตรายจากยานพาหนะ (Contact with Vehicles)<br>
                            (4) อันตรายจากการตกจากที่สูง (Fall From high level)<br>
                            (5) อันตรายจากกระแสไฟฟ้า (Electrocution)<br>
                            (6) อื่นๆ (ความร้อน สารเคมี ) (Others)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ต้นกำเนิด CCCF</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            CCCF Activity ต้นแบบกิจกรรม CCCF นั้นมาจากนโยบาย
                            การบริหารงานของบริษัทโตโยต้าโดยบริษัทคู่ค้าจะต้องทำกิจกรรมนี้ และต้องรายงานผลการทำกิจกรรม
                            ซึ่งเป็นส่วนหนึ่งของการประเมินบริษัทคู่ค้า
                            ทั่วประเทศ ของบริษัทโตโยต้า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการ 3GEN มีอะไรบ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            3GEN (หลัก 3 จริง หน้างานจริง ของจริง สภาพการณ์จริง)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วัตถุประสงค์ในการทำกิจกรรม CCCF</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            วัตถุประสงค์ในการทำกิจกรรมนี้ คือต้องการให้พนักงานทุกคนสามารถมองอันตรายที่หน้างานออก
                            รู้ได้ว่าการกระทำใดหรือสภาพแวตล้อมของสิ่งใดคือสิ่งไม่ปลอดภัย ควรปรับปรุง
                            ไม่ใช่รอให้หัวหน้างานหรือเจ้าหน้าที่ความปลอดภัย
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
    </section>

    <section>
        <?php $id_group = 17;include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/gallery_course.php'); ?>
    </section>

    <section class="black-bg">
        <?php include('layout/video_course.php'); ?>
    </section>

    <section>
        <?php include('layout/course_hot.php'); ?>
    </section>

    <section class="white-bg p-t-10">
        <?php include('layout/contact_inhouse.php'); ?>
    </section>

    <section>
        <?php include('layout/food.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/customer.php'); ?>
    </section>
</main>
<?php include('footer_front.php'); ?>

<script>
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0 ;?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0 ;?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0 ;?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0 ;?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
$(".nav-tabs li a").each(function(index, value) {
    $.ajax({
        method: "POST",
        url: "plan_detail.php",
        data: {
            sl_training: $(this).attr("data-id_training"),
            sl_branch: $(this).attr("data-id_branch")
        },
        success: function(result) {
            $('.table' + (index + 1)).html(result);
        }
    });
});

$(".information").on("click", ".btn_collap.collapsed", function(e) {
    e.preventDefault();
    $('.information .collapse').not(this).collapse('hide');

    $(this).find('i').removeClass("collap_close").addClass("collap_open");
    $(this).find('i').removeClass("fa-plus").addClass("fa-minus");
})

$(".collapse").on('hide.bs.collapse', function() {
    $(this).parent("button").find('i').removeClass("collap_open").addClass("collap_close");
    $(this).parent("button").find('i').removeClass("fa-minus").addClass("fa-plus");
});
</script>