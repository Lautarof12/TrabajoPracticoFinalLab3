<?php 
include("dbTareas.php");
include("../cabeceraDatos.php");

?>

<?php


if(isset($_POST['agregar'])){
    $DIREC=$_POST['task'];

    $TIPO=$_POST['flexRadioDefault'];
    if($TIPO=="pasto"){
        $query = "INSERT INTO tareas(direccion, tarea) VALUES ('$DIREC','Cortar el pasto')";
        $result = mysqli_query($conexion, $query);
    }
    if($TIPO=="pileta"){
            $query = "INSERT INTO tareas(direccion, tarea) VALUES ('$DIREC','Limpiar la pileta')";
            $result = mysqli_query($conexion, $query);
    }
    if($TIPO=="residuos"){
        $query = "INSERT INTO tareas(direccion, tarea) VALUES ('$DIREC','Recolectar los residuos')";
        $result = mysqli_query($conexion, $query);
    }
    if($result){
        ?>
        <div class="alert alert-success" role="alert">
        <center>Tarea agregada correctamente!</center><br><br>
        <center><a class="btn btn-outline-success" href="../homeUsuario.php" role="button">Volver a Home</a></center>
        </div>
        <?php
      
    }
}


?>