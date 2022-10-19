<?php

namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller {

    public static function index() {
        $email = (isset($_COOKIE["admin_login"]) ? $_COOKIE["admin_login"] : "");
        include "./View/Modules/Login/FormLogin.php";
    }

    public static function auth() {
        $model = new LoginModel();
        $model->email = $_POST["email"];
        $model->senha = $_POST["senha"];
        $model->remember = isset($_POST["remember"]);
        $model->auth();
    }

    public static function logout() {
        if(isset($_GET['exit'])) {
            unset($_SESSION['admin_logged']);
            $validade = time() - 3600;
            setcookie("admin_login", "", $validade, "/", "", false, true);
            header("Location: /login");
        }
    }
}