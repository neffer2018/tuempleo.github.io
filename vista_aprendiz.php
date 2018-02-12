<?php
session_start();
if (empty($_SESSION['id'] && $_SESSION['nom'])) {
  header("location:index.php");
}

function conteo(){
  $con = mysqli_connect("localhost","root","","empleo");

    if ($con) {
    $cont = "SELECT count(*) from hoja_de_vida WHERE hoja_de_vida.id_apre = $_SESSION[id]"; 
    $conteo = mysqli_query($con,$cont);
    $row = mysqli_fetch_array($conteo);
    return $row[0];
      }
    }
  $numero = conteo();       
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tu Empleo</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

     <!-- Navigation -->
    <nav class="navbar navbar-toggleable navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="vista_aprendiz.php"><span class="fa">Tu Empleo</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="fa fa-user-o"> Perfil</span>
              </a>
            </li>
            
            <li class="nav-item dropdown">
              <?php if (!empty($_SESSION['id'] && $_SESSION['nom'])) {
              echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' aria-haspopup=true aria-expanded=false>$_SESSION[nom]</a>";
              echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
              echo " <a class='dropdown-item' href=php/sesion_destroy.php>cerrar</a>";
              echo "</div>";}?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br><br><br>
  <div class="container col-md-9">
      <div class="row offset-1">
          <div class="col-12 col-md-6 right">
            <p class="h1 offset-3">Hoja De vida</p>

            <div class="vista">
              <br><br>
          <!-- formulario de envio de hoja de vida -->
            <form enctype="multipart/form-data" action="php/guardar_hoja_de_vida.php" method="post">
                <div class="form-group">
                   <label class="offset-4 h4" for="exampleInputFile">Seleccionar</label>
                   <br><br><br>
                   <input type="file" name="hoja_de_vida" id="hoja_de_vida" class="form-control-file offset-1" aria-decribedby="fileHelp">
                   <small class="form-text text-muted offset-2">Archivo PDF</small>
                </div>
                <br>
                <div class="form-group col-md-6 col-6 offset-3">
                    <button class="btn btn-lg btn-block btn-success">Enviar</button>
                </div>
                
                <?php
                  if ($numero==1) {
                    echo "<div class='form-group col-md-6 col-6 offset-3'>
                            <a class='btn btn-lg btn-block btn-success' href='ver_hoja_de_vida.php'>Ver</a>
                          </div>";
                  }
                ?>
                <?php
                  if ($numero==1) {
                    echo "<div class='form-group col-md-6 col-6 offset-3'>
                              <a class='btn btn-lg btn-block btn-success' href='php/eliminar_hoja_de_vida.php'>Eliminar</a>
                          </div>";
                  }
                ?>  
            </form>  
            </div>
          </div>

          <div class="col-12 col-md-6 right">
                <p class="h1 offset-3">Proyectos</p>
            <div class="vista">
              <br><br>
              <!-- formulario de envio de proyectos -->
              <form enctype="multipart/form-data" action="php/guardar.php" method="post">
                    <div class="form-group">
                       <label class="offset-4 h4" for="exampleInputFile">Seleccionar</label>
                       <br><br><br>
                       <input type="file" name="proyecto" class="form-control-file offset-1" aria-decribedby="fileHelp">
                       <small class="form-text text-muted offset-2">Archivo PDF</small>
                    </div>
                    <br><br>
                    <div class="form-group col-md-6 col-6 offset-3">
                        <button class="btn btn-lg btn-block btn-success" type="submit">Enviar</button>
                    </div>
                    <div class="form-group col-md-6 col-6 offset-3">
                      <a class="btn btn-lg btn-block btn-success" href="lista_proyectos.php">lista</a>
                    </div> 
              </form>
            </div>
          </div>
      </div>
  </div>

<br>
<br>
     <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/funcion.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>