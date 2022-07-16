<?php include('header_front.php'); ?>

<style>
.shadow {
    box-shadow: 0 10px 8px -8px black !important;
}

.contact__title {
    background-color: #22c06c;
    color: #fff;
    padding: 1rem 2rem;
}

.effect-focus {
    border-width: 3px !important;
    transition: 0.4s;
    background: transparent;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}

.effect-focus:focus {
    border: 3px solid #22c06c;
}

.effect-focus~label {
    position: absolute;
    left: 14px;
    width: 100%;
    top: 10px;
    color: #aaa;
    transition: 0.3s;
    z-index: 0;
    letter-spacing: 0.5px;
    pointer-events: none;
    font-weight: 400 !important;
}

.effect-focus:focus~label,
.has-content.effect-focus~label {
    top: -18px;
    left: 0;
    font-size: 12px;
    color: #22c06c;
    transition: 0.3s;
}

.contact-form .div-col-6 {
    width: 100%;
}
.contact-info-dec-new span{
    display: block;
    color: #010101;
}

.a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
}

@media (min-width: 769px) {
    .contact-form .div-col-6 {
        width: 49%;
    }
}
</style>
<main id="main-container" class="main-container">
    <section class="head__banner" style="position: relative;">
        <div class="container">
            <div class="row text_banner">
                <div class="col-12">
                    <h1><b>ติดต่อเรา</b></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mb-5 m-t-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 mb-4">
                        <div class="box_shadow">
                            <h3 class="contact__title"><b>
                                    สำนักงานใหญ่
                                </b></h3>
                            <div class="contact-info-wrap">
                                <div class="text-center">
                                    <h5><b>ท๊อป โปรเฟสชั่นแนล แอนด์ ดีเวลลอปเมนต์ จำกัด</b></h5>
                                    <hr class="hr_green mx-auto hr_fix_width">
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-info-dec-new">
                                        <span class="mb-3">
                                            <b>TELEPHONE :</b>
                                        </span>
                                        <span><u>
                                                <b>Public Training</b>
                                            </u></span>
                                        <a class="a-link" href="tel:033135009">033-135-009</a>
                                        <a class="a-link" href="tel:0659564049">065-956-4049</a>
                                        <a class="a-link" href="tel:0659564046">065-956-4046</a>
                                        <span><u>
                                                <b>In-House Training</b>
                                            </u></span>
                                        <a class="a-link" href="tel:0912345669">091-234-5669</a>
                                        <a class="a-link" href="tel:0632681079">063-268-1079</a>
                                        
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fas fa-globe-asia"></i>
                                    </div>
                                    <div class="contact-info-dec-new">
                                        <span>
                                            <b>EMAIL :</b>
                                        </span>
                                        <a class="a-link" href="mailto:safety1@topprobooking.com">
                                            safety1@topprobooking.com
                                        </a>
                                        <a class="a-link" href="mailto:safety1@topprobooking.com">
                                            safety2@topprobooking.com
                                        </a>
                                        <b>ภาคตะวันออก ภาคเหนือ ภาคอีสาน</b>
                                        <a class="a-link" href="mailto:safety1@topprobooking.com">
                                            hrod1@topprobooking.com (คุณอรวรรณ)
                                        </a>
                                        <b>ภาคใต้ ภาคกลาง ภาคตะวันตก</b>
                                        <a class="a-link" href="mailto:safety1@topprobooking.com">
                                            hrod2@topprobooking.com (คุณจอย)
                                        </a>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-dec-new">
                                        <span>
                                            <b>ADDRESS :</b>
                                        </span>
                                        <a class="a-link" target="_blank" rel="noreferrer"
                                            href="https://goo.gl/maps/Kp8JGQBtBmGkZizz9">ที่อยู่: 7/77
                                            ม.5
                                            ต.ห้วยกะปิ</a>
                                        <a class="a-link" target="_blank" rel="noreferrer"
                                            href="https://goo.gl/maps/Kp8JGQBtBmGkZizz9">อ.เมืองชลบุรี
                                            จ.ชลบุรี 20130</a>
                                    </div>
                                </div>
                                <div class="contact-social m-t-40">
                                    <h5><b>ติดตามเรา</b></h5>
                                    <div class="social-link">
                                        <ul>
                                            <li>
                                                <a target="_blank" rel="noreferrer"
                                                    href="https://www.facebook.com/IamSafetyInThai/#">
                                                    <img src="img/logo/logo-fb.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" rel="noreferrer"
                                                    href="https://line.me/R/ti/p/%40mgw1303w">
                                                    <img src="img/logo/logo-line.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" rel="noreferrer"
                                                    href="https://www.youtube.com/TopproChannel">
                                                    <img src="img/logo/logo-yt.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-social m-t-40">
                                    <div class="row">
                                        <h5><b>แผนที่</b></h5>
                                    </div>
                                    <div class="row">
                                        <a class="venobox" href="img/logo/map.jpg">
                                            <div class="box">
                                                <img title="" class="img-fluid rounded shadow" src="img/logo/map.jpg"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form box_shadow">
                            <div class="section-content">
                                <h3 class="section-content__title"><b>กรอกข้อมูล</b></h3>
                            </div>
                            <form class="contact-form-style" id="form_contact" action="#" method="POST">
                                <div class="row">
                                    <div class="div-col-6 form-box__single-group input-effect">
                                        <input class="effect-focus" type="text" id="name" name="name" placeholder=""
                                            required>
                                        <label>ชื่อผู้ติดต่อ</label>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="div-col-6 ml-auto form-box__single-group input-effect">
                                        <input class="effect-focus" type="email" id="email" name="email" placeholder=""
                                            required>
                                        <label>อีเมล</label>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="col-lg-12 form-box__single-group input-effect">
                                        <input class="effect-focus" type="text" id="tel" name="tel" placeholder=""
                                            OnKeyPress="return chkNumber(this)" maxlength="10" required>
                                        <label>เบอร์โทร</label>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="col-lg-12 form-box__single-group input-effect">
                                        <input class="effect-focus" type="text" id="topic" name="topic" placeholder=""
                                            required>
                                        <label>หัวข้อ</label>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="col-lg-12 form-box__single-group input-effect">
                                        <textarea id="detail" name="detail" class="effect-focus" rows="10"
                                            placeholder=""></textarea>
                                        <label>รายละเอียดของเรื่องที่ต้องการติดต่อ</label>
                                        <span class="focus-border">
                                            <i></i>
                                        </span>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button
                                            class="btn btn--box btn--medium btn--radius-tiny btn--green btn--green-hover-black btn--uppercase font--bold m-t-30"
                                            type="button" id="submit_mail">ส่งข้อความ
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <div id="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.4769789649745!2d100.961849!3d13.3205789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d4b7f5785f571%3A0x5b42e51d10285eb5!2z4Liq4LiW4Liy4Lia4Lix4LiZ4Lid4Li24LiB4Lit4Lia4Lij4Lih4LiU4LmJ4Liy4LiZ4LiE4Lin4Liy4Lih4Lib4Lil4Lit4LiU4Lig4Lix4LiiIC0g4LmA4LiL4Lif4LiV4Li14LmJ4Lit4Li04LiZ4LmE4LiX4LiiIEJ5IFRvcHBybw!5e0!3m2!1sth!2sth!4v1654653364112!5m2!1sth!2sth"
                width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</main>

