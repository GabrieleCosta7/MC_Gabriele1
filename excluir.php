<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Excluindo Usuário</h1>
    <?php 
        require 'conexao.php';
        $id = $_REQUEST["id"];
        $dados = [];

        $sql = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
       $sql->bindValue(":id",$id);
       $sql->execute();

       if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
            header("Location:bd.php");
            exit;
       }
       

    ?>
    <h2>Tem certeza que quer excluir o usuario abaixo?</h2>
    
    <form action="excluindo.php" method="POST" >
        <input  type="hidden" name="id" id="id" value="<?=$dados['id']; ?>">
        <label for="produto">
            Produto <input type="text" name="produto" value="<?=$dados['produto']; ?>">
        </label>
        <label for="qtd">
            Quantidade <input type="number" name="qtd" value="<?=$dados['qtd']; ?>">
        </label>
        <label for="preco">
            Preço <input type="number" name="preco" value="<?=$dados['preco']; ?>">
        </label>


        <button type="submit">Excluir</button>


    </form>

    <a href="bd.php">Voltar</a>

</body>
</html>