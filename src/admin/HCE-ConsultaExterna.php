<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");
if (mVerificaSesion() != 1){
    header('location:/fault.php');
}
$pUserName = $_SESSION['SSUserName'];
$pID = $_SESSION["SSIdPersona"];
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

    <link rel="stylesheet" href="/css/demo.css">

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
              <h1>Informe de Consulta Externa</h1>
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
          <form action="HCE-Main.php" method="POST">
              <div class="row"></div>
              <table id="examen-list" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                  <th class="col-center">Fecha Consulta</th>
                  <th class="col-left">Unidad Médica</th>
                  <th class="col-left">Especialidad</th>
                  <th class="col-left">Médico Tratante</th>
                  <th class="col-center">Detalle</th>
                </tr>
                  </thead>
                  <tbody>
                <?php
                  include_once("CAtencionConsultasCollector.php");
                  include_once("CPersonaCollector.php");
                  include_once("CRegIstitucionCollector.php");
                  $objeto = new CAtencionConsultasCollector();
                  $objetoP = new CPersonaCollector();
                  $objetoI = new CRegIstitucionCollector();
                  $array = $objeto->selectID($pID);
                  foreach($array as $c){
                      echo "<tr>";
                      echo "<td>". $c->getFechaAtencion() . "</td>";
                      $inst = $objetoI->selectPK($c->getCodigoInstitucion());
                      echo "<td>". $inst->getNombre()  . "</td>";
                      echo "<td>". $c->getEspecialidad() . "</td>";
                      $perso = $objetoP->selectPK($c->getCodigoMedico());
                      echo "<td>". $perso->getNombres() . " ". $perso->getApellidos()."</td>";
                      $id = $c->getNumeroAtencion(); 
                      #$id = $c->getIdServicioImagen();
                      #echo "<td><a href='editarIServicioPa.php?id=$id'><button class='material-icons button2 edit'>edit</button></a></td>";
                      #echo "<td><a href='eliminarIServicio.php?id=$id'><button class='material-icons button2 delete'>delete</button></a></td>";
                      echo "<td class='col-center'><a href='#' onclick=window.open('formulario.php?id=$id','ventana','top=200,left=460,width=500,height=330,scrollbars=NO,menubar=NO,resizable=NO,titlebar=NO,status=NO');return false>"."<input type='button' id='btnDetalle1' class='btn-grip' value='...' data-type='zoomin'></a></td>";
                     # echo "<a href='ventana.php' target='_blank' onClick='window.open(this.href, this.target, 'width=XXX,height=YYY'); return false;'>"."Click Aquí"."</a>";
                      echo "</tr>";
                  }
                ?>
               
                  </tbody>
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
  <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
  <script src="js/demo.js"></script>
</body>
</html>
