<?php
session_start();
include_once('../base_url.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['recent_url'] = basename($_SERVER['PHP_SELF'],".php");
    header("location:login");
}
?>
<!DOCTYPE html>

<head>
    <title>Backend Safety In Thai</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type='text/css'>


    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="../img/logo/logo-1.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="css/amsify-suggestags.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="app sidebar-mini">
    <!-- ::::::  Start Header Section  ::::::  -->
    <header class="app-header"><a class="app-header__logo" href="index">Safety In thai</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li><a class="app-nav__item" href="../index"><i class="fas fa-home fa-lg"></i></a>
            </li>
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header> <!-- :::::: End Header Section ::::::  -->

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo $_SESSION['img'];?>"
                width="70" height="70" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><?php echo  $_SESSION['name']; ?></p>
                <p class="app-sidebar__user-designation"><?php echo $_SESSION['permission']; ?></p>
            </div>
        </div>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="index">
                    <i class="app-menu__icon fas fa-home"></i>
                    <span class="app-menu__label">จัดการหน้าแรก</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="promotion_back">
                    <i class="app-menu__icon fas fa-home"></i>
                    <span class="app-menu__label">จัดการโปรโมชัน</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="plan_back">
                    <i class="app-menu__icon fas fa-calendar-alt"></i>
                    <span class="app-menu__label">จัดการแผนการอบรม</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="article_back">
                    <i class="app-menu__icon fas fa-book"></i>
                    <span class="app-menu__label">จัดการบทความ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="gallery_back">
                    <i class="app-menu__icon far fa-images"></i>
                    <span class="app-menu__label">จัดการภาพการอบรม</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="menu_training_back">
                    <i class="app-menu__icon fas fa-bars"></i>
                    <span class="app-menu__label">จัดการเมนูหลักสูตรอบรม</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="menu_branch_back">
                    <i class="app-menu__icon fas fa-bars"></i>
                    <span class="app-menu__label">จัดการเมนูหลักสูตรจป</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="training_public_back">
                    <i class="app-menu__icon fas fa-clipboard-check"></i>
                    <span class="app-menu__label">จัดการหลักสูตร Public</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="training_inhouse_back">
                    <i class="app-menu__icon fas fa-clipboard-check"></i>
                    <span class="app-menu__label">จัดการหลักสูตร In-House</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="contact_back">
                    <i class="app-menu__icon fas fa-envelope"></i>
                    <span class="app-menu__label">จัดการหน้าติดต่อเรา</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="job_back">
                    <i class="app-menu__icon fas fa-person-sign"></i>
                    <span class="app-menu__label">จัดการงานที่รับสมัคร</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="http://www.histats.com/viewstats/?act=2&sid=4567142"
                    onclick="alert('ปิดใช้งานอยู่ กรุณาเปิดที่ไฟล์ header_front.php')">
                    <i class="app-menu__icon fas fa-chart-bar"></i>
                    <span class="app-menu__label">ดูสถิติผู้เข้าชม</span>
                </a>
            </li>

        </ul>
    </aside>
    <!-- ปิด Sidebar menu-->