<?php include('header_front.php'); ?>

<?php 
    $id_training = 166;//การตรวจสอบระบบอุปกรณ์เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้าสำหรับผู้ปฏิบัติการ

    //หา banner
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
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
            <h2 class="text-center"><b>การตรวจสอบระบบอุปกรณ์เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้าสำหรับผู้ปฏิบัติการ</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (1).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การตรวจระบบไฟฟ้าเป็นส่วนหนึ่งของการบริหารจัดการความปลอดภัยในโรงงาน
                                ซึ่งการตรวจระบบไฟฟ้านั้นเป็นหน้าที่ของวิศวกรไฟฟ้า ช่างเทคนิคไฟฟ้า หรือ
                                เจ้าหน้าที่ของฝ่ายวิศวกรรม ซึ่งจะเป็นไปตามกฎหมายของกระทรวงอุตสาหกรรมตามกฎกระทรวง
                                กำหนดมาตรการความปลอดภัยเกี่ยวกับระบบไฟฟฟ้าในโรงงาน พ.ศ. 2550
                                และตามกฎหมายของกระทรวงแรงงานตามกฎกระทรวงกำหนดมาตรฐานในการบริหาร
                                จัดการและดำเนินการด้านความปลอดภัยอาชีวอนามัย และสภาพแวดล้อมในการทำงานเกี่ยวกับไฟฟ้า พ.ศ.
                                2558
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
                                โดยทั่วไปแล้วงานตรวจสอบและซ่อมบำรุงระบบไฟฟ้าเป็นหัวใจสำคัญของระบบการผลิต
                                เพื่อให้ระบบไฟฟ้าสามารถใช้งานได้ยาวนานและมีความเชื่อถือได้
                                งานบำรุงรักษาระบบไฟฟ้าที่ดีคือการบำรุงรักษาเชิงป้องกัน
                                สิ่งสำคัญของการบำรุงรักษาเชิงป้องกันคือการตรวจสอบสภาพเพื่อให้ทราบว่าระบบหรืออุปกรณ์มีร่องรอยการเสื่อมสภาพหรือไม่
                                มีสภาพที่ต้องการการบำรุงรักษาหรือไม่ ในการตรวจสอบสามารถทำได้ 2 แบบ
                                คือการตรวจสอบด้วยสายตา (Visual Inspection) และการตรวจสอบด้วยเครื่องมือวัด
                                ซึ่งต้องการความรู้ในการใช้เครื่องมือวัดและการวิเคราะห์ด้วย
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (17).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b
                    class="head_nav">การตรวจสอบระบบอุปกรณ์เครื่องมือเพื่อ<br>บำรุงรักษาอุปกรณ์ไฟฟ้าสำหรับผู้ปฏิบัติการ</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                ท่านสามารถค้นหาหลักสูตรการตรวจสอบระบบอุปกรณ์เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้าสำหรับผู้ปฏิบัติการ
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="446" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11"
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery10.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        อุปกรณ์และเครื่องจักรต่าง ๆ ใช้พลังงานไฟฟ้าเป็นตัวขับเคลื่อน ในการทำงานและการผลิต การตระหนัก
                        และให้ความสำคัญกี่ยวกับกระบวนการควบคุมการทำงานของระบบไฟฟ้ การตรวจสอบเพื่อบำรุงรักษาอุปกรณ์
                        ไฟฟ้ (Electrical Equipment Check and Maintcnance) จึงมีความสำคัญ เพราะอายุการใช้งานของเครื่องมือ
                        เครื่องจักรจะยืนยาวมากขึ้น
                        ซึ่งประโยชน์บำรุงรักษาอุปกรณ์ไฟฟ้าจะช่วยลดค่าใช้ง่ายในการซื้ออุปกรณ์ไฟฟ้ามา
                        ทดแทน อันเกิดมาจากการเสียและชำรุด ตลอดจนการตรวจสอบเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้จะเป็นการสร้างความ
                        ปลอดภัยทางไฟฟ้าให้เกิดขึ้นและส่งผลต่อประสิทธิภาพและประสิทธิผลในการผลิตในการทำงาน<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้ผู้เข้ารับการอบรมมีทักษะ ความรู้ ความเข้าใจ และตระหนักเห็นความสำคัญการตรวจสอบ
                        ระบบอุปกรณ์ เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้า<br>
                        2) เพื่อให้ผู้เข้ารับการอบรมฝึกปฏิบัติการตรวจสอบระบบอุปกรณ์
                        เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้า<br><br>

                        ผลที่คาดว่าจะได้รับ<br>
                        1) ผู้เข้ารับการอบรมสามารถตรวจสอบระบบอุปกรณ์ เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้า<br>
                        2) ผู้เข้ารับการอบรมสามารถนำความรู้ไปใช้งานตรวจสอบระบบอุปกรณ์ เครื่องมือเพื่อบำรุงรักษา
                        อุปกรณ์ไฟฟ้า<br><br>

                        รูปแบบการฝึกอบรม<br>
                        1) เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2) เน้นการแลกเปลี่ยนเรียนรู้แบบการสาธิตและตัวอย่าง (Demonstration)<br>
                        3) เน้นการเรียนรู้แบบ Action Leaming การฝึกปฏิบัติการตรวจสอบระบบอุปกรณ์ เครื่องมือเพื่อ
                        บำรุงรักษาอุปกรณ์ไฟฟ้า
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
                    การตรวจสอบระบบอุปกรณ์เครื่องมือเพื่อบำรุงรักษาอุปกรณ์ไฟฟ้าสำหรับผู้ปฏิบัติการ
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความบำรุงรักษาอุปกรณ์ไฟฟ้า-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความบำรุงรักษาอุปกรณ์ไฟฟ้า-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 offset-md-2 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความบำรุงรักษาอุปกรณ์ไฟฟ้า-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความบำรุงรักษาอุปกรณ์ไฟฟ้า-04.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-8 mx-auto">
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
                            <h5><b>ระบบไฟฟ้า ติดตั้งอย่างไรให้ปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) ใช้อุปกรณ์ตัดวงจรอัตโนมัติ
                            การติดตั้งอุปกรณ์ตัดวงจรอัตโนมัติ เป็นส่วนนึงที่ช่วยเพิ่มความปลอดภัยในการใช้งานไฟฟ้า
                            เพราะเมื่อมีกระแสไฟฟ้าที่รั่วไหลออกจากเครื่องใช้ไฟฟ้า กระแส ไฟฟ้าลัดวงจร
                            หรือมีกระแสไฟฟ้าไหลลงดิน โดยผ่านตัวนำหรือร่างกาย หรือสื่ออื่นๆ จะทำให้อุปกรณ์นี้ตัดวงจรทันที
                            ทำให้ผู้ใช้งานไม่ได้รับอันตรายจากกระแสไฟฟ้ารั่วไหลนั่นเอง<br>

                            (2) ติดตั้งสายดิน
                            สายดินนั้น เป็นอุปกรณ์ที่ช่วยระบายกระแสไฟฟ้าที่ไหลออกนอกวงจรลงสู่พื้นดิน สายดิน
                            จะช่วยลดอันตรายที่จะเกิดขึ้นกับร่างกาย หรือภายในวงจร โดยที่สายดินจะติดตั้งไว้อยู่ที่เมนไฟ
                            และมักจะทำงานคู่กับอุปกรณ์ตัดวงจรอัตโนมัติ<br>

                            (3) แยกวงจร ให้เป็นส่วนๆ
                            สำหรับการติดตั้งระบบไฟฟ้า ไม่ควรเดินทุกอย่างภายในอาคารให้อยู่ภายในสวิตช์เดียว
                            ควรจะแยกวงจรให้เป็นส่วน ๆ ซึ่งจะช่วยความปลอดภัย
                            และการแก้ไขและบำรุงรักษาก็จะทำให้ง่ายขึ้นอีกด้วย
                            นอกจากนี้ยิ่งเป็นเครื่องใช้ไฟฟ้าที่มีการใช้ปริมาณไฟฟ้าสูงๆ อาทิเช่น เครื่องปรับอากาศ
                            ควรมีการแยกสวิตช์โดยเฉพาะ<br>

                            (4) เลือกขนาดสายไฟให้เหมาะกับการใช้งาน
                            ในระหว่างที่วางระบบไฟฟ้า ควรคำนวนถึงปริมาณไฟฟ้าที่คาดว่าจะใช้งานภายในอาคาร
                            โดยเฉพาะโรงงานอุตสาหกรรม การเลือกใช้สายไฟขนาดธรรมดาก็จะไม่เพียงพอต่อการใช้งาน
                            ซึ่งถ้าเลือกใช้สายไฟที่มีขนาดเล็กเกินไป จะทำให้สายไฟมีความร้อนสูง
                            และฉนวนกันไฟฟ้าจะเกินการละลาย และอาจจะทำให้เกิดไฟฟ้าลัดวงจรได้<br>

                            (5) เดินสายไฟภายในท่อร้อยสายไฟ
                            การเดินสายไฟโดยเฉพาะการเดินในที่ลับตาเช่น ใต้ผนัง ใต้ฝ้า ควรจะมีการเดินภายใน ท่อร้อยสายไฟ
                            ไม่ว่าจะเป็นท่อแข็งหรือแบบท่ออ่อน เพราะการใช้งานตามสภาพแวดล้อมอาจจะโดนสิ่งแปลกปลอม อาทิเช่น
                            ฝุ่น น้ำ แมลง หรือสัตว์อื่นๆ ที่จะเข้าไปทำลายสายไฟ ซึ่งจะทำให้สายไฟชำรุดเสียหายได้<br>

                            (6) ตรวจสอบอุปกรณ์ไฟฟ้าอยู่ตลอด
                            ทั้งอุปกรณ์ไฟฟ้า และเครื่องใช้ไฟฟ้า จะมีอายุการใช้งานในตัว
                            ดังนั้นเมื่อมีการใช้งานในระยะเวลาหนึ่ง ควรมีการตรวจเช็คและเปลี่ยนใหม่ถ้าหากมีการชำรุด เช่น
                            สายไฟโดยปกติแล้วจะมีอายุการใช้งานประมาณ 7 – 8 ปี เมื่อเห็นสายไฟเปลี่ยนสี หรือกรอบแตก
                            ควรรีบเปลี่ยนทันที เพราะอาจจะเป็นต้นเหตุของอุบัติเหตุจากการใช้ไฟฟ้าได้
                            และไม่ควรทำการซ่อมหรือเปลี่ยนด้วยตัวเอง ควรจะให้ช่างผู้เชี่ยวชาญมาซ่อมจะดีที่สุด<br>

                            (7) เลือกช่างติดตั้งไฟฟ้าที่ไว้ใจได้
                            สุดท้ายการติดตั้งระบบไฟฟ้า ก็จะขึ้นอยู่กับช่างที่เลือกใช้ติดตั้งอีกด้วย
                            เพราะมันเกี่ยวข้องกับความปลอดภัยของผู้ใช้ไฟฟ้าภายในบ้านอีกด้วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาเหตุของไฟตก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) เกิดจากมีการใช้ไฟฟ้าจากเครื่องใช้ไฟฟ้าหลายเครื่องพร้อมๆ กัน
                            ทำให้มีการใช้กำลังไฟมากเกินไป<br>
                            (2) หากมีอาการไฟตกเหมือนกันภายในระแวกเดียวกัน นั่นคือ ในระแวกนั้นๆ
                            มีการใช้ไฟฟ้ามากเกินไป<br>
                            (3) โดยที่ไฟฟ้าจากต้นทางมีไม่เพียงพอ<br>
                            (4) ตัวนำไฟฟ้าภายในบ้าน อาจจะมีการขัดข้อง หรือเกิดไฟช็อต ภายในบ้าน ถ้าพบปัญหาในด้านนี้
                            ควรรีบทำการแก้ไข<br>
                            (5) เกิดการชำรุดของสายไฟภายในบ้าน ทำให้สูญเสียแรงดันไฟฟ้าอยู่ตลอดเวลา<br>
                            (6) มีกระแสไฟฟ้าไหลลงดิน<br>
                            (7) เกิดการกระชากของกระแสไฟ ภายในบ้าน<br>
                            (8) เกิดจากสภาพอากาศภายนอก เช่น ฝนตกหนัก ฟ้าผ่า ฟ้าร้อง<br>
                            (9) อยู่ห่างไกลจากสถานีจ่ายไฟ ทำให้แรงดันไฟฟ้าตกลงได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การแก้ไขปัญหาไฟตก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            (1) เมื่อเกิดไฟตกภายในบ้าน สิ่งแรกๆ
                            ที่ต้องทำคือการปิดเครื่องใช้ไฟฟ้าที่มีอัตรากินไฟเป็นปริมาณมาก
                            และสังเกตว่าแรงดันไฟฟ้านั้นกลับมาปกติหรือไม่ เช่น เมื่อไฟตก หลอดไฟจะสว่างน้อยลง เราอาจจะ
                            เปิด เครื่องปรับอากาศ คอมพิวเตอร์
                            ถ้าหลอดไฟกลับมาสว่างนั่นคือไฟตกเกิดจากเครื่องใช้ไฟฟ้าชนิดนั้นๆ<br>
                            (2) ติดตั้งอุปกรณ์ควบคุมไฟฟ้า (Automatic Volate Stabilizer)
                            จะเป็นอุปกรณ์ที่ใช้ในการควบคุมแรงดันไฟฟ้า ให้คงที่สม่ำเสมอ<br>
                            (3) ใช้เครื่องสำรองไฟ (UPS) เป็นอุปกรณ์ที่นิยมมาใช้กับอุปกรณ์อิเล็กทรานิกส์ที่มีความซับซ้อน
                            เช่น คอมพิวเตอร์ เพราะถ้าหากไฟตก เครื่องคอมพิวเตอร์อาจจะเสียหายได้ จากปัญหาเล็กน้อย
                            ทั้งข้อมูลเสียหายจนถึงเครื่องคอมพิวเตอร์ไม่สามารถใช้งานได้
                            ซึ่งเครื่องสำรองไฟจะมีตั้งแต่ตัวเล็กๆ ที่ใช้งานได้กับอุปกรณ์ไม่กี่ชิ้น จนถึงเครื่องใหญ่ ๆ
                            ที่ครอบคลุมอุปกรณ์ไฟฟ้าได้มากมาย<br>
                            (4) เลือกใช้ปลั๊กไฟที่มีระบบ Serge Protection
                            ปลั๊กไฟชนิดนี้จะติดตั้งอุปกรณ์ปรับค่าแรงดันไฟฟ้าให้คงที่ จากไฟตก ไฟเกิน ไฟกระชาก
                            แต่จะทำได้ในระยะเวลาสั้นๆ เท่านั้น
                            และสามารถทำงานเต็มที่ในบ้านที่ติดตั้งสายดินอย่างถูกต้อง<br>
                            (5) หากเกิดไฟตกอย่างต่อเนื่อง ในระยะยาวไม่ควรปล่อยไว้ ควรรีบแจ้งการไฟฟ้าที่ดูแลเขตนั้นๆ
                            เพื่อหาสาเหตุและวิธีการแก้ไขต่อไป
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ไฟฟ้าลัดวงจร คือ ?</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            คือจุดที่วงจรไฟฟ้าที่มีแรงดันไฟฟ้าต่างกันมากๆมาสัมผัสกัน หรือตัวนำไฟฟ้า 2
                            จุดมีการถ่ายเทพลังงานเป็นจำนวนมากๆ ทำให้เกิดความร้อนสูงขึ้น หรือเกิดประกายไฟขึ้น
                            เป็นสาเหตุของอัคคีภัยหรือไฟไหม้ได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วิธีป้องกันไฟฟ้าลัดวงจร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) คอยตรวจเช็คสายไฟอยู่เสมอ
                            เมื่อพบเห็นสายไฟที่เริ่มเก่าหรือขาด ควรรีบเรียกช่างไฟ เพื่อทำการเปลี่ยนสายไฟใหม่
                            หรือทำการซ่อมแซมให้ใช้งานให้เป็นปกติ อย่างเร็วที่สุด<br>

                            (2) ตรวจสภาพเครื่องใช้ไฟฟ้า
                            หมั่นดูแลและตรวจสอบเครื่องใช้ไฟฟ้า หากมีอาการผิดปกติ เช่น เครื่องใช้ไฟฟ้าทำงานผิดปกติ
                            มีกลิ่นไหม้ ควรเลิกใช้และเปลี่ยนในทันที<br>

                            (3) เลือกซื้ออุปกรณ์ที่ได้รับมาตรฐาน
                            เมื่อจะทำการซื้ออุปกรณ์ไฟฟ้าใดๆ อย่ามองแต่ราคาถูกเพียงอย่างเดียว
                            ต้องสังเกตถึงอุปกรณ์ว่าได้รับมาตรอะไรบ้าง โดยเบื้องต้นจะต้องมี มอก.
                            รวมถึงมีฟิวส์ที่ตัดกระแสไฟฟ้าในตัว<br>

                            (4) อย่าใช้ไฟฟ้าเกินกำลัง
                            อุปกรณ์ไฟฟ้าแต่ละชนิดจะมีความสามารถสูงสุดที่สามารถรับได้
                            ไม่ควรต่อเครื่องใช้ไฟฟ้าให้เกินวัตต์ ที่อุปกรณ์สามารถรับได้ รวมถึงสายไฟด้วย
                            ถ้าหากภายในอาคารต้องการใช้ไฟฟ้าเป็นปริมาณมากๆ
                            การเดินสายไฟควรเดินสายไฟในขนาดที่สามารถรองรับการใช้งานได้<br>

                            (5) ติดตั้งระบบตัดไฟอัตโนมัติ
                            ระบบตัดไฟเป็นระบบที่ช่วยป้องกันภัยที่เกิดจากไฟฟ้าลัดวงจรได้เป็นอย่างดี
                            เพราะเมื่อมีจุดที่กระแสไฟฟ้าเดินผิดปกติ ระบบจะทำการตัดระบบไฟฟ้าทันที
                            และช่วยป้องกันไฟฟ้าลัดวงจรได้เป็นอย่างดี

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เมื่อเกิดไฟฟ้ารับวงจรแล้วต้องทำอย่างไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            สิ่งแรกที่ควรทำหลังจากที่เกิดไฟฟ้าลัดวงจร คือ
                            ควรรีบตัดกระแสไฟฟ้าจากจุดที่เกิดการลัดวงจรในทันที ถ้าหากเกิดประกายไฟ
                            ไม่ควรใช้นำสาดเข้าไปดับไฟโดยทันที เพราะอาจจะทำให้เกิดไฟฟ้าดูด
                            และถ้าหากมีคนที่ถูกไฟดูดไม่ควรสัมผัสกับผู้ถูกไฟดูดโดยตรง ควรตัดกระแสไฟบริเวณดังกล่าวก่อน
                            หรือถ้าหากตัดไฟไม่ได้ควรใช้อุปกรณ์ที่เป็นฉนวนไฟฟ้า ดึงรั้ง ผลักผู้ถูกไฟดูดออกมา
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สายดินคืออะไร ?</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            สายดิน (Earthing System) เป็นตัวนำหรือเป็นสายไฟที่ต่อจากอุปกรณ์ไฟฟ้า
                            ให้เป็นเส้นทางสามารถนำกระแสไฟฟ้าที่เกิดการรั่วไหลลงไปสู่ดิน เพื่อไม่ให้เป็นเป็นอันตรายต่อคน
                            และเป็นเส้นทางให้กระแสไฟฟ้ารั่วไหลกลับไปยังหม้อแปลงไฟฟ้า ทำให้เครื่องตัดไฟทำงาน
                            ระบบสายดินเป็นอีกข้อบังคับที่ทางการไฟฟ้านครหลวงนำมาใช้สำหรับผู้ยื่นของไฟฟ้ารายใหม่
                            เนื่องจากสมัยก่อนมีผู้ที่ประสบอันตรายจากไฟฟ้าเป็นจำนวนมาก
                            จึงเป็นข้อบังคับที่จำเป็นต้องปฎิบัติตาม เพื่อความปลอดภัยสำหรับการใช้งานไฟฟ้านั่นเอง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องใช้ไฟฟ้าใดบ้างที่ต้องมีสายดิน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) เครื่องใช้ไฟฟ้าประเภทที่ 1 : เป็นเครื่องใช้ไฟฟ้าที่จำเป็นต้องมีสายดิน
                            ซึ่งโครงสร้างหรือมีเปลือกหุ้มที่เป็นโลหะและผู้ใช้ต้องมีการสัมผัสกับตัวเครื่อง เช่น ตู้เย็น
                            เตารีด เครื่องซักผ้า เครื่องปรับอากาศ<br>
                            (2) เครื่องใช้ไฟฟ้าประเภทที่ 2 : เป็นเครื่องใช้ไฟฟ้าชนิดที่ไม่จำเป็นต้องมีสายดิน อาทิเช่น
                            วิทยุ โทรทัศน์ พัดลม ซึ่งถ้ามีการทดสอบแล้วมีกระแสไฟรั่ว แสดงว่าผู้ผลิตผลิตได้ไม่ได้มาตรฐาน
                            และจำเป็นจะต้องติดตั้งสายดินอีกด้วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หน่วยวัดทางไฟฟ้า คืออะไร ?</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            หน่วยวัดทางไฟฟ้า เป็นหน่วยมาตรฐานสากลที่ใช้ในการแยกหน่วยของการระบบไฟฟ้า
                            โดยจะมีอยู่ในหลายหน่วย เช่น แรงดันไฟฟ้า กระแสไฟฟ้า กำลังไฟฟ้า พลังงานไฟฟ้า เป็นต้น
                            มารู้จักกับหน่วยวัดทางไฟฟ้าต่างๆ ได้เลย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แรงดันไฟฟ้าคือ อะไร ?</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            แรงดันไฟฟ้า เป็นหน่วยวัดที่ใช้ในการวัดแรงดันที่ทำให้กระแสไฟฟ้าไหลไปตามตัวนำไฟฟ้า เช่น สายไฟ
                            ซึ่งมีหน่วยนับเป็น โวลต์ (Voltage) และที่เราเห็นบ่อย ๆ จะย่อด้วยสัญลักษณ์ V เช่น 220V
                            เป็นต้น
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
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-12 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            <h4><b>ช่างไฟฟ้า | เซฟตี้อินไทย</b></h4>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>ประกาศกระทรวงแรงงาน ตามพระราชบัญญัติส่งเสริมการพัฒนาฝีมือแรงงาน พ.ศ. 2545 และที่
                                แก้ไขเพิ่มเติม ให้สาขาช่างไฟฟ้าภายในอาคาร
                                เป็นสาขาอาชีพที่อาจเป็นอันตรายต่อสาธารณะซึ่งต้องดำเนินการโดยผู้ได้รับหนังสือรับรองความรู้ความสามารถ
                                หากฝ่าฝืนทำงานโดยไม่มีหนังสือรับรองจะมี ความผิดตามกฎหมาย โทษปรับไม่เกิน 5,000 บาท
                                ส่วนนายจ้างที่ฝ่าฝืนจ้างช่างไฟฟ้าภายในอาคารที่ไม่มี หนังสือรับรองเข้าทำงาน
                                โทษปรับไม่เกิน 30,000 บาท โดยมีผลบงัคบั ใช้ตั้งแต่วันที่ 26 ตุลาคม 2559 เป็นต้นมา</h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/17m9unwAADs?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/ภัยอันตรายที่เกิดจากไฟฟ้า.jpg"
                                alt="ภัยอันตรายที่เกิดจากไฟฟ้า">
                            <button class="ytp-large-play-button ytp-button" aria-label="Play"><svg height="100%"
                                    version="1.1" viewBox="0 0 68 48" width="100%">
                                    <path class="ytp-large-play-button-bg"
                                        d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                        fill="#f00"></path>
                                    <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/qLLEFZySOj0?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/กฎหมายที่เกี่ยวข้องกับการใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคล PPE  LAW BOOK PODCAST EP8.jpg"
                                alt="">
                            <button class="ytp-large-play-button ytp-button" aria-label="Play"><svg height="100%"
                                    version="1.1" viewBox="0 0 68 48" width="100%">
                                    <path class="ytp-large-play-button-bg"
                                        d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                        fill="#f00"></path>
                                    <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-5 col-12 text-center">
                    <a class="btn btn--medium btn--radius btn--red text-uppercase"
                        href="https://www.youtube.com/c/TopproChannel">WATCH NOW
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ทดสอบมาตรฐานระบบไฟฟ้าภายในอาคาร</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            ในปัจจุบัน กระทรวงแรงงานได้กำหนดให้ผู้ที่ประกอบอาชีพช่างไฟและผู้ที่ทำงานเกี่ยวกับไฟฟ้า
                            ซึ่งเป็นการทำงานที่อาจก่อให้เกิดอันตรายต่อสาธารณะ
                            จะต้องมีหนังสือรับรองความรู้ความสามารถเกี่ยวกับไฟฟ้า ตามกฎหมาย โดยผ่านการทดสอบ
                            และเข้ารับการประเมินจากกรมพัฒนาฝีมือแรงงาน หากช่างไฟฟ้า ปฏิบัติงานโดยไม่มีหนังสือรับรองฯ
                            ดังกล่าว จะได้รับโทษ โดย ปรับนายจ้าง จำนวน 30,000 บาท และ ปรับผู้ปฏิบัติงาน 5,000 บาท
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="ไฟฟ้าภายในอาคาร">
                                <button
                                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                                    รายละเอียดเพิ่มเติม
                                </button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <ul>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการฝึก มีความรู้ และทักษะเกี่ยวกับการใช้เครื่องมือ
                            รวมไปถึงสามารถปฏิบัติงานได้ตามมาตรฐานฝีมือแรงงานแห่งชาติ สาขา ช่างไฟฟ้าภายในอาคารระดับ 1
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการฝึกมีความพร้อมในการเข้ารับการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ สาขา
                            ช่างไฟฟ้าภายในอาคารระดับ 1</li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการฝึกสามารถปฏิบัติงานเดินสายและติดตั้งอุปกรณ์ไฟฟ้าได้อย่างถูกต้อง
                            และปฏิบัติงานได้ตามเวลามาตรฐานกำหนด
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้รับการฝึกสามารถนำความรู้
                            หรือทักษะไปใช้ในการปฏิบัติงานหรือพัฒนางานให้มีประสิทธิภาพมากขึ้น
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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