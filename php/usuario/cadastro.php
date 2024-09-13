<?php

require "../conexao.php";

$prontuario= $_POST['prontuario'];
$nome= $_POST['nome'];
$senha= $_POST['senha'];
$email= $_POST['email'];

$sql= "INSERT INTO Usuario (prontuario, nome, senha, email) VALUE ('$prontuario','$nome', '$senha', '$email')";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../../index.html');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}