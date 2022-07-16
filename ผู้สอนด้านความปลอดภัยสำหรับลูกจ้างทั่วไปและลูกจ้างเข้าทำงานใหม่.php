<?php include('header_front.php'); ?>

<?php 
    $id_training = 438;//ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ ความปลอดภัยฯ

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
            <h2 class="text-center"><b>ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ
                    ความปลอดภัยฯ</b></h2>
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
                                พระราชบัญญัติความปลอดภัย อาชีวอนามัยและสภาพแวดล้อมในการทำงาน พ.ศ.2554 มาตรา 16
                                ให้นายจ้างจัดให้ผู้บริหาร หัวหน้างาน และลูกจ้างทุกคนได้รับการฝึกอบรมความปลอดภัย
                                อาชีวอนามัย และสภาพแวดล้อมในการทำงาน เพื่อให้บริหารจัดการ และดำเนินการด้านความปลอดภัย
                                อาชีวอนามัย และสภาพแวดล้อมในการทำงานได้อย่างปลอดภัย
                                ในกรณีที่นายจ้างรับลูกจ้างเข้าทำงาน เปลี่ยนงาน เปลี่ยนสถานที่ทำงาน
                                หรือเปลี่ยนแปลงเครื่องจักรหรืออุปกรณ์ ซึ่งอาจทำให้ลูกจ้างได้รับอันตรายต่อชีวิต ร่างกาย
                                จิตใจ หรือสุขภาพอนามัยให้นายจ้างจัดให้มีการฝึกอบรมลูกจ้างทุกคนก่อนการเริ่มทำงาน
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
                                การฝึกอบรมตามวรรคหนึ่งและวรรคสอง เป็นไปตามหลักเกณฑ์ วิธีการ
                                และเงื่อนไขตามประกาศกรมสวัสดิการและคุ้มครองแรงงานเรื่อง หลักเกณฑ์ วิธีการ
                                และเงื่อนไขการฝึกอบรมผู้บริหาร หัวหน้างาน และลูกจ้างด้านความปลอดภัย อาชีวอนามัย
                                และสภาพแวดล้อมในการทำงาน ซึ่งประกาศในราชกิจจานุเบกษาเมื่อวันที่ 2 พฤษภาคม 2555
                                และมีผลใช้บังคับตั้งแต่วันถัดจากวันประกาศในราชกิจจานุเบกษาเป็นต้นไป
                                ในการฝึกอบรมวิทยากรฝึกอบรม ต้องมีคุณสมบัติอย่างหนึ่งอย่างใด
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (9).jpg" alt="">
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
                    class="head_nav">ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไป<br>และลูกจ้างเข้าทำงานใหม่
                    ตาม พ.ร.บ</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                ท่านสามารถค้นหาหลักสูตรผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="437" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery8.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        ตามที่พระราชบัญญัติความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทํางาน พ.ศ. 2554 มาตรา 16
                        กําหนดให้อธิบดีประกาศกําหนดหลักเกณฑ์วิธีการ และเงื่อนไขการฝึกอบรม ผู้บริหาร หัวหน้างาน โดย
                        คุณสมบัติวิทยากรฝึกอบรม ต้องมีคุณสมบัติอย่างหนึ่งอย่างใด ดังต่อไปนี้ (1)
                        เป็นผู้มีความรู้และมีประสบการณ์ใน
                        การทํางานที่เกี่ยวข้องกับหัวข้อวิชาที่บรรยายไม่น้อยกว่าสามปีหรือเป็นผู้ปฏิบัติงานโดยตรงเกี่ยวกับการพัฒนา
                        องค์ความรู้ หรือมาตรฐานด้านความปลอดภัยในการทํางานไม่น้อยกว่าสามปี ทั้งนี้
                        ต้องมีประสบการณ์การเป็น วิทยากรด้านความปลอดภัยในการทํางานไม่น้อยกว่าหนึ่งปี
                        เป็นผู้มีความรู้และมีประสบการณ์ในการทํางานที่ เกี่ยวข้องกับหัวข้อวิชาที่บรรยายไม่น้อยกว่าหนึ่งปี
                        หรือเป็นผู้ปฏิบัติงานโดยตรงเกี่ยวกับการพัฒนาองค์ความรู้หรือ
                        มาตรฐานด้านความปลอดภัยในการทํางานไม่น้อยกว่าหนึ่งปี สําหรับการฝึกอบรมเฉพาะข้อ 7 และข้อ 4 (2)
                        เป็นอาจารย์ในสถาบันอุดมศึกษาที่สําเร็จการศึกษาไม่ต่ํากว่าปริญญาตรีสาขาอาชีวอนามัยหรือเทียบเท่า
                        โดยสอน วิชาด้านความปลอดภัยในการทํางาน และมีประสบการณ์การสอนเกี่ยวกับวิชาดังกล่าวไม่น้อยกว่าสามปี
                        (3) เป็นเจ้าหน้าที่ของหน่วยงานราชการที่มีคุณวุฒิไม่ต่ํากว่าปริญญาตรีสาขาอาชีวอนามัย
                        หลักสูตรผู้สอนด้านความ ปลอดภัยอาชีวอนามัย
                        และสภาพแวดล้อมในการทํางานสําหรับลูกจ้างทั่วไปและลูกจ้างเข้าทํางานใหม่ จึงเป็น
                        ความสําคัญที่องค์กรต่าง ๆ ที่ต้องสร้างวิทยากรภายในหลักสูตรดังกล่าว
                        เพื่อสร้างความปลอดภัยให้เกิดขึ้น ภายในองค์กร<br><br>
                        วัตถุประสงค์<br>
                        1. ผู้เข้ารับการอบรมเรียนรู้ เทคนิคการสอน ด้านความปลอดภัยฯ
                        สําหรับลูกจ้างทั่วไปและลูกจ้างเข้าทํางานใหม่<br>
                        2. ผู้เข้ารับการอบรมสามารถฝึกปฏิบัติแบบสถานการณ์จริง
                        ในหลักสูตรความปลอดภัยฯ สําหรับลูกจ้าง
                        ใหม่/ ลูกจ้างทั่วไป<br><br>
                        เนื้อหาหลักสูตร<br>
                        1. การสรุปประเด็นและเทคนิคการนําเสนอ “ความรู้เกี่ยวกับความปลอดภัย อาชีวอนามัย
                        และสภาพแวดล้อมในการทํางาน”<br>
                        2. เทคนิคการใช้สื่อการสอนอย่างมีประสิทธิภาพ<br>
                        3. เทคนิคการสร้างความมั่นใจให้กับผู้สอนด้านความปลอดภัย<br>
                        4. การปฏิบัติการสอน “หลักสูตรความปลอดภัยฯ สําหรับลูกจ้างทั่วไป/ใหม่ (Role
                        Play) เป็นรายบุคคลและการวิจารณ์ (commentator)
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
            ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้สอนด้านความปลอดภัย-01.jpg" alt="ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้สอนด้านความปลอดภัย-02.jpg" alt="ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความผู้สอนด้านความปลอดภัย-03.jpg" alt="ผู้สอนด้านความปลอดภัยสำหรับลูกจ้างทั่วไปและลูกจ้างเข้าทำงานใหม่ ตาม พ.ร.บ">
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
                            <h5><b>การแจ้งลูกจ้างให้ทราบอันตราย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            มาตรา 14
                            ในกรณีที่นายจ้างให้ลูกจ้างทำงานในสภาพการทำงานหรือสภาพแวดล้อมในการทำงานที่อาจทำให้ลูกจ้างได้รับอันตรายต่อชีวิต
                            ร่างกายจิตใจ หรือสุขภาพอนามัย ให้นายจ้างแจ้งให้ลูกจ้างทราบถึง
                            อันตรายที่อาจจะเกิดขึ้นจากการทำงาน
                            และแจกคู่มือปฏิบัติงานให้ลูกจ้างทุกคนก่อนที่ลูกจ้างจะเข้าทำงาน
                            เปลี่ยนงาน หรือเปลี่ยนสถานที่ทำงาน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การฝึกอบรมลูกจ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            มาตรา 16 ให้นายจ้างจัดให้ผู้บริหาร หัวหน้างาน และลูกจ้างทุกคนได้รับการฝึกอบรมความปลอดภัย
                            อาชีวอนามัย และสภาพแวดล้อมในการทำงาน เพื่อให้บริหารจัดการและดำเนินการด้าน
                            ความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานได้อย่างปลอดภัย
                            ในกรณีที่นายจ้างรับลูกจ้างเข้าทำงาน เปลี่ยนงาน เปลี่ยนสถานที่ทำงาน หรือเปลี่ยนแปลง
                            เครื่องจักรหรืออุปกรณ์ ซึ่งอาจทำให้ลูกจ้างได้รับอันตรายต่อชีวิต ร่างกาย จิตใจ
                            หรือสุขภาพอนามัย ให้นายจ้างจัดให้มีการฝึกอบรมลูกจ้างทุกคนก่อนการเริ่มทำงาน
                            การฝึกอบรมตามวรรคหนึ่งและวรรคสอง ให้เป็นไปตามหลักเกณฑ์วิธีการ
                            และเงื่อนไขที่อธิบดีประกาศกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>
                                    การปิดประกาศสัญลักษณ์
                                </b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            มาตรา 17 ให้นายจ้างติดประกาศสัญลักษณ์เตือนอันตรายและเครื่องหมายเกี่ยวกับความปลอดภัย
                            อาชีวอนามัย และสภาพแวดล้อมในการทำงาน รวมทั้งข้อความแสดงสิทธิและหน้าที่
                            ของนายจ้างและลูกจ้างตามที่อธิบดีประกาศกำหนดในที่ที่เห็นได้ง่าย ณ สถานประกอบกิจการ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หน้าที่นายจ้างและลูกจ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            มาตรา 18 ในกรณีที่สถานที่ใดมีสถานประกอบกิจการหลายแห่ง
                            ให้นายจ้างทุกรายของสถานประกอบกิจการในสถานที่นั้น มีหน้าที่ร่วมกันดำเนินการด้านความปลอดภัย
                            อาชีวอนามัย และ
                            สภาพแวดล้อมในการทำงานให้เป็นไปตามพระราชบัญญัตินี้
                            ลูกจ้างซึ่งทำงานในสถานประกอบกิจการตามวรรคหนึ่ง รวมทั้งลูกจ้างซึ่งทำงานในสถานประกอบ
                            กิจการอื่นที่ไม่ใช่ของนายจ้าง ต้องปฏิบัติตามหลักเกณฑ์เกี่ยวกับความปลอดภัย อาชีวอนามัย
                            และสภาพแวดล้อมในการทำงานซึ่งใช้ในสถานประกอบกิจการนั้นด้วย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หน้าที่ลูกจ้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            มาตรา 21
                            ลูกจ้างมีหน้าที่ดูแลสภาพแวดล้อมในการทำงานตามมาตรฐานที่กำหนดในกฎกระทรวงที่ออกตามมาตรา 8
                            เพื่อให้เกิดความปลอดภัยต่อชีวิต ร่างกาย จิตใจ และสุขภาพอนามัย
                            โดยคำนึงถึงสภาพของงานและพื้นที่ที่รับผิดชอบ
                            ในกรณีที่ลูกจ้างทราบถึงข้อบกพร่องหรือการชำรุดเสียหาย และไม่สามารถแก้ไขได้ด้วยตนเอง
                            ให้แจ้งต่อเจ้าหน้าที่ความปลอดภัยในการทำงาน หัวหน้างาน หรือผู้บริหาร
                            และให้เจ้าหน้าที่ความปลอดภัยในการทำงาน หัวหน้างาน หรือผู้บริหาร
                            แจ้งเป็นหนังสือต่อนายจ้างโดยไม่ชักช้าในกรณีที่หัวหน้างานทราบถึงข้อบกพร่องหรือการชำรุดเสียหายซึ่งอาจทำให้ลูกจ้างได้รับอันตรายต่อชีวิต
                            ร่างกาย จิตใจ หรือสุขภาพอนามัย ต้องดำเนินการป้องกันอันตรายนั้นภายในขอบเขตที่รับผิดชอบ
                            หรือที่ได้รับมอบหมายทันทีที่ทราบกรณีไม่อาจดำเนินการได้ให้แจ้งผู้บริหารหรือนายจ้างดำเนินการแก้ไขโดยไม่ชักช้า
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            ให้นายจ้างจัดและดูแลให้ลูกจ้างสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลที่ได้
                            มาตรฐานตามที่อธิบดีประกาศกำหนด
                            ลูกจ้างมีหน้าที่สวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลและดูแลรักษาอุปกรณ์ตาม
                            วรรคหนึ่งให้สามารถใช้งานได้ตามสภาพและลักษณะของงานตลอดระยะเวลาทำงาน
                            ในกรณีที่ลูกจ้างไม่สวมใส่อุปกรณ์ดังกล่าว
                            ให้นายจ้างสั่งให้ลูกจ้างหยุดการทำงานนั้นจนกว่าลูกจ้าง
                            จะสวมใส่อุปกรณ์ดังกล่าว
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>หน้าที่ผู้รับเหมาชั้นต้น</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ให้ผู้รับเหมาชั้นต้นและผู้รับเหมาช่วงตามกฎหมายว่าด้วยการคุ้มครองแรงงานมีหน้าที่
                            ดำเนินการด้ในกรณีที่นายจ้างเป็นผู้รับเหมาช่วง และมีผู้รับเหมาช่วงถัดขึ้นไป
                            ให้ผู้รับเหมาช่วงถัดขึ้นไป
                            ตลอดสายจนถึงผู้รับเหมาชั้นต้นที่มีลูกจ้างทำงานในสถานประกอบกิจการเดียวกัน
                            มีหน้าที่ร่วมกันในการจัด
                            สถานที่ทำงานให้มีสภาพการทำงานที่ปลอดภัย และมีสภาพแวดล้อมในการทำงานที่ถูกสุขลักษณะเพื่อให้
                            เกิดความปลอดภัยแก่ลูกจ้างทุกคนานความปลอดภัย ฯ ของลูกจ้างเช่นเดียวกับนายจ้าง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การแจ้งการประสบอันตราย</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            มาตรา 34 ในกรณีที่สถานประกอบกิจการใดเกิดอุบัติภัยร้ายแรง หรือลูกจ้างประสบอันตราย
                            จากการทำงาน ให้นายจ้างดำเนินการดังต่อไปนี้<br>
                            (1) กรณีที่ลูกจ้างเสียชีวิต ให้นายจ้างแจ้งต่อพนักงานตรวจความปลอดภัยในทันทีที่ทราบ
                            โดยโทรศัพท์โทรสาร หรือวธิีอื่นใดที่มีรายละเอียดพอสมควร
                            และให้แจ้งรายละเอียดและสาเหตุเป็นหนังสือ
                            ภายในเจ็ดวันนับแต่วันที่ลูกจ้างเสียชีวิต<br>
                            (2) กรณีที่สถานประกอบกิจการได้รับความเสียหายหรือต้องหยุดการผลิต หรือมีบุคคลในสถาน
                            ประกอบกิจการประสบอันตรายหรือได้รับความเสียหายอันเนื่องมาจากเพลิงไหม้การระเบิด สารเคมีร่ัวไหล
                            หรืออุบัติภัยร้ายแรงอื่น ให้นายจ้างแจ้งต่อพนักงานตรวจความปลอดภัยในทันทีที่ทราบ โดยโทรศัพท์
                            โทรสาร หรือวิธีอื่นใด และให้แจ้งเป็นหนังสือโดยระบุสาเหตุอันตรายที่เกิดขึ้น ความเสียหาย
                            การแก้ไข
                            และวิธีการป้องกันการเกิดซ้ำอีกภายในเจ็ดวันนับแต่วันเกิดเหตุ<br>
                            (3) กรณีที่มีลูกจ้างประสบอันตราย หรือเจ็บป่วยตามกฎหมายว่าด้วยเงินทดแทน เมื่อนายจ้างแจ้ง
                            การประสบอันตรายหรือเจ็บป่วยต่อสำนักงานประกันสังคมตามกฎหมายดังกล่าวแล้ว ให้นายจ้างส่งสำเนา
                            หนังสือแจ้งนั้นต่อพนักงานตรวจความปลอดภัย
                            การแจ้งเป็นหนังสือตามวรรคหนึ่ง ให้เป็นไปตามแบบที่อธิบดีประกาศกำหนดและเมื่อพนักงาน
                            ตรวจความปลอดภัยได้รับแจ้งแล้ว ให้ดำเนินการตรวจสอบและหามาตรการป้องกันอันตรายโดยไม่เร็ว
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสั่งให้บุคคลเข้าดำเนินการ โดยนายจ้างจ่าย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            มาตรา 37 ในกรณีที่นายจ้างไม่ปฏิบัติตามคำสั่งของพนักงานตรวจความปลอดภัย ตามมาตรา 36
                            ถ้ามีเหตุอันอาจก่อให้เกิดอันตรายอย่างร้ายแรงที่กรมสวัสดิการและคุ้มครองแรงงานสมควรเข้าไปดำเนินการ
                            แทน ให้อธิบดีหรือผู้ซึ่งอธิบดีมอบหมาย มีอำนาจสั่งให้พนักงานตรวจความปลอดภัยหรือมอบหมายให้
                            บุคคลใดเข้าจัดการแก้ไขเพื่อให้เป็นไปตามคำสั่งนั้นได้ในกรณีเช่นนี้นายจ้างต้องเป็นผู้เสียค่าใช้จ่ายสำหรับ
                            การเข้าจัดการแก้ไขนั้นตามจำนวนที่จ่ายจริง
                            ในการดำเนินการตามวรรคหนึ่ง ให้กรมสวัสดิการและคุ้มครองแรงงานขอรับเงินช่วยเหลือจาก
                            กองทุนเพื่อเป็นค่าใช้เงินทดรองจ่ายในการดำเนินการได้และเมื่อได้รับเงินจากนายจ้างแล้วให้ชดใช้เงิน
                            ช่วยเหลือที่ได้รับมาคืนแก่กองทุน
                            ก่อนที่อธิบดีหรือผู้ซึ่งอธิบดีมอบหมายจะดำเนินการตามวรรคหนึ่ง จะต้องมีคำเตือนเป็นหนังสือ
                            ให้นายจ้างปฏิบัติตามคำสั่งของพนักงานตรวจความปลอดภัยภายในระยะเวลาที่กำหนดคำเตือนดังกล่าว
                            จะกำหนดไปพร้อมกับคำสั่งของพนักงานตรวจความปลอดภัยก็ได้
                            ในการดำเนินการตามวรรคหนึ่ง ให้กรมสวัสดิการและคุ้มครองแรงงานขอรับเงินช่วยเหลือจาก
                            กองทุนเพื่อเป็นค่าใช้เงินทดรองจ่ายในการดำเนินการได้และเมื่อได้รับเงินจากนายจ้างแล้วให้ชดใช้เงิน
                            ช่วยเหลือที่ได้รับมาคืนแก่กองทุน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การจ่ายค่าจ้างระหว่างหยุดงาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            มาตรา 39 ระหว่างหยุดการทำงานหรือหยุดกระบวนการผลิตตามมาตรา 36 ให้นายจ้างจ่ายเงิน
                            ให้แก่ลูกจ้างที่เกี่ยวข้องกับการหยุดการทำงานหรือการหยุดกระบวนการผลิตนั้นเท่ากับค่าจ้างหรือสิทธิ
                            ประโยชน์อื่นใดที่ลูกจ้างต้องได้รับ
                            เว้นแต่ลูกจ้างรายนั้นจงใจกระทำการอันเป็นเหตุให้มีการหยุดการทำงาน
                            หรือหยุดกระบวนการผลิต
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