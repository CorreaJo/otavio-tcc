<?php

require "conexao.php";

$prontuario= $_POST['prontuario'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$biografia= $_POST['biografia'];
$restricoes= $_POST['restricoes'];

$sql= "INSERT INTO Usuario (prontuario, nome, email, senha, biografia, restricoes) VALUE ('$prontuario','$nome','$email','$senha','$biografia','$restricoes')";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: index.html');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}