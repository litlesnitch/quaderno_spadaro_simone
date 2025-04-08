<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");
$utente = $_GET["utente"] ?? 'anonimo';

$result = $conn->query("SELECT * FROM libri");
echo "<h1>spadaro simone - Libri disponibili</h1>";
echo "<p>Benvenuto $utente</p>";
echo "<table border='1'><tr><th>Titolo</th><th>Autore</th><th>Azione</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['titolo']}</td><td>{$row['autore']}</td>
    <td><a href='prenota.php?id={$row['id']}&utente=$utente'>Prenota</a></td></tr>";
}
echo "</table><a href='index_biblioteca.html'>Torna all'Index</a>";
$conn->close();
?>