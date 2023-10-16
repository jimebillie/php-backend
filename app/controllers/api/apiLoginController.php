<?php
namespace App\controllers\api;
class apiLoginController
{
    public function __construct($exp_root_url)
    {
        /**
         * Validation
         */
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $_SESSION['validation'] = ['msg' => 'โปรดกรอกข้อมูลให้ครบถ้วน'];

            header("Location:".$exp_root_url."login");
            exit;
        } else {
            /**
             * Check Correct user & password
             */
            if ($_POST['username'] === "admin" && $_POST['password'] === "1234") {
                $_SESSION['auth_success']=[
                    'username' => 'admin',
                    'role' => 'Super Admin'
                ];
                header("Location:".$exp_root_url."home");
                exit;
            }else{
                $_SESSION['validation'] = ['msg' => 'Username หรือ Password ไม่ถูกต้อง'];

                header("location:" . $_SERVER["HTTP_REFERER"]);
                exit;
            }
        }
    }
}