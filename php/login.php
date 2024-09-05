<?php

require "conexao.php";

$prontuario= $_POST["prontuario"];
$senha= $_POST["senha"];

$sql= "SELECT * FROM Usuario WHERE prontuario= '$prontuario' AND senha='$senha'";
$result=mysqli_query($conexao, $sql);
$registro = mysqli_fetch_assoc($result);

if($registro==null){
  echo "Prontuário ou senha inválida";
} else{
  header('Location: ../paginaprincipal.html');
}