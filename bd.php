<?php
require 'conexao.php';

$sql = $pdo->query("SELECT * FROM produto");

$lista = [];
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de dados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2 align="center">ESTOQUE</h2><br>

    <table style="width:100%" border="1px">

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
        </tr>

        <?php foreach ($lista as $dados) : ?>
            <tr>
                <td><?php echo $dados['id_prod']; ?></td>
                <td><?= $dados['produto']; ?></td>
                <td><?php echo $dados['qtd']; ?></td>
                <td><?php echo $dados['preco']; ?></td>
                <td><a href="editar.php?id=<?= $dados['id']; ?>">[Editar]</a>
                <td><a href="excluir.php?id=<?= $dados['id']; ?>">[Editar]</a>

            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>