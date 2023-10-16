<?php
namespace App\helper;

class checkLogin{
    public function __construct()
    {
        if(!isset($_SESSION['auth_success'])){
            header("Location:login");
        }
    }
}
