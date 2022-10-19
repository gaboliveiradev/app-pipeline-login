<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model {

    public $id, $nome, $email, $senha, $remember = "off";
    public $admin_cookie;

    public function auth() {
        $dao = new LoginDAO();
        $data_user = $dao->selectEmailAndSenhaByAdminForLogin($this);

        if($data_user) {
            $_SESSION["admin_logged"] = $data_user;
            if($this->remember == "on") self::remember($this->email);
            header("Location: /dashboard");
        } else {
            header("Location: /login");
        }
    }

    private static function remember($value) {
        $validate = strtotime("+1 month");
        setcookie("admin_login", $value, $validate, "/", "", false, true);
    }
}