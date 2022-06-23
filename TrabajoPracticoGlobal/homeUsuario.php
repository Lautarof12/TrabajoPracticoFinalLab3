<?php
session_start();
include(__DIR__ ."./session/user.php");
include("cabeceraDatos.php");

?>


<body background="assets/imagenes/fondo1.jpg">
<center><h1>Bienvenido Usuario</h1> </center>

    
    
<nav>
    <ul>
              <li><a class="btn btn-outline-light" href="tareas/agregarTarea.php" role="button">Agregar tarea</a></li>
              <li><a class="btn btn-outline-light" href="photo.php" role="button">Subir imagen</a></li>
    </ul>
</nav>

<div class="boton">
    <center><a href="logout.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Cerrar sesión</a> </center>
</div>



