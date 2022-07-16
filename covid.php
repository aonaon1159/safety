<?php include('header_front.php'); ?>
<?php 
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND del = "false" 
    HAVING tags LIKE "%โควิด%" OR tags LIKE "%Covid-19%" OR tags LIKE "%covid-19%"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
.parallax {
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
}

@media (min-width: 768px) {
    .parallax {
        background-attachment: fixed;
    }
}

.parallax:after {
    background: #19232b;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    content: "";
    opacity: 0.7;
}

.text-parallax {
    color: #FFF;
    position: relative;
    font-weight: 600;
    color: #FFF;
    opacity: 1;
}

.sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 150px;
}

.fix-width {
    max-width: 70px
}
</style>
<main id="main-container" class="main-container">

    <section class="section_banner_parallax">
        <div class="parallax d-flex justify-content-center"
            style="background-image: url('img/template_gallery/gallery5.jpg');background-position: center bottom;">
        </div>
        <div class="row m-auto">
            <span class="text-parallax align-self-center text-center">
                <h1><b>มาตรการป้องกันการแพร่ระบาดของเชื้อ COVID-19</b></h1>
                <h1><b>BY SAFETYINTHAI</b></h1>
            </span>
        </div>
    </section>

    <section class="white-bg p-t-80 p-b-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 92%;height: auto;" src="<?php echo $base_url;?>/img/bg/covid.jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 text-center m-auto">
                            <h2>
                                <b>เปิดให้บริการด้วยความมั่นใจ</b>
                            </h2>
                            <hr class="hr_green mx-auto hr_fix_width">
                            <span>
                                บริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จํากัด
                                ให้ความสำคัญกับการทำความสะอาดและฆ่าเชื้อภายในสถานที่จัดอบรม
                                เพื่อสร้าง<br>ความมั่นใจให้แก่ผู้ที่ใช้บริการ และพนักงานของเรา
                                ซึ่งจะช่วยให้ผู้เข้ารับ<br>การอบรมมีความ มั่นใจ และปลอดภัยมากยิ่งขึ้น
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-b-80 p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 text-center m-auto no_br">
                            <h2><b>มาตรการป้องกันการแพร่ระบาด</b></h2>
                            <hr class="hr_green mx-auto hr_fix_width">
                            บริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จํากัด <br> ได้กำหนดมาตรฐานใหม่ (New Normal)
                            สำหรับการเข้ารับ <br>การอบรมตามมาตรการป้องกันการแพร่ระบาดของเชื้อ COVID-19
                            <br>เราเชื่อว่ามาตรการของเรา
                            จะสร้างความมั่นใจให้ทุกท่าน<br>รู้สึกปลอดภัยและกลับมาเข้ารับการอีกครั้ง

                            และกลับมาเข้ารับการอีกครั้งโดยมีรายละเอียดของมาตรการป้องกัน ดังนี้
                            <br><br>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-12 mb-3" style="position: relative">
                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/v0EWi9igFT8?autoplay=1">
                        <div class="play-youtube-video">
                            <img title="" class="img-fluid" style="height: 21.45vw;width: 100%;"
                                src="<?php echo $base_url;?>/img/logo/preview_vd_covid.jpg" alt="">
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
            </div>
    </section>

    <section class="black-bg p-t-80 p-b-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="sticky">
                        <div class="row">
                            <div class="col-lg-9 col-md-11 col-12 mb-4 mx-auto">
                                <h2>
                                    มาตรฐานใหม่ (New Normal)
                                </h2>
                                <hr class="hr_green hr_fix_width">
                                <br>
                                <span>
                                    สำหรับการเข้ารับการอบรมตามมาตรการป้องกัน<br>
                                    การแพร่ระบาดของเชื้อ COVID-19
                                    มีรายละเอียด<br>ของมาตรการป้องกัน ดังนี้
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 col-md-8 col-8">
                            <div class="p-5 border rounded_card mx-2">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/thermometer-icon1.svg" alt="">
                                </figure>
                                <br>
                                มีการตรวจวัดอุณหภูมิร่างกาย หากมีอาการไข้หรืออุณหภูมิมากกว่า 37.5 องศา
                                ห้ามเข้า
                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/disinfectant-icon3.svg" alt="">
                                </figure>
                                <br>
                                จัดให้มีแอลกอฮอล์หรือเจลล้างมือ
                                ในบริเวณจุดคัดกรอง<br>ทางเข้า-ออก
                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width" src="<?php echo $base_url;?>/img/logo/air-icon5.svg"
                                        alt="">
                                </figure>
                                <br>
                                เพิ่มความถี่ในการทำความสะอาด ด้วยน้ำยาฆ่าเชื้อโรคบริเวณที่มีความเสี่ยง
                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/newspaper-icon7.svg" alt="">
                                </figure>
                                <br>
                                สื่อประชาสัมพันธ์การป้องกันการแพร่กระจายเชื้อโรคแก่พนักงาน

                                และผู้เข้ารับการอบรม
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-8">
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/medical-mask-icon2.svg" alt="">
                                </figure>
                                <br>
                                สวมหน้ากากอนามัยหรือหน้ากากผ้า
                                100% ตลอดเวลา คนไม่สวมหน้ากากห้ามเข้า
                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/medical-icon4.svg" alt="">
                                </figure>
                                <br>
                                อัปเดตและแจ้งข้อมูลข่าวสารให้แก่พนักงานและผู้เข้าอบรมถึงสถานการณ์
                                COVID

                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/stayhome-icon6.svg" alt="">
                                </figure>
                                <br>
                                สอบถามอาการของพนักงานทุกคน และบุคคลภายนอก
                                ที่เข้ามาในสถานประกอบการ

                            </div>
                            <div class="p-5 border rounded_card mx-2 mt-5">
                                <figure>
                                    <img title="" class="fix-width"
                                        src="<?php echo $base_url;?>/img/logo/cough-icon8.svg" alt="">
                                </figure>
                                <br>
                                หากผู้เข้าร่วมอบรมมีไข้ไม่สบายให้แจ้งเจ้าหน้าที่ทันทีก่อนเข้ารับการอบรม
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <a href="จปออนไลน์">
        <section class="section_banner">
            <img alt="" src="<?php echo $base_url; ?>/img/bg/bg-covid1.png">
        </section>
    </a>

</main>
<?php include('footer_front.php'); ?>