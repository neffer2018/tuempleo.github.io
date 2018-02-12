<?php 
session_start();
if (empty($_SESSION['id_empresa'])) {
  header("location:index.php");
}

$conec = mysqli_connect("localhost","root","","empleo");
  if ($conec) {
      $qry = "SELECT aprendiz.id_apre as id,aprendiz.nombre as nombre,aprendiz.apellido as apellido,aprendiz.area,portafoleo.nombre_archivo as nom_archivo,hoja_de_vida.nombre_hoja
      FROM aprendiz,portafoleo,hoja_de_vida 
      WHERE aprendiz.id_apre = portafoleo.id_apre and aprendiz.id_apre = hoja_de_vida.id_apre and aprendiz.area = 'mantenimiento'";
      $res = mysqli_query($conec,$qry);

    }else{
    echo "NO sirves para esto !RETIRATE!";
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
     <link href="css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="vista_empresa.php"><span class="fa fa-arrow-left fa-lg"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="fa fa-user-o"> Perfil</span>
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

<div class="container">
    <br><br><br>
    <div class="row">
      <p class="h3">Lista De Proyectos</p>
    </div>
    <br><br>
    <div class="table-responsive">
  		<table class="table table-striped table-hover table-bordered">
        <thead class="thead-inverse">
         <tr>
           <th># Aprendiz</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Proyecto</th>
           <th>Descargar</th>
         </tr>
        </thead>
         <tbody>
           <?php foreach ($res as $datos):?>
           <tr>
             <td><?php echo $datos['id']; ?></td>
             <td><?php echo $datos['nombre']; ?></td>
             <td><?php echo $datos['apellido']; ?></td>
             <td><?php echo $datos['nom_archivo']; ?></td>
             <td><a href="php/download.php?nomA=<?php echo $datos['nom_archivo']; ?>" ><span class="fa fa-arrow-down"> Download</span></a></td>
           </tr>
           <?php endforeach; ?>
         </tbody>
      </table>
    </div>
	</div>

   <div style="height: 300px" class="container">
    
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
