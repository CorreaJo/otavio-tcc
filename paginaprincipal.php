<?php
session_start();

require "php/conexao.php";
$prontuario = $_SESSION['prontuario'];
$select = "SELECT * FROM usuario WHERE email = '$prontuario'";

$selectC = "SELECT * from cardapio";
$result2 = mysqli_query($conexao, $selectC);

$linha = mysqli_fetch_assoc($result2);
$id = $linha["id"];

$selectA = "SELECT * from Cardapio_Alimento WHERE id_cardapio=$id";
$resultAlimento = mysqli_query($conexao, $selectA);

$selectAlergico = "SELECT * from Cardapio_Alergico WHERE id_cardapio=$id";
$resultAlergico = mysqli_query($conexao, $selectAlergico);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Home</title>
    <link rel="stylesheet" href="css/paginaprincipal.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<header>
    <div class="botao"><span id="botao-menu" class="material-symbols-outlined" onclick="clickMenu()">menu</span></div>
    <div class="logo">
        <img src="image/logoif.png  " alt="Logo IFSP">
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
<!--- CONTEUDO NO GERAL --->
<main>
<h1 id="h1-cardapio">CARDAPIO</h1>
<div class="cardapio">
    <div class="cardapio-item">
<?php
            while($linha = mysqli_fetch_assoc($resultAlimento)){
                $id_alimento = $linha["id_alimento"];
        
                $select = "SELECT * from alimento WHERE id = $id_alimento";
                $resultAli = mysqli_query($conexao, $select);
                
                while($linha= mysqli_fetch_assoc($resultAli)){
                    ?>
                        <h2><?=$linha["nome"]?></h2>
                    <?php
                }
                
            }
            

            ?>
    </div>
</div>
<h1>ALERGICOS</h1>
<div class="alergico">
    <div class="alergico-item">
            <?php
        
            while($linha = mysqli_fetch_assoc($resultAlergico)){
                $id_alergico = $linha["id_alergico"];
                
                $selectAler = "SELECT * from alergicos WHERE id = $id_alergico";
                $resultAler = mysqli_query($conexao, $selectAler);

                while($linha = mysqli_fetch_assoc($resultAler)){
                    ?>
                        <h2><?=$linha["nome"]?></h2>
                    <?php
                }
                
            }


        ?>

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