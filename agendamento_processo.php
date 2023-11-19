<?php
//Header
include_once 'includes/header.php';
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    echo "Agendamento realizado com sucesso!<br>";
    echo "Nome: $name<br>";
    echo "Data: $date<br>";
    echo "Hora: $time<br>";

    header("refresh:5;url=index.php");
    exit;
}
?>
