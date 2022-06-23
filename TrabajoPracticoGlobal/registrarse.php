<?php include ("db.php"); 
error_reporting(0);
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registrarse</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
  </head>
  <body>
  <body background="assets/imagenes/fondo.jpg">
    <br>
    <center><h1>BARRIO PORTAL DEL SOL</h1></center> 
      <div class="container"></div>
         <div class="row">
            <div class="col-md-4">
            </div>
            <div class= "col-md-4"> <br>
                <div class="card">
                    <div class="card-header">
                       Registrarse
                    </div>
                    <div class="card-body">
                      <form action="validar2.php" method= "post"><br>
                      <div class="form-check"> 
                            <label class="form-check-label" for="flexRadioDefault1">
                              Administrador
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="ad">
                          </div>
                          <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Usuario
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="us" >
                          </div> <br>
                        Nombre de usuario: <input class="form-control border-success" REQUIRED type="text" name="usuario" id="nameUs"><br>
                        Contraseña: <input class="form-control border-success" REQUIRED type="password"  name="contraseña" id="passUs"><br>
                        <center><button class="btn btn-success" type="submit" name=registrarse>Registrarse</button> </center>
                     </form> 
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
         </div>  
      </div>
</div>

      <br>
      <center><a class="btn btn-outline-light" href="index.php" role="button">Volver al inicio</a></center>

      
  </body>


