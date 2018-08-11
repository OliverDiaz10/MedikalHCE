<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/admin/CRolUsuarioCollector.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/admin/CSgRolUsuario.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

//echo "mVerificaSesion(): " . mVerificaSesion();
if (mVerificaSesion() != 1){
    header('location:/fault.php');
}
$pUserName = $_SESSION['SSUserName'];

if (isset($pUserName)){
    $lobRolUsuarioCollector = new CRolUsuarioCollector();
    //Verifica si el Usuario tiene Rol Administrador
    $pRolADM = "ADM";
    $_SESSION["SSRolADM"] = 0;
    $lobRolUsuario = $lobRolUsuarioCollector->selectPK($pUserName,$pRolADM);
    if ($lobRolUsuario->getCodigoRol() == $pRolADM)
        $_SESSION["SSRolADM"] = 1;
    
    //Verifica si el Usuario tiene Rol Ciudadano
    $pRolCIU = "CIU";
    $_SESSION["SSRolCIU"] = 0;
    $lobRolUsuario = $lobRolUsuarioCollector->selectPK($pUserName,$pRolCIU);
    if ($lobRolUsuario->getCodigoRol() == $pRolCIU)
        $_SESSION["SSRolCIU"] = 1;
}
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
              <h1>MedikalHCE©</h1>
              <h1>Menú Principal</h1>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="block">
              <div><?php echo "<h5 style='text-align: right; color:white'>Usuario: ".$pUserName."</h5>"; ?></div>
              <?php
               if ($_SESSION["SSRolADM"] == 1){
              ?>
              <div style="text-align: right; color:white; padding_right:10px"><a href="/admin.php"><img src="/img/admin.png" alt="ficha" height="30" width="30"/></a></div>
              <?php }?>
              <div></div>
              <div style="text-align: right; padding_right:10px"><a href="/logout.php" style="color:white">Cerrar Sesión</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Examenes Laboratorio Form Start -->
    <section id="registrarse-form">
      <div class="container">
        <div class="block">
          <form>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4 class="underline">Información del Usuario</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label"> Nombres:</label>
                </div>
                <div class="col-md-4 col-sm-4">
                  <label class="form-label"> Johnny Calderon</label>
                </div>

                <div class="col-md-2 col-sm-2">
                  <label class="form-label"> Correo Electrónico:</label>
                </div>
                <div class="col-md-4 col-sm-4">
                  <label class="form-label"> johnny_calderon94@gmail.com</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <label class="form-label"> Identificación: </label>
                </div>
                <div class="col-md-4 col-sm-4">
                  <label class="form-label"> 0912345678 </label>
                </div>

                <div class="col-md-2 col-sm-2">
                  <label class="form-label"> Sexo: </label>
                </div>
                <div class="col-md-4 col-sm-4">
                  <label class="form-label"> Masculino</label>
                </div>
              </div>

              <div class="row"><p></p></div>
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4 class="underline">Servicios </h4>
                </div>
              </div>

            <?php
             if ($_SESSION["SSRolCIU"] == 1){
            ?>
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <div class="image">
                    <a href="HCE-FichaUsuario.php"><img src="/img/Ficha.redimensionado.png" alt="ficha"/></a>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <div class="image">
                    <a href="HCE-HistoriaResum.php"><img src="/img/Resumido%20HC.redimensionado.png" alt="Resumido"/></a>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <div class="image">
                    <a href="HCE-ConsultaExterna.php"><img src="/img/consultaEx2.redimensionado.png" alt="Consulta"/></a>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <div class="image">
                    <a href="HCE-Emergencias.php"><img src="/img/Urgencia.redimensionado.png" alt="Urgencia"/></a>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <div class="image">
                    <a href="HCE-Laboratorio.php"><img src="/img/ExLab.redimensionado.png" alt="Examenes"/></a>
                  </div>
                </div>
              </div>
            <?php
             }else{?>
              <div class="row">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4"><h5>Servicios de Ciudadano No Habilitados...</h5></div>
                <div class="col-md-4 col-sm-4"></div>
              </div>
            <?php
             }
            ?>
            </div>
          </form>
        </div>
      </div><br><br><br><br><br>
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
