<?php

require "conexao.php";

$id = $_POST["id"];
$alimento_id = $_POST["alimento_id"];

$sql= "INSERT INTO cardapio (id, alimento_id) VALUE ('$id','$alimento_id')";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../index.html');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}