<?php 
session_start();

require "php/conexao.php";

$selectAlergico = "SELECT * from Alergicos";
$resultAlergico = mysqli_query($conexao, $selectAlergico);


$selectAlimento = "SELECT * from alimento";
$resultAlimento = mysqli_query($conexao, $selectAlimento);

$prontuario = $_SESSION['prontuario'];
$select = "SELECT * FROM usuario WHERE email = '$prontuario'";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Alimentos</title>
    <link rel="stylesheet" href="css/cadastrarCardapio.css">
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
    <ol>
        <li><a href="indicadores.html">Sobre o PNAP</a></li>
        <li><a href="perfis.html">Sobre o Projeto</a></li>
        <li><a href="denuncie.html">Sobre nós</a></li>
        <?php
    if($_SESSION["prontuario"] == '111') {
        ?><li><a class="link" href="paginagerenciamento.php">Gerenciamento</a></li><?php
    } ?>
    </ol>
</nav>
<body>

    <h1>CADASTRAR CARDAPIO</h1>
<div class="form-cadastro">
    <form action="php/cardapio/cadastro.php" method="post">
    <label for="nome">Nome do cardapio</label><br>
    <input type="text" name="nome" placeholder="Nome do cardapio:">
        <br>
        <label for="alergico[]">Alergicos</label><br>
        <select name="alergico[]" multiple>
        <?php
            while($linha = mysqli_fetch_assoc($resultAlergico)){
                ?>
                    <option value="<?=$linha['id']?>"><?=$linha["nome"]?></option>
                <?php
            }
        ?>
        </select><br>
        <label for="alimento[]">Alimentos</label><br>
        <select name="alimento[]" multiple>
        <?php
            while($linha = mysqli_fetch_assoc($resultAlimento)){
                ?>
                    <option value="<?=$linha['id']?>"><?=$linha["nome"]?></option>
                <?php
            }
        ?>
        </select><br>
        <button id="botao-cadastrar">Cadastrar</button>
    </form>
</div>
    
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


