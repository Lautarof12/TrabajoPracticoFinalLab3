<?php include("dbTareas2.php");


$sql= 'SELECT * FROM  tareas';
$sentencia= $pdo->prepare($sql);
$resCarreras=$pdo->prepare($sql);
$sentencia -> execute();
$resCarreras -> execute();
$resultado = $sentencia -> fetchAll();

$articulos_x_pagina= 5;

$total_articulos_db=$sentencia-> rowCount();

$paginas= $total_articulos_db/5;
$paginas = ceil($paginas);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tareas a realizar</title>
    <body background="../assets/imagenes/fondo1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">

        <h1 class="text-success">Tareas solicitadas por los vecinos</h1><br>


        <br>
        <?php if(!$_GET){
          header('Location: verTareas.php?pagina=1');
          }

          $iniciar= ($_GET['pagina']-1)*$articulos_x_pagina;

          $sql_articulos= "SELECT * from tareas limit :inicar, :narticulos";
          $sentencia_articulos= $pdo->prepare($sql_articulos);
          $sentencia_articulos->bindParam(':inicar', $iniciar, PDO:: PARAM_INT);
          $sentencia_articulos->bindParam(':narticulos', $articulos_x_pagina, PDO:: PARAM_INT);
          $sentencia_articulos ->execute();
          $resultado_articulos = $sentencia_articulos->fetchAll();

          ?>

        <?php foreach ($resultado_articulos as $articulo) :?>

        <div class="alert alert-info" role="alert">

            <p style="text-align:left">
              <?php echo 'Tarea: '.$articulo ['tarea'];?> 
              <br> Dirección: <?php echo $articulo ['direccion'];?>
              <br> <?php echo "Numero de tarea: ".$articulo['id'];?>
            </p>  
                      

        </div>
        <?php endforeach ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item
                <?php echo $_GET['pagina']<=1 ?'disabled':''?>">
                <a class="page-link" 
                    href="verTareas.php?pagina=<?php echo $_GET['pagina']-1?>">
                    Previous
                  </a>
                </li>

                <?php for($i=0; $i<$paginas; $i++):?>

                <li class="page-item ">
                  <a class="page-link" href="verTareas.php?pagina=<?php echo $i+1 ?>">
                    <?php echo $i+1?>
                  </a>
               </li>

                <?php endfor?>
                <li class="page-item <?php echo $_GET['pagina']>=$paginas ?'disabled':''?>"><a class="page-link" href="verTareas.php?pagina=<?php echo $_GET['pagina']+1?>">Next</a></li>
            </ul>
            <h6>Pagina: <?php echo $_GET['pagina'] ?></h6>
        </nav>
        <div class="boton">
            <center><a href="../homeAdmin.php" class="btn btn-outline-danger" role="button" data-bs-toggle="button" aria-pressed="true" name="cierre">Volver atras</a> </center>
        </div>
    </div>

  </body>
</html>