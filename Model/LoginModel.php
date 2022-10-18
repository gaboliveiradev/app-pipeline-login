<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model {

    public $id, $nome, $email, $senha, $remember = false;
    public $admin_cookie;

    public function auth() {
        $dao = new LoginDAO();
        $data_user = $dao->selectEmailAndSenhaByAdminForLogin($this);

        if($data_user) {
            $_SESSION["admin_logged"] = $data_user;
            if($this->remember) self::remember($this->nome);
            header("Location: /dashboard");
        } else {
            header("Location: /login");
        }
    }

    private static function remember($nome) {
        $validate = strtotime("+1 month");
        setcookie("admin_login", $nome, $validate, "/", "", false, true);
    }
}