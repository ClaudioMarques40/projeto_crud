<?php if($_GET && $_GET['message'] == 'failed'):  ?>
        <div class="alert alert-danger" role="alert">
            <?php
              if($_GET['action'] == 'add') {
                  print "Ocorreu um erro ao CADASTRAR o produto!";
              }
              if($_GET['action'] == 'remove') {
                  print "Ocorreu um erro ao EXCLUIR o produto!";
              }
              if($_GET['action'] == 'edit') {
                  print "Ocorreu um erro ao EDITAR o produto!";
              }
              ?>
          </div>
        <br>
<?php   endif;     ?>

<?php if($_GET && $_GET['message'] == 'success'): ?>
          <div class="alert alert-success" role="alert">
            <?php
              if($_GET['action'] == 'add') {
                  print "Produto ADICIONADO com sucesso!";
              }
              if($_GET['action'] == 'remove') {
                  print "Produto EXCLUIDO com sucesso!";
              }
              if($_GET['action'] == 'edit') {
                  print "Produto EDITADO com sucesso!";
              }
              ?>
          </div>
          <br>
<?php endif; ?>
