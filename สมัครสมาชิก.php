<?php include('header_front.php'); ?>
<style>
@media (min-width: 768px) {
    .register-fix-height {
        height: calc(1vw + 145px) !important;
    }
}

.people_inhouse {
    position: absolute;
    bottom: 0;
    left: 3vw;
    z-index: 2;
    height: 22vw;
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}

.register-fix-height {
    height: calc(0.5vw + 100px);
}

.img-register {
    max-width: 25%;
    padding-top: calc(0.5vw + 10px);
}

.h_regis {
    font-size: 5rem;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <section class="section_banner_full_width">
        <img alt="สิทธิพิเศษสำหรับสมัครสมาชิก" src="<?php echo $base_url; ?>/img/bg/สิทธิพิเศษสำหรับสมัครสมาชิก.jpg">
    </section>

    <section>
        <div class="container_small p-t-80 p-b-80">
            <h2 class="text-center"><b>พิเศษสุดสำหรับสมัครสมาชิกภายในเดือนนี้</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <h5 class="text-center">
                โปรโมชั่นสุดคุ้มพิเศษสำหรับท่านที่สมัครสมาชิก TOPPRO Member ภายในเดือนนี้เท่านั้น
                รับส่วนลดค่าอบรมหลักสูตรอื่นๆ อีกมากมายในราคาที่ถูกลงและรับของสมนาคุณฟรี และขยายอายุสมาชิกจาก 12 เดือน
                เป็น 18 เดือน
            </h5>
            <br>

            <div class="row mb-3 p-t-40">
                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card justify-content-center ">
                        <div class="row">
                            <div class="col-12 d-flex ">
                                <figure class="px-3">
                                    <img title="" class="img-register" src="<?php echo $base_url; ?>/img/logo/money.svg"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>ค่าอบรมถูกลง</b></h5>
                                <h6>
                                    สามารถสมัครเข้ารับการอบรมได้ในราคาที่ถูกลง ส่วนลดพิเศษในราคาสมาชิก<br>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="px-3">
                                    <img title="" class="img-register"
                                        src="<?php echo $base_url; ?>/img/logo/membership.svg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>ขยายอายุสมาชิก</b></h5>
                                <h6>
                                    ต่ออายุสมาชิกเพิ่มจาก 12 เดือน เป็น 18 เดือน ( นับจากวันที่ชำระค่าสมัคร )
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="px-3">
                                    <img title="" class="img-register"
                                        src="<?php echo $base_url; ?>/img/logo/video-call.svg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>อบรมฟรี</b></h5>
                                <h6>
                                    เข้ารับการอบรมได้ตลอดทั้งปี มากกว่า20 หลักสูตร ( เฉพาะหลักสูตรที่บริษัทฯ กำหนด )
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md col-12 mb-3 pb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="px-3">
                                    <img title="" class="img-register" src="<?php echo $base_url; ?>/img/logo/award.svg"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>รับประกาศนียบัตรฟรี</b></h5>
                                <h6>
                                    รับประกาศนียบัตรอิเล็กทรอนิกส์ฟรี เมื่อผ่านเข้ารับการอบรมในทุกหลักสูตร
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="px-3">
                                    <img title="" class="img-register" src="<?php echo $base_url; ?>/img/logo/gift.svg"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>รับของสมนาคุณฟรี</b></h5>
                                <h6>
                                    ของ Premium หน้ากากผ้ากันน้ำ ( สมัครแบบบุคคลทั่วไป ) กระเป๋า Toppro
                                    (สมัครแบบนิติบุคคคล )
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="px-3">
                                    <img title="" class="img-register"
                                        src="<?php echo $base_url; ?>/img/logo/businessman.svg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="register-fix-height px-3">
                            <div class="row">
                                <h5><b>ให้คำปรึกษาฟรี</b></h5>
                                <h6>บริการให้คำปรึกษาด้านการพัฒนาหลักสูตรและวางแผนการฝึกอบรมฟรี
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class=" container p-t-80 p-b-80 no_br">
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <img style="max-width: 55%;" src="<?php echo $base_url; ?>/img/logo/mask-web-green.png" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <h2 class="text-center"><b>สมัครสมาชิกรายปีแบบบุคคลทั่วไป</b></h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <br>
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            รับของสมนาคุณ สุดพิเศษทันที หน้ากากผ้าสะท้อนนํ้าไมโคร F30
                            สามารถป้องกันฝุ่นละออง PM 2.5และเชื้อไวรัสชนิดต่างๆ
                            หน้ากากทรง 3D 2 ชั้น สายคล้องหูยืดหยุ่น ทำความสะอาดง่ายมีให้เลือกทั้งหมด 2
                            สีส้มและสีเขียว
                        </div>
                        <div class="col-md-5 col-12 mx-auto mt-5">
                            <a
                                href="https://bit.ly/395vzWW">
                                <button
                                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                                    สมัครสมาชิกแบบบุคคลทั่วไป
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <h2 class="text-center">
                        <b>สมัครสมาชิกรายปีแบบนิติบุคคล</b>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <br>
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto text-center">
                            รับของสมนาคุณ สุดพิเศษทันที
                            กระเป๋าเป้ขนาดเล็กที่เหมาะกับการใส่ของใช้ในชีวิตประจำวัน ผลิตจากวัสดุพิเศษอย่างดี
                            ที่ทนทานต่อการใช้งาน
                            ช่องกว้างด้านในสามารถใส่สิ่งของได้อย่างสะดวกสบาย สายสะพายสามารถปรับได้ พร้อมหูหิ้วด้านบน
                            ขนาดกะทัดรัด มูลค่ากว่า 1,399.-
                        </div>
                        <div class="col-md-5 col-12 mx-auto mt-5">
                            <a
                                href="https://bit.ly/395vzWW">
                                <button
                                    class="btn btn-block btn--medium btn--radius btn--black btn--black-hover-green font--light text-uppercase">
                                    สมัครสมาชิกแบบนิติบุคคล
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center" data-aos="fade-left" data-aos-duration="1000">
                    <img style="max-width: 55%;" src="<?php echo $base_url; ?>/img/logo/กระเป๋า-web-green.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg p-t-10">
        <div class="div_inhouse d-flex align-items-center">
            <img title="" class="lazy people_inhouse" data-src="<?php echo $base_url; ?>/img/bg/people_inhouse.png"
                alt="">

            <div class="content_inhouse d-flex align-items-center text-center color-white">
                <div>
                    <h2>
                        <b>
                            สมัครสมาชิก
                        </b>
                    </h2>
                    <h3>เพื่อรับสิทธิพิเศษมากมาย<br>และมอบคำแนะนำหลักสูตรดีๆให้กับคุณ</h3>
                    <h3>โทร
                        <a class="color-white" href="tel:0863448654">086-3448654</a>,
                        <a class="color-white" href="tel:033135009">033-135-009</a>
                    </h3>
                </div>
            </div>
            <a href="https://bit.ly/395vzWW">
                <button class="ml-4 btn btn--medium btn--green btn--green-hover-white btn--radius">
                    สมัครสมาชิก
                </button>
            </a>
        </div>
    </section>

    <section>
        <div class="container p-t-80 p-b-80">
            <h2 class="text-center">
                <b>
                    ค่าสมัครสมาชิก
                </b>
            </h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <div class="row mb-3 p-t-40">

                <div class="col-xs-3 offset-lg-2 col-lg-4 col-md-6 col-12 mb-3 px-4">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row black-bg">
                            <div class="col-12 px-5 pt-3">
                                <h5 class="text-center"><b>สมาชิกรายปี</b></h5>
                                <p class="text-center">แบบบุคคลทั่วไป</p>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 my-3 py-5">
                            <div class="row text-center">
                                <span class="h_regis"><b>1,500</b></span>
                                <h5><b>ต่อปี</b></h5>
                            </div>
                        </div>
                        <a
                            href="https://bit.ly/395vzWW">
                            <span class="text-white btn-block text-center black-bg p-3"><b>สมัครสมาชิก</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </a>

                    </div>
                </div>

                <div class="col-xs-3 col-lg-4 col-md-6 col-12 mb-3 px-4">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row green-bg">
                            <div class="col-12 px-5 pt-3">
                                <h5 class="text-center"><b>สมาชิกรายปี</b></h5>
                                <p class="text-center">แบบนิติบุคคล</p>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 my-3 py-5">
                            <div class="row text-center color-green">
                                <span class="h_regis"><b>3,000</b></span>
                                <h5><b>ต่อปี</b></h5>
                            </div>
                        </div>
                        <a href="https://bit.ly/395vzWW">
                            <span class="text-white btn-block text-center green-bg p-3"><b>สมัครสมาชิก</b>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<?php include('footer_front.php'); ?>