<?php

require "../conexao.php";

$prontuario = $_POST['prontuario'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql= "UPDATE usuario SET nome = '$nome', senha = '$senha' WHERE prontuario = '$prontuario'";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../../paginaperfil.php');
} else {
    echo "Não foi possível realizar a edição ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}