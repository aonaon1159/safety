<?php include('header_front.php'); ?>

<?php 
    $id_training = 448;//การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี

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
            <h2 class="text-center"><b>การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                รถสแต็กเกอร์ไฟฟ้าคือเป็นรถที่นำเอาระบบไฮดรอลิคมาเป็นตัวช่วยผ่อนแรงในการยกของที่มีน้ำหนักมาก
                                โดยอาศัยแรงดันจากน้ำมันไฮดรอลิค
                                ซึ่งถูกส่งมาโดยปั๊มไฮดรอลิคที่ติดตั้งอยู่ในรถและอาศัยแรงขับปั๊มจากมอเตอร์
                                รถยกสามารถขับเคลื่อนย้ายของที่ยกจากที่หนึ่งไปยังอีกที่หนึ่งได้ด้วยอาศัยแรงจากมอเตอร์
                                การทำงานเน้นยกสูง วางขอบนชั้นวางของ ทดแทนการใช้งานรถยกโฟล์คลิฟท์
                                ดังนั้นผู้ปฏิบัติงานจึงมีความจำเป็นจะต้องเรียนรู้วิธีการขับขี่และใช้งานรถสแต็กเกอร์ไฟฟ้าได้อย่างปลอดภัย
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
                                หลักสูตรการอบรมการขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี เป็นอีกหลักสูตรหนึ่ง
                                ที่ผู้บริหารควรให้ความสำคัญในการพัฒนาความรู้ ทักษะ
                                จิตสำนึกการควบคุมอย่างปลอดภัยเพื่อลดความสูญเสียต่างๆที่อาจเกิดขึ้นจากการขาดความรู้เท่าไม่ถึงการณ์
                                และจิตสำนึกความปลอดภัยของพนักงานขับรถฟอร์คลิฟท์ และลดโอกาสการเกิดอุบัติเหตุที่เกิด
                                จากการขาดทักษะ ความชำนาญในการควบคุมอย่างถูกวิธี
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี
                ได้จากด้านล่างนี้
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table1" data-id_training="<?php echo $id_training;?>"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title="" class="lazy"
                    data-src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (4).jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การทำงานในโรงงานอุตสาหกรรมรถโฟล์คลิฟท์และรถสแตกเกอร์ถือว่าเป็นอุปกรณ์/พาหนะผ่อนแรงที่มีความสำคัญในการจัดการสินค้า
                        ในด้านการผลิตและการขนส่งสินค้าเป็นอย่างมาก รถเป็นพาหนะที่เคลื่อนที่ด้วยความเร็ว
                        จึงเป็นสิ่งที่มีความเสี่ยงสูงในการที่จะทำให้เกิดอุบัติเหตุ
                        ดังนั้นเป็นสิ่งทีแต่ละองค์กรจะต้องตระหนักและให้ความสำคัญต่อการส่งเสริมความรู้แก่ผู้ขับโฟล์คลิฟท์และรถสแตกเกอร์
                        ในเรื่องการเตรียมความพร้อม
                        และมาตรฐานการใช้งาน ตลอดจนความรู้ในการขับขี่อย่างปลอดภัย
                        เพื่อส่งเสริมให้เกิดความปลอดภัยในการทำงานต่อไป จำเป็นต้องมีการจัดให้มีการอบรม
                        โฟล์คลิฟท์และรถสแตกเกอร์ เพื่อความปลอดภัยในการปฏิบัติงาน และเป็นไปตามการพัฒนาบุคคลากรที่ ISO9001
                        กำหนด<br><br>

                        วัตถุประสงค์<br>
                        1) ผู้เข้ารับการอบรมสามารถนำเทคนิคการขับรถโฟล์คลิฟท์และรถสแตกเกอร์
                        ในการปฏิบัติงานได้อย่างถูกต้องปลอดภัย<br>
                        2) สามารถนำความรู้จากการอบรมไปเคลื่อนย้ายสิ่งของ/ผลิตภัณฑ์ได้อย่างมีประสิทธิภาพ
                        โดยรถโฟล์คลิฟท์และรถสแตกเกอร์<br>
                        3) สามารถตรวจสอบดูและบำรุงรักษารถโฟล์คลิฟท์และรถสแตกเกอร์เบื้องต้น ได้อย่างถูกวิธี<br><br>

                        เนื้อหาหลักสูตร<br>
                        1) กฎหมายด้านความปลอดภัยในการทำงานที่เกี่ยวข้องกับการใช้งานรถโฟล์คลิฟท์และรถสแตกเกอร์<br>
                        2) ความรู้พื้นฐานเกี่ยวกับรถโฟล์คลิฟท์และรถสแตกเกอร์ที่ผู้ใช้งานต้องรู้<br>
                        3) การใช้อุปกรณ์ป้องกันส่วนบุคคลรถโฟล์คลิฟท์และรถสแตกเกอร์มีอะไรบ้าง?<br>
                        4) ส่วนประกอบ/อุปกรณ์ / แผงควบคุมและระบบไฟเตือนต่างๆ ของโฟล์คลิฟท์และรถสแตกเกอร์<br>
                        5) การตรวจสอบความปลอดภัยก่อนการใช้โฟล์คลิฟท์และรถสแตกเกอร์<br>
                        6) สอนการขับโฟล์คลิฟท์และรถสแตกเกอร์อย่างปลอดภัยและถูกวิธี<br>
                        7) เทคนิคการยก / เคลื่อนย้าย / จัดเรียงและตักจ่ายสินค้า<br>
                        8) การตรวจและบำรุงรักษาโฟล์คลิฟท์และรถสแตกเกอร์เบื้องต้น ตามระยะเวลาชั่วโมงการทำงาน<br>
                        9) การปฏิบัติเมื่อโฟล์คลิฟท์และรถสแตกเกอร์เสีย<br>
                        10) กฎจราจร / ข้อห้าม และเครื่องหมายเตือนต่างๆในโรงงาน<br>
                        11) การวัดผลทั้งภาคทฤษฎี และปฏิบัติ ก่อนและหลังการอบรม<br>
                        12) อันตรายที่เกิดจากรถโฟล์คลิฟท์และรถสแตกเกอร์ กรณีศึกษาจากวีดีโอ
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
                    การขับรถโฟล์คลิฟท์รถสแตกเกอร์อย่างปลอดภัยและถูกวิธี
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความรถสแตกเกอร์-06.jpg" alt="">
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
                            <h5><b>รถสแต็กเกอร์ไฟฟ้า</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            เป็นรถที่นำเอาระบบไฮดรอลิคมาเป็นตัวช่วยผ่อนแรงในการยกของที่มีน้ำหนักมาก
                            โดยอาศัยแรงดันจากน้ำมันไฮดรอลิค
                            ซึ่งถูกส่งมาโดยปั๊มไฮดรอลิคที่ติดตั้งอยู่ในรถและอาศัยแรงขับปั๊มจากมอเตอร์
                            รถยกสามารถขับเคลื่อนย้ายของที่ยกจากที่หนึ่งไปยังอีกที่หนึ่งได้ด้วยอาศัยแรงจากมอเตอร์
                            การทำงานเน้นยกสูง วางขอบนชั้นวางของ ทดแทนการใช้งานรถยกโฟล์คลิฟท์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถสแต็กเกอร์ไฟฟ้าแบ่งเป็น 2 ชนิด</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ชนิดเดิมตาม:
                            เหมาะกับโรงงานที่ไม่เน้นความเร็วในการเคลื่อนย้ายสินค้าเพื่อควบคุมระบบการรักษาความปลอดภัยในโรงงาน<br>
                            ชนิดยืนขับ: เหมาะกับโรงงานที่เน้นความรวดเร็วในการเคลื่อนย้ายสินค้า
                            แต่โรงงานดังกล่าวควรมีระบบการจัดการที่ดี
                            มีช่องคนเดินและช่องทางการขับรถแยกออกจากกันเพื่อความปลอดภัยในการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อดีของการใช้รถสแต็กเกอร์ไฟฟ้า</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ช่วยทุ่นแรงในการลากสิ่งของจากจุดหนึ่งไปยังอีกจุด
                            ลดเวลาในการเคลื่อนย้ายสิ่งของไปยังจุดต่างๆ
                            ลดค่าใช้จ่ายในการจ้างแรงงานหลายๆคนในการเคลื่อนย้าย
                            มีราคาถูกกว่ารถยกโฟล์คลิฟท์ประมาณ 50-60%
                            ในบางกรณีรถสแต็กเกอร์ไฟฟ้าสามารถทดแทนการใช้งานรถยกโฟล์คลิฟท์ได้ถึง 100%
                            ค่าบำรุงรักษาต่ำกว่ารถยกโฟล์คลิฟท์
                            คล่องตัวกว่ารถยกโฟล์คลิฟท์เนื่องจากมีขนาดที่เล็กกว่ามาก
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แฮนด์ลิฟท์ยกสูง (Hand Stacker)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            บางคนอาจเรียกว่า รถยกสูง, สแตกเกอร์หรือแฮนด์สแตกเกอร์ คือ Hand Lift
                            ที่เหมาะสำหรับใช้ยกพาเลทขึ้นที่สูงกว่าปกติ ในแนวดิ่ง สามารถยกพาเลทชิ้นงานขึ้นไปวางไว้บน
                            แร็คสต็อกสินค้า หรือยกขึ้นรถบรรทุก เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แฮนด์ลิฟท์ยกสูงแบบแมนนวล (Manual Hand Stacker)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            แฮนด์ลิฟท์ยกสูงประเภทนี้ จะเป็นแบบใช้แรงคนทั้งหมด ไม่ว่าจะเป็นการยกงาขึ้น-ลง
                            รวมถึงการลากหรือเข็นรถเพื่อให้เคลื่อนย้ายไปมา รวมเป็นถึงตัวที่ใช้เฉพาะเจาะจงเช่น Drum
                            Stacker ด้วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถยกพาเลทสูงแบบใช้แรง (Manual Hand Stacker)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            เป็นแฮนด์ลิฟท์ยกสูงแบบมาตรฐาน ที่ใช้แรงคนในการโยกปั๊มระบบไฮดรอลิก
                            และเคลื่อนย้ายด้วยการลากหรือเข็น รับน้ำหนักได้มากถึง 1-2 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถยกสูงแบบมือหมุน (Winch Stacker)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ใช้มือหมุนในการปั่นรอกเพื่อยกงาขึ้น-ลง รับน้ำหนักได้ 1 ตัน เคลื่อนที่ด้วยการเข็นหรือลาก
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>มินิสแตกเกอร์ (Fork Type Stacker)</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            มีขนาดเล็กไซส์มินิ รับน้ำหนักได้ 200-400 กิโลกรัม
                            เหมาะสำหรับคลังสินค้าขนาดเล็กที่ไม่จำเป็นต้องยกของหนักมาก ใช้เท้าเหยียบเพื่อยกงาขึ้น
                            และใช้มือหมุนปลดตรงวาล์วเพื่อลดระดับงาลง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถยกถังน้ำมัน (Hydraulic Drum Stacker DA450)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            เป็น Stacker ชนิดพิเศษ ที่ใช้เฉพาะสำหรับอุปกรณ์ประเภทถัง เช่น ถังน้ำมัน
                            โดยการยกขึ้นและลงจะใช้มือจำไปที่คันโยก เพื่อเพิ่มและลดระดับ ส่วนการรับน้ำหนักจะอยู่ที่ประมาณ
                            450 กก.
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถยกพาเลทสูงแบบขากว้าง (Manual Hand Stacker Straddle Leg)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            มีขาที่กว้างกว่ารุ่นอื่น โดยฐานล้อด้านหน้าใต้งาจะกว้างคร่อมด้านนอกของพาเลท
                            เหมาะสำหรับใช้งานกับพาเลทแบบปิด
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
                            src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (9).jpg">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for($i = 1; $i <= 16 ; $i++){?>
                    <div>
                        <img src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (<?php echo $i;?>).jpg"
                            alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="container p-b-80 p-t-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/omo4w2TJQzk?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift (18).jpg">
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
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h4><b>บรรยากาศการอบรม</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>บรรยากาศการอบรม
                                เน้นทำ Workshop ให้ได้ลงมือทำจริง<br>ในห้องเรียน ในบรรยากาศการเรียนที่เป็นกันเอง
                                เนื้อหาเข้มข้น<br>และสามารถนำไปใช้ได้จริงในการทำงาน</h5>
                            <br>
                            <br>
                            <div>
                                <a class="btn btn--medium btn--radius btn--green btn--green-hover-black text-uppercase"
                                    href="gallery">อ่านเพิ่มเติม...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การขับรถโฟล์คลิฟท์อย่างปลอดกัยและถูกวิธี-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การขับรถโฟล์คลิฟท์อย่างปลอดกัยและถูกวิธี</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            การทำงานในโรงงานอุตสาหกรรมรถฟอร์คลิฟท์ถือว่าเป็นอุปกรณ์/พาหนะผ่อนแรงที่มีความสำคัญในการจัดการสินค้าในด้านการผลิตและการขนส่งสินค้าเป็นอย่างมาก
                            รถเป็นพาหนะที่เคลื่อนที่ด้วยความเร็ว
                            จึงเป็นสิ่งที่มีความเสี่ยงสูงในการที่จะทำให้เกิดอุบัติเหตุ
                            ดังนั้นเป็นสิ่งทีแต่ละองค์กรจะต้องตระหนักและให้ความสำคัญต่อการส่งเสริมความรู้แก่ผู้ขับฟอร์คลิฟท์
                            ในเรื่องการเตรียมความพร้อม และมาตรฐานการใช้งาน ตลอดจนความรู้ในการขับขี่อย่างปลอดภัย
                            เพื่อส่งเสริมให้เกิดความปลอดภัยในการทำงานต่อไป
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="อบรมโฟล์คลิฟท์">
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
                            ผู้เข้ารับการอบรมสามารถนำเทคนิคการขับรถฟอร์คลิฟท์ ในการปฏิบัติงานได้อย่างถูกต้องปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมสามารถนำความรู้จากการอบรมไปเคลื่อนย้ายสิ่งของ/ผลิตภัณฑ์ได้อย่างมีประสิทธิภาพ
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมสามารถตรวจสอบดูและบำรุงรักษาฟอร์คลิฟท์เบื้องต้น ได้อย่างถูกวิธี
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