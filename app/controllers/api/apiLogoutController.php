<?php
namespace App\controllers\api;
class apiLogoutController{
    public function __construct($exp_root_url){
        if(isset($_SESSION['auth_success'])){
            session_destroy();
            header('Location:'.$exp_root_url."login");
            exit;
        }else{
            header('Location:'.$exp_root_url."login");
            exit;
        }
    }

}
