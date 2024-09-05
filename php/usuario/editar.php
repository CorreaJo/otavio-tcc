<?php

require "conexao.php";

$prontuario= $_POST['prontuario'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$biografia= $_POST['biografia'];
$restricoes= $_POST['restricoes'];

$sql= "UPDATE Usuario SET nome = $nome, biografia = $biografia WHERE prontuario = $prontuario";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../index.html');
} else {
    echo "Não foi possível realizar a edição ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}