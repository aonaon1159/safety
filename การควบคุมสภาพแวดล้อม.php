<?php include('header_front.php'); ?>

<?php 
    $id_training = 428;//การประเมินและการควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย

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
            <h2 class="text-center"><b>การประเมินและการควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย</b></h2>
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
                                อาศัยอำนาจตามความในมาตรา 6 และมาตรา 103 แห่งพระราชบัญญัติคุ้มครองแรงงาน พ.ศ. 2541
                                อันเป็นกฎหมายที่มีบทบัญญัติบางประการเกี่ยวกับการจำกัดสิทธิและเสรีภาพของบุคคล ซึ่งมาตรา
                                29 ประกอบกับมาตรา 31 มาตรา 35 มาตรา 48 และมาตรา 50 ของรัฐธรรมนูญแห่งราชอาณาจักรไทย
                                บัญญัติให้กระทำได้โดยอาศัยอำนาจตามบทบัญญัติแห่งกฎหมาย
                                รัฐมนตรีว่าการกระทรวงแรงงานออกกฎกระทรวงไว้
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
                                “สภาวะการทำงาน” หมายความว่า
                                สภาวะแวดล้อมซึ่งปรากฏอยู่ในบริเวณที่ทำงานของลูกจ้างซึ่งรวมถึงสภาพต่าง ๆ ในบริเวณที่ทำงาน
                                เครื่องจักร อาคาร สถานที่ การระบายอากาศ ความร้อน แสงสว่าง เสียง
                                ตลอดจนสภาพและลักษณะการทำงานของลูกจ้างด้วย
                                ในกรณีที่ภายในสถานประกอบกิจการมีระดับความร้อนเกินมาตรฐานที่กำหนดในข้อ 3
                                ให้นายจ้างดำเนินการปรับปรุงหรือแก้ไขสภาวะการทำงานทางด้านวิศวกรรมให้ระดับความร้อนไม่เกินมาตรฐาน
                                หากได้ดำเนินการปรับปรุงหรือแก้ไขสภาวะการทำงานแล้ว
                                ยังควบคุมให้เป็นไปตามมาตรฐานดังกล่าวไม่ได้
                                ให้นายจ้างปิดประกาศเตือนให้ลูกจ้างทราบว่าบริเวณนั้นอาจเป็นอันตรายต่อสุขภาพอนามัยของลูกจ้าง
                                และนายจ้างต้องจัดให้ลูกจ้างสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลตามที่กำหนดไว้ในหมวด
                                4 ตลอดเวลาที่ทำงาน
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (8).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การประเมินและการควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการประเมินและการควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="569" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                        ปัจจุบันในการตรวจวัดสภาพแวดล้อมในการทำงาน ด้านสุขศาสตร์อุตสาหกรรม
                        ที่กฎหมายได้กำหนดให้มีการดำเนินการเป็นประจำทุกปีนั้น
                        สถานประกอบการโดยส่วนใหญ่มักจะมีการจ้างหน่วยงานภายนอกมาทำการตรวจวัด
                        โดยในการดำเนินการดังกล่าวจำเป็นอย่างยิ่งที่
                        จะต้องมีการบริหารจัดการและควบการการตรวจวัดให้ได้เป็นไปตามมาตรฐานและหลัการทางวิชาการด้านสุขสาสตร์อุตสาหกรรม
                        เพื่อที่จะทำให้ มั่นใจได้ว่า ผลการตรวจวัดที่ เราได้รับ เป็นผลการตรวจวัดที่ถูกต้อง
                        แม่ยำและสามารถใช้ในการตัดสินใจเพื่อการบริหารจัดการได้อย่างมีประสิทธิภาพ<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้าอบรมมีความรู้และทราบถึงหลักการประเมินสิ่งแวดล้อมด้านสุขศาสตร์อุตสาหกรรม<br>
                        2.
                        เพื่อให้ผู้เข้าอบรมทราบถึงวิธีการควบคุมการตรวจวัดสิ่งแวดล้อมด้านสุขศาสตร์อุตสาหกรรมตามมาตฐานที่ถูกต้อง<br>
                        3. เพื่อให้ผู้เข้าอบรมมีความเข้าใจบทบาทหน้าที่ในการควบคุมการตรวจวัดสิ่งแวดล้อม
                        ร่วมกับผู้รับจ้างที่เข้ามาทำการตรวจวัด<br><br>
                        หัวข้ออบรม<br>
                        1. หลักวิชาการการทางสุขศาสตร์อุตสาหกรรม<br>
                        2. กฎหมายและมาตรฐานที่เกี่ยวข้องกับการตรวจวัดสิ่งแวดล้อมด้านสุขศาสตร์อุตสาหกรรม<br>
                        3. หลักการประเมินอันตรายจากสภาพแวดล้อมในการทำงานตามกฎหมาย<br>
                        4. กระบวนการการตรวจวัดทางสุขศาสตร์อุตสาหกรรม<br>
                        5. คุณสมบัติของบุคคลากรที่เกี่ยวข้องกับการตรวจวัดทางสุขศาสตร์อุตสาหกรรม<br>
                        6. เทคนิคการควบคุมงานจ้างการตรวจวัดทางสุขศาสตร์อุตสาหกรรม<br>
                        7. การจัดทำรายงานผลการตรวจวัดสิ่งแวดล้อมด้านสุขศาสตร์อุตสาหกรรมตามกฎหมายกำหนด
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
                    การประเมินและการควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-4 p-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย-01.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 p-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย-02.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 offset-md-2 px-4 text-right article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย-03.jpg"
                        alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 px-4 text-left article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความควบคุมสภาพแวดล้อมในการทำงานตามกฎหมาย-04.jpg"
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
                            <h5><b>การสำรวจสภาพแวดล้อมในการทำงานเบื้องต้น (Walk Though Survey)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            เป็นการสำรวจสภาพพื้นที่การทำงานและลักษณะการทำงาน
                            เพื่อชี้บ่งสภาพแวดล้อมในการทำงานประเภทใดที่อาจเป็นสิ่งคุกคาม
                            ทำให้เกิดผลกระทบต่อสุขภาพอนามัยของผู้ปฏิบัติงาน ได้แก่<br>
                            - สภาพแวดล้อมทางเคมี<br>
                            - สภาพแวดล้อมทางกายภาพ<br>
                            - สภาพแวดล้อมทางชีวภาพ<br>
                            - สภาพแวดล้อมทางการยศาสตร์ (Ergonomics)<br>
                            เพื่อกำหนดพื้นที่การทำงาน สภาพแวดล้อมในการทำงานและพารามิเตอร์แต่ละประเภท
                            จำนวนตัวอย่าแบบงพื้นที่ (Area Simple) และตัวอย่างที่ตัวบุคคล (Personal Simple)
                            ที่จะดำเนินการตรวจวัดและประเมินผลเปรียบเทียบกับเกณฑ์มาตรฐานที่กำหนดตามกฎหมาย,
                            มาตรฐานของสถาบันหรือองค์กรที่เกี่ยวข้อง เช่น OSHA, NIOSH, ACGIH
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตรวจวัดและประเมินสภาพแวดล้อมในการทำงาน (Working Environmental)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ดำเนินงานตามหลักวิชาการด้านสุขศาสตร์อุตสาหกรรม
                            โดยการสำรวจสภาพแวดล้อมในการทำงานเบื้องต้นเพื่อค้นหาสิ่งที่เป็นอันตรายต่อสุขภาพ
                            กำหนดให้มีการตรวจวัด,
                            วิเคราะห์และประเมินผลเปรียบเทียบกับเกณฑ์มาตรฐานตามกฎหมายหรือมาตรฐานตามข้อแนะนำของสถาบันหรือองค์กรที่เป็นที่ยอมรับ
                            จัดทำรายงานให้ข้อคิดเห็นและเสนอแนะเพื่อการควบคุมป้องกันต่อไปสภาพแวดล้อมในการทำงาน ได้แก่<br>
                            - ความร้อน (Heat Stress)<br>
                            - แสงสว่าง (Light)<br>
                            - เสียง (Noise)<br>
                            - สารเคมี (Chemical)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความร้อน (Heat Stress)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            ระดับความร้อน WBGT<br>
                            - ตรวจวัดด้วยเครื่องมือและอุปกรณ์ที่มีคุณลักษณะตามมาตรฐาน ISO 7243 หรือเทียบเท่า เช่น DIM EN
                            27243<br>
                            - ตรวจวัดระดับความร้อน WBGT
                            เฉลี่ยปริมาณที่ผู้ปฏิบัติงานทำงานแห่งเดียวหรือหลายบริเวณที่มีสภาพแวดล้อมต่างกัน
                            โดยทำการตรวจช่วงระยะเวลา 2 ชั่วโมงที่ร้อนที่สุด<br>
                            - ประเมินภาระงานในช่วง 2 ชั่วโมงที่ร้อนที่สุด เป็นงานเบา, งานปานกลาง หรืองานหนัก
                            ตามแนวทางของ
                            OSHA Technical Manual หรือเทียบเท่า เช่น ISO 8996<br>
                            - ประเมินผลการตรวจวัดโดยเปรียบเทียบค่าเฉลี่ยระดับความร้อน
                            และลักษณะความหนัก-เบาของงานกับเกณฑ์มาตรฐานที่กฎหมายกำหนด,
                            มาตรฐานของสถาบันหรือองค์กรที่เกี่ยวข้อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แสงสว่าง (Light)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            -
                            ตรวจวัดค่าเฉลี่ยความเข้มของแสงสว่างบริเวณพื้นที่ทั่วไปและบริเวณการผลิตภายในสถานประกอบกิจการ
                            ทุก ๆ 2x2 ตารางเมตร<br>
                            - ตรวจวัดความเข้มของแสงสว่างบริเวณที่ผู้ปฏิบัติงานต้องทำงานโดยใช้สายตามองเฉพาะจุด
                            หรือใช้สายตาอยู่กับที่ในการทำงาน<br>
                            - การตรวจวัดความเข้มของแสงสว่างในสถานประกอบกิจการ ใช้เครื่องวัดแสง (Light Meter)
                            มีคุณลักษณะสอดคล้องกับมาตรฐาน CIE 1931 (International Commission on Illumination) หรือ
                            ISO/CIE 10527 หรือเทียบเท่า เช่น JIS<br>
                            - เปรียบเทียบผลการตรวจวัดกับเกณฑ์มาตรฐานที่กฎหมายกำหนด,
                            มาตรฐานของสถาบันหรือองค์กรที่เกี่ยวข้อง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เสียง (Noise)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            - ตรวจวัดเพื่อประเมินระดับเสียงที่อาจมีผลกระทบต่อระบบการได้ยินของผู้ปฏิบัติงาน
                            และเพื่อให้ทราบประเภทและลักษณะของเสียงใช้ประโยชน์ในการควบคุมป้องกันเสียง
                            เครื่องตรวจวัดระดับเสียงมีคุณลักษณะสอดคล้องกับมาตรฐาน IEC 651 Type 2 หรือเทียบเท่า เช่น ANSI
                            S1.4, BS EN 60651, AS/NZS 1259.1 เป็นต้น หรือดีกว่า เช่น IEC 60804, IEC 61672, BS EN 60804,
                            AS/NZS 1259.2 เป็นต้น<br>
                            - ระดับเสียงแบบพื้นที่ (Leq 5 นาที) ตรวจวัดเฉพาะเสียงดังต่อเนื่อง (Continuous Noise)
                            แบบคงที่
                            (Steady-state Noise) เป็นลักษณะเสียงดังต่อเนื่อง มีระดับเสียงเปลี่ยนแปลงไม่เกิน3 dB(A)<br>
                            - ระดับเสียงเฉลี่ยตลอดระยะเวลาการทำงาน (TWA: Time WeightedAverage)
                            ตรวจวัดระดับเสียงประเภทเสียงดังต่อเนื่องแบบไม่คงที่ (Non-steady Stat Noise)
                            เป็นลักษณะเสียงดังต่อเนื่อง ที่มีระดับเสียงเปลี่ยนแปลงเกินกว่า 10 dB(A) และเสียงดังเป็นช่วง
                            ๆ (Intermittent Noise)<br>
                            - ปริมาณเสียงสะสมที่ตัวบุคคล (Noise Dose)
                            เพื่อประเมินเป็นระดับเสียงที่สัมผัสเฉลี่ยตลอดระยะเวลาการทำงาน (TWA: Time Weighted Average)
                            เครื่องวัดปริมาณเสียงสะสม (Noise Dosimeter) มีคุณลักษณะสอดคล้องกับมาตรฐานIEC 61252
                            หรือเทียบเท่า เช่น ANSI S1.25 หรือดีกว่า<br>
                            - เสียงกระทบหรือเสียงกระแทก (Impulse or Impact Noise) เพื่อประเมิน
                            การสัมผัสกับระดับเสียงกระทบหรือกระแทกที่เกิดขึ้นในระยะเวลาสั้นและอันตรายจะเกิดขึ้นกับระบบการได้ยิน
                            ขึ้นกับระดับเสียงและจำนวนครั้งที่สัมผัส ตรวจวัดด้วยเครื่องวัดเสียงกระทบหรือกระแทก (Impulse
                            or Impact Noise Meter) มีคุณลักษณะสอดคล้องกับมาตรฐาน IEC 61672 หรือ IEC 60804 หรือเทียบเท่า
                            เช่น ANSI S1.43 หรือดีกว่า<br>
                            - ระดับเสียงแบบพื้นที่แยกความถี่ (Sound Pressure Level and Octave band Analyzer)
                            เพื่อประเมินลักษณะของเสียงใช้เป็นข้อมูลในการจัดการควบคุม ป้องกันผลกระทบจากเสียง
                            เครื่องมือวิเคราะห์ความถี่เสียง<br>
                            - แผนผังแสดงระดับเสียง (Noise Contour Map) โดยใช้ Software
                            ที่ออกแบบมาสำหรับใช้ในงานด้านอาชีวอนามัยและความปลอดภัย
                            ทราบการกระจายตัวของเสียงในรูปแบบของแผนที่เสียงในแต่ละพื้นที่มีเสียงอยู่ระดับใดในภาพรวม
                            เพื่อใช้ในการจัดการควบคุม ป้องกันผลกระทบจากเสียงและจัดทำมาตรการอนุรักษ์การได้ยิน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตรวจวัดด้านชีวภาพ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            การตรวจวิเคราะห์ปริมาณจุลินทรีย์ในอากาศ<br>
                            - ปริมาณแบคทีเรียรวม<br>
                            - ปริมาณเชื้อรารวม
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตรวจวัดและประเมินคุณภาพอากาศภายในอาคาร (Indoor Air Quality)</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            คุณภาพอากาศภายในอาคารที่ไม่เหมาะสมอาจส่งผลกระทบกับสุขภาพอนามัย
                            หรือเกิดอาการเจ็บป่วยของผู้ใช้อาคารจำเป็นจะต้องมีการบริหารจัดการเพื่อควบคุมคุณภาพอากาศภายในอาคารอย่างเหมาะสมมีประสิทธิภาพ
                            พารามิเตอร์ที่ใช้เป็นดัชนีชี้วัดคุณภาพอากาศในอาคาร ได้แก่<br>
                            - อุณหภูมิ<br>
                            - ความชื่นสัมพัทธ์<br>
                            - ความเร็วลม<br>
                            - ปริมาณความเข้มข้นของคาร์บอนไดออกไซด์ (CO2)<br>
                            - ปริมาณความเข้มข้นของคาร์บอนมอนอกไซด์ (CO)<br>
                            - ปริมาณความเข้มข้นของฟอร์มาลดีไฮด์ (Formaldehyde)<br>
                            - ปริมาณความเข้มข้นของไอระเหยอินทรีย์ทั้งหมด (TVOC)<br>
                            - ปริมาณความเข้มข้นของฝุ่นละอองอนุภาคขนาดเล็ก 2.5 ไมครอน (PM2.5), 10 ไมครอน (PM10)<br>
                            - ปริมาณแบคทีเรียรวมในอากาศ<br>
                            - ปริมาณเชื้อรารวมในอากาศ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การประเมินสภาพการทำงานด้านการยศาสตร์ (Ergonomics)</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            เพื่อประเมินสภาพการทำงานในลักษณะงานต่าง ๆ
                            ทั้งงานในสำนักงาน,ในกระบวนการผลิตหรือกระบวนการทำงานที่มีท่าทางการทำงาน,
                            การใช้ส่วนของร่างกายทำงานไม่เหมาะสมและต่อเนื่องที่อาจทำให้เกิดผลกระทบต่อสุขภาพอนามัยของผู้ทำงาน
                            เช่น เกิดการเมื่อยตัว, บาดเจ็บกล้ามเนื้อ, เกิดภาระบาดเจ็บสะสมจากการทำงาน เป็นต้น
                            รูปแบบการประเมินพิจารณาให้เหมาะสมกับลักษณะการทำงาน ได้แก่<br>
                            - แบบประเมินท่าทางร่างกายส่วนบน RULA (Rapid Upper Limb Assessment)<br>
                            - แบบประเมินท่าทางร่างกายทั้งลำตัว REBA (Rapid Entire Body Assessment)<br>
                            - แบบประเมินความเสี่ยงในการทำงานกับคอมพิวเตอร์ (A proposed RULA for computer users)<br>
                            - แบบประเมินความเสี่ยงทางการยศาสตร์ด้วยวิธีการ ROSA (Rapid Offices Strain Assessment)<br>
                            ผลการประเมินเพื่อใช้เป็นแนวทางในการควบคุม ป้องกัน
                            และปรับปรุงแก้ไขสภาพการทำงานที่เสี่ยงต่อการบาดเจ็บ เจ็บป่วย เกิดอุบัติเหตุจากการทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตรวจวัดและประเมินสภาพการทำงานในสถานที่อับอากาศ
                                    (Inspection&Evaluation in Confine Spaces)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            เพื่อตรวจวัดและประเมินสภาพอากาศในที่อับอากาศและลักษณะการทำงานที่อาจเป็นอันตรายต่อร่างกายและชีวิตของผู้ปฏิบัติงาน
                            โดยการตรวจประเมิน<br>
                            - การเตรียมความพร้อมของการทำงานในที่อับอากาศ<br>
                            - ขั้นตอนการปฏิบัติงาน<br>
                            - การตรวจวัดปริมาณออกซิเจน<br>
                            - การตรวจวัด % การระเบิด (% LEL)<br>
                            - การตรวจวัด % ก๊าซที่ทำให้เกิดการระเบิด<br>
                            การประเมินผลเปรียบเทียบกับมาตรฐานตามกฎกระทรวง
                            กำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย
                            อาชีวอนามัยและสภาพแวดล้อมในการทำงานในที่อับอากาศ พ.ศ. 2547, มาตรฐานตามข้อกำหนด ของ OSHA
                            หรือตามข้อเสนอแนะของ NIOSH
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตรวจวัดและประเมินคุณภาพบรรยากาศทั่วไป</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            การตรวจวัดและประเมินคุณภาพบรรยากาศทั่วไปเพื่อการเฝ้าระวัง<br>
                            - เสียงรบกวน ระดับเสียงเฉลี่ย 24 ชั่วโมง(Leq 24 Hour) และระดับเสียงสูงสุด (Lmax)<br>
                            - ระดับเสียงของยานพาหนะ<br>
                            - ปริมาณความเข้มข้นฝุ่นละอองขนาดไม่เกิน 100 ไมครอน (TSP), ฝุ่นละอองขนาดไม่เกิน 10 ไมครอน
                            (PM10),ฝุ่นละอองขนาดไม่เกิน 2.5 ไมครอน (PM2.5)<br>
                            - ปริมาณสารมลพิษทางอากาศ ได้แก่ ก๊าซคาร์บอนไดซัลไฟด์(CS2), ก๊าซคาร์บอนมอนอกไซด์
                            (CO),ก๊าซไนโตรเจนไดออกไซด์ (NO2), ก๊าซซัลเฟอร์ไดออกไซด์ (SO2)(0.12 ppm)(0.30 mg/m3),
                            ก๊าซโอโซน (O3)<br>
                            - ปริมาณสารอินทรีย์ระเหยง่าย (Volatile Organic
                            Compounds)ในบรรยากาศโดยทั่วไปที่เป็นสารก่อมะเร็ง (carcinogen) และสารที่มิได้เป็นสารก่อมะเร็ง
                            (non-carcinogen) ตามประกาศกรมควงคุมมลพิษ เช่น อะซิทัลดีไฮด์ (Acetaldehyde),
                            อะครอลีน(Acrolein), อะคริโลไนไตรล์(Acrylonitrile), เบนซีน (Benzene), เบนซิลคลอไรด์ (Benzyl
                            Chloride), คาร์บอนเตตระคลอไรด์ (Carbon Tetrachloride),คลอโรฟอร์ม (Chloroform)และอื่น ๆ
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