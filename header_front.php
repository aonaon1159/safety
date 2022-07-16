<?php
session_start();
include_once('base_url.php');
include_once('dbconnect_booking.php');
include_once('dbconnect_safety.php');

//ใช้สำหรับดูข้อมูลไปใส่ใน tag meta ที่ head
$actual_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$stmt = $safetyDb->prepare('SELECT meta_keyword,meta_description FROM menu_training WHERE url_page = ? UNION SELECT meta_keyword,meta_description FROM menu_branch WHERE url_page = ?');
$stmt->execute(array($actual_url,$actual_url));
$meta = $stmt->fetch(PDO::FETCH_ASSOC);
$meta_keyword = (isset($meta_keyword) && ($meta_keyword)) ? $meta_keyword : $meta['meta_keyword'];
$meta_description = (isset($meta_description) && ($meta_description)) ? $meta_description : $meta['meta_description'];
 
//ใช้สำหรับให้ pathinfo อ่านภาษาไทย
setlocale(LC_ALL,'en_US.UTF-8');
$active_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

//ดึงเมนู หลักสูตรจปแต่ละจังหวัดมาแสดง
$sql = 'SELECT id_menu_branch,namebranch,REPLACE(url_page, ".php", "") AS url_page FROM menu_branch WHERE del = "false" AND status = "active" ORDER BY namebranch';
$stmt = $safetyDb->prepare($sql);
$stmt->execute();
$menu_branch = $stmt->fetchAll(PDO::FETCH_ASSOC);

//ดึงเมนู หลักสูตรอบรมมาแสดง
$sql = 'SELECT id_menu_training,name_menu,REPLACE(url_page, ".php", "") AS url_page FROM menu_training WHERE del = "false" AND status = "active" ORDER BY sequence';
$stmt = $safetyDb->prepare($sql);
$stmt->execute();
$menu_training = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <!-- Facebook Pixel Code -->
    <meta name="facebook-domain-verification" content="lwinmbz0wymrwhfux6mgymv35jxqwx" />
    <script>

    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '241723677871501');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=241723677871501&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-205712238-1"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-205712238-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JSEQYB2Z8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9JSEQYB2Z8');
    </script>



    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KH9D2WZ');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <title>
        <?php if(isset($article_title)){
            echo $article_title."-เซฟตี้อินไทย" ;
        }else{
            echo (!preg_match('/[^A-Za-z0-9_]/', $active_page)) ? "เซฟตี้อินไทย" : $active_page."-เซฟตี้อินไทย" ;
        }
        ?>
    </title>
    <meta name="description"
        content="<?php echo isset($meta_description) && ($meta_description) ? $meta_description : "สถาบันฝึกอบรมด้านความปลอดภัย SAFETYINTHAI เซฟตี้อินไทยให้บริการด้านฝึกอบรมจป.หัวหน้างาน จป.บริหาร จป.เทคนิค คปอ โฟล์คลิฟท์ การทำงานบนที่สูง นั่งร้าน ไฟฟ้า เครนปั้นจั่น ช่างแอร์ อบรมสัมมนาจบพร้อมรับใบเซอร์";?>">
    <meta name="keywords"
        content="<?php echo isset($meta_keyword) && ($meta_keyword) ? $meta_keyword : "อบรมจป,จปหัวหน้างาน,จปบริหาร,จปเทคนิค,คปอ,อบรมคปอ,อบรมจปหัวหน้างาน,เจ้าหน้าที่ความปลอดภัยในการทำงาน,ทำไมต้องอบรมจป";?>">
    <?php echo (isset($article_title)) ? "<meta property=\"og:title\" content=\"{$article_title}\">" : "<meta property=\"og:title\" content=\"สถาบันฝึกอบรมด้านความปลอดภัย - เซฟตี้อินไทย\">";?>
    <?php echo (isset($article_image)) ? "<meta property=\"og:image\" data-react-helmet=\"true\" content=\"{$article_image}\">" : "<meta property=\"og:image\" data-react-helmet=\"true\" content=\"{$base_url}/img/logo/logo-1.png\">" ;?>
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="<?php echo isset($meta_description) && ($meta_description) ? $meta_description : "สถาบันฝึกอบรมด้านความปลอดภัย SAFETY IN THAI ให้บริการด้านฝึกอบรมในด้าน จป.หัวหน้างาน จป.บริหาร จป.เทคนิค คปอ โฟล์คลิทฟ์ การทำงานบนที่สูง นั่งร้าน ไฟฟ้า เครนปั่นจั่น ช่างแอร์ อบรมสัมมนาจบพร้อมรับใบวุฒิบัตร";?>">
    <meta property="og:url" content="https://เซฟตี้อินไทย.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#22c06c"/>
    <meta name="robots" content="notranslate">
    <meta name="googlebot" content="notranslate">
    <link rel="manifest" href="/assets/img/favicon/manifest.json">
    <link href='https://fonts.googleapis.com/css?family=Kanit:300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type='text/css'>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="<?php echo $base_url;?>/img/logo/logo-1.png" type="image/png">

    <!-- ::::::::::::::Apple touch icon::::::::::::::-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url;?>/img/logo/เซฟตี้อินไทย180.png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <link rel="stylesheet" href="<?php echo $base_url;?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/material-scrolltop.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/contact-buttons.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/venobox.min.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/css/main.css">
