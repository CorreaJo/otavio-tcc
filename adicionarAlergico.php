<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/alergicos/cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome do alérgico:">
        <button>Cadastrar</button>
    </form>
</body>
</html>