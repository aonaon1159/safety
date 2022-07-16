<?php include('header_front.php'); ?>

<?php 
    $id_training = 234;//Lockout Tagout

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
            <h2 class="text-center"><b>Lockout Tagout</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_lockout (7).jpg"
                        alt="LOCK OUT TAG OUT">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การปฏิบัติงานกับเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าที่หยุดการทำงานนั้นจำเป็นต้องมั่นใจว่าเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าดังกล่าวไม่มีโอกาสที่จะกลับมาทำงานได้โดยไม่ได้ตั้งใจหรือมีกระแสไฟฟ้าค้างอยู่
                                ซึ่งจะส่งผลให้เกิดอันตรายต่อผู้ปฏิบัติงานดังนั้นจึงจำเป็นต้องทำการแยกหรือตัด
                                แหล่งพลังงาน (พลังงานไฟฟ้า, นิวแมติกส์(ลม),ไฮดรอลิกส์, ความร้อน,พลังงานกล และ
                                พลังงานสะสมต่าง ๆ) ที่มายังเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้านั้นๆ
                                ด้วยการปลด/ปิดแหล่งจ่ายพลังงาน
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
                                กุญแจที่ใช้สำหรับการ Lockout ที่ใช้สำหรับล็อคนั้นมีลักษณะเหมือนกุญแจทั่วไป
                                ซึ่งอาจทำมาจากเหล็ก อลูมิเนียม สแตนเลส หรือพลาสติก แต่จะมีลักษณะพิเศษคือมีสีหลายสี
                                เพื่อให้สามารถเป็นสัญลักษณ์ในการแบ่งแยกการใช้งาน หรือประเภทผู้ใช้ได้
                                นอกจากนี้ยังมีลักษณะพิเศษคือ ตัวกุญแจและลูกกุญแจแต่ละอันมี ID ของแต่ละกุญแจ
                                เพื่อสามารถสั่งผลิตลูกกุญแจใหม่ได้เมื่อมีการสูญหายเกิดขึ้น
                                และมีระบบกุญแจที่สามารถเลือกได้ว่า จะใช้แม่กุญแจร่วมกัน หรือแยกกัน
                                เพื่อให้ประยุกต์ใช้ในหน่วยงานต่างๆได้อย่างมีประสิทธิภาพที่สุด
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_lockout (10).jpg"
                        alt="LOCK OUT TAG OUT">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">Lockout Tagout</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตร Lockout Tagout
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="346" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                    data-src="<?php echo $base_url;?>/img/template_gallery/gallery_lockout (6).jpg"
                    alt="LOCK OUT TAG OUT">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        Lock out & Tag out เป็นระบบการจัดการด้านความปลอดภัยในการทำงานของเครื่องจักร
                        ที่ชวยส่งเสริมในการลดความเสี่ยงและอุบัติเหตุที่อาจเกิดขึ้นได้ โดยใช้ระบบที่เรียกว่า visual
                        control มาใช้ในขณะที่มีซ่อมบำรุงหรือปรับแต่งระบบของเครื่องจักร เนื้อหาและเป้าหมายของหลักสูตร
                        Lock out & Tag out จึงมีประโยชน์ต่อการส่งเสริมด้านความปลอดภัยในการทำงาน
                        เป็นไปตามกฎกระทรวงกำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย
                        อาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ. 2552<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีความรู้และความเข้าใจในระบบ Lock out & Tag out<br>
                        2. เพื่อให้ผู้เข้ารับการอบรมสามารถ ไปใช้ในระบบปฏิบัติงานได้<br>
                        3. เพื่อให้ผู้เข้ารับการอบรมสามารถวิเคราะห์ปัญหาและแนวทางแก้ไข
                        แนะแนวทางที่เหมาะสมในการนำไปใช้ในระบบ Lock out & Tag out ไปใช้ในการทำงานด้วยความปลอดภัย<br><br>
                        เนื้อหาการอบรม<br>
                        1. Lock out & Tag out คืออะไร ? เป็นระบบที่ส่งเสริมความปลอดภัยในการทำงานอย่างไร ?<br>
                        2. หลักการและกระบวนการLock out & Tag out<br>
                        3. การนำระบบ Lock out & Tag out สู่ระบบการปฏิบัติงาน

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
                    Lockout Tagout
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความlockouttagout-04.jpg"
                        alt="LOCK OUT TAG OUT">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความlockouttagout-03.jpg"
                        alt="LOCK OUT TAG OUT">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความlockouttagout-02.jpg"
                        alt="LOCK OUT TAG OUT">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความlockouttagout-01.jpg"
                        alt="LOCK OUT TAG OUT">
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
                            <h5><b>อุปกรณ์ Lockout-Tagout (LOTO)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การปฏิบัติงานกับเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าที่หยุดการทำงานนั้นจำเป็นต้องมั่นใจว่าเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าดังกล่าวไม่มีโอกาสที่จะกลับมาทำงานได้โดยไม่ได้ตั้งใจหรือมีกระแสไฟฟ้าค้างอยู่
                            ซึ่งจะส่งผลให้เกิดอันตรายต่อผู้ปฏิบัติงานดังนั้นจึงจำเป็นต้องทำการแยกหรือตัด แหล่งพลังงาน
                            (พลังงานไฟฟ้า, นิวแมติกส์(ลม),ไฮดรอลิกส์, ความร้อน,พลังงานกล และ พลังงานสะสมต่าง ๆ)
                            ที่มายังเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้านั้นๆ ด้วยการปลด/ปิดแหล่งจ่ายพลังงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Lock Out คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ส่วนที่จะทำการ lock อุปกรณ์ที่เชื่อมต่อกับพลังงานต่างๆเช่น circuit breaker, isolating
                            switch,
                            line valve
                            เพื่อให้แน่ใจว่าอุปกรณ์จะถูกควบคุมไว้และไม่สามารถใช้งานได้ในระหว่างที่ยังไม่ปลดอุปกรณ์ Lock
                            ออกการทำการ lockout ทุกครั้งต้องมั่นใจว่าไม่มีพลังงานสะสม ตกค้าง
                            ซึ่งอาจก่อให้เกิดการเคลื่อนไหวของชิ้นส่วนใด
                            ๆของเครื่องจักรและอุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าในจุดปฏิบัตงานหรือที่เรียกว่า Zero Energy
                            เช่น การปิดระบบจ่ายลมมาที่ชุด Air blast แต่ไม่ได้เคลียลมที่ค้างในระบบ ก็ถือว่ามีการ lockout
                            แต่ไม่ zero energy เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กุญแจที่ใช้สำหรับการ Lockout</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ที่ใช้สำหรับล็อคนั้นมีลักษณะเหมือนกุญแจทั่วไป ซึ่งอาจทำมาจากเหล็ก อลูมิเนียม สแตนเลส
                            หรือพลาสติก แต่จะมีลักษณะพิเศษคือมีสีหลายสี เพื่อให้สามารถเป็นสัญลักษณ์ในการแบ่งแยกการใช้งาน
                            หรือประเภทผู้ใช้ได้ นอกจากนี้ยังมีลักษณะพิเศษคือ ตัวกุญแจและลูกกุญแจแต่ละอันมี ID
                            ของแต่ละกุญแจ เพื่อสามารถสั่งผลิตลูกกุญแจใหม่ได้เมื่อมีการสูญหายเกิดขึ้น
                            และมีระบบกุญแจที่สามารถเลือกได้ว่า จะใช้แม่กุญแจร่วมกัน หรือแยกกัน
                            เพื่อให้ประยุกต์ใช้ในหน่วยงานต่างๆได้อย่างมีประสิทธิภาพที่สุด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Tagout คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            ป้ายแจ้งเตือนไว้ที่จุดตัดระบบหรือตำแหน่งหยุดพลังงานเพื่อบ่งบอกว่าอุปกรณ์ดังกล่าวจะถูกควบคุมไว้และไม่สามารถใช้งานได้จนกว่าปลด
                            Tag ออกไป
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตัดแยกพลังงาน (LOTO) คืออะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            การตัดแยกพลังงาน คือการทำให้เกิด Isolation
                            แยกเครื่องจักรหรืออุปกรณ์ออกจากแหล่งจ่ายพลังงานและป้องกันการเชื่อมต่อพลังงานโดยไม่ได้ตั้งใจ
                            เพื่อป้องกันอันตรายที่อาจเกิดขึ้นทั้งขณะมีการซ่อมบำรุง ซ่อมแซม หรือทำความสะอาดเครื่องจักร
                            หรืออุปกรณ์นั้นๆ โดยใช้วิธีการ Lock-out Tag-out หรือเรียกสั้นๆว่า LOTO
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ใครบ้างต้องเรียนรู้ อบรม และเข้าใจในขั้นตอนการตัดแยกพลังงาน (LOTO)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            ขั้นตอนการตัดแยกพลังงาน เป็นจุดเล็กๆที่ช่วยป้องกันความปลอดภัยที่ส่วนใหญ่มักมองข้ามไป
                            ทั้งอาจเกิดจากความเร่งรีบในการซ่อม ความคุ้นเคยจนเป็นความเผลอเรอในขั้นตอนการทำความสะอาด
                            จึงมีข่าวออกมาบ่อยครั้งว่า มีพนักงานซ่อมบำรุง โดยเครื่องจักรหนีบ
                            โดยความไม่ตั้งใจของพนักงานคนอื่นที่เผลอไปกดสวิทช์ หรือกดสวิทช์ผิดเครื่อง
                            หรือพนักงานลงไปทำความสะอาด โดยเพื่อนเข้าใจว่าขึ้นมาจากบริเวณนั้นแล้ว
                            ขั้นตอนการตัดแยกพลังงานอย่างมีแบบแผนและเป็นระบบ
                            จึงเป็นสิ่งจำเป็นที่ต้องตระหนักและให้ความสำคัญอย่างยิ่ง
                            ดังนั้น พนักงานที่เกี่ยวข้องกับเครื่องจักร พนักงานที่ดูแลพื้นที่นั้นๆ รวมถึง
                            ช่างซ่อมบำรุงทุกคน จึงจำเป็นต้องมีการอบรม เรียนรู้ขั้นตอนการตัดแยกพลังงาน
                            เพื่อใช้ในการปฏิบัติงานได้ถูกต้อง และเข้าใจตรงกัน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความปลอดภัยในการตัดแยกพลังงาน กฏหมายที่เกี่ยวข้องมีระบุไว้หรือไม่</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            เพราะว่านอกจากการเดินระบบผลิตปกติ ในโรงงานทุกประเภท หรือแม้แต่ในงานก่อสร้าง
                            ต้องมีกิจกรรมที่จำเป็นต้องมีการตัดแยกพลังงาน เกิดขึ้นอย่างหลีกเลี่ยงไม่ได้ เช่น
                            การซ่อมบำรุงตรวจเช็คสภาพ (Preventive Maintenance : PM) ตามรอบเวลาที่กำหนด การซ่อมแซมต่างๆ
                            (Breakdown Maintenance :BM) เพื่อเปลี่ยนอะไหล่อุปกรณ์ที่ชำรุดเสียหาย
                            หรือแม้กระทั่งทำความสะอาด (Cleaning) ตามรอบการผลิต ฯลฯ
                            กิจกรรมดังกล่าวจำเป็นต้องมีช่าง
                            หรือพนักงานเข้าทำงานในส่วนที่อาจเกิดอันตรายได้ในด้านต่างๆเช่น อัตรายจากกระแสฟ้า
                            เช่นการซ่อมแซมตู้ไฟฟ้าควบคุม อันตรายเชิงกลจากอุปกรณ์ เช่นจากการหมุนของเฟือง สายพาน มูเลย์
                            มอเตอร์ ใบพัด ใบกวนในถัง ใบตัด อันตรายจากความร้อน,ความเย็น,สารเคมี
                            ที่จ่ายเข้ามาโดยไม่ได้ตั้งใจ รวมถึงก๊าซชนิดต่างๆที่เป็นพิษต่อร่างกายของผู้ปฏิบัติงาน
                            หรือส่งผลต่อปริมาณออกซิเจนบริเวณนั้นๆ
                            ตัวอย่างข้างต้นของกิจกรรมเหล่านี้จำเป็นต้องมีการตัดแยกพลังงาน
                            และทำให้เกิดความมั่นใจว่าการตัดแยกพลังงานทำได้อย่างสมบูรณ์
                            โดยไม่อาจต่อกับแหล่งจ่ายได้ทั้งเกิดจาก ระบบอัตโนมัติ ระบบป้องกันความปลอดภัยของอุปกรณ์
                            จากพนักงานที่ไม่มีส่วนเกี่ยวข้อง หรือแม้กระทั่งจากความพลั้งเผลอของพนักงานเอง
                            ขั้นตอนการตัดแยกพลังงานมีไว้ เพื่อให้เกิดความปลอดภัยในตัวของพนักงานผู้ปฏิบัติงานเอง
                            และเป็นการปฏิบัติตามกฏหมาย ตัวอย่างเช่น ดังนี้
                            กฎกระทรวง กำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงานเกี่ยวกับงานก่อสร้าง พ.ศ. 2551<br>
                            (ข้อ 23 ในระหว่างที่มีการทำงานติดตั้ง ตรวจสอบ ซ่อมแซม หรือซ่อมบำรุงระบบไฟฟ้า
                            ให้นายจ้างจัดให้มีการใช้กุญแจป้องกันการสับสวิตช์เชื่อมต่อวงจร
                            หรือจัดให้มีระบบระมัดระวังป้องกันมิให้ผู้ใดสับสวิตช์เชื่อมต่อวงจรตลอดเวลาที่ทำงานดังกล่าว
                            และติดป้ายแสดงเครื่องหมายหรือสัญลักษณ์ห้ามสับสวิตช์เชื่อมต่อวงจรไว้ด้วย)
                            กฏกระทรวง กำหนดมาตราฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงาน เกี่ยวกับเครื่องจักร ปั้นจั่น และหม้อน้ำ พ.ศ.2552<br>
                            (ข้อ 4 ในบริเวณที่มีการติดตั้ง การซ่อมแซม
                            หรือการตรวจสอบเครื่องจักรหรือเครื่องป้องกันอันตรายจากเครื่องจักร
                            นายจ้างต้องติดป้ายแสดงการดำเนินการดังกล่าว
                            โดยใช้เครื่องหมายหรือข้อความที่เข้าใจง่ายและเห็นได้ชัดเจน รวมทั้งจัดให้มีระบบ วิธีการ
                            หรืออุปกรณ์ป้องกันมิให้เครื่องจักรนั้นทำงาน
                            และให้แขวนป้ายแสดงเครื่องหมายหรือสัญลักษณ์ห้ามเปิดสวิตช์ไว้ที่สวิตช์ของเครื่องจักรด้วย)
                            กฎกระทรวงกำหนดมาตรฐานในการบริหารจัดการและดำเนินการด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงานเกี่ยวกับที่อับอากาศ พ.ศ. 2562<br>
                            (ข้อ 11 กรณีที่ที่อับอากาศที่ให้ลูกจ้างทำงานมีผนังต่อหรือมีโอกาสที่พลังงาน สาร
                            หรือสิ่งที่เป็นอันตรายจะรั่วไหลเข้าสู่บริเวณที่อับอากาศที่ทำงานอยู่
                            ให้นายจ้างปิดกั้นหรือกระทำโดยวิธีการอื่นใดที่มีผลในการป้องกันมิให้พลังงาน
                            สารหรือสิ่งที่เป็นอันตรายเข้าสู่บริเวณที่อับอากาศในระหว่างที่ลูกจ้างกำลังทำงาน)<br>

                            จากกฏกระทรวงดังกล่าวมุ่งหวังให้เกิดความปลอดภัยในการทำงาน ลดการสูญเสียจากการซ่อมบำรุง
                            หรือจากการปฏิบัติงาน ดังนั้นการตัดแยกพลังงานจึงเป็นสิ่งจำเป็นที่
                            พนักงานทุกคนที่มีส่วนเกี่ยวข้องกับพื้นที่นั้นๆควรมีการอบรม ซักซ้อม
                            ทำความเข้าใจในขั้นตอนการปฏิบัติ ตระหนักถึงความจำเป็นในการล๊อคอุปกรณ์
                            และเข้าใจถึงคอนเซฟหลักในการใช้อุปกรณ์ตัดแยกพลังงานเหล่านั้น จะได้เข้าใจตรงกันโดยง่าย
                            และครอบคลุมทุกประเด็นที่อาจส่งผลให้อุปกรณ์ทำงานโดยไม่ได้ตั้งใจได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>มาตรฐาน OSHA กับการตัดแยกพลังงาน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            นอกจากกฏกระทรวงอย่างน้อยๆ 3 ฉบับข้างต้นแล้ว ยังมีมาตรฐาน OSHA ที่เกี่ยวข้องโดยตรงคือ OSHA
                            1910.147 The Control of Hazardous Energy (Lockout/Tagout) ที่นิยมใช้เป็นข้อกำหนด
                            ขั้นตอนระเบียบแบบแผนหลัก เพื่อให้เกิด Plant Isolation
                            เป็นการป้องกันอันตรายที่จะเกิดขึ้นระหว่างการซ่อมบำรุง ซึ่งมีการลงรายละเอียดปลีกย่อย
                            ในขั้นตอนการปฏิบัติตั้งแต่การล๊อคแหล่งจ่ายพลังงาน( lock-out) การทำให้ระบบปลอดจากพลังงาน
                            (Zero Energy) การแขวนป้าย (Tag-Out) การปลดจากการล๊อค เป็นต้น ซึ่งจำเป็นต้องมีการเรียนรู้
                            ฝึกฝน มีการปฏิบัติ เข้าใจในหลักการ วิธีการ จุดที่จำเป็นต้องมีการล๊อค
                            เพราะว่าระบบหรืออุปกรณ์ในแต่ละชนิด แต่ละแห่งย่อมไม่เหมือนกัน หลักสำคัญในการล๊อคคือ
                            “ผู้อื่นต้องเข้าใจโดยง่ายด้วย” ทำให้เกิดความซับซ้อนน้อยที่สุดที่เป็นไปได้
                            เพื่อลดการเกิดข้อบกพร่องในการล๊อคที่ยากต่อการเข้าใจ ซึ่งรายละเอียดควรฝึกอบรม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการทำ Log-Out Tag-Out (LOTO) เบื้องต้น</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            ขั้นที่ 1 ระบุหาอันตรายที่อาจจะเกิดขึ้นระหว่างการซ่อมบำรุง หรือ การทำความสะอาด
                            ในขั้นตอนนี้จำเป็นต้องใช้ความรู้ ความเข้าใจในการทำงานของอุปกรณ์ เครื่องจักรนั้น
                            ทั้งการเดินระบบปกติ ระบบป้องกันความปลอดภัยของตัวเครื่อง
                            และพลังงานที่อาจสะสมตกค้างในตัวเครื่องจักร หรืออุปกรณ์นั้นๆ<br>
                            ขั้นที่ 2 ปิดเครื่องจักร หรืออุปกรณ์นั้น ให้อยู่ในสภาพ shutdown ที่สมบูรณ์
                            ไม่มีพลังงานหรือสารเคมีใดๆตกค้าง เช่น เครื่องหยุดหมุนนิ่งสนิท ไม่มีแรงดัน ประจุไฟฟ้า
                            หรือสารเคมีที่เป็นอันตราย<br>
                            ขั้นที่ 3 ตัดแยกพลังงานภายนอกออกจากเครื่องจักรอย่างสมบูรณ์ เช่น
                            ปิดวาล์วจ่ายสารหรือก๊าซชนิดต่างๆ และพลังงานให้สนิทโดยไม่มีการไหลเข้าเครื่องจักร
                            หรือถอดจุดเชื่อมต่อท่อกับใช้หน้าแปลนปิด แทนที่ชั่วคราวก่อน สับเบรกเกอร์ไฟฟ้าลง<br>
                            ชั้นที่ 4 ล๊อคและป้องกันการเชื่อมต่อพลังงานโดยไม่ได้ตั้งใจ โดยใช้กุญแจ
                            อุปกรณ์เสริมสำหรับล๊อคป้องกันทั้งระบบไฟฟ้า วาล์วจ่ายก๊าซหรือพลังงานที่เกี่ยวข้อง<br>
                            ขั้นที่ 5 ตรวจเช็คอีกครั้งว่าไม่มีพลังงานสะสมอยู่จนก่อให้เกิดอันตรายได้ เช่น ประจุไฟฟ้า
                            แรงดัน ความร้อน สารเคมีอันตราย และไม่มีการเชื่อมต่อพลังงานอย่างไม่ได้ตั้งใจ
                            ทั้งจากผู้ที่ไม่มีส่วนเกี่ยวข้อง จากระบบเปิดอัตโนมัติของอุปกรณ์นั้นๆ
                            หรือระบบเซฟตี้ของอุปกรณ์นั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ระบบลูกกุญเเจ มี 3 ประเภท</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            Keyed to Differ คือ
                            ลูกกุญเเจเเต่ละดอกจะสามารถเปิดเเม่กุญเเจล็อคเอ้าท์ได้เฉพาะตัวเเม่กุญเเจของตัวมันเองเท่านั้น
                            ไม่สามารถเปิดเเม่กุญเเจตัวอื่นได้<br>
                            Keyed to Alike คือ
                            ลูกกุญเเจเเต่ละดอกจะสามารถใช้งานร่วมกับเเม่กุญเเจล็อคเอ้าท์ในกลุ่มของตัวเองได้<br>
                            Master Key + Keyed to Differ คือ มีคุณลักษณะเหมือน Keyed to Differ
                            เเต่จะมีลูกกุญเเจมาสเตอร์คีย์ที่สามารถเปิดเเม่กุญเเจล็อคเอ้าท์ได้ทุกตัว
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
                            src="<?php echo $base_url;?>/img/template_gallery/gallery_lockout (9).jpg">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for($i = 1; $i <= 50 ; $i++){?>
                    <div>
                        <img src="<?php echo $base_url;?>/img/template_gallery/gallery_lockout (<?php echo $i;?>).jpg"
                            alt="LOCK OUT TAG OUT">
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
                    <div class="youtube-video-place"
                        data-yt-url="https://www.youtube.com/embed//9ptXaNKAgT0?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/template_gallery/กฎหมายที่เกี่ยวข้องกับการล็อกสวิตซ์และติดป้าย (LOCK OUT TAG OUT).jpg"
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
                            <h4><b>กฎหมายที่เกี่ยวข้องกับการล็อกสวิตซ์และติดป้าย (LOCK OUT TAG OUT)</b></h4>
                            <hr class="hr_green hr_fix_width">
                            <h5>การปฏิบัติงานกับเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าที่หยุดการทำงานนั้นจำเป็นต้องมั่นใจว่าเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้าดังกล่าวไม่มีโอกาสที่จะกลับมาทำงานได้โดยไม่ได้ตั้งใจหรือมีกระแสไฟฟ้าค้างอยู่
                                ซึ่งจะส่งผลให้เกิดอันตรายต่อผู้ปฏิบัติงานดังนั้นจึงจำเป็นต้องทำการแยกหรือตัด
                                แหล่งพลังงาน (พลังงานไฟฟ้า, นิวแมติกส์(ลม),ไฮดรอลิกส์, ความร้อน,พลังงานกล และ
                                พลังงานสะสมต่าง ๆ) ที่มายังเครื่องจักร/อุปกรณ์หรือแหล่งจ่ายกระแสไฟฟ้านั้นๆ
                                ด้วยการปลด/ปิดแหล่งจ่ายพลังงาน</h5>
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