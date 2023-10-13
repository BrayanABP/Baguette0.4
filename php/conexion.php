<?php
function conectar() {

    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $db = "baguettedb";
    $port = 1002;

    $conexion = mysqli_connect($servidor, $usuario, $contra, $db, $port) or die("no se logro la conexion");
    return $conexion;
}

function desconectar($conexion) {
    mysqli_close($conexion);
}
