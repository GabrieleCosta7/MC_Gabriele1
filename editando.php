
<?php
        require 'conexao.php';

        $nome = $_POST['produto'];
        $email = $_POST[' '];
        $id = $_POST['id'];

        $sql = $pdo->prepare("UPDATE usuario SET nome=:nome, email= :email WHERE id=$id");

        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":email",$email);
        $sql->execute();
        
    header("Location;table.php");
        
?>