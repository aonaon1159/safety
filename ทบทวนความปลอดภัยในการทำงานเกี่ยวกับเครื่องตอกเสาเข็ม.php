<?php include('header_front.php'); ?>

<?php 
    $id_training = 463;//ทบทวนความปลอดภัยในการทำงานเกี่ยวกับเครื่องตอกเสาเข็ม

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
            <h2 class="text-center"><b>ทบทวนความปลอดภัยในการทำงานเกี่ยวกับเครื่องตอกเสาเข็ม</b></h2>
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
                                อาศัยอำนาจตามความในมาตรา 6 และมาตรา 103 วรรคหนึ่ง แห่งพระราชบัญญัติคุ้มครองแรงงาน พ.ศ.
                                2541 อันเป็นกฎหมายที่มีบทบัญญัติบางประการเกี่ยวกับการจำกัดสิทธิและเสรีภาพของบุคคล
                                ซึ่งมาตรา 29 ประกอบกับมาตรา 33 มาตรา 41 และมาตรา 43 ของรัฐธรรมนูญแห่งราชอาณาจักรไทย
                                บัญญัติให้กระทำได้โดยอาศัยอำนาจตามบทบัญญัติแห่งกฎหมาย
                                รัฐมนตรีว่าการกระทรวงแรงงานออกกฎกระทรวงไว้ว่า “การตอกเสาเข็ม” หมายความว่า
                                วิธีการทำให้เสาเข็มจมลงไปในพื้นดินตามความต้องการโดยใช้น้ำหนักตอกหรือกด
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
                                ผู้บังคับเครื่องตอกเสาเข็ม
                                ต้องทำหน้าที่ควบคุมรถปั้นจั่นตอกเสาเข็มและทำการตอกเสาเข็มให้มีคุณภาพตามมาตรฐานตามที่กำหนด
                                ประกอบกับพนักงานตอกเสาเข็มต้องใช้ทั้งทักษะฝีมือและความชำนาญสูง
                                ต้องมีความรู้ในการใช้รถปั้นจั่นตอกเสาเข็มที่ถูกต้องและปลอดภัยในการทำงาน ในขณะเดียวกัน
                                ถ้าผู้บังคับเครื่องตอกเสาเข็มขาดความรู้ ขาดทักษะความชำนาญ
                                ไปทำงานเกี่ยวกับการตอกเสาเข็มก็อาจทำให้เกิดอันตรายแก่ชีวิต และทรัพย์สินได้
                                ซึ่งอาจจะส่งผลถึงความมั่นคงแข็งแรงของฐานรากงานก่อสร้างด้วย
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (1).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ทบทวนความปลอดภัยในการทำงานเกี่ยวกับเครื่องตอกเสาเข็ม</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรทบทวนความปลอดภัยในการทำงานเกี่ยวกับเครื่องตอกเสาเข็ม
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="570" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery13.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ผู้บังคับเครื่องตอกเสาเข็ม
                        ต้องทำหน้าที่ควบคุมรถปั้นจั่นตอกเสาเข็มและทำการตอกเสาเข็มให้มีคุณภาพตามมาตรฐานตามที่กำหนด
                        ประกอบกับพนักงานตอกเสาเข็มต้องใช้ทั้งทักษะฝีมือและความชำนาญสูง
                        ต้องมีความรู้ในการใช้รถปั้นจั่นตอกเสาเข็มที่ถูกต้องและปลอดภัยในการทำงาน
                        ในขณะเดียวกัน ถ้าผู้บังคับเครื่องตอกเสาเข็มขาดความรู้ ขาดทักษะความชำนาญ
                        ไปทำงานเกี่ยวกับการตอกเสาเข็มก็อาจทำให้เกิดอันตรายแก่ชีวิต
                        และทรัพย์สินได้ ซึ่งอาจจะส่งผลถึงความมั่นคงแข็งแรงของฐานรากงานก่อสร้างด้วย<br><br>

                        วัตถุประสงค์<br>
                        1) เพื่อให้ผู้ที่ทำหน้าที่บังคับเครื่องตอกเสาเข็มมีความรู้ ความเข้าใจ เกี่ยวกับกฎหมาย
                        ที่เกี่ยวข้องกับงานเสาเข็ม<br>
                        2) เพื่อให้เป็นไปตามข้อกำหนดของกฎหมาย<br>
                        3)
                        เพื่อให้ผู้เข้ารับการฝึกอบรมเข้าใจและปฏิบัติได้อย่างถูกต้องในบทบาทหน้าที่และความรับผิดชอบของผู้บังคับเครื่องตอกเสาเข็ม<br>
                        4)
                        เพื่อให้ผู้เข้ารับการฝึกอบรมตระหนักถึงอันตรายและเห็นความสำคัญของการปฏิบัติตามขั้นตอนการทำงาน<br><br>

                        หัวข้อการอบรม<br>
                        1) กฎหมายเกี่ยวกับเครื่องตอกเสาเข็มและกฎหมายความปลอดภัยที่เกี่ยวข้อง<br>
                        2) กฎกระทรวงกำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัยและ
                        สภาพแวดล้อมในการทำงานเกี่ยวกับงานก่อสร้าง พ.ศ. 2551<br>
                        3) ความปลอดภัยในการทำงานเกี่ยวกับระบบไฟฟ้า<br>
                        4) ประกาศกรมสวัสดิการและคุ้มครองแรงงาน เรื่อง หลักเกณฑ์และวิธีการ การใช้เชือก ลวดสลิง และ รอก
                        พ.ศ. 2553<br>
                        5) ประกาศกรมสวัสดิการและคุ้มครองแรงงาน เรื่อง หลักเกณฑ์ วิธีการ และเงื่อนไขการทำงานเกี่ยวกับ
                        เครื่องตอกเสาเข็มระบบไอน้ำ ระบบลม ระบบไฮดรอลิค ระบบเครื่องยนต์เผาไหม้ภายใน ระบบดีเซล
                        แฮมเมอร์หรือระบบอื่น พ.ศ. 2552<br>
                        6) มาตรฐานสัญลักษณ์ความปลอดภัย<br>
                        7) เสาเข็มและเครื่องตอกเสาเข็มชนิดต่างๆ<br>
                        8) การใช้สัญญาณมือกับเครื่องจักรกลหนัก<br>
                        9) ความปลอดภัยในงานตอกเสาเข็ม<br>
                        10) ความปลอดภัยในการใช้อุปกรณ์ช่วยยก
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
                    ทบทวนความปลอดภัยในการทำงานเกี่ยวกับเครื่องตอกเสาเข็ม
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-06.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความเครื่องตอกเสาเข็ม-04.jpg" alt="">
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
                            <h5><b>เสาเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            สิ่งซึ่งทำให้จมลงไปในพื้นดินเพื่อรับน้ำหนักของโครงสร้างต่าง ๆ
                            โดยถ่ายน้ำหนักจากโครงสร้างอาคารหรือสิ่งก่อสร้างอื่นสู่ดินชั้นล่าง
                            หรือเพื่อใช้เป็นกำแพงกันดิน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เสาเข็มเจาะ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            เสาเข็มคอนกรีตเสริมเหล็กหรือไม่เสริมเหล็กที่ก่อสร้างโดยวิธีการขุดหรือเจาะเอาดินออก
                            แล้วเทคอนกรีตลงในหลุมที่ขุดหรือเจาะนั้น
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การตอกเสาเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            วิธีการทำให้เสาเข็มจมลงไปในพื้นดินตามความต้องการโดยใช้น้ำหนักตอกหรือกด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องตอกเสาเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เครื่องจักรที่ใช้ในการตอกเสาเข็ม ประกอบด้วย โครงสร้างและเครื่องต้นกำลัง
                            ซึ่งอาจแยกออกจากกันหรือรวมเป็นชุดเดียวกันก็ได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ผู้บังคับเครื่องตอกเสาเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            ผู้ซึ่งมีหน้าที่บังคับการทำงานของเครื่องตอกเสาเข็มให้ทำงานตามความต้องการ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>เครื่องตอกเสาเข็มที่นายจ้างจะนำมาใช้ต้องมีรายละเอียดคุณลักษณะ ดังต่อไปนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            (1) โครงเครื่องตอกเสาเข็มต้องมีค่าความปลอดภัยไม่น้อยกว่า 2<br>
                            (2) โครงเครื่องตอกเสาเข็มต้องสร้างด้วยโลหะที่มีจุดคราก (yield point) ไม่น้อยกว่า 2,400
                            กิโลกรัมต่อตารางเซนติเมตร<br>
                            (3) โครงเครื่องตอกเสาเข็มต้องมีการยึดโยง ค้ำยัน หรือตรึงให้มั่นคงแข็งแรงและปลอดภัย<br>
                            (4) คานติดตั้งรอกและฐานรองรับคานต้องสามารถรับน้ำหนักรอก ลูกตุ้ม
                            และน้ำหนักเสาเข็มรวมกันโดยมีค่าความปลอดภัยไม่น้อยกว่า 5<br>
                            (5)
                            รางเลื่อนเครื่องตอกเสาเข็มต้องสามารถรับน้ำหนักได้ไม่น้อยกว่าสองเท่าของน้ำหนักเครื่องตอกเสาเข็ม
                            ในกรณีที่ใช้เครื่องตอกเสาเข็มระบบดีเซลแฮมเมอร์
                            อุปกรณ์ที่ใช้ยึดกับโครงเครื่องตอกเสาเข็มต้องมีค่าความปลอดภัยไม่น้อยกว่า 6
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ขั้นตอนการตอกเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) วางแผนการ Start ตอกเสาเข็มต้นแรกและแนวทางการเดิน ปั้นจั่น (Piling Sequence) โดย
                            Engineer<br>
                            (2) เมื่อ Survey ทำการวางหมุดเสร็จแล้วให้ Foreman Recheck
                            ระยะก่อนว่าถูกต้องหรือคลาดเคลื่อนจากแบบแปลนหรือไม่<br>
                            (3) ก่อนที่ปั้นจั่นจะยกเสาเข็มขึ้นตอกให้ ทำ off set ตำแหน่งของเข็ม ทั้ง 2 แกน
                            ก่อนยกเสาเข็มขึ้นและ Recheck off set โดย Foreman
                            อีกครั้งเพื่อให้เข็มได้ตำแหน่งที่ถูกต้อง<br>
                            (4) ก่อนทำการ Check ดิ่ง ควรตอกเข็มให้จมลงไปก่อน ประมาณ 30 – 50 cm. แล้ว Recheck off set
                            อีกครั้งว่าคลาดเคลื่อนหรือไม่ แล้วทำการ Check ดิ่ง โดย Foreman ต้องตรวจสอบด้วยเสมอ
                            ซึ่งการตรวจสอบต้องตรวจสอบทั้ง 2 แกน คือ ด้านหน้าและด้านข้าง โดยค่าการดิ่งไม่ควรเกิน 1 : 500
                            หรือ 0.1%<br>
                            (5) ในการตอกเข็มให้ Foreman ตรวจสอบน้ำหนักของตุ้มตอก และระยะยกของลูกตุ้มให้ได้ตามที่คำนวณไว้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การ Check Blow Count</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) Mark ระยะที่ปลายของเสาเข็มแต่ละต้นเป็นช่วงๆละ 30 cm. จำนวน 10 ช่วง หรือประมาณ 3 เมตร<br>
                            (2) ทำการตอกเสาเข็มจนถึงตำแหน่งที่ Mark ไว้ (3 m.) เริ่มทำการนับจำนวน Blow ในแต่ละช่วง (30
                            cm.) ทำการบันทึกค่าไว้ของแต่ละช่วงว่าได้ Blow เท่าไหร่ จนกระทั่งถึงช่วงๆหนึ่ง จำนวน Blow
                            จะเพิ่มขึ้นมาก แต่ระยะที่เสาเข็มจมลงน้อยมาก จึงทำการนับ Blow ที่ตอก 10 ครั้งสุดท้าย (Last
                            ten blow) แล้ววัดระยะที่เข็มจมลงในการตอก 10 ครั้งสุดท้าย แล้วบันทึกค่าไว้ (ทำ 2 ครั้ง) (Last
                            ten Blow ต้องไม่เกินจากค่าที่คำนวณไว้)<br>
                            (3) Foreman recheck ทิศทางการเยื้องศูนย์ของเข็ม บันทึกการเยื้องศูนย์
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อแตกต่างระหว่างการใช้เสาเข็มแบบตอกกับเสาเข็มเจาะ</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            เสาเข็มแบบตอกเป็นการใช้ปั้นจั่นขนาดใหญ่ทำการตอกเสาเข็มลงไปในดินเพื่อให้ได้ความลึกตามที่เราต้องการ
                            เป็นวิธีที่นิยมใช้กันมากเพราะไม่มีความซับซ้อนและมีค่าใช้จ่ายไม่สูงมากนัก
                            แต่การฝังเสาเข็มในรูปแบบนี้ มักจะมีปัญหาในการเคลื่อนย้ายวัสดุอุปกรณ์เข้าในที่ก่อสร้าง
                            เพราะเป็นอุปกรณ์ที่มีขนาดใหญ่กินพื้นที่มาก และสร้างแรงสั่นสะเทือนให้กับบริเวณข้างเคียง
                            ดังนั้นการฝังเสาเข็มโดยการตอกเหมาะกับพื้นที่ๆห่างไกลชุมชน
                            เสาเข็มเจาะ ขั้นตอนแรกจะมีการขุดหลุมรอไว้ล่วงหน้า
                            จากนั้นก็จะทำการเทคอนกรีตลงไปในหลุมที่เตรียมไว้ ซึ่งสะดวกมากว่าการฝังเสาเข็มแบบตอก
                            เพราะสามารถขนย้ายอุปกรณ์เข้าเขตก่อสร้างได้อย่างสะดวกและสามารถทำงานในพื้นที่ๆจำกัดได้
                            และมีปัญหาเรื่องแรงสั่นสะเทือนน้อย จึงไม่เป็นที่รบกวนชาวบ้าน การฝังเสาเข็มรูปแบบนี้
                            จะมีค่าใช่จ่ายที่ค่อนข้างสูง เหมาะกับการฝังเสาเข็มในพื้นที่เขตชุมชน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ประเภทของเสาเข็ม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            เสาเข็มที่ใช้กับอาคารบ้านเรือนทั่วไปในปัจจุบันสามารถแบ่งออกได้เป็น 3 ประเภทใหญ่ ๆ
                            ตามลักษณะของการผลิตและการใช้งาน ได้แก่<br>
                            (1) เสาเข็มคอนกรีตอัดแรง (prestressed concrete pile)<br>
                            (2) เสาเข็มเจาะ (bored pile)<br>
                            (3) เสาเข็มกลมแรงเหวี่ยงอัดแรง (prestressed concrete spun pile)
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