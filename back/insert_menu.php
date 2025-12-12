<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$categoria = $_POST['categoria'];

$nombre_imagen = $_FILES['img']['name'];
$tipoFoto = $_FILES['img']['type'];
$ruta_temporal = $_FILES['img']['tmp_name'];

$ruta_Archivos = "../img/menu";
$ruta_Ver = "menu";

$timestamp = date('YmdHis');
$nombre_unico = $timestamp . "-" . $nombre_imagen;
$ruta_final = $ruta_Archivos . "/" . $nombre_unico;
$ver = $ruta_Ver . "/" . $nombre_unico;

if (
    $tipoFoto == "image/jpeg" ||
    $tipoFoto == "image/png" ||
    $tipoFoto == "image/gif" ||
    $tipoFoto == "image/jpg" ||
    $tipoFoto == "image/webp" ||
    $tipoFoto == "image/svg+xml"
) {
    move_uploaded_file($ruta_temporal, $ruta_final);
} else {
    echo '
      <script>
        alert("El archivo seleccionado NO es una imagen válida.");
        window.history.go(-1);
      </script>';
    exit();
}


$insertar = "INSERT INTO menu (`nombre`, `desc`, `price`, `path`, `categoria`)
VALUES ('$nombre', '$desc', '$price', '$ver', '$categoria')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    echo '
      <script>
        alert("PLATILLO REGISTRADO CORRECTAMENTE");
        location.href="../addmenu.php";
      </script>';
} else {
    echo '
      <script>
        alert("ERROR AL GUARDAR EL PLATILLO");
        location.href="../addmenu.php";
      </script>';
}

exit();
?>
