<?php
class Produto {
    private $codigo;
    private $nome;
    private $validade;
    private $preco;

    public function __construct($codigo, $nome, $validade, $preco) {
        $this->codigo   = $codigo;
        $this->nome     = $nome;
        $this->validade = $validade;
        $this->preco    = $preco;
    }

    public function getCodigo()   { return $this->codigo; }
    public function getNome()     { return $this->nome; }
    public function getValidade() { return $this->validade; }
    public function getPreco()    { return $this->preco; }
}
?>