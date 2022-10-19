<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/Includes/Bootstrap/css_config.php" ?>
    <title>Dashboard - Logado como <?= $_SESSION['admin_logged']->nome ?></title>
</head>
<body>
    <header>
        <?php include "./View/Includes/header.php" ?>
    </header>

    <?php include "./View/Includes/Bootstrap/js_config.php" ?>
</body>
</html>