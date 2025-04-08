<?php
if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
    header("Location: gestisci_libri.php");
    exit();
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Credenziali errate.";
}
?>
<form method="POST">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <input type="submit" value="Login Admin">
</form>
<a href='index_biblioteca.html'>Torna indietro</a>
