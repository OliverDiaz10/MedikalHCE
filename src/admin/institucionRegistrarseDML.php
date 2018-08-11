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
    include_once("CRegIstitucionCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoInstitucion = $_POST["txtCodigoInstitucion"];
            $nombre = $_POST["txtNombreInstitucion"];
            $razonSocial = $_POST["txtRazonSocial"];
                    
            $lobRegIstitucionCollector = new CRegIstitucionCollector();
            $lobRegIstitucionCollector->insertREC($codigoInstitucion, $nombre, $razonSocial);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $codigoInstitucion = $_POST["txtCodigoInstitucion"];
            $nombre = $_POST["txtNombreInstitucion"];
            $razonSocial = $_POST["txtRazonSocial"];
        
            $lobRegIstitucionCollector = new CRegIstitucionCollector();
            $lobRegIstitucionCollector->updateALL($codigoInstitucion, $nombre, $razonSocial);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobRegIstitucionCollector = new CRegIstitucionCollector();
                $lobRegIstitucionCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="institucionRegistrarse.php">Volver Administración de Registros</a></div>
</body>
</html>
