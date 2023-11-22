<?php
// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];
// Crear una cadena con el nombre y el comentario separados por un símbolo especial
$linea = $nombre . "||" . $comentario . "\n";
// Abrir el archivo de comentarios en modo append
$archivo = fopen("comentarios.txt", "a");
// Escribir la línea en el archivo
fwrite($archivo, $linea);
// Cerrar el archivo
fclose($archivo);
// Redirigir a la página HTML
header("Location: index.html");
?>
