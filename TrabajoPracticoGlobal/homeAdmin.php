<?php 
session_start();
include(__DIR__ . '/session/admin.php');
include("cabeceraDatos.php");

?>
<body background="assets/imagenes/fondo1.jpg">
<center><h1>Bienvenido Administrador</h1> </center>
<nav>
    <ul>
              <li><a class="btn btn-outline-light" href="tareas/verTareas.php" role="button">Ver tareas a realizar</a></li>
              <li><a class="btn btn-outline-light" href="tareas/buscarTarea.php" role="button">Busqueda y filtrado</a></li>
              
              <li><a class="btn btn-outline-light" href="tareas/eliminarTareas.php" role="button">Eliminar tarea realizada</a></li>  
    </ul>

</nav>

<div class="boton">
    <center><a href="logout.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Cerrar sesión</a> </center>
</div>


