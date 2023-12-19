<?php
session_start();
include_once("conexao.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING); 
$prazo = filter_input(INPUT_POST, 'prazo', FILTER_SANITIZE_STRING);
$contribuinte = filter_input(INPUT_POST, 'contribuinte', FILTER_SANITIZE_STRING); 


$result_protocolo = "INSERT INTO protocolo (descricao, data, prazo, contribuinte) VALUES ('$descricao', '$data', '$prazo', '$contribuinte')";
$resultado_protocolo = mysqli_query($conn, $result_protocolo);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}