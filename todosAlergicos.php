<?php 

session_start();

require "php/conexao.php";

$select = "SELECT * from Alergicos";
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
                    <h1><?=$linha["nome"]?></h1>
                <?php
            }
        ?>
    </div>
</body>
</html>