<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$redeSocial = mysqli_escape_string($connect, $_POST['redeSocial']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	$sql = "INSERT INTO cliente (nome, telefone, redeSocial, senha) VALUES ('$nome', '$telefone', '$redeSocial', '$senha')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso.";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Cadrastrar!";
		header('Location: ../index.php');
	endif;

endif;