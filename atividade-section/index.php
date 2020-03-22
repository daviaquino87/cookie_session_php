<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <title>Session</title>
</head>

<body>

  <div class="container">

    <h1>Fazer Login</h1>

    <form method="post" action="login.php">

      <div class="form-group">
        <label for="email">E-mail</label>
        <input id="email" class="form-control" type="email" name="email" placeholder="E-mail" required>
      </div>

      <div class="form-group">
        <label for="pass">Senha</label>
        <input id="pass" class="form-control" type="password" name="pass" placeholder="Senha" required>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-success" value="Logar">
      </div>

    </form>

  </div>

</body>

</html>