<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Entre no sistema</title>
</head>

<body>

  <div class="container">

    <div class="center col-md-6">
      <h2 class="title">Entrar</h2>

      <form>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" required>
        </div>

        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" name="password" id="password" placeholder="Senha" class="form-control" required>
        </div>
        <div class="form-group">
          <a href="#" class="text-right">Ainda não tem conta? Cadastre-se</a>
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Entrar</button>
        </div>
      </form>
    </div>
  </div>
  <script src="dist/main.js"></script>
</body>

</html>