<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler text-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/dashboard">
            <h5>Banco de Empregos</h5>
            <!--<img src="./../../View/img/logo.png" alt="mdo" width="52" height="52" class="d-inline-block align-text-top">-->
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item m-3">
                    <a class="nav-link active text-dark" aria-current="page" href="/empresa">Empresas</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link text-dark" href="/curriculo">Curriculos</a>
                </li>
                <li class="nav-item m-3">
                    <a class="nav-link text-dark" href="/vaga-de-emprego">Vagas Empreg.</a>
                </li>
                <li class="nav-item m-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Funcionário
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/funcionario/form">Cadastrar</a></li>
                      <li><a class="dropdown-item" href="/funcionario">Listar</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <!-- Dropdown do User -->
        <div class="navbar-brand dropdown text-end p-2 ">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION['admin_logged']->nome ?>
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="/">Minha Conta</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/logout?exit=true">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>