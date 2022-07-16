<?php include('header_front.php'); ?>
<?php include('function.php'); ?>
<?php 
    $id_training = 163;//การตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี

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
            <h2 class="text-center"><b>การตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (6).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                ในปี 2560 ประเทศไทยได้มีการนำเข้าสารเคมีอันตราย 197,758.809 ตัน
                                ซึ่งมีแนวโน้มสูงขึ้นเมื่อพิจารณาเทียบกับปี 2559 ที่มีการนำเข้าสารเคมีอันตรายเพียง
                                160,687.089 ตัน (เครือข่ายเตือนภัยสารเคมีกำจัดศัตรูพืช, 2560)
                                ทั้งนี้การนำเข้าดังกล่าวเพื่อนำมาใช้ประโยชน์ในการพัฒนางานด้านเกษตรกรรม
                                และงานด้านอุตสาหกรรม ฯ โดยสารที่นำเข้ามานี้สามารถจัดจำแนกตามจำพวกเบื้องต้นได้ดังนี้
                                วัตถุไวไฟ วัตถุระเบิด วัตถุมีพิษ และวัตถุกัดกร่อน
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
                                และจากการนำสารเคมีอันตรายมาใช้งาน ด้วยความไม่รู้ ไม่เข้าใจ
                                หรือไม่ปฏิบัติตามกฎระเบียบนั้นจึงส่งผลให้เกิดอุบัติภัยหลายรูปแบบ
                                โดยพิจารณาได้จากสถิตการเกิดอุบัติภัยจากวัตถุเคมีของประเทศไทยตั้งแต่ วันที่ 1 ตุลาคม พ.ศ.
                                25559 ถึง วันที่ 30 กันยายน พ.ศ. 2560 พบว่าอุบัติภัยสารเคมีเกิดขึ้นทั้งหมด จำนวน 89
                                ครั้ง จำแนกลักษณะเหตุการณ์ได้เป็น การเกิดจากเพลิงไหม้ จำนวน 43 ครั้ง,
                                การรั่วไหลของสารเคมี จำนวน 17 ครั้ง, การระเบิด จำนวน 14 ครั้ง, อุบัติเหตุจากการขนส่ง
                                จำนวน 9 ครั้ง, การลักลอบทิ้ง จำนวน 9 ครั้ง และการปนเปื้อน จำนวน 1 ครั้ง
                                (รายงานการเฝ้าระวังสถานการณ์อุบัติภัยสารเคมี กระทรวงสาธารณสุข, 2560)​
                                จากสถิติจะเห็นได้ว่า อุบัติภัยการเกิดจากเพลิงไหม้
                                และวิธีการกักเก็บสารเคมีเป็นสาเหตุหลักสำคัญ ที่ทำให้เกิดอุบัติภัยจากวัตถุเคมี
                                ดังนั้นเพื่อเป็นการป้องกันและลดการเกิดอุบัติภัยที่จะเกิดขึ้น
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (15).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="436" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy"
                    data-src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (20).jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การประกอบการในปัจุบัน จำป็นต้องมีการใช้สารเคมีกันมาก เพื่อให้เกิดความปลอดภัยในการ
                        ใช้สารเคมีและถ้ามีการรั่วไหลของสารเมีพนักงานในโรงงนต้องสามารถตอบโด้การรั่วไหลได้ โดย
                        เนั้นการป้องกันความเสียหายจากสารเคมีในโรงงาน ดังนั้นสถานประกอบการจึงจำเป็นต้องมีการฝึกซ้อม
                        ตอบโต้กรณีที่มีสารเศมีรั่วไหลอย่างเป็นระบบและเป็นสากล โดยจำเป็นต้องมีการดั้งทีมดอบใต้สารเคมี,
                        กำหนดสถานะการณ์ในการตอบโต้,การเตรียมความพร้อมของกน,อุปกรณ์และแผนงานในการตอบโด้
                        สารเคมีกรณีที่มีการรั่วไหล<br><br>

                        วัตถุประสงค์<br>
                        1) ผู้เข้ารับการอบรมได้รับความรู้ และความเข้าใจในการเตรียมความพร้อมเหตุฉุกเฉิน
                        การระงับเหตุสารเกมีรั่วไหล<br>
                        2) ผู้เข้ารับการอบรมมีความรู้ และความเข้าใจอุปกรณ์ป้องกันอันตรายส่วนบุคคลในการ
                        เข้าระงับเหตุอุบัติภัยการเข้าระงับเหตุสารเคมีรั่วไหล<br>
                        3)ผู้เข้ารับการอบรมสามารถซ้อมแผนฉุกเฉินกรณีสารเคมีรั่วไหล<br><br>

                        ผลที่คาดว่าจะได้รับ<br>
                        1) ผู้อบรมสามารถตอบใต้ฉุกเฉินเกี่ยวกับสารเคมีรั่วไหลในขณะทำงานได้<br>
                        2) ผู้อบรมสามารถนำความรู้ไปใช้ในการบริหาร จัดการการวางแผนในการเตรียมความพร้อมเหตุ
                        ฉุกเฉินการระงับเหตุสารเคมีรั่วไหล ได้อย่างปลอดภัยและมีประสิทธิภาพ<br><br>

                        รูปแบบการฝึกอบรม<br>
                        1) เนั้นการเรียนรู้แบบบูรณาการ (Theory and experience)<br>
                        2) เน้นการแลกเปลี่ยนเรียนรู้กิจกรรมเกมและภาพยนตร์ (Game and movie activities)<br>
                        3) เนั้นกระบวนการสร้างสรรค์การเรียนรู้ (Constructive process of learning)<br>
                        4) เนั้นการเรียนรู้แบบ Acion Leaming ฝึกปฏิบัติตอบใต้แผนฉุกเฉินเกี่ยวกับสารเตมื
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
                    การตอบโต้แผนฉุกเฉินเกี่ยวกับสารเคมี
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
                            <h5><b>การใช้งานสารเคมีและการเก็บอย่างถูกวิธี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การปฏิบัติงานที่เกี่ยวข้องกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            (1) การเตรียมสารเคมีพวกกรด ด่าง หรือสารระเหย ควรทำในตู้ดูดควัน<br>
                            (2) ห้ามเทน้ำลงกรด<br>
                            (3) ไม่ใช้จุกแก้วกับขวดบรรจุสารละลายด่าง เพราะจุกจะติดกับขวดจนเปิดไม่ได้<br>
                            (4) ไม่ใช้จุกยางกับขวดบรรจุตัวทำละลายอินทรีย์ เช่น แอลกอฮอล์ อะซีโตน<br>
                            (5) ห้ามใช้เปลวไฟในการให้ความร้อนแก่ของเหลวไวไฟ หรือในขบวนการกลั่น<br>
                            (6)
                            หลีกเลี่ยงการสูดดมไอระเหยของสารเคมี
                            ห้ามทดสอบชนิดของสารเคมีโดยการดมกลิ่นโดยตรงอย่างเด็ดขาด<br>
                            (7) การดูดสารละลายโดยใช้ปิเปต ห้ามใช้ปากดูด ให้ใช้ลูกยาง<br>
                            (8) ในกรณีที่มีสารระเหยไวไฟ (Volatile flammable material) ควรใช้ตู้ดูดควันในการถ่ายเท ผสม
                            หรือ ให้ความร้อนสารเคมี<br>
                            (9) อ่านคู่มือ และเพิ่มความระมัดระวังเป็นพิเศษ
                            เมื่อต้องปฏิบัติงานเกี่ยวข้องกับสารก่อมะเร็ง<br>
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
                            <h5><b>ประเภทสารเคมีอันตรายตามหลักสากล</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>พื้นฐานในการควบคุมสารเคมี มีดังนี้</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สถานที่และอุปกรณ์เมื่อทำงานกับสารเคมีอันตราย</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
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
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>กฏหมายความปลอดภัยเกี่ยวกับสารเคมี</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            ห้ามนายจ้างยินยอมหรือปล่อยปละละเลยให้ลูกจ้างหรือบุคคลใดเข้าพักอาศัยหรือพักผ่อน
                            ในสถานที่ทำงานเกี่ยวกับสารเคมีอันตรายหรือในยานพาหนะขนส่งสารเคมี
                            นายจ้างผู้ใดฝ่าฝืนหรือไม่ปฏิบัติตามกฎหมายต้องระวางโทษจำคุกไม่เกิน 1 ปี ปรับไม่เกิน 400,000
                            บาท หรือทั้งจำทั้งปรับ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>MSDS หรือ SDS หมายถึง</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            เอกสารข้อมูลความปลอดภัยสารเคมี
                            ที่แสดงข้อมูลเฉพาะของสารเคมีแต่ละตัวเกี่ยวกับลักษณะความเป็นอันตรายของสารเคมีองค์ประกอบ
                            ของสารเคมี พิษ วิธีใช้ การเก็บ การกำจัดและการจัดการอื่น ๆ
                            ซึ่งจะต้องมีประจำไว้ในห้องปฏิบัติการทุกห้องเพื่อความสะดวกและความปลอดภัยในการใช้สารเคมีในห้องปฏิบัติการโดยข้อมูลที่แสดงในเอกสารต้องเป็นไปตาม
                            มาตรฐานที่กฎหมายกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อมูลที่อยู่ใน MSDS หรือ SDS ของสารเคมี ประกอบด้วย 16 หัวข้อดังนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            (1) ข้อมูลเกี่ยวกับสารเคมีและบริษัทผู้ผลิตและจัดจำหน่าย<br>
                            (2) องค์ประกอบ / ข้อมูลเกี่ยวกับองค์ประกอบของสารเคมี<br>
                            (3) ข้อมูลเกี่ยวกับอันตรายของสารเคมี<br>
                            (4) มาตรการปฐมพยาบาล<br>
                            (5) มาตรการการผจญเพลิง<br>
                            (6) มาตรการเมื่อมีอุบัติเหตุสารเคมีหกรั่วไหล<br>
                            (7) ข้อปฏิบัติการใช้สารเคมีและการเก็บรักษา<br>
                            (8) การควบคุมการสัมผัสสารเคมี / การป้องกันส่วนบุคคล<br>
                            (9) คุณสมบัติทางกายภาพและทางสารเคมี<br>
                            (10) ความเสถียรและการไวต่อปฏิกิริยา<br>
                            (11) ข้อมูลด้านพิษวิทยา<br>
                            (12) ข้อมูลผลกระทบต่อระบบนิเวศน์<br>
                            (13) ข้อพิจารณาในการกำจัด<br>
                            (14) ข้อมูลเกี่ยวกับการขนส่ง<br>
                            (15) ข้อมูลเกี่ยวกับกฎข้อบังคับ<br>
                            (16) ข้อมูลอื่น ๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>อุปกรณ์ป้องกันอันตรายจากสารเคมี มีอยู่หลายชนิดดังนี้</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            (1) อุปกรณ์ป้องกันศีรษะ เช่น หมวกยาง หรือหมวกแข็ง<br>
                            (2) อุปกรณ์ป้องกันใบหน้า ดวงตา เช่น กะบังหน้า แว่นตาการสารเคมี<br>
                            (3) อุปกรณ์ป้องกันระบบทางเดินหายใจ เช่น หน้ากากป้องกันสารเคมี<br>
                            (4) อุปกรณ์ป้องกันมือ เช่น ถุงมือยาง<br>
                            (5) อุปกรณ์ป้องกันลำตัว เช่น ชุดป้องกันสารเคมีแบบใช้แล้วทิ้ง ชุด PVC<br>
                            (6) อุปกรณ์ป้องกันเท้า เช่น รองเท้ายาง รองเท้าบูท
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