<?php
use App\Controller\{
    CurriculoController,
    DashboardController,
    EmpresaController,
    LoginController,
    VagaEmpregoController,
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // Rotas Login
    case "/login":
        LoginController::index();
    break;

    case "/logout":
        LoginController::logout();
    break;

    case "/login/auth":
        LoginController::auth();
    break;

    // Rotas Dashboard

    case "/dashboard":
        DashboardController::index();
    break;

    case "/curriculo":
        CurriculoController::index();
    break;

    case "/empresa":
        EmpresaController::index();
    break;

    case "/vaga-de-emprego":
        VagaEmpregoController::index();
    break;

    default:
        header("Location: /login");
    break;
}
