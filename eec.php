<?php include('header_front.php'); ?>

<?php

    

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

            src="<?php echo $base_url;?>/img/bg/eec-2.jpg">

    </section>



    <section class="p-t-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-3 text-center" data-aos="fade-right" data-aos-duration="1000">
                <img title="" class="img-fluid" src="<?php echo $base_url;?>/img/logo/thailand.png"
                    alt="thailand">
            </div>
            <div class="col-md-6 col-12 align-self-center mb-3">
                <div class="row">
                    <div class="col-lg-9 col-md-11 col-12 m-auto">
                    <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000"><b>
                        สู่อนาคตที่สดใส <br>

</b></h1>
                        <hr class="hr_green mx-auto hr_fix_width">
                        &emsp;
                        <div class="text-center no_br">
                            <p>ด้วยโครงสร้างการกำกับดูแลและการกำหนดนโยบายที่ชัดเจน
ทำให้แผนการพัฒนาอีอีซีได้รับการวางแผนอย่างละเอียดรอบคอบ โครงการโครงสร้างพื้นฐานของอีอีซีได้รับการพัฒนาแบบบูรณาการ 
เพื่อเป็นประตูสำคัญสู่ทั้งเอเชียตะวันออกเฉียงใต้ และเอเชียแปซิฟิกในไม่กี่ปีข้างหน้า </p>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="white-bg p-b-80 p-t-80">

    <div class="container p-b-80 p-t-80">

    <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000"><b>

    อันดับของประเทศไทยในระดับโลก เอเชีย และอาเซียน

            </br>

        </b>

    </h1>

    <hr class="hr_green mx-auto hr_fix_width">

    <br>

    <div class= "table-responsive appointment" data-aos="fade-up"

                    data-aos-duration="1000">

        <table class="table">

            <thead>

                <tr>

                    <th scope="col">

                        <h5>ดัชนีชี้วัด</h5>

                    </th>

                    <th scope="col">

                        <h5>ปี</h5>

                    </th>

                    <th scope="col">

                        <h5>คะแนน(เต็ม 100)</h5>

                    </th>

                    <th scope="col">

                        <h5>อันดับโลก</h5>

                    </th>

                    <th scope="col">

                        <h5>อันดับในเอเชีย</h5>

                    </th>

                    <th scope="col">

                        <h5>อันดับในอาเซียน</h5>

                    </th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>ดัชนีชี้วัดความยากง่ายในการประกอบธุรกิจ </td>

                    <td>2563</td>

                    <td>80.10</td>

                    <td>21</td>

                    <td>5</td>

                    <td>3</td>

                </tr>

                <tr>

                    <td><b>ดัชนีความสามารถทางการแข่งขันระดับโลก 4.0 </b></td>

                    <td>2562</td>

                    <td>68.10</td>

                    <td>40</td>

                    <td>10</td>

                    <td>3</td>

                </tr>

                <tr>

                    <td>ดัชนีชี้วัดประสิทธิภาพด้านโลจิสติกส์ </td>

                    <td>2561</td>

                    <td>3.41</td>

                    <td>32</td>

                    <td>9</td>

                    <td>2</td>

                </tr>

                <tr>

                    <td>ดัชนีความสามารถทางการแข่งขันระดับโลก(สถาบัน IMD) </td>

                    <td>2562</td>

                    <td>79.45</td>

                    <td>25</td>

                    <td>11</td>

                    <td>3</td>

                </tr>

                <tr>

                    <td>อันดับความสามารถในการแข่งขันทางดิจิทัล(สถาบัน IMD)</td>

                    <td>2562</td>

                    <td>79.45</td>

                    <td>25</td>

                    <td>11</td>

                    <td>3</td>

                </tr>

                <tr>

                    <td>ดัชนีวัดศักยภาพการแข่งขันด้านทรัพยากรมนุษย์ของโลก </td>

                    <td>2563</td>

                    <td>41.3</td>

                    <td>67</td>

                    <td>20</td>

                    <td>6</td>

                </tr>

                <tr>

                    <td>ดัชนีนวัตกรรมระดับโลก </td>

                    <td>2562</td>

                    <td>38.63</td>

                    <td>43</td>

                    <td>10</td>

                    <td>4</td>

                </tr>

                <tr>

                    <td>ดัชนีการพัฒนาอย่างทั่วถึง*</td>

                    <td>2561</td>

                    <td>4.24</td>

                    <td>17</td>

                    <td>2</td>

                    <td>2</td>

                </tr>



            </tbody>

        </table>

        <br>

        <p>*จัดอันดับเฉพาะประเทศเศรษฐกิจเกิดใหม่ที่มา: ธนาคารโลก, IMD Business School, INSEAD, องค์การทรัพย์สินทางปัญญาแห่งโลก และสภาเศรษฐกิจโลก</p>



    </div>

