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
    include_once("CPersonaCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $numero_identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
            $fechaNacimiento = $_POST["txtFechaNacimiento"];
                    
            $lobPersonaCollector = new CPersonaCollector();
            $lobPersonaCollector->insertREC($numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $fechaNacimiento);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){

            $codigo_persona = $_POST["txtCodigoPersona"];
            $numero_identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
            $fechaNacimiento = $_POST["txtFechaNacimiento"];
            
            $lobPersonaCollector = new CPersonaCollector();
            $lobPersonaCollector->updateALL($codigo_persona,$numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $fechaNacimiento);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobPersonaCollector = new CPersonaCollector();
                $lobPersonaCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="persona.php">Volver Administración de Personas</a></div>
</body>
</html>
