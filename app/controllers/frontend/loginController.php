<?php
namespace App\controllers\frontend;
class loginController
{
    public function __construct($exp_root_url)
    {
        /**
         * Check session "auth_success" if present is not accepted on the login page.
         */
        if (isset($_SESSION['auth_success'])) {
            header("Location:".$exp_root_url."home");
        } else {
            $this->view();
        }
    }

    public function view()
    {
        return view("login");
    }
}
