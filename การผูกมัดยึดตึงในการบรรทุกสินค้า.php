<?php include('header_front.php'); ?>

<?php 
    $id_training = 171;//การผูกมัด ยึดตึงในการบรรทุกสินค้า

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
            <h2 class="text-center"><b>การผูกมัด ยึดตรึงในการบรรทุกสินค้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (3).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การยึดของบรรทุกอย่างปลอดภัยบนยานพาหนะเป็นสิ่งที่สำคัญอย่างมาก
                                เพื่อที่จะป้องกันการบาดเจ็บของผู้คนและความเสียหายต่อทรัพย์สิน โดยที่พนักงานขับรถบรรทุก
                                (Truck Driver) และผู้ช่วยผู้ขับรถบรรทุก (Helper)
                                ถือว่าเป็นผู้ที่มีส่วนสำคัญมากในความปลอดภัยในการทำงานและเป็นบุคคลที่มีความเสี่ยงต่อการเกิดอุบัติเหตุ
                                ซึ่งความมากน้อยต่างกันไปขึ้นอยู่กับความรู้ ความเข้าใจ ความเชื่อ ประสบการณ์
                                และทักษะในงานของแต่ละคน
                                โดยเฉพาะงานที่จำเป็นต้องปฏิบัตินั้นอยู่ในพื้นที่ที่มีความเสี่ยงสูง
                                หรืออยู่ในธุรกิจที่เกี่ยวข้องกับน้ำมันปิโตเลียมและแก๊ส เป็นต้น
                                ซึ่งเราคงปฏิเสธไม่ได้ว่าหากพนักงานเกิดความไม่ปลอดภัย
                                ย่อมนำมาซึ่งความสูญเสียทั้งทางตรงและทางอ้อม ไม่ว่าจะเป็นความเสียหายในทรัพย์สิน สินค้า
                                ธุรกิจ ค่ารักษาพยาบาล ขวัญและกำลังใจในการทำงานของพนักงาน ชื่อเสียง
                                และเสียโอกาสในการแข่งขันทางธุรกิจ
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
                                หลักสูตรนี้ได้ถูกพัฒนาขึ้นอย่างเฉพาะเจาะจงสำหรับพนักงานขับรถบรรทุก (Truck Driver)
                                และผู้ช่วย (Helper) โดยใช้กระบวนการที่ใช้ผู้เรียนเป็นศูนย์กลาง
                                และการโน้มน้าวผู้เข้าอบรมให้พร้อมที่จะยอมรับองค์ความรู้ใหม่
                                โดยครอบคลุมเนื้อหาภาคทฤษฎีและภาคปฏิบัติ ประกอบด้วยความรู้และหลักการผูกรัดและการบรรทุก
                                การป้องกันอุบัติเหตุและภาคปฏิบัติจริงตามหน้างาน (พร้อมการจำลองสถานการณ์)
                                ทำให้ผู้เข้าอบรมมีความมั่นใจในการนำไปปฏิบัติ
                                ซึ่งเป็นสิ่งสำคัญอย่างยิ่งในการบรรลุเป้าหมายของการฝึกอบรม
                                ดังนั้นการส่งเสริมและสร้างองค์ความรู้ที่มีประสิทธิภาพสูงจึงเป็นสิ่งที่ผู้บริหารควรให้ความสำคัญ
                                เพื่อให้พนักงานของท่านปฏิบัติงานอย่างมั่นใจและมีความปลอดภัย
                                พร้อมกับความราบรื่นและเจริญเติบโตของธุรกิจที่กำลังดำเนินกิจการอยู่นั้นเอง
                                และเพื่อให้ระบบการบริหารจัดการด้านความปลอดภัยเป็นไปได้อย่างเห็นผลในทางบวกและควบคู่ไปกับการพัฒนาทรัพยากรมนุษย์
                                นอกจากนี้ยังต้องคำนึงถึงความสดคล้องตามกฎหมายที่กำหนดความรับผิดสำหรับการกระทำโดยประมาทที่ก่อให้เกิดการบาดเจ็บหรือเกิดความเสียหายแก่ผู้อื่น
                                และยังมีข้อกำหนดทางกฎหมายอื่นๆ ที่กำหนดหน้าที่ของการดูแลในสถานที่ทำงาน
                                จึงมีความจำเป็นอย่างยิ่งที่จะจัดการอบรมและกำหนดเป็นหลักสูตรภาคบังคับสำหรับพนักงานขับรถบรรทุกและผู้ช่วยเหลือในองค์กรที่มุ่งมั่นและถือว่าความปลอดภัย
                                สุขอนามัย และสิ่งแวดล้อม (HSE) เป็นพันธกิจอย่างหนึ่งขององค์กร
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
            <h2 class="text-center"><b class="head_nav">การผูกมัด ยึดตรึงในการบรรทุกสินค้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการผูกมัด ยึดตรึงในการบรรทุกสินค้า
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="439" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery5.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ในการขนส่งแต่ละครั้ง การบรรทุกเป็นเรื่องสำคัญเรื่องหนึ่ง ถ้าบรรทุกไม่ดี
                        ก็จะทำให้เสียน้ำหนักบรรทุกใน แต่ละเที่ยว และไม่มีความปลอดภัยในระหว่างการเดินทาง ดังนั้น
                        ก่อนการบรรทุกแต่ละคราวจะต้องมีการเตรียมการ ล่วงหน้าโดยคำนึงถึงหัวข้อต่างๆ หลักสูตรการบรรทุก
                        การผูกมัด การเกาะเกี่ยวในการบรรทุกและขนส่ง จะเป็น
                        หลักสูตรที่ส่งเสริมทักษะและความสามารถในการจัดการด้านการบรรทุกสินค้าอย่างมีประสิทธิภาพและความปลอดภัย
                        ต่อผู้ขับขี่และผู้ใช้รถ ใช้ถนนต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรม เรียนรู้และใจหลักการ การบรรทุก ผูกมัด
                        การเกาะเกี่ยวในการบรรทุกและขนส่ง<br>
                        2. เพื่อให้ผู้เข้ารับการอบรม สามารถนําหลักการไปใช้ การบรรทุก ผูกมัด การเกาะเกี่ยว ในการขนส่ง
                        ได้อย่างมีประสิทธิภาพ<br><br>
                        เนื้อหาหลักสูตร<br>
                        1. ทางเลือกและรูปแบบการขนส่ง<br>
                        2. การเลือกตู้สินค้าที่เหมาะสม<br>
                        3. การตรวจสอบสภาพตู้ก่อนการบรรจุ<br>
                        4. การกระจายน้ำหนักในตู้สินค้า<br>
                        5. เงื่อนไขของผู้รับมอบปลายทางเกี่ยวกับการหีบห่อและบรรจุ<br>
                        6. ความเหมาะสมของพิกัดน้ำหนักและปริมาณและการจัดเรียง<br>
                        7. เครื่องหมายสัญลักษณ์ที่เกี่ยวข้องในการดูแลสินค้า<br>
                        8. การยึดตรึงผูกมัด และการเกาะเกี่ยวในสถานการณ์การบรรทุกต่าง ๆ<br>
                        9. การทำคอก รั้วและค้ำยัน<br>
                        10. การเพิ่มแรงดให้กับหีบห่อ<br>
                        11. อุปกรณ์ป้องกันและยึดตรึงสินค้า<br>
                        12. การผูกมัดยึดตรึงสินค้ารวมหน่วยและหีบห่อ<br>
                        13. วิธีการบรรจุและยึดตรึงสินค้าต่างรูปแบบและขนาดในตู้สินค้าเดียวกัน<br>
                        14. การบรรจุผลิตภัณฑ์กระดาษ<br>
                        15. สินค้าที่ต้องการเทคนิควิธีการจําเพาะ<br>
                        16. การปฏิบัติต่อสินค้าอันตราย<br>
                        17. การปฏิบัติต่อสินค้าอันตราย

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
                    ความปลอดภัยในการทำงานบนที่สูง
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการผูกมัดยึดตรึงในการบรรทุกสินค้า-01.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการผูกมัดยึดตรึงในการบรรทุกสินค้า-02.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 offset-md-2 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการผูกมัดยึดตรึงในการบรรทุกสินค้า-03.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการผูกมัดยึดตรึงในการบรรทุกสินค้า-04.jpg"
                        alt="">
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
                            <h5><b>แรงเสียดทาน (Friction Force) คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            แรงที่ต้านการเคลื่อนที่ของวัตถุ เกิดขึ้นระหว่าง
                            ผิวสัมผัสของวัตถุ และมีทิศทางตรงกันข้ามกับทิศ
                            ทางการเคลื่อนที่ของวัตถุ<br>
                            - เหล็กกับเหล็ก แรงเสียดทานต่ำ<br>
                            - เหล็กกับไม้ แรงเสียดทานปานกลาง<br>
                            - เหล็กกับแผ่นยางรอง แรงเสียดทานสูง

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อควรระวังการใช้สลิงอ่อน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            - ระวังความร้อนและสะเก็ดไฟ<br>
                            - อย่าผูกสลิงให้เป็นเงื่อนและปม<br>
                            - อย่าลากสลิงไปกับพื้นที่มีวัสดุกคอยู่<br>
                            - ไม่ใช้งานกับสารเคมีประเภทด่างเข้มข้น<br>
                            - หลีกเสี่ยงการใช้งานชนิดแรงกระตุกกระชาก<br>
                            - ในการใช้งานกับขอบที่มีคม ควรมีวัสดุป้องกันคม<br>
                            - ระวังการบิดตัวของสลิง<br>
                            - ให้รอยต่ออยู่ด้านบนตะขอเสมอ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การยกวัสดุอย่างปลอดภัย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            - ตรวจวัสดุที่ยกต้องไม่เอียง กระดก<br>
                            - เฝ้าสังเกตการเคลื่อนตัวของอุปกรณ์ช่วยยกและวัสดุที่กำลังยก<br>
                            - ให้สัญญาณเพื่อทำการยกให้ชัดเจน<br>
                            - หยุดยกทันทีที่สภาพการณ์ไม่เอื้ออำนวยหรือพบข้อบกพร่อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อควรปฏิบัติในการวางวัสดุ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            - พื้นที่หรือโครงสร้างที่รองรับวัสดุจะต้องแข็งแรง<br>
                            - เตรียมไม้สำหรับใช้รองรับวัสดุ<br>
                            - ห้ามวางวัสดุใกล้บริเวณปากหลุมทางน้ำไหลหรือบริเวณงานขุด<br>
                            - ห้ามปล่อยวัสดุกระแทกลงที่พื้น<br>
                            - วางวัสดุให้นิ่งและยึดโยงก่อนทำการปลดอุปกรณ์<br>
                            - ห้ามใช้นิ้วมือแหย่เข้าไปในร่องหรือรูน็อตขณะกำลังวางวัสดุเพื่อทำการประกอบ<br>
                            - ห้ามใช้มือเกาะเหนี่ยวรั้งส่วนหน้าสัมผัสของวัสดุที่จะวาง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สายรัดโพลีเอสเตอร์สำคัญอย่างไรในธุรกิจขนส่ง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            สายรัดโพลีเอสเตอร์ หรือที่เรียกกันว่า สายรัดก๊อกแก๊ก
                            จึงเป็นอีกหนึ่งตัวเลือกของธุรกิจในการขนส่งในยุคปัจจุบัน
                            เป็นสายรัดที่ผลิตจากเส้นใยโพลีเอสเตอร์ ซึ่งมีความแข็งแรงทนทาน และน้ำหนักเบา
                            มีให้เลือกใช้งานหลากหลายขนาด เหมาะสำหรับรัดสิ่งของบนรถกระบะ รถบรรทุก
                            หรือใช้ได้ในงานอเนกประสงค์ ช่วยยึดวัตถุหรือสิ่งของไม่ให้เคลื่อนย้ายในขณะขนย้ายได้เป็นอย่างดี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ส่วนประกอบที่สำคัญของสายรัดโพลีเอสเตอร์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) สายรัด<br>
                            (2) บัคเคิ้ล ตัวโยกเร่งความตึง<br>
                            (3) ตะขอเหล็ก
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถ 4 ล้อ หรือรถกระบะ</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            เป็นรถที่เหมาะสำหรับการขนส่งสินค้าหรือธุรกิจที่มีออเดอร์ขนาดเล็ก เป็นที่นิยมในธุรกิจ SMEs
                            รถสี่ล้อนี้มีขนาดไม่ใหญ่มาก
                            มีความคล่องตัวสูงกว่ารถชนิดอื่นๆ เพราะสามารถเข้าในเขตเมืองหรือเขตที่มีพื้นที่จำกัดได้
                            สามารถบรรทุกครั้งละ 1-3 ตัน ซึ่งรถบรรทุก 4 ล้อนั้นมีการนำมาดัดแปลงได้ในหลายรูปแบบ
                            ให้เหมาะกับธุรกิจ ได้แก่<br>
                            - รถสี่ล้อคอกคลุมผ้าใบ : ส่วนใหญ่จะนิยมใช้สำหรับการขนสินค้าประเภทพืช ผักผลไม้
                            และสินค้าอุปโภค บริโภคทั่วไป ที่ต้องการปริมาตรบรรทุกที่เยอะกว่า รถ 4 ล้อตู้<br>
                            - รถสี่ล้อตู้ทึบ : นิยมใช้สำหรับกลุ่มลูกค้าที่ ต้องการความปลอดภัย สินค้ามีโอกาสสูญหายได้ง่าย
                            อาจต้องมีกาเปิดตู้เพื่อไปลงหลายจุด เช่น สินค้าอิเล็กทรอนิกส์, สินค้าอุปโภคบริโภค,
                            สินค้าที่ไม่ชอบความชื้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถ 6 ล้อ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            ผู้ที่ใช้บริการส่วนใหญ่จะเป็นผู้ผลิตสินค้า ที่มีขนาดเล็กไปขนถึงโรงงานผลิตสินค้าขนาดกลาง
                            รวมไปถึงศูนย์กระจายสินค้า ที่นำสินค้ามาสต็อก
                            ก่อนที่จะนำไปกระจายให้กับร้านค้าในภูมิภาคหรือพื้นที่นั้นๆ
                            บางครั้งอาจไม่ได้เป็นผู้ผลิตสินค้าแต่เป็นบุคคลทั่วไปที่ต้องการจะขนย้ายสิ่งของ
                            จากที่หนึ่งไปอีกที่หนึ่ง ส่วนใหญ่รถหกล้อจะให้บรรทุกสินค้าประเภทเครื่องอุปโภคบริโภค
                            และอุปกรณ์ วัสดุต่างๆในการก่อสร้าง
                            เนื่องจากสามารถบรรจุสินค้าในปริมาณที่มาก แต่รองรับน้ำหนักได้น้อยกว่ารถสิบล้อ
                            ซึ่งรถบรรทุก 6 ล้อนั้น มีการนำมาดัดแปลงได้ในหลายรูปแบบ ให้เหมาะกับธุรกิจ ได้แก่<br>
                            - รถหกล้อพื้นเรียบ: นิยมใช้ขนส่งสินค้าวัสดุก่อสร้าง โดยน้ำหนักสินค้าที่สามารถบรรทุกได้คือ 6
                            ตัน<br>
                            - รถหกล้อคอก: ใช้ขนสินค้าเกษตร โดยน้ำหนักสินค้าที่สามารถบรรทุกได้คือ 8 ตัน<br>
                            - รถหกล้อตู้ทึบ: ขนส่งสินค้าที่ไม่สามารถเปียกน้ำได้ เช่น สื่อสิ่งพิมพ์
                            โดยน้ำหนักสินค้าที่สามารถบรรทุกได้คือ 6 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถ 10 ล้อ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            รถสิบล้อได้รับความนิยมมากในกลุ่มผู้ประกอบกิจการที่ผลิตสินค้าเกษตรเช่นการขนส่งปุ๋ย
                            ขนส่งผลผลิต สินค้าที่ใช้ในการก่อสร้าง ขนส่งดิน ขนส่งแร่ต่างๆ
                            รถสิบล้อที่ได้รับความนิยมมากที่สุดคือ รถสิบล้อดัมพ์
                            ซึ่งจะสามารถยกชิ้นส่วนของตัวรถให้สินค้าที่บรรทุกมานั้นเทกองลงพื้นได้
                            รถสิบล้อเหมาะสำหรับการขนส่งสินค้าที่มีปริมาณเยอะ และมีน้ำหนักมาก
                            สินค้าที่มักจะเรียกใช้บริการขนส่งด้วยรถสิบล้อ เช่น วัสดุก่อสร้าง สินค้าจากโรงงาน
                            หรืออุปกรณ์สำนักงานที่มีขนาดใหญ่ และเครื่องจักรกลต่างๆ
                            ซึ่งรถบรรทุก 10 ล้อนั้นมีการนำมาดัดแปลงได้ในหลายรูปแบบ ให้เหมาะกับธุรกิจ ได้แก่<br>
                            - รถสิบล้อพื้นเรียบ : น้ำหนักสินค้าที่สามารถบรรทุกได้คือ 15 ตัน<br>
                            - รถสิบล้อคอกดัมพ์/ไม่ดัมพ์ : น้ำหนักสินค้าที่สามารถบรรทุกได้คือ 15 ตัน<br>
                            - รถสิบล้อตู้ทึบ : น้ำหนักสินค้าที่สามารถบรรทุกได้คือ 14.5 ตัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>รถพ่วง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            การขนส่งสินค้าโดยใช้รถพ่วงในการขนส่งนั้น เหมาะสำหรับธุรกิจขนาดใหญ่
                            ที่ต้องการขนส่งสินค้าจำนวนมาก หรือสินค้าที่มีขนาดใหญ่ เช่น
                            อุปกรณ์ก่อสร้าง เครื่องจักรขนาดใหญ่
                            สินค้าที่นิยมใช้รถพ่วงมากที่สุดคือสินค้าที่อยู่ในอุตสหกรรมการเกษตร เช่น น้ำตาล ยางพารา
                            อาหารสัตว์ ซึ่งเป็นสินค้าที่สามารถเทกองได้เลย
                            ซึ่งรถรถพ่วง นั้นมีการนำมาดัดแปลงได้ในหลายรูปแบบ ให้เหมาะกับธุรกิจ ได้แก่<br>
                            - รถพ่วงพื้นเรียบ, รถพ่วงตู้, รถพ่วงคอกดัมพ์, รถพ่วงคอก
                            โดยสามารถร้บน้ำหนักของสินค้าได้มากสุด 30 ตัน
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