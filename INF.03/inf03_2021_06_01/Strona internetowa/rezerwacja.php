<?php
$connection = mysqli_connect('localhost', 'root', '', 'baza');

if (isset($_POST['rezerwuj'])) {
    $data = $_POST['data'];
    $osoby = $_POST['osoby'];
    $numertel = $_POST['numertel'];

    $sql = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', '$osoby', '$numertel');";

    mysqli_query($connection, $sql);
    echo 'Dodano rezerwacje do bazy';
}

mysqli_close($connection);
?>