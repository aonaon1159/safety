<?php include('header_front.php'); ?>

<?php 
    $id_training = 159;//KYT ฝึกหยั่งรู้ระวังภัย (อันตรายล่วงหน้า)

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
            <h2 class="text-center"><b>KYT ฝึกหยั่งรู้ระวังภัย (อันตรายล่วงหน้า)</b></h2>
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
                                การแก้ไขปัญหาที่เกิดขึ้นนั้น ต้องคอยแก้ไขอยู่เสมอ แต่ที่ดีที่สุดนั้นคือ
                                การป้องกันหรือหลีกเลี่ยงมิให้เกิดขึ้น
                                และหากความเสี่ยงอุบัติเหตุนั้นไปถึงผู้ปฏิบัติงานย่อมเกิดความเสียหายใหญ่โต
                                พฤติกรรมการทำงานที่เสี่ยง และไม่ปลอดภัยของพนักงาน เช่น เผอเรอ เหม่อลอย ซุ่มซ่าม
                                ลัดขั้นตอน รีบเร่ง อันเป็นต้นเหตุของการผิดพลาด และเกิดการสูญเสียในการทำงานทั้งสิ้น
                                การสร้างจุดแข็งของทีมงาน จุดแข็งขององค์กร คือการปฏิบัติงานโดยปราศจากอุบัติเหตุ
                                เพราะองค์กรใดที่ปลอดภัยจากอุบัติเหตุจากการปฏิบัติงาน
                                จะช่วยเพิ่มประสิทธิภาพทางการแข่งขันเหนือกว่าคู่แข่ง
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
                                อุบัติเหตุต่างๆ การเสียชีวิต ทุพพลภาพนั้น นอกจากสร้างความเสียหายให้กับตัวพนักงาน
                                และองค์กรแล้ว ยังบั่นทอนความรู้สึก จิตใจ สุขภาพของคนงาน ส่งผลกระทบเป็นวงกว้าง
                                เพราะฉะนั้น ควรป้องกันตั้งแต่ต้นเหตุ ดังนั้นหากสามารถหยั่งรู้ระวังภัยล่วงหน้าหน้าได้
                                จึงเป็นอีกทางออกหนึ่งที่ทำให้ผู้ปฏิบัติงานปลอดภัยจากการเกิดอุบัติเหตุได้ดีที่สุด
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
            <h2 class="text-center"><b class="head_nav">KYT ฝึกหยั่งรู้ระวังภัย (อันตรายล่วงหน้า)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตร KYT ฝึกหยั่งรู้ระวังภัย (อันตรายล่วงหน้า)
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="345" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy"
                    data-src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (16).jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        จุดเริ่มต้นของอุบัติเหตุในการทำงาน HUMAN ERROR จะต้องแก้ไขอย่างไร?
                        โดยเฉพาะพฤติกรรมการทำงานที่เสี่ยง ไม่ปลอดภัยของพนักงาน เช่น เผอเรอ เหม่อลอย ลัดขั้นตอน รีบเร่ง
                        อันเป็นเหตุของการผิดพลาดและเกิดการสูญเสียในการทำงานทั้งสิ้น หากพนักงานมีการฝึกหยั่งรู้ระวังภัย
                        (อันตรายล่วงหน้า) อาจทำให้การปฏิบัติงานปราศจากอุบัติเหตุจากการทำงาน (Kiken Yoshi Training : KYT)
                        เป็นอีกหนึ่งเทคนิคที่สามารถลดการเกิดอุบัติเหตุ การได้รับบาดเจ็บได้เป็นอย่างดี
                        และช่วยส่งผลต่อการสร้างวัฒนธรรมความปลอดภัยในองค์กร กิจกรรม KYT
                        เน้นหลักการคิดและวิเคราะห์อันตรายหรือการประเมินความเสี่ยงส่งเสริมพฤติกรรมที่นำไปสู่ความปลอดภัย<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้ผู้อบรมมีความรู้เข้าใจ หลักการ
                        ความสำคัญและตระหนักถึงความปลอดภัยในการทำงานสร้างจิตสำนึกในความปลอดภัย<br>
                        2) เพื่อให้ผู้อบรมเข้าใจหลักการวิเคราะห์และสื่อสารด้วยข้อความสั้นๆ พร้อมทั้งสร้างเทคนิคการทำ KYT
                        แบบต่างๆ ไปประยุกต์ใช้เพื่อให้เกิดความปลอดภัยในการทำงานและเกิดความปลอดภัยชีวิตประจำวัน<br>
                        3)
                        เพื่อให้ผู้อบรมสร้างวัฒนธรรมความปลอดภัยและจิตสำนึกที่ดีอันเป็นหัวใจหลักของการวางรากฐานของพฤติกรรมความปลอดภัย<br><br>

                        ผลที่คาดว่าจะได้รับ<br>
                        1) ผู้อบรมนำความรู้หลักการความปลอดภัยในการทำงานด้านความปลอดภัยไปปฏิบัติในองค์กรได้<br>
                        2) ผู้อบรมสามารถ วิเคราะห์สร้างเทคนิค และสื่อสารด้วยข้อความสั้นๆ
                        ไปประยุกต์ใช้เพื่อให้เกิดความปลอดภัยในการทำงานและชีวิตประจำวันได้<br>
                        3)
                        ผู้อบรมสามารถสร้างวัฒนธรรมและจิตสำนึกความปลอดภัยอันเป็นหัวใจหลักของการวางรากฐานของพฤติกรรมความปลอดภัยได้<br><br>

                        รูปแบบการฝึกอบรม<br>
                        1) เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2) เน้นการเรียนรู้ผ่านกระบวนการสร้างสรรค์การเรียนรู้ (Constructive process of learning)<br>
                        3) เน้นการเรียนรู้ผ่านการปฏิบัติจริงแบบ Scenario แบบกิจกรรมกลุ่มย่อย (Small Group. Activity)
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
                    KYT ฝึกหยั่งรู้ระวังภัย (อันตรายล่วงหน้า)
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความkytฝึกหยั่งรู้-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความkytฝึกหยั่งรู้-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความkytฝึกหยั่งรู้-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความkytฝึกหยั่งรู้-01.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-8 mt-4 mx-auto">
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
                            <h5><b>KYT คืออะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            “KYT” คือ วิธีการวิเคราะห์หรือคาดการณ์ถึงอันตรายที่อาจเกิดขึ้นจากการทํางาน พร้อมทั้งกําหนด
                            มาตรการหรือวิธีการจัดการอันตรายเหล่านั้นเพื่อให้เกิดความปลอดภัย<br>
                            - K (Kiken) แปลว่า อันตราย<br>
                            - Y (Yoshi) แปลว่า คาดการณ์หรือทํานายล่วงหน้า<br>
                            - T (Training)แปลว่า การฝึกอบรม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หัวใจสําคัญของ KYT</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) ปลูกฝังจิตสำนึกด้านความปลอดภัยของผู้ปฏิบัติงานให้ปฏิบัติงานด้วยความระมัดระวัง<br>
                            (2) คิดพิจารณาก่อนที่จะทํางานทุกครั้งว่ามีอันตรายอะไรที่อาจเกิดขนและจะป้องกันอย่างไร<br>
                            (3) การให้คํามั่นสั่ญญาหรือปฏิญาณตนของผู้ปฏิบัติงานทุกคนว่า “อุบัตเหตุต้องเป็นศูนย์ ” ก่อนลง
                            มือปฏิบัติงาน<br>
                            (4) การเตือนตัวเองก่อนลงมือทํางาน ว่าทุกอย่างพร้อมและปลอดภัยต่อการทํางานแล้ว จึงเริ่มลง
                            มือทํางานได้โดยการใช้วิธี“มือชี้ปากย้ํา”
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประโยชน์ของKYT</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            (1) ปลูกจิตสํานกในการป้องกันอันตรายจากการทํางาน ด้วยการค้นหาอันตรายต่างๆ<br>
                            (2) ฝึกให้พนักงานได้รู้จักอันตรายที่อาจเกิดขึ้นจากการปฏิบัติงานและสามารถคาดการณ์ล่วงหน้าถึง
                            อันตรายที่อาจเกิดขึ้นได้<br>
                            (3) เตือนสติพนักงานก่อนลงมือทํางานและช่วยกระตุ้นให้ผู้ปฏิบัติงานทํางานด้วยความระมัดระวัง<br>
                            (4) ช่วยค้นหาอันตรายที่แอบแฝงอยู่ในการทางาน ํ ซึ่งอาจเกิดจากการกระทําที่ไม่ปลอดภัยของ
                            ผู้ปฏิบัติงานหรือสิ่งแวดล้อมการทํางานที่ไม่ปลอดภัย<br>
                            (5) พนักงานได้มีส่วนร่วมในการค้นหาและกำหนดวิธีการป้องกันอันตรายจากการทํางาน<br>
                            (6) ทําให้เกิดความสามัคคีในการดําเนินกิจกรรม เพื่อสร้างจิตสํานึกด้านความปลอดภัยในการทํางาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>KYT 4 ขั้นตอน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เป็นรูปแบบที่เหมาะสําหรับงานที่มีอันตรายมาก งานที่มีความซับซ้อนหรืองาน
                            ที่มีผู้ปฏิบัติงานหลายคน โดยทั่วไปใช้เวลาประมาณ 20 นาทีและมแบบฟอร์มเป็นเครื่องมือสําคัญ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>KYT จุดเดียว</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            เป็นรูปแบบที่เหมาะสําหรบงานที่มีอันตรายไม่มากนัก งานที่ไม่มีมีความซับซ้อนแต่
                            ในบางกรณีอาจจะใช้กับงานที่มีอันตรายหลายอย่างได้แต่ต้องเลือกอันตรายที่สําคัญที่สุดมาทําการวิเคราะห์
                            ส่วนที่เหลือให้ทำเพิ่มเติมในครั้งต่อๆ ไป โดยทั่วไปใช้เวลาประมาณ 10 นาที
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b> KYT ปากเปล่า</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            เป็นรูปแบบการวิเคราะห์อันตรายที่อาจมีในงานที่ต้องปฏิบัติงานอยู่ทุกวัน ซึ่ง
                            เป็นงานที่มีอันตรายน้อย ไม่รุนแรง โดยจะต้องคาดการณ์ถึงอันตรายและวิธีการแก้ไขอันตรายนั้นๆ
                            โดยทั่วไปใช้เวลาประมาณ 5นาทีจากนั้น จงใช้วิธีมือชี้ปากย้ำ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Kiken Yoshi Training คิดค้นและพัฒนาขึ้นที่ประเทศญี่ปุ่น</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            เพื่อป้องกันความผิดพลาดในการปฏิบัติงาน และลดอุบัติเหตุให้เป็นศูนย์
                            ซึ่งต่อมาได้กลายเป็นวิถีปฏิบัติที่ใช้กันทั่วไปในโรงงานอุตสาหกรรมของญี่ปุ่น
                            และกำหนดไว้เป็นมาตรการด้านการสร้างจิตสำนึกความปลอดภัยที่สำคัญของ
                            สมาคมสุขภาพและความปลอดภัยในอุตสาหกรรมของญี่ปุ่น (Japan Industrial Safety and Health
                            Association) โดยนำความหมายของ 3 มารวมกัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การฝึกจากรูปภาพหรือเหตุการณ์สมมติ</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            โดยให้พนักงานรวมกันเป็นกลุ่ม และพิจารณาจากรูปภาพของสถานที่ทำงานแห่งหนึ่ง
                            โดยจะมีหนึ่งคนเป็นผู้นำในการมองหาจุดอันตราย
                            จากนั้นจะชี้นิ้วไปที่ตำแหน่งที่ไม่ปลอดภัยในรูปภาพ แล้วเปล่งเสียงออกมา เช่น
                            เป็นรูปภาพของพนักงานคนหนึ่งกำลังปีนบันได (แบบพาดกับผนัง) ขึ้นไปเพื่อปฏิบัติภารกิจบางอย่าง
                            ผู้นำ ก็จะชี้นิ้วไปที่บันไดนั้น แล้วเปล่งเสียงว่า “จับบันไดให้นิ่งทุกครั้ง
                            ไม่พลาดพลั้งเกิดอุบัติเหตุ” แล้วพนักงานในกลุ่มคนที่เหลือก็จะพูดตามสามครั้ง
                            โดยทำท่าชี้นิ้วไปยังตำแหน่งดังกล่าวพร้อมๆ กัน การฝึกปฏิบัติเช่นนี้ก่อนเริ่มงาน
                            หรือก่อนเข้ากะทำงานเป็นประจำทุกวัน ก็จะทำให้พนักงานเกิดจิตสำนึกต่อความปลอดภัยโดยอัตโนมัติ
                            ถ้าวิเคราะห์ตามหลักการพัฒนาสมอง
                            เรียกว่าเป็นการกระตุ้นให้เกิดการโปรแกรมให้สมองรับรู้และตื่นตัวอยู่เสมอ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การฝึกฝนในสถานที่จริง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            โดยวิธีการนี้ไม่จำเป็นต้องทำทุกวัน ส่วนใหญ่ทำเป็นรอบเวลาหรือครั้งคราวตามที่กำหนดไว้ในแผนงาน
                            แต่ก็อาจจะมีบางแห่งที่ปฏิบัติกันเป็นประจำทุกวัน แทนการฝึกฝนจากรูปภาพ
                            เพื่อเน้นย้ำและเตือนตนเองทุกครั้งก่อนลงมือทำงาน
                            เพื่อให้แน่ใจว่าทุกสิ่งทุกอย่างอยู่ในสภาพที่พร้อมและปลอดภัย โดยการชี้นิ้วไปที่วัสดุ อุปกรณ์
                            เครื่องจักร หรือสถานที่ทำงานใดๆ พร้อมกับกล่าวว่า “ทุกอย่างพร้อมและปลอดภัย โอเค”
                            เรียกการทำเช่นนี้ว่า “มือชี้ ปากย้ำ”
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประโยชน์ของการวิเคราะห์เพื่อความปลอดภัยแบบ KYT</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            การวิเคราะห์เพื่อความปลอดภัยแบบ KYT
                            จะเน้นการสร้างจิตสำนึกในการป้องกันอันตรายทุกครั้งก่อนลงมือปฏิบัติงาน
                            ดังนั้นประโยชน์ของการดำเนินการวิเคราะห์แบบ KYT มีดังนี้<br>
                            (1)
                            เป็นเครื่องมือปลูกฝังจิตสำนึกในการป้องกันอันตรายจากการทำงาน ด้วยการค้นหาอันตรายต่างๆ
                            ก่อนลงมือทำงาน<br>
                            (2) เป็นการฝึกให้ผู้ปฏิบัติได้รู้จักอันตรายที่อาจเกิดขึ้นจากการปฏิบัติงาน
                            ไม่ว่าจะเป็นงานที่มีอันตรายมากหรือน้อย
                            หรือแม้กระทั่งงานที่ทำอยู่เป็นประจำและสามารถคาดการณ์ล่วงหน้าได้ว่าอาจมี
                            อันตรายอะไรเกิดขึ้น<br>
                            (3) เป็นการเตือนสติผู้ปฏิบัติงานก่อนลงมือทำงาน
                            และช่วยกระตุ้นเตือนให้ผู้ปฏิบัติงานให้ทำงานด้วยความระมัดระวัง<br>
                            (4) เป็นวิธีการหนึ่งที่ช่วยค้นหาอันตรายที่แฝงอยู่ในงานไม่ว่าอันตรายนั้นอาจเกิด
                            จากสภาพการณ์ที่ไม่ปลอดภัยหรือการกระทำที่ไม่ปลอดภัยของผู้ปฏิบัติงาน<br>
                            (5) เป็นวิธีป้องกันอันตรายจากการทำงานโดยผู้ปฏิบัติงานได้มีส่วนร่วมดำเนินการ
                            ไม่ว่าจะเป็นการเริ่มต้นค้นหาอันตรายและควบคุมป้องกันได้ด้วยตนเอง<br>
                            (6) ทำให้เกิดความสามัคคีและความเป็นอันหนึ่งอันเดียวในการดำเนินกิจกรรม
                            เพื่อสร้างจิตสำนึกด้านความปลอดภัยในการทำงาน
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
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/RnDiU_fHUAg">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/template_gallery/KYT-การฝึกหยั่งรู้ระวังภัย-(อันตรายล่วงหน้า).jpg"
                                alt="LOCK OUT TAG OUT">
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
                            <h4><b>KYT คืออะไร | เซฟตี้อินไทย</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>
                                “KYT” คือ วิธีการวิเคราะห์หรือคาดการณ์ถึงอันตรายที่อาจเกิดขึ้นจากการทํางาน
                                พร้อมทั้งกําหนด มาตรการหรือวิธีการจัดการอันตรายเหล่านั้นเพื่อให้เกิดความปลอดภัย - K
                                (Kiken) แปลว่า อันตราย - Y (Yoshi) แปลว่า คาดการณ์หรือทํานายล่วงหน้า - T
                                (Training)แปลว่า การฝึกอบรม</h5>
                            <br>
                            <br>
                            <div>
                                <a class="btn btn--medium btn--radius btn--red btn--red-hover-black text-uppercase"
                                    href="https://www.youtube.com/c/TopproChannel">WATCH NOW
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
                        src="<?php echo $base_url;?>/img/bg/การพัฒนาพฤติกรรมความปลอดภัยด้วยวิธีการฝึกหยั่งรู้อันตราย (KYT)-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การพัฒนาพฤติกรรมความปลอดภัยด้วยวิธีการฝึกหยั่งรู้อันตราย (KYT)</b></br>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            KYT เป็นวิธีการที่ใช้ในการคาดการณ์อันตราย
                            อย่างเป็นระบบและสามารถตอกย้ำให้ผู้ปฎิบัติงานได้เกิดความตระหนักและรู้เท่าทันถึงอันตรายทั้งก่อนและระหว่างการปฎิบัติงาน
                            หากองค์กรได้นำไปประยุกต์ใช้อย่างเหมาะสมร่วมกับระบบการบริหารจัดการความปลอดภัยก็จะเป็นการทำให้อุบัติเหตุเป็นศูนย์และเกิดความปลอดภัยเกิดความยั่งยืนต่อไป
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การพัฒนาพฤติกรรมความปลอดภัยด้วยวิธีการฝึกหยั่งรู้อันตราย">
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
                            เพื่อให้ทราบเทคนิคและเครื่องมือของเทคนิค KYT ตามแนวทางของ JISHA ( Japan Industrial Safety
                            and Health Association )
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ทราบขั้นตอนการวิเคราะห์และวิธีการทำ KYT อย่างถูกต้อง</li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้าอบรมสามารถนำความรู้และประสบการณ์ที่ได้จากการอบรมไปประยุกต์ใช้ในการทำงานจริง
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อเสริมสร้างจิตสำนึกด้านความปลอดภัยให้กับผู้ปฏิบัติงาน
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