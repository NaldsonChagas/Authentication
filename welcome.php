<?php
  require_once "app/utils/autoload_class.php";

  use app\controllers\UserController;

  $controller = new UserController();
  $controller->isUserLogged();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Bem vindo</title>
</head>

<body>
  <div class="text-center">
    <h1>Bem vindo</h1>
    <h2 class="text-muted" id="userEl"></h2>
    <a href="logout.php">Sair</a>
  </div>

  <script src="dist/main.js"></script>
</body>

</html>