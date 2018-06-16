<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once("inc/header.php"); ?>
  <title>Projeto CRUD - Login</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col align-self-center">
        <h1>Login</h1>
        <br>

        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="john@doe.com">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="*****">
          </div>
          <button type="submit" class="btn btn-primary">Acessar</button>
        </form>

      </div>
      <div class="col"></div>
    </div>
  </div>

</body>
</html>
