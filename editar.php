<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <?php
        require 'conexao.php';
        $id = $_REQUEST["id_prod"];
        $dados = []; 
        $sql = $pdo->prepare("SELECT*FROM produto WHERE id_prod = :id_prod");
        $sql->bindvalue(":id_prod", $id);
        $sql->execute();

        if($sql->rowCount()>0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header("Location.table.php");
            exit;
        }
    ?>

    <form action="editando.php" method="POST">

        <input type="hidden" name="id_prod" id="id_prod" value="<?=$dados('id_prod'); ?>">
        <label for="Nome">
            Nome<input type="text" name="nome" value="<?=$dados['nome']; ?>">
        </label>
        <label for="Quantidade">
        Quantidade<input type="number" name="qtd" value="<?=$dados['qtd']; ?>">
        </label>
        <label for="Preço">
        Preço<input type="number" name="preco" value="<?=$dados['preco']; ?>">
        </label>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>