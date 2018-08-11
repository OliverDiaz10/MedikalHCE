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
    include_once("CAtencionConsultasCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoPersona = $_POST["txtCodPersona"];
            $codigoInstitucion = $_POST["txtCodUMedica"];
            $codigoMedico = $_POST["txtCodMedico"];
            $fechaAtencion = $_POST["txtFechaAtencion"];
            $especialidad = $_POST["txtEspecialidad"];
            $diagnostico = $_POST["txtDiagnostico"];
         
            
            $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
            $lobAtencionConsultasCollector->insertREC($codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $especialidad, $diagnostico);
            echo "Registro de Consulta Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $numeroAtencion = $_POST["txtNumAtencion"];
            $codigoPersona = $_POST["txtCodPersona"];
            $codigoInstitucion = $_POST["txtCodUMedica"];
            $codigoMedico = $_POST["txtCodMedico"];
            $fechaAtencion = $_POST["txtFechaAtencion"];
            $especialidad = $_POST["txtEspecialidad"];
            $diagnostico = $_POST["txtDiagnostico"];
           
            
            $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
            $lobAtencionConsultasCollector->updateALL($numeroAtencion, $codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $especialidad, $diagnostico);
            echo "Registro de Consulta Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
                $lobAtencionConsultasCollector->deleteREC($id);
                echo "Registro de Consulta Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="atencionConsultas.php">Volver Administración de Registros de Consultas</a></div>
</body>
</html>
