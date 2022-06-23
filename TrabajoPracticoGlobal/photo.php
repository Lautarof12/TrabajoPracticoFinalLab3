<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir imagen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <center> <br><br>  
        <form action="validar3.php" method="post" enctype="multipart/form-data">
            <input type="text" REQUIRED name="nombre" placeholder="Nombre" value= "">
            <input type="file" REQUIRED name="imagen" >
            <input type="submit" value="aceptar">
        </form>
    </center>
    <br>
      <center><a class="btn btn-outline-danger" href="homeUsuario.php" role="button">Atras</a></center>
</body>
</html>