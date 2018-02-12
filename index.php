<?php
session_start();
if (!empty($_SESSION['id'])) {
  header("location:vista_aprendiz.php");
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Tu Empleo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <?php if (!empty($_SESSION['id'])) {echo "<a class='nav-link' href=php/sesion_destroy.php>cerrar</a>";}?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">En nuestra pagina</h1>
          <h2 class="display-4 text-white">Gestiona mas rapido tu opcion de empleo</h2>
        </div>
      </div>
    </header>
<br>

<!-- tabs dinamico aprendiz y empresa -->
<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Empresa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Aprendiz</a>
    </li>
  </ul>

  <div class="tab-content">

<!--   -->
    <div class="tab-pane active" id="home" role="tabpanel">
        <br>
        <form action="php/login_empresa.php" method="post">
          <div class="row">
            <div class="form-group col-md-5">
                <label class="control-label" for="nit"><p class="h4">No. de Nit:</p></label>
                <input type="text" name="nit_empresa" class="form-control" id="nit" required="required">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-5">
              <label class="control-label" for="contrasena"><p class="h4">Contraseña:</p></label>
              <input type="text" name="cont_empresa" class="form-control" id="pass" required="required">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group col-md-5 offset-1">
              <div class="form-group col-offset-12">
                <!-- boton iniciar sesion empresa -->
                <button class="btn btn-primary" type="">Iniciar Sesion</button>
                <!-- boton registar empresa -->
                <a href=""  data-toggle="modal" data-target="#registro_emp"><button class="btn btn-primary">Registrarse</button></a>
              </div>
            </div>
          </div>
        </form>
    </div>
<!-- Aprendiz  -->
    <div class="tab-pane" id="profile" role="tabpanel">
      <br>
    <form action="php/login.php" method="post">

        <div class="row">
          <div class="form-group col-md-5">
              <label class="control-label" for="nit"><p class="h4">N. Identificacion:</p></label>
              <input type="text" name="identificacion" class="form-control" id="nit" required="required">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-5">
            <label class="control-label" for="contrasena"><p class="h4">Contraseña:</p></label>
            <input type="text" name="contrasena" class="form-control" id="pass">
          </div>
        </div>
<br>
        <div class="row">
          <div class="form-group col-md-5 offset-1">
            <div class="form-group col-offset-12">
              <!-- boton iniciar sesion usuario -->
              <button class="btn btn-primary" type="">Iniciar Sesion</button>
              <!-- boton registro usuario usuario -->
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registro_apre" type="">Registrarse</a>
            </div>
          </div>
        </div>
    </form>
        </div>
    </div>
  </div>
</div>





    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/ser2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <p class="h5">En nuestra pagina sabemos que el fundamento de cada empresa es el talento humano.
                Por eso innovamos para hacer los procesos de selección más rápidos y efectivos</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/ser1.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <p class="h5">Encuentre las personas que mejor se adaptan al perfil que esta buscando.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/ser3.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 order-1">
            <div class="p-5">
              <p class="h5">Herramientas optimizadas para reducir el tiempo de la selección.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>




<!-- The Modal bd-example-modal-lg modal-lg -->
<!-- ventana modal de registro empresa -->

      <div class="modal fade bd-example-modal-lg" id="registro_emp">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content ">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Nueva Empresa</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <form method="post" action="php/registrar_empresa.php">
                  <div class="form-group">
                    
                    <div class="form-group row">
                       <label class="col-md-1 col-form-label">Tipo:</label>
                       <div class="col-md-6">
                        <select name="tipo_emp" class="form-control">
                          <option  name="natural">Persona natural</option>
                          <option name="juridica">Persona juridica</option>
                        </select>
                      </div>
                    </div>
                      
                      <div class="form-group row">
                        <label class="col-md-1 col-form-label">NIT:</label>
                        <div class="col-md-6">
                          <input class="form-control" placeholder="10 Digitos" type="text" name="nit" id="nit" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">Razon social:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="razon_social" id="razon_social"/>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">Representante legal:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="repre_legal" id="repre_legal"/>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">E-mail:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="email" id="email"/>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">Telefono:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="telefono" id="telefono"/>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">Direccion:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="direccion" id="direccion"/>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-8 col-form-label">Contrasena:</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="contrasena" id="contrasena"/>
                        </div>
                      </div>
                      <div class="form-group row offset-5 ">
                          <button class="btn btn-primary" type="submit">Enviar</button>
                      </div>
                     
                  </div>
              </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
  <!-- fin de modal registro -->
  
<!-- modal de registro aprendiz -->

<div class="modal fade" id="registro_apre">
    <div class="modal-dialog ">
        <div class="modal-content ">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Nuevo Aprendiz</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form action="php/registro.php" method="post">
                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Nombre:</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="nombre_apre" id="nombre_apre"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Apellido:</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="apellido_apre" id="apellido_apre"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">N. CC:</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="ide_apre" id="ide_apre"/>
                    <small class="form-text text-muted">Identificacion</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Area:</label>
                  <div class="col-md-9">
                    <select name="area_apre" class="form-control">
                      <option name="adsi" value="adsi">Adsi</option>
                      <option name="mantenimiento" value="manrenimiento">Mantenimiento</option>
                      <option name="redes" value="redes">Redes</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Correo:</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="correo_apre" id="correo_apre"/>
                    <small class="form-text text-muted">ejemplo@misena.edu.co</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-2 col-form-label">Contraseña:</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="cont_apre" id="cont_apre"/>
                  </div>
                </div>

                <div class="form-group row offset-5 ">
                   <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          
        </div>
    </div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/funcion.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>