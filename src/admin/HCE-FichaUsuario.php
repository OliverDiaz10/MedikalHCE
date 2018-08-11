<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");
if (mVerificaSesion() != 1){
    header('location:/fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="icon" type="image/png" href="/img/logo-nave.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medikal-HCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styleapp.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/registro.css">

    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/min/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="/js/google-map-init.js"></script>
    <script src="/js/main.js"></script>
  </head>
  <body>
        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="block">
                  <h1>Ficha de Usuario</h1>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="block">
                  <div><?php echo "<h5 style='text-align: right; color:white'>Usuario: ".$pUserName."</h5>"; ?></div>
                  <div style="text-align: right; padding_right:10px"><a href="/logout.php" style="color:white">Cerrar Sesión</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Ficha Usuario Start -->
        <section id="registrarse-form">
          <div class="container">
            <div class="block">
              <form action="HCE-Main.php" method="POST">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <p>*Campos Obligatorios</p>
                      <h4 class="underline">Información Personal</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Tipo Identificación:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbTipoId" class="form-control" autofocus="autofocus">
                        <option selected="selected" value="1" disabled="disabled">DNI - Doc. Nacional Identificación</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Num. Identificación:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="0908045453" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Primer Nombre:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="Johnny" disabled="disabled">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Segundo Nombre:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="Andrés" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Apellido Paterno:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="Calderón" disabled="disabled">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Apellido Materno:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="Ruiz" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Fecha Nacimiento:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="14/02/1990" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Sexo:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbSexo" class="form-control">
                        <option selected="selected" value="M" disabled="disabled">Masculino</option>
                      </select>
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Estado Civil:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbEstadoCivil" class="form-control">
                        <option selected="selected" value="S" disabled="disabled">Soltero</option>
                      </select>
                    </div>
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
                      <input type="text" class="form-control" value="Sauces 3" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Teléfono:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="042125383" disabled="disabled">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Celular:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="0992345871" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Correo Electrónico:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="email" class="form-control" value="jcalderon@hotmail.com" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Nacionalidad:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="text" class="form-control" value="Ecuatoriana" disabled="disabled">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">País Residencia:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbPaisRes" class="form-control">
                        <option selected="selected" value="ECU" disabled="disabled">Ecuador</option>
                      </select>
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">Ciudad Residencia:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <select name="cmbCiudadRes" class="form-control">
                        <option selected="selected" value="GYE" disabled="disabled">Guayaquil</option>
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
                      <input type="text" class="form-control" value="jcalderon" disabled="disabled">
                      <p class="note-form">Este será su usuario para el ingreso al sistema.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Clave:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="password" class="form-control" disabled="disabled">
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label">* Confirmación Clave:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <input type="password" class="form-control" disabled="disabled">
                    </div>
                  </div>

                  <div class="row"><p></p></div>
                  <div class="row">
                    <div class="col-md-10 col-sm-10"></div>
                    <div class="col-md-2 col-sm-2">
                      <button class="btn btn-app">Regresar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>

<!-- Call to action Start -->
    <section id="global-header">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"><p style="color:white">Derechos Reservados MedikalHCE©</p></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
      </div>
    </section>
  </body>
</html>
