<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <h1>Excluindo Produto</h1>
    <?php 
        require 'conexao.php';
        $id = $_REQUEST["id_prod"];
        $dados = [];

       $sql = $pdo->prepare("SELECT * FROM produto WHERE id_prod = :id_prod");
       $sql->bindValue(":id_prod",$id);
       $sql->execute();

       if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
            header("Location:index.php");
            exit;
       }
       

    ?>
    <h2>Tem certeza que quer excluir o produto abaixo?</h2>
    
    <form action="excluindo.php" method="POST" >
        <input  type="hidden" name="id" id="id" value="<?=$dados['id_prod']; ?>">
        <label for="produto">
            Nome <input type="text" name="nome" value="<?=$dados['produto']; ?>">
        </label>
        <label for="Quantidade">
            Quantidade <input type="number" name="qtd" value="<?=$dados['quantidade']; ?>">
        </label>
        <label for="Preco">
            Preço <input type="number" name="preco" value="<?=$dados['preco']; ?>">
        </label>

        <button type="submit">Excluir</button>


    </form>

    <a href="bd.php">Voltar</a>

</body>
</html>












