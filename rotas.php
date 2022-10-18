<?php
use App\Controller\{
    LoginController,
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {
    case "/login":
        LoginController::index();
    break;

    case "/login/auth":
        LoginController::auth();
    break;

    default:
        header("Location: /login");
    break;
}
