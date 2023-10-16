<?php
session_start();
require_once __DIR__ . "/config/func_autoload.php";
require_once('config/func_dd.php');
require_once('config/func_get_path.php');
require_once('config/func_view.php');



/**
 * ----------------------------------------------
 * # Routes Center
 * ----------------------------------------------
 * @var $url : Request URL
 * @var $exp_root_url : Explode "backend" from
 * $url for create root url
 * ----------------------------------------------
 */
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$exp_root_url = explode("backend", $url)[0] . "backend/";
/**
 * ----------------------------------------------
 * # Create Routes
 * ----------------------------------------------
 */
use Routes\api;
use Routes\web;

if (count(explode("backend/api", $url)) > 1) {
    new api($url, $exp_root_url);
} else {
    new web($url, $exp_root_url);
}

