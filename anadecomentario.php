<?php
require_once 'conectar.php';

$nombre = $_REQUEST['nombre'];
$comentario = $_REQUEST['comentario'];

$validado = (!empty($nombre)  && !empty($comentario));
if (!$validado) {
    $error = "Los campos nombre $nombre y comentario $comentario son obligatorios";
    header("Location: index.php?error=$error#contact") or die("Error al redirigir a formulario con error $error");;
}

$sql_insert = "INSERT INTO `Comentarios` (nombre, comentario) " . "
			      VALUES (?, ?)";
try {
    $sentencia = $db->prepare($sql_insert);
    $sentencia->execute(array($nombre, $comentario));
}catch(PDOException $error) {
    die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}
header("Location: index.php#comentarios") or die("Error al redirigir a listado");
