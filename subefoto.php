<?php
ini_set('display_errors','On');
error_reporting(E_ALL | E_STRICT);

function is_valido($fichero){
    $extValidas = array("gif","jpeg","jpg","png");
    $temp = explode(".", $_FILES[$fichero]["name"]);
    $extension = end($temp);
    $tipo = $_FILES[$fichero]["type"];
    $tiposValidos = array("image/jpeg","image/jpg","image/pjpeg","image/x-png","image/png");
    $maxTamano = 1000000;
    return (in_array($extension, $extValidas)
        && in_array($tipo, $tiposValidos) && ($_FILES[$fichero]['size'] < $maxTamano));
}


function mueveFichero($origen, $destino) {
    move_uploaded_file($origen, $destino);
}

function existe_directorio($destino) {
    return file_exists($destino) && is_dir($destino);
}
$f = 'foto';
$d = "img/galeria/";
if(!is_valido($f)) {
} elseif ($_FILES[$f]["error"] > 0) {
} else {
    $fichero_movido = $d . $_FILES[$f]['name'];
    if (!existe_directorio($d)) {
    } elseif (file_exists($fichero_movido)) {
    } else {
        mueveFichero($_FILES[$f]['tmp_name'], $fichero_movido);
    }
}

header("Location: galery.php?");

?>