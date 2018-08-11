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
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="///ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
              <h1>Registro de Emergencias</h1>
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

<!-- contact form start -->
    <section id="registrarse-form">
      <div class="container">
        <div class="block">
          <form action="HCE-Main.php" method="POST">
            <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4 class="underline">Historial de Emergencias</h4>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Fecha:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">1 de Enero/2018</label>
              </div>
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Tipo de Emergencia:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">Femur Roto</label>
              </div>
            </div>
            <div class="row">
              <br>
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Descripcion:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <textarea name="comentarios" rows="5" cols="100">El pasiente se quebro las manos</textarea>
              </div>
            </div>
            <div class="row"><p></p></div>
            <div class="row">
              <div class="col-md-12 col-sm-12"></div>
            </div>
           
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Fecha:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">1 de Enero/2018</label>
              </div>

              <div class="col-md-2 col-sm-2">
                <label class="form-label">Tipo de Emergencia:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">Femur Roto</label>
              </div>
            </div>
            
            <div class="row">
              <br>
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Descripcion:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <textarea name="comentarios" rows="5" cols="100">El pasiente se quebro las manos</textarea>
              </div>
            </div>

            <div class="row"><p></p></div>
            <div class="row">
              <div class="col-md-12 col-sm-12"></div>
            </div>

            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Fecha:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">1 de Enero/2018</label>
              </div>
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Tipo de Emergencia:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label">Femur Roto</label>
              </div>
            </div>
            <div class="row">
              <br>
              <div class="col-md-2 col-sm-2">
                <label class="form-label">Descripcion:</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <textarea name="comentarios" rows="5" cols="100">El pasiente se quebro las manos</textarea>
              </div>
            </div>
            
            <div class="row"><p></p></div>
            <div class="row">
              <div class="col-md-10 col-sm-10"></div>
              <div class="col-md-2 col-sm-2">
                <button class="btn btn-app">Regresar</button>
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
