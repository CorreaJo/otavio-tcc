<?php

require "../conexao.php";

$nome = $_POST["nome"];

$sql= "INSERT INTO Alergicos (nome) VALUE ('$nome')";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../../todosAlergicos.php');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}