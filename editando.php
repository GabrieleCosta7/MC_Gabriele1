<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];


    $sql = $pdo->prepare("UPDATE produto SET produto = :produto, qtd = :qtd, preco = :preco WHERE id = :id");
    $sql->bindValue(":produto", $produto);
    $sql->bindValue(":qtd", $qtd);
    $sql->bindValue(":preco", $preco);
    $sql->bindValue(":id", $id);
    $sql->execute();


    header("location: bd.php");
    exit;
}

$id = $_REQUEST["id"];
$dados = []; 
$sql = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if ($sql->rowCount() > 0) {
    $dados = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    header("location: bd.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

    <h1>Editar Produto</h1>
    <form action="editando.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?=$dados['id']; ?>">
        <label for="Produto">
            Produto: <input type="text" name="produto" value="<?=$dados['produto']; ?>">
        </label><br>
        <label for="Quantidade">
            Quantidade: <input type="number" name="qtd" value="<?=$dados['qtd']; ?>">
        </label><br>
        <label for="Preco">
            Preço: <input type="number" step="0.01" name="preco" value="<?=$dados['preco']; ?>">
        </label><br>
        
        <button type="submit">Salvar</button>
    </form>

</body>
</html>
