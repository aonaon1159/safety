<?php include('header_front.php'); ?>
<?php 
    $id_training = 612;//การขับรถโฟล์คลิฟท์อย่างปลอดภัยและถูกวิธี

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

    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%ไฟฟ้า%" OR tags LIKE "%cpr%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

.a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
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
            <h2 class="text-center"><b>อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า (1).jpg" alt="อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                            <b>อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า 2564 - 2565</b> พร้อมใบเซอร์ <a class="a-link d-inline" href="https://xn--c3cugh2av8euch0i4b2c.com/index"> เซฟตี้อินไทย </a> ได้รับใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน
                            ให้บริการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า ความปลอดภัยในการทํางานเกี่ยวกับไฟฟ้า ppt ข้อบังคับ การ ทำงาน เกี่ยวกับไฟฟ้าอบรมไฟฟ้าออนไลน์หลักสูตรอบรมไฟฟ้า 2565ความปลอดภัยในการทํางานเกี่ยวกับไฟฟ้า ภาษาอังกฤษอบรมความปลอดภัยในการทํางานเกี่ยวกับไฟฟ้า กฎหมายอบรมความปลอดภัยในการทํางานเกี่ยวกับไฟฟ้า pptความ ปลอดภัย ในการ ทํา งานเกี่ยวกับไฟฟ้า 2558หลักสูตรอบรมไฟฟ้า 2564
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
                            <b>อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า </b> <a class="a-link d-inline" href="https://bit.ly/3a3tZVU">กฎกระทรวงกำหนดมาตรฐานในการบริหารจัดการและดำเนินการด้านความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับไฟฟ้า พ.ศ. 2558</a> ของกระทรวงแรงงานได้กำหนดให้ลูกจ้างที่ปฏิบัติงานเกี่ยวกับไฟฟ้าเข้ารับการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าโดยนายจ้างต้องดำเนินการตามประกาศกรมสวัสดิการและคุ้มครองแรงงานเรื่องหลักเกณฑ์วิธีการและเงื่อนไขการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า (2).jpg" alt="อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า ฟรี 2565">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h1 class="text-center"><b class="head_nav">อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า</b></h1>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า พร้อมใบเซอร์ หลังผ่านการอบรม
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="<?php echo $id_training;?>" href="#tab1" class="active" role="tab"
                                    data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="11,44"
                                    data-id_training="<?php echo $id_training;?>" href="#tab2" role="tab"
                                    data-toggle="tab">
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

    <section class="p-b-80 p-t-80">
        <?php include('layout/standard.php'); ?>
    </section>
    
    <section class="white-bg p-t-80">
        <div class="container_small">
            <h2 class="text-center" data-aos="fade-down" data-aos-duration="1000" ><b>
                    เซฟตี้อินไทย ได้รับใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <a class="venobox" data-gall="cert" href="img/cert/ใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน.jpg">
                        <div class="text-center" data-aos="fade-down" data-aos-duration="1500"> 
                            <img title="ใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน.jpg" class="box_shadow" style="height:auto;width:60%" src="img/cert/ใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน.jpg" alt="ใบอนุญาตจากกรมสวัสดิการคุ้มครองแรงงาน.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 text-center m-auto">
                            <h5>
                                ให้บริการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg ">
        <div class="row p-t-80 m-0">
            <div class="col-lg-6 col-md-12 col-12 bg-principle">
                <img title = width: 100%; height: auto; class="lazy"
                    data-src="<?php echo $base_url;?>/img/bg/bg-principle.jpg" alt="อบรม ความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        พลังงานไฟฟ้าล้วนแต่เป็นต้นกำลังในการขับเคลื่อน แต่ “ไฟฟ้า” เป็นพลังงานรูปหนึ่งซึ่งเป็นการแยกตัวออกมาหรือการเคลื่อนที่ของอิเล็กตรอน หรือโปรตรอนหรืออนุภาคอื่นที่มีคุณสมบัติที่ไม่สามารถมองเห็นได้เหมือนพลังงานอื่นๆ ซึ่งอาจก่อให้เกิดอันตรายกับผู้ใช้งานที่ไม่มีความรู้ความเข้าใจได้ถึงขั้นบาดเจ็บและเสียชีวิตได้

                        <br> <br>กฎกระทรวงกำหนดมาตรฐานในการบริหารจัดการและดำเนินการด้านความปลอดภัยอาชีวอนามัยและสภาพแวดล้อมในการทำงานเกี่ยวกับไฟฟ้าพ.ศ. 2558 ของกระทรวงแรงงานได้กำหนดให้ลูกจ้างที่ปฏิบัติงานเกี่ยวกับไฟฟ้าเข้ารับการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าโดยนายจ้างต้องดำเนินการตามประกาศกรมสวัสดิการและคุ้มครองแรงงานเรื่องหลักเกณฑ์วิธีการและเงื่อนไขการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าสำหรับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า และให้นายจ้างจัดทำทะเบียนรายชื่อผู้ที่ผ่านการฝึกอบรมวันเวลาที่ฝึกอบรมพร้อมรายชื่อวิทยากรเก็บไว้ณสถานประกอบกิจการหรือสำนักงานของนายจ้างพร้อมที่จะให้พนักงานตรวจความปลอดภัยตรวจสอบได้ตลอดเวลาและให้แจ้งทะเบียนรายชื่อผู้ที่ผ่านการฝึกอบรมวันเวลาที่ฝึกอบรมพร้อมรายชื่อวิทยากรต่อพนักงานตรวจความปลอดภัยในเขตพื้นที่รับผิดชอบภายในสิบห้าวันนับแต่วันที่เสร็จสิ้นการฝึกอบรมความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าให้กับลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับไฟฟ้า

                        ต้องมีระยะเวลาการฝึกอบรมไม่น้อยกว่า 3 ชั่วโมงและอย่างน้อยต้องมีหัวข้อวิชาดังต่อไปนี้ <br>

                        1. กฎหมายความปลอดภัยในการทำงานเกี่ยวกับไฟฟ้าและความรู้พื้นฐานเกี่ยวกับระบบไฟฟ้า<br>

                        2. สาเหตุและการป้องกันอันตรายจากไฟฟ้าและอุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล<br>

                        3. การให้ความช่วยเหลือผู้ประสบอันตรายจากไฟฟ้าและการปฐมพยาบาลเบื้องต้น<br><br>

                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้ารับการอบรมมีความรู้ในการปฏิบัติงานเกี่ยวกับไฟฟ้าได้อย่างปลอดภัย<br>

                        2. เพื่อให้ผู้เข้าอบรมรู้อันตรายจากไฟฟ้าและหลักการป้องกันอันตายเกี่ยวกับไฟฟ้า<br>

                        3. เพื่อให้ผู้เข้ารับการอบรมมีความรู้และได้ฝึกปฏิบัติในการช่วยเหลือชีวิตผู้ประสบอันตรายจากไฟฟ้าได้อย่างปลอดภัยทั้งผู้ประสบอันตรายและผู้ช่วยเหลือ<br>
                        
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

    <section>
        <?php include('layout/prepare.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/received.php'); ?>
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
                            <h5><b>อันตรายจากไฟฟ้า คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                        การแบ่งลักษณะของอันตรายที่อาจจะเกิดขึ้น มี 2 ลักษณะ <br>

                    1. ไฟฟ้าดูดเนื่องจากร่างกายไปแตะต้อง หรือต่อเข้ากับวงจรไฟฟ้า ทำให้มีกระแสไฟไหลผ่านเข้าในร่างกายและถ้าไฟฟ้าไหลผ่านอวัยวะที่สำคัญก็อาจทำให้เสียชีวิตได้หากกระแสไฟมีปริมาณมากพอ ความสัมพันธ์ของกระแสไฟฟ้าและปฏิกิริยาการตอบสนองของร่างกายต่อกระแสไฟฟ้า <br><br>
                    2. เพลิงไหม้อัคคีภัยที่เกิดจากไฟฟ้ามีสาเหตุ 2 ประการ คือ ประกายไฟและความร้อนที่สูงผิดปกติ ซึ่งตามทฤษฎีการเกิดเพลิงไหม้นั้น จะต้องมีองค์ประกอบครบ 3 อย่าง คือ เชื้อเพลิง แหล่งความร้อน และออกซิเจน ดังนั้น การป้องกันไฟไหม้ที่เกิดจากกระแสไฟฟ้า จึงต้องขจัดองค์ประกอบอย่างใดอย่างหนึ่งหรือทั้งสามอย่างดังกล่าวออก โดยเฉพาะการขจัดแหล่งความร้อน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การทดสอบมาตรฐานความปลอดภัยทางไฟฟ้า คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                        การทดสอบที่เกี่ยวกับมาตรฐานความปลอดภัยทางไฟฟ้า เป็นการทดสอบที่มีจุดประสงค์เพื่อประเมินความเสี่ยงจากอุบัติเหตุต่าง ๆ ที่เกิดจากไฟฟ้าหลักการนำสินค้าไปใช้จริง เช่น ไฟฟ้ารั่ว ไฟฟ้าช็อต หรือไฟฟ้าลัดวงจร ซึ่งการทดสอบมาตรฐานความปลอดภัยทางไฟฟ้าของสินค้านั้น จะเป็นตัวช่วยป้องกันข้อผิดพลาดทางการผลิต ให้คุณได้มั่นใจว่าสินค้าที่วางขายจะไม่เกิดเหตุขัดข้อง จนกลายเป็นประเด็นใหญ่โตที่นำความเสียหายมาให้บริษัทได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความสำคัญของการทดสอบความปลอดภัยทางไฟฟ้า</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                        หนึ่งในปัจจัยที่จะทำให้ผู้บริโภคผลิตภัณฑ์เครื่องใช้ไฟฟ้าเกิดความเชื่อมั่นในแบรนด์นั้น จะต้องเกิดจากมาตรฐานความปลอดภัยทางไฟฟ้าที่เชื่อถือได้ และผ่านการทดสอบมาอย่างแม่นยำ ด้วยความที่ตลาดเครื่องใช้ไฟฟ้ายังคงมีการเติบโตอย่างต่อเนื่อง และยังคงเป็นที่ต้องการของผู้บริโภคอย่างสม่ำเสมอ จึงไม่แปลกที่แต่ละแบรนด์จะมีการแข่งขันที่สูงตาม ซึ่งแบรนด์ไหนที่ได้รับเครื่องหมายการันตีว่าผ่านมาตรฐานความปลอดภัยทางไฟฟ้า (Electrical Safety) จะยิ่งช่วยเสริมความมั่นใจในแง่ของการใช้งาน คุณภาพ และความปลอดภัยแก่ผู้บริโภคได้อย่างยั่งยืน 
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินและทดสอบความปลอดภัยของอุปกรณ์ไฟฟ้า</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                        ทุก ๆ การทดสอบมาตรฐาน จะต้องมีข้อประเมินที่ถูกกำหนดไว้เพื่อยึดเป็นหลักเกณฑ์ในการตรวจสอบมาตรฐานได้อย่างเหมาะสม เช่นเดียวกับการทดสอบมาตรฐานความปลอดภัยของอุปกรณ์ไฟฟ้า ที่จะต้องผ่านการทดสอบสำคัญ ๆ เพื่อความมั่นใจในประสิทธิภาพการใช้งานอย่างเหมาะสม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การทดสอบแรงดันไฟฟ้าสูง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                        เป็นการตรวจวัดความสามารถของผลิตภัณฑ์ไฟฟ้าในการทนต่อแรงดันไฟฟ้าระดับสูงที่เกิดขึ้นระหว่างวงจรไฟฟ้าของผลิตภัณฑ์และกราวด์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การทดสอบค่ากระแสรั่วไหล </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                        เป็นการประเมินเพื่อให้มั่นใจว่า กระแสไฟฟ้าที่ไหลเวียนระหว่างแหล่งกระแสสลับและกราวด์ไม่เกินกว่าค่าที่กำหนดในขณะที่ใช้งาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การทดสอบความต้านทานฉนวน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                        เป็นการตรวจวัดคุณภาพของฉนวนไฟฟ้าที่ใช้ในการผลิตสินค้าต่าง ๆ เพราะค่าความต้านของฉนวนนี้ถ้าหากมีค่าต่ำกว่าที่กำหนด อาจทำให้เกิดความเสี่ยงต่อการเกิดไฟฟ้าลัดวงจรขณะใช้งานได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การทดสอบความต่อเนื่องของสายกราวด์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                        เป็นการตรวจสอบว่าระหว่างพื้นผิวโลหะที่ผู้ใช้สัมผัสได้กับสายกราวด์ระบบไฟฟ้ามีการเชื่อมต่อกันหรือไม่
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
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