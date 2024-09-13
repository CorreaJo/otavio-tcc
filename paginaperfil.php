<?php
session_start();

require "php/conexao.php";
$prontuario = $_SESSION['prontuario'];
$select = "SELECT * FROM usuario WHERE email = '$prontuario'";
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio - Perfil</title>
    <link rel="stylesheet" href="css/paginaperfil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<header>
    <div class="botao"><span id="botao-menu" class="material-symbols-outlined" onclick="clickMenu()">menu</span></div>
    <div class="logo">
        <a href="paginaprincipal.php"><img src="image/logoif.png" alt="Logo IFSP"></a>
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
        ?><li><a class="link" href="paginagerenciamento.html">Gerenciamento</a></li><?php
    } ?>
    </ol>
</nav>
    <main>
        
        <div class="container">
            <div class="profile-pic">
                <img src="https://voxnews.com.br/wp-content/uploads/2017/04/unnamed.png" alt="Foto de perfil">
                <button>Mudar foto</button>
            </div>
            <div class="form-inputs">
                <h2>Perfil</h2>
                <input type="text" placeholder="Nome:">
                <input type="text" placeholder="Bio:">
                <button>Salvar</button>
            </div>
        </div>
    </main>
    <!--- RODAPÉ --->
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