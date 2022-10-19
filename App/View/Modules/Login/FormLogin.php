<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/Includes/Bootstrap/css_config.php" ?>
    <title>Jahu Banco de Empregos | Painel Admin</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .frm_login {
            width: 60vw;
        }

        .btn {
            width: 15vw;
        }
    </style>
</head>
<body class="text-center flex">
    <main class="container flex frm_login">
        <div class="form-signin flex">
            <form action="/login/auth" method="POST">
                <h1 class="h3 mb-3 fw-normal">Jahu Banco de Empregos - Painel Admin</h1>

                <div class="form-floating" class="col-md-6 offset-md-3">
                    <input name="email" value="<?= $email ?>" type="text" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="senha" type="password" class="form-control" id="Senha" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input name="remember" type="checkbox"> Lembre de mim
                    </label>
                    <br>
                    <label>
                        <a href="">Esqueci minha senha</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
            </form>
        </div>
    </main>
    
    <?php include "./View/Includes/Bootstrap/js_config.php" ?>
</body>
</html>