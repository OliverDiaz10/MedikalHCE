<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:../../fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header>
<?php
    include_once("CRegAtencionEmergenciasCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoPersona = $_POST["txtCodPersona"];
            $codigoInstitucion = $_POST["txtCodInstitucion"];
            $codigoMedico = $_POST["txtCodMedico"];
            $fechaAtencion = $_POST["txtFechaAtencion"];
            $tipoEmergencia = $_POST["txtTipoEmergencia"];
            $diagnostico = $_POST["txtDiagnostico"];

            $lobRegAtencionEmergenciasCollector = new CRegAtencionEmergenciasCollector();
            $lobRegAtencionEmergenciasCollector->insertREC($codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $tipoEmergencia, $diagnostico);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
           $numeroAtencion = $_POST["txtNumeroAtencion"];
            $codigoPersona = $_POST["txtCodPersona"];
            $codigoInstitucion = $_POST["txtCodInstitucion"];
            $codigoMedico = $_POST["txtCodMedico"];
            $fechaAtencion = $_POST["txtFechaAtencion"];
            $tipoEmergencia = $_POST["txtTipoEmergencia"];
            $diagnostico = $_POST["txtDiagnostico"];
            
            $lobRegAtencionEmergenciasCollector = new CRegAtencionEmergenciasCollector();
            $lobRegAtencionEmergenciasCollector->updateALL($numeroAtencion, $codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $tipoEmergencia, $diagnostico);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
            $lobRegAtencionEmergenciasCollector = new CRegAtencionEmergenciasCollector();
                $lobRegAtencionEmergenciasCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="atencionEmergenciasRegistrarse.php">Volver Administración de Registros</a></div>
</body>
</html>
