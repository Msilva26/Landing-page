<?php
session_start();
include_once("conexao.php");


$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST,'Email', FILTER_SANITIZE_STRING);
$Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);


//echo "Nome: $Nome <br>";
//echo "E-mail: $Email <br>";
//echo "Telefone: $Telefone <br>";


$result_usuario = "INSERT INTO usuarios(nome, email, telefone, created)  VALUES ('$Nome','$Email','$Telefone', NOW() )";

$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)) {
    header("Location: Infinity Events.html");
}else{
    header("Location: Infinity Events.html");
}

?>