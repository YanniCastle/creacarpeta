<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Validar y verificar el nombre de usuario aquí
    // ...

    // Crear una carpeta única para el usuario (cambiar la ruta según sea necesario)
    $userFolderPath = "sitios_usuarios/$username";
    if (!is_dir($userFolderPath)) {
        mkdir($userFolderPath);
    }

    // Redirigir al usuario a su nuevo sitio personalizado
    $_SESSION["username"] = $username;
    header("Location: sitio_personalizado.php");
    exit;
}
?>
