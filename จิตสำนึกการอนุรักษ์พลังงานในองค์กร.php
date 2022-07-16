<?php include('header_front.php'); ?>

<?php 
    $id_training = 999;//จิตสำนึกการอนุรักษ์พลังงานในองค์กร Energy Conservation Awareness

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
            <h2 class="text-center"><b>จิตสำนึกการอนุรักษ์พลังงานในองค์กร Energy Conservation Awareness</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (1).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                พลังงานนับเป็นปัจจัยอย่างหนึ่งซึ่งมีความสําคัญมากต่อการดํารงชีวิต
                                และการดําเนินธรุกิจทั้งภาคอุตสาหกรรม
                                และภาคบริการ ซึ่งทุกวันนี้ภาคอุตสาหกรรม
                                และภาคบริการต้องแบกรับภาระค่าใช้จ่ายด้านพลังงานกันเป็นจํานวนมาก
                                อีกทั้งความผันผวนด้านราคาพลังงานก็ส่งผลกระทบต่อต้นทุนในการดําเนินธุรกิจที่สูงขึ้นนั่นเอง
                                หลายๆองค์กรพยายาม
                                หาแนวทางในการลดการใช้พลังงานแต่อาจจะยังไม่บรรลุผลสําเร็จ

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
                                เพราะการอนุรักษ์พลังงานจะต้องได้รับความร่วมแรง
                                ร่วมใจจากบุคลากรทั่วทั้งองค์กรนั่นเอง และที่สําคัญ
                                การร่วมแรงร่วมใจจากบุคลกรทั่วทั้งองค์กรน้นจะเกิดขึ้นได้ต้องมาจาก
                                การมีจิตสํานึกที่ดีด้านการอนุรักษ์พลังงานเป็นพื้นฐานสําคัญ
                                ซึ่งจิตสํานึกด้านการอนุรักษ์พลังงานไม่สามารถเกิดขึ้เองได้
                                แม้จะมีการบีบ หรือบังคับให้กระทําก็ตาม
                                หากแต่จิตสํานึกด้านการอนุรักษ์พลังงานน้นจะเกิดขึ้นได้ก็ด้วยความเข้าใจ
                                เชื่อมั่น และศรัทธา อันจะนําพาไปสู่ความสําเร็จในด้านการอนุรักษ์พลังงาน
                                และความภาคภูมิใจร่วมกันของบุคลากรทั่วทั้งองค์กรและยังเป็นพื้นฐานที่สําคัญในการพัฒนาองค์กรเข้าสู่มาตรฐานด้านการจัดการพลังงาน
                                ISO50001 อีกด้วย

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
            <h2 class="text-center"><b class="head_nav">จิตสำนึกการอนุรักษ์พลังงานในองค์กร Energy Conservation
                    Awareness</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรจิตสำนึกการอนุรักษ์พลังงานในองค์กร Energy Conservation
                Awareness
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 100%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="599" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
                                    <h5>ออนไลน์</h5>
                                </a></li>

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active" id="tab1">
                                <div class="table1"></div>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery10.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        พลังงานนับเป็นปัจจัยอย่างหนึ่งซึ่งมีความสําคัญมากต่อการดํารงชีวิต
                        และการดําเนินธรุกิจทั้งภาคอุตสาหกรรม
                        และภาคบริการ ซึ่งทุกวันนี้ภาคอุตสาหกรรม
                        และภาคบริการต้องแบกรับภาระค่าใช้จ่ายด้านพลังงานกันเป็นจํานวนมาก
                        อีกทั้งความผันผวนด้านราคาพลังงานก็ส่งผลกระทบต่อต้นทุนในการดําเนินธุรกิจที่สูงขึ้นนั่นเอง
                        หลายๆองค์กรพยายาม
                        หาแนวทางในการลดการใช้พลังงานแต่อาจจะยังไม่บรรลุผลสําเร็จ
                        เพราะการอนุรักษ์พลังงานจะต้องได้รับความร่วมแรง
                        ร่วมใจจากบุคลากรทั่วทั้งองค์กรนั่นเอง และที่สําคัญ
                        การร่วมแรงร่วมใจจากบุคลกรทั่วทั้งองค์กรน้นจะเกิดขึ้นได้ต้องมาจาก
                        การมีจิตสํานึกที่ดีด้านการอนุรักษ์พลังงานเป็นพื้นฐานสําคัญ
                        ซึ่งจิตสํานึกด้านการอนุรักษ์พลังงานไม่สามารถเกิดขึ้เองได้
                        แม้จะมีการบีบ หรือบังคับให้กระทําก็ตาม
                        หากแต่จิตสํานึกด้านการอนุรักษ์พลังงานน้นจะเกิดขึ้นได้ก็ด้วยความเข้าใจ
                        เชื่อมั่น และศรัทธา อันจะนําพาไปสู่ความสําเร็จในด้านการอนุรักษ์พลังงาน
                        และความภาคภูมิใจร่วมกันของบุคลากรทั่วทั้งองค์กรและยังเป็นพื้นฐานที่สําคัญในการพัฒนาองค์กรเข้าสู่มาตรฐานด้านการจัดการพลังงาน
                        ISO50001 อีกด้วย<br><br>

                        วัตถุประสงค์<br>
                        1. เพื่อเสริมสร้างความเข้าใจ และบทบาทสําคัญของพนักงานต่อการอนุรักษ์พลังงานที่มีต่อองค์กร<br>
                        2. เพื่อกระตุ้นให้พนักงานมีจิตสํานึกที่ดีร่วมกัน<br>
                        อันจะนําพาไปสู่การร่วมแรงร่วมใจกันอนุรักษ์พลังงาน<br>
                        3. เพื่อส่งเสริมให้พนักงานมีส่วนร่วมในการอนุรักษ์พลังงานด้วยตนเอง
                        ในสิ่งที่เขาทําได้และทําทันที<br>
                        4. เพื่อเสริมสร้างความสัมพันธ์ที่ดีระหว่างพนักงานและองค์กร และเป็นพื้นฐานในการดําเนินกิจกรรม<br>
                        อื่น ๆ ขององค์กรให้บรรลุเป้าหมาย ต่อไป เช่นระบบคุณภาพ ISO50001<br><br>

                        เนื้อหาการฝึกอบรม<br>
                        1. ประเมินความรู้และทัศนคติพื้นฐาน(Pre-Test)<br>
                        2. สถานการณ์ด้านพลังงานโลก และประเทศไทย รวมทั้งผลกระทบจากการใช้พลังงาน<br>
                        3. กฎหมายที่เกี่ยวข้องกับการอนุรักษ์พลังงาน<br>
                        4. Workshop 1 การสร้างจิตสํานึกที่ดีร่วมกันกิจกรรมที่ 1 <br>
                        5. วิกฤตด้านพลังงานขององค์กรใครล่ะจะช่วยได้<br>
                        6. Workshop2 การสร้างจิตสํานึกที่ดีร่วมกันกิจกรรมที่ 2<br>
                        7. การใช้พลังงานในบ้านของเรา รวมทั้งองค์กรของเรา และแนวทางในการร่วมกันอนุรักษ์พลังงาน<br>
                        8. Workshop3 ลดการใช้พลังงานพวกเราทําได้(กิจกรรมกลุ่ม)นําเสนอผลงาน<br>
                        9. ประเมินผลหลังการฝึกอบรม(Post-Test)<br><br>


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
            <h2 class="text-center"><b>จิตสำนึกการอนุรักษ์พลังงานในองค์กร Energy Conservation Awareness
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ภาครัฐจึงได้ออกฎหมายกฎบังคับใช้ เรื่องการดำเนินการอนุรักษ์พลังงานตามกฎหมาย
                การอนุรักษ์พลังงานภายใต้พระราชบัญญัติการส่งเสริมการอนุรักษ์พลังงาน พ.ศ.๒๕๓๕ (และฉบับแก้ไขเพิ่มเติม
                พ.ศ.๒๕๕๐) สำหรับโรงงานควบคุมและอาคารควบคุม
            </h5>
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน1.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน2.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน3.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน4.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน5.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/สร้างจิตสำนึกอนุรักษ์พลังงานช่วยประหยัดพลังงานในโรงงาน6.jpg"
                        alt="การสร้างจิตสํานึกในการอนุรักษ์พลังงานในองค์กร,อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน,อบรม อนุรักษ์พลังงาน ออนไลน์,การจัดทำแผนการอนุรักษ์พลังงาน,อบรมฟรี,อบรมออนไลน์,เซฟตี้,safety,หลักสูตรอบรมภายในองค์กร">
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
                            <h5><b>จิตสำนึก</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            การที่บุคคลมีความรู้ในเรื่องใดเรื่องหนึ่ง แล้วมีพฤติกรรม<br>
                            หรือการปฏิบัติในเรื่องนั้นๆ โดยรู้ตนเองว่ากำลังทำอะไรอยู่<br>
                            และทำไปเพื่ออะไร และสามารถบอกถึงผลกระทบจาก<br>
                            การปฏิบัติของตนได้<br>

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>พลังงาน (Energy) หมายถึง</b>
                            </h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            ความสามารถในการทำงานหรือทำให้เกิดงาน<br>
                            ผลการทำงานของแรงนั้นทำให้วัตถุหรือสิ่งใด ๆ เคลื่อนที่ หรือเคลื่อนไหว<br>
                            พลังงานนั้นสามารถจัดเก็บไว้ได้พลังงานไม่สามารถถูกทำลายได้<br>
                            แต่สามารถเปลี่ยนแปลงจากรูปหนึ่งไปเป็นอีกรูปหนึ่งได้<br>
                            เช่น พลังงานแสงเป็นพลังงานไฟฟ้า<br>
                            พลังงานไฟฟ้า เป็น พลังงานกล หรือ พลังงานความร้อน เป็นต้น<br>

                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การอนุรักษ์พลังงาน คืออะไร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            การอนุรักษ์พลังงาน คือการใช้พลังงานอย่างมีประสิทธิภาพ<br>
                            การประหยัดพลังงาน คือการไม่ใช้พลังงานเมื่อไม่จำเป็นต้องใช้<br>
                            หรือการใช้พลังงานเท่าที่จำเป็นต้องใช้เท่านั้น<br>
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>การอนุรักษ์พลังงานที่ “ไม่” ยั่งยืน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            ขาดการสนับสนุนจากผู้บริหาร และ เพื่อนร่วมงาน<br>
                            ขาดผู้ดูแลการใช้พลังงาน<br>
                            ขาดจิตสำนึกในการอนุรักษ์พลังงาน<br>
                            ขาดการติดตาม ตรวจสอบการใช้พลังงาน<br>
                            ขาดการดูแลซ่อมบำรุงอุปกรณ์<br>
                            ขาดการประชาสัมพันธ์ที่ดี<br>
                        </div>
                    </button>
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