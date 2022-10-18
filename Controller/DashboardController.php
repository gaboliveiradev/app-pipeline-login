<?php

namespace App\Controller;

class DashboardController extends Controller {

    public static function index() {
        parent::render("Dashboard/MenuInicial");
    }
}