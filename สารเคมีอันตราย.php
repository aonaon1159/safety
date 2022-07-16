<?php include('header_front.php'); ?>

<?php 
    $id_training = 434;//ความปลอดภัยในการทำงานกับสารเคมีอันตรายและการตอบโต้กรณีเกิดเหตุฉุกเฉิน

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
            <h2 class="text-center"><b>ความปลอดภัยในการทำงานกับสารเคมีอันตรายและการตอบโต้กรณีเกิดเหตุฉุกเฉิน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (19).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                มาตรา ๕ วรรคหนึ่ง และมาตรา ๘ วรรคหนึ่ง แห่งพระราชบัญญัติความปลอดภัย อาชีวอนามัย
                                และสภาพแวดล้อมในการทำงาน พ.ศ. ๒๕๕๔
                                อันเป็นกฎหมายที่มีบทบัญญัติบางประการเกี่ยวกับการจำกัดสิทธิและเสรีภาพของบุคคล ซึ่งมาตรา
                                ๒๙ ประกอบกับมาตรา ๓๓มาตรา ๔๑ และมาตรา ๔๓ ของรัฐธรรมนูญแห่งราชอาณาจักรไทย
                                บัญญัติให้กระทำได้โดยอาศัยอำนาจตามบทบัญญัติแห่งกฎหมาย
                                รัฐมนตรีว่าการกระทรวงแรงงานออกกฎกระทรวงไว้ ดังต่อไปนี้
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
                                “สารเคมีอันตราย” หมายความว่า ธาตุ สารประกอบ หรือสารผสม
                                ตามบัญชีรายชื่อที่อธิบดีประกาศกำหนด ซึ่งมีสถานะเป็นของแข็ง ของเหลว หรือก๊าซ
                                ไม่ว่าจะอยู่ในรูปของเส้นใย ฝุ่นละออง ไอ หรือฟูม
                                ที่มีคุณสมบัติอย่างหนึ่งอย่างใดหรือหลายอย่างรวมกัน ดังต่อไปนี้(๑) มีพิษ กัดกร่อน
                                ระคายเคือง ซึ่งอาจทำให้เกิดอาการแพ้ การก่อมะเร็ง การเปลี่ยนแปลงทางพันธุกรรม
                                เป็นอันตรายต่อทารกในครรภ์หรือสุขภาพอนามัย หรือทำให้ถึงแก่ความตาย
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (2).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b
                    class="head_nav">ความปลอดภัยในการทำงานกับสารเคมีอันตราย<br>และการตอบโต้กรณีเกิดเหตุฉุกเฉิน</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                ท่านสามารถค้นหาหลักสูตรความปลอดภัยในการทำงานกับสารเคมีอันตรายและการตอบโต้กรณีเกิดเหตุฉุกเฉิน
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="425" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                        ในการทำงานกับสารเคมีอันตรายนับว่ามีความจำเป็นอย่างยิ่งที่ทุกคนที่เกี่ยวข้องจะต้องเข้าใจถึงคุณสมบัติพื้นฐานของสารอันตรายในแต่ละประเภทที่ใช้ในการปฎิบัติงาน
                        อุบัติเหตุที่เกี่ยวกับสารอันตรายหลายกรณีเกิดขึ้น
                        และเพิ่มความรุนแรงของการเกิดความสูญเสียอันเป็นผลเนื่องมาจากวิธีการจัดเก็บและขนย้ายที่ไม่ถูกต้องตามหลักความปลอดภัยอีกทั้งผู้ที่ปฏิบัติงานเกี่ยวข้องกับสารอันตรายจะต้องมีความรู้ในเรื่องการตอบโต้เหตุการณ์กรณีเกิดเหตุฉุกเฉิน
                        ได้อย่างมีประสิทธิภาพ เพื่อให้เกิดความปลอดภัยสูงสุด
                        ในการบริหารจัดการสารเคมีอันตรายในสถานประกอบการต่อไป<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้ผู้เข้ารับการอบรมได้เข้าใจถึงอันตรายของสารอันตรายอย่างถ่องแท้<br>
                        2) เพื่อให้ผู้เข้ารับการอบรมได้ทราบถึงเครื่องหมาย หรือป้ายสัญลักษณ์ในการชี้บ่งสารเคมีอันตราย<br>
                        3) เพื่อให้ผู้เข้ารับการอบรมได้เข้าใจถึงวิธีการจัดเก็บและขนย้ายสารอันตราย<br>
                        3) เพื่อให้ผู้เข้ารับการอบรมได้สามารถตอบโต้เหตุการณ์ฉุกเฉินได้อย่างมีประสิทธิภาพ<br><br>

                        หัวข้อการอบรม<br>
                        1) ความรู้เบื้องต้นเกี่ยวกับสารอันตราย<br>
                        2) ป้ายเตือนและฉลากที่ใช้ในการชี้บ่งสารเคมีอันตราย<br>
                        3)การใช้ข้อมูลความปลอดภัยทางสารเคมี (MSDS) เพื่อการบริหารจัดการด้านความปลอดภัย<br>
                        4) ข้อกำหนดในการขนย้ายและวิธีจัดเก็บสารอันตราย<br>
                        -ข้อกำหนดของสถานที่จัดเก็บ<br>
                        -ลักษณะของอาคารที่จัดเก็บ<br>
                        -วิธีการจัดเก็บแยกตามประเภทสารเคมี<br>
                        5) การใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคลในการทำงานสัมผัสกับสารเคมีอันตราย<br>
                        6) การตอบโต้ภาวะฉุกเฉินและการควบคุมการหกรั่ว<br>
                        7) ฝึกปฎิบัติควบคุมการหกรั่วไหลในสนามฝึกของสมาคม
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
                    ความปลอดภัยในการทำงานกับสารเคมีอันตรายและการตอบโต้กรณีเกิดเหตุฉุกเฉิน
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความสารเคมีอันตราย-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความสารเคมีอันตราย-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความสารเคมีอันตราย-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความสารเคมีอันตราย-04.jpg" alt="">
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
                            <h5><b>ชนิดของสารเคมีที่ไวไฟ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            (1) สารเคมีที่ระเบิดได้ (Explosive)<br>
                            สารเคมีที่ก่อให้เกิดการระเบิดเมื่อได้รับความร้อน แสง หรือตัวเร่ง (catalyst)
                            ได้ที่พบในห้องปฏิบัติการ
                            ได้แก่ สารประกอบในกลุ่ม nitrate, chlorate, perchlorates, picrate นอกจากนั้นสารประกอบของโลหะ
                            เช่น ผงแมกนีเซียม หรือผงสังกะสี เมื่อผสมกับอากาศก็สามารถระเบิดได้เช่นกัน<br><br>
                            (2) สารเคมีที่ติดไฟเองได้ (Pyrophorics)<br>
                            ตามมาตรฐานของ US OSHA (United States Office of Occupation Safety and
                            Administation)ได้แก่สารเคมี ที่สามารถติดไฟ (ignition) ได้เองที่อุณหภูมิ เท่ากับหรือต่ำกว่า
                            54.4องศาเซลเซียสสารในกลุ่มนี้มักทำปฏิกิริยารุนแรงกับน้ำ (Water reative)
                            และติดไฟเมื่อสัมผัสกับน้ำ หรืออากาศชื้น ปฏิกิริยาที่เกิดขึ้นจะเร็วหรือช้า
                            ขึ้นกับชนิดของสารเคมี ตัวอย่างสารเคมีประเภทนี้ได้แก่ calcium, magnesium
                            สารเคมีบางตัวสามารถติดไฟขึ้นเองได้ เมื่ออุณหภูมิภายนอกถึงจุดสันดาปของ สารเคมีนั้น
                            โดยไม่ต้องอาศัยอุปกรณ์อื่น ช่วย สารเคมีเหล่านี้ได้แก่ sodium, potassium, phosphorus
                            เป็นต้น<br><br>
                            (3) สารที่ไวต่อการทำปฏิกิริยากับน้ำ (Water reactive substances)<br>
                            เกิดปฏิกิริยารุนแรงโดยเฉพาะ เมื่อมีน้ำอยู่จำกัด สารเคมีในกลุ่มนี้ เช่น
                            สารAlkali และสารAlkali earthเช่น potassium, calcium สารในกลุ่ม Anhydrous metal halides เช่น
                            Aluminum bromide, Germaniumchloride เป็นต้น<br><br>
                            (4) สารเคมีที่เกิดเปอร์ออกไซด์ (Peroxidizable substances)<br>
                            สารเคมีในกลุ่มนี้ จะทำปฏิกิริยาอย่างช้าๆ กับออกซิเจนในอากาศ
                            โดยมีแสงและความร้อนเป็นตัวเร่งปฏิกิริยา
                            เกิดเป็นสารเปอร์ออกไซด์ ซึ่งสามารถก่อให้เกิดการระเบิดรุนแรงได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การใช้งานสารเคมีและการเก็บอย่างถูกวิธี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) มีการจัดเก็บอย่างถูกวิธี และเก็บไว้ในที่ปลอดภัย<br>
                            (2) มีการกำจัดสารเคมีที่หกหรือรั่วอย่างถูกวิธี<br>
                            (3) กำจัดภาชนะที่ใช้แล้วอย่างถูกต้อง<br>
                            (4) ควรแบ่งสารเคมีมาใช้เท่าที่จำเป็น<br>
                            (5) ภาชนะที่ใช้ควรมีป้ายหรือฉลากบอกชนิดของสารเคมีและควรปิดภาชนะทุกครั้งที่ใช้งานเสร็จ<br>
                            (6) ไม่ควรสูบบุหรี่ ดื่มหรือรับประทานอาหารขณะใช้สารเคมี<br>
                            (7) การเคลื่อนย้ายสารเคมี ควรใช้ด้วยความระมัดระวัง<br>
                            (8) เลือกใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคลที่เหมาะสมกับชนิดของสารเคมี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สารเคมี คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            สารเคมีอันตราย เป็นธาตุ สารประประกอบ หรือสารผสมซึ่งมีสถานะเป็นทั้งของแข็ง ของเหลว หรือก๊าซ
                            ซึ่งมีพิษ กัดกร่อน ระคายเคืองได้ หากได้รับการสัมผัส
                            นอกจากนี้ยังเป็นสารไวไฟที่อาจทำให้เกิดระเบิดหรือเกิดเพลิงไหม้ได้
                            โดยปัจจุบันสถานประกอบกิจการหลายแห่งได้มีการนำสารเคมีอันตรายมาใช้กันอย่างแพร่หลาย
                            ซึ่งต้องมีการควบคุมอันตรายที่เกี่ยวข้องกับสารเคมีในสถานที่ทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>พื้นฐานในการควบคุมสารเคมี มีดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            หลักการที่ 1 แหล่งกำเนิดของสารเคมี (เป็นวิธีที่มีประสิทธิภาพสูงสุด)<br>
                            กำจัดสารที่เป็นอันตราย หรือทดแทนโดยการใช้สารอื่นที่มีอันตรายน้อยกว่า
                            เปลี่ยนกระบวนการผลิตใหม่ เช่น ใช้ระบบเปียกแทนระบบแห้ง เพื่อมิให้เกิดฝุ่นฟุ้งกระจาย
                            แยกกระบวนการผลิตที่มีอันตรายออกต่างหาก
                            สร้างที่ปกปิดกระบวนการผลิตให้มิดชิด มิให้สารเคมีฟุ้งกระจายออกไป
                            ติดตั้งระบบดูดอากาศเฉพาะที่
                            การบำรุงรักษา เครื่องมือ เครื่องจักร<br><br>

                            หลักการที่ 2 ทางผ่านของสารเคมี<br>
                            การบำรุงรักษาสถานที่ทำงานให้สะอาดเรียบร้อย
                            การติดตั้งระบบระบายอากาศทั่วไป
                            เพิ่มระยะทางให้ผู้ปฏิบัติห่างจากแหล่งสารเคมี
                            การตรวจหาปริมาณสารเคมีเทียบกับค่ามาตรฐานความปลอดภัยจะต้องปรับปรุง
                            แก้ไขหากสูงเกินกว่าค่ามาตรฐานความปลอดภัย<br><br>

                            หลักการที่ 3 การป้องกันที่ผู้ปฏิบัติงาน<br>
                            การให้การศึกษาและการฝึกอบรมให้ทราบถึงอันตรายและการป้องกัน
                            การลดชั่วโมงการทำงานที่เกี่ยวกับสารเคมีที่เป็นอันตรายให้น้อยลง
                            การหมุนเวียนหรือการสับเปลี่ยนหน้าที่การปฏิบัติงาน
                            การให้ผู้ปฏิบัติงานทำงานอยู่ในห้องที่ควบคุมเป็นพิเศษ
                            การตรวจสุขภาพก่อนเข้าทำงาน
                            จัดให้มีอุปกรณ์ป้องกันอันตรายส่วนบุคคลที่เหมาะสมกับสภาพอันตราย
                            จัดเตรียมอุปกรณ์สำหรับการทำความสะอาดร่างกาย สถานที่เปลี่ยนและเก็บเสื้อผ้า
                            รวมถึงการจัดการซักผ้าที่ปนเปื้อนสารเคมี
                            ติดป้ายสัญลักษณ์ ห้ามปฏิบัติ/สิ่งที่ต้องปฏิบัติ เพื่อเตือนอันตราย เช่น ระวังสารเคมีอันตราย
                            ห้ามสูบบุหรี่ เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สถานที่และอุปกรณ์เมื่อทำงานกับสารเคมีอันตราย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            (1) ที่ชำระล้างสารเคมี
                            ติดตั้งให้ลูกจ้างสามารถใช้ได้ทันทีในกรณีฉุกเฉิน
                            อย่างน้อยต้องมีที่ล้างตาและฝักบัวชำระล้างร่างกายจากสารเคมีอันตราย<br>
                            (2) ที่ล้างมือและล้างหน้า
                            ไม่น้อยกว่า 1 ที่ต่อลูกจ้าง 15 คน และให้เพิ่มจำนวนขึ้นตามสัดส่วนของลูกจ้าง (ส่วนที่เกิน 7
                            คนให้ถือเป็น 15 คน)<br>
                            (3) ห้องอาบนํ้า
                            เพื่อใช้ชำระร่างกายไม่น้อยกว่า 1 ห้องต่อลูกจ้าง 15 คน
                            และให้เพิ่มจำนวนขึ้นตามสัดส่วนของลูกจ้าง (ส่วนที่เกิน 7 คนให้ถือเป็น 15 คน)
                            และต้องจัดของใช้ที่จำเป็นสำหรับการชำระล้างสารเคมีอันตรายออกจากร่างกายให้เพียงพอและใช้ได้ตลอดเวลา<br>
                            (4) อุปกรณ์ปฐมพยาบาล
                            อุปกรณ์และเวชภัณฑ์ที่จำเป็นสำหรับการปฐมพยาบาลลูกจ้างที่ได้รับอันตรายจากสารเคมี<br>
                            (5) อุปกรณ์ดับเพลิง
                            ต้องเหมาะสมกับสารเคมีอันตรายแต่ละชนิด และเพียงพอสำหรับการผจญเพลิงขั้นต้น<br>
                            (6) ชุดทำงานกับสารเคมี
                            ชุดทำงานเฉพาะสำหรับลูกจ้างซึ่งทำงานเกี่ยวกับสารเคมีอันตรายและที่เก็บชุดทำงานที่ใช้แล้ว
                            ให้เหมาะสมกับสารเคมีอันตรายประเภทนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฏหมายความปลอดภัยเกี่ยวกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            ห้ามนายจ้างยินยอมหรือปล่อยปละละเลยให้ลูกจ้างหรือบุคคลใดเข้าพักอาศัยหรือพักผ่อน
                            ในสถานที่ทำงานเกี่ยวกับสารเคมีอันตรายหรือในยานพาหนะขนส่งสารเคมี
                            นายจ้างผู้ใดฝ่าฝืนหรือไม่ปฏิบัติตามกฎหมายต้องระวางโทษจำคุกไม่เกิน 1 ปี ปรับไม่เกิน 400,000
                            บาท หรือทั้งจำทั้งปรับ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุปกรณ์ป้องกันอันตรายจากสารเคมี มีอยู่หลายชนิดดังนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) อุปกรณ์ป้องกันศีรษะ เช่น หมวกยาง หรือหมวกแข็ง<br>
                            (2) อุปกรณ์ป้องกันใบหน้า ดวงตา เช่น กะบังหน้า แว่นตาการสารเคมี<br>
                            (3) อุปกรณ์ป้องกันระบบทางเดินหายใจ เช่น หน้ากากป้องกันสารเคมี<br>
                            (4) อุปกรณ์ป้องกันมือ เช่น ถุงมือยาง<br>
                            (5) อุปกรณ์ป้องกันลำตัว เช่น ชุดป้องกันสารเคมีแบบใช้แล้วทิ้ง ชุด PVC<br>
                            (6) อุปกรณ์ป้องกันเท้า เช่น รองเท้ายาง รองเท้าบูท
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเภทสารเคมีอันตรายตามหลักสากล</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            ประเภทที่ 1 วัตถุระเบิด : สารที่ก่อให้เกิดการระเบิด
                            ที่สามารถเกิดปฏิกิริยาทางเคมีได้ด้วยตัวมันเอง
                            ทำให้เกิดก๊าซที่มีความดันและเกิดความร้อนอย่างรวดเร็ว เช่น พลุอากาศ ลูกระเบิด<br>
                            ประเภทที่ 2 ก๊าซ : สารที่เกิดการรั่วไหลสามารถก่อให้เกิดอันตรายจากการลุกติดไฟหรือเป็นพิษ เช่น
                            ก๊าซหุงต้ม ก๊าซไนโตรเจน ก๊าซคาร์บอนไดออกไซด์<br>
                            ประเภทที่ 3 ของเหลวไวไฟ : ของเหลวผสมที่มีจุดวาบไฟ (Flash Point) ไม่เกิน 60.5 องศาเซลเซียส
                            เช่น อะซิโตน<br>
                            ประเภทที่ 4 ของแข็งไวไฟ : ของแข็งที่สามารถติดไฟได้ง่ายจากการได้รับความร้อนจากประกายไฟ
                            หรือจากการเสีดสี เช่น กำมะถัน ฟอสฟอรัส<br>
                            ประเภทที่ 5 สารออกซิไดส์และออร์แกนิกเปอร์ออกไซด์:
                            สารออกซิไดส์เป็นสารที่ไม่ติดไฟแต่ให้ออกซิเจน ช่วยให้วัตถุอื่นเกิดการลุกไหม้ เช่น
                            โซเดียมเปอร์ออกไซด์ และสารออร์แกนิกเปอร์ออกไซด์ : เป็นสารที่ช่วยในการเผาสารที่ลุกไหม้ หรือ
                            ทำปฏิกิริยากับสารอื่น เช่น อะซีโตนเปอร์ออกไซด์<br>
                            ประเภทที่ 6 สารพิษและสารติดเชื้อ : สารพิษ
                            เป็นสารที่สามารถทำให้เสียชีวิตหรือได้รับบาดเจ็บรุนแรงต่อสุขภาพของคน เช่น โซเดียมไซยาไนด์
                            และสารติดเชื้อ : เป็นสารที่มีเชื้อโรคปนเปื้อน เป็นสาเหตุของการเกิดโรคในสัตว์และคน เช่น
                            แบคทีเรีย<br>
                            ประเภทที่ 7 วัตถุกัมมันตรังสี : วัตถุที่สามารถแผ่รังสีที่มองไม่เห็นอย่างต่อเนื่อง เช่น
                            โคบอลต์-60<br>
                            ประเภทที่ 8 สารกัดกร่อน : สารที่มีปฏิกิริยาเคมี
                            มีฤทธิ์กัดกร่อนทำความเสียหายต่อเนื้อเยื่อของสิ่งมีชีวิตอย่างรุนแรง เช่น
                            โซเดียวไฮดรอกไซด์<br>
                            ประเภทที่ 9 วัตถุอื่น ๆ ที่เป็นอันตราย :สารหรือสิ่งของที่ในขณะขนส่งเป็นสารอันตราย
                            ไม่ได้จัดอยู่ในประเภทที่ 1-8 เช่น ปุ๋ย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การปฐมพยาบาลเบื้องต้นเมื่อได้รับอันตรายจากสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ถ้าได้รับอันตรายจากสารเคมีโดยการรับประทาน ให้ลดอัตราการดูดซึม
                            โดยให้ผู้ป่วยรีบดื่มนมหรือน้ำเปล่าตามทันที (ในกรณีที่ผู้ป่วยไม่ชักหรือสลบเท่านั้น)
                            อีกทั้งถ้าสารเคมีมีฤทธิ์เป็นกรด ด่าง ที่มีกลิ่น ห้ามทำให้อาเจียน และควรพบแพทย์ทันที<br>
                            (2) ถ้าได้รับอันตรายจากสารเคมีที่ผิวหนัง
                            ให้ล้างบริเวณที่ถูกสารเคมีโดยใช้น้ำสะอาดให้ได้มากที่สุด ห้ามใช้ยาแก้พิษใดๆ เทลงผิวหนัง
                            เพราะอาจจะเกิดปฏิกิริยาเคมีทำให้เกิดแผลมากกว่าเดิม<br>
                            (3) ถ้าได้รับอันตรายจากสารเคมีที่ตา ให้ล้างตาด้วยน้ำสะอาดให้มากที่สุด
                            โดยให้น้ำไหลผ่านดวงตาอย่างน้อย 15 นาที แล้วรีบส่งนำส่งแพทย์ทันที<br>
                            (4) ถ้าได้รับอันตรายจากสารเคมีในการสูดดม ให้ผู้ปฏิบัติงานนั้นออกจากบริเวณนั้นๆ ทันที
                            และช่วยผายปอด หรือกระตุ้นลมหายใจด้วยยาดมฉุนๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การปฏิบัติงานที่เกี่ยวข้องกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) การเตรียมสารเคมีพวกกรด ด่าง หรือสารระเหย ควรทำในตู้ดูดควัน<br>
                            (2) ห้ามเทน้ำลงกรด<br>
                            (3) ไม่ใช้จุกแก้วกับขวดบรรจุสารละลายด่าง เพราะจุกจะติดกับขวดจนเปิดไม่ได้<br>
                            (4) ไม่ใช้จุกยางกับขวดบรรจุตัวทำละลายอินทรีย์ เช่น แอลกอฮอล์ อะซีโตน<br>
                            (5) ห้ามใช้เปลวไฟในการให้ความร้อนแก่ของเหลวไวไฟ หรือในขบวนการกลั่น<br>
                            (6) หลีกเลี่ยงการสูดดมไอระเหยของสารเคมี
                            ห้ามทดสอบชนิดของสารเคมีโดยการดมกลิ่นโดยตรงอย่างเด็ดขาด<br>
                            (7) การดูดสารละลายโดยใช้ปิเปต ห้ามใช้ปากดูด ให้ใช้ลูกยาง<br>
                            (8) ในกรณีที่มีสารระเหยไวไฟ (Volatile flammable material) ควรใช้ตู้ดูดควันในการถ่ายเท ผสม
                            หรือ ให้ความร้อนสารเคมี<br>
                            (9) อ่านคู่มือ และเพิ่มความระมัดระวังเป็นพิเศษ เมื่อต้องปฏิบัติงานเกี่ยวข้องกับสารก่อมะเร็ง
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
                        src="<?php echo $base_url;?>/img/bg/ความปลอดภัยในการใช้สารเคมี-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                        alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>ความปลอดภัยในการใช้สารเคมี</b></br></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            วัตถุดิบที่สำคัญที่เกี่ยวข้องกับการผลิตและอุตสาหกรรมคือ สารเคมี
                            และสารเคมีบางประเภทคือสิ่งที่ก่อให้เกิดอันตรายแก่ผู้ปฏิบัติงานหรือสิ่งที่เรียกว่า
                            สารเคมีอันตราย การทำงานกับสารเคมีอันตราย สารเคมีรั่วไหล
                            ซึ่งอาจทำให้ลูกจ้างได้รับสารเคมีอันตราย เช่น การผลิต การควบการหกรั่วไหลสารเคมี การติดฉลาก
                            การห่อหุ้ม การเคลื่อนย้าย การเก็บรักษา การถ่ายเท การขนถ่าย การขนส่ง การกำจัด การทำลาย
                            การเก็บสารเคมีอันตรายที่ไม่ใช้แล้ว รวมทั้ง การป้อง การบำรุงรักษา การซ่อมแซม
                            และการทำความสะอาดเครื่องมือเครื่องใช้ ตลอดจนภาชนะบรรจุสารเคมีอันตราย
                            การกำหนดตามมาตรฐานในการบริหารจัดการสารเคมี และดำเนินการด้านความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อม
                            ในการทำงานเกี่ยวกับสารเคมีอันตรายจึงเป็นสิ่งสำคัญต่อเหตุการณ์ฉุกเฉินสารเคมีรั่วไหล
                            และมีความปลอดภัยของผู้ปฏิบัติงาน สิ่งแวดล้อม
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-8">
                            <a href="ความปลอดภัยในการใช้สารเคมี">
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
                            ผู้เข้ารับการอบรมมีความรู้ ความเข้าใจ ต่อการจัดการความปลอดภัยในการทำงานกับสารเคมี
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมสามารถนำความรู้เรื่องจัดการสารเคมีไปใช้ในการปฎิบัติงานด้วยปลอดภัย</li>
                        <li><i class="fas fa-check-circle"></i>
                            ผู้เข้ารับการอบรมทราบถึงชนิด อันตรายจากเคมีอันตรายในที่ทำงานที่มีผลต่อสุขภาพ
                            การจัดการสารเคมีอันตราย เช่น การใช้ การเก็บ การรักษา การขนย้าย สารเคมี เป็นต้น
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