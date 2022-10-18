<?php

namespace App\Controller;

class DashboardController extends Controller {

    public static function index() {
        parent::isAuthenticated();
        parent::render("Dashboard/MenuInicial");
    }
}