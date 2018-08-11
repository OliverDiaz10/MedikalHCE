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
    <h2>Modificación de EXAMEN DE LABORATORIOS</h2>
    
    <?php
        include_once("CExamenCollector.php");
        include_once("CMgExamen.php");
        
        $id = $_GET["id"];
        $lobExamenCollector = new CExamenCollector();
        $lobExamen = $lobExamenCollector->selectPK($id);
    ?>
    
    <form action="examenDML.php?tipoOperacion=2" method="post">
    <fieldset>

         private $numero_examen;
    private $codigo_persona;
    private $codigo_institucion;
    private $codigo_medico;
    private $fecha_examen;
    private $tipo_examen;
    private $consideraciones_examen;
    private $explicacion_resultado;



        <label>ID : </label>
        <input type="text" name="txtNumExamen" value="<?php echo $lobExamen->getNumero_examen(); ?>" readonly>    
        <br><br>

        <label>Codigo Persona : </label>
        <input type="text" name="codigo_persona" value="<?php echo $lobExamen->getCodigo_Persona(); ?>">
        <br><br>

        <label>Codigo Institucion : </label>
        <input type="text" name="codigo_institucion" value="<?php echo $lobExamen->getCodigo_institucion(); ?>">
        <br><br>

        <label>Codigo Medico : </label>
        <input type="text" name="codigo_medico" value="<?php echo $lobExamen->getCodigo_medico(); ?>">
        <br><br>

           <label>Fecha Examen : </label>
        <input type="text" name="fecha_examen" value="<?php echo $lobExamen->getFecha_examen(); ?>">
        <br><br>

        <label>Tipo Examen: </label>
        <input type="text" name="tipo_examen" value="<?php echo $lobExamen->getTipo_examen(); ?>">
        <br><br>

        <label>Consideraciones Examen: </label>
        <input type="text" name="consideraciones_examen" value="<?php echo $lobExamen->getConsideraciones_examen(); ?>">
        <br><br>

         <label>Explicacion Resultado de  Examen: </label>
        <input type="text" name="explicacion_resultado" value="<?php echo $lobExamen->getExplicacion_resultado(); ?>">
        <br><br>

        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="examen.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
