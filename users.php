<?php
require "back/seguridad.php";
?>

<!DOCTYPE html>
<html lang="en">

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
  <title>USUARIOS - ENLOYADOS</title>
</head>

<body>
  <?php include "front/header2.php"; ?>

  <main class="users-page">
    <h2>AGREGAR USUARIOS</h2>

    <div class="botones lados">
      <a class="activo" href="users.php">Agregar Usuario</a>
      <a href="verusers.php">Ver Usuarios</a>
    </div>

    <form class="users_form" id="users_form" action="back/insert_users.php" method="post">

      <input type="text" name="name" id="name" placeholder="Nombre">
      <input type="text" name="email" id="email" placeholder="Correo electrónico" required>
      <input type="password" name="password" id="password" placeholder="Contraseña" >

      <button id="btn_add" type="button">Guardar</button>
    </form>

  </main>

  <?php include "front/footer.php"; ?>

  <script type="text/javascript">
    $("#btn_add").click(function () {

      if ($("#name").val().trim() == "") {
        alert("Escribe el nombre por favor");
        $("#name").focus();
        return;
      }

      if (!$("#email")[0].checkValidity() || $("#email").val().trim() == "") {
        alert("Escribe tu correo correctamente por favor");
        $("#email").focus();
        return 0;
      }

      if ($("#password").val().trim() == "") {
        alert("Escribe la contraseña por favor");
        $("#password").focus();
        return;
      }

      document.getElementById("users_form").submit();
    });
  </script>

</body>

</html>