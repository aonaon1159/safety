<?php include('header_front.php'); ?>

<?php 
    $id_training = 170;//เทคนิคงานเชื่อมแก๊ส งานเชื่อมไฟฟ้า

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
            <h2 class="text-center"><b>เทคนิคงานเชื่อมแก๊ส งานเชื่อมไฟฟ้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (4).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การเชื่อมโดยใช้แก๊ส และมาตรการป้องกันอันตรายจากไฟย้อนกลับ (Yamato Flashback Arrester)
                                โดยหลักการแล้วการเชื่อมโดยใช้แก๊สเป็นขบวนการเชื่อมที่ใช้การเผาใหม้ของแก๊สอเชติลีนผสมกับแก๊สออกชิเจน
                                (Oxy-acetylene Welding)
                                เปลวไฟจากการเผาไหม้ที่ปลายหัวเชื่อมแล้วทำให้โลหะหลอมละลายแล้วเติมลวดเชื่อมลงไปในบ่อน้ำโลหะที่กำลังหลอมละลายเมื่อปล่อยให้เย็นตัวลงก็จะได้แนวเชื่อมตามต้องการ
                                การเชื่อมแก๊สนิยมใช้กับงานเชื่อมเบาๆที่ใช้ชื่อมโลหะบางๆเช่นงานเชื่อมเพื่อซ่อมตัวถังรถยนต์งานเชื่อมท่อแอร์
                                ท่อไอเสียรถยนต์หรืองานเชื่อท่อในอุตสาหกรมเคมีต่างๆเป็นต้น
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
                                หลักการเชื่อมแก๊ส
                                เป็นขบวนการเชื่อมที่ใช้การเผาใหม้ของแก๊สอเชติลีนผสมกับแก๊สออกชิเจน (Oxy-acetylene
                                Welding)
                                เปลวไฟจากการเผาใหม้ที่ปลายหัวเชื่อมแล้วทำให้โลหะหลอมละลายแล้วเติมลวดเชื่อมลงไปในบ่อน้ำโลหะที่กำลังหลอมละลาย
                                เมื่อปล่อยให้เย็นตัวลงก็จะได้แนวเชื่อมตามต้องการ การเชื่อมแก๊ส นิยมใช้กับงานเชื่อมเบาๆ
                                ที่ใช้เชื่อมโลหะบางๆ เช่น งานเชื่อมเพื่อซ่อมตัวถังรถยนต์ งานเชื่อมท่อแอร์
                                ท่อไอเสียรถยนต์ หรืองานเชื่อมท่อในอุตสาหกรรมเคมีต่างๆ เป็นต้น
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (11).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">เทคนิคงานเชื่อมแก๊ส งานเชื่อมไฟฟ้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรเทคนิคงานเชื่อมแก๊ส งานเชื่อมไฟฟ้า
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="445" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery7.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        กฎกระทรวง
กำหนดมาตรฐานในการบริหาร จัดการ และดำเนินการด้านความปลอดภัย อาชีวอนามัย
และสภาพแวดล้อมในการทำงานเกี่ยวกับเครื่องจักร ปั้นจั่น และหม้อน้ำ
พ.ศ. ๒๕๖๔ ข้อ ๑๓ ในการทำงานเกี่ยวกับเครื่องปั๊มโลหะ เครื่องเชื่อมไฟฟ้า เครื่องเชื่อมก๊าซ หรือ
เครื่องจักรชนิดอื่นที่อาจก่อให้เกิดอันตรายจากการใช้งานได้โดยสภาพ นายจ้างต้องใช้ลูกจ้างซึ่งผ่านการอบรม
เกี่ยวกับขั้นตอนและวิธีการทำงานที่ปลอดภัยในการทำงานของเครื่องจักร การป้องกันอันตรายจากเครื่องจักร
รายละเอียดเกี่ยวกับโครงสร้างอุปกรณ์ การตรวจสอบและบำรุงรักษาอุปกรณ์ของเครื่องจักรนั้น
โดยวิทยากรซึ่งมีความรู้ ความเชี่ยวชาญ และประสบการณ์การทำงานเกี่ยวกับเครื่องจักรแต่ละประเภท
ตามหลักสูตรที่อธิบดีประกาศกำหนด <br><br>

                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีทักษะ ความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อม<br>
                        2.
                        เพื่อให้ผู้เข้ารับการอบรมสามารถความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อมได้อย่างมีประสิทธิภาพ<br>
                        3. เพื่อให้ผู้เข้ารับการอบรมสามารถในการประเมินความเสี่ยงด้านความปลอดภัยในการทำงาน<br><br>

                        หัวข้อการอบรม<br>
                        1) การสร้างพื้นฐานความเข้าใจเกี่ยวกับอันตรายจากงานเชื่อมแบบเชื่อมไฟฟ้าและการเชื่อมแก๊ส<br>
                        1.1 อันตรายที่เกิดจากการอาร์ก<br>
                        1.2 อันตรายที่เกิดจากไฟฟ้าในงานเชื่อม<br>
                        1.3 อันตรายที่เกิดจากการลุกไหม้ การระเบิด<br>
                        1.4 อันตรายที่เกิดจากพลังงานรังสี<br>
                        1.5 อันตรายที่เกิดขึ้นภายหลังการทําความสะอาดงานเชื่อมหรือแนวเชื่อม<br><br>
                        2. ข้อปฏิบัติในการเชื่อมโลหะด้วยไฟฟ้าและการเชื่อม<br>
                        2) หลักการระบายอากาศเพื่อความปลอดภัยในงานเชื่อมไฟฟ้าและแก๊ส<br>
                        3) อุปกรณ์ป้องกันอันตรายในงานเชื่อม<br>
                        4) หลักการประเมินความเสี่ยงด้านความปลอดภัยในการทำงาน<br>
                        5) workshop การประเมินความเสี่ยงในงานเชื่อม
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
                    เทคนิคงานเชื่อมแก๊สงานเชื่อมไฟฟ้า
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความความปลอดภัยในการเชื่อม-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความความปลอดภัยในการเชื่อม-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความความปลอดภัยในการเชื่อม-03.jpg" alt="">
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
                            <h5><b>การเชื่อมโดยใช้แก๊ส (Oxy-fuel Gas Welding)คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การเชื่อมชิ้นงานโดยใช้พลังงานความร้อนจากการสันดาปของแก๊ส เชื้อเพลิง (Fuel Gas) เช่น
                            ก๊าซปิโตรเลียมเหลว (LPG) อะเซทิลีน (C2H2) หรือไฮโดรเจน (H2) กับ ออกซิเจน (O2)
                            ที่หัวเชื่อมแก๊ส (Torch)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุปกรณ์ที่ใช้สำหรับเชื่อมแก๊ส (Gas Welding Equipment) ประกอบด้วย</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) หัวเชื่อมแก๊ส (Torch)<br>
                            (2) สายแก๊สเชื่อเพลิงและสายออกซิเจน (Hoses)<br>
                            (3) ถังแก๊สเชื้อเพลิง (Fuel Gas Cylinder)<br>
                            (4) ถังออกซิเจน (Oxygen Cylinder)<br>
                            (5) อุปกรณ์ปรับความดัน (Regulators)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อันตรายที่เกิดจากการเชื่อมโดยใช้แก๊ส</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            หัวเชื่อมแก๊ส (Torch) ถึงแม้จะได้รับการออกแบบให้ทรงประสทธิภาพดีเพียงไรก็ตาม
                            แต่ก็ยังมีความเป็นอันตรายในตัวของมันเอง กล่าวคือ อาจเกิดปรากฏการณ์ไฟย้อนกลับ (Flashback)
                            ที่หัวเชื่อมแก๊ส การเกิดไฟลุกไหม้หรือระเบิดที่อุปกรณ์ขณะทำการเชื่อมแก๊ส เช่น การระเบิดที่
                            Torch หรือการระเบิดของสายแก๊สหรือสายออกซิเจน (Hoses) ที่ต่อระหว่าง Torch กับ Regulator
                            หรือการระเบิด ที่ Regulators และที่รุนแรงที่สุดคือ
                            การระเบิดที่ถังออกซิเจนหรือถังแก๊สเชื้อเพลิง ล้วนแต่มีสาเหตุมาจาก
                            การเกิดปรากฏการณ์ไฟย้อนกลับ (Flashback) ทั้งสิ้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเกิดปรากฏการณ์ไฟย้อนกลับ (Flashback) คืออะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            Backflashเป็นปรากฎการณ์ที่ไฟ (Flame) ย้อนกลับจาก Torch เข้าในสายแก๊สผ่าน Regulator
                            ไปยังถังแก๊สเชื้อเพลิง (Fuel Gas Cylinder) ขณะเดียวกันออกซิเจนจะไหลตามเข้าไปโดยแรง
                            ปฏิกิริยาที่เกิดขึ้นจากการลุกไหม้ เพื่อให้เกิดการลุกไหม้อย่างต่อเนื่อง (Sustain Combustion)
                            หรือ อีกนัยหนึ่ง คือ Flame ย้อนกลับจาก Torch เข้าไปในสายออกซิเจนผ่าน Regulator
                            ไปยังถังออกซิเจน ขณะเดียวกัน Fuel Gas
                            จะไหลตามเข้าไปด้วยแรงปฏิกิริยาที่เกิดขึ้นจากการลุกไหม้เพื่อให้เกิด Sustain Combustion
                            ความเร็วของไฟ (Flame Velocity) ขณะเกิด Flashback จะเร็วมาก Flame Velocity อาจ สูงถึง 2
                            เท่าของความเร็วของเสียงประมาณ 2,000 ฟุต/วินาที หรือ 1,400 ไมล์/ชั่วโมง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาเหตุที่ทำให้เกิด Backflash เกิดได้หลายประการ ดังนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            – การประกอบหัวเชื่อมแก๊ส (Torch) ไม่ถูกต้อง<br>
                            – การระบายแก๊ส (Purge) ที่ค้างอยู่ในสายแก๊สและ Torch ก่อนการเชื่อมไม่ถูกต้อง<br>
                            – ความดันใช้งานไม่ถูกต้อง<br>
                            – เลือกใช้หัว Tip ของ Torch ไม่ถูกต้อง<br>
                            – ทางเดินของแก๊สใน Torch อุดตัน<br>
                            – สายแก๊สชำรุดหรือรั่วไหลและมีประกายไฟทำให้เกิดการลุกไหม้<br>
                            – ใช้ระยะห่างของหัว Tip กับชิ้นงานที่เชื่อมไม่ถูกต้อง<br>
                            – เกิดการรั้วของแก๊สที่ Regulator, Hose หรือ Connection เป็นผลทำให้ความดันลดลง
                            แก๊สที่ความดันสูงจึงไหลย้อนกลับไปยังอีกด้านหนึ่ง เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>มาตรการป้องกันไฟย้อนกลับ (Flashback Protection Measures)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            เราสามารถป้องกันไฟย้อนกลับได้โดยการติดตั้งอุปกรณ์ป้องกันไฟย้อนกลับ (Flashback
                            Arrestors) โดยต้องติดตั้งที่ Gas Welding Equipment 4 จุด ดังนี้คือ<br>
                            (1) ทางออกของ Oxygen Regulator<br>
                            (2) ทางออกของ Fuel Gas Regulator<br>
                            (3) ด้าม Torch ทางด้านที่ต่อกับสายออกซิเจน<br>
                            (4) ด้าม Torch ทางด้านที่ต่อกับสายแก๊สเชื้อเพลิง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Flashback Arrestors คือ อุปกรณ์ป้องกันไฟย้อนกลับในเวลาทำการเชื่อมโดยใช้แก๊ส</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            โดยทั่วไปประกอบด้วย โครงสร้างหลักที่สำคัญ 3 ประการ คือ<br>
                            (1) Non-Return Valve เป็นลิ้นควบคุมการไหลให้ไปในทิศทางเดียว<br>
                            (2) Flame Arrestor เป็นตัวดูดซับหรือดับไฟที่ย้อนกลับ<br>
                            (3) Thermal Cut-Off Valve เป็นตัวจับความร้อน โดยลิ้นจะปิดการไหลโดยทันทีทันใด
                            เมื่อมีความร้อนเกิดขึ้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หลักการเชื่อมแก๊ส</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            เป็นขบวนการเชื่อมที่ใช้การเผาใหม้ของแก๊สอเชติลีนผสมกับแก๊สออกชิเจน (Oxy-acetylene
                            Welding)
                            เปลวไฟจากการเผาใหม้ที่ปลายหัวเชื่อมแล้วทำให้โลหะหลอมละลายแล้วเติมลวดเชื่อมลงไปในบ่อน้ำโลหะที่กำลังหลอมละลาย
                            เมื่อปล่อยให้เย็นตัวลงก็จะได้แนวเชื่อมตามต้องการ การเชื่อมแก๊ส นิยมใช้กับงานเชื่อมเบาๆ
                            ที่ใช้เชื่อมโลหะบางๆ เช่น งานเชื่อมเพื่อซ่อมตัวถังรถยนต์ งานเชื่อมท่อแอร์ ท่อไอเสียรถยนต์
                            หรืองานเชื่อมท่อในอุตสาหกรรมเคมีต่างๆ เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b> การติดตั้งอุปกรณ์เชื่อมแก๊ส (Setting up equipment)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            ก่อนทำการเชื่อมแก๊สจะต้องประกอบอุปกรให้เรียบร้อยสมบูรณ์โดยมีขั้นตอนในการปฏิบัติดังนี้<br>
                            (1) ติดตั้งถังแก๊สออกซิเจน และอเซทิลีนเข้ากับรถเข็นแล้วใช้โซ่คล้องล่ามถังไว้<br>
                            (2) ถอดฝาครอบวาล์วหัวถังแก๊สออกทั้ง2ชนิด<br>
                            (3) เปิดพัดลมระบายอากาศ<br>
                            (4) เปิดแล้วปิดวาล์วหัวถังอย่างทันทีทันใดเพื่อไล่สิ่งสกปรกและฝุ่นละอองตรงท่อทางออก
                            การทำในลักษณะนี้เรียกว่า การ“cracking”ในการเปิด–ปิดวาล์ว
                            จะต้องยืนอ้อมอยู่ด้านหลังตรงข้ามกับทางออกของแก๊ส<br>
                            (5) ตรวจดูเกลียวท่อทางออกของถังว่าอยู่ในสภาพดีหรือไม่<br>
                            (6) ติดตั้งเกจปรับความดัน (Pressure Regulators)
                            ที่ถังออกซิเจนจะเป็นแบบเกลียวขวาหมุนตามเข็มนาฬิกา
                            ที่ถังอเซทิลีนเป็นแบบเกลียวซ้ายหมุนทวนเข็มนาฬิกา ขันให้แน่นพอเหมาะ<br>
                            (7) ตรวจปรับสกรูปรับความดันให้อยู่ในสภาพคลายออก (ไม่มีความดัน) แล้วค่อย ๆ
                            เปิดวาล์วหัวถังแล้วปรับสกรูปรับความดันให้แก๊สไหลออกเล็กน้อย แล้วปิดไว้เช่นเดิม
                            กระทำในลักษณะเดียวกันทั้งสองถัง<br>
                            (8) ต่อสายเชื่อมเข้ากับเกจปรับความดัน โดยใช้สายสีแดงสำหรับแก๊สอเซติลีน
                            และสายสีดำสำหรับแก๊สออกซิเจน<br>
                            (9) ปรับสกรูปรับความดันให้แก๊สไหลออกเพื่อไล่สิ่งสกปรกในสายท่ออีกครั้ง<br>
                            (10) ต่อสายเชื่อมเข้ากับหัวเชื่อม โดยใช้สายสีแดงต่อเข้ากับท่อAcctเกลียวซ้ายหมุนทวนเข็มนาฬิกา
                            สายสีดำต่อเข้ากับท่อOxyเกลียวขวาหมุนตามเข็มนาฬิกา<br>
                            (11) เลือกหัวเชื่อม (Tip) ให้ได้ขนาดเหมาะสมกับความหนาของแผ่นเหล็กที่ใช้เชื่อม
                            ตรวจเช็ค“O”Ringsหรือ ชีล ให้อยู่ในสภาพดีเหมาะต่อการใช้งาน<br>
                            (12) ตรวจสอบข้อต่อทุกจุดอีกครั้ง<br>
                            (13) เปิดหัวถังประมาณ1รอบ สำหรับถังแก๊สอเซติลีน สำหรับถังออกซิเจนเปิดจนหมด<br>
                            (14) เปิดวาล์วปรับความดันให้เหมาะสมต่อการใช้งาน ห้ามปรับความดันของออกซิเจนเกิน 70<br>
                            Psi และของอเซติลีนเกิน 15 Psi ในการใช้งานปกติจะปรับความดันของแก๊สทั้งสองชนิดไว้ที่ 5
                            Psi เท่านั้น<br>
                            (15) เปิดวาล์วอเซติลีนที่หัวเชื่อมประมาณ¼รอบแล้วจุดเปลวไฟด้วยspark
                            lighterแล้วเพิ่มเซติลีนจนเปลวไฟห่างจากปลายหัวเชื่อมพอสมควร ประมาณ 3มม.<br>
                            (16) เปิดวาล์วออกซิเจนแล้ว ค่อย ๆ ปรับเปลวไฟจนมีลักษณะเป็นสีฟ้าอยู่แกนกลาง
                            โดยมีเปลวสีเหลืองอ่อนอยู่ภายนอก การปรับเปลวไฟกระทำให้เหมาะสมกับการเชื่อมในแต่ละลักษณะงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เทคนิคการเชื่อมโดยใช้แก๊ส มี 2 วิธีหลัก คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) วิธีเชื่อมจากซ้ายไปขวา
                            เหมาะสำหรับคนถนัดซ้าย การเชื่อมจะเริ่มจากซ้ายมือไปยังขวามือ
                            ลวดเชื่อมจะอยู่ระหว่างรอยเชื่อมกับด้ามเชื่อม เหล็กที่ใช้เชื่อมควรมีความหนามากกว่า 5 mm<br>

                            ข้อดี
                            ใช้ลวดเชื่อมน้อย
                            เชื่อมได้เร็ว เพราะลวดเชื่อมไม่บังแนวรอยเชื่อม
                            ไม่สิ้นเปลืองแก๊ส เพราะการเชื่อมทำได้เร็ว
                            ไม่สูญเสียคุณสมบัติทางกลจากการเชื่อม
                            เกิดการออกซิไดซ์น้อย<br>

                            (2) วิธีเชื่อมจากขวาไปซ้าย
                            เหมาะสำหรับคนถนัดขวาเริ่มทำการเชื่อมจากขวาไปซ้าย
                            ลวดเชื่อมจะอยู่หน้าเปลวไฟด้านเชื่อมอยู่ระหว่างรอยเชื่อมกับลวดเชื่อม
                            เหล็กที่ใช้เชื่อมควรมีความหนาน้อยกว่า 5 mm<br>

                            ข้อเสีย
                            ลวดเชื่อมจะบังรอยเชื่อมและต้องยกลวดเชื่อมตลอดเวลาเพื่อดูรอยเชื่อม
                            การเชื่อมทำได้ช้า
                            เกิดการออกซิไดซ์ เมื่อยกลวดเชื่อมขึ้นบ่อย ๆ หรือลวดเชื่อมหมด
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
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/ความปลอดภัยในการเชื่อม-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ความปลอดภัยในการเชื่อม</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            ความปลอดภัยในงานเชื่อมไฟฟ้ามีความจำเป็นที่สุดที่จะต้องเรียนรู้ก่อนลงมือทำการเชื่อมเนื่องจากอันตรายจากการเชื่อมเกิดได้หลายสาเหตุและอันตรายที่เกิดขึ้นอาจรุนแรงถึงกับทำลายทรัพย์สินหรือทำให้เสียชีวิตได้ดังนั้นผู้ที่จะทำการเชื่อมจึงจำเป็นที่รู้สาเหตุและป้องกันอันตรายที่จะไม่ให้เกิดขึ้นได้
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="ความปลอดภัยในการเชื่อม">
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
                            เพื่อให้ผู้เข้ารับการอบรมมีทักษะ ความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อม
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการอบรมสามารถความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อมได้อย่างมีประสิทธิภาพ
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            เพื่อให้ผู้เข้ารับการอบรมสามารถในการประเมินความเสี่ยงด้านความปลอดภัยในการทำงาน
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