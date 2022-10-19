<?php
namespace App\Controller;

abstract class Controller {
    protected static function render($view, $model = null) {
        $arquivo = "./View/modules/$view.php";

        if(file_exists($arquivo))
            include  $arquivo;
        else
            echo "arquivo não encontrado. Caminho: " . $arquivo;
    }

    protected static function isAuthenticated() {
        if(!isset($_SESSION['admin_logged']))
            header("Location: /login");
    }
}
