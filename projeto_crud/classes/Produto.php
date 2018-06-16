<?php

class Produto {
  // propriedades
  private $id;
  private $nome;
  private $preco;
  private $quant;
  public $categoria;
  public $minEstoque = 50;

  // construtor
  function __construct($id, $nome, $preco, $quant, $categoria) {
    $this->id = $id;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->quant = $quant;
    $this->categoria = $categoria;
  }

  // métodos
  private function formataMoeda($valor) {
    setlocale(LC_MONETARY, 'pt_BR');
    $formatted = explode(' ', money_format('%.2n', $valor));
    return "${formatted[1]} ${formatted[0]}";
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setPreco($preco) {
    $this->preco = $preco;
  }

  public function getPreco() {
    return $this->preco;
  }

  public function setQuant($quant) {
    $this->quant = $quant;
  }

  public function getQuant() {
    return $this->quant;
  }

  public function preco() {
    return $this->formataMoeda( $this->preco );
  }

  public function total() {
    return $this->formataMoeda( $this->preco * $this->quant );
  }

  public function situacaoEstoque() {
    return ($this->quant < $this->minEstoque) ? "BAIXO" : "NORMAL";
  }
}
