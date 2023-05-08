<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pediatra";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$data_primeira_consulta = $_POST['data_primeira_consulta'];
$email = $_POST['email'];
$tipo_paciente = $_POST['tipo_paciente'];
$plano_saude = $_POST['plano_saude'];

$sql = "INSERT INTO pacientes (nome, endereco, telefone, data_nascimento, data_primeira_consulta, email, tipo_paciente, plano_saude)
        VALUES ('$nome', '$endereco', '$telefone', '$data_nascimento', '$data_primeira_consulta', '$email', '$tipo_paciente', '$plano_saude')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php?message=" . urlencode("Paciente cadastrado com sucesso!"));
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


