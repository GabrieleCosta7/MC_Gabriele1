<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php
        require 'conexao.php';
        $id = $_REQUEST["id"];
        $dados = []; 
        $sql = $pdo->prepare("SELECT*FROM produto WHERE id = :id");
        $sql->bindvalue(":id", $id);
        $sql->execute();

        if($sql->rowCount()>0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header("location:bd.php");
            exit;
        }
    ?>

    <form action="editando.php" method="POST">

        <input type="hidden" name="id" id="id" value="<?=$dados('id'); ?>">
        <label for="Produto">
            Produto<input type="text" name="produto" value="<?=$dados['produto']; ?>">
        </label>
        <label for="Quantidade">
            Quantidade<input type="number" name="qtd" value="<?=$dados['qtd']; ?>">
        </label>
        <label for="Preco">
            Preço<input type="number" name="preco" value="<?=$dados['preco']; ?>">
        </label>
        
        

        <button type="submit">Salvar</button>
    </form>

</body>
</html>