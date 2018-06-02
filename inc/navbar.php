<?php
include_once("utils.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Projeto CRUD -
      <?=$page?>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item <?=navActive($page, "LISTA")?> ">
          <a class="nav-link" href="lista.php">Listagem </a>
        </li>

        <li class="nav-item" <?=navActive($page, "CADASTRO");?>" >
          <a class="nav-link" href="cadastro.php">Cadastro</a>
       </li>

      </ul>
    </div>
  </nav>
