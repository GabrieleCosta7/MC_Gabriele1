<?php
        require 'conexao.php';
        $id = $_REQUEST["id"];
        $dados = []; 
        $sql = $pdo->prepare("SELECT * FROM produto WHERE id =:id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() >0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header("location:editando.php");
        }
        exit;
    ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    <h1>Editar Dados: </h1>