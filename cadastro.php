<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
?>

<div class="alert"></div>

<div class="main">
	<div class="table">
		<h3 class="title"> Clientes </h3>
		<table class="table">
			<thead>
				<tr>
					<th>Nome: </th>
					<th>telefone: </th>
					<th>redeSocial: </th>
					<th>senha: </th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM cliente";
				$resultado = mysqli_query($connect, $sql);

				if (mysqli_num_rows($resultado) > 0) :
					while ($dados = mysqli_fetch_array($resultado)) :
				?>
						<tr>
							<td><?php echo $dados['nome']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>
							<td><?php echo $dados['redeSocial']; ?></td>
							<td><?php echo $dados['senha']; ?></td>
							
							<td>
								<a href="editar.php?id=<?php echo $dados['id']; ?>">
									<img src="css/img/pencil.png" class="img">
								</a>
							</td>
							
							<td>
								<a href="#modal <?php echo $dados ['id']; ?>">
									<img src="css/img/trash.png" class="img-del" onclick="deletar()">
								</a>

							</td>
						</tr>

						<div class="modal-container">
							<div id="modal<?php echo $dados['id']; ?>" class="modal">
								<div class="modal-content">
									<h4 class="title-modal">Confirme...</h4>
									<p>Tem certeza que deseja deletar esse cliente?</p>
								</div>

								<div class="modal-footer">
									<form action="php_action/delete.php" method="POST" class="modal-footer">
										<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
										<button type="submit" name="btn-deletar" class="btn-red">Sim, desejo deletar!</button>
										<a href="#!" class="btn-cancelar" onclick="cancelarDelecao()">Cancelar</a>
									</form>
								</div>
							</div>
						</div>

					<?php endwhile;
				else : ?>

					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>

				<?php
				endif
				?>
			</tbody>
		</table>
		</br>
	<div class="botao">
		<a href="adicionar.php" class="btn-adicionar">Adicionar cliente</a>
	</div>

	</div>
</div>

<script type="text/javascript">
    function deletar() {
        let modal = document.querySelector('.modal-container');
        modal.style.display = 'block';
    }

    function modalClose() {
        let modal = document.querySelector('.modal-container');
        modal.style.display = 'none';

        const divMessage = document.querySelector(".alert");
        const msg = "Deletar Cliente cancelado";

        const message = document.createElement("div");
        message.classList.add("message");
        message.innerText = msg;
        divMessage.appendChild(message);

        setTimeout(() => {
            message.style.display = "none";
        }, 3000);
    }

    function adicionar() {
        const divMessage = document.querySelector(".alert");
        const msg = "Cadastrado com sucesso!";

        const message = document.createElement("div");
        message.classList.add("message");
        message.innerText = msg;
        divMessage.appendChild(message);

        setTimeout(() => {
            message.style.display = "none";
        }, 3000);
    }

    function cancelarDelecao() {
        modalClose();
    }
</script>

<?php
//Footer
include_once 'includes/footer.php';
?>