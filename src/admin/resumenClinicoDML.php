<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:../../fault.php');
}
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header>
<?php
    include_once("CResumClinicoCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoPersona = trim($_POST["txtCodigoPersona"]);
            $enfermedadesImportantes = trim($_POST["txtEnfermedadesImportantes"]);
            $diagnosticosRecientes = trim($_POST["txtDiagnosticosRecientes"]);
            $planesTratamiento = $_POST["txtPlanesTratamiento"];
            $prescripciones = $_POST["txtPrescripciones"];
            $antecedentesPersonales = $_POST["txtAntecedentesPersonales"];
            $antecedentesFamiliares = $_POST["txtAntecedentesFamiliares"];
            if (!empty($codigoPersona) && !empty($enfermedadesImportantes) && !empty($diagnosticosRecientes)){
                $lobResumClinicoCollector = new CResumClinicoCollector();
                $lobResumClinicoCollector->insertREC($codigoPersona, $enfermedadesImportantes, $diagnosticosRecientes, $planesTratamiento, $prescripciones, $antecedentesPersonales, $antecedentesFamiliares);
                echo "Registro Creado Exitosamente...";
            }else
                echo "Es Obligatorio Ingresar información válida del Resumen Clínico. No se Pudo Crear el Registro...";
        }
        if ($tipoOperacion == 2){
            $codigoPersona = trim($_POST["txtCodigoPersona"]);
            $enfermedadesImportantes = trim($_POST["txtEnfermedadesImportantes"]);
            $diagnosticosRecientes = trim($_POST["txtDiagnosticosRecientes"]);
            $planesTratamiento = $_POST["txtPlanesTratamiento"];
            $prescripciones = $_POST["txtPrescripciones"];
            $antecedentesPersonales = $_POST["txtAntecedentesPersonales"];
            $antecedentesFamiliares = $_POST["txtAntecedentesFamiliares"];
            
            if (!empty($codigoPersona) && !empty($enfermedadesImportantes) && !empty($diagnosticosRecientes)){
                $lobResumClinicoCollector = new CResumClinicoCollector();
                $lobResumClinicoCollector->updateALL($codigoPersona, $enfermedadesImportantes, $diagnosticosRecientes, $planesTratamiento, $prescripciones, $antecedentesPersonales, $antecedentesFamiliares);
                echo "Registro Actualizado Exitosamente...";
            }else
                echo "Es Obligatorio Ingresar información válida del Resumen Clínico. No se Pudo Crear el Registro...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobResumClinicoCollector = new CResumClinicoCollector();
                $lobResumClinicoCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="resumenClinico.php">Volver Administración de Registros</a></div>
</body>
</html>