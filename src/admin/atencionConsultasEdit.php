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
    <link rel="stylesheet" href="../../css/examlab.css">
    
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
              <div style="text-align: right; padding_right:10px"><a href="../logout.php" style="color:white">Cerrar Sesión</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Administracion Start -->
    <section id="examen-form">
      <div class="container">
        <div class="block">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <h4 class="underline">Modificación de Registros de Consultas</h4>
            </div>
          </div>

<!--************************************************************************************-->
<!--Consulta de Datos de la Tabla-->
<!--Cabecera de la Tabla-->   
    <?php
        include_once("CAtencionConsultasCollector.php");
        include_once("CHcAtencionConsultas.php");
        
        $id = $_GET["id"];
        $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
        $lobAtencionConsultas = $lobAtencionConsultasCollector->selectPK($id);
    ?>
    
    <form action="atencionConsultasDML.php?tipoOperacion=2" method="post">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Núm. de Atención: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtNumAtencion" value="<?php echo $lobAtencionConsultas->getNumeroAtencion(); ?>" readonly><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Código Persona: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtCodPersona" value="<?php echo $lobAtencionConsultas->getCodigoPersona(); ?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Código U. Médica: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtCodUMedica" value="<?php echo $lobAtencionConsultas->getCodigoInstitucion(); ?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Código Médico: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtCodMedico" value="<?php echo $lobAtencionConsultas->getCodigoMedico(); ?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Fecha Atención: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtFechaAtencion" value="<?php echo $lobAtencionConsultas->getFechaAtencion(); ?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Especialidad: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtEspecialidad" value="<?php echo $lobAtencionConsultas->getEspecialidad(); ?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <label>Diagnóstico: </label>
            </div>
            <div class="col-md-4 col-sm-4">
                <input type="text" name="txtDiagnostico" value="<?php echo $lobAtencionConsultas->getDiagnostico(); ?>"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <button type="submit" class="btn btn-app">Actualizar</button> <a href="atencionConsultas.php">Cancelar</a>
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