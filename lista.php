<?php
 $page = "LISTA";
 include_once("inc/utils.php");
 // var_dump( getConnection() );
 $conn = getConnection();
 if($conn){
   $result = getProduts($conn);
   }
?>

<!doctype html>
<html lang="en">
<head>
  <?php include_once("inc/header.php") ?>
  <title>Projet)o CRUD - Listagem</title>
</head>

<body>
  <?php include_once("inc/navbar.php") ?>
  <div class="container">
    <br>
<?php include_once("inc/alerts.php"); ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preco</th>
          <th scope="col">Acoes</th>
        </tr>
      </thead>
      <tbody>
        <?php  while($prod = getProdut($result)): ?>
        <tr>
          <th scope="row"> <?=$prod["id"]?> </th>
          <td> <?=$prod["nome"] ?> </td>
          <td> <?=$prod["quant"] ?> </td>
          <td> <?=$prod["preco"] ?> </td>
          <td>
            <!-- <a  href="editar.php">Editar</a> -->
            <form class="" action="editar.php" method="GET">
                <input type="hidden" name="id" value="<?= $prod["id"]?>">
                <input type="hidden" name="message" value="">
                <button type="submit" class="btn btn-primary" EDITAR name="button"></button>
            </form>
            <!-- <a  href="excluir.php?id=<?= $prod["id"]?>"> Excluir </a> -->
            <form class="" action="excluir.php" method="POST">
                <input type="hidden" name="id" value="<?= $prod["id"]?>">
                <button type="submit" class="btn btn-danger" EXCLUIR name="button"></button>
            </form>

          </td>
        </tr>
      <?php endwhile;  ?>
      </tbody>
    </table>

  </div>

</body>

</html>
