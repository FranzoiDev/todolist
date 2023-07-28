<?php
include 'conexao.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row["completed"] ? "Concluída" : "Pendente";
        echo "<p>{$row['title']} - {$status}</p>";
    }
} else {
    echo "Nenhuma tarefa encontrada.";
}

$conn->close();
?>