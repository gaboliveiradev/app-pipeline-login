<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model {

    public $id, $nome, $email, $senha, $remember = false;
    public $user_cookie;

    public function auth() {
        $dao = new LoginDAO();
        $data_user = $dao->selectEmailAndSenhaByAdminForLogin($this);

        if($data_user) {
            $_SESSION["admin_logged"] = $data_user;
            header("Location: /dashboard");
        } else {
            header("Location: /login");
        }
    }
}