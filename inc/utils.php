<?php

function navActive($pg, $key)  {
     if($pg == $key)      {
       return "active";
      }
   }

function getConnection(){
    $host = "localhost";  //'127.0.0.1';
    $user = "root";   // $user
    $pass = "";       // $pass
    $database = "fp_73";        // &db
    return  mysqli_connect($host, $user, $pass, $database);
}

function getProduts ($conn) {
  $query = "SELECT * FROM produtos";
  return mysqli_query($conn, $query);
  // var_dump( mysqli_fetch_assoc($result) ); // posicao nominal
  // var_dump( mysqli_fetch_array($result)[1 ou 'id' ]); posicao relativa
}

function getProdut ($result) {
  return mysqli_fetch_assoc($result);
}

function getProdutById($conn, $id ) {
  $query = "SELECT * FROM produtos WHERE id={$id}";
  return mysqli_query($conn, $query);
}

function addProduct($conn, $nome, $preco, $quant) {
  $query = "INSERT INTO produtos (nome, preco, quant)
      values ( '{$nome}', '{$preco}', '{$quant}' )";
  return mysqli_query($conn, $query);
}

function updProduct($conn, $id, $nome, $quant, $preco) {
  if ($id && is_numeric($id)) {
      $query = "UPDATE produtos
                SET
                nome  = '{$nome}'  ,
                quant = '{$quant}' ,
                preco = '{$preco}'
              WHERE  id = '{$id}'
                           ";
    return mysqli_query($conn, $query);
  }
  return false;
}

function removeProduct($conn, $id) {
 if($id && is_numeric($id) ) {
   $query = "DELETE FROM produtos WHERE id={$id}";
   return mysqli_query($conn, $query);
 }
  return false;
}

?>
