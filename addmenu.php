<?php
require "back/seguridad.php";
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
  <title>MENU - ENLOYADOS</title>
</head>

<body>

  <?php include "front/header2.php"; ?>

  <main class="users-page">
    <h2>AGREGAR PLATILLO</h2>

    <div class="botones lados">
      <a class="activo" href="addmenu.php">Agregar Platillo</a>
      <a href="vermenu.php">Ver Menú</a>
    </div>

    <form class="users_form" id="menu_form" action="back/insert_menu.php" method="post" enctype="multipart/form-data">

      <input type="text" name="nombre" id="nombre" placeholder="Nombre del platillo">
      <input type="text" name="desc" id="desc" placeholder="Descripción">

      <input type="number" name="price" id="price" placeholder="Precio" min="1">

      <label><b>Categoría del platillo</b></label>
      <select name="categoria" id="categoria">
        <option value="">Seleccione una categoría</option>
        <option value="Entrada">Entrada</option>
        <option value="Plato fuerte">Plato fuerte</option>
        <option value="Postre">Postre</option>
        <option value="Bebida">Bebida</option>
      </select>

      <label><b>Imagen del platillo</b></label>
      <input type="file" name="img" id="img" accept="image/*" required>

      <button id="btn_add" type="button">Guardar</button>
    </form>

  </main>

  <?php include "front/footer.php"; ?>

  <script>
    $("#btn_add").click(function () {

      if ($("#nombre").val().trim() == "") {
        alert("Escribe el nombre del platillo");
        $("#nombre").focus();
        return;
      }

      if ($("#desc").val().trim() == "") {
        alert("Escribe la descripción");
        $("#desc").focus();
        return;
      }

      if ($("#price").val().trim() == "" || $("#price").val() <= 0) {
        alert("Escribe un precio válido");
        $("#price").focus();
        return;
      }

      if ($("#categoria").val() == "") {
        alert("Selecciona una categoría");
        $("#categoria").focus();
        return;
      }

      if ($("#img").val() == "") {
        alert("Selecciona una imagen");
        return;
      }

      document.getElementById("menu_form").submit();
    });
  </script>

</body>

</html>
