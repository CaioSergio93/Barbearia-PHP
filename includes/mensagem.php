<?php
session_start();
if(isset($_SESSION['mensagem']) && $_SESSION['mensagem'] === 'deletar'): ?>
<script>	
	document.addEventListener("DOMContentLoaded", function() {
		function deletar(){
			let modal = document.querySelector('.modal-container');
			modal.style.display = 'block';

			const divMessage = document.querySelector(".alert");
			const msg = "Deletar Cliente cancelado";

			const message = document.createElement("div");
			message.classList.add("message");
			message.innerText = msg;
			divMessage.appendChild(message);
			setTimeout(() => {
				message.style.display = "none" ; 
			}, 3000); 
		}

		deletar();
	});
<?php
session_unset();
endif;
?>
</script>
