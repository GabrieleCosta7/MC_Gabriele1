<?php 

require 'conexao.php';

$produto = $_POST['produto'];
$qtd = $_POST ['qtd'];
$preco = $_POST['preco'];

$sql = $pdo -> prepare ("INSERT INTO produto (produto, qtd, preco) VALUES (:produto, :qtd, :preco )");
$sql -> bindValue (':produto', $produto);
$sql -> bindValue (':qtd', $qtd);
$sql -> bindValue(':preco', $preco);

$sql -> execute();

header("Location:conexao.php");
?>