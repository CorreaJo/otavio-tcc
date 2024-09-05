<?php

$conexao = mysqli_connect("localhost", "root", "", "cardapioif");
if(!$conexao) {
    echo "Erro de conexão com o banco de dados!";
    echo mysqli_connect_error();
}