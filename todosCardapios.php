<?php 

session_start();

require "php/conexao.php";

$select = "SELECT * from cardapio";
$result= mysqli_query($conexao, $select);


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
            while($linha = mysqli_fetch_assoc($result)){
                ?>
                    <h1><a href="detalhesCardapio.php?id=<?=$linha["id"]?>"><?=$linha["nome"]?></a></h1>
                    <a href="php/cardapio/deletar.php?id=<?=$linha["id"]?>">EXCLUIR</a>
                <?php
            }
        ?>
    </div>
</body>
</html>