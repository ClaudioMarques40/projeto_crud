<?php
 // var_dump($_GET);
 // var_dump($_POST);
 include_once("inc/utils.php");
 $conn = getConnection();

 if($conn && $_POST) {
    $removed = removeProduct($conn, $_POST['id'] );
    if($removed) {
       header("Location: lista.php?action=remove&message=success");
    } else {
        header("Location: lista.php?action=remove&message=failed");
        }
   }
?>
<!-- <a  href="excluir.php?id=<?= $prod["id"]?>"> Excluir </a> -->
