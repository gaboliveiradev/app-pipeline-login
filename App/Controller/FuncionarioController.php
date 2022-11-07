<?php

namespace App\Controller;

class FuncionarioController extends Controller {

    public static function index() {

    }

    public static function form() {
        parent::render("Funcionario/Form");
    }
}