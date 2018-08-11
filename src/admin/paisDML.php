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
    include_once("CPaisCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoPais = $_POST["txtCodPais"];
            $nombre = $_POST["txtNomPais"];
            
            $lobPaisCollector = new CPaisCollector();
            $lobPaisCollector->insertREC($codigoPais, $nombre);
            echo "Pais Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $codigoPais = $_POST["txtCodPais"];
            $nombre = $_POST["txtNomPais"];
            
            $lobPaisCollector = new CPaisCollector();
            $lobPaisCollector->updateALL($codigoPais, $nombre);
            echo "Pais Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobPaisCollector = new CPaisCollector();
                $lobPaisCollector->deleteREC($id);
                echo "Pais Eliminado Exitosamente...";
            }
            else
                echo "Pais a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="pais.php">Volver Administración de Paises</a></div>
</body>
</html>
