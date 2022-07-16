<?php include('header_front.php'); ?>

<?php 
    $id_training = 457;//ความปลอดภัยในการทํางานเกี่ยวกับรังสี | ผู้ปฏิบัติงานทางรังสี

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
            <h2 class="text-center"><b>ความปลอดภัยในการทํางานเกี่ยวกับรังสี | ผู้ปฏิบัติงานทางรังสี</b></h2>
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
                                การป้องกันอันตรายจากรังสีจะประสบความสำเร็จตามเป้าหมายได้
                                ขึ้นอยู่กับการบริหารองค์กรความปลอดภัย (Safety organization) ให้มีประสิทธิภาพสูง
                                ประกอบกับผู้ปฏิบัติงานทางรังสีในหน่วยงานนั้น และผู้บังคับบัญชาที่รับผิดชอบ
                                จะต้องร่วมมือกันให้การสนับสนุน และให้ความสนใจอย่างต่อเนื่อง
                                ตลอดจนติดตามการจัดการในทุกระดับชั้นอย่างระมัดระวัง โดยอาศัยมาตรการต่างๆ
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
                                “ผู้ปฏิบัติงานทางรังสี” หมายความว่า
                                ผู้ปฏิบัติงานให้กับผู้รับใบอนุญาตหรือผู้แจ้งทั้งแบบเต็มเวลาแบบไม่เต็มเวลา
                                หรือแบบชั่วคราว การดำเนินการใด ๆ
                                ที่เกี่ยวข้องกับการใช้ประโยชน์จากรังสีของผู้รับใบอนุญาตหรือผู้แจ้งจะกระทำได้ก็ต่อเมื่อก่อให้เกิดประโยชน์ต่อบุคคลหรือสังคมมากกว่าผลเสียที่อาจได้รับ
                                และให้กระทำโดยคำนึงถึงความปลอดภัยต่อบุคคล ประชาชน
                                และสิ่งแวดล้อมเป็นสำคัญการได้รับรังสีของบุคคลจากการดำเนินการตามวรรคหนึ่ง
                                ต้องเป็นไปโดยมีมาตรการควบคุมให้ได้รับรังสีน้อยที่สุดเท่าที่จะสามารถดำเนินการได้อย่างสมเหตุสมผล
                                โดยพิจารณาถึงปัจจัยต่าง ๆที่เกี่ยวข้อง รวมไปถึงจำนวนบุคคลที่ได้รับรังสี
                                ความเป็นไปได้ในการได้รับรังสีและปริมาณรังสีที่จะได้รับความเสี่ยงทางรังสีซึ่งเกิดจากเหตุการณ์อันอาจคาดหมายได้
                                และลักษณะการก่อให้เกิดอันตรายจากรังสีทั้งนี้ โดยจะต้องคำนึงถึงปัจจัยทางเศรษฐกิจ สังคม
                                และเทคโนโลยีประกอบด้วย
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">ความปลอดภัยในการทํางานเกี่ยวกับรังสี | ผู้ปฏิบัติงานทางรังสี</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรความปลอดภัยในการทํางานเกี่ยวกับรังสี | ผู้ปฏิบัติงานทางรังสี
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="458" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                        กฎกระทรวงกำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย อาชีวอนามัย
                        และสภาพแวดล้อมในการทำงานเกี่ยวกับรังสีชนิดก่อไอออน พ.ศ. 2547
                        กำหนดให้นายจ้างจัดให้ลูกจ้างซึ่งปฏิบัติงานเกี่ยวกับรังสีได้รับการอบรมให้เข้าใจและทราบถึงอันตรายและวิธีการป้องกันอันตรายจากรังสีก่อนเข้ารับหน้าที่ตามหลักเกณฑ์และวิธีการที่อธิบดีกำหนด<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้พนักงานให้เข้าใจและทราบถึงอันตรายเกี่ยวกับรังสี<br>
                        2. เพื่อให้พนักงานเข้าใจวิธีการป้องกันอันตรายจากรังสี<br><br>
                        หัวข้อการอบรม<br>
                        1. ความหมาย
                        ชนิดและประเภทของรังสีกฎหมายว่าด้วยความปลอดภัยในการทำงานเกี่ยวกับรังสีชนิดก่อไอออน<br>
                        2.
                        การป้องกันอันตรายจากรังสีการประเมินสภาพงานและการเตรียมความพร้อมในการทำงานในพื้นที่และการควบคุมทางรังสี<br>
                        3. วิธีการปฏิบัติงานในบริเวณรังสีอย่างถูกต้องและปลอดภัยอันตรายที่อาจได้รับในกรณีฉุกเฉิน
                        และวิธีการหลีกหนีภัยกฎและข้อปฏิบัติในการทำงานเกี่ยวกับรังสี<br>
                        4. ป้าย เครื่องหมายเตือนภัย
                        ข้อความเตือนภัยเกี่ยวกับรังสีการใช้อุปกรณ์บันทึกปริมาณรังสีประจำตัวบุคคลการใช้อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคล

                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mt-5 mx-auto">
                        <a target="_blank" href="<?php echo $url_course_outline;?>">
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
                    ความปลอดภัยในการทํางานเกี่ยวกับรังสี | ผู้ปฏิบัติงานทางรังสี
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความทํางานเกี่ยวกับรังสี-06.jpg" alt="">
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
                                <h5><b>รังสีชนิดก่อไอออน (ionizing radiation)</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap1" class="collapse detail_collapse">
                                พลังงานในรูปของคลื่นแม่เหล็กไฟฟ้าหรืออนุภาครังสีใดๆ
                                ที่สามารถก่อให้เกิดการแตกตัวเป็นไอออนได้ทั้งโดยทางตรงหรือโดยทางอ้อมในตัวกลางที่ผ่านไป
                                ได้แก่
                                รังสีแอลฟา รังสีบีตา รังสีแกมมา รังสีเอกซ์ อนุภาคนิวตรอน อิเล็กตรอน
                                หรือโปรตอนที่มีความเร็วสูง เป็นต้น
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap2">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>ต้นกำเนิดรังสี (source)</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap2" class="collapse detail_collapse">
                                สิ่งหนึ่งสิ่งใดที่มีการแผ่รังสีออกมาโดยการสลายตัวของนิวเคลียส
                                หรือสามารถก่อให้เกิดการแผ่รังสีออกมาโดยวิธีอื่น ทั้งนี้
                                ไม่ว่าต้นกำเนิดรังสีนั้นจะเป็นชนิดปิดผนึกหรือไม่ปิดผนึกก็ตาม
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap3">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>อุบัติเหตุทางรังสี</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap3" class="collapse detail_collapse">
                                เหตุการณ์ที่เกิดขึ้นโดยมิได้คาดหมายเกี่ยวข้องกับรังสี
                                ต้นกำเนิดรังสีอันเป็นผลให้ไม่สามารถควบคุมต้นกำเนิดรังสี
                                ปริมาณรังสีให้อยู่ในระดับที่กำหนดได้
                                และอาจก่อให้เกิดอันตรายทั้งโดยตรงและโดยอ้อม ต่อชีวิตและทรัพย์สินของผู้ปฏิบัติงาน
                                ผู้เกี่ยวข้องและประชาชนทั่วไป
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap4">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>สาเหตุการเกิดอุบัติเหตุ</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap4" class="collapse detail_collapse">
                                ปัจจุบันการใช้สารกัมมันตรังสี (ต่อไปจะเรียกสั้นๆ ว่า สารรังสี) ในประเทศ
                                ทั้งเพื่อประโยชน์ทางการแพทย์ เกษตรกรรมและการศึกษาวิจัยต่างๆ นั้น
                                มีโอกาสเกิดอุบัติเหตุทางรังสีได้ สืบเนื่องจากสาเหตุโดยสรุป 3 ลักษณะ ได้แก่<br>
                                - สารรังสีสูญหาย ถูกโจรกรรมหรือทิ้งไว้โดยปราศจากการควบคุมดูแล เช่น
                                สารรังสีที่ใช้ในงานถ่ายภาพด้วยรังสีเกิดหายไปจากที่เก็บ หรือนำสารรังสีที่เลิกใช้แล้ว
                                ไปเก็บไว้ในที่ซึ่งไม่มีมาตรการป้องกันอันตรายจากรังสี<br>
                                - สารรังสีขาดเครื่องกำบังรังสี เกิดการค้างหรือหลุดออกมาจากเครื่องกำบังรังสี
                                เนื่องจากเหตุขัดข้องขณะปฏิบัติงาน เช่น การค้างของสารรังสีที่ใช้ในงานถ่ายภาพด้วยรังสี
                                ไม่สามารถนำลงคืนภาชนะเก็บซึ่งกำบังรังสีได้<br>
                                - สารรังสีแพร่กระจายออกจากที่เก็บหรือบริเวณที่ควบคุม เช่น
                                เกิดการรั่วของสารรังสีขณะปฏิบัติงาน หรือมีผู้รู้เท่าไม่ถึงการณ์
                                ถอดชิ้นส่วนหรือเครื่องมือซึ่งสารรังสีบรรจุอยู่ ทำให้สารรังสีแพร่กระจายออกไป
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap5">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>ภาวะฉุกเฉินทางรังสีและระดับของความร้ายแรง</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap5" class="collapse detail_collapse">
                                อุบัติเหตุทางรังสี แม้ว่าจะเกิดขึ้นจากสาเหตุเดียวกัน
                                แต่ความร้ายแรงของสถานการณ์อาจต่างกันไป
                                ทั้งนี้ขึ้นอยู่กับปัจจัยที่เกี่ยวข้องหลายประการ เช่น สภาพเหตุการณ์ คุณสมบัติของสารรังสี
                                การดำเนินการแก้ไขสถานการณ์ ฯลฯ เป็นต้น บางครั้งความรุนแรงอาจขยายขอบเขตกว้างออกไป
                                จนอยู่ในระดับที่ไม่สามารถควบคุมสถานการณ์ให้กลับคืนสู่ภาวะปกติได้
                                สถานการณ์ดังกล่าวนี้เรียกว่า “ภาวะฉุกเฉินทางรังสี”
                                อาจแบ่งได้เป็น 4 ระดับ ดังนี้<br>
                                - ภาวะฉุกเฉินทางรังสีระดับ 1 สถานการณ์มีขอบเขตอยู่ภายในห้องทดลอง
                                ห้องปฏิบัติการหรือภายในอาคารหนึ่งอาคารใด<br>
                                - ภาวะฉุกเฉินทางรังสีระดับ 2 สถานการณ์ขยายขอบเขตออกไปทั่วโรงงาน สถาบันการศึกษาวิจัย
                                หรือโรงพยาบาลที่เกิดอุบัติเหตุทางรังสี<br>
                                - ภาวะฉุกเฉินทางรังสีระดับ 3 สถานการณ์อาจมีผลกระทบต่อสถานที่ข้างเคียง<br>
                                - ภาวะฉุกเฉินทางรังสีระดับ 4 สถานการณ์มีผลกระทบต่อประเทศข้างเคียง
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap6">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>รังสีไอออไนซ์</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap6" class="collapse detail_collapse">
                                รังสีที่มีพลังงานสูงพอที่จะทำให้อิเล็กตรอนหลุดออกจากอะตอม หรือโมเลกุล (กลุ่มของอะตอม)
                                เมื่อรังสีนั้นชนกับอะตอมหรือเคลื่อนที่ผ่านเข้าไปในวัตถุ อะตอม
                                หรือโมเลกุลจะมีประจุบวกเมื่อสูญเสียอิเล็กตรอนที่มีประจุลบ
                                การสูญเสียอิเล็กตรอนหรือได้รับเพิ่มขึ้น เรียกว่า การไอออไนซ์ (ionization)
                                ส่วนอะตอมที่มีประจุบวก เรียกว่าไอออน (ion)
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap7">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>รังสีไอออไนซ์ ได้แก่</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap7" class="collapse detail_collapse">
                                - รังสีแกมมา (Gamma rays)<br>
                                - รังสีเอกซ์ (X rays)<br>
                                - รังสีอัลฟา (Alpha particles)<br>
                                - รังสีบีตา (Beta particles)<br>
                                - รังสีนิวตรอน (Neutrons)<br>
                                รังสีเอกซ์เป็นรังสีคลื่นแม่เหล็กไฟฟ้า
                                ที่เกิดจากการยิงลำอิเล็กตรอนเช้าชนแท่งโลหะในหลอดสุญญากาศ รังสีเอกซ์มีความถี่สูงมาก
                                อยู่ในช่วง 0.3 – 30 Ehz (exahertz หรือ ล้าน gigahertz)
                                เมื่อเทียบกับคลื่นวิทยุที่มีความถี่อยู่ในช่วงประมาณ 100 MHz (megahertz) หรือ 0.1 Ghz
                                (gigahertz).
                                สารประกอบบางชนิด เช่น ยูเรเนียม มีกัมมันตภาพรังสี
                                ซึ่งจะให้รังสีออกมาจากการแตกตัวหรือสลายตัว
                                รังสีที่ให้ออกมาจากวัสดุกัมมันตรังสี มี 3 ชนิด ได้แก่ รังสีอัลฟา รังสีบีตา และรังสีแกมมา
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap8">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>คุณสมบัติที่ต้องพิจารณาในการวัดรังสี</b></h5>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div id="collap8" class="collapse detail_collapse">
                                - ความแรงรังสี (strength) หรือกัมมันตภาพรังสี (radioactivity) ของต้นกำเนิดรังสี<br>
                                - พลังงานของรังสี<br>
                                - ระดับของรังสีในสิ่งแวดล้อม<br>
                                - ปริมาณรังสี (radiation dose) หรือ พลังงานของรังสีที่ร่างกายดูดกลืนไว้
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap9">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>กัมมันตภาพรังสี</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap9" class="collapse detail_collapse">
                                กัมมันตภาพรังสี (Radioactivity) เป็นคุณสมบัติของธาตุและไอโซโทปบางส่วน
                                ที่สามารถเปลี่ยนแปลงตัวเองเป็นธาตุหรือไอโซโทปอื่น
                                ซึ่งการเปลี่ยนแปลงนี้จะมีการปลดปล่อยหรือส่งรังสีออกมาด้วย ปรากฏการณ์นี้ได้พบครั้งแรกโดย
                                เบคเคอเรล เมื่อปี พ.ศ. 2439 ต่อมาได้มีการพิสูจน์ทราบว่า
                                รังสีที่แผ่ออกมาในขบวนการสลายตัวของธาตุหรือไอโซโทปนั้นประกอบด้วย รังสีแอลฟา, รังสีเบต้า
                                และรังสีแกมมา
                            </div>
                        </button>
                    </div>

                    <div class="col-md-6 col-12 my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap10">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>การใช้ประโยชน์จากรังสี</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap10" class="collapse detail_collapse">
                                ปัจจุบันได้มีการนำรังสีและสารกัมมันตรังสีมาใช้งานต่างๆ กันเช่น
                                ในทางการแพทย์มีการใช้ในการตรวจวินิจฉัย และบำบัดอาการโรคของผู้เจ็บป่วยจากโรคร้ายต่างๆ
                                เช่น
                                การฉายรังสีเอกซ์ การตรวจสมอง การตรวจกระดูก และการบำบัดโรคมะเร็ง เป็นต้น
                                นอกจากนี้ก็มีการใช้งานทางรังสีในกิจการอุตสาหกรรม การเกษตร และการศึกษาวิจัยทางวิทยาศาสตร์
                                อาทิเช่น การใช้รังสีตรวจสอบรอยเชื่อม รอยร้าวในชิ้นส่วนโลหะต่างๆ
                                การใช้ป้ายเรืองแสงในที่มืด
                                การตรวจอายุวัตถุโบราณ การถนอมอาหารด้วยรังสี และการฆ่าเชื้อโรคในเครื่องมือแพทย์
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
                            src="<?php echo $base_url;?>/img/bg/การประเมินความเสี่ยงด้านความปลอดภัย (Safety Risk assessment)-ชลบุรี-ระยอง-สมุทรปราการ-เซฟตี้อินไทย-safetyinthai.jpg"
                            alt="">
                    </div>
                    <div class="col-lg-6 px-5 align-self-center mb-3">
                        <h2 class="text-center"><b>การประเมินความเสี่ยงด้านความปลอดภัย </br>(Safety Risk
                                assessment)</b></br>
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        <div class="about__Text">
                            <p>
                                การชี้บ่งอันตรายและประเมินความเสี่ยงจากการทำงาน ( Risk Assessment )
                                เป็นวิธีการและขั้นตอนที่ระบุลำดับความเสี่ยงของอันตรายทั้งหมดที่เกี่ยวข้องกับกิจกรรมของงาน
                                ที่ครอบคลุมขั้นตอนการทำงาน สถานที่ เครื่องจักร อุปกรณ์ บุคลากร
                                ที่อาจก่อให้เกิดการบาดเจ็บ
                                ความเจ็บป่วย ความเสียหายต่อทรัพย์สินและสิ่งแวดล้อม หรือสิ่งต่าง ๆ รวมกัน
                                ในหัวข้อนี้จะอธิบายถึงหลักการ และวิธีการประเมินความเสี่ยงด้านความปลอดภัยและอาชีวอนามัย
                                การอธิบายถึงความจำเป็นที่ต้องประเมินความเสี่ยงการประมาณระดับความเสี่ยงโดยคำนึงถึง
                                ความรุนแรงและโอกาสที่จะเกิดอันตราย เพื่อนำมาพิจารณาว่าเป็นความเสี่ยงที่ยอมรับได้
                                หรือยอมรับไม่ได้ และการวางแผนควบคุมความเสี่ยงที่ยอมรับไม่ได้
                            </p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-8">
                                <a href="การประเมินความเสี่ยงด้านความปลอดภัย">
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
                                เพื่อทราบปัจจัยเสี่ยงอันตรายและการชี้บ่งอันตรายพร้อมการค้นหาอันตราย
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                เพื่อฝึกปฏิบัติในการวิเคราะห์งานเพื่อความปลอดภัย (JSA)
                                และการกำหนดมาตรฐานความปลอดภัยในการทำงาน</li>
                            <li><i class="fas fa-check-circle"></i>
                                เพื่อกำหนดให้ผู้เข้ารับการอบรมสามารถจัดทำการวิเคราะห์งานและมาตรฐานความปลอดภัยในการทำงานของส่วนงาน
                                แผนกที่ตนเองรับผิดชอบ
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