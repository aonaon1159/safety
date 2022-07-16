<?php include('header_front.php'); ?>

<?php 
    $id_training = 430;//การประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)

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
            <h2 class="text-center"><b>การประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="">
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
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (7).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การประเมินความเสี่ยงด้านความปลอดภัย<br>(Safety Risk
                    assessment)</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="422" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                        การประเมินความเสี่ยง (Risk Assessment) เป็นกระบวนการวิเคราะห์ถึงปัจจัย
                        หรือสถานการณ์ที่เป็นสาเหตุทําให้อันตรายที่มีอยู่ และแอบแฝงอยู่ก่อให้เกิดอุบัติภัย
                        และอาจก่อให้เกิดเหตุการณ์ที่ไม่ พึงประสงค์ เช่น การเกิดเพลิงไหม้ การระเบิด การรั่วไหลของสารเคมี
                        หรือวัตถุอันตราย โดยพิจารณาถึงโอกาสและ ความรุนแรงของเหตุการณ์แหล่านั้น
                        ซึ่งอาจส่งผลให้เกิดอันตราย หรือความเสียหายแก่ชีวิต ทรัพย์สิน และสิ่งแวดล้อม การบ่งชีอันตราย
                        (Hazard Identification) กระบวนการค้นหาอันตรายต่างๆ ที่มีอยู่ และที่แอบแฝงอยู่ในทุกขั้นตอน
                        ของกระบวนการผลิต
                        พร้อมทั้งการระบุถึงอันตรายที่อาจเกิดขึ้นความปลอดภัยในการทํางานของพนักงานในองค์การ
                        ถือว่าสําคัญที่สุด สําหรับวิธีการประเมินความเสี่ยงด้านความปลอดภัย
                        จําเป็นที่ต้องประเมินความเสี่ยง การประมาณ ระดับความเสียงโดยคํานึงถึง
                        ความรุนแรงและโอกาสที่จะเกิดอันตราย เพื่อนํามาพิจารณาว่าเป็นความเสี่ยงที่ยอมรับ ได้
                        หรือยอมรับไม่ได้ และการวางแผนควบคุมความเสี่ยงที่ยอมรับไม่ได้<br><br>
                        วัตถุประสงค์ <br>
                        1) เพื่อให้ผู้อบรมมีความรู้ความเข้าใจถึงอันตรายที่อาจจะเกิดขึ้นจากการปฏิบัติงานทั้งหมดในบริษัท
                        และ
                        จะได้ร่วมกันหามาตรการควบคุมความเสี่ยงที่มีอยู่ ก่อนที่จะเกิดอุบัติเหตุและการสูญเสีย<br>
                        2) เพื่อให้ผู้อบรมมีความรู้ในเรื่องของการประเมินความเสี่ยง<br>
                        3) เพื่อให้ผู้อบรมสามารถประยุกต์และนําหลักการประเมินความเสี่ยงไปใช้ในการทํางาน<br><br>
                        ผลที่คาดว่าจะได้รับ<br>
                        1)
                        ผู้อบรมมีความรู้ความความเข้าใจถึงอันตรายที่อาจจะเกิดขึ้นจากการปฏิบัติงานทั้งหมดในบริษัทร่วมกัน
                        หามาตรการควบคุมความเสี่ยงที่มีอยู่ก่อนที่จะเกิดอุบัติเหตุและการสูญเสีย<br>
                        2) ผู้อบรมมีความรู้ในเรื่องของการประเมินความเสี่ยง<br>
                        3) ผู้อบรมสามารถประยุกต์และนําหลักการประเมินความเสี่ยงไปประยุตก็ใช้ในการทํางานได้<br><br>
                        รูปแบบการฝึกอบรม<br>
                        1) เน้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2) เน้นการแลกเปลี่ยนเรียนรู้กิจกรรมเกมและภาพยนตร์ (Game and movie activities)<br>
                        3) เน้นการเรียนรู้ผ่านกระบวนการสร้างสรรค์การเรียนรู้ (Constructive process of learning)<br>
                        4) เน้นการเรียนรู้ Action Learning กิจกรรมกลุ่มย่อย SGA. (Smal Group Activity)<br>
                        5) แบบทดสอบ Pre-Test/Post Test
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
                    การประเมินความเสี่ยงด้านความปลอดภัย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-01.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-02.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-03.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-04.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-05.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความประเมินความเสี่ยงความปลอดภัย-06.jpg"
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
                            <h5><b>การชี้บ่งอันตราย คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            กระบวนในการค้นหาอันตรายที่มีอยู่และการระบุลักษณะอันตราย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินความเสี่ยง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            กระบวนการในการประมาณระดับความเสี่ยงว่าความเสี่ยงนั้นอยู่ในระดับใด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประสบอันตรายจากการทำงาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            การที่ลูกจ้างได้รับอันตรายทางกายหรือผลกระทบทางจิตใจหรือเสียชีวิตเนื่องจากการทำงานหรือป้องกันรักษาประโยชน์ให้แก่นายจ้างหรือตามคำสั่งของนายจ้าง
                            โดยมีความหมายครอบคลุมถึงการเกิดอุบัติเหตุจากการทำงาน
                            และการเจ็บป่วยหรือเกิดโรคจากการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจัดทำแผนจัดการความเสี่ยง </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            นายจ้างต้องจัดทำแผนการดำเนินงานในการกำหนดมาตรการความปลอดภัยอาชีวอนามัย และ
                            สภาพแวดล้อมในการทำงานที่เหมาะสม และมีประสิทธิภาพในการจัดการความเสี่ยงจากอันตรายที่
                            อาจเกิดขึ้น รวมทั้งการจัดสิ่งอำนวยความสะดวก เครื่องมืออุปกรณ์ บุคลากร และวิธีการปฏิบัติงาน
                            เพื่อลดความเสี่ยงของอันตรายนั้น ๆ โดยการกำหนดมาตรการควบคุมและป้องกัน เช่น การออกแบบ
                            การใช้วัสดุอุปกรณ์ที่ได้มาตรฐาน การทำงานถูกต้องตามลำดับขั้นตอน การบำรุงรักษาเครื่องจักร
                            อย่างสม่ำเสมอ การตรวจตรา การฝึกอบรม เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การดำเนินการประเมินความเสี่ยง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) นายจ้างต้องจัดตั้งคณะทำงานประเมินความเสี่ยง ควรประกอบด้วย ผู้บริหาร หัวหน้างาน
                            ช่างเทคนิค
                            วิศวกร
                            เจ้าหน้าที่ความปลอดภัยในการทำงาน เป็นต้น<br>
                            (2) ในการชี้บ่งอันตรายและการประเมินความเสี่ยง นายจ้างต้องดำเนินการดังนี้<br>
                            (2.1) นายจ้างต้องจัดทำขั้นตอนการดำเนินงานการชี้บ่งอันตรายและการประเมินระดับความเสี่ยง<br>
                            (2.2) นายจ้างต้องชี้บ่งอันตรายและประเมินระดับความเสี่ยง ซึ่งครอบคลุมถึง<br>
                            ก. กิจกรรมที่ทำเป็นประจำและไม่เป็นประจำ<br>
                            ข. พฤติกรรมที่ไม่ปลอดภัยของลูกจ้าง ขีดความสามารถของร่างกาย
                            และท่าทางในการทำงานที่ไม่เหมาะสม<br>
                            ค. การออกแบบพื้นที่ทำงาน สถานีงาน การติดตั้งเครื่องจักรอุปกรณ์
                            และกระบวนการในการทำงานรวมถึงการออกแบบด้านการยศาสตร์<br>
                            ง. กิจกรรมและสภาพแวดล้อมในการทำงานของผู้รับเหมา บุคคลภายนอก และผู้เยี่ยมชม<br>
                            จ. การเปลี่ยนแปลงหรือข้อเสนอให้มีการเปลี่ยนแปลงวัสดุอุปกรณ์ กระบวนการ วิธีปฏิบัติงาน
                            หรือกิจกรรมต่าง ๆ ในสถานประกอบกิจการ<br>
                            ฉ. การปรับปรุงระบบการจัดการด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน
                            รวมถึงการเปลี่ยนแปลงชั่วคราวและมีผลต่อการปฏิบัติงาน กระบวนการและกิจกรรมต่าง ๆ<br>
                            ช. เมื่อเกิดอุบัติเหตุหรือเหตุการณ์เกือบเกิดอุบัติเหตุ และมีการสอบสวนแล้ว<br>
                            (2.3) นายจ้างต้องทบทวนการชี้บ่งอันตรายและประเมินระดับความเสี่ยงตามช่วงเวลาที่กำหนด<br>
                            (2.4) นายจ้างต้องให้ผู้รับเหมา มีส่วนร่วมในการชี้บ่งอันตรายและประเมินระดับความเสี่ยง
                            พร้อมทั้งมีการสื่อสาร
                            ความเสี่ยงไปยังลูกจ้าง ผู้มีส่วนได้เสีย และผู้ที่เกี่ยวข้อง<br>
                            (2.5) นายจ้างต้องจัดทำและเก็บบันทึกการชี้บ่งอันตรายและการประเมินความเสี่ยง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การชี้บ่งอันตราย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            ในการชี้บ่งอันตราย คณะทำงานประเมินความเสี่ยงควรจัดทำเป็นบัญชีรายการอันตราย
                            โดยพิจารณาถึงสิ่งต่อไปนี้<br>
                            (1) แหล่งกำเนิดของอันตราย<br>
                            ก. อุปกรณ์ เครื่องมือ เครื่องจักร รวมถึงบริภัณฑ์ไฟฟ้า<br>
                            ข. วัตถุดิบ วัสดุ สารเคมีต่าง ๆ และผลิตภัณฑ์<br>
                            ค. สถานที่ทำงาน<br>
                            ง. การขนส่ง และการขนย้าย<br>
                            จ. แหล่งอันตรายอื่น ๆ<br>
                            (2) บุคคลและอวัยวะส่วนที่ได้รับอันตราย รวมถึงสิ่งของหรือทรัพย์สินที่ได้รับความเสียหาย<br>
                            (3) ลักษณะของอันตราย เช่น<br>
                            ก. การตกจากที่สูง<br>
                            ข. การลื่น หกล้ม<br>
                            ค. การถูกกระแทก ถูกตี<br>
                            ง. การถูกหนีบ ถูกบีบ<br>
                            จ. การถูกบด กดทับ<br>
                            ฉ. การถูกของแหลมมีคมตัด บาด ทิ่ม แทง<br>
                            ช. การสัมผัสสารเคมี<br>
                            ซ. การถูกไฟฟ้าช็อค<br>
                            ฌ. การสัมผัสความร้อน ความเย็น รังสี เสียงดัง<br>
                            ญ. การถูกไฟไหม้<br>
                            ฎ. การโดนระเบิด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฎหมายความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) นายจ้างต้องจัดทำขั้นตอนการดำเนินงานในการชี้บ่งและติดตามกฎหมายความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงาน ที่เกี่ยวข้องกับสถานประกอบกิจการให้เป็นปัจจุบันอยู่เสมอ<br>
                            (2) นายจ้างต้องปฏิบัติตามข้อกำหนดของกฎหมาย และกำหนดผู้รับผิดชอบในการนำกฎหมายไปปฏิบัติ
                            และรักษาไว้ในสถานประกอบกิจการ<br>
                            (3) นายจ้างต้องมีการประเมินความสอดคล้องในการปฏิบัติตามกฎหมายความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงาน<br>
                            (4) นายจ้างต้องจัดทำและเก็บบันทึกที่เกี่ยวข้อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเมินความเสี่ยงด้านอื่น ๆ ได้แก่</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) การประเมินความเสี่ยงด้านสุขภาพ (Health Risk Assessment)<br>
                            (2) การประเมินความเสี่ยงด้านการยศาสตร์ (Ergonomics Risk Assessment) อาจใช้วิธี Rapid Upper
                            Limb<br>
                            Assessment (RULA) เพื่อประเมินท่าทางการทำงานของร่างกายส่วนบนวิธี Rapid Entire Body<br>
                            Assessment (REBA) เพื่อประเมินท่าทางการทำงานของร่างกายทั้งลำตัววิธี RULA for Computer<br>
                            Users
                            เพื่อประเมินท่าทางของร่างกายสำหรับการปฏิบัติงานคอมพิวเตอร์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินระดับความเสี่ยง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ในการประเมินระดับความเสี่ยง
                            คณะทำงานประเมินความเสี่ยงควรใช้หลักเกณฑ์การพิจารณาต่อไปนี้<br>
                            (1.1) พิจารณาถึงโอกาสของการเกิดอันตราย<br>
                            (1.2) พิจารณาถึงความรุนแรงของอันตราย<br>
                            (2) คณะทำงานประเมินความเสี่ยง ดำเนินการประเมินระดับความเสี่ยงโดยพิจารณาระดับโอกาสและระดับ
                            ความรุนแรงที่อาจเกิดขึ้น ลงในตารางการประเมินระดับความเสี่ยง ซึ่งการแบ่งระดับโอกาสและระดับ
                            ความรุนแรงอาจเป็น 3 x 3 หรือ 4 x 4 หรือ 5 x 5
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจัดทำแผนจัดการความเสี่ยง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) หากเป็นความเสี่ยงที่ยอมรับไม่ได้
                            งานจะเริ่มหรือทำต่อไปไม่ได้จนกว่าจะลดความเสี่ยงให้ต่ำระดับลงถ้าไม่สามารถลดความเสี่ยงลงได้
                            ถึงแม้จะใช้ความพยายามหรือทรัพยากรอย่างเต็มที่แล้วก็ตาม ต้องห้ามทำงานต่อไปอย่างเด็ดขาด<br>
                            (2) หากเป็นความเสี่ยงสูง สถานประกอบกิจการต้องลดความเสี่ยงลงก่อนจึงเริ่มทำงานได้
                            ต้องจัดสรรทรัพยากรให้เหมาะสมและเพียงพอเพื่อลดความเสี่ยงนั้น
                            ถ้าความเสี่ยงเกิดขึ้นในกระบวนการผลิตหรือระหว่างการปฏิบัติงานจะต้องมีการแก้ไขอย่างเร่งด่วน<br>
                            (3) หากเป็นความเสี่ยงปานกลาง สถานประกอบกิจการจะต้องพยายามลดความเสี่ยงลง
                            โดยมีการพิจารณาค่าใช้จ่ายของการป้องกันอย่างรอบคอบ
                            มาตรการเพื่อลดความเสี่ยงจะต้องดำเนินการภายในระยะเวลา
                            ที่กำหนด เมื่อความเสี่ยงระดับปานกลางมีความสัมพันธ์กับอันตรายร้ายแรง
                            ควรทำการประเมินเพิ่มเติมด้วยเทคนิคการประเมินความเสี่ยงที่เหมาะสม
                            เพื่อหามาตรการที่จะลดโอกาสการเกิดอันตรายให้น้อยลงซึ่งเป็นหลักการพิจารณาความจำเป็นในการปรับปรุงแก้ไขมาตรการควบคุมต่อไป<br>
                            (4) หากเป็นความเสี่ยงที่ยอมรับได้ สถานประกอบกิจการอาจไม่ต้องมีการควบคุมเพิ่มเติม
                            การพิจารณามาตรการ
                            ควบคุมเพิ่มเติมอาจจะทำเมื่อเห็นว่าสามารถลดความสูญเสียให้กับสถานประกอบกิจการได้
                            การติดตามตรวจสอบยังคงต้องทำเพื่อให้แน่ใจว่าการควบคุมยังคงมีอยู่และใช้ได้ผล<br>
                            (5) หากเป็นความเสี่ยงเล็กน้อย สถานประกอบกิจการอาจไม่ต้องมีการดำเนินการใด ๆ
                            เพิ่มเติมแต่ยังคงต้องมีการทบทวนความเสี่ยงตามความเหมาะสม

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