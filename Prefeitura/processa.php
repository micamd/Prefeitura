<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING); 
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING); 
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING); 
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING); 
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING); 
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING); 
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING); 


$result_usuario = "INSERT INTO usuarios (nome, data, cpf, sexo, cidade, bairro, rua, numero, complemento, created) VALUES ('$nome', '$data', '$cpf', '$sexo', '$cidade', '$bairro', '$rua', '$numero', '$complemento',  NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
