<?php

?>

<html lang="es">
  <head>
    <link rel="icon" type="image/png" href="img/logo-nave.ico">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medikal-HCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleapp.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/registro.css">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


  </head>
  <body>
 <!-- Header Start -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img src="img/LOGE.png" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="somos.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicio</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
       
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Registro de Usuario</h1>
                  <!--<p>Somos un grupo de jóvenes que innovamos para mejorar la calidad de vida de las personas</p> -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="registrarse-form">
          <div class="container">
            <div class="block">
              <form>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <p>*Campos Obligatorios</p>
                      <h4 class="underline">Información Personal</h4>
                    </div>
                  </div>
                  <!--
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Tipo Identificación:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbTipoId" class="form-control" autofocus="autofocus">
                        <option selected="selected" value="1">DNI - Doc. Nacional Identificación</option>
                        <option value="2">PAS - Pasaporte</option>
                      </select>
                    </div>
                  </div>
                   -->  
                    <div class="row">
                  <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Num. Identificación:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Num. Identificación">
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">*Nombres:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Apellidos y Nombre">
                    </div>
                    
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Apellidos:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Segundo Nombre">
                    </div>
                  </div>
                   <!--
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Apellido Paterno:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Apellido Paterno">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Apellido Materno:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Apellido Materno">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Fecha Nacimiento:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input class="form-control">
                    </div>
                  </div>
                   -->
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Sexo:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbSexo" class="form-control">
                        <option selected="selected" value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                    </div>

                   <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Nacionalidad:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                     
                      <input type="text" class="form-control" placeholder="Nacionalidad">
                   
                    </div>

                    <!--
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Estado Civil:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbEstadoCivil" class="form-control">
                        <option selected="selected" value="S">Soltero</option>
                        <option value="C">Casado</option>
                        <option value="D">Divorciado</option>
                        <option value="V">Viudo</option>
                        <option value="U">Unión Hecho</option>
                      </select>
                    </div>
                    -->
                  </div>
                  <div class="row"><p></p></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h4 class="underline">Información de Contacto y Residencia</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Dirección:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Teléfono:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Celular:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Celular">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Correo Electrónico:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control" placeholder="Correo Electrónico">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Nacionalidad:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Nacionalidad">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">País Residencia:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbPaisRes" class="form-control">
                        <option selected="selected" value="ECU">Ecuador</option>
                        <option value="COL">Colombia</option>
                        <option value="VEN">Venezuela</option>
                        <option value="BRA">Brasil</option>
                        <option value="BOL">Bolivia</option>
                        <option value="PER">Perú</option>
                        <option value="URU">Uruguay</option>
                        <option value="PAR">Paraguay</option>
                        <option value="CHL">Chile</option>
                        <option value="ARG">Argentina</option>
                      </select>
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Ciudad Residencia:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbCiudadRes" class="form-control">
                        <option selected="selected" value="GYE">Guayaquil</option>
                        <option value="UIO">Quito</option>
                        <option value="CUE">Cuenca</option>
                      </select>
                    </div>
                  </div>
                  <div class="row"><p></p></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h4 class="underline">Cuenta de Usuario para Acceso al Sistema</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Username:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" placeholder="Username">
                      <p class="note-form">Este será su usuario para el ingreso al sistema.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Clave:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="password" class="form-control" placeholder="Clave">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Confirmación Clave:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="password" class="form-control" placeholder="Confirmación">
                    </div>
                  </div>
                  <div class="row"><p></p></div>
                  <div class="row">
                    <div class="col-md-10 col-sm-10"></div>
                    <div class="col-md-2 col-sm-2">
                     
                      <input type="submit" id="btnRegistrar" class="btn btn-app" value="Registrar" onclick="window.location='login.php';">
                      <!--<button type="submit" id="btnRegistrar" class="btn btn-app">Registrar</button>!-->
                      <!--button type="submit" class="btn btn-primary" id="signup_button" data-disable-with="Creating account&hellip;">Create an account</button> !-->
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </section>
                  
        <!-- Call to action Start -->
      <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>Experiencia de Usuario.</h2>
              <p>Ver las experiencia de nuestro usuarios nos da ese empujon a seguir actualizando nuestros contenidos, no es solo una pagina es un sitio pensado en tí.</p>
              <a class="btn btn-default btn-call-to-action" href="#" >Ver Historias</a>
            </div>
          </div>
        </div>
      </div>
    </section>
        
    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="somos.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicio</a></li>
                <li><a href="contact.php">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
