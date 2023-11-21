<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM cliente WHERE id='$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="form-adc">
	<div class="input-box">
		<h3 class="title"> Editar cliente </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input">
				<input type="text" value="<?php echo $dados['nome'];?>" name="nome" id="nome" class="input-form" required>
				<label for="nome" class="label">Nome: </label>
			</div>

			<div class="input">
				<input type="number" value="<?php echo $dados['telefone'];?>" name="telefone" id="telefone" class="input-form" required >
				<label for="telefone" class="label">Telefone: </label>
			</div>

			<div class="input">
				<input type="text" value="<?php echo $dados['redeSocial'];?>" name="redeSocial" id="redeSocial" class="input-form" required>
				<label for="redeSocial" class="label">Rede Social: </label>
			</div>

			<div class="input">
				<input type="number" value="<?php echo $dados['senha'];?>" name="senha" id="senha" class="input-form" required>
				<label for="senha" class="label">Senha: </label>
			</div>

			<div class="botao">
			<button type="submit" name="btn-editar" class="btn-cadastrar" onclick="adicionar()">Atualizar</button>
			<a href="index.php" class="btn-lista">Lista de clientes</a>
			</div>
       
		</form>
	</div>
</div>
