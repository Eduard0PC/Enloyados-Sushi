<?php
include "back/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&family=Rampart+One&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Asimovian&family=Bitcount+Prop+Single:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <title>LOGIN - ENLOYADOS</title>
</head>

<body>
  <main class="login-page">
    <form action="back/auth.php" method="POST" class="login-form" id="login-form">
      <h1>Inicia Sesión</h1>
      <img src="img/logo.png" alt="logo">
      <label for="email">Nombre de usuario</label>
      <input type="email" name="email" id="email">

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password">

      <button type="submit" class="" id="btn_login">Ingresar</button>
      <a href="index.php">Volver a la pagina principal</a>
    </form>
  </main>
  <?php include "front/footer.php"; ?>
</body>
</html>