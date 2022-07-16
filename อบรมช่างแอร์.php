<?php include('header_front.php'); ?>
<?php
$id_training = 175; //อาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1 

//หา course outline 
$stmt = $bookingDb->prepare('SELECT detail_training FROM training 
    WHERE id_training = ?');
$stmt->execute(array($id_training));
$url_course_outline = $stmt->fetchColumn();

//หา banner
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = 'SELECT path_banner FROM menu_training WHERE url_page = ?';
$stmt = $safetyDb->prepare($sql);
$stmt->execute(array($actual_link));
$menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <div class="container p-t-160 p-b-60 no_br">
            <h1 class="text-center"><b>อบรมช่างแอร์</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (15).jpg" alt="อบรมช่างแอร์">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                เรื่อง มาตรฐานฝีมือแรงงานแห่งชาติ
                                สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1
                                อาศัยอำนาจตามความในมาตรา ๒๒ วรรคหนึ่ง แห่งพระราชบัญญัติส่งเสริมการพัฒนาฝีมือแรงงาน พ.ศ.
                                2545
                                คณะกรรมการส่งเสริมการพัฒนาฝีมือแรงงาน จึงกำหนดมาตรฐาน ฝีมือแรงงานแห่งชาติ
                                สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก (ช่างปรับอากาศ ระดับ 1)
                                โดยความเห็นชอบของรัฐมนตรีว่าการกระทรวงแรงงาน ดังต่อไปนี้
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
                                ข้อ 1 ในประกาศนี้สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก หมายถึง
                                ผู้ปรับ ประกอบ ติดตั้ง และซ่อมแซม
                                อุปกรณ์ของเครื่องปรับอากาศในบ้านและการพาณิชย์
                                โดยปฏิบัติงานตรวจดูรูปแบบแผงวงจรทางเดินสายไฟฟ้าหรือส่วนต่าง ๆ
                                เพื่อดูความถูกต้อง วินิจฉัย ข้อบกพร่องของอุปกรณ์ทางไฟฟ้าอิเล็กทรอนิกส์ และทางกล ถอด
                                ซ่อมชิ้นส่วนอุปกรณ์
                                ที่ชำรุดถ้าจำเป็นมาตรฐานฝีมือแรงงานแห่งชาติ
                                สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาด ระดับ 1
                                หมายถึง ช่างซึ่งมีความสามารถประกอบอาชีพในงานอ่านแบบเครื่องกลและไฟฟ้าเบื้องต้น
                                ติดตั้งอุปกรณ์ไฟฟ้า เดินสายไฟฟ้า
                                การต่อวงจรไฟฟ้า
                                ระบบควบคุุมทางไฟฟ้าและการเดินท่อระบบสารทำความเย็นของเครื่องปรับอากาศมีความสามารถทำความเย็น
                                ขนาดไม่เกิน 8 กิโลวัตต์ (25,000 BTU/hr.)
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (32).jpg"
                        alt="อบรมช่างแอร์ ชลบุรี">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <div class="why_training_box container_small p-b-80">
            <div class="row mb-3 p-t-40">
                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/ค่าลงทะเบียน.png" alt="อบรมแอร์">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 why-fix-height">
                            <div class="text-center">
                                ค่าลงทะเบียน<br>
                                ราคา 8,500 บาท<br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto scale text-center">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/paper.png" alt="ช่างแอร์">
                                </figure>
                            </div>
                        </div>
                        <div class="pb-2 why-fix-height scale-text">
                            <div class="text-center">
                                ดาวน์โหลดเอกสารการอบรมหลักสูตร อาชีพช่างเครื่องปรับอากาศในบ้าน
                                และการพาณิชย์ขนาดเล็กระดับ 1
                            </div>
                            <a target="_blank" rel="noreferrer" href="<?php echo $url_course_outline; ?>">

                                <button class="btn btn--small btn--radius btn--green btn--green-hover-black font--light
                                    text-uppercase p-2 mt-2">
                                    เอกสารการอบรม
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url; ?>/img/logo/certificate.png" alt="ใบเซอร์ช่างแอร์">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 why-fix-height">
                            <div class="text-center">
                                เมื่อมาอบรมกับเราท่านจะได้รับ<br>
                                ใบประกาศวุฒิบัตรผ่านการอบรม
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">อบรมช่างแอร์</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ผู้ปรับ
                ประกอบ ติดตั้ง <br>และซ่อมแซมอุปกรณ์ของเครื่องปรับอากาศในบ้านและการพาณิชย์
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
                <img title="" class="lazy" data-src="<?php echo $base_url; ?>/img/bg/bg-principle-air.jpg"
                    alt="ช่างแอร์ในตำนาน">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        มาตรฐานฝีมือแรงงานแห่งชาติ สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ผู้ปรับ
                        ประกอบ ติดตั้ง และซ่อมแซมอุปกรณ์ของเครื่องปรับอากาศในบ้านและการพาณิชย์
                        โดยปฏิบัติงานตรวจดูรูปแบบแผงวงจรทางเดินสายไฟฟ้าหรือส่วนต่าง ๆเพื่อดูความถูกต้อง วินิจฉัย
                        ข้อบกพร่องของอุปกรณ์ทางไฟฟ้าอิเล็กทรอนิกส์ และทางกล ถอด
                        ซ่อมชิ้นส่วนอุปกรณ์ที่ชํารุดถ้าจําเป็นอาศัยอํานาจตามความในมาตรา ๒๒ วรรคหนึ่ง
                        แห่งพระราชบัญญัติส่งเสริมการพัฒนา ฝีมือแรงงาน พ.ศ. ๒๕๔๕
                        คณะกรรมการส่งเสริมการพัฒนาฝีมือแรงงาน จึงกําหนดมาตรฐาน ฝีมือแรงงานแห่งชาติ
                        สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก
                        โดยความเห็นชอบของรัฐมนตรีว่าการกระทรวงแรงงาน<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีทักษะ ความรู้ความเข้าใจ การทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ
                        สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก<br>
                        2. เพื่อให้ผู้เข้ารับการอบรมเรียนรู้วัตถุประสงค์ กระบวนการการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ
                        สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก<br><br>
                        ผลที่คาดว่าจะได้รับ<br>
                        1. ผู้เข้ารับการอบรมสามารถผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ
                        สาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก<br>
                        2.
                        ผู้เข้ารับการอบรมสามารถนำความรู้ไปใช้ในสาขาอาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็กตามมาตรฐานฝีมือแรงงานแห่งชาติ<br><br>
                        รูปแบบการฝึกอบรม<br>
                        1. เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2. เน้นการแลกเปลี่ยนเรียนรู้แบบการสาธิตและตัวอย่าง (Demonstration)<br>
                        3. เน้นกระบวนการเรียนรู้ผ่านสื่อ (Technology-based learning )<br>
                        4. เน้นการเรียนรู้แบบ Action Learning การติดตั้งตามมาตรฐานฝีมือแรงงาน
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

    <section>
        <?php include('layout/schedule_detail.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/qualification.php'); ?>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>
                    อาชีพช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างแอร์-01.jpg"
                        alt="คุณสมบัติช่างแอร์">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างแอร์-02.jpg"
                        alt="คุณสมบัติช่างแอร์">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-4 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างแอร์-03.jpg"
                        alt="คุณสมบัติช่างแอร์">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url; ?>/img/template_article/บทความช่างแอร์-04.jpg"
                        alt="คุณสมบัติช่างแอร์">
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
                            <h5><b>สาขาช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 1</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            ผู้ที่มีความรู้
                            ความสามารถในการปฏิบัติงานเกี่ยวกับเครื่องปรับอากาศแบบแยกส่วนระบายความร้อนด้วยอากาศ ระบบไฟฟ้า
                            1 เฟส โดยติดตั้งคอยล์ร้อน (Condensing Unit) หรือคอยล์เย็น (Fan Coil Unit)
                            สำหรับเครื่องปรับอากาศใหม่ เดินท่อและต่อท่อระบบสารทำความเย็น โดยใช้แฟลร์นัท เดินท่อน้ำทิ้ง
                            ทำสุญญากาศ บรรจุสารทำความเย็นเพิ่มเติม ต่อระบบไฟฟ้า ทดสอบการเดินเครื่องเพื่อตรวจสอบอุณหภูมิ
                            ความดัน และกระแสไฟฟ้า บำรุงรักษาเบื้องต้น ล้างทำความสะอาด หรือรื้อถอนคอยล์ร้อน (Condensing
                            Unit) คอยล์เย็น (Fan Coil Unit)ท่อสารทำความเย็น ท่อน้ำทิ้ง
                            หรือระบบไฟฟ้าของเครื่องปรับอากาศที่ติดตั้งอยู่เดิม
                            โดยปฏิบัติงานกับเครื่องปรับอากาศขนาดไม่เกิน 11 กิโลวัตต์ (36,000 บีทียูต่อชั่วโมง)
                            โดยให้เกิดความปลอดภัยในการปฏิบัติงาน การใช้งาน และสิ่งแวดล้อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาขาช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 2</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ผู้ที่มีความรู้ ความสามารถ
                            ในการปฏิบัติงานเกี่ยวกับเครื่องปรับอากาศแบบแยกส่วนระบายความร้อนด้วยอากาศ ระบบไฟฟ้า 1 เฟส
                            หรือ 3 เฟส
                            โดยติดตั้ง รื้อถอน ย้าย หรือเปลี่ยนคอยล์ร้อน (Condensing Unit) หรือคอยล์เย็น (Fan Coil Unit)
                            ตัดต่อหรือเดินท่อระบบสารทำความเย็น เดินท่อน้ำทิ้ง ตรวจสอบรอยรั่ว ทำสุญญากาศ
                            บรรจุสารทำความเย็น
                            หรือดูดเก็บสารทำความเย็นออกจากระบบปรับอากาศ ต่อระบบไฟฟ้า ทดสอบการเดินเครื่อง
                            เพื่อตรวจสอบอุณหภูมิ ความดันและกระแสไฟฟ้า บำรุงรักษา ล้างทำความสะอาด ตรวจสอบวินิจฉัย
                            ซ่อมแซมเครื่องปรับอากาศ ให้คำแนะนำการทำงานของเครื่องปรับอากาศ โดยปฏิบัติงาน
                            กับเครื่องปรับอากาศขนาดไม่เกิน 21 กิโลวัตต์ (72,000 บีทียูต่อชั่วโมง) โดยให้เกิดความปลอดภัย
                            ในการปฏิบัติงาน การใช้งาน และสิ่งแวดล้อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาขาช่างเครื่องปรับอากาศในบ้านและการพาณิชย์ขนาดเล็ก ระดับ 3</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ผู้ที่มีความรู้ ความสามารถในการปฏิบัติงานเกี่ยวกับเครื่องปรับอากาศทุกชนิด ระบบไฟฟ้า 1 เฟส
                            หรือ 3 เฟส โดยติดตั้ง
                            รื้อถอน ย้าย เปลี่ยนคอยล์ร้อน (Condensing Unit) หรือคอยล์เย็น (Fan Coil Unit)
                            สำหรับเครื่องปรับอากาศ
                            ตัดต่อหรือเดินท่อระบบสารทำความเย็น ดูดเก็บสารทำความเย็นออกจากระบบปรับอากาศ ต่อวงจรไฟฟ้า
                            ทดสอบ
                            การเดินเครื่องเพื่อตรวจสอบอุณหภูมิ ความดัน และกระแสไฟฟ้า บำรุงรักษา หรือล้างทั้งระบบไฟฟ้า
                            1 เฟส หรือ 3 เฟส ตรวจสอบวินิจฉัย แก้ไข ให้คำแนะนำการทำงานและการควบคุมงานของระบบ
                            เครื่องปรับอากาศ โดยปฏิบัติงานกับเครื่องปรับอากาศขนาดไม่เกิน 70 กิโลวัตต์ (240,000 บีทียู
                            ต่อชั่วโมง) โดยให้เกิดความปลอดภัยในการปฏิบัติงาน การใช้งาน และสิ่งแวดล้อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>มาตรฐานฝีมือแรงงานแห่งชาติ ระดับ 1 ได้แก่</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) หน่วยระบบเมตริก ระบบอังกฤษ และระบบเอสไอ (S.I.)<br>
                            (2) การอ่านแบบทางเครื่องกลและไฟฟ้าเบื้องต้น<br>
                            (3) ใช้และดูแลรักษาเครื่องมือในงานเกี่ยวกับเครื่องปรับอากาศ<br>
                            (4) ระบบและวงจรเบื้องต้นของเครื่องปรับอากาศ<br>
                            (5) อุปกรณ์หลักที่ใช้ในวงจรเบื้องต้นของเครื่องปรับอากาศ<br>
                            (6) ชนิดและคุณสมบัติของสารทำความเย็นที่ใช้ในเครื่องปรับอากาศ<br>
                            (7) งานเชื่อมแก๊สและงานเชื่อมไฟฟ้า<br>
                            (8) หลักการติดตั้งและซ่อมบำรุงเครื่องปรับอากาศ<br>
                            (9) วงจรไฟฟ้าแบบอนุกรมและแบบขนานอย่างง่าย<br>
                            (10) ระบบควบคุมทางไฟฟ้าของเครื่องปรับอากาศชนิดตัดตอน<br>
                            (11) การเลือกใช้ขนาดของสายไฟฟ้า สายดิน ตามกฎข้อบังคับ<br>
                            ในการเดินสายไฟฟ้าของการไฟฟ้านครหลวงและการไฟฟ้าส่วนภูมิภาค ความปลอดภัยในการปฏิบัติงาน
                            เกี่ยวกับไฟฟ้า
                            การเลือกใช้อุปกรณ์ป้องกันกระแสไฟฟ้าเกินและสวิตซ์ตัดตอนอัตโนมัติได้อย่างเหมาะสม<br>
                            (12) การหุ้มฉนวนท่อสารทำความเย็นและการบุฉนวนของท่อส่งลมเย็น<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ลมไม่ออกเนื่องจากฝุ่นจับตัวที่ตัวกรองอากาศ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            เป็นปัญหาที่มักเกิดกับแอร์ที่ใช้งานหนัก และไม่ได้รับการทำความสะอาดมาเป็นเวลานาน
                            ทำให้มีฝุ่นจับตัวจนหนาในปริมาณมากจนไปบังทิศทางการเป่าของลม ทำให้เป่าลมออกมาได้ไม่เต็มที่
                            ซึ่งหากปัญหาเกิดจากจุดนี้ เพียงแต่เราถอดตัวฟิลเตอร์แอร์ออกมาล้างทำความสะอาด และเช็ดให้แห้ง
                            เท่านี้ก็สามารถใช้งานได้ตามปกติ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ลมไม่ออกเนื่องจากใบพัดหมุนผิดทิศทาง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            โดยปกติแล้วการหมุนของใบพัดแอร์จะเป็นการหมุนแบบดักลมเสมอ
                            แต่หากตัวปรับทิศทางทำงานผิดพลาดจนทำให้ทิศทางการหมุนเปลี่ยนไปจะทำให้เกิดปัญหาแอร์ลมไม่ออกได้ครับ
                            ซึ่งปัญหานี้สามารถแก้ไขได้ด้วยการใช้ไม้ยาวๆ มาเขี่ยใบพัดให้หมุนไปในทิศทางที่ถูกต้อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ลมไม่ออกเนื่องจากคอล์ยร้อนสกปรก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ถ้าล้างทำความสะอาดแอร์ภายในบ้านแล้วยังไม่ดีขึ้น
                            ปัญหาอาจเกิดจากตัวคอล์ยร้อนนอกตัวบ้านที่ไม่ได้รับการทำความสะอาดจนทำให้สิ่งสกปรกจับตัวแน่นบริเวณใบพัดแอร์
                            ทำให้แอร์ไม่สามารถทำงานได้อย่างเต็มที่
                            จึงเกิดปัญหาเรื่องการระบายลมและความร้อนภายในห้องที่มากผิดปกติ
                            หากปัญหามาจากจุดนี้ต้องทำการล้างทำความสะอาดตัวคอล์ยร้อนนอกตัวบ้าน
                            และต้องหมั่นทำเป็นประจำทุกครั้งที่ช่างแอร์มาล้างแอร์ภายในบ้าน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ลมไม่ออกเนื่องจากมอเตอร์ภายในชำรุดเสียหาย</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            หากเกิดปัญหาเนื่องจากจุดนี้ จำเป็นต้องให้ช่างผู้เชื่ยวชาญมาทำการตรวจสอบและซ่อมแซม
                            โดยห้ามเปิดใช้แอร์เครื่องนั้นเด็ดขาดจนกว่าช่างจะตรวจสอบเสร็จสิ้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ไม่เย็นเนื่องจากแอร์สกปรก มีฝุ่นเกาะแน่น</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            การไม่ล้างทำความสะอาดแอร์เป็นเวลานานจนทำให้เกิดคราบฝุ่นสะสมปริมาณมาก
                            จะทำให้ระบบเปลี่ยนลมร้อนเป็นลมเย็นทำงานได้ไม่เต็มที่ ผลที่ตามมาแน่นอนคือทำให้แอร์ไม่เย็น
                            แต่ปัญหานี้แก้ไขได้เพียงแค่นำหน้ากากแอร์ออกมาล้างทำความสะอาดคราบฝุ่นให้หมดจด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาแอร์ไม่เย็นเนื่องจากน้ำยาแอร์รั่ว</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            สามารถสังเกตด้วยตัวเองได้ง่ายๆ ด้วยการดูตรงหัวท่อทองแดงที่อยู่ภายนอกบ้าน
                            ถ้ามีเกล็ดน้ำแข็งเกาะบริเวณนั้นแสดงว่าน้ำยาแอร์รั่วแน่นอน
                            การแก้ไขนั้นจำเป็นต้องติดต่อช่างผู้ชำนาญมาตรวจสอบและทำการเชื่อมปิดรอยรั่ว
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

    <section class="black-bg">
        <?php $id_group = 17;
        include('layout/training_card.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/cert_skilled_labor.php'); ?>
    </section>

    <section class="white-bg">
        <div class="row mx-auto no_br">
            <div class="col-12 mb-3">
                <div class="d-flex green-bg div_gallery">
                    <div class="col-5 text-center align-self-center text_gallery">
                        <h2>ภาพบรรยากาศอบรม</h2>
                        <hr class="hr_green mx-auto" style="color: #fff !important;height: 2px !important;width:30%;">
                        <h5>อบรมด้านความปลอดภัยในการทำงานฯ และอบรมจป. <br>เน้นทำ Workshop
                            ให้ได้ลงมือทำจริงในห้องเรียน <br>ท่ามกลางบรรยากาศการเรียนที่เป็นกันเอง
                            <br>เรียนรู้แบบแลกเปลี่ยนความคิดเห็นและ<br>สามารถนำไปใช้ได้จริงในการทำงาน
                        </h5>
                    </div>
                    <div class="col-7">
                        <img style="width:100%;height:100%;"
                            src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (12).jpg" alt="อบรมช่างแอร์">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for ($i = 1; $i < 33; $i++) { ?>
                    <div>
                        <img src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (<?php echo $i; ?>).jpg"
                            alt="ช่างแอร์">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/q3-ZbFsuENA?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (10).jpg" alt="">
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
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/83JGm6f56ow?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/template_gallery/gallery_air (18).jpg" alt="">
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