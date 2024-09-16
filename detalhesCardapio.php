<?php 

session_start();

require "php/conexao.php";


$id = $_GET["id"];

$select = "SELECT * FROM cardapio WHERE id = $id";
$resultCardapio = mysqli_query($conexao, $select);

$select = "SELECT * from Cardapio_Alimento WHERE id_cardapio=$id";
$resultAlimento = mysqli_query($conexao, $select);

$selectAlergico = "SELECT * from Cardapio_Alergico WHERE id_cardapio=$id";
$resultAlergico = mysqli_query($conexao, $selectAlergico);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php

            $linha = mysqli_fetch_assoc($resultCardapio);

        ?>
            <h1><?=$linha["nome"]?></h1>
        <?php


            while($linha = mysqli_fetch_assoc($resultAlimento)){
                $id_alimento = $linha["id_alimento"];
                
                $select = "SELECT * from alimento WHERE id = $id_alimento";
                $result = mysqli_query($conexao, $select);
                
                while($linha = mysqli_fetch_assoc($result)){
                    ?>
                        <h1><?=$linha["nome"]?></h1>
                    <?php
                }
                
            }
            
            while($linhaAlergico = mysqli_fetch_assoc($resultAlergico)){
                $id_alergico = $linhaAlergico["id_alergico"];
                
                $select = "SELECT * from alergicos WHERE id = $id_alergico";
                $result = mysqli_query($conexao, $select);

                while($linha = mysqli_fetch_assoc($result)){
                    ?>
                        <h1><?=$linha["nome"]?></h1>
                    <?php
                }
                
            }
        ?>
    </div>
</body>
</html>