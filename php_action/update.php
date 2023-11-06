<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$redeSocial = mysqli_escape_string($connect, $_POST['redeSocial']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE cliente SET nome='$nome', telefone='$telefone', redeSocial='$redeSocial', senha='$senha' WHERE id='$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso.";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../index.php');
	endif;

endif;