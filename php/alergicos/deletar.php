<?php

require "conexao.php";

$id = $_POST["id"];

$sql= "DELETE FROM alergicos WHERE id='$id'";
$result= mysqli_query($conexao, $sql);

$sql= "DELETE FROM Cardapio_alergico WHERE id_alergico='$id'";
$result= mysqli_query($conexao, $sql);


if($result) {
    header('Location: ../index.html');
} else {
    echo "Não foi possível realizar a edição";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}