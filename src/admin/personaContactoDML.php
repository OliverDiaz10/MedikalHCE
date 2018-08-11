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
    include_once("CPersonaContactoCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigo_persona = $_POST["txtCodigoPersona"];
            $direccion = $_POST["txtDireccion"];
            $celular = $_POST["txtCelular"];
            $correo_electronico = $_POST["txtCorreo"];
            $codigo_pais_residencia = $_POST["txtCodigoPais"];                
            $lobPersonaContactoCollector = new CPersonaContactoCollector();
            $lobPersonaContactoCollector->insertREC($codigo_persona, $direccion, $celular, $correo_electronico, $codigo_pais_residencia);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $codigo_persona = $_POST["txtCodigoPersona"];
            $direccion = $_POST["txtDireccion"];
            $celular = $_POST["txtCelular"];
            $correo_electronico = $_POST["txtCorreo"];
            $codigo_pais_residencia = $_POST["txtCodigoPais"];                
            
            $lobPersonaContactoCollector = new CPersonaContactoCollector();
            $lobPersonaContactoCollector->updateALL($codigo_persona, $direccion, $celular, $correo_electronico, $codigo_pais_residencia);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobPersonaCollector = new CPersonaContactoCollector();
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
    <div><a href="personaContacto.php">Volver Administración de Personas</a></div>
</body>
</html>
