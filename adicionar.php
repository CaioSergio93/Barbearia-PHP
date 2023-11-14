<?php
//Header
include_once 'includes/header.php';
?>

<div class="form">
	<div class="input-box">
		<h3 class="title"> Novo cliente </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input">
				<input type="text" name="nome" id="nome" class="input-form" required>
				<label for="nome" class="label">Nome: </label>
			</div>

			<div class="input">
				<input type="number" name="telefone" id="telefone" class="input-form" required>
				<label for="telefone" class="label">Telefone: </label>
			</div>

			<div class="input">
				<input type="text" name="redeSocial" id="redeSocial" class="input-form" required>
				<label for="redeSocial" class="label">Rede Social: </label>
			</div>

			<div class="input">
				<input type="number" name="senha" id="senha" class="input-form" required>
				<label for="senha" class="label">Senha: </label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn-cadastrar" onclick="adicionar()">Cadrastar</button>
			<a href="cadastro.php" class="btn-lista">Lista de clientes</a>

		</form>
	</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>