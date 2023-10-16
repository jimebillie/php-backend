<?php
namespace Routes;

use App\controllers\api\apiLogoutController;
use App\controllers\api\apiLoginController;

class api
{
    public function __construct($url, $exp_root_url)
    {
        $exp_root_url_api = $exp_root_url . "api/";
        switch ($url) {
            case $exp_root_url_api:
                echo 'Hello This is API page.';
                break;
            case $exp_root_url_api . "login":
                new apiLoginController($exp_root_url);
                break;
            case $exp_root_url_api . "logout":
                new apiLogoutController($exp_root_url);
                break;
            default:
                echo '404 - API page not found';
                break;
        }
    }
}
