<?php
require_once "conexao.php";
require_once "Produto.php";

class ProdutoDAO {
    public function salvar(Produto $produto) {
        $sql = "INSERT INTO produtos (codigo, produto, data_validade, preco) 
                VALUES (:codigo, :produto, :validade, :preco)";
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(":codigo", $produto->getCodigo());
        $stmt->bindValue(":produto", $produto->getNome());
        $stmt->bindValue(":validade", $produto->getValidade());
        $stmt->bindValue(":preco", $produto->getPreco());
        $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM produtos";
        $stmt = Conexao::getConexao()->query($sql);
        $lista = [];

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $lista[] = new Produto(
                $linha["codigo"],
                $linha["produto"],
                $linha["data_validade"],
                $linha["preco"]
            );
        }
        return $lista;
    }
}
?>