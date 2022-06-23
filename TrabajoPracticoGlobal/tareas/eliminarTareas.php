<?php include("dbTareas.php");
error_reporting(0);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar tareas</title>
    <body background="../assets/imagenes/fondo1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<center>
    <form action="" method="post">
<br>
        Ingresa el id de la tarea realizada: <input type="text" name="ida">
        <input type="submit" value="Borrar">
    </form>
</center>
    <br>
          <div class="boton">
    <center>Si no recuerda el id, puede verlo en esta pagina: <a href="verTareas.php" class="btn btn-outline-success" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Ver tareas</a> </center>
</div>


    <?php  
    $ido=$_POST['ida'];
    mysqli_query($conexion, "DELETE FROM tareas where id= '$ido'");

    ?>
  <div class="boton">
    <center><a href="../homeAdmin.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Volver atras</a> </center>
</div>


  </body>
</html>