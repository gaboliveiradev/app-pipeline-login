<?php

namespace App\DAO;

use App\Model\FuncionarioModel;

class FuncionarioDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function insert(FuncionarioModel $model) {
        $sql = "INSERT INTO Funcionario (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->execute();
    }

    public function selectAllFuncionarios() {

    }
}