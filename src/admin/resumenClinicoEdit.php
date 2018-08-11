<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:../../fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="../img/logo-nave.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medikal-HCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/styleapp.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../css/historiaresum.css">
    
    <!-- Js -->
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="..///ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/min/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/google-map-init.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
    <!-- Slider Start -->
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="block">
              <h1>MedikalHCE©</h1>
              <h1>Administración del Sistema</h1>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="block">
              <div><?php echo "<h5 style='text-align: right; color:white'>Usuario: ".$pUserName."</h5>"; ?></div>
              <div></div>
              <div style="text-align: right; padding_right:10px"><a href="../../logout.php" style="color:white">Cerrar Sesión</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Administracion Start -->
    <section id="historia-form">
      <div class="container">
        <div class="block">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <h4 class="underline">Modificar Resumen Clínico del Ciudadano</h4>
              </div>
            </div>

<!--************************************************************************************-->
<!--Consulta de Datos de la Tabla-->
<!--Cabecera de la Tabla-->
          <?php
            include_once("CResumClinicoCollector.php");
            include_once("CHcResumenClinico.php");

            $id = $_GET["id"];
            $lobResumClinicoCollector = new CResumClinicoCollector();
            $lobResumenClinico = $lobResumClinicoCollector->selectPK($id);
          ?>
          <form action="resumenClinicoDML.php?tipoOperacion=2" method="post">
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Código Persona: </label>
              </div>
              <div class="col-md-4 col-sm-4">
                <input type="text" name="txtCodigoPersona" value="<?php echo $lobResumenClinico->getCodigoPersona(); ?>" readonly style="width:20%"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Enfermedades más Importantes: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtEnfermedadesImportantes" rows="2" cols="50" style="resize:horizontal" maxlength="1000" required><?php echo $lobResumenClinico->getEnfermedadesImportantes(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Diagnósticos Recientes: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtDiagnosticosRecientes" rows="2" cols="50" style="resize:horizontal" maxlength="1000" required><?php echo $lobResumenClinico->getDiagnosticosRecientes(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Planes de Tratamiento: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtPlanesTratamiento" rows="2" cols="50" style="resize:horizontal" maxlength="1000"><?php echo $lobResumenClinico->getPlanesTratamiento(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Prescripciones: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtPrescripciones" rows="2" cols="50" style="resize:horizontal" maxlength="1000"><?php echo $lobResumenClinico->getPrescripciones(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Antecedentes Personales: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtAntecedentesPersonales" rows="2" cols="50" style="resize:horizontal" maxlength="1000"><?php echo $lobResumenClinico->getAntecedentesPersonales(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2">
                <label>Antecedentes Familiares: </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <textarea name="txtAntecedentesFamiliares" rows="2" cols="50" style="resize:horizontal" maxlength="1000"><?php echo $lobResumenClinico->getAntecedentesFamiliares(); ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <button type="submit" class="btn btn-app">Actualizar</button> <a href="resumenClinico.php"> Cancelar </a><br>
              </div>
            </div>
          </form>
<!--************************************************************************************-->
        </div>
      </div><br><br>
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
