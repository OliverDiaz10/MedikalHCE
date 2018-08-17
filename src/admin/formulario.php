<?php
session_start();
include_once("../lib/pllGeneral.php");
if (mVerificaSesion() != 1){
    header('location:/fault.php');
}
$pUserName = $_SESSION['SSUserName'];
$pID = $_SESSION["SSIdPersona"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" type="image/png" href="/img/logo-nave.ico">
    <meta charset="utf-8">
    <title>Medikal-HCE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styleapp.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/historiaresum.css">

    <!-- Js -->
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/min/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.js"></script>
</head>
<body>
    
    <section id="historia-form">
      <div class="container">
        <div class="block">
          <form method="POST">
            <div class="form-group">
              <?php
                 include_once("CAtencionConsultasCollector.php");
                 $id = $_GET["id"];
                 $objeto = new CAtencionConsultasCollector();
                 $array = $objeto->selectPK($id);
                 $diag = $array->getDiagnostico();
                 $trat = $array->getTratamiento();
                 $pree = $array->getPrescripcion();
              ?>
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <h4 class="underline">Detalle de la Consulta</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1 col-sm-1">
                  <label class="form-label">Diagnóstico:</label>
                </div>
                <div class="col-md-3 col-sm-3">
                  <textarea class='form-control-area' rows='2' disabled><?php echo $diag ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1 col-sm-1">
                  <label class="form-label">Tratamiento:</label>
                </div>
                <div class="col-md-3 col-sm-3">
                  <textarea class='form-control-area' rows='2' disabled><?php echo $trat ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1 col-sm-1">
                  <label class="form-label">Prescripción:</label>
                </div>
                <div class="col-md-3 col-sm-3">
                  <textarea class='form-control-area' rows='2' disabled><?php echo $pree ?></textarea>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
</body>
</html>