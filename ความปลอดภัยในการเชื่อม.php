<?php include('header_front.php'); ?>

<?php 
    $id_training = 156;//ความปลอดภัยในการเชื่อม

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
            <h2 class="text-center"><b>ความปลอดภัยในการเชื่อม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (2).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ความปลอดภัยในการทํางานเกี่ยวกับการเชื่อม นับเป็นความสําคัญอย่างยิ่ง
                                เพราะฉะนั้นผู้เชื่อมต้องทําการศึกษา
                                และหาทางป้องกันในเรื่องอันตรายที่จะเกิดจากกระบวนการเชื่อมต่างๆ
                                ผู้ที่ทํางานโดยไม่คํานึงถึงความปลอดภัย มักจะประสบกับอุบัติเหตุเสมอ
                                ซึ่งบางครั้งอาจรุนแรงถึงขั้นเสียชีวิต หรือไม่ก็ทรัพย์สมบัติเสียหาย
                                ซึ่งนับเป็นการสูญเสียทั้งเงินและเวลา
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
                                การเชื่อม MIG
                                เป็นขนวนการเชื่อมที่นำมาทดแทนการเชื่อมด้วยลวดเชื่อมหุ้มฟลักซ์ที่สามารถเชื่อมโลหะต่างๆ
                                ได้หลายชนิด ไดยเฉพาะอลูมิเนียมหนา Metal Inert Gas (MIG) และขบวนการเชื่อม MIG
                                นี้ได้พัฒนาไปอย่างไม่หยุดยั้งทำให้สามารถเชื่อมได้ทั้งชนิดที่ควบคุมการเชื่อมด้วยมือ
                                และด้วยระบบอัตในมัติ
                                การเชื่อม MIG เป็นขนวนการเชื่อมที่ห้รับความร้อนจากการอาร์กระหว่างลวดเชื่อม (consumable
                                electrode) กับขึ้นงาน
                                สำหรับลวดเชื่อมที่ใช้เปีนลวดเชื่อมเปลือยแข็งที่ส่งป้อบอย่งต่อเนื่องไปยังบริเวณอาร์กและทำหน้าที่เป็นโลหะเดิมลงยังบ่อหลอดละลายอีกด้วย
                                บริเวณบ่อหลอมละลายจะถูกปกคลุมไว้ด้วยแก๊สปกคลุมไม่ให้เกิดการรวมตัวกับอากาศ
                                ซึ่งอาจจะเป็นแก๊สบริสุทธิ์ หรือแก๊สผสมกี่ได้
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (3).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ความปลอดภัยในการเชื่อม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรความปลอดภัยในการเชื่อม
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="441" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery10.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        กระบวนการเชื่อมต่างๆ ผู้ที่ทํางานโดยไม่คํานึงถึงความปลอดภัย มักจะประสบกับอุบัติเหตุเสมอ
                        ซึ่งบางครั้ง อาจรุนแรงถึงขั้นเสียชีวิต หรือไม่ก็ทรัพย์สินเสียหาย ซึ่ง
                        นับเป็นการสูญเสียทั้งเงินและเวลา การเชื่อมโลหะชนิดหนึ่งที่
                        ใช้ไฟฟ้าเป็นแหล่งกําเนิดเพื่อใช้สร้างอาร์คไฟฟ้าระหว่างลวดเชื่อมและฐานโลหะ
                        แหล่งพลังงานสามารถเป็นได้ทั้งไฟฟ้า กระแสตรง (DC) หรือ ไฟฟ้ากระแสสลับ (AC)
                        และใช้ได้ทั้งแบบขั้วเชื่อมและลวดเชื่อม และการเชื่อมโลหะแบบใช้แก๊ส แบบหลอมเหลว โดยใช้ความร้อนจาก
                        เชื้อเพลิงซึ่งเป็นแก๊สผสมระหว่างแก๊สอะเซทิลีนกับแก๊สออกซิเจนบริสุทธิ์ เปลวไฟจากการ
                        เผาไหม้จะเกิดความร้อนในปริมาณสูง การเชื่อมชนิดนี้ต้องใส่อุปกรณ์ป้องกันแก๊ส ไอระเหย และขี้ เชื่อม
                        ความปลอดภัยในการทํางานเกี่ยวกับการเชื่อม นับเป็นความสําคัญอย่างยิ่ง เพราะผู้เชื่อมต้องทํา
                        การศึกษา และหาทางป้องกันในเรื่องอันตรายที่จะเกิด<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีทักษะ ความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อม<br>
                        2.
                        เพื่อให้ผู้เข้ารับการอบรมสามารถความรู้ความเข้าใจความปลอดภัยเกี่ยวกับงานเชื่อมได้อย่างมีประสิทธิภาพ<br>
                        3. เพื่อให้ผู้เข้ารับการอบรมสามารถในการประเมินความเสี่ยงด้านความปลอดภัยในการทํางาน<br><br>
                        หัวข้อการอบรม<br>
                        1. การสร้างพื้นฐานความเข้าใจเกี่ยวกับอันตรายจากงานเชื่อมแบบเชื่อมไฟฟ้าและการเชื่อมแก๊ส<br>
                        1.1 อันตรายที่เกิดจากการอาร์ก<br>
                        1.2 อันตรายที่เกิดจากไฟฟ้าในงานเชื่อม<br>
                        1.3 อันตรายที่เกิดจากการลุกไหม้
                        การระเบิด<br>
                        1.4 อันตรายที่เกิดจากพลังงานรังสี<br>
                        1.5 อันตรายที่เกิดขึ้นภายหลังการทําความสะอาดงานเชื่อมหรือแนวเชื่อม<br>
                        2. หลักการระบายอากาศเพื่อความปลอดภัยในงานเชื่อมไฟฟ้าและแก๊ส<br>
                        3. อุปกรณ์ป้องกันอันตรายในงานเชื่อม<br>
                        4. หลักการประเมินความเสี่ยงด้านความปลอดภัยในการทํางาน<br>
                        5. Workshop การประเมินความเสี่ยงในงานเชื่อม
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
                    ความปลอดภัยในการเชื่อม
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
                            <h5><b>เครื่องเชื่อมไฟฟ้าตามลักษณะพื้นฐาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การเชื่อมไฟฟ้ามีชื่อเรียกเต็มว่าการเชื่อมไฟฟ้าด้วยลวดเชื่อมหุ้มฟลักซ์ใช้สัญลักษณ์ SMAW
                            (Shield Metal Arc Welding)
                            หมายถึงกระบวนการเชื่อมที่ได้รับความร้อนจากการอาร์กระหว่างลวดเชื่อมกับชิ้นงานความร้อนที่เกิดจากการอาร์กสูงประมาณ
                            6,000°F (3,316 °C)
                            เพื่อหลอมเหลวโลหะให้ติดกันทำให้ชิ้นงานกับลวดเชื่อมที่บริเวณการอาร์กรวมตัวกันเป็นเนื้อเดียวกันคือรอยเชื่อม
                            ส่วนสารพอกหุ้มหรือที่เรียกว่าฟลักซ์ (Flux)
                            เมื่อได้รับความร้อนจะกลายเป็นควันปกคลุมรอยเชื่อมป้องกันแก๊สออกซิเจนเข้าไปรวมตัวกับนํ้าโลหะเหลวและฟลักซ์จะทำหน้าที่อีกอย่างคือดึงสิ่งสกปรกหรือสารมลทินขึ้นมาจากนํ้าโลหะเมื่อเย็นตัวจะกลายฟลักซ์จะแข็งและเปราะเรียกว่าสแลก
                            (Slag)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมไฟฟ้าควรมีลักษณะดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            - ขนาดแรงเคลื่อนไฟฟ้าอยู่ระหว่าง50 – 80 โวลต์<br>
                            - กระแสไฟเชื่อมสูงแต่แรงเคลื่อนไฟฟ้าตํ่า<br>
                            - สามารถควบคุมขนาดของกระแสเชื่อมได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมชนิดกระแสไฟฟ้าคงที่ (Constant Current)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            เครื่องเชื่อมชนิดนี้ใช้กับเครื่องเชื่อมธรรมดาที่ใช้ลวดเชื่อมที่มีฟลักซ์หุ้มเครื่องเชื่อมทิก
                            (Tig) เครื่องเชื่อมที่ใช้กับลวดเชื่อมคาร์บอนอาร์ก
                            เครื่องเชื่อมที่ใช้กับลวดเชื่อมเซาะร่องและเครื่องเชื่อมที่ใช้กับการเชื่อมสลักอาร์ก (Arc Stud
                            Welding) เครื่องเชื่อมชนิดกระแสไฟฟ้าคงที่จะมีแรงเคลื่อนไฟฟ้าสูงสุดเมื่อไม่มีกระแสไฟฟ้า
                            (กระแสไฟฟ้าเป็นศูนย์)
                            และแรงเคลื่อนไฟฟ้าจะลดลงเมื่อกระแสไฟเชื่อมเพิ่มขึ้นภายใต้การเชื่อมปกติแรงเชื่อมภายในวงจรอยู่ในช่วง
                            20 – 40 โวลต์ในขณะที่แรงเคลื่อนไฟฟ้าวงจรเปิดในช่วง 60 – 80
                            โวลต์เครื่องเชื่อมชนิดกระแสไฟฟ้าคงที่มีทั้งชนิดกระแสไฟฟ้าตรงและกระแสไฟฟ้าสลับหรือมีทั้งกระแสไฟฟ้าตรงและกระแสไฟฟ้าสลับรวมกันเครื่องเชื่อมชนิดกระแสไฟฟ้าคงที่นี้เมื่อนำไปใช้กับกระบวนการเชื่อมแบบลวดเชื่อมที่มีฟลักซ์หุ้มสามารถเปลี่ยนแปลงกระแสไฟเชื่อมได้โดยการเปลี่ยนแปลงระยะอาร์กโดยไม่ต้องตั้งกระแสไฟเชื่อมที่เครื่องเชื่อมใหม่ความสัมพันธ์ของแรงเคลื่อนไฟฟ้าและกระแสไฟเชื่อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมชนิดแรงเคลื่อนไฟฟ้าคงที่</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เครื่องเชื่อมไฟฟ้าชนิดกระแสไฟฟ้าคงที่และชนิดแรงเคลื่อนไฟฟ้าคงที่ต้องมีต้นกำลังในการผลิตกระแสไฟฟ้าและแรงเคลื่อนไฟฟ้าที่ใช้ในการเชื่อมปัจจุบันได้มีการพัฒนาเครื่องเชื่อมไฟฟ้าให้เหมาะกับการใช้งานในแต่ละประเภทของงานซึ่งแบ่งออกเป็น
                            4 ประเภทดังนี้<br>
                            (1) เครื่องเชื่อมแบบหม้อแปลงไฟฟ้า (Transformer Welding Machine)<br>
                            (2) เครื่องเชื่อมแบบเจอเนเรเตอร์ (Generator Welding Machine)<br>
                            (3) เครื่องเชื่อมแบบหม้อแปลง-เครื่องเรียงกระแส (Transformer RectifierWeldingMachine)<br>
                            (4) เครื่องเชื่อมแบบอินเวอร์เตอร์ (Inverter Welding Machine)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมแบบหม้อแปลงไฟฟ้า (Transformer Welding Machine)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            เครื่องเชื่อมแบบนี้เป็นเครื่องที่ผลิตกระแสไฟฟ้าสลับออกมาใช้ในการเชื่อมโดยมีหม้อแปลงไฟฟ้า
                            (Transformer)
                            เป็นส่วนประกอบที่สำคัญนิยมใช้กันมากเนื่องจากมีราคาถูกนํ้าหนักเบาและมีขนาดเล็กกว่าเครื่องเชื่อมแบบอื่นๆดังแสดงในรูปที่
                            1.18
                            หลักการทำงานของเครื่องเชื่อมแบบหม้อแปลงไฟฟ้าโดยนำกระแสไฟฟ้าที่มีแรงเคลื่อนไฟฟ้าสูงป้อนเข้าสู่ขดลวดปฐมภูมิ
                            (Primary) และจ่ายออกทางขดลวดทุติยภูมิ (Secondary) ซึ่งจะเป็นแรงเคลื่อนไฟฟ้าตํ่า
                            กระแสไฟเชื่อมสูง
                            ส่วนหม้อแปลงในเครื่องเชื่อมก็เหมือนกันกับหม้อแปลงไฟฟ้าทั่วไปลักษณะภายในของเครื่องเชื่อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ส่วนประกอบที่สำคัญของเครื่องเชื่อมแบบหม้อแปลงไฟฟ้า มีดังนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            - แกนเหล็ก เป็นแผ่นเหล็กที่ผสมสารซิลิกอนบางๆ อัดเป็นชั้น
                            มีฉนวนซึ่งทำจากกระดาษหรือวานิชกั้นระหว่างแผ่นเพื่อไม่ให้เส้นแรงแม่เหล็กที่เกิดขึ้นเรียงกันได้ดีไม่ให้เกิดกระแสไหลวนและทำให้ไม่เกิดความร้อนในตัวเครื่องเชื่อม<br>
                            - ขดลวดปฐมภูมิ
                            เป็นขดลวดขนาดเล็กพันอยู่รอบแกนเหล็กซึ่งมีจำนวนรอบมากปลายขดลวดทั้งสองเส้นจะต่อเข้ากับแหล่งกระแสไฟฟ้าจากภายนอกเมื่อกระแสไฟฟ้าไหลผ่านขดลวดจะทำให้เกิดเส้นแรงแม่เหล็กไหลวนรอบแกนเหล็กนั้น<br>
                            - ขดลวดทุติยภูมิ
                            เป็นขดลวดเส้นโตกว่ามีจำนวนพันรอบแกนน้อยกว่าขดลวดปฐมภูมิที่ขดลวดทุติยภูมิที่พันรอบอยู่นั้นจะมีเส้นแรงแม่เหล็กซึ่งเกิดจากการเหนี่ยวนำของขดลวดปฐมภูมิไหลผ่านทำให้เกิดความต้านทานในตัวนำตํ่าและมีกระแสไฟฟ้าสูงซึ่งเป็นกระแสไฟฟ้าที่ใช้ในการเชื่อม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การปรับกระแสไฟของเครื่องเชื่อมแบบหม้อแปลงไฟฟ้ามีด้วยกัน 2 แบบ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            คือการปรับด้วยวิธีกลโดยมีเครื่องปรับกระแสไฟแบบต่อเนื่อง (Continuous Output Control)
                            ซึ่งเป็นแบบเคลื่อนที่แกนเหล็กหรือเคลื่อนที่ขดลวดในหม้อแปลงอีกวิธีหนึ่งคือการปรับด้วยอุปกรณ์ไฟฟ้าวิธีนี้เป็นวิธีที่ทันสมัยโดยต่อวงจรไฟฟ้าควบคุมเข้ากับหม้อแปลงไฟฟ้าซึ่งวงจรนี้จะควบคุมกระแสไฟที่ออกการปรับกระแสไฟทำได้โดยการหมุนปุ่มขนาดเล็กที่หน้าปัดของเครื่องเชื่อมสามารถปรับกระแสไฟได้อย่างต่อเนื่องจากตํ่าสุดถึงสูงสุด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมแบบเจนเนเรเตอร์ (Generator Welding Machine)</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            เครื่องเชื่อมแบบเจอเนเรเตอร์คือเครื่องเชื่อมไฟฟ้าที่ผลิตกระแสไฟฟ้าตรงมาใช้ในการเชื่อมกระแสไฟเชื่อมที่ผลิตได้
                            แตกต่างกันตามขนาดของเครื่องแบ่งเป็น 2
                            แบบคือแบบที่ใช้มอเตอร์ไฟฟ้าเป็นต้นกำลังและแบบที่ใช้เครื่องยนต์เป็นต้นกำลังโดยเครื่องยนต์ที่ใช้นี้มีทั้งเครื่องยนต์แก๊สโซลีนและเครื่องยนต์ดีเซล
                            เหมาะสำหรับการใช้งานในที่ไม่มีกระแสไฟฟ้าใช้สามารถเคลื่อนย้ายได้สะดวกเครื่องยนต์จะระบายความร้อนด้วยอากาศหรือนํ้าซึ่งจะมีทั้งกระแสไฟฟ้าตรงและกระแสไฟฟ้าสลับ
                            ในปัจจุบันมีเครื่องเชื่อมจำนวนมากใช้กับระบบไฟฟ้า 220 โวลต์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมแบบผสมหม้อแปลง–เครื่องเรียงกระแส
                                    (Transformer –Rectifier Welding Machine)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            เป็นเครื่องเชื่อมแบบหม้อแปลงจะผลิตเฉพาะกระแสไฟฟ้าสลับเท่านั้นซึ่งจะให้ประสิทธิภาพการเชื่อมดีเฉพาะลวดเชื่อมบางชนิดเท่านั้นแต่ไม่เหมาะกับลวดเชื่อมอีกหลายชนิด
                            เครื่องเชื่อมชนิดนี้จะมีเครื่องเรียงกระแส (Rectifier)
                            ซึ่งทำหน้าที่เปลี่ยนกระแสไฟฟ้าสลับให้เป็นกระแสไฟฟ้าตรงซึ่งเป็นส่วนหนึ่งของเครื่องเชื่อมได้แก่
                            ไดโอด (Diode)
                            ทำหน้าที่จำกัดให้อิเล็กตรอนไหลไปในทิศทางเดียวกันคือจากขั้วลบไปขั้วบวกเครื่องเรียงกระแสที่ใช้กับเครื่องเชื่อมมีทั้งแบบซิลิกอนไดโอดเรกติไฟร์และซิลิเนียมไดโอดเรกติไฟร์ซิลิกอนไดโอดจะมีเกลียวติดแน่นกับแผ่นระบายความร้อนซึ่งมีขนาดเล็กและนิยมใช้กันมาก
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องเชื่อมแบบอินเวอร์เตอร์ (Inverter Welding Machine)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            เป็นเครื่องเชื่อมที่ได้พัฒนาล่าสุดขนาดเล็ก
                            นํ้าหนักเบาเคลื่อนย้ายได้สะดวกการทำงานของระบบอินเวอร์เตอร์คือแปลงกระแสไฟฟ้าสลับมาเป็นกระแสไฟฟ้าตรงแล้วเปลี่ยนความถี่จาก
                            50 เฮิร์ต เหลือเพียง 5–20 เฮิร์ต
                            เป็นกระแสไฟฟ้าสลับเมื่อกระแสไฟฟ้าสลับที่มีความถี่สูงผ่านหม้อแปลงแล้วจึงเรียงกระแสไฟฟ้าสลับให้เป็นกระแสไฟฟ้าตรงและทำให้เดินเรียบด้วยเครื่องเชื่อมแบบอินเวอร์เตอร์มีทั้งกระแสไฟฟ้าตรงและกระแสไฟฟ้าสลับลักษณะของเครื่องเชื่อมแบบอินเวอร์เตอร์
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