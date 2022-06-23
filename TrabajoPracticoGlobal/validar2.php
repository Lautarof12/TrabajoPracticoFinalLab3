<?php
include("db.php");
include("cabeceraDatos.php");
session_start();

if(isset($_POST['registrarse'])){


    $USUARIO=$_POST['usuario'];
    $PASSWORD=$_POST['contraseña'];
    $TIPO=$_POST['flexRadioDefault'];

?>

<?php

    if($TIPO=="ad"){
        $query = "INSERT INTO usuarios(id,usuario, contraseña, id_cargo) VALUES (NULL, '$USUARIO', '$PASSWORD', 1)";
        ?><center><h6>Perfil creado con exito!</h6></center> <br><center><a class="btn btn-outline-success" href="login.php" role="button">Ir a iniciar sesion</a></center><?php 
    }else{
        $query = "INSERT INTO usuarios(id,usuario, contraseña, id_cargo) VALUES (NULL, '$USUARIO', '$PASSWORD', 2)";
        ?><center><h6>Perfil creado con exito!</h6></center> <br><center><a class="btn btn-outline-success" href="login.php" role="button">Ir a iniciar sesion</a></center><?php 

     
    }
    $result = mysqli_query($conexion, $query);
    
}
?>

