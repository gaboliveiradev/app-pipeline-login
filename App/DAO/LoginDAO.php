<?php

namespace App\DAO;

use App\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function selectEmailAndSenhaByAdminForLogin(LoginModel $model) {
        $sql = "SELECT * FROM admin WHERE email = ? AND senha = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, sha1($model->senha));
        $stmt->execute();

        return $stmt->fetchObject();
    }
}