<?php
include_once("inc/utils.php");
redirIfNotLogged();
$page = "CADASTRO";

$conn = getConn();
if($conn && $_POST) {
  $produto = new Produto();
  $produto->setNome($_POST['nome']);
  $produto->setPreco($_POST['preco']);
  $produto->setQuant($_POST['quant']);
  
  $produto->categoria = new Categoria();
  $produto->categoria->id = $_POST['id_categoria'];
  
  $added = addProduct($conn, $produto);

  if( $added ) {
    header("Location: lista.php?action=add&message=success");
  } else {
    header("Location: cadastro.php?action=add&message=failed");
  }
}

if($conn) {
  $categories = getCategories($conn);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once("inc/header.php"); ?>
    <title>Projeto CRUD - Cadastro</title>
  </head>
  <body>
    <?php include_once("inc/navbar.php"); ?>
    
    <div class="container">
      <br>
      <?php include_once("inc/alerts.php"); ?>

      <form action="cadastro.php" method="POST">
        <div class="form-row">
          <!-- Produto -->
          <div class="form-group col-md-12">
            <label for="produto">Produto</label>
            <input type="text" name="nome" class="form-control" id="produto" placeholder="Produto">
          </div>
        </div>

        <div class="form-row">
          <!-- Quantidade -->
          <div class="form-group col-md-6">
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quant" class="form-control" id="quantidade" placeholder="Quantidade">
          </div>

          <!-- Preço -->
          <div class="form-group col-md-6">
            <label for="preco">Preço R$</label>
            <input type="text" name="preco" class="form-control" id="preco" placeholder="0.00">
          </div>
        </div>

        <?php while( $categ = mysqli_fetch_assoc($categories) ): ?>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="id_categoria" id="categ-<?= $categ['id'] ?>" value="<?= $categ['id'] ?>">

            <label class="form-check-label" for="categ-<?= $categ['id'] ?>">
              <?= $categ['nome'] ?>
            </label>

          </div>
        <?php endwhile; ?>


        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>

  </body>
</html>
