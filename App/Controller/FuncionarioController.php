<?php

namespace App\Controller;

use App\Model\FuncionarioModel;

class FuncionarioController extends Controller {

    public static function index() {
        $model = new FuncionarioModel();
        $arr_funcionario = $model->getAllRowsFuncionario();

        
        include "./View/Modules/Funcionario/Listar.php";
    }

    public static function save() {
        $model = new FuncionarioModel();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->save();

        header("Location: /funcionario");
    }

    public static function form() {
        parent::render("Funcionario/Form");
    }
}