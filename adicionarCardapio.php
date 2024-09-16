<?php 
session_start();

require "php/conexao.php";

$selectAlergico = "SELECT * from Alergicos";
$resultAlergico = mysqli_query($conexao, $selectAlergico);


$selectAlimento = "SELECT * from alimento";
$resultAlimento = mysqli_query($conexao, $selectAlimento);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/cardapio/cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome do cardapio:">
        
        <select name="alergico[]" multiple>
        <?php
            while($linha = mysqli_fetch_assoc($resultAlergico)){
                ?>
                    <option value="<?=$linha['id']?>"><?=$linha["nome"]?></option>
                <?php
            }
        ?>
        </select>
        <select name="alimento[]" multiple>
        <?php
            while($linha = mysqli_fetch_assoc($resultAlimento)){
                ?>
                    <option value="<?=$linha['id']?>"><?=$linha["nome"]?></option>
                <?php
            }
        ?>
        </select>
        <button>Cadastrar</button>
    </form>
</body>
</html>