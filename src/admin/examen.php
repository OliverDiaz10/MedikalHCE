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
              <h1>Administración Exámen Laboratorio</h1>
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
    <section id="examen-form">
      <div class="container">
        <div class="block">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <h4 class="underline">Registro de Exámen Laboratorio</h4>
            </div>
          </div>

<!--************************************************************************************-->
<!--Consulta de Datos de la Tabla-->
<!--Cabecera de la Tabla-->
          <form action="../../admin.php" method="POST">
              <table id="examen-list">
                <tr>
     <th>ID </th>
        <th>Codigo Pers.</th>
        <th>Codigo Inst.</th>
        <th>Codigo Med.</th>
        <th>Fecha Ex.</th>
        <th>Tipo Ex.</th>
        <th>Consideraciones Exa.</th>
        <th>Explicacion Resul.</th>
        <th class="col-center"><a href="examenCreate.php" style="color:white">Crear</a></th>
           
            
                </tr>
<!--************************************************************************************-->
<!--Detalle de la Tabla-->
            <?php
             include_once("CExamenCollector.php");
    $id = 1;
    $lobExamenCollector = new CExamenCollector();
    foreach ($lobExamenCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td class='col_left_10'>".$r->getNumero_examen()."</td>";
        echo "    <td class='col_left_20'>".$r->getCodigo_Persona()."</td>";
        echo "    <td class='col_left_40'>".$r->getCodigo_institucion()."</td>";
        echo "    <td class='col_left_10'>".$r->getCodigo_medico()."</td>";
        echo "    <td class='col_left_10'>".$r->getFecha_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getTipo_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getConsideraciones_examen()."</td>";
        echo "    <td class='col_left_10'>".$r->getExplicacion_resultado()."</td>";

echo "    <td><a href='examenEdit.php?id=".$r->getNumero_examen()."'>Editar</a> <a href='examenDML.php?id=".$r->getNumero_examen()."&tipoOperacion=3'>Eliminar</a></td>";
        echo "</tr>";
              }
            ?>
              </table>
<!--************************************************************************************-->

              <br><br><br>
              <div class="row"><p></p></div>
              <div class="row">
                <div class="col-md-9 col-sm-9"></div>
                <div class="col-md-2 col-sm-2">
                  <button class="btn btn-app">Menú Administración</button>
                </div>
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
