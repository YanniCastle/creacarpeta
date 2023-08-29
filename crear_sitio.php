<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Validar y verificar el nombre de usuario aquí
    // ...

    // Crear una carpeta única para el usuario (cambiar la ruta según sea necesario)
    $userFolderPath = "sitios_usuarios/$username";
    $newFileName = "sitios_usuarios/$username.php";
    $content = "<?php\n// Contenido del nuevo archivo\n\$mensaje = 'Hola desde el nuevo archivo';\necho \$mensaje;\n?>";
//PENDIENTE ACOMODAR ARCHIVO PHP EN CARPETA
    if (!is_dir($userFolderPath) && file_put_contents($newFileName, $content) !== false) {
        mkdir($userFolderPath);
        echo "El archivo $newFileName  y $userFolderPath se han creado con exito.";
    } else {
    echo "No se pudo crear el archivo.";
    }
    }

    //Aqui esta el codigo para crear php en php PROBANDO//
 //   $newFileName = "nuevo_archivo.php";
    

   // if (file_put_contents($newFileName, $content) !== false) {
   // echo "El archivo $newFileName se ha creado con �xito.";
   // } else {
   // echo "No se pudo crear el archivo.";
   // }


    // Redirigir al usuario a su nuevo sitio personalizado
//    $_SESSION["username"] = $username;
  //  header("Location: sitio_personalizado.php");
  //  exit;

?>
