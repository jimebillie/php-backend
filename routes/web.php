<?php

namespace Routes;
use App\controllers\frontend\homeController;
use App\controllers\frontend\loginController;
use App\controllers\frontend\page404Controller;

class web
{
    public function __construct($url, $exp_root_url)
    {
        switch ($url) {
            case $exp_root_url . "home":
            case $exp_root_url:
                new homeController;
                break;
            case $exp_root_url . "login":
                new loginController($exp_root_url);
                break;
            default:
                new page404Controller;
                break;
        }
    }
}

