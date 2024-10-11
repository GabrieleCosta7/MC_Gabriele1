<?php 
    require 'conexao.php'; 
    $produto = $_POST['produto'];
    $id = $_POST['id'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];


    $sql = $pdo->prepare("DELETE from produto WHERE id = :id");
    $sql->bindValue(':id',$id);
   
    $sql->execute();
    
header("Location:bd.php");

?>