</div>





<div class="container_small p-t-80 p-b-80">

    <h2 class="text-center" data-aos="fade-down" data-aos-duration="1000"><b>แผนการพัฒนาพื้นที่ อีอีซี <br>

        แผนการพัฒนาพื้นที่อีอีซี ถูกบรรจุในยุทธศาสตร์ชาติ 20 ปี ประกอบไปด้วย <br></b></h2>

    <hr class="hr_green mx-auto hr_fix_width">

    <div class="row mb-3 p-t-40">

        <div class="default-slider">

            <div class="default-slider-3grid-1rows">

                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐาน"

                                            src="<?php echo $base_url; ?>/img/eec/โครงสร้างพื้นฐาน.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐาน</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                    แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐาน

                                    </p>

                                    <a class="link--black link--green" href="https://www.eeco.or.th/th/government-initiative"><b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐานด้านดิจิทัล"

                                            src="<?php echo $base_url; ?>/img/eec/โครงสร้างพื้นฐานด้านดิจิทัล.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐานด้านดิจิทัล</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                    แผนปฏิบัติการการพัฒนาโครงสร้างพื้นฐานด้านดิจิทัล

                                    </p>

                                    <a class=" link--black link--green" href="https://www.eeco.or.th/th/government-initiative">

                                        <b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>





                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาศูนย์กลางธุรกิจ และศูนย์กลางการเงิน"

                                            src="<?php echo $base_url; ?>/img/eec/ศูนย์กลางธุรกิจ และศูนย์กลางการเงิน.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาศูนย์กลางธุรกิจ และศูนย์กลางการเงิน</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                    แผนปฏิบัติการการพัฒนาศูนย์กลางธุรกิจ และศูนย์กลางการเงิน

                                    </p>

                                    <a class=" link--black link--green" href="https://www.eeco.or.th/th/government-initiative">

                                        <b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาอุตสาหกรรมเป้าหมาย"

                                            src="<?php echo $base_url; ?>/img/eec/อุตสาหกรรมเป้าหมาย.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาอุตสาหกรรมเป้าหมาย</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                    แผนปฏิบัติการการพัฒนาอุตสาหกรรมเป้าหมาย

                                    </p>

                                    <a class=" link--black link--green" href="https://www.eeco.or.th/th/government-initiative">

                                        <b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาและส่งเสริมการท่องเที่ยว"

                                            src="<?php echo $base_url; ?>/img/eec/ส่งเสริมการท่องเที่ยว.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาและส่งเสริมการท่องเที่ยว</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                    แผนปฏิบัติการการพัฒนาและส่งเสริมการท่องเที่ยว

                                    </p>

                                    <a class=" link--black link--green" href="https://www.eeco.or.th/th/government-initiative">

                                        <b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                <div class="gap_slider">

                    <a href="https://www.eeco.or.th/th/government-initiative">

                        <div class="box_shadow rounded_card mx-auto">

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

                                    <figure class="overflow-hidden">

                                        <img title="" class="img-fluid img_cover" alt="แผนปฏิบัติการการพัฒนาบุคลากร การศึกษา การวิจัย และเทคโนโลยี"

                                            src="<?php echo $base_url; ?>/img/eec/บุคลากร การศึกษา การวิจัย และเทคโนโลยี.jpg">

                                    </figure>

                                </div>

                            </div>

                            <div class="pl-4 pr-4 pb-2">

                                <div class="row text-center course-fix-height">

                                    <h4><b>แผนปฏิบัติการการพัฒนาบุคลากร การศึกษา การวิจัย และเทคโนโลยี</b></h4>

                                    </h4>

                                </div>

                                <div class="row text-center course-fix-height">

                                    <p>

                                       แผนปฏิบัติการการพัฒนาบุคลากร การศึกษา การวิจัย และเทคโนโลยี

                                    </p>

                                    <a class=" link--black link--green" href="https://www.eeco.or.th/th/government-initiative">

                                        <b>อ่านเพิ่มเติม</b>

                                        <i class="fas fa-long-arrow-alt-right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

</section>



