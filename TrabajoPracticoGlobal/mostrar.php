<?php include("db.php");
session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <body background="assets/imagenes/fondo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Imagenes</title>
</head>
<body>
    <center>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query="SELECT * FROM tabla_imagen";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td> <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" ></td>
                    </tr>
                    <?php   
                }
                ?>
            </tbody>
        </table>
    </center>
</body>
<div class="boton"><br><br>
    <center><a href="index.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Atras</a> </center>
</div>
</html>