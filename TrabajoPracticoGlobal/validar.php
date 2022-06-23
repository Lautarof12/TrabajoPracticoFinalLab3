<?php
include("db.php");
include("cabeceraDatos.php");
session_start();
error_reporting(0);



$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta= "SELECT* FROM usuarios where usuario= '$USUARIO' and contraseña= '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($resultado);


if($filas['id_cargo']==1){
    header("location:homeAdmin.php");
    $_SESSION['cargo'] = 1;
}else
    if($filas['id_cargo']==2){
        header("location:homeUsuario.php");
        $_SESSION['cargo'] = 2;
    }

        ?>
        <div class="alert alert-danger" role="alert">
        <center>Error al iniciar sesion</center><br><br>
        <center><a class="btn btn-outline-danger" href="login.php" role="button">Volver a iniciar sesión</a></center>
        </div>
    <?php
mysqli_free_result($resultado);
mysqli_close($conexion);

?>