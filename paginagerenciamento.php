<?php
session_start();

require "php/conexao.php";
$prontuario = $_SESSION['prontuario'];
$select = "SELECT * FROM usuario WHERE email = '$prontuario'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/paginagerenciamento.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <div class="botao"><span id="botao-menu" class="material-symbols-outlined" onclick="clickMenu()">menu</span></div>
        <div class="logo">
            <a href="paginaprincipal.php"><img src="image/logoif.png  " alt="Logo IFSP"></a>
        </div>
        <div class="usuario">
            <a class="link" href="paginaperfil.php"><img src="image/perfil.png" alt="Usuário"></a>
        </div>
    </header>
    <div class="row-header"></div>
    <!--- MENU LATERAL --->
    <nav id="menu" class="nav-list">
        <ol >
            <li><a href="indicadores.html">Sobre o PNAP</a></li>
            <li><a href="perfis.html">Sobre o Projeto</a></li>
            <li><a href="denuncie.html">Sobre nós</a></li>
            <?php
        if($_SESSION["prontuario"] == '111') {
            ?><li><a class="link" href="paginagerenciamento.php">Gerenciamento</a></li><?php
        } ?>
        </ol>
    </nav>
<!--- INFORMAÇÕES --->
<main>
        <h1>Gerenciamento</h1>
    <div class="container">
        <div class="item cardapio">
            <h2>Cardápio</h2>
            <a class="botao-cardapio" href="">Visualizar Cardápios</a>
        </div>
        <div class="item alergico">
            <h2>Alérgenos</h2>
            <a class="botao-cardapio" href="todosAlergicos.php">Visualizar Alérgenos</a>
        </div>
        <div class="item alimento">
            <h2>Alimentos</h2>
            <a class="botao-cardapio" href="todosAlimentos.php">Visualizar Alimentos</a>
        </div>
    </div>
</main>
<footer>
    <div class="footer-father">
        <div>
            <p>IFCardapio <br> @copyright ©</p>
        </div>      
    </div>
</footer>
<script>
            function clickMenu () {
                if (menu.style.display == 'block') {
                    menu.style.display = 'none';
                } else {
                    menu.style.display = 'block';
                }
            }
</script>
</body>
</html>