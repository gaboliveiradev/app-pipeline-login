<?php

namespace App\DAO;
use \PDO;

class LoginDAO extends DAO {

    public $conexao;
    public function __construct()
    {
        parent::__construct();  
    } 

    public function selectEmailAndSenhaByAdminForLogin(string $email, string $senha) {
        $sql = "SELECT * FROM admin WHERE email = ? AND senha = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject();
    }
}