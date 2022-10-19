<?php

namespace App\Controller;

class EmpresaController extends Controller {

    public static function index() {
        parent::isAuthenticated();
        parent::render("Empresa/ListaEmpresas");
    }
}