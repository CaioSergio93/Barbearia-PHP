<?php
// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>

<?php
endif;
session_unset();

?>