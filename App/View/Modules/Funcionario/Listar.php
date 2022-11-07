<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/Includes/Bootstrap/css_config.php" ?>
    <title>Jahu Banco de Empregos | Ver Funcionários</title>
    <style>
        main {
            width: 100vw;
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
    <header>
        <?php include "./View/Includes/header.php" ?>
    </header>

    <main class="container flex">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">SENHA</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($arr_funcionario as $item): ?>
                <tr>
                  <th scope="row"><?= $item->id ?></th>
                  <td><?= $item->nome ?></td>
                  <td><?= $item->email ?></td>
                  <td><?= $item->senha ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    
    <?php include "./View/Includes/Bootstrap/js_config.php" ?>
</body>
</html>