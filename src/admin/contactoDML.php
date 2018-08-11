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
    include_once("CContactoCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $nombres = $_POST["txtNombres"];
            $correo = $_POST["txtCorreo"];
            $asunto = $_POST["txtAsunto"];
            $mensaje = $_POST["txtMensaje"];
            
            $lobContactoCollector = new CContactoCollector();
            $lobContactoCollector->insertREC($nombres, $correo, $asunto, $mensaje);
            echo "Contacto Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $numeroContacto = $_POST["txtNumContacto"];
            $nombres = $_POST["txtNombres"];
            $correo = $_POST["txtCorreo"];
            $asunto = $_POST["txtAsunto"];
            $mensaje = $_POST["txtMensaje"];
            
            $lobContactoCollector = new CContactoCollector();
            $lobContactoCollector->updateALL($numeroContacto, $nombres, $correo, $asunto, $mensaje);
            echo "Contacto Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobContactoCollector = new CContactoCollector();
                $lobContactoCollector->deleteREC($id);
                echo "Contacto Eliminado Exitosamente...";
            }
            else
                echo "Contacto a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="contacto.php">Volver Administración de Contactos</a></div>
</body>
</html>
