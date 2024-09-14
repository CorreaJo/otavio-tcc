<?php 

require "conexao.php";
session_start();

if(isset($_POST['login']) && !empty($_POST['prontuario']) && !empty($_POST['senha'])){

    $prontuario = $_POST["prontuario"];
    $senha = $_POST["senha"];

    $select = "SELECT * from usuario WHERE prontuario='$prontuario' and senha='$senha'";

    $resul = mysqli_query($conexao, $select);
    $linha = mysqli_fetch_assoc($resul);

    if(mysqli_num_rows($resul) < 1){
        unset($_SESSION["prontuario"]);
        unset($_SESSION["senha"]);
        header("location: ../index.html");
    } else {
        $_SESSION["prontuario"] = $prontuario;
        $_SESSION["senha"] = $senha;
        $_SESSION["email"] = $linha["email"];
        $_SESSION["nome"] = $linha["nome"];
        header("location: ../paginaprincipal.php");
    }
   
}

?>