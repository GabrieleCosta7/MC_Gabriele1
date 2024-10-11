<?php
require 'conexao.php';

$sql = $pdo->query("SELECT * FROM produto");
$ler = [];

if($sql->rowCount()>0){
    $ler = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <h1>Tabela de Produtos</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
            <th>EDITAR</th>
            <th>EXCLUIR</th>


        </tr>
        <?php foreach($ler as $dados): ?>

            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['produto']; ?></td>
                <td><?php echo $dados['qtd']; ?></td>
                <td><?php echo $dados['preco']; ?></td>
                <td><a href="editando.php?id=<?= $dados['id']; ?>">[Editar]</a></td>
                <td><a href="excluir.php?id=<?= $dados['id']; ?>">[Excluir]</a></td>
            </tr>

        <?php endforeach; ?>    
    </table>
</body>
</html>
