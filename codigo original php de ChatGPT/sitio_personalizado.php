<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: registro.php");
    exit;
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sitio Personalizado - <?php echo $username; ?></title>
</head>
<body>

<h2>Bienvenido a tu Sitio Personalizado, <?php echo $username; ?>!</h2>
<p>Este es tu espacio personal en el sitio.</p>

</body>
</html>
