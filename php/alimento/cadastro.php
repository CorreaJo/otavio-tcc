<?php

require "../conexao.php";

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];

$sql= "INSERT INTO alimento (nome, tipo) VALUE ('$nome', '$tipo')";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../../todosAlimentos.php');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}