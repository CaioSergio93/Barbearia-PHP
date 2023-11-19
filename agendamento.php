<?php
//Header
include_once 'includes/header.php';
?>

<body>

    <div class="container">
        <h2>Agendamento</h2>

        <form action="agendamento_processo.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" required>

            <label for="date">Data:</label>
            <input type="date" name="date" required>

            <label for="time">Hora:</label>
            <input type="time" name="time" required>

            <button type="submit">Agendar</button>
        </form>
    </div>


<?php
//Footer
include_once 'includes/footer.php';
?>