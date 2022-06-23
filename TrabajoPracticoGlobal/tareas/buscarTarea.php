<?php   
include("dbTareas.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body background="../assets/imagenes/fondo1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Buscar tarea</title>
</head>
<body>
    <br>
<center>
    <form action="" method="get">
    <p>Para buscar puede introducir a continuacion la dirección y eso le mostrará todas las tareas solicitadas por esa dirección, o puede introducir la tarea y le mostrara todos las direcciones que solicitaron la misma tarea.</p>
    <p>Recuerde que las tareas son las siguientes: 
    <li>Cortar el pasto</li>
    <li>Limpiar la pileta</li>
    <li>Recolectar los residuos</li></p>
    <input type="text" name="busqueda" placeholder="Ingrese la informacion"><br><br>
    <input type="submit" name="enviar" value="Buscar"><br><br>
</form>
<?php 
if(isset($_GET['enviar'])){
    $busqueda= $_GET['busqueda'];
    $consulta=$conexion->query("SELECT * FROM tareas WHERE direccion LIKE '%$busqueda%' OR tarea LIKE '%$busqueda%'");
    echo "Informacion encontrada: ";
    while($row=$consulta->fetch_array()){
        
            ?> <br><br> Direccion: <?php echo $row['direccion'] ;?> <br><?php
            ?> Tarea a realizar: <?php echo $row['tarea'];
    }
}
?>
<div class="boton"> <br>
    <center><a href="../homeAdmin.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Volver atras</a> </center>
</div>
</body>
</html>
</center>
