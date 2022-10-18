<?php

namespace App\Controller;

class LoginController extends Controller {

    public static function index() {
        parent::render("Login/FormLogin");
    }

    public static function auth() {
        
    }
}