<?php
session_start();

require "php/conexao.php";

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$prontuario = $_SESSION['prontuario'];

$select = "SELECT * FROM usuario WHERE prontuario = '$prontuario'";
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
        ?><li><a class="link" href="paginagerenciamento.php">Gerenciamento</a></li><?php
    } ?>
    </ol>
</nav>
<main>
        <h1 class="title-1">Olá, <strong class="t-info"><?php echo $nome ?></strong>.</h1>
    <div class="perfil">
        <div class="infos">
            <div class="info-h4"><h2>Suas informações</h2>
                <h4>Nome: <strong class="t-info"><?php echo $nome ?></strong></h4>
                <h4>Prontuario: <strong class="t-info"><?php echo $prontuario ?></strong></h4>
                <h4>Email: <strong class="t-info"><?php echo $email ?></strong></h4>
            </div>
            <a class="botao-deslogar" href="php/sair.php">DESLOGAR</a>
        </div>
        <div class="infos i-edit">
            <div class="editar-usuario"><h2>Editar informações</h2>
            <form action="php/usuario/editar.php" method="POST" >
                <input class="prontuario" type="hidden" name="prontuario" value="<?php echo $prontuario ?>" id="prontuario">
                <br>
                <label for="nome">Nome:</label><br>
                <input class="input-att" type="text" id="nome" value="<?php echo $nome ?>" name="nome">
                <br>
                <label for="email">Email:</label><br>
                <input class="input-att" type="email" name="email" value="<?php echo $email ?>" id="email">
                <br>
                <label for="senha">Senha:</label><br>
                <input class="input-att" type="password" id="senha" value="<?php echo $senha?>" name="senha">
                <br>
                <button class="botao-atualizar" name="editar" type="submit" value="editar">EDITAR</button>
            </div>
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