<?php include('header_front.php'); ?>
<?php 
    //ดึงข้อมูลบทความที่เกี่ยวข้อง
    $stmt = $safetyDb->prepare('SELECT article.id_article,topic,content,count_view,create_date,cover_img,alt,JSON_EXTRACT(tag,"$.tags") as tags FROM article 
    WHERE status = "active" AND recommend = "active" AND del = "false"');
    $stmt->execute();
    $related_article = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
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

@media (min-width: 769px) {
    .contact-form .div-col-6 {
        width: 49%;
    }
}

.bg_input:before {
    background: #19232b;
    position: absolute;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
    opacity: 0.8;
    content: "";
}

.bg_input {
    position: relative;
    background-image: url('<?php echo $base_url;?>/img/template_gallery/gallery_safetyday (29).jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<main id="main-container" class="main-container">
    <div id="overlay"></div>

    <section class="section_banner_full_width">
        <img alt="" src="<?php echo $base_url;?>/img/banner_service/การจัดกิจกรรม-Safety-Day.png">
    </section>

    <section class="padding_bottom">
        <div class="container p-t-80 p-b-80 no_br">
            <h2 class="text-center"><b>กิจกรรมด้านความปลอดภัย Safetyday</b></h2>
            <hr class="hr_green mx-auto hr_fix_width">
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_safetyday (7).jpg" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center mb-3">
                    <div class="row">
                        <div class="col-lg-9 col-md-11 col-12 m-auto">
                            <h6>
                                การจัดกิจกรรม SAFETY DAY เพื่อปลูกฝังให้พนักงานทุกคนมีจิตสำนึกและมีความรู้
                                ความเข้าใจในเรื่องของความปลอดภัยและเป็นการรณรงค์ ส่งเสริม
                                เพื่อสร้างจิตสำนึกความปลอดภัย และให้พนักงานมีส่วนร่วมงานความปลอดภัยฯ
                                รวมทั้งเพื่อเป็นการให้พนักงานทุกคนได้เล็งเห็นความสำคัญในการร่วมมือร่วมใจ
                                ลดการเกิดอุบัติเหตุจากการทำงาน และเป็นการขับเคลื่อนงานความปลอดภัยขององค์กร
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
                                สถาบันฝึกอบรมด้านความปลอดภัย SAFETYINTHAI
                                ได้เล็งเห็นถึงความสำคัญในการร่วมมือร่วมใจสำหรับพนักงานเพื่อเป็นการลดอุบัติเหตุในการทำงาน
                                จึงรับจัดนิทรรศการ กิจกรรม ส่งเสริมความปลอดภัย | safey day | safety week | safety walk
                                ให้บริการด้านการจัดนิทรรศการ กิจกรรม สัปดาห์ความปลอดภัยภายในโรงงาน
                                รับจัดกิจกรรมความปลอดภัย ต่างๆ ให้บริการความรู้และกิจกรรม มากมาย จัดนิทรรศการความปลอดภัย
                                ที่จะให้ความสนุก บวกกับความรู้ด้านความปลอดภัย
                                ให้บริการ สัปดาห์ความปลอดภัย Safety Day SafetyWeek งาน Event ความปลอดภัย
                                งานความปลอดภัยต่างๆ
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-3 text-center">
                    <img style="max-width: 75%;" class="box_shadow"
                        src="<?php echo $base_url;?>/img/template_gallery/gallery_safetyday (10).jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <div class="why_training_box container_small">
            <div class="row m-b-50 p-t-40">
                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/1safetyday.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 why-fix-height">
                            <div class="text-center">
                                เพื่อเป็นการสร้างจิตสำนึก ในเรื่องความปลอดภัยในการทำงาน
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto scale">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/2safetyday.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pb-2 why-fix-height scale-text">
                            <div class="text-center">
                                เพื่อสร้างความสามัคคีภายในองค์กร
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md col-12 mb-3">
                    <div class="box_shadow rounded_card mx-auto">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <figure class="text-center">
                                    <img title="" class="img-fluid pt-5 pl-5 pr-5"
                                        src="<?php echo $base_url;?>/img/logo/3safetyday.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 pb-2 why-fix-height">
                            <div class="text-center">
                                เพื่อให้พนักงานได้มีส่วนร่วม ในกิจกรรมส่งสริมความปลอดภัย
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg padding_top color-white bg_input">
        <div class="container p-t-80 p-b-80">
            <div class="row">
                <div class="col-lg-6 px-5 align-self-center mb-3" style="position: relative;">
                    <h2 class="text-center"><b>กิจกรรมด้านความปลอดภัย Safetyday</b></br>
                    </h2>
                    <hr class="hr_green mx-auto hr_fix_width">
                    <div class="about__Text">
                        <p>
                            ให้บริการด้านการจัดนิทรรศการกิจกรรมสัปดาห์ส่งเสริมความปลอดภัยภายในโรงงานรับจัดกิจกรรมความปลอดภัย
                            ต่างๆ ให้บริการความรู้และกิจกรรมมากมาย
                            จัดนิทรรศการความปลอดภัย ที่จะให้ความสนุก บวกกับความรู้ด้านความปลอดภัยในการทำงาน
                        </p>
                    </div>
                    <br>
                    <ul>
                        <li><i class="fas fa-check-circle"></i>
                            safety day
                        </li>
                        <li><i class="fas fa-check-circle"></i>
                            safety week</li>
                        <li><i class="fas fa-check-circle"></i>
                            safety walk
                        </li>
                    </ul>
                    <br>
                    <a href="tel:0972370949">
                        <button
                            class="btn btn--box btn--medium btn--radius-tiny btn--green btn--green-hover-black btn--uppercase font--bold m-t-30"
                            type="submit">ติดต่อ 097-2370949
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 align-self-center text-center mb-3">
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
    </section>

    <section class="white-bg">
        <div class="row mx-auto no_br">
            <div class="col-12 mb-3">
                <div class="d-flex green-bg div_gallery">
                    <div class="col-5 text-center align-self-center text_gallery px-4">
                        <h2>ตัวอย่างภาพกิจกรรมการจัด Safety Day</h2>
                        <hr class="hr_green mx-auto" style="color: #fff !important;height: 2px !important;width:30%;">
                        <h5>เพื่อเป็นการปลูกจิดสำนึกรื่องความปลอดภัยในการทำงาน ให้หนักงานทราบถึงวิธีการทำงานที่ปลอดภัย
                            เพื่อสร้างความสามัคคีภายในองค์กร
                            และเพื่อเป็นการผ่อนคลายจากภารกิจงานประจำให้กับพนักงานจึงจัดให้มีกิจกรรมให้ทุกคนได้มีส่วนร่วม
                            โดยคำนึงถึงการสร้างจิตสำนึกเรื่องความปลอดภัยเป็นสำคัญ
                        </h5>
                    </div>
                    <div class="col-7">
                        <img style="width:100%;height:100%;"
                            src="<?php echo $base_url;?>/img/template_gallery/gallery_safetyday (9).jpg" alt="">
                    </div>
                </div>
                <div class="slider slider-nav mt-1">
                    <?php for($i = 1; $i <= 36 ; $i++){?>
                    <div>
                        <img src="<?php echo $base_url;?>/img/template_gallery/gallery_safetyday (<?php echo $i;?>).jpg"
                            alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <?php include('layout/standard.php'); ?>
    </section>

    <section>
        <?php include('layout/related_article.php'); ?>
    </section>

    <section class="p-t-30">
        <?php include('layout/ask_information.php'); ?>
    </section>

    <section class="white-bg">
        <?php include('layout/customer.php'); ?>
    </section>
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
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
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