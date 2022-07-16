<?php include('header_front.php'); ?>
<?php
    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND recommend = "active" AND del = "false"
    ORDER BY create_date DESC');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
.collap button {
    border: 1px solid lightgray;
}

.collap .detail_collapse {
    padding-top: 1rem;
    line-height: 2rem;
    text-align: left;
}

.collap .fa-plus.collap_open,
.collap .fa-minus.collap_close {
    transition: all 0.5s ease-in-out;
    opacity: 0;
}

.collap .fa-plus.collap_close,
.collap .fa-minus.collap_open {
    transition: all 0.5s ease-in-out;
    opacity: 1;
}

.collap .fa-plus.collap_open,
.collap .fa-minus.collap_open {
    transform: rotate(360deg);
}

.collap .fa-plus.collap_close,
.collap .fa-minus.collap_close {
    transform: rotate(0deg);
}

.collap button {
    background: #fff;
}

.collap .btn_collap:not(.collapsed) {
    border: 3px solid #22c06c;
}

.collap .btn_collap:not(.collapsed) .head_collap {
    color: #22c06c;
}

@media (min-width: 768px) {
    .content_inhouse {
        padding-left: 10vw;
        padding-right: 4vw;
    }
}

.people_inhouse {
    position: absolute;
    bottom: 0;
    right: 3vw;
    z-index: 2;
    height: 22vw;
}

.enviro-fix-height {
    height: calc(1vw + 125px);
}

.img-enviro {
    max-width: 85%;
    padding-top: calc(0.5vw + 10px);
    padding-left: calc(2vw + 20px);
    padding-right: calc(2vw + 20px);
}

.parameter-fix-height {
    height: calc(1.5vw + 110px);
}

