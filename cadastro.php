<?php 
    require 'conexao.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2>Cadastro de Produto</h2>

    <section>
    <form action="inserir.php" method="post">
        <label for="Produto">Nome do produto:</label><br>
        <input type="text" id="produto" name="produto" required><br><br>
        
        <label for="qtd">:Quantidade do produto</label><br>
        <input type="number" id="qtd" name="qtd" required><br><br>

        <label for="preco">:Preço do produto</label><br>
        <input type="number" id="preco" name="preco" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    </section>
    
</body>
</html>
