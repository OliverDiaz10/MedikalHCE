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
    <h2>Modificación de Personas Contacto</h2>
    
    <?php
        include_once("CPersonaContactoCollector.php");
        include_once("CMgPersonaContacto.php");
        
        $id = $_GET["id"];
        $lobPersonaContactoCollector = new CPersonaContactoCollector();
        $lobPersonaContacto = $lobPersonaContactoCollector->selectPK($id);
    ?>
    
    <form action="personaContactoDML.php?tipoOperacion=2" method="post">
    <fieldset>

        
        <label>ID : </label>
        <input type="text" name="txtCodigoPersona" value="<?php echo $lobPersonaContacto->getCodigo_Persona(); ?>" readonly>    
        <br><br>

        <label>Direccion : </label>
        <input type="text" name="txtDireccion" value="<?php echo $lobPersonaContacto->getDireccion(); ?>">
        <br><br>

        <label>Celular : </label>
        <input type="text" name="txtCelular" value="<?php echo $lobPersonaContacto->getCelular(); ?>">
        <br><br>

        <label>Correo Electronico : </label>
        <input type="text" name="txtCorreo" value="<?php echo $lobPersonaContacto->getCorreo_electronico(); ?>">
        <br><br>

        <label>Codigo Pais Residencia: </label>
        <input type="text" name="txtCodigoPais" value="<?php echo $lobPersonaContacto->getCodigo_pais_residencia(); ?>">
        <br><br>

        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="personaContacto.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