.waterq-fix-height {
    height: calc(1.5vw + 120px)
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <section class="section_banner_full_width">
        <img alt="<?php echo $menu_branch[0]['alt'];?>"
            src="<?php echo $base_url;?>/img/banner_service/ตรวจวัดและประเมินสภาพแวดล้อมในการทำงาน.png">
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img style="width:75%;" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การสำรวจสภาพแวดล้อมในการทำงานเบื้องต้น.jpg" alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การสำรวจสภาพแวดล้อมในการทำงานเบื้องต้น <br>(Walk Though Survey)</b>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            เป็นการสำรวจสภาพพื้นที่การทำงานและลักษณะการทำงาน
                            เพื่อชี้บ่งสภาพแวดล้อมในการทำงานประเภทใดที่อาจเป็นสิ่งคุกคาม
                            ทำให้เกิดผลกระทบต่อสุขภาพอนามัยของผู้ปฏิบัติงาน
                            ได้แก่
                        </p>
                        <br>
                        <ul>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางเคมี
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางกายภาพ</li>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางชีวภาพ
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางการยศาสตร์ (Ergonomics)
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางกายภาพ</li>
                            <li><i class="fas fa-check-circle"></i>
                                สภาพแวดล้อมทางชีวภาพ
                            </li>
                        </ul>
                        <br>
                        <p>
                            เพื่อกำหนดพื้นที่การทำงาน สภาพแวดล้อมในการทำงานและพารามิเตอร์แต่ละประเภท
                            จำนวนตัวอย่าแบบงพื้นที่ (Area
                            Simple) และตัวอย่างที่ตัวบุคคล (Personal Simple)
                            ที่จะดำเนินการตรวจวัดและประเมินผลเปรียบเทียบกับเกณฑ์มาตรฐานที่กำหนดตามกฎหมาย,
                            มาตรฐานของสถาบันหรือองค์กรที่เกี่ยวข้อง เช่น OSHA, NIOSH, ACGIH<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>การตรวจวัดและประเมินสภาพแวดล้อมในการทำงาน <br>(Working Environmental)</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                ดำเนินงานตามหลักวิชาการด้านสุขศาสตร์อุตสาหกรรม
                โดยการสำรวจสภาพแวดล้อมในการทำงานเบื้องต้นเพื่อค้นหาสิ่งที่เป็นอันตรายต่อสุขภาพ กำหนดให้มีการตรวจวัด,
                วิเคราะห์และประเมินผลเปรียบเทียบกับเกณฑ์มาตรฐานตามกฎหมายหรือมาตรฐานตามข้อแนะนำของสถาบันหรือองค์กรที่เป็นที่ยอมรับ
                จัดทำรายงานให้ข้อคิดเห็นและเสนอแนะเพื่อการควบคุมป้องกันต่อไป สภาพแวดล้อมในการทำงาน ได้แก่<br>
            </h5>
            <br>
            <div class="row mb-3 p-t-40">

                <div class="col-md col-12 mb-3 pb-3">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-enviro"
                                        src="<?php echo $base_url;?>/img/logo/ความร้อน-(Heat-Stress).png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="enviro-fix-height px-3">
                            <div class="row text-center">
                                <h5><b>ความร้อน (Heat Stress)</b></h5>
                                <h6>
                                    ตรวจวัดด้วยเครื่องมือและอุปกรณ์ที่มีคุณลักษณะตามมาตรฐาน ISO 7243 ISO 8996<br>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-enviro"
                                        src="<?php echo $base_url;?>/img/logo/แสงสว่าง-(Light).png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="enviro-fix-height px-3">
                            <div class="row text-center">
                                <h5><b>แสงสว่าง (Light)</b></h5>
                                <h6>
                                    ตรวจวัดค่าเฉลี่ยความเข้มของแสงสว่างบริเวณพื้นที่ทั่วไปและบริเวณการผลิตภายในสถานประกอบกิจการ
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-enviro"
                                        src="<?php echo $base_url;?>/img/logo/เสียง-(Noise).png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="enviro-fix-height px-3">
                            <div class="row text-center">
                                <h5><b>เสียง (Noise)</b></h5>
                                <h6>ตรวจวัดเพื่อประเมินระดับเสียงที่อาจมีผลกระทบต่อระบบการได้ยินของผู้ปฏิบัติงาน
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card effect_lift_up mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-enviro"
                                        src="<?php echo $base_url;?>/img/logo/สารเคมี-(Chemical-Agents).png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="enviro-fix-height px-3">
                            <div class="row text-center">
                                <h5><b>สารเคมี (Chemical Agents)</b></h5>
                                <h6>
                                    การตรวจวัดเพื่อประเมินปริมาณความเข้มข้นของสารเคมีในสภาพแวดล้อม
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-3 text-center">
                    <h2 class="text-center"><b>การตรวจวัดด้านชีวภาพ</b></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <h5 class="text-center">การตรวจวิเคราะห์ปริมาณจุลินทรีย์ในอากาศ</h5>
                    <br>
                    <img style="width:60%;" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การตรวจวัดด้านชีวภาพ.jpg" alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3 collap">
                    <div class="my-3 ">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap1">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>ปริมาณแบคทีเรียรวม</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap1" class="collapse detail_collapse">
                                เก็บตัวอย่างอากาศด้วยวิธีการใช้เครื่องดูดอากาศให้จุลินทรีย์ในอากาศตกกระทบบนจานอาหารเลี้ยงเชื้อ
                                และนำจานอากาศเลี้ยงเชื้อไปบ่มในตู้อบให้จุลินทรีย์เจริญเติบโตและทำการวิเคราะห์จำนวนต่อไป
                            </div>
                        </button>
                    </div>

                    <div class="my-3">
                        <button type="button" class="btn btn-block btn--medium p-3 btn_collap collapsed"
                            data-toggle="collapse" data-target="#collap2">
                            <div class="d-flex justify-content-between align-items-center head_collap">
                                <h5><b>ปริมาณเชื้อรารวม</b></h5><i class="fas fa-plus"></i>
                            </div>
                            <div id="collap2" class="collapse detail_collapse">
                                การประเมินผลเปรียบเทียบกับเกณฑ์มาตรฐาน ตามข้อเสนอแนะของสถาบันหรือองค์กรที่เกี่ยวข้อง
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b>การตรวจวัดและประเมินคุณภาพอากาศภายในอาคาร <br>(Indoor Air Quality)</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center"> คุณภาพอากาศภายในอาคารที่ไม่เหมาะสมอาจส่งผลกระทบกับสุขภาพอนามัย
                หรือเกิดอาการเจ็บป่วยของผู้ใช้อาคารจำเป็นจะต้องมีการบริหารจัดการเพื่อควบคุมคุณภาพอากาศภายในอาคารอย่างเหมาะสมมีประสิทธิภาพ
                พารามิเตอร์ที่ใช้เป็นดัชนีชี้วัดคุณภาพอากาศในอาคาร ได้แก่<br>
            </h5>
            <br>
            <div class="row cert_img">
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (10).png" alt="">
                    <h5><b>อุณหภูมิ</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (1).png" alt="">
                    <h5><b>ความชื้นสัมพัทธ์</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (2).png" alt="">
                    <h5><b>ความเร็วลม</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (3).png" alt="">
                    <h5><b>ปริมาณความเข้มข้นของคาร์บอนไดออกไซด์ (CO2)</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (4).png" alt="">
                    <h5><b>ปริมาณความเข้มข้นของคาร์บอนมอนอกไซด์ (CO)</b></h5>
                </div>
            </div>
            <div class="row cert_img">
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (5).png" alt="">
                    <h5><b>ปริมาณความเข้มข้นของฟอร์มาลดีไฮด์ (Formaldehyde)</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (6).png" alt="">
                    <h5><b>ปริมาณความเข้มข้นของไอระเหยอินทรีย์ทั้งหมด (TVOC)</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (7).png" alt="">
                    <h5><b>ปริมาณความเข้มข้นของฝุ่นละอองอนุภาคขนาดเล็ก 2.5 ไมครอน (PM2.5), 10 ไมครอน (PM10)</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (8).png" alt="">
                    <h5><b>ปริมาณแบคทีเรียรวมในอากาศ</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/quality (9).png" alt="">
                    <h5><b>ปริมาณเชื้อรารวมในอากาศ</b></h5>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 parameter-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/ปริมาณความเข้มข้นของ.png" alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>ปริมาณความเข้มข้นของไนโตรเจนไดออกไซด์(NO2)</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 parameter-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/โอโซน-(O3).png" alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>ปริมาณความเข้มข้นของโอโซน (O3)</b>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 parameter-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/ปริมาณไรฝุ่น.png" alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>ปริมาณไรฝุ่น (สารก่อภูมิแพ้)</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 parameter-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/อื่นๆ.png"
                                            alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>อื่น ๆ</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <h2 class="text-center"><b>พารามิเตอร์พิเศษเฉพาะพื้นที่</b>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <img style="width:75%;" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/พารามิเตอร์พิเศษเฉพาะพื้นที่.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg p-t-60"">
        <div class=" container p-b-80 p-t-80">
        <h2 class="text-center"><b>การประเมินสภาพการทำงานด้านการยศาสตร์ (Ergonomics)</b>
        </h2>
        <hr class="hr_green mx-auto hr_fix_width">
        <h5 class="text-center">เพื่อประเมินสภาพการทำงานในลักษณะงานต่าง ๆ
            ทั้งงานในสำนักงาน,ในกระบวนการผลิตหรือกระบวนการทำงานที่มีท่าทางการทำงาน,
            การใช้ส่วนของร่างกายทำงานไม่เหมาะสมและต่อเนื่องที่อาจทำให้เกิดผลกระทบต่อสุขภาพอนามัยของผู้ทำงาน เช่น
            เกิดการเมื่อยตัว, บาดเจ็บกล้ามเนื้อ, เกิดภาระบาดเจ็บสะสมจากการทำงาน เป็นต้น
            รูปแบบการประเมินพิจารณาให้เหมาะสมกับลักษณะการทำงาน ได้แก่
        </h5>
        <br>
        <div class="row cert_img">
            <div class="col-md text-center">
                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/แบบประเมินท่าทางร่างกาย.png"
                    alt="">
                <h5><b>แบบประเมินท่าทางร่างกายส่วนบน RULA <br>(Rapid Upper Limb Assessment)</b></h5>
            </div>
            <div class="col-md text-center">
                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/REBA.png" alt="">
                <h5><b>แบบประเมินท่าทางร่างกายทั้งลำตัว REBA <br>(Rapid Entire Body
                        Assessment)</b></h5>
            </div>
            <div class="col-md text-center">
                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/แบบประเมินความเสี่ยง.png" alt="">
                <h5><b>แบบประเมินความเสี่ยงในการทำงานกับคอมพิวเตอร์ <br>(A proposed RULA for
                        computer users)</b></h5>
            </div>
            <div class="col-md text-center">
                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/ROSA.png" alt="">
                <h5><b>แบบประเมินความเสี่ยงทางการยศาสตร์ด้วยวิธีการ ROSA <br>(Rapid Offices
                        Strain Assessment)</b></h5>
            </div>
        </div>
        </div>
    </section>

    <section class="p-t-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center align-self-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การตรวจวัดและประเมินสภาพการทำงานในสถานที่อับอากาศ.jpg"
                        alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h2 class="text-center" style="font-weight: 1000;">
                                การตรวจวัดและประเมินสภาพการทำงานในสถานที่อับอากาศ <br>(Inspection&Evaluation in Confine
                                Spaces)
                            </h2>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <p>
                                เพื่อตรวจวัดและประเมินสภาพอากาศในที่อับอากาศและลักษณะการทำงานที่อาจเป็นอันตรายต่อร่างกายและชีวิตของผู้ปฏิบัติงาน
                                โดยการตรวจประเมิน
                            </p>
                            <ul>
                                <li><i class="fas fa-check-circle"></i>
                                    การเตรียมความพร้อมของการทำงานในที่อับอากาศ
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    ขั้นตอนการปฏิบัติงาน</li>
                                <li><i class="fas fa-check-circle"></i>
                                    การตรวจวัดปริมาณออกซิเจน
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    การตรวจวัด % การระเบิด (% LEL)
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    การตรวจวัด % ก๊าซที่ทำให้เกิดการระเบิด
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    สภาพแวดล้อมทางชีวภาพ
                                </li>
                            </ul>
                            <br>
                            <p>
                                การประเมินผลเปรียบเทียบกับมาตรฐานตามกฎกระทรวง
                                กำหนดมาตรฐานในการบริหารและการจัดการด้านความปลอดภัย
                                อาชีวอนามัยและสภาพแวดล้อมในการทำงานในที่อับอากาศ พ.ศ. 2547, มาตรฐานตามข้อกำหนด ของ OSHA
                                หรือตามข้อเสนอแนะของ
                                NIOSH
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container p-t-80 p-b-80 no_br">
            <h2 class="text-center"><b>การตรวจวัดและประเมินระบบระบายอากาศและห้องสะอาด</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                เพื่อประเมินระบบระบายอากาศในพื้นที่การทำงานจัดไว้ให้เหมาะสมมีประสิทธิภาพเพียงพอแต่ละลักษณะงานอย่างไร
                โดยการตรวจวัดและประเมิน
            </h5><br><br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/bg/ห้องสะอาด-(Clean-Room)-safetyinthai.jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h5><b>ระบบระบายอากาศ (Ventilation)</b></h5>
                            <p>
                                การระบายอากาศโดยทั่วไปในพื้นที่การทำงาน, ตรวจวัดความเร็วลมเฉลี่ย,
                                ทิศทางการไหลของอากาศ<br>
                                ตรวจวัดและประเมินประสิทธิภาพของระบบระบายอากาศเฉพาะแห่ง (Local Exhaust Ventilation),
                                ความเร็วลมหน้า Hood, ใน
                                Duct, อัตราการไหลของอากาศ<br>
                                ตรวจวัดและประเมินอัตราการไหลเวียนอากาศ (Air Change per Hour) ในพื้นที่การทำงาน<br>
                                ตรวจวัดและประเมินประสิทธิภาพของตู้ดูดควัน (Fume Hood) ในห้องปฏิบัติการ<br><br>

                                การประเมินผลเปรียบเทียบกับมาตรฐาน ภายใต้พระราชบัญญัติควบคุมอาคาร พ.ศ. 2522,
                                มาตรฐานตามข้อเสนอแนะของ ASHRAE,
                                มาตรฐานตามข้อกำหนดของ OSHA และสถาบันหรือองค์กรที่เกี่ยวข้อง<br>
                            </p>
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
                            <h5><b>ห้องสะอาด (Clean Room)</b></h5>
                            <p>
                                ตรวจวัดและประเมินระดับความสะอาดของห้องสะอาด (Clean Room)<br>
                                ตรวจสอบการไหลเวียนของลมสะอาด (Airflow Tests)<br>
                                ตรวจสอบอนุภาคฝุ่นและมวลสารภายในห้องสะอาด (Cleanliness Classification Tests)<br>
                                ตรวจสอบแรงดันอากาศภายในห้องสะอาด (Room Pressurization Test)<br>
                                ตรวจสอบอุณหภูมิและความชื้นภายในห้องสะอาด (Temperature and Humidity Test)<br><br>
                                <b>
                                    มาตรฐานที่ใช้ประเมินคุณลักษณะของห้องสะอาด
                                </b>
                                มาตรฐาน Federal Standard 209E เช่น Class 100, 1000, 10,000, 100,000<br>
                                มาตรฐาน ISO Standard 14644-1 เช่น ISO Class 5, 6, 7, 8
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/bg/ระบบระบายอากาศ-(Ventilation)-safetyinthai.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container p-b-80 p-t-80">
            <h2 class="text-center"><b>การตรวจวัดและประเมินคุณภาพบรรยากาศทั่วไป</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                การตรวจวัดและประเมินคุณภาพบรรยากาศทั่วไปเพื่อการเฝ้าระวัง<br>
            </h5>
            <br>
            <div class="row cert_img">
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/เสียงรบกวน.png" alt="">
                    <h4><b>เสียงรบกวน</b></h4>
                    <p class="px-5">
                        ระดับเสียงเฉลี่ย 24 ชั่วโมง(Leq 24 Hour) และระดับเสียงสูงสุด (Lmax)
                        ระดับเสียงของยานพาหนะ
                    </p>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/ระดับเสียงของยานพาหนะ.png"
                        alt="">
                    <h4><b>ระดับเสียงของยานพาหนะ</b></h4>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/ปริมาณความเข้มข้นฝุ่นละออง.png" alt="">
                    <h4><b>ปริมาณความเข้มข้นฝุ่นละออง</b></h4>
                    <p class="px-5">
                        ขนาดไม่เกิน 100 ไมครอน (TSP), ฝุ่นละอองขนาดไม่เกิน 10 ไมครอน
                        (PM10),ฝุ่นละอองขนาดไม่เกิน 2.5 ไมครอน (PM2.5)
                    </p>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/ปริมาณสารมลพิษทางอากาศ.png"
                        alt="">
                    <h4><b>ปริมาณสารมลพิษทางอากาศ</b></h4>
                    <p class="px-5">
                        ได้แก่ ก๊าซคาร์บอนไดซัลไฟด์,ก๊าซคาร์บอนมอนอกไซด์,ก๊าซไนโตรเจนไดออกไซด์
                        , ก๊าซซัลเฟอร์ไดออกไซด์, ก๊าซโอโซน
                    </p>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/ปริมาณสารอินทรีย์ระเหยง่าย-(Volatile-Organic-Compounds).png"
                        alt="">
                    <h4><b>ปริมาณสารอินทรีย์ระเหยง่าย (Volatile Organic Compounds)</b></h4>
                    <p class="px-5">
                        ตามประกาศกรมควงคุมมลพิษ เช่น อะซิทัลดีไฮด์
                        อะครอลีน,อะคริโลไนไตรล์,เบนซีนคลอโรฟอร์มและอื่น ๆ
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container_small p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img style="width:75%;" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การตรวจวัดและประเมินปริมาณสารเจือปนในอา.jpg" alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <h2 class="text-center"><b>การตรวจวัดและประเมินปริมาณสารเจือปนในอากาศที่ระบายออกจากโรงงาน</b></br>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            สารเจือปนในอากาศที่ระบายออกจากโรงงาน โดยออกจากปล่อง หรือช่อง
                            หรือท่อระบายอากาศของโรงงานไม่ว่าจะผ่านระบบบำบัดหรือไม่ก็ตาม<br><br>

                            การตรวจวัดใช้วิธีการที่องค์การพิทักษ์สิ่งแวดล้อมแห่งประเทศสหรัฐอเมริกา(United States
                            Environmental
                            Protection Agency: US-EPA)กำหนดไว้
                            หรือใช้วิธีตามมาตรฐานอื่นที่เทียบเท่าที่กรมควบคุมมลพิษเห็นชอบ<br><br>

                            ปริมาณสารเจือปนที่การตรวจวัดและประเมิน ได้แก่<br>
                            <li><i class="fas fa-check-circle"></i>
                                ฝุ่นละออง(Total Suspended Particulate: TSP)
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                โลหะ พลวง (Antimony), สารหนู (Arsenic), ทองแดง (Copper), ตะกั่ว (Lead), ปรอท
                                (Mercury)<br>
                                ก๊าซ คลอรีน (Chlorine), ไฮโดรเจนคลอไรด์ (Hydrogen chloride), กรดกำมะถัน (Sulfuric acid),
                                คาร์บอนมอนอกไซด์
                                (Carbon Monoxide), ซัลเฟอร์ไดออกไซด์ (Sulfur dioxide), ออกไซด์ของไนโตรเจน (Oxides of
                                - Nitrogen)
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                สารระเหยอินทรีย์ ไซลีน (Xylene), ครีซอล (Cresol), และอื่น ๆ
                            </li>
                            <li><i class="fas fa-check-circle"></i>
                                การตรวจค่าความทึบแสง (Opacity)
                            </li>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container p-t-80 p-b-80">
            <h2 class="text-center">
                <b>การตรวจสอบคุณภาพน้ำ</b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <h5 class="text-center">
                <b>ตรวจสอบคุณภาพน้ำบริโภค ตามข้อกำหนดของกฎหมายหรือมาตรฐานที่เกี่ยวข้อง อาทิเช่น</b>
            </h5>
            <br>
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mb-3">
                    <img title="" class="box_shadow img-fluid"
                        src="<?php echo $base_url;?>/img/bg/การตรวจสอบคุณภาพน้ำ-safetyinthai.jpg" alt="">
                </div>
                <div class="col-lg-6 px-5 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 waterq-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/การตรวจสอบคุณภาพน้ำ-safetyinthai-1.png"
                                            alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>ตามผลิตภัณฑ์อุตสาหกรรมน้ำบริโภค</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 waterq-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/การตรวจสอบคุณภาพน้ำ-safetyinthai-2.png"
                                            alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>น้ำดื่มในภาชนะบรรจุที่ปิดสนิท</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 waterq-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/การตรวจสอบคุณภาพน้ำ-safetyinthai-3.png"
                                            alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>น้ำบาดาลที่ใช้บริโภค</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div
                                class="box_shadow rounded_card effect_lift_up mx-auto p-4 waterq-fix-height d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <img title="" class="img-fluid"
                                            src="<?php echo $base_url;?>/img/logo/การตรวจสอบคุณภาพน้ำ-safetyinthai-4.png"
                                            alt="">
                                    </div>
                                    <div class="col-8 align-self-center">
                                        <h5><b>ตามมาตรฐานคุณภาพน้ำประปาดื่มได้สของกรมอนามัย</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <h5 class="text-center">
                <b>การตรวจสอบประกอบด้วยคุณลักษณะและดัชนีคุณภาพน้ำที่กำหนดแตกต่างกันไป เช่น</b>
            </h5>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mb-3 p-t-40">
                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางกายภาพ-ชลบุรี-เซฟตี้อินไทย.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางกายภาพ</b></h5>
                                <h6>สี (Color), รส (Taste), กลิ่น (Odour),ความขุ่น (Turbidity), ความเป็นกรด-ด่าง (pH)
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางเคมี-safetyinthai-ชลบุรี.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางเคมี</b></h5>
                                <h6>ปริมาณสารทั้งหมด,คราบกระด้างทั้งหมด,โลหะและสารเป็นพิษ </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางจุลชีววิทยา-safetyinthai.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางจุลชีววิทยา</b></h5>
                                <h6>Standard Plate Count, MPN, E.coli, Coliform Bacteria, Disease-causing Bacteria</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <h5 class="text-center">
                <b>ตรวจสอบคุณภาพน้ำทิ้งตามข้อกำหนดของกฎหมายหรือมาตรฐานที่เกี่ยวข้อง อาทิเช่น</b>
            </h5>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row cert_img">
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานควบคุมการระบายน้ำทิ้งจากโรงงานอุตสาหกรรม-ชลบุรี-เซฟตี้อินไทย.png"
                        alt="">
                    <h5><b>มาตรฐานควบคุมการระบายน้ำทิ้งจากโรงงานอุตสาหกรรม</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานน้ำทิ้งลงบ่อน้ำบาดาล-ชลบุรี-เซฟตี้อินไทย.png"
                        alt="">
                    <h5><b>มาตรฐานน้ำทิ้งลงบ่อน้ำบาดาล</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานควบคุมการระบายน้ำทิ้งจากอาคารบางประเภทและบางขนาด-ชลบุรี.png"
                        alt="">
                    <h5><b>มาตรฐานควบคุมการระบายน้ำทิ้งจากอาคารบางประเภทและบางขนาด</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานน้ำทิ้งจากที่ดินจัดสรร-ชลบุรี.png" alt="">
                    <h5><b>มาตรฐานน้ำทิ้งจากที่ดินจัดสรร</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานควบคุมการระเหยน้ำทิ้งจากสถานีบริการน้ำมันเชื้อเพลิง-ชลบุรี.png"
                        alt="">
                    <h5><b>มาตรฐานควบคุมการระเหยน้ำทิ้งจากสถานีบริการน้ำมันเชื้อเพลิง</b></h5>
                </div>
                <div class="col-md text-center">
                    <img title="" class="img-fluid"
                        src="<?php echo $base_url;?>/img/logo/มาตรฐานน้ำทิ้งจากแหล่งเฉพาะอื่น-ๆ-ชลบุรี.png" alt="">
                    <h5><b>มาตรฐานน้ำทิ้งจากแหล่งเฉพาะอื่น ๆ ตามที่กฎหมายกำหนด</b></h5>
                </div>
            </div>
            <br>
            <br>
            <h5 class="text-center">
                <b>การตรวจสอบประกอบด้วยคุณลักษณะและดัชนีคุณภาพน้ำที่กำหนดแตกต่างกันไปแต่ละมาตรฐาน</b>
            </h5>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <div class="row mb-3 p-t-40">

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางกายภาพ-ชลบุรี-เซฟตี้อินไทย.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางกายภาพ</b></h5>
                                <h6>ความเป็นกรด-ด่าง (pH), อุณหภูมิ (Temperature),สี (Color)</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางเคมี-safetyinthai-ชลบุรี.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางเคมี</b></h5>
                                <h6>ของแข็งละลายน้ำทั้งหมด,ของแข็งแขวงลอยทั้งหมด,ปริมาณตะกอนหนัก,BOD,ซัลไฟด์,ไซยาไนด์,น้ำมันและไขมัน,TKN,โลหะหนัก
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7">
                                <figure class="text-center">
                                    <img title="" class="img-prepare"
                                        src="<?php echo $base_url;?>/img/logo/ทางจุลชีววิทยา-safetyinthai.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="condition-fix-height">
                            <div class="row text-center">
                                <h5><b>ทางจุลชีววิทยา</b></h5>
                                <h6>Total Coliform Bacteria, Fecal Coliform Bacteria</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/standard.php'); ?>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <?php include('layout/course_inhouse.php'); ?>
    </section>

    <section class="white-bg p-t-30">
        <?php include('layout/ask_information.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/customer.php'); ?>
    </section>

</main>
<?php include('footer_front.php'); ?>

<script>
$(".collap").on("click", ".btn_collap.collapsed", function(e) {
    e.preventDefault();
    $('.collap .collapse').not(this).collapse('hide');

    $(this).find('i').removeClass("collap_close").addClass("collap_open");
    $(this).find('i').removeClass("fa-plus").addClass("fa-minus");
})

$(".collapse").on('hide.bs.collapse', function() {
    $(this).parent("button").find('i').removeClass("collap_open").addClass("collap_close");
    $(this).parent("button").find('i').removeClass("fa-minus").addClass("fa-plus");
});
</script>