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
    <link rel="stylesheet" href="/css/examlab.css">

    <!-- Js -->
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
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
              <h1>Informe de Exámenes de Laboratorio</h1>
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

    <!-- Examenes Laboratorio Form Start -->
    <section id="examen-form">
      <div class="container">
        <div class="block">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <h5>Información Resumida de los Últimos Exámenes de Laboratorio del Usuario</h5>
            </div>
          </div>
          <form action="HCE-Main.php" method="POST">
              <table id="examen-list">
                <tr>
                  <th class="col-center">Fecha del Análisis</th>
                  <th class="col-left">Tipo de Examen</th>
                  <th class="col-left">Institución Responsable</th>
                  <th class="col-left">Médico Solicitante</th>
                  <th class="col-center">Detalle</th>
                </tr>
                <tr>
                  <td class="col-center">04/01/2018</td>
                  <td class="col-left">Hemograma Completo</td>
                  <td class="col-left">Hospital Luis Vernaza</td>
                  <td class="col-left">Dr. Johnny Cabezas</td>
                  <td class="col-center"><input type="button" id="btnDetalle1" class="btn-grip" value="..."></td>
                </tr>
                <tr>
                  <td class="col-center">20/12/2017</td>
                  <td class="col-left">Examen Cultivo Amigdalas</td>
                  <td class="col-left">Hospital Luis Vernaza</td>
                  <td class="col-left">Dr. Marco Vintimilla</td>
                  <td class="col-center"><input type="button" id="btnDetalle2" class="btn-grip" value="..."></td>
                </tr>
                <tr>
                  <td class="col-center">05/02/2017</td>
                  <td class="col-left">Perfil Lípido y Tiroide</td>
                  <td class="col-left">INTERLAB S.A.</td>
                  <td class="col-left">Dr. Marco Vintimilla</td>
                  <td class="col-center"><input type="button" id="btnDetalle3" class="btn-grip" value="..."></td>
                </tr>
                <tr>
                  <td class="col-center">15/10/2016</td>
                  <td class="col-left">Resonancia Magnética</td>
                  <td class="col-left">CERID S.A.</td>
                  <td class="col-left">Dr. Héctor Carrillo</td>
                  <td class="col-center"><input type="button" id="btnDetalle4" class="btn-grip" value="..."></td>
                </tr>
              </table>

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
