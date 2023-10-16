<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?= get_path_env_billie_template() ?>image-login/key-ico.png">
    <title>login - เข้าสู่ระบบ</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="<?= get_path_env_billie_template() ?>bootstrap-5.3.1/css/bootstrap.min.css">
    <!--\.bootstrap-->
    <!--fontawesome-->
    <link rel="stylesheet" href="<?= get_path_env_billie_template() ?>fontawesome-6.4.2/css/all.min.css">
    <!--\.fontawesome-->
    <!--Login css-->
    <link rel="stylesheet" href="<?= get_path_env_billie_template() ?>css/login.css">
    <!--\.Login css-->
</head>
<body>
<div class="login-bg-fixed">
    <div class="wrap-image-cover-pc d-none d-md-inline-block col-md-8">
        <div id="wrap-tag-image1"></div>
    </div>
    <div class="wrap-panel-login col-12 col-md-4">
        <div id="wrap-tag-image2" class="d-block d-md-none"></div>
        <div class="wrap-content-login">
            <div class="content-login-center">
                <form action="api/login" method="POST">
                    <h1><i class="fa-solid fa-unlock-keyhole" style="color: goldenrod"></i> Login System</h1>
                    <h5 class="text-secondary">กรุณาเข้าสู่ระบบเพื่อจัดการข้อมูล</h5>

                    <?php
                    if (isset($_SESSION['validation'])) {
                        ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['validation']['msg'] ?>
                        </div>
                        <?php
                    }
                    unset($_SESSION['validation']);
                    ?>
                    <hr>
                    <div class="form-floating mb-2">
                        <input class="form-control border border-secondary" type="text" id="username"
                               name="username"
                               placeholder="Username">
                        <label for="username"><i class="fa-solid fa-user"></i> ชื่อผู้ใช้ : </label>
                    </div>
                    <div class="form-floating" id="wrap-password">
                        <input class="form-control  border border-secondary" type="password" id="password"
                               name="password"
                               placeholder="Password">
                        <label for="password"><i class="fa-solid fa-star-of-life"></i> รหัสผ่าน : </label>
                        <div class="wrap-eye-password">
                            <i class="text-secondary fa-solid fa-eye" onclick="open_pass(this)"></i>
                            <i class="text-secondary fa-solid fa-eye-slash d-none" onclick="close_pass(this)"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-secondary w-100 border border-secondary border-2 p-2"
                                type="submit">เข้าสู่ระบบ
                        </button>
                    </div>
                    <hr>
                    <small>&copy; 2023 | Version. 1</small>
                </form>
            </div>
        </div>
    </div>
</div>

<!--bootstrap-->
<script src="<?= get_path_env_billie_template() ?>bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
<!--\.bootstrap-->
<!--fontawesome-->
<script src="<?= get_path_env_billie_template() ?>fontawesome-6.4.2/js/all.min.js"></script>
<!--\.fontawesome-->
<!--Login css-->
<script src="<?= get_path_env_billie_template() ?>javascript/login.js"></script>
<script>
    const set_image_login_page = new change_cover_image("<?=get_path_env_billie_template()?>image-login/cover.jpg")
</script>
<!--\.Login css-->
</body>
</html>