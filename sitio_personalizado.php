<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: registro.php");
    exit;
}

$username = $_SESSION["username"];
?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="stylefoto2.css" />
  
  <link rel="shortcut icon" href="letraCfondonegro.png">
</head>

<body>
<article id="position">
   <nav>
    <ul>
      <li>
        <a href="usuarios_registrados1.php"><img src="imagenes/chalalas4.png"></a>
      </li>
      <li>
        <a href="#">Productos</a>
        <ul>
          <li><a href="comprar.php">Comprar</a></li>
          <li><a href="vender.php">Vender</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Servicios</a>
        <ul>
          <li><a href="buscar.php">buscar</a></li>
          <li><a href="ofrecer.php">ofrecer</a></li>
        </ul>
      </li>

      <li><a href="#">Categorias</a>
        <ul>
          <li><a href="#">categoria 1</a></li>
          <li><a href="#">categoria 2</a></li>
          <li><a href="#">categoria 3</a></li>
          <li><a href="#">categoria 4</a></li>
        </ul>
      </li>

      <li><a href="Formulario.php">Comentarios</a></li>
      <li><a href="fotos.php">Fotos</a></li>
      <li><a href="videos.php">videos</a></li>

      <li><a href="#">Contactos</a>
        <ul>
          <li><a href="#">Whats App</a></li>
          <li><a href="email.php">Email</a></li>
        </ul>
      </li>
      <li><a href="muro.php">Muro</a></li>
      <li><a href="cierre.php">cerrar sesion</a></li>
    </ul>
  </nav>
   </article>
  <br><br>
  <h1>Bienvenid@</h1>
  <?php
  echo "<h2>¡Hola, " . $_SESSION["username"] . "!<br></h2>";
  ?>
  
</body>

</html>