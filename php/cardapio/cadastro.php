<?php

require "../conexao.php";

$nome = $_POST["nome"];
$id_alimento = $_POST["alimento"];
$id_alergico = $_POST["alergico"];


$sql= "INSERT INTO cardapio (nome) VALUE ('$nome')";
$result= mysqli_query($conexao, $sql);



$select = "SELECT * FROM cardapio WHERE nome = '$nome'";
$result= mysqli_query($conexao, $select);

$linha = mysqli_fetch_assoc($result);

$id_cardapio = $linha["id"];

foreach ($id_alergico as $id){
    $insert = "INSERT INTO Cardapio_Alergico (id_alergico, id_cardapio) VALUE ($id, $id_cardapio)";
    $result= mysqli_query($conexao, $insert);
}


foreach ($id_alimento as $id){
    $insertAlimento = "INSERT INTO Cardapio_Alimento (id_alimento, id_cardapio) VALUE ($id, $id_cardapio)";
    $result= mysqli_query($conexao, $insertAlimento);
}



if($result) {
    header('Location: ../../todosCardapios.php');
} else {
    echo "Não foi possível realizar o cadastro ";
    echo "<a href='../index.php'>Voltar a página inicial</a>";
    echo mysqli_error($conexao);
}