<section class="black-bg p-b-80 p-t-80">

        <div class="container">

        <h2 class="text-center" data-aos="fade-down" data-aos-duration="1000"><b>WELCOME TO เซฟตี้อินไทย</b></h2>

            <br>

            <div class="row">

                <div class="col-md-6 col-12 align-self-center mb-3">

                    <div class="row">

                        <div class="col-lg-9 col-md-11 col-12 m-auto">

                            <h4><b>เกี่ยวกับบริษัทเรา</b></h4>

                            <hr class="hr_green hr_fix_width">

                            บริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จํากัด 

                            ก่อตั้ง 17 กันยายน 2549 ศูนย์พัฒนาทรัพยากรมนุษย์ภาคตะวันออก ชลบุรี

                            ได้ดำเนินธุรกิจบริการจัดอบรมและสัมมนาโดยได้รับการรับรองระบบการบริหารด้านคุณภาพมาตรฐาน

                            ISO 9001 version 2008 และได้ปรับเป็น ISO 9001 version 2015 จาก

                            URS ได้ขึ้นทะเบียนเป็นสถาบันฝึกอบรมการพัฒนาความรู้

                            <br><br>

                            <div class="d-flex flex-row-reverse">

                                <a class="btn btn--medium btn--radius btn--green btn--black-hover-black text-uppercase"

                                    href="about">อ่านเพิ่มเติม...

                                </a>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="col-md-6 col-12 mb-3" style="position: relative">

                    <div class="youtube-video-place" data-yt-url="https://www.youtube.com/embed/LpQsJQDepyk?autoplay=1">

                        <div class="play-youtube-video">

                            <img title="" class="img-fluid"

                                src="<?php echo $base_url;?>/img/logo/company-profile-toppro.jpg"

                                alt="สถาบันฝึกอบรมด้านทรัพยากรมนุษย์และความปลอดภัย">

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

    </section>



    <section class="p-b-80 p-t-80">

        <?php include('layout/standard.php'); ?>

    </section>



    <section class="white-bg">

        <div class="container_small p-t-80 p-b-80">

            <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000"><b>

            ทางบริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จำกัด ได้การสร้างความร่วมมือกับ อีอีซี ออโตเมชั่น พาร์ค มหาวิทยาลัยบูรพา 

                </b></h1>

            <hr class="hr_green mx-auto hr_fix_width">

            <br>

            <div class="text-center">

        <h5>เพื่อพัฒนาทักษะบุคลากรในด้านความปลอดภัย และระบบอัตโนมัติ ในโรงงานร่วมมือกันพัฒนากำลังคน ในภาคอุตสาหกรรม และ ประชาชนทั่วไป ให้มีศักยภาพสูงขึ้น ในด้านวิชาชีพในการปฏิบัติงาน ที่ทันต่อความต้องการในการทำงานภาค อุตสาหกรรม อันจะเป็นประโยชน์ ต่อการพัฒนาประเทศในระยะยาว</h5>

    </div>

</div>

    

<div class="d-flex black-bg div_gallery">

            <div class="col-5 text-center align-self-center text_gallery">

                <h2>ภาพบรรยากาศ</h2>

                <hr class="hr_green mx-auto" style="color: #fff !important;height: 2px !important;width:30%;">

                <h5 class="no_br">ทางบริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จำกัด <br>

                ได้การสร้างความร่วมมือกับ อีอีซี ออโตเมชั่น พาร์ค มหาวิทยาลัยบูรพา <br>

                    เพื่อพัฒนาทักษะบุคลากรในด้านความปลอดภัย และระบบอัตโนมัติ <br>

                    ในโรงงานร่วมมือกันพัฒนากำลังคน ในภาคอุตสาหกรรม และ <br>

                    ประชาชนทั่วไป ให้มีศักยภาพสูงขึ้น ในด้านวิชาชีพในการปฏิบัติงาน<br>

                     ที่ทันต่อความต้องการในการทำงานภาค อุตสาหกรรม อันจะเป็นประโยชน์ <br>

                     ต่อการพัฒนาประเทศในระยะยาวต่อไป <br>

                </h5>

            </div>

            <div class="col-7">

                <img style="width:100%;height:100%;" src="<?php echo $base_url;?>/img/template_eec/ท๊อปโปรกับมบูรพา.jpg"

                    alt="ทางบริษัท ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จำกัด <br>

                ได้การสร้างความร่วมมือกับ อีอีซี ออโตเมชั่น พาร์ค มหาวิทยาลัยบูรพา">

            </div>

        </div>

        <div class="slider slider-nav mt-1">
            <?php

                $data = [];
                $data[1] = 'toppro burapha';
                $data[2] = 'toppro mou burapha university';
                $data[3] = 'toppro mou';
                $data[4] = 'ท๊อปโปร';
                $data[5] = 'ท๊อปโปรกับมบูรพา';
                $data[6] = 'ท๊อปโปรร่วมกับมอบูร';
                $data[7] = 'บริษัทท๊อปโปร ร่วมมือกับ อีอีซี ออโตเมชั่น พาร์ค มหาวิทยาลัยบูรพา';

            ?>

            <?php for($i = 1; $i <= 7 ; $i++){?>
                
            <div>

                <img src="<?php echo $base_url;?>/img/template_eec/<?php echo $data[$i];?>.jpg" >
 </div>

            <?php } ?>

        </div>



    <section>

        <?php include('layout/course_hot.php'); ?>

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