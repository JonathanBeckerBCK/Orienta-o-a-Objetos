<?php

session_start();

$idCarro = isset($_SESSION['CARRO_ID']) ? $_SESSION['CARRO_ID']   : '';
$nome = isset($_SESSION['CARRO_NOME'])  ? $_SESSION['CARRO_NOME'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da sessão</title>
</head>
<body>
    
    <h2>Salvar marcas de carro na sessão</h2>

    <span style="font-weight: bold">ID:</span>
    <span><?= $idCarro ?></span> 

    <br>
    <br>

    <span style="font-weight: bold">Nome:</span>  
    <span><?= $nome ?></span>   
    

    <br><br>

    <a href="adicionar.php">Adicionar</a>
    <br>
    <a href="alterar.php">Alterar</a>
    <br>
    <a href="excluir.php">Excluir</a>

</body>
</html>


<!-- 
Criar um valor na sessão
Alterar o valor da sessao 
remover a sessao 
exibir o valor armazenado na sessao -->
