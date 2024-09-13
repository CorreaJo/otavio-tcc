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
    <form action="php/alimento/cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome do alimento:">
        <input type="text" name="tipo" placeholder="Tipo do alimento:">
        <button>Cadastrar</button>
    </form>
</body>
</html>