</head>

<body>
    <!-- Messenger ปลั๊กอินแชท Code -->
    <div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1759068651005736");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- ปิด Messenger ปลั๊กอินแชท Code -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH9D2WZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Histats.com  START  (aync)-->
    <!-- <script type="text/javascript">
    var _Hasync = _Hasync || [];
    _Hasync.push(['Histats.start', '1,4567142,4,0,0,0,00010000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
        var hs = document.createElement('script');
        hs.type = 'text/javascript';
        hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();
    </script>
    <noscript>
        <a href="/" target="_blank" rel="noreferrer"><img src="//sstatic1.histats.com/0.gif?4567142&101" alt="" border="0"></a>
    </noscript> -->
    <!-- Histats.com  END  -->


    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block">

            <!-- Start Header Center area -->
            <div class="header__center sticky-header">
                <div class="top_nav py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <span><i class="far fa-clock"></i>&nbsp; วันทำการ จ.-ส. เวลา 8.00 - 17.00
                                    น. &nbsp;<i class="fas fa-phone-alt"></i>&nbsp; โทร
                                    <a class="color-white" href="tel:0972370949">065-9564094</a></span>
                                <div class="header-menu">
                                    <div class="d-flex flex-row">
                                        <a target="_blank" rel="noreferrer" aria-label="Facebook"
                                            href="https://www.facebook.com/IamSafetyInThai">
                                            <img title="" class="mr-2"
                                                src="<?php echo $base_url;?>/img/logo/logo-fb.png" alt="Facebook">
                                        </a>
                                        <a target="_blank" rel="noreferrer" aria-label="Line"
                                            href="https://line.me/R/ti/p/%40mgw1303w">
                                            <img title="" class="mr-2"
                                                src="<?php echo $base_url;?>/img/logo/logo-line.png" alt="Line>
                                        </a>
                                        <a target="_blank" rel="noreferrer" aria-label="Youtube"
                                            href="https://www.youtube.com/TopproChannel">
                                            <img title="" class="mr-2"
                                                src="<?php echo $base_url;?>/img/logo/logo-yt.png" alt="Youtube">
                                        </a>
                                    </div>
                                </div> <!-- End Header Menu -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row p-tb-10">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <!-- Start Logo -->
                            <div class="header__logo">
                                <a href="index" class="header__logo-link">
                                    <img title="" class="header__logo-img"
                                        src="<?php echo $base_url;?>/img/logo/logo-safetyinthai.png" alt="Logo Safety">
                                </a>
                            </div> <!-- End Logo -->
                            <!-- Start Header Menu -->
                            <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'index') ? "header__nav-item_active" : "" ;?>">
                                            <a href="<?php echo $base_url;?>/index" class="header__nav-link">หน้าแรก</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'service') ? "header__nav-item_active" : "" ;?>">
                                            <a href="#" class="header__nav-link">บริการ <i
                                                    class="fal fa-chevron-down"></i></a>

                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">

                                                <li class="dropdown__list">
                                                    <a href="<?php echo $base_url;?>/สมัครสมาชิก"
                                                        class="dropdown__link">
                                                        สมัครสมาชิก
                                                    </a>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="<?php echo $base_url;?>/ตรวจสภาพสิ่งแวดล้อม"
                                                        class="dropdown__link">
                                                        ตรวจสภาพสิ่งแวดล้อม
                                                    </a>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="<?php echo $base_url;?>/กิจกรรมด้านความปลอดภัยsafetyday"
                                                        class="dropdown__link">
                                                        กิจกรรมด้านความปลอดภัย Safetyday
                                                    </a>
                                                </li>
                                                <li class="dropdown__list">
                                                    <a href="<?php echo $base_url;?>/ร่วมงานกับเรา"
                                                        class="dropdown__link">
                                                        ร่วมงานกับเรา
                                                    </a>
                                                </li>

                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'course') ? "header__nav-item_active" : "" ;?>">
                                            <a href="#" class="header__nav-link">หลักสูตรอบรม
                                                <i class="fal fa-chevron-down"></i></a>

                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">

                                                <?php foreach($menu_training as $key=>$value){?>
                                                <li class="dropdown__list">
                                                    <a data-name="id_menu_training"
                                                        data-id="<?php echo $value['id_menu_training'];?>"
                                                        href="<?php echo $value['url_page'];?>"
                                                        class="post_menu dropdown__link">
                                                        <?php echo $value['name_menu'];?>
                                                    </a>
                                                </li>
                                                <?php } ?>

                                            </ul>
                                            <!--Single Dropdown Menu-->
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <?php if($menu_branch){?>
                                        <li
                                            class="header__nav-item pos-relative <?php echo (strpos($active_page, "อบรมจป") !== false) ? "header__nav-item_active" : "" ;?>">
                                            <a href="#" class="header__nav-link">หลักสูตรจป
                                                <i class="fal fa-chevron-down"></i></a>

                                            <!--Single Dropdown Menu-->
                                            <ul class="dropdown__menu pos-absolute">

                                                <li class="mega-menu__box">
                                                    <ul class="mega-menu__item row">
                                                        <?php foreach($menu_branch as $key=>$value){?>
                                                        <li class="dropdown__list col-6">
                                                            <a data-name="id_menu_branch"
                                                                data-id="<?php echo $value['id_menu_branch'];?>"
                                                                href="<?php echo $value['url_page'];?>"
                                                                class="post_menu dropdown__link pl-2">
                                                                <?php echo "จป".$value['namebranch'];?>
                                                            </a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>

                                                </li>

                                            </ul>
                                            <!--Single Dropdown Menu-->

                                        </li> <!-- End Single Nav link-->
                                        <?php } ?>

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'ศูนย์ทดสอบฝีมือแรงงาน') ? "header__nav-item_active" : "" ;?>">
                                            <a href="<?php echo $base_url;?>/ศูนย์ทดสอบฝีมือแรงงาน"
                                                class="header__nav-link">ศูนย์ทดสอบฝีมือแรงงาน</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'article') ? "header__nav-item_active" : "" ;?>">
                                            <a href="<?php echo $base_url;?>/article"
                                                class="header__nav-link">บทความ</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'gallery') ? "header__nav-item_active" : "" ;?>">
                                            <a href="<?php echo $base_url;?>/gallery"
                                                class="header__nav-link">ภาพอบรม</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li
                                            class="header__nav-item pos-relative <?php echo ($active_page == 'contact') ? "header__nav-item_active" : "" ;?>">
                                            <a href="<?php echo $base_url;?>/contact"
                                                class="header__nav-link">ติดต่อเรา</a>
                                        </li> <!-- End Single Nav link-->
                                    </ul>
                                </nav>
                            </div> <!-- End Header Menu -->
                        </div>
                    </div>
                </div>
                <a href="<?php echo $base_url;?>/อบรมหลักสูตรฟรี">
                    <div class="py-2 course_free_nav_bg">
                        <div class="container">
                            <div class="container">
                                <div class="d-flex justify-content-center align-items-center text-white">
                                    <span
                                        class="text_free">อบรมหลักสูตรฟรี&nbsp;<?php echo date("Y")+543;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;
                                    <u>คลิกที่นี่</u>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div> <!-- End Header Center area -->
        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-t-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center">
                        <ul class="header__mobile--leftside d-flex align-items-center flex-grow-1">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="<?php echo $base_url;?>/index" class="header__mobile-logo-link">
                                        <img src="<?php echo $base_url;?>/img/logo/logo-safetyinthai.png" alt=""
                                            class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center">
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i
                                        class="far fa-bars"></i></a></li>

                        </ul> <!-- End User Action -->
                    </div>
                </div>
            </div>
            <a href="<?php echo $base_url;?>/อบรมหลักสูตรฟรี">
                <div class="m-t-20 py-2 course_free_nav_bg">
                    <div class="container">
                        <div class="container">
                            <div class="d-flex justify-content-center align-items-center text-white">
                                <span
                                    class="text_free">อบรมหลักสูตรฟรี&nbsp;<?php echo date("Y")+543;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;
                                <u>คลิกที่นี่</u>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close" aria-label="Close"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-inner">
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="<?php echo $base_url;?>/index"><span>หน้าแรก</span></a>
                        </li>
                        <li>
                            <a href="#">บริการ</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo $base_url;?>/สมัครสมาชิก">
                                        สมัครสมาชิก
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>/ตรวจสภาพสิ่งแวดล้อม">
                                        ตรวจสภาพสิ่งแวดล้อม
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>/กิจกรรมด้านความปลอดภัยsafetyday">
                                        กิจกรรมด้านความปลอดภัยsafetyday
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>/ร่วมงานกับเรา">
                                        ร่วมงานกับเรา
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">หลักสูตรอบรม</a>
                            <ul class="sub-menu">
                                <?php foreach($menu_training as $key=>$value){?>
                                <li>
                                    <a class="post_menu" data-name="id_menu_training"
                                        data-id="<?php echo $value['id_menu_training'];?>"
                                        href="<?php echo $value['url_page'];?>">
                                        <?php echo $value['name_menu']; ?>
                                    </a>
                                </li>
                                <?php } ?>

                            </ul>
                        </li>

                        <?php if($menu_branch){?>
                        <li>
                            <a href="#">หลักสูตรจป</a>
                            <ul class="sub-menu">
                                <?php foreach($menu_branch as $key=>$value){?>
                                <li>
                                    <a class="post_menu" data-name="id_menu_branch"
                                        data-id="<?php echo $value['id_menu_branch'];?>"
                                        href="<?php echo $value['url_page'];?>">
                                        <?php echo "จป".$value['namebranch'];?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>

                        <li>
                            <a href="<?php echo $base_url;?>/ศูนย์ทดสอบฝีมือแรงงาน">ศูนย์ทดสอบฝีมือแรงงาน</a>
                        </li>

                        <li>
                            <a href="<?php echo $base_url;?>/article">บทความ</a>
                        </li>

                        <li>
                            <a href="<?php echo $base_url;?>/gallery">ภาพอบรม</a>
                        </li>

                        <li>
                            <a href="<?php echo $base_url;?>/contact">ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!--  End Mobile-offcanvas Menu Section   -->
        <div class="offcanvas-overlay"></div>

    </header> <!-- :::::: End Header Section ::::::  -->

    <?php include_once('check_cookie.php');?>