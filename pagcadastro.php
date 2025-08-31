<?php
require_once "ProdutoDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo   = $_POST["codigo"];
    $produto  = $_POST["produto"];
    $validade = $_POST["validade"];
    $preco    = $_POST["preco"];

    $novoProduto = new Produto($codigo, $produto, $validade, $preco);
    $dao = new ProdutoDAO();
    $dao->salvar($novoProduto);

    echo "<div class='alert alert-success text-center'>✅ Produto cadastrado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center text-primary">📝 Cadastrar Produtos</h1>

    <form method="POST" action="" class="p-4 shadow bg-white rounded">
        <div class="mb-3">
            <label class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Produto</label>
            <input type="text" name="produto" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Validade</label>
            <input type="date" name="validade" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>
    </form>

    <div class="text-center mt-3">
        <a href="menuprincipal.php" class="btn btn-outline-primary">⬅ Voltar ao Menu</a>
    </div>
</div>

</body>
</html>