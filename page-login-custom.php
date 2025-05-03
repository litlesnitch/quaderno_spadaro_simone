<?php
/* Template Name: Login Personalizzato */
get_header(); ?>

<h1>spadaro simone - Login Statico</h1>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == "admin" && $pass == "1234") {
        echo "<p>Accesso riuscito</p>";
    } else {
        echo "<p>Credenziali errate</p>";
    }
}
?>

<a href="<?php echo home_url(); ?>">Torna alla home</a>

<?php get_footer(); ?>
