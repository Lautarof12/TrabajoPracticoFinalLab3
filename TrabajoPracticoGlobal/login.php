<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
  </head>
  <body>
  <body background="assets/imagenes/fondo.jpg">
    <br>
    <center><h1>BARRIO PORTAL DEL SOL</h1></center> <br> 
            <div class="container">
         <div class="row">
            <div class="col-md-4">
            </div>
            <div class= "col-md-4">  <br>
                <div class="card">
                    <div class="card-header">
                       Iniciar sesión
                    </div>
                    <div class="card-body">
                      <form action="validar.php" method= "post"><br>       
                        Usuario:<input class="form-control border-success" Required type="text" name="usuario" ><br><br>
                        Contraseña: <input class="form-control border-success" Required type="password" name="password" ><br><br>
                        <center><button class="btn btn-success" type="submit">Iniciar sesión</button> </center> <br>   
                     </form> 
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
         </div>  
      </div>
      <br>
      <center><a class="btn btn-outline-light" href="index.php" role="button">Volver al inicio</a></center>
      
      




  </body>
</html>
