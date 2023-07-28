<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];

    $sql = "INSERT INTO tasks (title) VALUES ('$titulo')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Erro ao adicionar a tarefa: " . $conn->error;
    }
}

$conn->close();
?>