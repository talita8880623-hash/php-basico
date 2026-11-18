<?php
$produtos = [
    ["nome" => "Teclado mecânico", "preco" => 249.90, "estoque" => 12],
    ["nome" => "Mouse sem fio", "preco" => 79.50, "estoque" => 30],
    ["nome" => "Fone de ouvido", "preco" => 99.90, "estoque" => 0],
    ["nome" => "Monitor", "preco" => 899.90, "estoque" => 5],
];

$total = 0;

foreach ($produtos as $item) {
    $total += $item["preco"] * $item["estoque"];
}

$quantidade = count($produtos);

function formatarPreco(float $valor): string
{
    return "R$ " . number_format($valor, 2, ",", ".");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Lista de produtos</title>
</head>

<body>
    <h1>Lista de produtos</h1>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Situação</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item["nome"]) ?></td>
                    <td><?= formatarPreco($item["preco"]) ?></td>
                    <td><?= $item["estoque"] ?></td>
                    <td><?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><?= $quantidade ?> produtos cadastrados.</p>

    <p>Valor total em estoque: <?= formatarPreco($total) ?></p>
</body>

</html>