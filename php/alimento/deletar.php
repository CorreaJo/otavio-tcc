<?php

require "../conexao.php";

$id = $_GET["id"];

$sql= "DELETE FROM alimento WHERE id='$id'";
$result= mysqli_query($conexao, $sql);
$sql= "DELETE FROM Cardapio_Alimento WHERE id_alimento='$id'";
$result= mysqli_query($conexao, $sql);


if($result) {
    header('Location: ../../todosAlimentos.php');
} else {
    echo "Não foi possível realizar a edição";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}