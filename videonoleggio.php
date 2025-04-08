<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$sql = "SELECT * FROM film";
$result = $conn->query($sql);

echo "<h1>spadaro simone - Videonoleggio</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Titolo</th><th>Genere</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['titolo']}</td><td>{$row['genere']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nessun film trovato.";
}
echo "<br><a href='index.html'>Torna all'Index</a>";

$conn->close();
?>