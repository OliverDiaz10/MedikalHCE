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
              <h1>Informe Resumido de Historia Clínica</h1>
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
    <section id="historia-form">
      <div class="container">
        <div class="block">
          <form action="HCE-Main.php" method="POST">
            <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4 class="underline">Información Personal</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Identificación:</label>
                </div>
                <div class="col-md-1 col-sm-1">
                  <input type="text" class="form-control" value="DNI" disabled>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="0919393256" disabled>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Apellidos:</label>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="DIAZ" disabled>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="MOSQUERA" disabled>
                </div>
                <div class="col-md-1 col-sm-1"><p></p></div>
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Fecha Nacimiento:</label>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="01/02/1980" disabled>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Nombres:</label>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="OLIVER" disabled>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="MEDARDO" disabled>
                </div>
                <div class="col-md-1 col-sm-1"><p></p></div>
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Sexo:</label>
                </div>
                <div class="col-md-2 col-sm-2">
                  <input type="text" class="form-control" value="MASCULINO" disabled>
                </div>
              </div>
              <div class="row"><p></p></div>
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <h4 class="underline">Resumen Clínico</h4>
                </div>
                <div class="col-md-5 col-sm-5">
                  <h4 class="underline">Resumen Signos Vitales</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Enfermedades más Importantes:</label>
                </div>
                <div class="col-md-5 col-sm-5">
                  <textarea class="form-control-area" rows="3" disabled>Amigdalitis / Faringitis.  Estrés Post-traumático</textarea>
                </div>
                <div class="col-md-1 col-sm-1"><br><br><p style="font-size: 12px">Últ.3 Meses</p></div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <label class="form-label">Temp. °C</label>
                  <br><p style="font-size: 12px">37°</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <label class="form-label">Presión</label>
                  <br><p style="font-size: 12px">110/90</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <label class="form-label">Pulso</label>
                  <br><p style="font-size: 12px">80 p/m</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <label class="form-label">Peso</label>
                  <br><p style="font-size: 12px">75Kg</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Diagnósticos Recientes:</label>
                </div>
                <div class="col-md-5 col-sm-5">
                  <textarea class="form-control-area" rows="3" disabled>Faringitis crónica con secreción.  Realizar examen de cultivo para determinar antibiótico requerido.</textarea>
                </div>
                <div class="col-md-1 col-sm-1"><br><p style="font-size: 12px">Últ.6 Meses</p></div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">36°</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">115/95</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">70 p/m</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">73Kg</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Planes de Tratamiento Recientes:</label>
                </div>
                <div class="col-md-5 col-sm-5">
                  <textarea class="form-control-area" rows="3" disabled>- Colocación de Ampolla de Larga Duración, más antiflamatorio y expectorante por 5 días. - Antibiótico y desinflamatorio por 5 días.</textarea>
                </div>
                <div class="col-md-1 col-sm-1"><br><p style="font-size: 12px">Último Año</p></div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">36°</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">110/85</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">72 p/m</p>
                </div>
                <div class="col-md-1 col-sm-1" style="text-align: center">
                  <br><p style="font-size: 12px">72Kg</p>
                </div>
              </div>
              <div class="row"><p></p></div>
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4 class="underline">Referencias Relevantes</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Prescripciones:</label>
                </div>
                <div class="col-md-8 col-sm-8">
                  <textarea class="form-control-area" rows="3" disabled>Sin problema de alergias a fármacos</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Antecedentes Personales:</label>
                </div>
                <div class="col-md-8 col-sm-8">
                  <textarea class="form-control-area" rows="3" disabled>Accidente de tránsito en año 2008.  Provocación de Estrés post-traumático complejo.  Exámenes de Imagen no evidenciaron trauma craneoencefálico.</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label">Antecedentes Familiares:</label>
                </div>
                <div class="col-md-8 col-sm-8">
                  <textarea class="form-control-area" rows="3" disabled>Padres, hermanos y familiares directos no presentan enfermedades congénitas o de alto riesgo.</textarea>
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
