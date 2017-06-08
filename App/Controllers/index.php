<?php

namespace App\Controllers;


use System\Controller;

use App\Models\Login;
use App\Controllers\login as loginpage;

class index extends Controller
{
    /**
     *
     * Constructor.
     *
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->login = new Login();
    }

    /**
     *
     * Default method.
     *
     */
    public function index()
    {
        if ($this->login->loginStatus()) {
            (new home())->index();
        } else {
            (new loginpage())->index();
        }
    }
}