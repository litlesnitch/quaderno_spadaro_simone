<?php
/* Template Name: Biblioteca Libri */
get_header(); ?>

<h1>spadaro simone - Biblioteca</h1>

<?php
global $wpdb;
$libri = $wpdb->get_results("SELECT titolo, autore FROM libri", ARRAY_A);

if ($libri) {
    echo "<table border='1'><tr><th>Titolo</th><th>Autore</th></tr>";
    foreach ($libri as $libro) {
        echo "<tr><td>{$libro['titolo']}</td><td>{$libro['autore']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>Nessun libro trovato.</p>";
}
?>

<a href="<?php echo home_url(); ?>">Torna alla home</a>

<?php get_footer(); ?>
