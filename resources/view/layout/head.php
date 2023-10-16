<?php
/*
 * Check login
 */
use App\helper\checkLogin;
new checkLogin;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?=get_path_env_billie_template()?>image-dashboard/dashboard-ico.png">
    <title><?=$_ENV['APP_NAME']?></title>

    <!--bootstrap-->
    <link rel="stylesheet" href="<?=get_path_env_billie_template()?>bootstrap-5.3.1/css/bootstrap.min.css">
    <!--\.bootstrap-->
    <!--fontawesome-->
    <link rel="stylesheet" href="<?=get_path_env_billie_template()?>fontawesome-6.4.2/css/all.min.css">
    <!--\.fontawesome-->
    <!--dashboard-->
    <link rel="stylesheet" href="<?=get_path_env_billie_template()?>css/dashboard.css?v=<?=date("YmdHis")?>">
    <!--\.dashboard-->
    <!--3illie-gallery-plugin-->
    <link rel="stylesheet" href="<?=get_path_env_billie_template()?>env-3illie-gallery-plugin/css/billie-gallery.css">
    <!--.\3illie-gallery-plugin-->
</head>
<body>

<nav class="nav_show">
    <div class="wrap-content">
        <div id="wrap_fa_bars">
            <i class="fa-solid fa-angles-right ps-2" style="cursor: pointer" onclick="collapse_aside()"></i>
        </div>
        <b class="mb-0 fw-semibold ps-2" id="name_app">ระบบจัดการหลังบ้าน</b>
    </div>
</nav>

<aside class="aside_show">
    <div class="aside_close">
        <i class="fa-solid fa-angles-left" style="cursor: pointer" onclick="collapse_aside()"></i>
    </div>

    <?php require_once(get_path_view("layout/profile")); ?>
    <?php require_once(get_path_view("layout/menu")); ?>

    <!--copyright-->
    <div class="wrap_aside_copyright">
        &copy; 2023 | Version.1
    </div>
    <!--\.copyright-->

</aside>

<!--content-->
<div id="wrap-content" class="content_show">
    <div class="area-content">
