<?php

namespace App\Model;

use App\DAO\FuncionarioDAO;

class FuncionarioModel {
    public string $id, $nome, $email, $senha;
    
    public function save() {
        $dao = new FuncionarioDAO();
        $dao->insert($this);
    }

    public function getAllRowsFuncionario() {
        $dao = new FuncionarioDAO();
        return $dao->selectAllFuncionarios();
    } 
}