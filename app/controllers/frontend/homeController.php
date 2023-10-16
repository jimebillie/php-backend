<?php
namespace App\controllers\frontend;

class homeController{
    public function __construct()
    {
        $this->view();
    }
    public function view(){
        return view("home");
    }
}