<?php

// Usar variables de entorno si están disponibles (para Vercel), sino usar valores por defecto (para desarrollo local)
$host = getenv('DB_HOST') ?: "localhost";
$usuario = getenv('DB_USER') ?: "root";
$contrasena = getenv('DB_PASSWORD') ?: "";
$basedatos = getenv('DB_NAME') ?: "enloyados";

$conectar = mysqli_connect($host, $usuario, $contrasena, $basedatos);

if (!$conectar) {
  // En producción, no mostrar errores directamente
  if (getenv('VERCEL')) {
    error_log("Error de conexión a la base de datos");
    die("Error de conexión. Por favor, contacta al administrador.");
  } else {
    echo "No se pudo conectar con el servidor";
  }
}
