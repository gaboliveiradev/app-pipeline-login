<?php

namespace App\Controller;

class CurriculoController extends Controller {

    public static function index() {
        parent::isAuthenticated();
        parent::render("Curriculo/ListaCurriculos");
    }
}