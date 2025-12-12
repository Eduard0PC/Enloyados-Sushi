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
  <title>DASHBOARD - ENLOYADOS</title>
</head>

<body>
  <?php
  include "front/header2.php";
  ?>
  <main class="dashboard-page">
    <div class="dashboard-info">
      <h1>BIENVENIDO AL DASHBOARD</h1>
      <p>Por favor selecciona alguna sección para realizar alguna acción</p>
    </div>
  </main>
  <?php
  include "front/footer.php";
  ?>
</body>

</html>