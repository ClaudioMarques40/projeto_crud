<?php
 include_once("inc/utils.php");
 $page = "EDITAR";

 $conn  = getConnection();

 if ($conn && $_POST) {
     $updated =  updProduct($conn, $_POST['id'],     $_POST['nome'],
                                   $_POST['quant'], $_POST['preco']);
     if($updated) {
        header("Location: lista.php?action=edit&message=success");
     } else {
         header("Location: lista.php?action=edit&message=failed");
         }
  }

  if ($conn && $_GET) {
    // $r = getProdutById($conn, $_POST['id']);
    // $dados = getProdut($r);
    $prod = getProdut(
           getProdutById($conn, $_GET['id']) );
    if (!$prod) {
       header("Location: lista.php?action=edit&message=failed");
     }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <?php include_once("inc/header.php") ?>
    <title>Projeto CRUD - EDITAR</title>
  </head>

  <body>
    <?php include_once("inc/navbar.php") ?>

    <div class="container">
      <br>
      <?php include_once("inc/alerts.php"); ?>
        <form action="editar.php" method="POST">
          <input type="text" name="id" value="<?=$prod['id']?>">
          <div class="form-row">
            <!-- produto -->
            <div class="form-group col-md-12">
              <label for="produto">Produto</label>
              <input type="text" name="nome" class="form-control" id="produto"
               placeholder="Produto" value="<?=$prod['nome']?>">
            </div>
          </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- quantidade -->
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quant" class="form-control" id="quantidade"
                placeholder="Quantidade" value="<?=$prod['quant']?>">
              </div>

              <div class="form-group col-md-6">
                <!-- produto -->
                <label for="preco">Preco R$</label>
                <input type="text" name="preco" class="form-control" id="preco"
                 placeholder="0.00" value="<?=$prod['preco']?>">
              </div>
          </div>

          <button type="submit" id="atualizar" class="btn btn-primary">ATUALIZAR</button>
        </form>
      </div>

  </body>

</html>
