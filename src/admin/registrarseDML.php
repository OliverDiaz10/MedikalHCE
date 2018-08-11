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
    include_once("CRegUsuarioCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
            $direccion = $_POST["txtDireccion"];
            $celular = $_POST["txtCelular"];
            $correo = $_POST["txtCorreo"];
            $paisResidencia = $_POST["txtCodigoPais"];
            
            $lobRegUsuarioCollector = new CRegUsuarioCollector();
            $lobRegUsuarioCollector->insertREC($identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $direccion, $celular, $correo, $paisResidencia);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
            $numeroRegistro = $_POST["txtNumeroRegistro"];
            $identificacion = $_POST["txtIdentificacion"];
            $nombres = $_POST["txtNombres"];
            $apellidos = $_POST["txtApellidos"];
            $sexo = $_POST["txtSexo"];
            $nacionalidad = $_POST["txtNacionalidad"];
            $direccion = $_POST["txtDireccion"];
            $celular = $_POST["txtCelular"];
            $correo = $_POST["txtCorreo"];
            $paisResidencia = $_POST["txtCodigoPais"];
            
            $lobRegUsuarioCollector = new CRegUsuarioCollector();
            $lobRegUsuarioCollector->updateALL($numeroRegistro, $identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $direccion, $celular, $correo, $paisResidencia);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
                $lobRegUsuarioCollector = new CRegUsuarioCollector();
                $lobRegUsuarioCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="registrarse.php">Volver Administración de Registros</a></div>
</body>
</html>