<?php
require "back/conexion.php";
$consulta = "SELECT * FROM menu ORDER BY id ASC";
$resultado = mysqli_query($conectar, $consulta);
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
  <title>MENU - ENLOYADOS</title>
</head>

<body>
  <?php include "front/header.php"; ?>

  <main class="menu">
    <h1>DESCUBRE LOS PLATILLOS QUE TENEMOS PARA TI</h1>

    <?php if (mysqli_num_rows($resultado) > 0): ?>
      <div class="dish-cont">

        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
          <div class="dish-card">

            <?php $ruta = "img/" . $fila['path']; ?>

            <img class="dish-img" src="<?= $ruta ?>" alt="<?= $fila["nombre"] ?>">

            <h4><?= $fila["nombre"] ?></h4>

            <p><?= $fila["desc"] ?></p>

            <p class="price">$<?= $fila["price"] ?></p>

          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p>No hay registros en el menú.</p>
    <?php endif; ?>
  </main>

  <?php include "front/footer.php"; ?>
</body>

</html>