<div class="alert alert-success" style="position: fixed; top: 20vh; right: 1rem;display:none;">
    <strong>Success!</strong> บันทึกสำเร็จ
</div>

<div class="alert alert-danger" style="position: fixed; top: 20vh; right: 1rem;display:none;">
    <strong>Fail!</strong> บันทึกไม่สำเร็จ
</div>

<?php include('footer_front.php'); ?>
<script>
function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9')) return false;
    ele.onKeyPress = vchar;
}

$(".col-lg-6 input", ".col-lg-12 input").val("");

$(".input-effect .effect-focus").focusout(function() {
    if ($(this).val() != "") {
        $(this).addClass("has-content");
    } else {
        $(this).removeClass("has-content");
    }
})

$('#submit_mail').on('click', (function(e) {
    e.preventDefault();
    if ($("#form_contact :invalid").is(':empty')) {
        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    } else {
        $.ajax({
            url: "send_email.php",
            type: "POST",
            data: new FormData($('#form_contact')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result == 1) {
                    $('.alert-success').fadeIn();
                    $(".alert-success").delay(3000).fadeOut();
                } else {
                    $('.alert-danger').fadeIn();
                    $(".alert-danger").delay(3000).fadeOut();
                }
                $("#form_contact input").val("");
                $("#form_contact textarea").val("");
                $(".input-effect .effect-focus").removeClass("has-content");
            }
        });
    }
}));
</script>