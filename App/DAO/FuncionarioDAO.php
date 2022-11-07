<?php

namespace App\DAO;

use App\Model\FuncionarioModel;
use \PDO;

class FuncionarioDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function insert(FuncionarioModel $model) {
        $sql = "INSERT INTO Admin (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, sha1($model->senha));
        $stmt->execute();
    }

    public function selectAllFuncionarios() {
        $sql = "SELECT * FROM admin";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}