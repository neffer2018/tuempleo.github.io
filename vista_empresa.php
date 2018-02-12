<?php
session_start();
if (empty($_SESSION['id_empresa'])) {
  header("location:index.php");
}

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
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="fa">Tu Empleo</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="fa fa-user-o">Areas</span>
              </a>
            </li>
            
            <li class="nav-item dropdown">
              <?php if (!empty($_SESSION['id_empresa'])) {
              echo "<a class='nav-link dropdown-toggle' data-toggle='dropdown' aria-haspopup=true aria-expanded=false>Sesion</a>";
              echo "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
              echo " <a class='dropdown-item' href=php/sesion_destroy.php>cerrar</a>";
              echo "</div>";}?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 <br>
  <div class="col"><p class="h1 offset-5">Areas</p></div>
    <br>
<div class="container col-sm-7 col-xs-6 col-md-9">
  <div class="row">
     
    <div class=" cont col-12 col-md-4 ">
      <img  src="img/adsi.jpg" class="rounded right img-thumbnail image" alt="Adsi" width="350" height="300">
      <a href="vista_aprendizes_adsi.php">
          <div class="middle"> 
            <div class="text">
              Adsi
            </div>
          </div>
      </a>
    </div>

    <div class=" cont col-12 col-md-4 ">
      <img src="img/mantenimiento.jpg" class="rounded right img-thumbnail image" alt="..." width="350" height="300">
        <a href="vista_aprendizes_mantenimiento.php">
          <div class="middle">
            <div class="text">
              Mantenimiento
            </div>
          </div>
        </a>
      </div>

    <div class=" cont col-12 col-md-4">
      <img src="img/redes.jpg" class="rounded right img-thumbnail image" alt="..." width="350" height="300">
        <a href="vista_aprendizes_redes.php"><div class="middle">
            <div class="text">
              Redes
            </div>
          </div>
        </a>
      </div>
  </div>
</div>

 <div style="height: 220px" class="container">
    
  </div>

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
