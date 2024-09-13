<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/paginaperfil.css">
</head>
<body>
    <header>
        <div class="menu">
            <img src="image/menu.png" alt="Menu">
        </div>
        <div class="logo">
            <a class="link" href="paginaprincipal.html"><img src="image/logo.jpeg" alt="Logo IFSP"></a>
        </div>
        <div class="usuario">
            <a class="link" href="paginaperfil.html"><img src="image/perfil.png" alt="Usuário"></a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="form-inputs">
                <h2>Perfil</h2>
                <form action="php/usuario/editar.php" method="post">
                    <input type="text" name="prontuario" value=<?=$_SESSION["prontuario"]?> hidden>
                    <input type="name" name="nome" placeholder=<?=$_SESSION["nome"]?>>
                    <input type="password" name="senha"  placeholder=<?=$_SESSION["senha"]?>>
                    <button>Salvar</button>
                </form>     
            </div>
        </div>
    </main>
    <footer>
        <a class="link" href="gerenciamento.html">Gerenciamento</a>
    </footer>
</body>
</html>