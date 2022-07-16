<?php include('header_front.php'); ?>

<?php 
    $id_training = 455;//การยศาสตร์เพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย

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
            <h2 class="text-center"><b>การยศาสตร์เพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (9).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การยศาสตร์
                                (Ergonomics)เป็นการประยุกต์ใช้วิชาการทางด้านชีววิทยาของมนุษย์และวิศวกรรมศาสตร์ให้เข้ากับคนงานและสิ่งแวดล้อมในการทำงานของเขา
                                เพื่อให้คนงานเกิดความพึงพอใจในการทำงาน และได้ผลผลิตสูงสุด
                                จึงเกี่ยวข้องกับการปรับงานให้เข้ากับความสามารถทั้งทางด้านร่างกายและจิตใจ
                                รวมทั้งข้อจำกัดของคนงาน การเรียนรู้ความสามารถ
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
                                และข้อจำกัดของมนุษย์ เพื่อใช้ประโยชน์ในการออกแบบทางวิศวกรรม เช่น เครื่องมือ เครื่องจักร
                                อาคาร ผลิตภัณฑ์ สภาพแวดล้อม รวมถึงการออกแบบลักษณะและวิธีการทำงาน
                                ให้เกิดความเหมาะสมกับมนุษย์ทั้งทางร่างกายและจิตใจ ให้มากที่สุด
                                เพื่อให้มนุษย์สามารถทำงานได้ดีขึ้น เร็วขึ้น และมีความปลอดภัยมากขึ้น
                                การใช้การยศาสตร์จึงส่งผลเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย
                                อันจะส่งผลต่อประสิทธิภาพของบุคลากรและองค์กรต่อไป
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (18).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การยศาสตร์เพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการยศาสตร์เพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="456" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                alt="" </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การยศาสตร์
                        (Ergonomics)เป็นการประยุกต์ใช้วิชาการทางด้านชีววิทยาของมนุษย์และวิศวกรรมศาสตร์ให้เข้ากับคนงานและสิ่งแวดล้อมในการทำงานของเขา
                        เพื่อให้คนงานเกิดความพึงพอใจในการทำงาน และได้ผลผลิตสูงสุด
                        จึงเกี่ยวข้องกับการปรับงานให้เข้ากับความสามารถทั้งทางด้านร่างกายและจิตใจ รวมทั้งข้อจำกัดของคนงาน
                        การเรียนรู้ความสามารถ และข้อจำกัดของมนุษย์ เพื่อใช้ประโยชน์ในการออกแบบทางวิศวกรรม เช่น
                        เครื่องมือ เครื่องจักร อาคาร ผลิตภัณฑ์ สภาพแวดล้อม รวมถึงการออกแบบลักษณะและวิธีการทำงาน
                        ให้เกิดความเหมาะสมกับมนุษย์ทั้งทางร่างกายและจิตใจ ให้มากที่สุด
                        เพื่อให้มนุษย์สามารถทำงานได้ดีขึ้น เร็วขึ้น และมีความปลอดภัยมากขึ้น
                        การใช้การยศาสตร์จึงส่งผลเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย
                        อันจะส่งผลต่อประสิทธิภาพของบุคลากรและองค์กรต่อไป<br><br>

                        วัตถุประสงค์<br>
                        1) ผู้เข้ารับการอบรมได้รับความรู้
                        ความเข้าใจในหลักการด้านการยศาสตร์กับการทำงานเพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย<br>
                        2) ผู้เข้ารับการอบรมสามารถนำความรู้หลักการของกายศาสตร์ไปประยุกต์ใช้ปรับปรุงสถานที่และสภาพแวดล้อม
                        ในการทำงาน<br><br>

                        เนื้อหาการอบรม<br>
                        หัวข้อที่ 1 ความรู้ทั่วไปเกี่ยวกับ การยศาสตร์<br>
                        1.1) การยศาสตร์ คืออะไร<br>
                        1.2) การยศาสตร์ เกี่ยวกับเราอย่างไร<br>
                        1.3) องค์ประกอบของการยศาสตร์<br>
                        หัวข้อที่ 2
                        ปัจจัยด้านการยศาสตร์ที่ส่งผลกระทบต่อผู้ปฏิบัติงานและประโยชน์ของการจัดทำระบบการยศาสตร์ในการทำงาน<br>
                        หัวข้อที่ 3 ข้อกำหนดและมาตรฐานที่เกี่ยวกับการยศาสตร์<br>
                        หัวข้อที่ 4 การวิเคราะห์ปัญหาทางด้านการยศาสตร์<br>
                        หัวข้อที่ 5 การค้นหาปัญหาการยศาสตร์ในการทำงาน<br>
                        หัวข้อที่ 6 การป้องกันปัญหาทางด้านการยศาสตร์<br>
                        หัวข้อที่ 7 การประเมินท่าทางการทำงานแบ REBA<br>
                        หัวข้อที่ 8 แนวทางบริหารจัดการและแก้ไขปัญหาทางด้านการยศาสตร์<br>
                        8.1) ท่าทางการปฏิบัติงาน<br>
                        8.2) ท่ากายบริหารและการบริหารร่างกาย<br>
                        8.3) การออกแบบพื้นที่ทำงาน เพื่อให้เหมาะสมตามหลักการยศาสตร์
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
                    การยศาสตร์เพื่อเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการยศาสตร์-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการยศาสตร์-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความการยศาสตร์-03.jpg" alt="">
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
                            <h5><b>5 พฤติกรรมร้าย ทำลายกระดูก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) นั่งไขว่ห้าง
                            ก้นข้างใดข้างหนึ่งถูกดทับ เสี่ยงกระดูกคดและงอ<br>
                            (2) นั่งกอดอก
                            กระดูกคอจะยื่นไปข้างหน้า กระดูกคอผิดรูป ทำให้เกิดไมเกรน<br>
                            (3) นั่งหรือยืนหลังค่อม
                            ทำให้เกิดอาการปวดเมื่อยบริเวณหัวไหล่ และสะโพกได้<br>
                            (4) ยืนทิ้งน้ำหนักไปที่ขาข้างใดข้างหนึ่ง
                            กระดูกขาข้างที่รับน้ำหนักตัวจะเสื่อมเร็ว ทำให้ปวดขา ปวดเข่า เป็นตะคริว<br>
                            (5) นอดขดตัว
                            กระดูกสันหลังผิดรูป และทำให้เจ็บที่กล้ามเนื้อได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความหมาย Ergonomics โดยสรุป</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            เป็นศาสตร์ที่ศึกษาความสัมพันธ์ระหว่างคนกับงานและสภาพแวดล้อมในการทำงาน นำไปประยุกต์ /
                            ปรับปรุงสภาพของงานให้เหมาะสม เพื่อให้งานมีประสิทธิภาพ
                            รวมทั้งทำให้ผู้ปฏิบัติงานมีความเป็นอยู่และสุขภาพอนามัยที่ดี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความสำคัญของการยศาสตร์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ในการปฏิบัติงานที่ต้องคำนึงถึงความสมดุลระหว่างคนซึ่งเป็นผู้ปฏิบัติงาน กับงานที่ต้องปฏิบัติ
                            ตลอดจนขีดจำกัดของผู้ปฏิบัติงาน และความสำคัญของสภาวะและสิ่งแวดล้อมในการทำงาน
                            ซึ่งล้วนเป็นสิ่งที่มีความสำคัญที่จะต้องพิจารณาสำหรับการจัดและปรับปรุงสภาพงานนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>องค์ประกอบของการยศาสตร์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            องค์ประกอบของวิทยาการจัดสภาพงาน อาจจัดได้เป็นหมวดหมู่ได้ 3 กลุ่ม คือ<br>
                            (1) กลุ่มกายวิภาคศาสตร์<br>
                            -ขนาดของมนุษย์ ปกติแล้วจะมุ่งพิจารณาถึงปัญหาที่อาจเกิดจากขนาดและรูปร่างของคน
                            และท่าทางหรืออิริยาบถการทำงานของคน<br>
                            -ชีวกลศาสตร์ จะมุ่งพิจารณาถึงปัญหาที่อาจจะเกิดจากการออกแรงหรือใช้แรง ในขณะทำงานของคน<br>
                            (2) กลุ่มสรีรวิทยา<br>
                            -มุ่งพิจารณาถึงการใช้พลังงานในขณะทำงาน
                            ถ้าหากงานนั้นเป้นงานหนักพลังงานที่ใช้ไปก็ต้องมากซึ่งอาจจะก่อให้เกิดปัญหาต่อสุขภาพได้
                            เป็นต้น<br>
                            -สรีรวิทยาสิ่งแวดล้อม
                            มุ่งพิจารณาถึงผลกระทบต่อสุขภาพที่อาจจะเกิดจากการทำงานเกี่ยวข้องกับสภาพแวดล้อมทางกายภาพ เช่น
                            ความร้อน แสง เสียง ความสั่นสะเทือน เป็นต้น<br>
                            (3) กลุ่มจิตวิทยา<br>
                            -กล่าวถึงความชำนาญ เกี่ยวข้องกับความเข้าใจในลักษณะงานของบุคคล ว่าควรจะทำงานอะไร และทำอย่างไร
                            ตลอดจนการตัดสินใจในการทำงานนั้นๆ เพื่อมิให้เกิดการทำงานผิดพลาด
                            ซึ่งนอกจากจะเกิดความเสียหายต่อการผลิต อาจก่อให้เกิดอุบัติเหตุได้<br>
                            -จิตวิทยาการทำงาน จะพิจารณาถึงปัญหาด้านจิตวิทยาสังคมของบุคคลที่เกิดหรือเนื่องมาจากการทำงาน
                            โดยจะหมายรวมถึงปัญหาสภาวะด้านเวลาและสภาวะทางสังคมด้วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัจจัยเสี่ยงทางการยศาสตร์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            -ท่าทางการทำงาน (posture)<br>
                            -ความถี่ในการทำงาน (frequency)<br>
                            -แรงที่ใช้ (force / exertion)<br>
                            -น้ำหนักชิ้นงาน (weight / load)<br>
                            -ระยะเวลา (duration)<br>
                            -เครื่องมือ - เครื่องจักร (tool / machine)<br>
                            -สภาพแวดล้อม (environment)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>10 วิธีลดเสี่ยงอาการออฟฟิศซินโดรม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (1) ไม่ใช้เก้าอี้สปริงที่เอนได้ เพราะไม่มีการรองรับหลังเท่าที่ควร<br>
                            (2) ตั้งจอคอมพิวเตอร์อยู่ระดับสายตา แป้นคีย์บอร์ดอยู่ในระดับข้อศอกและข้อมือ
                            จะได้ไม่ต้องยกแขนขึ้นมาพิมพ์<br>
                            (3) นั่งเก้าอี้ให้เต็มก้น หลังตรงชิดขอบด้านในเก้าอี้ กะพริบตาบ่อยๆ พักสายตาทุก 10 นาที
                            เปลี่ยนท่าการทำงานทุก 20 นาที<br>
                            (4) ปรับอุปกรณ์สำนักงานให้สะดวกต่อการทำงาน<br>
                            (5) หาต้นไม้ในร่มมาปลูก ช่วยดูดซับสารพิษ และเป็นที่พักสายตา<br>
                            (6) เปิดหน้าต่างสำนักงาน เพื่อให้อากาศหมุนเวียนถ่ายเท อย่างน้อยตอนเช้าและตอนพักกลางวัน<br>
                            (7) ปรับอารมณ์ไม่ให้รู้สึกเครียด พยายามไม่เครียด ผ่อนคลาย หรือไปเดินเล่นสัก 10 นาที<br>
                            (8) กินอาหารให้ครบ 5 หมู่ และทานให้เป็นเวลา<br>
                            (9) หมั่นออกกำลังกาย สัปดาห์ละ 3 ครั้ง ครั้งละไม่ต่ำกว่า 30 นาที<br>
                            (10) ตรวจสุขภาพเป็นประจำทุกปี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ปัญหาการยศาสตร์ที่พบมากในสถานประกอบการณ์</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            จากการรวบรวมสถิติการประสบอันตรายหรือเจ็บป่วยเนื่องจากการทำงาน สำนักงานกองทุนเงินทดแทน
                            สำนักงานกองทุนประกันสังคม กระทรวงแรงงาน
                            พบว่าปัญหาด้านการยศาสตร์นี้ก่อให้เกิดผลกระทบต่อสุขภาพอนามัยของผู้ปฏิบัติงานในสถานประกอบการมี
                            4 ประการใหญ่ คือ<br>
                            (1) การประสบอันตรายจากการยกหรือเคลื่อนย้ายของหนัก<br>
                            (2) การประสบอันตรายจากท่าทางการทำงาน<br>
                            (3) อาการเจ็บป่วยจากการเคลื่อนย้ายของหนัก<br>
                            (4) อาการเจ็บป่วยจากท่าทางการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาเหตุที่นำไปสู่อาการบาทเจ็บจากการทำงาน</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            สภาพการทำงานไม่เหมาะสม เช่น แสงสว่าง, เสียงดัง, อุณหภูมิ, ความสั่นสะเทือน,
                            ความเร็วของเครื่องจักร, งานซ้ำซากจำเจ
                            อุปกรณ์ เครื่องจักร เครื่องมือต่างๆที่มีขนาดไม่เหมาะสมกับขนาด สัดส่วนของร่างกายผู้ปฏิบัติงาน
                            ลักษณะงานที่ทำด้วยท่าทางอิริยาบทที่ฝืนธรรมชาติ ได้แก่ งานที่ต้องมีการบิดโค้งงงอของข้อมือ
                            งอแขน การงอศอก การจับ โดยเฉพาะนิ้วมือซ้ำๆ งานที่ต้องก้มศีรษะ ก้มหลัง บิดเอี้ยวตัว
                            เอื้อมหรือยกสิ่งของขึ้นสุดแขน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การแก้ปัญหาหรือดำเนินงานด้านการยศาสตร์ที่ถูกต้อง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            การทำงานต่างๆไม่ว่าจะในหรือนอกสถานประกอบกิจการ
                            จะสามารถพบเห็นการปฏิบัติงานที่ทำให้เกิดอาการเมื่อยล้า ปวดข้อ ปวดหลัง
                            ซึ่งอาการเหล่านี้เป็นอาการที่สืบเนื่องมาจากการทำงานผิดหลักการยศาสตร์ เช่น การยกของหนัก
                            ท่าทางการนั่งทำงานกับคอมพิวเตอร์ การทำงานในฝ่ายผลิตชิ้นงานต่างๆ เป็นต้น ยกตัวอย่าง เช่น
                            ท่าทางการยกของหนักซึ่งโดยทั่วไปมักจะก้มหลังยกซึ่งถือเป็นวิธีที่ผิด!
                            ที่ถูกต้องควรจะใช้การย่อตัวแทน
                            เพราะการก้มหลังนั้นจะส่งผลเสียต่อกระดูกสันหลังเป็นต้นเหตุของอาการปวดหลัง
                            หรืออีกตัวอย่างหนึ่งคือท่าทางการใช้งานเครื่องคอมพิวเตอร์ ซึ่งจะต้องมีการจัดท่าทางในการนั่ง
                            การปรับระดับความสูงของเก้าอี้ ปรับระดับของหน้าจอ เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เทคนิคในการนั่งทำงานให้ไม่เกิดการบาดเจ็บ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) เลือกขนาดของโต๊ะ และเก้าอี้ให้เหมาะสมกับสรีระร่างกาย<br>
                            (2) เลือกเก้าอี้ที่สามารถปรับเอนได้ ความสูงได้ระดับ หากเป็นไปได้ควรมีหมอนหนุนหลัง<br>
                            (3) นั่งตัวตรงสบายๆ อย่างเกร็ง ปล่อยต้นแขนให้สบายๆ<br>
                            (4) นั่งให้เต็มเก้าอี้ และเอนหลังไปน้อยๆ เพื่อให้หลังพิงพนัก<br>
                            (5) นั่งพิงพนัก ลงน้ำหนักตัวกับที่นั่ง<br>
                            (6) เปลี่ยนท่านั่งเป็นครั้งคราว เพื่อหลีกเลี่ยงการนั่งในท่าเดียวตลอด<br>
                            (7) งอแขนให้ท่อนล่างอยู่ในแนวราบกับแป้นกด (ให้เก้าอี้อยู่ในระดับพอดี)<br>
                            (8) งอขาเล็กน้อยและให้ฝ่าเท้าราบกับพื้น<br>
                            (9) ลุกขึ้นยืนยืดเส้นยืดสาย ยืดแขน และสั่นข้อมือ ทุกๆ 2 ชม.<br>
                            (10) ปรับจอคอมพิวเตอร์ให้กึ่งกลางจออยู่ในระดับสายตา<br>
                            (11) สายตาอยู่ห่างจากคอมพิวเตอร์ประมาณ 45 ถึง 60 ซม.
                            ที่ดีที่สุดคือเอียงจากบนลงหน้าจอเล็กน้อย<br>
                            (12) ไม่ควรนั่งหน้าจอคอมพิวเตอร์นานเกินไป ควรหยุดพักสายตาทุกๆ ชั่วโมงหรือ 45 นาที<br>
                            (13) แป้นคีย์บอร์ดควรอยู่ในระดับข้อศอก ข้อมือ เพื่อไม่ต้องยกแขนขึ้นมาพิมพ์<br>
                            (14) เมาท์ควรเป็นแบบแทร็คกิ้ง บอล หรือไร้สาย ที่สามารถนำมาใกล้ๆ ตัวได้
                            เพื่อไม่ต้องยื่นแขนไปไกล<br>
                            (15) การบริหารร่างกายอย่างสม่ำเสมอ ซึ่งท่าง่ายๆ คือการลุกขึ้นเดินไปมาเปลี่ยนอิริยาบถแล้ว
                            ใช้มือบีบคอ ยืดกล้ามเนื้อคอ โดยการเอียงไปทางซ้ายและขวา ก้มหน้าเงยหน้า
                            หรือยืดกล้ามเนื้อหลังโดยการก้มตัวหน้าอกชิดหัวเข่า เพื่อยืดและคลายกล้ามเนื้อ ควรทำช้าๆ
                            และค้างไว้ประมาณ 10 นาที
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
                        src="<?php echo $base_url;?>/img/bg/การยศาสตร์กับการปฏิบัติงานเพื่อความปลอดภัย-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การยศาสตร์กับการปฏิบัติงานเพื่อความปลอดภัย </b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            การยศาสตร์ (Ergonomics)
                            เป็นการประยุกต์ใช้วิชาการทางด้านชีววิทยาของมนุษย์และวิศวกรรมศาสตร์ให้เข้ากับคนงานและสิ่งแวดล้อมในการทำงานของเขา
                            เพื่อให้คนงานเกิดความพึงพอใจในการทำงาน และได้ผลผลิตสูงสุด
                            จึงเกี่ยวข้องกับการปรับงานให้เข้ากับความสามารถทั้งทางด้านร่างกายและจิตใจ
                            รวมทั้งข้อจำกัดของคนงาน การเรียนรู้ความสามารถ และข้อจำกัดของมนุษย์
                            เพื่อใช้ประโยชน์ในการออกแบบทางวิศวกรรม เช่น เครื่องมือ เครื่องจักร อาคาร ผลิตภัณฑ์
                            สภาพแวดล้อม รวมถึงการออกแบบลักษณะและวิธีการทำงาน
                            ให้เกิดความเหมาะสมกับมนุษย์ทั้งทางร่างกายและจิตใจ ให้มากที่สุด
                            เพื่อให้มนุษย์สามารถทำงานได้ดีขึ้น เร็วขึ้น และมีความปลอดภัยมากขึ้น
                            การใช้การยศาสตร์จึงส่งผลเพิ่มผลผลิตและอาชีวอนามัยความปลอดภัย
                            อันจะส่ผลต่อประสิทธิภาพของบุคลากรและองค์กรต่อไป
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="การยศาสตร์กับการปฏิบัติงานเพื่อความปลอดภัย">
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
                            ผู้เข้ารับการอบรมได้รับความรู้ ความเข้าใจในหลักการด้านการยศาสตร์กับการทำงานเพื่อความปลอดภัย
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมสามารถประเมินและวิเคราะห์ปัญหาตามหลักการเกี่ยวกับการยศาสตร์และนาไปประยุกต์ใช้ในงานได้
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้าอบรมทราบหลักการในการควบคุมและป้องกันปัญหาด้านการยศาสตร์
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