<?php

namespace App\Controller;

class VagaEmpregoController extends Controller {

    public static function index() {
        parent::isAuthenticated();
        parent::render("VagaEmprego/ListaVagaEmprego");
    }
}