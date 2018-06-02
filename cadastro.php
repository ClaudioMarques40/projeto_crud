<?php
 include_once("inc/utils.php");
 $page = "CADASTRO";
 $conn = getConnection();
 if($conn && $_POST) {
    if(addProduct( $conn, $_POST['nome'], $_POST['preco'], $_POST['quant'] )  ) {
       header("Location: lista.php?action=add&message=success");
    } else {
      header("Location: cadastro.php?action=add&message=failed");
    }
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include_once("inc/header.php") ?>
    <title>Projeto CRUD - Cadastro</title>
  </head>

  <body>
    <?php include_once("inc/navbar.php") ?>
    <div class="container">
      <br>
      <?php include_once("inc/alerts.php"); ?>
        <form action="cadastro.php" method="POST">
          <div class="form-row">
            <!-- produto -->
            <div class="form-group col-md-12">
              <label for="produto">Produto</label>
              <input type="text" name="nome" class="form-control" id="produto"
               placeholder="Produto">
            </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- quantidade -->
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quant" class="form-control" id="quantidade"
                placeholder="Quantidade">
              </div>

              <div class="form-group col-md-6">
                <!-- produto -->
                <label for="preco">Preco R$</label>
                <input type="text" name="preco" class="form-control" id="preco"
                 placeholder="0.00">
              </div>
          </div>

          <button type="submit" id="cadastrar" class="btn btn-primary">CADASTRAR</button>
        </form>
      </div>
  </body>

</html>
