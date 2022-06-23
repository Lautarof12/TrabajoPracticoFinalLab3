<?php include("dbTareas.php");?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style4.css">
<title>Agregar tareas</title>
<body background="../assets/imagenes/fondo2.jpg">
<br><br>
<div class="container">
  </div>
         <div class="row">
            <div class="col-md-4"></div>
            <div class= "col-md-4"> <br>
                <div class="card">
                    <div class="card-header">
                       Agregar tarea
                    </div>
                    <div class="card-body">
                      <form action="validarTarea.php" method= "post">
                      <div class="form-check"> 
                            <label class="form-check-label" for="flexRadioDefault1">
                              Cortar el pasto
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="pasto">
                            </div>
                          <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Limpiar la pileta
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="pileta" >
                          </div> 
                          <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Recolectar residuos
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="residuos" >
                          </div><br>
                          Dirección:  <input class="form-control border-success" REQUIRED type="text" name="task" placeholder="(Manzana - Casa)"><br>
                          <center><button class="btn btn-success" type="submit" name=agregar>Agregar</button> </center> <br>
                          <center><a class="btn btn-outline-success" href="../homeUsuario.php" role="button">Volver a Home</a></center>
                     </form> 
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
         </div>  
      </div>
</div>

