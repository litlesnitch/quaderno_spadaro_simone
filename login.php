<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

$sql = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    header("Location: accesso_ok.html");
    exit();
} else {
    echo "<h1>spadaro simone - Login Fallito</h1>";
    echo "<p>Credenziali errate</p>";
    echo "<a href='index.html'>Torna all'Index</a>";
}
$conn->close();
?>