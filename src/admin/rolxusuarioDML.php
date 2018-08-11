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
    include_once("CRolUsuarioCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoUsuario = trim($_POST["txtCodigoUsuario"]);
            $codigoRol = trim($_POST["txtCodigoRol"]);
            if (!empty($codigoUsuario) && !empty($codigoRol)){
                $lobRolUsuarioCollector = new CRolUsuarioCollector();
                $lobRolUsuarioCollector->insertREC($codigoUsuario, $codigoRol);
                echo "Registro Creado Exitosamente...";
            }else
                echo "Es Obligatorio Ingresar toda la información del Rol de Usuario. No se Pudo Crear el Registro...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['idUsuario']) && isset($_GET['idRol'])){
                $idUsuario = $_GET["idUsuario"];
                $idRol = $_GET["idRol"];
                
                $lobRolUsuarioCollector = new CRolUsuarioCollector();
                $lobRolUsuarioCollector->deleteREC($idUsuario, $idRol);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="rolxusuario.php">Volver Administración de Registros</a></div>
</body>
</html>