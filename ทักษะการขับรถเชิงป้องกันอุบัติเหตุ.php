<?php include('header_front.php'); ?>

<?php
$id_training = 464; //ทักษะการขับรถเชิงป้องกันอุบัติเหตุ

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
            <img alt="<?php echo $menu_branch[0]['alt']; ?>"
                src="<?php echo $base_url . $menu_branch[0]['path_banner']; ?>">
        </section>
        <?php include('layout/tab_search.php'); ?>
    </div>

    <section class="padding_bottom">
        <div class="container p-t-160 p-b-80 no_br">
            <h2 class="text-center"><b>ทักษะการขับรถเชิงป้องกันอุบัติเหตุ</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (5).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ในปัจจุบันอุบัติเหตุทางรถยนต์นับเป็นปัญหาที่น่าหวาดวิตก สำหรับคนใช้รถใช้ถนนเป็นอย่างยิ่ง
                                เพราะเป็นสาเหตุสำคัญที่ทำให้มีผู้บาดเจ็บและเสียชีวิตเป็นจำนวนมาก
                                ทั้งนี้การเกิดอุบัติเหตุเกิดจากผู้ขับรถส่วนใหญ่
                                ยังมีระดับความเข้าใจในการขับรถที่แตกต่างกัน และยังไม่ได้มาตรฐานเพียงพอ
                                วิธีหนึ่งที่จะช่วยป้องกันและลดอุบัติเหตุบนท้องถนนได้คือ
                                ผู้ขับรถจะต้องมีระดับความเข้าใจและการขับขี่ที่มีมาตรฐานดีพอ
                                มีความพร้อมทั้งในด้านจิตสำนึกและทักษะ อีกทั้งยังมีความสำคัญต่อองค์กรเป็นอย่างมาก
                                ราคารถยนต์ที่ใช้งานมีมูลค่าสูง โดยยังไม่รวมทรัพย์สินหรือสินค้าอื่นที่อยู่ในรถ
                                ผู้ขับรถก็ควรเป็นผู้ที่รอบรู้มีความสามารถในการคุ้มครองรถได้เป็นอย่างดี
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
                                ดังนั้น เราจึงต้องหันกลับมาตรวจสอบและศึกษามูลเหตุของการเกิดอุบัติเหตุให้เข้าใจ
                                อย่างถ่องแท้เพื่อป้องกันอุบัติเหตุมิให้เกิดแก่เราในแต่ละวัน อันจะเป็นผลดีในภาครวมร่วมกัน
                                ลดการสูญเสียชีวิต ร่างกาย ทรัพย์สิน ของตนเอง ของผู้อื่น และองค์กร
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_forklift2 (7).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ทักษะการขับรถเชิงป้องกันอุบัติเหตุ</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรทักษะการขับรถเชิงป้องกันอุบัติเหตุ
                ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table1" data-id_training="<?php echo $id_training; ?>"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img class="lazy" data-src="<?php echo $base_url; ?>/img/template_gallery/gallery14.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        “การขับรถ” เป็นกิจกรรมที่มีความเสี่ยงสูงที่สุดในชีวิตประจําวันและอุบัติเหตุ
                        เป็นสาเหตุสําคัญที่นํามาซึ่งการบาดเจ็บ สูญเสียชีวิตและทรัพย์สิน ดังนั้น
                        การขับรถเชิงป้องกันอุบัติเหตุ (Defensive Driving or Behind the wheel) สามารถช่วยลดอุบัติเหตุ
                        การสูญเสียชีวิตและทรัพย์สิน และถึงจุดหมายปลายทาง ได้อย่างปลอดภัย “การขับรถเชิงป้องกันอุบัติเหตุ”
                        เป็นการสร้างและตระหนักการป้องกันอุบัติเหตุการขับรถอย่างมี สติ การให้อภัยและเห็นใจผู้อื่น
                        รวมถึงทักษะการขับรถและปฏิบัติตามกฎจราจร ตลอดจนการใช้และการบํารุงรักษา รถยนต์อย่างถูกวิธี<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้อบรมตระหนักถึงสาเหตุของการเกิดอุบัติเหตุ
                        มีความรู้ความเข้าใจวิธีการในการขับรถอย่าง
                        ปลอดภัยที่เป็นมาตรฐานสากลและปฏิบัติตามกฎจราจรได้ถูกต้อง<br>
                        2.
                        เพื่อให้ผู้เข้าอบรมมีทัศนคติหรือพฤติกรรมในการขับรถที่ดีและมีความรับผิดชอบต่อผู้ใช้รถใช้ถนน<br>
                        3.
                        เพื่อให้ผู้เข้าอบรมสามารถวิเคราะห์อันตรายและความเสี่ยงและป้องกันอุบัติเหตุที่อาจเกิดขึ้น<br><br>
                        ผลที่คาดว่าจะได้รับ<br>
                        1. ผู้อบรมอบรมตระหนักถึงสาเหตุของการเกิดอุบัติเหตุ
                        การขับรถอย่างปลอดภัยที่เป็นมาตรฐานสากล
                        ปฏิบัติตามกฎจราจรได้ถูกต้อง<br>
                        2. ผู้อบรมมีทักษะและทัศนคติหรือพฤติกรรมในการขับรถที่ดีและมีความรับผิดชอบต่อผู้ใช้รถใช้ถนน<br>
                        3.
                        ผู้เข้าอบรมสามารถวิเคราะห์อันตรายและประเมินความเสี่ยงเพื่อป้องกันอุบัติเหตุที่อาจเกิดขึ้นได้<br><br>
                        รูปแบบการฝึกอบรม<br>
                        1. การบรรยายแบบ Blended Learning Solution ระหว่างทฤษฎีและสื่อมัลติมีเดีย<br>
                        2. การเรียนรู้จากการถ่ายทอดประสบการณ์ Learn by Experience<br>
                        3. กรณีศึกษา Case Study โดยผู้เข้ารับการฝึกอบรมมีส่วนร่วมในการคิดวิเคราะห์<br>
                        4. ทดสอบ Pre-test /Post-test
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">
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
                    ทักษะการขับรถเชิงป้องกันอุบัติเหตุ
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 offset-md-2 col-12 mb-4 article_course">
                    <img class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความทักษะการขับรถเชิงป้องกันอุบัติเหตุ-01.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความทักษะการขับรถเชิงป้องกันอุบัติเหตุ-02.jpg"
                        alt="">
                </div>
                <div class="col-md-4 offset-md-2 col-12 mb-4 article_course">
                    <img class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความทักษะการขับรถเชิงป้องกันอุบัติเหตุ-03.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความทักษะการขับรถเชิงป้องกันอุบัติเหตุ-04.jpg"
                        alt="">
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
                            <h5><b>หลักสำคัญของการขับรถ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) ต้องยึดกฎจราจรเป็นหลัก เพราะ เราไม่ได้ใช้ถนนคนเดียว<br>
                            (2) ความจำเป็นในการละเมิดกฎจราจรไม่เป็นข้ออ้าง เมื่อถูกจับกุม ไม่ว่ากรณีใด ๆ<br>
                            (3) ไม่ก่อให้เกิดอุบัติเหตุกับตัวเอง หรือ ทำให้คนอื่นเกิดอุบัติเหตุ<br>
                            (4) ละเมิดกฎจราจรได้เท่าที่จำเป็นจริง ๆ และ ไม่ก่อให้เกิดการจราจรติดขัด เช่น
                            มีผู้ป่วยหนักต้องรีบเข้าโรงพยาบาล เป็นต้น แต่ไม่ใช่ทุกครั้งที่ต้องการละเมิดกฎจราจร
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถที่จะนำมาใช้ในทางเดินรถ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) ต้องนำไปจดทะเบียนและเสียภาษีประจำปี พร้อมสำเนาคู่มือจดทะเบียนรถไว้ประจำรถด้วย<br>
                            (2) ต้องมีเครื่องยนต์ ส่วนควบ อุปกรณ์ครบถ้วน และใช้การได้ดี<br>
                            (3) ต้องมีสภาพมั่นคงแข็งแรง และมีความปลอดภัย<br>
                            (4) ต้องไม่เกิดเสียงดังเกินเกณฑ์ที่กำหนด (เสียงดังไม่เกิน 100 เดซิเบล A เมื่อวัดระยะห่าง
                            0.5เมตร)<br>
                            (5) ต้องไม่เกิดอันตรายหรือทำให้เสื่อมเสียสุขภาพอนามัย (ควันดำไม่เกินร้อยละ 50เครื่อวัด BOSCH
                            เมื่อวัดอยู่กับที่)<br>
                            (6) ต้องนำรถไปตรวจสภาพเป็นประจำทุกปี<br>
                            - รถจักรยานยนต์ เมื่อจดทะเบียนมาแล้ว 5 ปี<br>
                            - รถยนต์ เมื่อจดทะเบียนมาแล้ว 7 ปี<br>
                            (7) รถที่มีไว้เพื่อขายหรือเพื่อซ่อม (ป้ายแดง) ให้ใช้เฉพาะเวลากลางวันเท่านั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การขับรถในทางเดินรถ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            (1) ผู้ขับขี่ต้องมีใบอนุญาตขับขี่ และนำใบอนุญาตขับขี่ติดตัวไปด้วยทุกครั้งในขณะขับรถ<br>
                            (2) ต้องขับรถในทางเดินรถด้านซ้าย และไม่ล้ำกึ่งกลางของทางเดินรถ<br>
                            (3) ต้องใช้ความระมัดระวังไม่ให้รถชน หรือโดนคนเดินเท้า ไม่ว่าจะอยู่ ณ ที่ใดของทาง<br>
                            (4) ผู้ขับขี่ต้องไม่ถือหรือใช้โทรศัพท์เคลื่อนที่ขณะขับขี่
                            เว้นแต่ใช้อุปกรณ์เสริมสำหรับการสนทนา<br>
                            (5) ต้องไม่ดื่มสุราหรือของมึนเมาอย่างอื่นในขณะขับขี่ (มีแอลกอฮอร์ในร่างกายเกิน 50
                            มิลลิกรัมเปอร์เซ็นต์ ถือว่าเมาสุรา)<br>
                            (6) ผู้ขับขี่รถยนต์และผู้โดยสารต้องคาดเข็มขัดนิรภัยไว้กับที่นั่ง
                            ขณะขับขี่รถยนต์หรือโดยสาร<br>
                            (7) ผู้ขับขี่รถจักรยานยนต์และผู้โดยสารต้องสวมหมวกนิรภัย ขณะขับขี่หรือโดยสาร<br>
                            (8) ต้องขับรถด้วยความระมัดระวังเป็นพิเศษต่อเด็ก คนชรา และคนพิการ ที่กำลังใช้ทาง<br>
                            (9) ต้องขับรถให้ห่างจากรถคันหน้าพอสมควร
                            ในระยะที่จะหยุดรถได้โดยปลอดภัยในเมื่อจำเป็นต้องหยุดรถ<br>
                            (10) ทางเดินรถที่แคบ ซึ่งไม่อาจขับรถสวนกันได้โดยปลอดภัย ผู้ขับขี่รถคันที่ใหญ่กว่า
                            ต้องหยุดรถให้รถคันที่เล็กกว่าผ่านไปก่อน<br>
                            (11) เมื่อขับรถขึ้นทางลาดชัน หรือขึ้นสะพาน
                            ผู้ขับขี่ต้องใช้ความระมัดระวังไม่ให้รถถอยหลังไปโดนรถคันอื่น<br>
                            (12) ต้องขับรถไม่เร็วเกินกว่ากฎหมายกำหนด<br>
                            -ในเขตเทศบาล เมืองพัทยา กทม. ความเร็วไม่เกิน 80 กม. / ชั่วโมง<br>
                            -นอกเขตเทศบาล เมืองพัทยา กทม. ความเร็วไม่เกิน 90 กม. / ชั่วโมง<br>
                            -ทางพิเศษหรือทางด่วน ความเร็วไม่เกิน 120 กม. / ชั่วโมง<br>
                            ทั้งนี้ต้องปฏิบัติตามเครื่องหมายจราจรที่ปรากฏบนทางนั้น ๆ ด้วย<br>
                            (13) เมื่อขับรถสวนทางกันในเวลากลางคืน ให้ใช้ไฟต่ำ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>
                                    ผู้ขับขี่จะเลี้ยวรถ ให้รถคันอื่นผ่านหรือแซง เปลี่ยนช่องเดินรถ ลดความเร็วของรถ จอดรถ
                                    หรือหยุดรถ ปฏิบัติดังนี้
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) ต้องให้สัญญาณด้วยมือและแขนของผู้ใช้รถ หรือไฟสัญญาณของรถ ดังนี้<br>
                            – ลดความเร็ว ยื่นแขนขวาตรงออกไป โบกมือและแขนขึ้นลงหลายครั้ง<br>
                            – หยุดรถ ยื่นแขนขวาตรงออกไป แขนท่อนล่างตั้งฉากกับแขนท่อนบน และตั้งฝ่ามือขึ้น
                            หรือให้ไฟสัญญาณสีแดงท้ายรถ<br>
                            – ให้แซงขึ้นหน้า ยื่นแขนขวาตรงออกไป โบกมือไปข้างหน้าหลาย ๆ
                            ครั้งหรือให้ไฟสัญญาณยกเลี้ยวด้านซ้ายของรถ<br>
                            – เลี้ยวขวา ยื่นแขนขวาตรงออกไปเสมอระดับไหล่ หรือให้ไฟสัญญาณยกเลี้ยวข้างขวา<br>
                            – เลี้ยวซ้าย ยื่นแขนขวาและงอมือชูไปทางซ้ายหลาย ๆ ครั้ง หรือไฟสัญญาณยกเลี้ยวข้างซ้าย<br>
                            (2) ต้องมีระยะทางในการให้สัญญาณมือและแขน หรือไฟสัญญาณของรถในระยะทางไม่น้อยกว่า 30 เมตร
                            และมองเห็นได้ในระยะทางไม่น้อยกว่า 60 เมตร
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การขับรถผ่านทางร่วมทางแยก หรือวงเวียน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) ถ้ามีรถอยู่ในทางร่วมทางแยก ให้รถในทางร่วมทางแยกนั้นผ่านไปก่อน<br>
                            (2) ถ้ามาถึงทางร่วมทางแยกพร้อมกัน และไม่มีรถอยู่ในทางร่วมทางแยก
                            ให้รถที่อยู่ทางด้านซ้ายของตนขับผ่านไปก่อน เว้นแต่ทางเอกตัดผ่านทางโท<br>
                            (3) ผู้ขับขี่ขับรถมาถึงวงเวียน ต้องให้สิทธิ์แก่ผู้ขับขี่ในวงเวียนทางขวามือของตนผ่านไปก่อน
                            เว้นแต่จะมีสัญญาณไฟจราจร
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แนะนำเทคนิคการขับรถในตอนกลางคืน ดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (1) มีสติ มีความพร้อมในการขับรถตอนกลางคืน เพราะตอนกลางคืนจะมีทั้งความง่วง ความเนื่อยล้า
                            ที่อาจทำให้เกิดการหลับใน ผู้ขับขี่ต้องรู้ตัวเองก่อนขับเสมอ<br>
                            (2) ตรวจเช็คระบบไฟส่องสว่าง เป็นสิ่งที่สำคัญมากสำหรับการขับรถตอนกลางคืน
                            อย่าลืมตรวจเช็คระบบไฟทุกดวงทั้งภายในรถ และนอกรถ เช่น ไฟในห้องโดยสาร ไฟหน้า ไฟสูง ไฟต่ำ
                            ไฟเบรก ไฟฉุกเฉินว่ามีความสว่างเพียงพอหรือไม่<br>
                            (3) ไฟสูง ใช้สำหรับกะพริบแจ้งเตือนรถช้าที่แล่นอยู่เลนขวา เพื่อขอทางสำหรับแซง
                            ใช้ส่องไปที่ด้านหน้าเมื่อขับในเส้นทางที่มืดมิดไม่มีไฟถนน เพื่อตรวจสอบสภาพถนนข้างหน้า
                            ให้สัญญาณแจ้งเตือนรถคันข้างหน้า ไม่ควรขับเร็วพร้อมเปิดไฟสูง
                            ซึ่งทำให้รถที่แล่นสวนมามองไม่เห็น<br>
                            (4) ระวังรถจอดเสียบริเวณไหล่ทาง โดยเฉพาะรถบรรทุกชอบจอดเสียตามไหล่ทาง
                            ซึ่งถือเป็นพื้นที่อันตราย ผู้ขับต้องระวังขณะขับรถในทางขึ้น-ลงเขา ทางวกไปวนมา
                            หรือทางโค้งที่เป็นมุมอับแสง ควรเปิดไฟสูงสลับกับไฟต่ำบ่อยๆ จะช่วยทำให้ปลอดภัยมากยิ่งขึ้น<br>
                            (5) ทิ้งช่วงให้ห่างจากรถคันข้างหน้า และคอยระวังไม่ให้รถคันหลังตามจี้ท้าย
                            จะช่วยทำให้มีระยะมากพอสำหรับเบรก<br>
                            (6) เพิ่มความระมัดระวังเมื่อขับรถในบริเวณชุมชน
                            เมื่อขับในเขตชุมชนมอเตอร์ไซค์หรือรถอาจโผล่ออกมาตัดหน้าคุณได้ เมื่อขับผ่านชุมชนในตอนกลางคืน
                            ลดความเร็วทุกครั้งที่วิ่งผ่านชุมชน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจอดรถ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) ต้องจอดรถให้ขนานหรือชิดกับขอบทางในระยะห่างไม่เกิน 25 เซนติเมตร<br>
                            (2) การจอดรถที่ผู้ขับขี่ไม่อาจอยู่ควบคุมรถ ผู้ขับขี่ต้องดับเครื่องยนต์
                            และห้ามล้อรถนั้นไว้<br>
                            (3) การจอดรถที่เป็นทางลาดชัน ผู้ขับขี่ต้องหันล้อหน้าของรถเข้าขอบทาง<br>
                            (4) การจอดรถที่เกิดขัดข้อง จำเป็นต้องจอดรถในทางเดินรถ
                            ผู้ขับขี่ต้องจอดรถในลักษณะที่ไม่กีดขวางทางจราจร และต้องแสดงเครื่องหมาย
                            หรือสัญญาณจราจรไว้<br>
                            (5) ข้อห้ามการจอดรถที่สำคัญ อาทิเช่น<br>
                            – ในระยะ 3 เมตร จากตู้ไปรษณีย์ ทางข้าม ท่อน้ำดับเพลิง<br>
                            – ในระยะ 5 เมตร จากปากทางเดินรถ<br>
                            – ในระยะ 10 เมตร จากทางร่วมทางแยกที่ติดตั้งสัญญาณไฟจราจร<br>
                            – ในระยะ 15 เมตร จากทางรถไฟผ่าน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>
                                    การขับแซงและผ่านขึ้นหน้า
                                </b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) การแซงรถต้องแซงทางด้านขวา โดยมีระยะห่างจากรถที่ถูกแซงพอสมควร
                            แล้วจึงขับรถชิดทางด้านซ้ายของทางเดินรถ<br>
                            (2) ต้องให้สัญญาณไฟกระพริบข้างขวา เพื่อให้รถคันหลังรู้ว่าจะแซง<br>
                            (3) ต้องดูกระจกหลังว่ามีรถด้านหลังกำลังจะแซงขึ้นมาหรือไม่
                            และดูรถข้างหน้าว่ามีรถสวนทางมาหรือไม่<br>
                            (4) ในเวลากลางคืน ให้สัญญาณไฟสูงต่ำสลับกันเพื่อขอทาง<br>
                            (5) เมื่อผู้ขับขี่ขับรถช้าอยู่ทางด้านซ้าย ต้องยินยอมให้รถที่ขับเร็วกว่าแซง
                            และต้องลดความเร็วของรถลง และให้สัญญาณไฟยกเลี้ยวข้างซ้าย หรือสัญญาณมือและแขน<br>
                            (6) ข้อห้ามการแซงที่สำคัญ อาทิเช่น<br>
                            – เมื่อรถขึ้นทางชันหรือขึ้นสะพาน หรืออยู่ในทางโค้ง<br>
                            – ในระยะ 30 เมตร ก่อนถึงทางร่วมทางแยก หรือวงเวียน<br>
                            – เมื่อมองไม่เห็นทางข้างหน้าในระยะ 60 เมตร<br>
                            – เมื่อเข้าที่คับขัน หรือเขตปลอดภัย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เมื่อมีอุบัติเหตุจราจรเกิดขึ้น</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ผู้ขับขี่ที่ก่อให้เกิดความเสียหายแก่คนหรือทรัพย์สินของผู้อื่น ต้องหยุดรถ
                            และให้ความช่วยเหลือตามสมควร<br>
                            (2) ต้องแสดงตัวและแจ้งเหตุต่อพนักงานเจ้าหน้าที่ใกล้เคียงทันที<br>
                            (3) ต้องแจ้งชื่อ ที่อยู่ของตน และเลขทะเบียนรถ
                            พร้อมแจ้งเหตุต่อพนักงานเจ้าหน้าที่ที่ใกล้เคียงทันที<br>
                            (4) ต้องแจ้งชื่อตัว ชื่อสกุล ที่อยู่ของตน และหมายเลขทะเบียนรถแก่ผู้ได้รับความเสียหายด้วย<br>
                            (5) หากผู้ขับขี่หลบหนี ไม่แสดงตัวต่อพนักงานเจ้าหน้าที่ ณ สถานที่เกิดเหตุ
                            ให้สันนิษฐานว่าเป็นผู้กระทำผิด และให้พนักงานเจ้าหน้าที่มีอำนาจยึดรถคันที่หลบหนี
                            จนกว่าคดีจะถึงที่สุด หรือได้ตัวผูกระทำผิด<br>
                            (6) หากเจ้าของรถหรือผู้ที่ครอบครองรถไม่แสดงตัวต่อพนักงานเจ้าหน้าที่ภายใน6 เดือน
                            นับแต่วันเกิดเหตุ ให้รถนั้นตกเป็นของรัฐ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สิ่งที่ควรทำก่อนออกเดินทาง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) ศึกษาจุดหมายปลายทางก่อนออกเดินทาง<br>
                            (2) ศึกษาความเร็วที่กฏหมายกำหนด กฎจราจร และป้ายจราจร ของประเทศที่จะเดินทางไป
                            เนื่องจากสิ่งเหล่านี้แตกต่างกันไปในแต่ละประเทศ เพื่อความปลอดภัย
                            คุณควรรู้ความแตกต่างที่สำคัญของกฎจราจรในประเทศนั้นๆ เป็นอย่างดีแล้วก่อนขับรถ<br>
                            (3)
                            ตรวจสอบให้แน่ใจว่าสามารถใช้ใบขับขี่ของคุณได้อย่างถูกกฎหมายในประเทศที่คุณจะเดินทางไปหรือไม่
                            หรือจำเป็นต้องใช้ใบขับขี่สากลเพื่อขับรถในประเทศนั้นๆ หรือไม่<br>
                            (4) พิจารณาช่วงเดือนและฤดูกาลที่คุณจะเดินทาง
                            เนื่องจากสภาพอากาศมีผลต่อสภาพถนนและทัศนวิสัยในการขับขี่
                            การขับรถบนถนนที่ปกคลุมด้วยน้ำแข็งนั้นมีความแตกต่างอย่างมากกับการขับรถบนถนนที่แห้ง<br>
                            (5) ศึกษาลักษณะของยานพาหนะที่จะขับให้ดี
                            และพยายามขอใช้บริการรถที่คุณคุ้นชินหรือขับได้ถนัด<br>
                            (6) กำหนดเส้นทางและจุดแวะพักก่อนออกเดินทาง
                            รวมทั้งเผื่อเวลาสำหรับการจราจรที่ติดขัดในช่วงเวลาเร่งด่วนซึ่งอาจทำให้การเดินทางล่าช้าลงได้<br>
                            (7) เตรียมหมายเลขโทรศัพท์ฉุกเฉิน พร้อมกับเอกสารที่จำเป็นหากเกิดอุบัติเหตุทางจราจร
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
        <?php $id_group = 17;
        include('layout/training_card.php'); ?>
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
                            <h4><b>เน้นทำ Workshop ให้ได้ลงมือทำจริง</b></h4>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>บรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้น<br>และสามารถนำไปใช้ได้จริงในการทำงาน</h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/C6gizKoPX2Y?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/ป้ายจราจร - Motion Graphic เซฟตี้อินไทย.jpg"
                                alt="ป้ายจราจร">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/2CR3ABawRRE?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/รวมคลิปอุบัติเหตุ-ใจไม่ถึงห้ามดู-เซฟตี้อินไทย.jpg"
                                alt="รวมคลิปอุบัติเหตุ-ใจไม่ถึงห้ามดู-เซฟตี้อินไทย">
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
                    <img class="box_shadow img-fluid"
                        src="<?php echo $base_url; ?>/img/bg/การขับขี่ปลอดภัย-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การขับขี่ปลอดภัย</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            การรณรงค์เรื่องความปลอดภัยเป็นสิ่งที่องค์กรต่าง ๆ ให้ความสำคัญมาเป็นอันดับแรกของการทำงาน
                            (Safety First) ไม่ใช่เฉพาะความปลอดภัยในการทำงานเท่านั้นที่ให้ความสำคัญ
                            แต่รวมไปถึงความปลอดภัยนอกงานของสมาชิกในองค์กร การรณรงค์ที่สำคัญในส่วนของความปลอดภัยนอกงาน
                            ซึ่งอยู่วิถีชีวิตของทุกคนคือเรื่องความปลอดภัยในการเดินทางหรือการใช้ยานยนต์
                            ในการรณรงค์เรื่องขับขี่ปลอดภัย (Safety Drive)
                            เพราะชีวิตของคนทำงานเกี่ยวข้องและสัมพันธ์กับการเดินทาง ทั้งรถยนต์และรถจักรยานยนต์
                            การรณรงค์และให้ความรู้เกี่ยวกับการขับขี่ปลอดภัย จึงเป็นความสำคัญที่องค์กรต่าง ๆ ควรสนับสนุน
                            เพราะนอกจากขับรถได้ สิ่งสำคัญคือเทคนิคการขับขี่รถอย่างไรให้ถูกต้อง
                            และมีความปลอดภัยและถูกต้องตามกฎจราจร เพื่อความปลอดภัยของผู้ใช้รถและถนนต่อไป
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การขับขี่ปลอดภัย">
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
                            เพื่อให้ผู้เข้ารับความรู้ ความเข้าใจ ในการเตรียมความพร้อม ดูแลรักษารถยนต์และจักรยานเบื้องต้น
                            เพื่อการขับขี่ที่ปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับความรู้ ความเข้าใจ และการปฏิบัติ
                            เทคนิคการขับขี่ของรถยนต์และรถจักยานยนต์อย่างปลอดภัย</li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการอบรมตระหนักถึงจิตสำนึกความปลอดภัยในการขับขี่ อันเป็นการส่งเสริมการ
                            รณรงค์ความปลอดภัยนอกงาน
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการอบรมทบทวนและตระหนักถึงการขับขี่รถยนต์และรถจักยานยนต์ตามกฎจราจร
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
var sl_group = "<?php echo (isset($_POST['sl_group']) && $_POST['sl_group']) ? $_POST['sl_group'] : 0; ?>";
var sl_training = <?php echo (isset($_POST['sl_training']) && $_POST['sl_training']) ? $_POST['sl_training'] : 0; ?>;
var sl_branch = <?php echo (isset($_POST['sl_branch']) && $_POST['sl_branch']) ?  $_POST['sl_branch'] : 0; ?>;
var sl_month = <?php echo (isset($_POST['sl_month']) && $_POST['sl_month']) ? $_POST['sl_month'] : 0; ?>;
</script>

<script type="text/javascript" src="js/set-select2.js"></script>

<script>
$.ajax({
    method: "POST",
    url: "plan_detail.php",
    data: {
        sl_training: $('.table1').attr("data-id_training")
    },
    success: function(result) {
        $('.table1').html(result);
    }
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