<?php
include_once("CMgContacto.php");
include_once("../db/Collector.php");
class CContactoCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_contactos");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgContacto($i{'numero_contacto'}, $i{'nombres'}, $i{'correo_electronico'}, $i{'asunto'}, $i{'mensaje'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($numeroContacto){
        $row = self::$db->getRow("select * from public.mg_contactos where numero_contacto = ?", array("{$numeroContacto}"));
        
        $lobContacto = new CMgContacto($row{'numero_contacto'}, $row{'nombres'}, $row{'correo_electronico'}, $row{'asunto'}, $row{'mensaje'});
        
        return $lobContacto;
    }
    
    function updateALL($numeroContacto, $nombres, $correoElectronico, $asunto, $mensaje){
       
            $updaterow = self::$db->updateRow("UPDATE public.mg_contactos SET nombres = ?, correo_electronico = ?, asunto = ?, mensaje = ? WHERE numero_contacto = ?", array("{$nombres}","{$correoElectronico}","{$asunto}","{$mensaje}",$numeroContacto));
    }
    
    function insertREC($nombres, $correoElectronico, $asunto, $mensaje){
    
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_contactos (nombres,  correo_electronico, asunto, mensaje) VALUES (?,?,?,?)", array ("{$nombres}","{$correoElectronico}","{$asunto}","{$mensaje}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.mg_contactos WHERE numero_contacto = ?", array("{$id}"));
    }
}

?>

