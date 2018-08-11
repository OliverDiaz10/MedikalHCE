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
    include_once("CUsuarioCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoUsuario = $_POST["txtCodigoUsuario"];
            $claveUsuario = $_POST["txtClaveUsuario"];
            $codigoPersona = $_POST["txtCodigoPersona"];
            $estado = $_POST["txtEstadoUsuario"];
            if (!empty(trim($codigoUsuario)) && !empty(trim($claveUsuario)) && !empty(trim($codigoPersona)) && !empty(trim($estado))){
                $lobUsuarioCollector = new CUsuarioCollector();
                $lobUsuarioCollector->insertREC($codigoUsuario, $codigoPersona, $claveUsuario, $estado);
                echo "Registro Creado Exitosamente...";
            }else
                echo "Es Obligatorio Ingresar toda la información del Usuario. No se Pudo Crear el Registro...";
        }
        if ($tipoOperacion == 2){
            $codigoUsuario = $_POST["txtCodigoUsuario"];
            $claveUsuario = $_POST["txtClaveUsuario"];
            $codigoPersona = $_POST["txtCodigoPersona"];
            $estado = $_POST["txtEstadoUsuario"];
            
            if (!empty(trim($codigoUsuario)) && !empty(trim($claveUsuario)) && !empty(trim($codigoPersona)) && !empty(trim($estado))){
                $lobUsuarioCollector = new CUsuarioCollector();
                $lobUsuarioCollector->updateALL($codigoUsuario, $codigoPersona, $claveUsuario, $estado);
                echo "Registro Actualizado Exitosamente...";
            }else
                echo "Es Obligatorio Ingresar toda la información del Usuario. No se Pudo Modificar el Registro...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobUsuarioCollector = new CUsuarioCollector();
                $lobUsuarioCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="usuarios.php">Volver Administración de Registros</a></div>
</body>
</html>