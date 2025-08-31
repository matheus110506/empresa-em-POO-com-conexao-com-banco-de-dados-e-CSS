<?php
require_once "ProdutoDAO.php";
$dao = new ProdutoDAO();
$lista = $dao->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center text-primary">📋 Lista de Produtos</h1>

    <table class="table table-striped table-bordered shadow mt-4">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Produto</th>
                <th>Data de Validade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $p): ?>
                <tr>
                    <td><?= $p->getCodigo(); ?></td>
                    <td><?= $p->getNome(); ?></td>
                    <td><?= $p->getValidade(); ?></td>
                    <td>R$ <?= number_format($p->getPreco(), 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center">
        <a href="menuprincipal.php" class="btn btn-outline-primary">⬅ Voltar ao Menu</a>
    </div>
</div>

</body>
</html>