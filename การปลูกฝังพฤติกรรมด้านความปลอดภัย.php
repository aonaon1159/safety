<?php include('header_front.php'); ?>

<?php 
    $id_training = 573;//การปลูกฝังพฤติกรรมด้านความปลอดภัย (BBS Behavior Based Safety)

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
            <h2 class="text-center"><b>การปลูกฝังพฤติกรรมด้านความปลอดภัย (BBS Behavior Based Safety)</b></h2>
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
                                การสร้างวัฒนธรรมความปลอดภัย และการจัดการพฤติกรรมเสี่ยง
                                เริ่มจากการตกลงร่วมกันว่าเราจะห่วงใย ดูแลซึ่งกันและกัน ไม่อยากให้ใครบาดเจ็บ เจ็บป่วย
                                ทำกิจกรรมสังเกตุพฤติกรรมความปลอดภัย โดยการเข้า ทัก ชม เตือน ด้วยถ้อยคำ จังหวะเวลา
                                ความถี่อย่างเหมาะสม เพื่อควบคุมและปรับเปลี่ยนพฤติกรรมความปลอดภัย
                                ซึ่งต้องมีหลักการสังเกตุสำหรับตัดสินใจเข้าแสดงความห่วงใยอย่างถูกต้องเหมาะสมกับพฤติกรรมแต่ละครั้ง
                                มีการวัดผลจากการปรับเปลี่ยนพฤติกรรมที่ไม่ปลอดภัย และการคงพฤติกรรมที่ปลอดภัย
                                กรณีที่ไม่สามารถปรับเปลี่ยนพฤติกรรมที่ไม่ปลอดภัยของบางคนได้
                                การปลูกฝังพฤติกรรมความปลอดภัย, Behavior-based safety (BBS)
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
                                เป็นอีกหนึ่งเทคนิคที่เป็นที่ยอมรับ อย่างกว้างขวางว่าสามารถลดการเกิดอุบัติเหตุ
                                การได้รับบาดเจ็บได้จริง และช่วยส่งผลต่อการสร้างวัฒนธรรม ความปลอดภัยในองค์กร
                                เมื่อพนักงานทุกคนเข้าใจหลักการและนําไป BBS ไปปฏิบัติอย่างจริงจัง BBS
                                อาศัยหลักการทางจิตวิทยา และวิทยาศาสตร์ในการส่งเสริมพฤติกรรมที่นําไปสู่ความปลอดภัย
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
            <h2 class="text-center"><b class="head_nav">การปลูกฝังพฤติกรรมด้านความปลอดภัย<br>(BBS Behavior Based
                    Safety)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการปลูกฝังพฤติกรรมด้านความปลอดภัย (BBS Behavior Based Safety)
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="347" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                        การสร้างพฤติกรรมความปลอดภัย Behavior-Based Safety (BBS) เป็นเทคนิคที่สามารถลดการเกิดอุบัติเหตุ
                        การได้รับบาดเจ็บได้เป็นอย่างดี และช่วยส่งผลต่อการสร้างวัฒนธรรมความปลอดภัยในองค์กร
                        เมื่อพนักงานทุกคนเข้าใจ หลักการของ BBS
                        โดยอาศัยหลักการทางจิตวิทยาในการส่งเสริมพฤติกรรมที่นําไปสู่ความปลอดภัย BBS คือกระบวนการ
                        ในการวิเคราะห์ค้นหาและคัดเลือกพฤติกรรมเสี่ยงแล้วดําเนินการกําจัดออกไป BBS
                        จึงเป็นการแก้ไขที่พื้นฐานของการเกิด อุบัติเหตุ “พฤติกรรมเสี่ยง”
                        พฤติกรรมเป็นสิ่งที่สังเกตได้และวัดได้ ความปลอดภัยจากการทํางานเกิดจากตัวคน สภาพแวดล้อม พฤติกรรมคน
                        ดังนั้นการทําให้ BBS ประสบความสําเร็จผู้ที่รับผิดชอบจําเป็นต้องเข้าใจอย่างถ่องแท้ เสียก่อน
                        การนํา BBS มาใช้ในองค์กรเพื่อประสิทธิภาพในการจัดการและบริหารองค์กรด้านความปลอดภัยในการทํางาน
                        ต่อไป<br><br>
                        วัตถุประสงค์<br>
                        1. ผู้เข้ารับการอบรมได้รับความรู้ และทราบถึงพฤติกรรมเสี่ยงอันตรายของพนักงาน<br>
                        2.
                        ผู้เข้ารับการอบรมได้รับความเข้าใจในการความรู้เพื่อปรับเป็นพฤติกรรมเชิงบวกในการทํางานอย่างปลอดภัย<br>
                        3. ผู้เข้ารับการอบรมสามารถฝึกการสังเกตพฤติกรรมเสี่ยงตามหลักการของ BBs
                        ได้อย่างมีประสิทธิภาพ<br><br>
                        เนื้อหาการอบรม<br>
                        1. ความสําคัญของวัฒนธรรมความปลอดภัย<br>
                        2. ความหมายของพฤติกรรมเสี่ยงและBBS<br>
                        3. ทัศนคติและพฤติกรรมความปลอดภัย<br>
                        4. การใช้พฤติกรรมเชิงบวกในการเปลี่ยนพฤติกรรมการทํางาน<br>
                        5. ฝึกการสังเกตพฤติกรรมเสี่ยง<br>
                        6. การใช้ระบบพี่เลี้ยงเพื่อปรับเปลี่ยนพฤติกรรมเสี่ยง ตัดสินใจ, หยุด,สังเกต,กระทํา<br>
                        7. workshop การทําทะเบียนพฤติกรรมเสี่ยง,การเลือกพฤติกรรมเสี่ยงสังเกต,วัตผลและการติดตาม
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
                    การปลูกฝังพฤติกรรมด้านความปลอดภัย
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความด้านความปลอดภัยBBS-01.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความด้านความปลอดภัยBBS-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 offset-md-2 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความด้านความปลอดภัยBBS-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-3 mt-3 px-3 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความด้านความปลอดภัยBBS-04.jpg" alt="">
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
                            <h5><b>พฤติกรรมความปลอดภัย(Behavior Base Safety-BBS)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            มีต้นกำเนิดจาก BST โดยในอดีต เน้นการสังเกตในการทำงาน (Observe)การเข้าไปพบ
                            พูดคุยกับพนักงานเพื่อเป็นการสร้างสัมพันธ์ที่ดีต่อกันโดยมี3 บริษัทที่เป็นที่ปรึกษาด้าน BBS
                            ได้แก่ BST, Dupont, JMJ สำหรับแนวทางในการดำเนินการจัดการพฤติกรรมความปลอดภัย สามารถนำ 3
                            Golden circle มาใช้โดยWhat (อะไรที่ควรทำ-เข้าใจความเสี่ยง เพื่อจะได้หาแนวทางในการดำเนินการ)
                            How (ทำอย่างไร-เพื่อให้เห็นถึงคุณค่าของความปลอดภัย นำไปสู่การสร้างวัฒนธรรมความปลอดภัย) Why
                            (ทำไปทำไม-เพื่อให้เกิดความเชื่อที่ว่า อุบัติเหตุ สามารถป้องกันได้)
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วิธีการสร้างวัฒนธรรมความปลอดภัย (Safety Culture)</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            เช่น 3E – Engineering (วิศวกรรมศาสตร์-การออกแบบความปลอดภัย) Enforcement
                            (การออกกฎข้อบังคับ-มาตรการ วิธีการทำงานให้ปฏิบัติตามอย่างปลอดภัย) และ Education
                            (การศึกษา-การให้ความรู้ ฝึกอบรม เสริมสร้างความปลอดภัย) สำหรับประเภทขององค์กร ตาม Dupont
                            แบ่งได้ดังนี้ Reactive (ไม่มีการป้องกันความปลอดภัยล่วงหน้า
                            ต้องมีเหตุการณ์เกิดขึ้นก่อนจึงป้องกัน) Dependent (อยู่ได้ด้วยระบบ มีต้นแบบ มาตรฐาน/กฎหมาย
                            มีหน่วยงานเข้าไปตรวจสอบ) Independent (สามารถตระหนักถึงความภัยและดำเนินการได้เอง) และ
                            Interdependent (สามารถตระหนักได้ด้วยตนเอง และเผื่อแผ่วิธีการดำเนินการไปยังผู้อื่น)
                            ซึ่งการดำเนินการเรื่อง BBS จะต้องเป็นวิธีที่ที่ไม่ไปเพิ่มงานให้พนักงาน งบประมาณไม่มาก
                            หากสอดคล้องกับความปลอดภัยได้ยิ่งดี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุบัติเหตุ คือ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            เหตุการณ์ที่ไม่พึงประสงค์ที่อาจเกิดจากการที่ไม่ได้คาดคิดไว้ล่วงหน้า
                            หรือไม่ทราบล่วงหน้าหรือขาดการควบคุม แต่เมื่อเกิดขึ้นแล้วมีผลให้เกิดการบาดเจ็บ
                            หรือความเจ็บป่วย หรือเสียชีวิต หรือเสียหายต่อทรัพย์สิน สภาพแวดล้อมในการทำงานหรือต่อสาธารณชน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสร้างความตระหนักและการปรับเปลี่ยนพฤติกรรม
                                    ให้กับผู้ปฏิบัติงานสามารถสร้างได้โดยอาศัยแนวคิดย้อนกลับโดย ทฤษฎีโดมิโน</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            (1) ต้องทำให้ผู้ปฎิบัติรับรู้ผลกระทบที่เกิดขึ้นจากการเกิดอุบัติเหตุ ที่มีต่อตนเอง ครอบครัว
                            องค์กร สังคม เพื่อทำให้เกิดความตระหนัก<br>
                            (2)
                            หลังจากนั้นจะเข้าสู่กระบวนการรับรู้รูปแบบอุบัติเหตุที่เกิดขึ้นหรืออาจจะเกิดขึ้นในพื้นที่จุดปฏิบัติงานโดยผ่านการศึกษาข้อมูลในอดีต
                            หรือการแลกเปลี่ยนความรู้ร่วมกัน<br>
                            (3) หลังจากนั้นให้ทำกิจกรรมเพื่อวิเคราะห์สาเหตุที่ทำให้เกิดอุบัติเหตุ
                            และร่วมกันหามาตรการป้องกัน
                            ในการเรียนรู้ทำความเข้าใจเรื่องอุบัติเหตุ และการวิเคราะห์
                            ร่วมกันจะทำให้เกิดการรับรู้และเกิดการปรับเปลี่ยนพฤติกรรมของตนเองในระหว่างการปฏิบัติงานเนื่องจากเกิดความตระหนักและไม่อยากให้เกิดอุบัติเหตุกับตน
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>BBS ย่อมาจาก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            Behavior Based Safety ใช้หลักการวิทยาศาสตร์และจิตวิทยา ในการศึกษาว่าทำไม
                            คนถึงแสดงพฤติกรรมความปลอดภัยออกมาเป็นการสร้างกระบวนการที่เป็นระบบอย่างต่อเนื่อง
                            ในการลดการบาดเจ็บและลดความเสี่ยง สร้างวัฒนธรรมเชิงรุกในการป้องกันอุบัติเหตุ
                            การสร้างค่านิยมของบุคคล ทัศนคติ ความเชื่อ ด้านความปลอดภัย
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>วัตถุประสงค์ BBS</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            – เพื่อให้มีความตระหนักและเสริมสร้างจิตสำนึกความปลอดภัยของตนเอง เพื่อนร่วมงาน
                            ผู้ใต้บังคับบัญชา ผู้บังคับบัญชา บุคคลภายนอกและทรัพย์สินขององค์กร<br>
                            – เพื่อให้สามารถปรับเปลี่ยนพฤติกรรมความปลอดภัย
                            และสร้างวัฒนธรรมความปลอดภัยในองค์กรได้อย่างเป็นรูปธรรม<br>
                            – เพื่อให้ทราบถึงความสูญเสียและผลกระทบจากการเกิดอุบัติเหตุ อุบัติการณ์<br>
                            – เพื่อให้สามารถนำความรู้และประสบการณ์ที่ได้รับ ไปประยุกต์ใช้ในการปฏิบัติงานจริงได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การเกิดอุบัติเหตุในการทำงาน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            เป็นสิ่งที่ไม่มีใครอยากให้เกิดขึ้น
                            แต่เราจะเห็นได้ว่าอุบัติเหตุในการทำงานมักเกิดขึ้นบ่อยครั้ง ซึ่งมาจากหลากหลายสาเหตุด้วยกัน
                            แต่ท้ายที่สุดผลลัพธ์ของอุบัติเหตุคือการสูญเสียทางตรงและทางอ้อม
                            ในบทความนี้ทางพีดีเอสจะพาทุกท่านไปเรียนรู้ความสูญเสียอันเนื่องมาจากอุบัติเหตุ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสูญเสียทางตรง</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            (1) ค่าใช้จ่ายในการรักษาพยาบาล เมื่อพนักงานเกิดอุบัติเหตุขึ้น<br>
                            (2) ค่าประกันชีวิต หากพนักงานเสียชีวิตจากอุบัติเหตุ บริษัทจำเป็นต้องจ่ายพนักงานเหล่านี้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การสูญเสียทางอ้อม</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) บุคคลากรในการปฏิบัติหน้าที่เดิม เนื่องจากผู้ประสบอุบัติเหตุจำเป็นต้องรักษาพยาบาล<br>
                            (2) ความตระหนกตกใจของพนักงานคนอื่นๆ<br>
                            (3) ค่าซ่อมแซม เครื่องจักร เครื่องมือ อุปกรณ์ ซึ่งได้รับความเสียหายจากอุบัติเหตุ<br>
                            (4) การทำงานหยุดชะงักลง เป็นผลให้ผลประกอบการลดลงไปด้วย<br>
                            (5) หากเกิดอุบัติเหตุใหญ่จนทำให้กิจการต้องหยุดชะงักลง ย่อมทำให้กิจการขาดทุนมหาศาลได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>แนวทางการป้องกัน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) การฝึกอบรมพนักงานทุกคนให้มีความรู้ความเข้าใจในการทำงานทุกขั้นตอน
                            เพื่อลดความผิดพลาดในการทำงานที่อาจทำให้เกิดอุบัติเหตุขึ้นได้<br>
                            (2) การจัดซื้ออุปกรณ์ป้องกันอันตรายส่วนบุคคลที่ได้มาตรฐานสากล
                            เพื่อช่วยลดการบาดเจ็บหรือเสียชีวิตในกรณีเกิดอุบัติเหตุที่ไม่คาดฝันขึ้น<br>
                            (3) การจัดอบรมด้านความปลอดภัยสม่ำเสมอ
                            เพื่อให้พนักงานทุกคนได้ตระหนักถึงมาตรการด้านความปลอดภัย
                            ซึ่งเป็นสิ่งสำคัญในการป้องกันอันตรายจากเรื่องต่างๆ
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