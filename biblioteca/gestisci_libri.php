<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titolo = $_POST["titolo"];
    $autore = $_POST["autore"];
    $conn->query("INSERT INTO libri (titolo, autore) VALUES ('$titolo', '$autore')");
}

$result = $conn->query("SELECT * FROM libri");

echo "<h1>spadaro simone - Gestione Libri</h1>";
echo "<form method='POST'>
Titolo: <input type='text' name='titolo' required>
Autore: <input type='text' name='autore' required>
<input type='submit' value='Aggiungi Libro'>
</form><hr>";

echo "<table border='1'><tr><th>ID</th><th>Titolo</th><th>Autore</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['titolo']}</td><td>{$row['autore']}</td></tr>";
}
echo "</table><a href='index_biblioteca.html'>Torna all'Index</a>";

$conn->close();
?>