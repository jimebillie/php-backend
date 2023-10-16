<?php
namespace App\controllers\frontend;
class page404Controller
{
    public function __construct()
    {
        $this->view();
    }

    public function view()
    {
        return view("page404");
    }
}