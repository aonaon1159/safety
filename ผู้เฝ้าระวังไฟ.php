<?php include('header_front.php'); ?>

<?php 
    $id_training = 433;//ผู้เฝ้าระวังไฟ Fire Watch Man

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
            <h2 class="text-center"><b>ผู้เฝ้าระวังไฟ Fire Watch Man</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (7).jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ ผู้เฝ้าระวังไฟ ภาษาอังกฤษ">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                            <a class="a-link d-inline" href="https://bit.ly/3jYu1Qs"> ผู้เฝ้าระวังไฟ </a> หรือ Fire Watch Man
                                นับมีความสำคัญและจำเป็นในกิจกรรมการดำเนินการในด้านต่างๆ เช่น
                                กิจกรรมงานที่ทำให้เกิดประกายไฟ และเสี่ยงในการเกิดอัคคีภัยในกิจกรรมดังกล่าว
                                และกิจกรรมต่างๆ ในกลุ่มงาน Oil and Gas และทั่วไป ซึ่งผู้เฝ้าระวังไฟ
                                ก็ถือได้ว่ามีบทบาทสำคัญอย่างมาก ที่จะช่วยป้องกันอุบัติที่จะเกิดขึ้นจากกิจกรรมดังกล่าว
                                ในด้านความรับผิดชอบดังกล่าวเช่น การตรวจวัดแก็สบริเวณทำงานและขณะทำงาน
                                หรือการเฝ้าระวังลูกไฟ ขณะมีการเชื่อมและเจียร แม้กระทั้งเมื่อเกิดเหตุ
                                ผู้เฝ้าระวังไฟก็จะสามารถปฏิบัติตนได้อย่างถูกต้องและรวดเร็ว
                                ช่วยป้องกันและลดความเสียหายที่จะเกิดขึ้น
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
                                เพื่อเป็นการเตรียมความพร้อม เพิ่มระดับความรู้ ความสามารถ และความเข้าใจอันดี
                                ในการทำงานอย่างถูกต้องและปลอดภัย ป้องกันและลดความสูญเสียที่เกิดขึ้น
                                ให้กับบริษัทและพนักงานได้ตระหนักถึงความสำคัญดังกล่าวข้างต้น
                                จึงจัดให้มีการฝึกอบรมหลักสูตร “ผู้เฝ้าระวังไฟ”
                                ทั้งนี้เพื่อเป็นการพัฒนาคุณภาพผู้ปฏิบัติงาน
                                และพัฒนาระบบมาตรฐานการจัดการอาชีวอนามัยและความปลอดภัยฯ ต่อไป
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ ">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ผู้เฝ้าระวังไฟ Fire Watch Man</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรผู้เฝ้าระวังไฟ Fire Watch Man
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="281" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery5.jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ 
ผู้เฝ้าระวังไฟ ภาษาอังกฤษ
ผู้เฝ้าระวังไฟ ppt
ผู้เฝ้าระวังไฟ กฎหมาย
ผู้เฝ้าระวังไฟ หน้าที่
หลักสูตรผู้เฝ้าระวังไฟ
Fire Watch Man
อบรมผู้เฝ้าระวังไฟ ระยอง">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        Fire Watch หรือผู้เฝ้าระวังไฟนั้น เป็นบุคคลที่สำคัญในการทำงานที่มีประกายไฟ และมีความร้อน เช่น
                        งานตัด งานเชื่อม งานเจียรงาน ขัดและเผา รวมถึงการเดินการใช้เครื่องกลต่าง ๆ
                        เพราะงานเหล่านี้ทำให้เกิดอัคคีภัย และขณะทำงาน (ปฏิบัติงานไม่สามารถควบคุมประกายไฟได้
                        และไม่สามารถดูได้ขณะทำงาน บุคคลที่ได้รับการแต่งตั้งให้ทำหน้าที่เฝ้าระวังอัคคีภัยจะต้องปฏิบัติ
                        งานนี้เท่านั้น ช่วงเวลาดังกล่าว โดยจะต้องใช้อย่างน้อยหนึ่งวิธีในการติดต่อสื่อสารกับหน่วยดับเพลิง
                        กรณีเกิดเหตุฉุกเฉิน นอกจากนี้ยังต้องมีวิธีการประสานงานกับเจ้าของอาคาร
                        แต่บุคลากรเฝ้าระวังอัคคีภัยไม่ใช่นักดับเพลิงโดยตรง กล่าวคือจะไม่ทำหน้าที่ดับเพลิง
                        ในฐานะนักดับเพลิง แต่ทำในฐานะบุคคลทั่วไป<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้าอบรมมีความรู้ เข้าใจ และตระหนักถึงความสำคัญต่อบทบาทหน้าที่
                        ผู้เฝ้าระวังไฟ (Fire Watch) ในหน้างานที่เกิดจากการเชื่อมเพื่อติดตั้งอุปกรณ์ภายในโรงงาน<br>
                        2. เพื่อให้ผู้เข้าอบรมสามารถนำความรู้จากการเรียนรู้และฝึกฝน ทั้งภาคทฤษฎีและปฏิบัติ
                        ไปใช้ทำหน้าที่เฝ้าระวังไฟในการทำงานได้อย่างปลอดภัย

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
                    ผู้เฝ้าระวังไฟ Fire Watch Man
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้เฝ้าระวังไฟ-01.jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ 
ผู้เฝ้าระวังไฟ ภาษาอังกฤษ
ผู้เฝ้าระวังไฟ ppt
ผู้เฝ้าระวังไฟ กฎหมาย
ผู้เฝ้าระวังไฟ หน้าที่
หลักสูตรผู้เฝ้าระวังไฟ
Fire Watch Man
อบรมผู้เฝ้าระวังไฟ ระยอง">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้เฝ้าระวังไฟ-04.jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ 
ผู้เฝ้าระวังไฟ ภาษาอังกฤษ
ผู้เฝ้าระวังไฟ ppt
ผู้เฝ้าระวังไฟ กฎหมาย
ผู้เฝ้าระวังไฟ หน้าที่
หลักสูตรผู้เฝ้าระวังไฟ
Fire Watch Man
อบรมผู้เฝ้าระวังไฟ ระยอง">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้เฝ้าระวังไฟ-03.jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ 
ผู้เฝ้าระวังไฟ ภาษาอังกฤษ
ผู้เฝ้าระวังไฟ ppt
ผู้เฝ้าระวังไฟ กฎหมาย
ผู้เฝ้าระวังไฟ หน้าที่
หลักสูตรผู้เฝ้าระวังไฟ
Fire Watch Man
อบรมผู้เฝ้าระวังไฟ ระยอง">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้เฝ้าระวังไฟ-02.jpg" alt="แบบทดสอบ ผู้เฝ้าระวังไฟ 
ผู้เฝ้าระวังไฟ ภาษาอังกฤษ
ผู้เฝ้าระวังไฟ ppt
ผู้เฝ้าระวังไฟ กฎหมาย
ผู้เฝ้าระวังไฟ หน้าที่
หลักสูตรผู้เฝ้าระวังไฟ
Fire Watch Man
อบรมผู้เฝ้าระวังไฟ ระยอง">
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
                            <h5><b>ผู้เฝ้าระวังไฟ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            บุคคลที่มีความสำคัญที่จะคอยวางแผนป้องกันการเกิดอัคคีภัยในขณะทำงานเสี่ยงเช่นงานที่มีความร้อน
                            และ ประกายไฟ
                            ดังนั้นผู้เฝ้าระวังไฟในทีมจะต้องมีความรู้ความเข้าใจเป็นอย่างดีเกี่ยวกับเทคนิคต่างๆที่สำคัญในการเฝ้าระวังไฟรวมทั้งสามารถใช้อุปกรณ์ตอบโต้เหตุฉุกเฉินได้อย่างถูกต้องและปลอดภัยตามหลักมาตรฐานสากล
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ก่อนเริ่มงานผู้เฝ้าระวังไฟจะต้องทำอะไรบ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ผู้เฝ้าระวังไฟจะต้องตรวจสอบความเรียบร้อยก่อนเริ่มทำงานดังนี้<br>
                            - ประเมินความเสี่ยงเป็นอันตรายพร้อมวางมาตรการควบคุมไม่ให้เกิดอันตราย<br>
                            - ขออนุญาตในการทำงานก่อนเริ่มทำงานที่มีความร้อนและประกายไฟ (Work permit)<br>
                            - จัดทีมงานเฝ้าระวังไฟในจุดเสี่ยงต่างๆพร้อมอุปกรณ์ตอบโต้เหตุฉุกเฉิน<br>
                            - จัดให้มีการตรวจสอบความเข้มข้นของสารเคมีไวไฟที่อาจจะก่อให้เกิดการลุกติดไฟโดยรอบค่า LEL
                            และสภาพบรรยากาศที่เป็นอันตรายต่างๆว่าปลอดภัย<br>
                            - ทำการปิดกันแหล่งความร้อนและกระกายไฟใหอยู่ในจุดที่ปลอดภัยด้วยอุปกรณ์ต่าง ๆ
                            เช่นผ้ากันสะเก็ดไฟ เป็นต้น<br>
                            - ประเมินความปลอดภัยและความเป็นอันตรายระหว่างปฏิบัติงาน<br>
                            - ตรวจสอบพื้นที่ให้เรียบร้อยหลังจบการทำงาน และทำการปิดใบอนุญาตทำงาน (work permit)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>คุณสมบัติของผู้เฝ้าระวังไฟ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            - เป็นผู้ที่ผ่านการฝึกอบรม การดับเพลิงขั้นต้น
                            มีความรู้ความเข้าใจในการป้องกันอัคคีภัยและการดับเพลิงเบื้องต้น<br>
                            - เข้าใจเกี่ยวกับแผนฉุกเฉิน และมีความรู้ความเข้าใจในระบบปฎิบัติในกรณีฉุกเฉิน เช่น ไฟไหม้,
                            แก๊สรั่ว<br>
                            - มีความเข้าใจในระบบการติดต่อสื่อสาร แจ้งเหตุ, หรือขอความช่วยเหลือ ในกรณีเกิดฉุกเฉิน
                            เช่นการแจ้ง เบอร์ภายใน เบอร์ภายนอก<br>
                            - มีความรู้ความเข้าใจในระบบใบอนุญาตในการทำงาน (Work Permit System )
                            โดยเฉพาะระบบใบอนุญาตในการทำงานประกายไฟ<br>
                            - ผ่านการอบรม หลักสูตรผู้เฝ้าระวังไฟ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>มีหน้าที่รับผิดชอบของผู้เฝ้าระวังไฟ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            พูดถึงหน้าที่และความรับผิดชอบของ Fire watch หรือ ผู้เฝ้าระวังไฟ นั้น
                            ควรแยกออกเป็นตามช่วงเวลาในการทำงานออกเป็นสี่ช่วงเวลาคือ<br>
                            - ก่อนการทำงาน ผู้เฝ้าระวังไฟ ต้องตรวจสอบทุกอย่างให้พร้อม เช่นบริเวณการทำงาน 10 เมตร
                            ต้องไม่มีวัตถุติดไฟ หากพบให้ทำการกำจัดอกไป จัดเตรียมถังดับเพลิงให้ใช้งานได้ ใช้ได้ทันที
                            จำนวนเพียงพอ และมีประสิทธิภาพ และเครื่องมือ อุปกรณ์ ในการทำงานต้องพร้อมไม่ชำรุด
                            และรวมถึงเช็ค ระบบใบขออนุญาตในการทำงาน<br>
                            - ขณะทำงาน ผู้เฝ้าระวังไฟ ต้องประจำอยู่ตลอดเวลา ขณะมีการทำงานประกายไฟ เฝ้าสังเกตุประกายไฟ
                            ไม่ให้กระเด็นออกไปในรัศมี และสั่งหยุดการทำงาน หากพบความไม่พร้อม และความเสี่ยง<br>
                            - หลังทำงานและพักเที่ยง ผู้เฝ้าระวังไฟ ต้องเฝ้าประจำอยู่ เพื่อเฝ้าสังเกตุการลุกของประกาย
                            และหลังการทำงาน ควรจัด ผู้เฝ้าระวังไฟ เฝ้าต่อเนื่องอีกอย่างน้อยสองชั่วโมง
                            รวมถึงเช็คอุปกรณ์ทั้งหมดให้ปิดการจ่ายพลังงานทั้งหมด เช่นไฟฟ้า สายแก็ส เป็นต้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>บทบาทของผู้เฝ้าระวังไฟในกรณีเหตุฉุกเฉิน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            Fire watch หรือ ผู้เฝ้าระวังไฟ มีบทบาทสำคัญ เมื่อเกิดเหตุกรณีฉุกเฉิน
                            เพราะเป็นผู้ที่เข้าใจในระบบของแผน เช่นแผนดับเพลิง แผนอพยพหนีไฟ เป็นต้น
                            สามารถช่วยเหลือทีมฉุกเฉินได้เป็นอย่างดีเมื่อเกิดเหตุ เช่น<br>
                            - เป็นผู้สนับสนุน ทีมดับเพลิงได้เป็นอย่างดี หากทีมดับเพลิงมีกำลังไม่เพียงพอผู้เฝ้าระวังไฟ
                            จะช่วยสนันสนุน และเป็นลูกทีมได้ เช่นการลากสายน้ำดับเพลิง การช่วยใช้ถังดับเพลิง
                            หรือคอยประคองสายดับเพลิงให้<br>
                            - การเรียกและขอความช่วยเหลือ ในทุกช่องทางเมื่อเกิดเหตุ เช่น การตะโกนขอความช่วยเหลือ
                            การโทรศัพย์ หรือการใช้วิทยุในการสื่อสาร เพื่อความช่วยเหลือ ผู้เฝ้าระวังไฟ จะเป็นผู้ที่ทราบ
                            ช่องทางในการติดต่อเป็นอย่างดี<br>
                            - ผู้เฝ้าระวังไฟ เป็นผู้ให้ข้อมูลที่ดี ถึงสาเหตุ และรายละเอียด ของการเกิดเหตุ เพราะ
                            ผู้เฝ้าระวังไฟ เฝ้าดูแลอยู่หน้างานตลอดเวลา ฉะนั้นเมื่อทีมฉุกเฉินมาถึงพื้นที่ ผู้เฝ้าระวังไฟ
                            จะคอยรายงานถึงรายละเอียดให้ทราบ<br>
                            - การสนับสนุนการอพยพ ผู้เฝ้าระวังไฟ จะคอยอำนวยความสะดวกแก่ผู่อพยพ โดยคอยประสานงานให้
                            และชี้บอกจุดเส้นทาง แก่ผู้อพยพ และผู้เฝ้าระวังไฟ จะเป็นผู้อพยพเป็นคนสุดท้าย
                            หลักจากทุกคนไปหมดแล้ว
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เมื่อไหร่ที่จำเป็นต้องมีผู้เฝ้าระวังไฟ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            พูดถึงความจำเป็นในการต้องมี ผู้เฝ้าระวังไฟ นั้น ยกตัวอย่างเช่น งานตัดแนวท่อแก็ส
                            ระหว่างการทำงาน ตรวจสอบ แก้ไข ตัดเชื่อม อาจมีแก็สที่ค้างจากในระบบ
                            หลังจากจากการตัดแยกพลังงานออกแล้ว หรือมาจากแหล่งภายนอก เช่นมาจากชุดหัวตัด
                            เพื่อเป็นการป้องกันติดไฟและระเบิด ผู้เฝ้าระวังไฟ
                            จะทำการใช้เครื่องมือในการตรวจวัดค่าความเข้มข้นของสารไวไฟ หากพบเกินมาตรฐาน
                            จะสั่งให้หยุดการทำงานทันที อีกงาน ที่จำเป็นต้องมี ผู้เฝ้าระวังไฟ เช่น งานตัด เจียร เชื่อม
                            ที่มีประกายไฟ เพราะผู้ปฏิบัติงาน ไม่สามารถมองเห็นได้ ขณะอยู่ในกำบังหน้าเชื่อม จึงต้องอาศัย
                            ผู้เฝ้าระวังไฟ คอยดูแลประกายไฟให้ และถ้ามีไฟลุกขึ้น ผู้เฝ้าระวังไฟ
                            จำคอยทำงานระงับเบื้องต้นให้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วัตถุประสงค์ของระบบอนุญาตทํางาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ระบบการขออนุญาตก่อนเริ่มปฎิบัติงานคืออะไร Work Permit
                            ปัจจุบันระบบการขออนุญาตก่อนเริ่มทำงานเป็นที่แพร่หลายในวงการอุตสาหกรรมทุกประเภท
                            เพื่อป้องกันไม่ให้พนักงานหรือลูกจ้างเกิดอันตรายระหว่างปฎิบัติงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ระบบการอนุญาตให้ทำงานเพื่อความปลอดภัย
                                    (Work Permit Systems)</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            ใช้กับปฏิบัติการที่มีความเสี่ยงสูงอย่างยิ่ง(Extremely Hazardous Operations)
                            และมีลักษณะการทำงานสัมพันธ์หลายกลุ่มงาน<br>
                            - งานที่เข้าปฏิบัติในพื้นที่อับอากาศ<br>
                            - งานที่มีการปฏิบัติที่มีความร้อนและประกายไฟอันจะก่อให้เกิด<br>
                            - อัคคีภัย การระเบิดขึ้นได้ง่าย<br>
                            - งานขุดเจาะหลุมลึกที่มีศักยภาพอันตรายรุนแรง<br>
                            - งานที่มีการปฏิบัติในแหล่งที่มีการแผ่รังสี<br>
                            - การปฏิบัติงานกับแหล่งพลังงานที่มีศักยภาพอันตรายรุนแรง<br>
                            - งานที่มีการปฏิบัติบนที่สูง<br>
                            - งานที่มีการปฏิบัติบนผิวน้ำ<br>
                            - การปฏิบัติงานกับอุปกรณ์ของขนาดใหญ่<br>
                            - การปฏิบัติงานกับสารที่มีอันตราย<br>
                            - ฯลฯ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>Hot work</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            งานที่ก่อให้เกิดความร้อน หรือ เกิดประกายไฟได้แก่ งานเชื่อม งานตัด งานเจียร เป็นต้น
                            ซึ่งงานดังกล่าว หากเกิดความผิดปกติและไม่ได้
                            รับการควบคุมอย่างเป็นระบบจะเกิด ความสูญเสีย อย่างร้ายแรง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการจัดทำระบบ Work Permit</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) กำหนดสถานที่/งานที่ต้องใช้ระบบการอนุญาตเข้าทำงาน<br>
                            (2) จัดทำขั้นตอน/วิธีการขออนุญาต<br>
                            (3) จัดทำแบบฟอร์มที่ใช้ในระบบ<br>
                            (4) แต่งตั้งบุคคลที่มีอำนาจอนุญาต<br>
                            (5) แจ้งให้ผู้ที่เกี่ยวข้องทุกคนทราบเกี่ยวกับ<br>
                            - สถานที่/งานที่ต้องขอ Work Per mit<br>
                            - ขั้นตอนการปฏิบัติ<br>
                            - หน้าที่ความรับผิดชอบของผู้เกี่ยวข้อง<br>
                            (6) นำงาน Work Permit ไปปฏิบัติ<br>
                            (7) ควบคุมให้มีการปฏิบัติตามระบบ<br>
                            (8) เก็บใบ Work Permit ไว้เป็น Record<br>
                            (9) นำข้อมูลมาวิเคราะห์<br>
                            (10) ติดตามและประเมินผล
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
                <div class="col-md-12 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            <h4><b>ผู้เฝ้าระวังไฟ </b></h4>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <h5>ผู้เฝ้าระวังไฟ หรือ Fire Watch Man
                                นับมีความสำคัญและจำเป็นในกิจกรรมการดำเนินการในด้านต่างๆ เช่น
                                กิจกรรมงานที่ทำให้เกิดประกายไฟ และเสี่ยงในการเกิดอัคคีภัยในกิจกรรมดังกล่าว
                                และกิจกรรมต่างๆ ในกลุ่มงาน Oil and Gas และทั่วไป ซึ่งผู้เฝ้าระวังไฟ
                                ก็ถือได้ว่ามีบทบาทสำคัญอย่างมาก ที่จะช่วยป้องกันอุบัติที่จะเกิดขึ้นจากกิจกรรมดังกล่าว
                                ในด้านความรับผิดชอบดังกล่าวเช่น การตรวจวัดแก็สบริเวณทำงานและขณะทำงาน
                                หรือการเฝ้าระวังลูกไฟ ขณะมีการเชื่อมและเจียร แม้กระทั้งเมื่อเกิดเหตุ
                                ผู้เฝ้าระวังไฟก็จะสามารถปฏิบัติตนได้อย่างถูกต้องและรวดเร็ว
                                ช่วยป้องกันและลดความเสียหายที่จะเกิดขึ้น
                            </h5>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/X4YmdqZ9yvA?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/หลักสูตร-ผู้เฝ้าระวังไฟ-Fire-Watch-Man.jpg"
                                alt="ผู้เฝ้าระวังไฟ">
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
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/n_lvZlmKVXo?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/หลักสูตร-ผู้เฝ้าระวังไฟ-Fire-Watch-Man.jpg"
                                alt="Fire Watch Man">
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

                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/jALaEt2v4mY?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width:100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/หลักสูตร-ผู้เฝ้าระวังไฟ-Fire-Watch-Man.jpg"
                                alt="ผู้เฝ้าระวังไฟ">
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

                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/-ZKhYxEyqRo?autoplay=1">
                        <div class="play-youtube-video text-center">
                            <img style="width: 100%;max-height:422px;"
                                src="<?php echo $base_url; ?>/img/bg/หลักสูตร-ผู้เฝ้าระวังไฟ-Fire-Watch-Man.jpg"
                                alt="ผู้เฝ้าระวังไฟ">
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

                <div class="mt-5 col-12 text-center">
                    <a class="btn btn--medium btn--radius btn--red text-uppercase"
                        href="https://www.youtube.com/c/TopproChannel">WATCH NOW
                    </a>
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