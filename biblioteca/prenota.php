<?php
$conn = new mysqli("localhost", "root", "", "spadaro_simone_quaderno_informatica");
$utente = $_GET["utente"] ?? '';
$libro_id = $_GET["id"] ?? 0;

$conn->query("INSERT INTO prenotazioni (utente, libro_id) VALUES ('$utente', $libro_id)");

echo "Libro prenotato da $utente!";
echo "<br><a href='visualizza_libri.php?utente=$utente'>Torna ai libri</a>";
?>