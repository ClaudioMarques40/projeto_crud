<?php if($_GET && $_GET['message'] == 'failed'): ?>
  <div class="alert alert-danger" role="alert">
    <?php 
      if($_GET['action'] == 'add') {
        print "Ocorreu um erro ao cadastrar o produto!";
      }
      
      if($_GET['action'] == 'remove') {
        print "Ocorreu um erro ao excluir o produto!";
      }

      if($_GET['action'] == 'edit') {
        print "Ocorreu um erro ao alterar o produto!";
      }
    ?>
  </div>
  <br>
<?php endif; ?>

<?php if($_GET && $_GET['message'] == 'success'): ?>
  <div class="alert alert-success" role="alert">
    <?php
      if($_GET['action'] == 'add') {
        print "Produto adicionado com sucesso!";
      }

      if($_GET['action'] == 'remove') {
        print "Produto excluído com sucesso!";
      }

      if($_GET['action'] == 'edit') {
        print "Produto alterado com sucesso!";
      }
    ?>
  </div>
  <br>
<?php endif; ?>
