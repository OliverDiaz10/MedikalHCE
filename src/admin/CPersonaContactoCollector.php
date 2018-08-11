<?php
include_once("CMgPersonaContacto.php");
include_once("../db/Collector.php");
class CPersonaContactoCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_personas_contactos");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgPersonaContacto($i{'codigo_persona'}, $i{'direccion'}, $i{'celular'}, $i{'correo_electronico'}, $i{'codigo_pais_residencia'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigo_persona){
        $row = self::$db->getRow("select * from public.mg_personas_contactos where codigo_persona = ?", array("{$codigo_persona}"));
        
        $lobPersonaContacto = new CMgPersonaContacto($row{'codigo_persona'}, $row{'direccion'}, $row{'celular'}, $row{'correo_electronico'}, $row{'codigo_pais_residencia'});
        
        return $lobPersonaContacto;
    }
    
    function updateALL($codigo_persona,$direccion, $celular, $correo_electronico, $codigo_pais_residencia){
            $updaterow = self::$db->updateRow("UPDATE public.mg_personas_contactos SET direccion = ?, celular = ?, correo_electronico = ?, codigo_pais_residencia = ? WHERE codigo_persona = ?", array("{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}",$codigo_persona));
    }

    function insertREC($codigo_persona,$direccion, $celular, $correo_electronico, $codigo_pais_residencia){
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_personas_contactos (codigo_persona, direccion, celular, correo_electronico, codigo_pais_residencia) VALUES (?,?,?,?,?)", array ("{$codigo_persona}","{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.mg_personas_contactos WHERE codigo_persona = ?", array("{$id}"));
    }
}

?>

