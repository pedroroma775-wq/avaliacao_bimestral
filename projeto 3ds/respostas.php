<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => $conn->connect_error]));
}

$melhor = isset($_POST['melhor']) ? implode(", ", $_POST['melhor']) : "";
$profissao = $_POST['profissao'] ?? "";
$faculdade = $_POST['faculdade'] ?? "";
$curso = $_POST['curso'] ?? "";
$parar_curso = $_POST['parar_curso'] ?? "";

$sql = "INSERT INTO respostas (melhor, profissao, faculdade, curso, parar_curso) 
        VALUES ('$melhor', '$profissao', '$faculdade', '$curso', '$parar_curso')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}

$conn->close();
?>
