<?php
session_start();
include("db.php");
error_reporting(0);
$nombre=$_POST['nombre'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query="INSERT INTO tabla_imagen(nombre, imagen) VALUES ('$nombre', '$imagen')";
$resultado= $conexion->query($query);

if($resultado){
    echo "si se inserto";
}else{
    echo "No fue posible subir la imagen";
}




?>