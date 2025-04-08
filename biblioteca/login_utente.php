<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? '';
    $sql = "SELECT * FROM utenti_biblioteca WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $conn->query("INSERT INTO utenti_biblioteca (username) VALUES ('$username')");
    }
    header("Location: visualizza_libri.php?utente=$username");
    exit();
}
?>
<form method="POST">
    Username: <input type="text" name="username" required>
    <input type="submit" value="Accedi">
</form>
<a href='index_biblioteca.html'>Torna indietro</a>
