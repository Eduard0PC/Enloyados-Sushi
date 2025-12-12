<?php
require "back/seguridad.php";
require "back/conexion.php";

$consulta = "SELECT * FROM users ORDER BY id ASC";
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

  <title>USUARIOS - ENLOYADOS</title>
</head>

<body>

  <?php include "front/header2.php"; ?>

  <main class="users-page">

    <h2>LISTA DE USUARIOS</h2>

    <div class="botones lados">
      <a href="users.php">Agregar Usuario</a>
      <a class="activo" href="verusers.php">Ver Usuarios</a>
    </div>

    <div class="users_table_cont lados ancho">

      <?php if (mysqli_num_rows($resultado) > 0): ?>

        <table class="users_table">

          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>CONTRASEÑA</th>
            <th>ELIMINAR</th>
          </tr>
          <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
            <tr>
              <td><?= $fila["id"] ?></td>
              <td><?= $fila["name"] ?></td>
              <td><?= $fila["email"] ?></td>
              <td><?= $fila["password"] ?></td>
              <td>
                <a href="#" onclick="validar('back/delete_user.php?id=<?= $fila['id'] ?>')">
                  <img class="delete" src="img/images.png" alt="eliminar">
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </table>

      <?php else: ?>
        <p class="no-registros">No hay registros disponibles.</p>
      <?php endif; ?>
    </div>
  </main>
  <script>
    function validar(url) {
      var eliminar = confirm("¿Realmente quieres ELIMINAR este usuario?");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>

</body>

</html>