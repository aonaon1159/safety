<?php include('header_front.php'); ?>

<?php 
    $id_training = 429;//การบริหารความปลอดภัยในการทำงานก่อสร้าง

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
            <h2 class="text-center"><b>การบริหารความปลอดภัยในการทำงานก่อสร้าง</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (11).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                งานก่อสร้างในประเทศได้ก้าวรุดหน้า และเพิ่มปริมาณขึ้นมาก
                                แต่สิ่งที่เกิดขึ้นเป็นเงาตามการปฏิบัติงานในงานก่อสร้าง คือ
                                อุบัติเหตุซึ่งการเกิดอุบัติเหตุในแต่ละครั้งก่อให้เกิดความสูญเสียทั้งชีวิตและทรัพย์สินอย่างประมาณค่ามิได้ความสูญเสียจากการก่อสร้าง
                                ในปัจจุบันในทวีความรุนแรงเพิ่มขึ้นทุกขณะจากการรวบรวมจำนวนการประสบอันตรายทั่วประเทศโดยจำแนกตามประเภทอุตสาหกรรมปี
                                2546 งานก่อสร้างมีผู้ประสบอันตรายทั้งสิน 15,728 คน ในจำนวนนี้มีผู้เสียชีวิตเป็นจำนวน 109
                                ราย และมีคนงานจำนวนมากที่ยังเสี่ยงต่อการเกิดอันตรายจากงานก่อสร้าง ดังนั้น
                                การป้องกันอุบัติเหตุและการลดการเกิดอุบัติเหตุ
                                จึงเป็นเรื่องที่ต้องรีบเร่งและให้มีการปฏิบัติอย่างจริงจัง
                                ทั้งนี้เพื่อลดความสูญเสียทั้งชีวิตและทรัพย์สินที่อาจจะเกิดขึ้น
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
                                สิ่งที่ส่งผลให้ความถี่และความรุนแรงของการเกิดอุบัติเหตุในงานก่อสร้างเพิ่มขึ้นคือการนำเอาเทคโนโลยี
                                อุปกรณ์เครื่องมือ เครื่องจักร อันทันสมัยมาใช้เพื่อทุ่นแรง
                                และประหยัดเวลาไม่เพียงแต่ความปลอดภัยในการก่อสร้างไม่ได้วิวัฒนาการตามเทคโนโลยีที่ทันสมัยแล้ว
                                ความปลอดภัยพื้นฐานในงานก่อสร้างยังถูกละเลย ขาดความสนใจ
                                และเอาใจใส่จากผู้รับเหมาและผู้เกี่ยวข้องต่างๆ อย่างจริงจัง นอกจากนี้ คนงานยังขาดความรู้
                                ความเข้าใจ และจิตสำนึกความปลอดภัยในการปฏิบัติอย่างถูกต้องเหมาะสม
                                อุบัติเหตุและโศกนาฏกรรมจึงยังคงเกิดซ้ำแล้วซ้ำเล่าอยู่เช่นนี้
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_forklift2 (12).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <?php include('layout/why_training.php'); ?>
    </section>

    <section class="white-bg padding_top" id="table_course">
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b class="head_nav">การบริหารความปลอดภัยในการทำงานก่อสร้าง</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">ท่านสามารถค้นหาหลักสูตรการบริหารความปลอดภัยในการทำงานก่อสร้าง
            </h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li style="width: 50%;" class="text-center" role="presentation"><a data-id_branch="46"
                                    data-id_training="355" href="#tab1" class="active" role="tab" data-toggle="tab"></i>
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
                <img title="" class="lazy" data-src="<?php echo $base_url;?>/img/template_gallery/gallery10.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 align-self-center black-bg p-t-80 p-b-80">
                <div class="row mx-4">
                    <div class="col-lg-12 col-md-11 col-12 m-auto">
                        <h2 class="text-center" style="font-weight: 1000;">
                            หลักการและเหตุผล
                        </h2>
                        <hr class="hr_green mx-auto hr_fix_width">
                        การปฏิบัติงานในงานก่อสร้างเป็นงานที่มีความเสี่ยงต่อการเกิดอุบัติเหตุสูงประเภทหนึ่ง
                        ซึ่งการเกิดอุบัติเหตุในแต่ละ ครั้งก่อให้เกิดความสูญเสียทั้งชีวิต
                        และทรัพย์สินอย่างประมาณค่ามิได้ความสูญเสียจากงานก่อสร้างในปัจจุบันได้ทวีความ
                        รุนแรงเพิ่มขึ้นทุกขณะ และมีคนงานจํานวนมากที่ยังเสี่ยงต่อการเกิดอันตรายจากงานก่อสร้าง
                        จึงมีความจําเป็นอย่างยิ่งที่ ผู้ปฏิบัติงานต้องมีทักษะ
                        ความรู้ในการปฏิบัติงานรวมถึงการใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคลและอุปกรณ์ที่เกี่ยวข้องใน
                        งานก่อสร้างเพื่อป้องกันอันตรายที่อาจเกิดขึ้นจากการขาค ทักษะ ความรู้ดังกล่าว<br><br>
                        วัตถุประสงค์<br>
                        1. เพื่อให้ผู้เข้าอบรมมีทักษะ ความรู้ ด้านความปลอดภัยในงานก่อสร้าง<br>
                        2. เพื่อให้ผู้เข้าอบรมมีทักษะ ความรู้ ในการใช้อุปกรณ์ป้องกันอันตรายส่วนบุคคล
                        และอุปกรณ์ที่เกี่ยวข้องในงาน ก่อสร้าง<br>
                        3. เพื่อให้ผู้เข้ารับการอบรม มีทักษะในการปฏิบัติงานได้อย่างถูกต้องและปลอดภัย<br><br>
                        หัวข้อการอบรม<br>
                        1. กฎหมายและความเข้าใจทั่วไปเกี่ยวกับความปลอดภัยในงานก่อสร้าง<br>
                        2. สาเหตุของการเกิดอุบัติเหตุในการปฏิบัติงานก่อสร้าง<br>
                        3. องค์ประกอบของความปลอดภัยในงานก่อสร้าง<br>
                        4. ความปลอดภัยในสถานที่งานก่อสร้าง<br>
                        5. ความปลอดภัยในการใช้เครื่องมือและเครื่องจักร<br>
                        อุปกรณ์ป้องกันอันตรายส่วนบุคคล<br>
                        6. ความปลอดภัยในการทํางาน<br>
                        7. ระบบป้องกันของตก การปิดกั้นควบคุมพื้นที่เขตก่อสร้าง-ขตอันตราย ความปลอดภัยส่วนบุคคล
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
                    การบริหารความปลอดภัยในงานก่อสร้าง
                </b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mx-auto">
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-06.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-05.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-04.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-03.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-02.jpg" alt="">
                </div>
                <div class="col-md-4 col-12 mb-4 article_course">
                    <img title="" class="img-fluid box_shadow"
                        src="<?php echo $base_url;?>/img/template_article/บทความก่อสร้าง-01.jpg" alt="">
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
                            <h5><b>สาเหตุของการเกิดอุบัติเหตุ</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap1" class="collapse detail_collapse">
                            สิ่งที่ส่งผลให้ความถี่และความรุนแรงของการเกิดอุบัติเหตุในงานก่อสร้างเพิ่มขึ้นคือการนำเอาเทคโนโลยี
                            อุปกรณ์เครื่องมือ เครื่องจักร อันทันสมัยมาใช้เพื่อทุ่นแรง
                            และประหยัดเวลาไม่เพียงแต่ความปลอดภัยในการก่อสร้างไม่ได้วิวัฒนาการตามเทคโนโลยีที่ทันสมัยแล้ว
                            ความปลอดภัยพื้นฐานในงานก่อสร้างยังถูกละเลย ขาดความสนใจ
                            และเอาใจใส่จากผู้รับเหมาและผู้เกี่ยวข้องต่างๆ อย่างจริงจัง นอกจากนี้ คนงานยังขาดความรู้
                            ความเข้าใจ และจิตสำนึกความปลอดภัยในการปฏิบัติอย่างถูกต้องเหมาะสม
                            อุบัติเหตุและโศกนาฏกรรมจึงยังคงเกิดซ้ำแล้วซ้ำเล่าอยู่เช่นนี
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap2">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>องค์ประกอบของความปลอดภัยในงานก่อสร้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap2" class="collapse detail_collapse">
                            งานก่อสร้างเป็นงานซึ่งมีกระบวนการและขั้นตอนในการดำเนินงานที่มากมายและเปลี่ยนแปลงอยู่เสมอ
                            วิถีทางหนึ่งของการป้องกันการเกิดอุบัติเหตุในงานก่อสร้างซึ่งสามารถแบ่งความปลอดภัยในงานก่อสร้างออกเป็น
                            3 ส่วน คือ<br>
                            - ความปลอดภัยในสถานที่<br>
                            - ความปลอดภัยในการใช้เครื่องมือเครื่องจักร<br>
                            - ความปลอดภัยส่วนบุคคล
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap3">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความปลอดภัยในสถานที่</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap3" class="collapse detail_collapse">
                            สถานที่ก่อสร้าง หมายถึง
                            อาณาบริเวณทั้งหมดที่เกี่ยวข้องกับการก่อสร้างมิใช่เฉพาะบริเวณที่กำลังดำเนินการก่อสร้างเท่านั้น
                            แต่รวมไปถึงบริเวณที่จัดเก็บวัสดุ โกดังเก็บเครื่องมือ เครื่องจักร และอื่นๆ เป็นต้น
                            จึงควรมีข้อกำหนดละแนวปฏิบัติในสถานที่ก่อสร้างขึ้นเพื่อให้เกิดความปลอดภัยกับคนงาน ดังนี้<br>
                            - การทำรั้วกั้นโดยรอบบริเวณก่อสร้างทั้งหมด
                            เพื่อป้องกันผู้ไม่เกี่ยวข้องเข้ามาในเขตก่อสร้างถ้าเป็นอาคารสูงอยู่ใกล้ชุมชน
                            นอกจากการทำรั้วกั้นแล้วควรทำหลังคาคลุมทางเดินที่ติดรั้วกั้นนั้นด้วย
                            เพื่อป้องกันเศษวัสดุตกใส่ผู้สัญจรไปมาภายนอก<br>
                            -
                            ในสถานที่ก่อสร้างต้องมีการแบ่งเขตก่อสร้างอย่างชัดเจนโดยแบ่งเขตที่พักอาศัยออกจากบริเวณก่อสร้างที่จัดเก็บเครื่องมือ
                            เครื่องจักร ที่เก็บวัสดุและอุปกรณ์ที่ใช้แล้วหรือยังไม่ใช้ออกเป็นระเบียบ<br>
                            - ป้ายสัญลักษณ์ หรือป้ายเตือนภัยต่างๆ สถานที่ที่อันตรายทุกแห่งในเขตก่อสร้าง
                            ต้องมีป้ายแสดงอันตรายหรือข้อควรปฏิบัติสำหรับผู้จะเข้าไปในบริเวณดังกล่าว
                            ซึ่งป้ายสัญลักษณ์นี้ต้องมีขนาดพอเหมาะและเห็นได้ชัดเจน
                            ภาพแสดงและตัวอักษรต้องเป็นสื่อสากลที่ทุกคนสามารถเข้าใจได้ง่าย<br>
                            - รอบตัวอาคารมีแผ่นกั้นกันวัตถุตกลงมาและมีตาข่ายคลุมอีกชั้น<br>
                            - อาคารขณะก่อสร้างในที่มีช่องเปิดหรือที่ไม่มีแผงกั้น ควรทำราวกั้น
                            และมีตาข่ายเสริมเพื่อป้องกันการตก
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap4">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความปลอดภัยในการใช้เครื่องมือเครื่องจักร</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap4" class="collapse detail_collapse">
                            เครื่องมือเครื่องจักรที่ใช้ในการก่อสร้างมีจำนวนมากมายตั้งแต่ขนาดใหญ่มาก เช่น ปั้นจั่น รถยก
                            เคริ่องตอกเสาเข็ม จนถึงขนาดเล็ก เช่น เครื่องเจียร สว่านไฟฟ้า ค้อน เป็นต้น
                            อันตรายที่เกิดจากการใช้เครื่องมือหรือเครื่องจักร จึงมีมากตามจำนวนอุปกรณ์และจำนวนผู้ใช้
                            ความปลอดภัยในการใช้เครื่องมือเครื่องจักรจึงเป็นสิ่งสำคัญซึ่งผู้ปฏิบัติงานควรใช้อย่างถูกต้อง
                            ดังเช่น<br>
                            - การใช้ต้องไม่ผิดวัตถุประสงค์ของอุปกรณ์ หรือเครื่องมือ เครื่องจักรนั้น เช่น
                            มักพบว่ามีการใช้ปั้นจั่นไปใช้ในการดึงหรือลากของที่มีน้ำหนักมากๆ
                            หรือการใช้ลิฟท์ส่งวัสดุในการขึ้นลงของคนงานซึ่งเป็นเรื่องไม่ควรปฏิบัติอย่างยิ่ง
                            ในทางปฏิบัติการใช้อุปกรณ์เครื่องมือเครื่องจักรอย่างเหมาะสมและถูกต้องตามประเภทของงาน
                            จะทำให้เกิดประสิทธิผล และไม่ประสบอันตรายจากการใช้อุปกรณ์ เครื่องมือ เครื่องจักรนั้น<br>
                            - เครื่องมือเครื่องจักรที่ใช้ไฟฟ้า หรือน้ำมันเชื้อเพลิง
                            ข้อควรปฏิบัติเครื่องมือเครื่องจักรที่ต้องใช้ไฟฟ้านั้น ต้องมีการเดินสายไฟอย่างปลอดภัย
                            มีฉนวนหุ้มโดยตลอด และหากต้องทำงานใกล้กับบริเวณที่มีไฟฟ้าทราบทุกครั้ง
                            เพื่อจัดการป้องกันอันตรายซึ่งอาจเกิดขึ้น หรือบริเวณที่มีการเก็บเชื้อเพลิง ห้ามจุดไฟ
                            หรือสูบบุหรี่อย่างเด็ดขาด<br>
                            - เครื่องมือเครื่องจักร ต้องมีการ์ด ระบบความปลอดภัย
                            ห้ามถอดหรือปิดระบบความปลอดภัยดังกล่าวหากเครื่องมือเครื่องจักรใดยังไม่มี
                            ควรจัดให้มีการ์ดและระบบความปลอดภัยอย่างเหมาะสมทันที<br>
                            -
                            ก่อนและหลังการใช้เครื่องมือเครื่องจักรทุกครั้งต้องมีการตรวจสอบและซ่อมแซมแก้ไขก่อนหรือหลังการใช้ทุกครั้ง
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap5">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ความปลอดภัยส่วนบุคคล</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap5" class="collapse detail_collapse">
                            สาเหตุหนึ่งของการเกิดอุบัติเหตุขึ้นในงานก่อสร้างนั้นมาจากผู้ปฏิบัติงาน
                            การควบคุมและการป้องกันไม่ให้เกิดอุบัติเหตุขึ้นนั้น
                            จำเป็นต้องให้ผู้ปฏิบัติงานในบริเวณทำการก่อสร้างปฏิบัติให้ถูกต้องตามกฎเกณฑ์และระเบียบที่กำหนดขึ้น
                            โดยเฉพาะแนวการปฏิบัติในงานก่อสร้างในเรื่องของ<br>
                            - การแต่งกายของผู้ปฏิบัติงานหรือคนงานควรเป็นชุดที่รัดกุมไม่ปล่อยชายเสื้อหรือแขนเสื้อหลุดลุ่ย
                            การใส่ผ้าถุง (คนงานหญิง) ซึ่งอาจก่อให้เกิดการเกี่ยวสะดุด หรือการดึงเข้าไปในเครื่องจักรได้
                            รวมทั้งการไม่ใส่รองเท้าหรือใส่อย่างไม่เหมาะสม เช่น รองเท้าแตะ เป็นต้น<br>
                            - การละเลยหรือการไม่สวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลให้เหมาะสมในงานก่อสร้าง
                            ผู้ปฏิบัติงานทุกคนควรสวมใส่อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลอย่างเหมาะสม เช่น หมวกนิรภัย
                            ทุกคนควรจะสวมอยู่เป็นประจำ เข็มขัดนิรภัยเมื่อคนงานทำงานบนที่สูง
                            สวมรองเท้ายางหุ้มแข็งและใส่ถุงมือยางในการผสมคอนกรีต เป็นต้น<br>
                            - ห้ามดื่มสุรา หรือเสพเครื่องดองของมึนเมา
                            ห้ามเล่นหรือหยอกล้อกันในระหว่างการปฏิบัติงานอย่างเด็ดขาด ผู้ฝ่าฝืนควรได้รับการลงโทษ
                            เพราะเป็นสาเหตุหนึ่งที่ทำให้เกิดอุบัติเหตุอย่างคาดไม่ถึง<br>
                            - จัดให้มีการอบรมผู้ปฏิบัติงานให้ตระหนักถึงอันตราย วิธีการปฏิบัติอย่างปลอดภัย กฎระเบียบ
                            ข้องบังคับและข้อปฏิบัติที่ควรทราบ และสิ่งสำคัญยิ่งคือการสร้างจิตสำนึก
                            ความปลอดภัยให้เกิดขึ้นในคนงานทุกคน
                            ไม่ว่าจะปฏิบัติงานอะไรก็ตามความปลอดภัยในการทำงานต้องมาเป็นอันดับแรกเสมอ<br>
                            - ตรวจสุขภาพคนงาน
                            และตรวจประจำปีเพื่อทดสอบความพร้อมของร่างกายคนงานและเพื่อเป็นการสกัดกั้นโรคจากการทำงานซึ่งอาจเกิดขึ้นได้
                            สำหรับผู้ที่ต้องปฏิบัติงานภายใต้ความกดอากาศสูงต้องให้แพทย์ทำการตรวจวินิจฉัยว่าแข็งแรงสมบูรณ์
                            และมีคุณสมบัติเหมาะสมก่อนเข้าปฏิบัติงานทุกครั้ง<br>
                            - จัดให้มีหน่วยงานปฐมพยาบาล และหน่วยฉุกเฉินขึ้นภายในหน่วยก่อสร้าง
                            เพื่อเป็นการช่วยเหลือผู้ได้รับบาดเจ็บ และเพื่อเป็นการระงับเหตุอันตรายต่างๆ ที่อาจจะเกิดขึ้น
                            ซึ่งอาจทวีความรุนแรงไปยังบริเวณใกล้เคียงได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap6">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ลักษณะของอันตรายจากงานก่อสร้างและวิธีป้องกัน</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap6" class="collapse detail_collapse">
                            – ตกจากที่สูง เช่น ตกจากนั่งร้าน ตกจากอาคาร ตกจากช่องลิฟต์ หรือตกจากช่องพื้นที่เจาะเปิดไว้
                            ดังนั้นต้องมีการทำราวกันตกริมอาคาร ปิดกั้นช่องลิฟต์ ทำฝาปิดช่องต่างๆ ทำตาข่ายรองรับ
                            ใช้เข็มขัดนิรภัยเมื่อทำงานในที่สูงและทำนั่งร้านให้แข็งแรง<br>
                            – การตกน้ำหรือตกรูที่ขุดไว้ เช่น ตกหลุมฐานรากที่มีน้ำท่วมขัง ท่อระบายน้ำ
                            รูเสาเข็มเจาะเป็นต้น จะต้องมีการติดป้ายเตือนให้เห็นชัดเจนทั้งกลางวันและกลางคืน ทำรั้วกั้น
                            ปิดฝาท่อ หรือรูเสาเข็ม<br>
                            – สิ่งของหนักหล่นใส่ เช่น เสาเข็มคอนกรีตล้ม ลูกตุ้มเสาเข็มหล่นทับวัสดุกระเด็นใส่
                            ต้องมีการเก็บกวาดเศษวัสดุบนพื้นทางให้สะอาดอยู่เสมอ ปิดกั้นขอบพื้นริมอาคาร
                            กั้นผ้าใบรองรับเพื่อป้องกันเศษวัสดุหล่นลงไปเบื้องล่าง<br>
                            – ไฟฟ้า เช่น จากเครื่องผสมปูน เครื่องสูบน้ำ เครื่องเชื่อมโลหะที่สายไฟฟ้ารั่ว
                            หรือจากไฟฟ้าแรงสูงจึงต้องมีการตรวจสอบสายไฟและอุปกรณ์ก่อนใช้งาน ติดตั้งอุปกรณ์ตัดไฟ
                            เมื่อเกิดการลัดวงจร แจ้งเจ้าหน้าที่การไฟฟ้าให้มาหุ้มฉนวนสายไฟฟ้าแรงสูงบริเวณที่จะทำงาน<br>
                            – แรงสั่นสะเทือนและเสียงดัง เช่น จากการตอกเสาเข็มการกดเข็มพืด
                            และกดปลอกเหล็กของเสาเข็มเจาะด้วยเครื่องกดแบบสั่น เสียงจากเครื่องตอกเสาเข็ม เครื่องขัดโลหะ
                            ควรใช้แผ่นไม้อัดหรือผ้าใบปิดกั้นเสียง ใช้อุปกรณ์ลดเสียงครอบหรือเสียบหู<br>
                            – อัคคีภัย เช่น จากไฟฟ้าลัดวงจร การเชื่อมด้วยแก๊สและไฟฟ้า การสูบบุหรี่หรือวางเพลิง
                            ซึ่งจะก่อให้เกิดความเสียหายอย่างมาก
                            การป้องกันต้องมีการตรวจสอบการใช้สายไฟและอุปกรณ์ให้มีความถูกต้อง
                            เก็บกวาดเศษวัสดุที่เป็นเชื้อเพลิง เก็บแก๊สและน้ำมันไว้ในพื้นที่ควบคุม
                            มีเวรยามคอยตรวจสอบความปลอดภัย<br>
                            – เครื่องจักรฉุดลาก เช่น สายพานฉุดลากผมของคนงานหรือชายเสื้อที่ปล่อยหลุดรุ่มร่าม
                            ควรอบรมให้ผู้ปฏิบัติงานได้รู้ถึงวิธีการใช้เครื่องจักรอย่างถูกต้อง
                            เตือนเรื่องการแต่งกายให้รัดกุม ไม่ประมาทขณะทำงานและหยุดทำงานเมื่อรู้สึกว่าร่างกายไม่ปกติ<br>
                            – การพังทลายของดิน เช่น ดินปากหลุมพังมาทับคนงาน อาจป้องกันโดยไม่ขุดหลุมลึกเกินไป
                            ถ้าขุดลึกต้องมีระบบค้ำยันป้องกันดินพังควรเคลื่อนย้ายดินปากหลุมออกไปอย่างต่อเนื่องไม่กองไว้จนสูงมาก<br>
                            – การพังของนั่งร้านและโครงสร้าง เนื่องจากออกแบบไว้ไม่แข็งแรงพอหรือบรรทุกน้ำหนักเกินกำหนด
                            ใช้วัสดุทำนั่งร้านและค้ำยันที่มีสภาพดี แข็งแรง เหล็กเสริมต้องถูกตำแหน่งครบถ้วน
                            ใช้คอนกรีตที่มีส่วนผสมถูกต้อง ไม่ถอดแบบก่อนกำหนด
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap7">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>สาเหตุของอันตรายที่เกิดขึ้นในงานก่อสร้าง</b></h5><i class="fas fa-plus"></i>
                        </div>
                        <div id="collap7" class="collapse detail_collapse">
                            (1) การปฏิบัติงานที่ไม่ปลอดภัย (Unsafe Acts)
                            เป็นอันตรายที่เกิดจากการปฏิบัติงานของคนงานก่อสร้างอย่างไม่คำนึงถึงความปลอดภัย
                            อุบัติเหตุส่วนใหญ่เกิดขึ้นเพราะสาเหตุนี้ ซึ่งผู้มีส่วนร่วมรับผิดชอบคือ
                            หัวหน้างานและตัวคนงานเอง เช่น การใช้เครื่องมือ เครื่องจักรทำงานโดยพลการ หรือไม่ได้รับมอบหมาย
                            ไม่เข้าใจวิธีใช้งานเครื่องมือเครื่องจักรอย่างถูกต้อง ไม่สนใจคำเตือนต่างๆ ประมาทเลินเล่อ
                            เล่นหรือหยอกล้อกันขณะปฏิบัติงาน เป็นต้น<br>
                            (2) สภาพการทำงานที่ไม่ปลอดภัย (Unsafe Conditions) ได้แก่
                            เงื่อนไขต่างๆนอกจากตัวบุคคลที่อาจทำให้เกิดอันตรายในการทำงาน ซึ่งสามารถแยกย่อยออกไปได้อีก 2
                            กรณี<br>
                            (3) อุบัติเหตุที่เกิดจากลักษณะของงานก่อสร้างแต่ละประเภท เช่น
                            อาคารขนาดเล็กอาจมีปัญหาเรื่องการพลัดตกจากที่สูง นั่งร้านพัง วัสดุตกใส่คนงาน
                            อาคารขนาดใหญ่อาจมีปัญหาดินถล่มขณะทำการก่อสร้างชั้นใต้ดิน นั่งร้านหรือค้ำยันพัง
                            อาคารที่ก่อสร้างด้วยระบบชิ้นส่วนสำเร็จรูปที่ใช้ปั้นจั่นยก
                            อาจมีอันตรายจากการประกอบชิ้นส่วนเป็นต้นว่า ปั้นจั่นเหวี่ยงถูกคนหรือสิ่งก่อสร้าง ลวดสลิงขาด
                            หรือใช้ลวดสลิงไม่ถูกวิธี<br>
                            (4) อุบัติเหตุที่เกิดจากสภาพแวดล้อมในการทำงาน
                            สภาพแวดล้อมในการทำงานที่ไม่พึงประสงค์และเป็นอันตรายก็เป็นสาเหตุหนึ่งที่ทำให้เกิดอุบัติเหตุได้
                            การทำงานในที่มีเสียงดัง มีความสั่นสะเทือนสูง มีเครื่องจักรขนาดใหญ่และเครื่องทุ่นแรงจำนวนมาก
                            ย่อมเกิดความสั่นสะเทือน ฝุ่นและควันที่สร้างมลภาวะและความรำคาญ ก่อให้เกิดความเมื่อยล้า
                            บั่นทอนประสิทธิภาพในการทำงาน รวมถึงก่ออุบัติเหตุขึ้นได้ การทำงานในที่มีระดับเสียงดังมากๆ
                            หรือมีแสงสว่างจ้ามากเกินไป
                            จึงต้องใช้อุปกรณ์คุ้มครองความปลอดภัยส่วนบุคคลอย่างถูกต้องเหมาะสมกับประเภทงานนั้นๆ
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap8">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อควรปฏิบัติเพื่อความปลอดภัย ที่เกี่ยวข้องกับบุคคล</b></h5>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div id="collap8" class="collapse detail_collapse">
                            - ควรมีการสวมหมวกนิรภัยตลอดเวลาที่อยู่ใรไซต์ก่อสร้าง เพื่อป้องกันอัตรายจากสิ่งของ
                            หรือวัสดุที่อาจตกหล่นลงมาได้<br>
                            - ควรมีการแต่งตัว สวมชุดที่ปกป้องร่างกาย กางเกงขายาว เสื้อแขนยาว
                            ไม่ควรใส่รองเท้าแตะในไซต์งานก่อสร้าง เพราะอาจเกิดการเหยียบเศษวัสดุก่อสร้างจนบาดเจ็บได้<br>
                            - ควรสังเกตว่ามีป้ายเตือนบริเวณต่างๆหรือไม่ เพราะบางโครงการก่อสร้างขนาดใหญ่มาก และแรงงานเยอะ
                            จึงมีการแบ่งสัดส่วนการทำงาน ทำให้แรงงานทุกคนอาจไม่รู้ถึงขั้นตอนการทำงานในส่วนอื่น
                            อาจเกิดอุบัติเหตุได้<br>
                            - เมื่อมีการใช้เครื่องมือเรียบร้อย ควรมีการเก็บให้เป็นที่
                            เครื่องมือหลายๆอย่างเป็นเครื่องมีที่มีความคม ควรจะเก็บในพื้นที่ที่ปลอดภัย
                            หรือกล่องอุปกรณ์ก่อน พอถึงเวลาจะใช้งานค่อยนำออกมาใช้<br>
                            - บริษัทรับเหมาก่อสร้างเอง ควรมีการจัดอบรมผู้ปฏิบัติงานมีรู้กระบวนการต่างๆ
                            และตระหนักถึงเรื่องความปลอดภัย ว่าต้องปฏิบัติตัวอย่างไรบ้างเพื่อป้องกันตนเอง
                            และเพื่อนร่วมงาน ทั้งนี้บริษัทก็ควรออกกฎ เป็นข้อบังคับให้ชัดเจน
                            และควรมีบทลงโทษกรณีฝ่าฝืนด้วย จะเป็นอีกตัวช่วยเรื่องความปลอดภัยต่อบุคคลภายในไซต์งานได้
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap9">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อควรปฏิบัติเพื่อความปลอดภัย ที่เกี่ยวข้องกับสถานที่ก่อสร้าง</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap9" class="collapse detail_collapse">
                            - ควรจัดเตรียมอุปกรณ์ดับเพลิง ไว้ตามจุดต่างๆ และแจ้งให้ผู้เกี่ยวข้องทราบ
                            เผื่อเกิดสถานการณ์ฉุกเฉิน มีหน่วยงานปฐมพยาบาลเบื้องต้น
                            เพื่อช่วยเหลือกรณีมีผู้ได้รับบาดเจ็บ<br>
                            - ทำรั้วกั้นบริเวณที่ก่อสร้าง เพื่อไม่ให้ผู้ไม่เกี่ยวข้องเข้ามาในบริเวณ<br>
                            - ควรแบ่งสัดส่วนของสถานที่ก่อสร้างให้ชัดเจน แบ่งบริเวณพักอาศัย
                            แบ่งบริเวณที่ใช้ขนส่งวัสดุก่อสร้าง แบ่งบริเวณสำหรับเก็บวัสดุอุปกรณ์<br>
                            - ส่วนไหนของอาคารที่กำลังก่อสร้างมีช่องเปิด ควรมีแผงกั้นกันตก เพื่อความปลอดภัย<br>
                            - รอบอาคารควรมีแผ่นกั้น เพื่อกันวัสดุตกลงมา<br>
                            - บริเวณไหนของไซต์งานก่อสร้างที่มีความเสี่ยง ก็ควรทำสัญลักษณ์แจ้งให้คนอื่นรับรู้ด้วย เช่น
                            บริเวณนี้รับน้ำหนักได้ไม่เกินกี่คน หรือบริเวณนี้ห้ามผ่าน เป็นต้น เพราะบางโครงการขนาดใหญ่มาก
                            แรงงานเยอะ ไม่ได้รู้รายละเอียดขั้นตอนการทำงานในส่วนอื่น<br>
                            - ไซต์งานก่อสร้างต้องให้ความสำคัญ เรื่องแสงสว่างในการทำงาน เพราะอาจเกิดอุบัติเหตุขึ้นได้
                            กรณีมองไม่เห็นจุดบอด หรือส่วนที่กำลังก่อสร้าง<br>
                            - มีการกำหนดเวลาเข้าออก แต่ละส่วนของไซต์อย่างชัดเจน
                        </div>
                    </button>
                </div>

                <div class="col-md-6 col-12 my-3">
                    <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                        data-toggle="collapse" data-target="#collap10">
                        <div class="d-flex justify-content-between align-items-center head_collap">
                            <h5><b>ข้อควรปฏิบัติเพื่อความปลอดภัย ที่เกี่ยวข้องกับเครื่องมือ เครื่องจักร</b></h5><i
                                class="fas fa-plus"></i>
                        </div>
                        <div id="collap10" class="collapse detail_collapse">
                            - ผู้ใช้งานเครื่องมือ เครื่องจักรต่างๆควรรู้วิธีใช้งานที่ถูกต้อง เพราะบางไซต์งาน
                            มีแรงงานที่ไร้ฝีมือ เป็นแรงงานที่เรียนรู้ใหม่
                            ควรมีการอบรมสอนวิธีใช้อย่างถูกต้องก่อนทำงาน<br>
                            - เครื่องมือ เครื่องจักรควรมีการใช้ถูกต้องกับประเภทงาน ไม่เช่นนั้นอาจเกิดการชำรุด
                            หรือเกิดอุบัติเหตุกับผู้ใช้งานได้<br>
                            - มีการบำรุงรักษาเครื่องมืออยู่เสมอ เพราะเครื่องมือ เครื่องจักรแต่ละชนิด มีอายุการใช้งาน
                            สามารถเกิดการเสื่อมได้ตามสภาพ ดังนั้นควรมีการดูแล และตรวจสอบก่อนใช้งานเสมอ
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