<?php

require "conexao.php";

$id = $_POST["id"];
$alimento_id = $_POST["alimento_id"];

$sql= "UPDATE cardapio SET alimento_id='$alimento_id' WHERE id='$id'";
$result= mysqli_query($conexao, $sql);

if($result) {
    header('Location: ../index.html');
} else {
    echo "Não foi possível realizar a edição";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}