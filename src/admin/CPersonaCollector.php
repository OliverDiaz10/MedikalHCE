<?php
include_once("CMgPersona.php");
include_once("../db/Collector.php");
class CPersonaCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_personas");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgPersona($i{'codigo_persona'}, $i{'numero_identificacion'}, $i{'nombres'}, $i{'apellidos'}, $i{'sexo'}, $i{'nacionalidad'}, $i{'fecha_nacimiento'}, $i{'direccion'}, $i{'telefono'}, $i{'correo_electronico'}, $i{'estado_civil'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigo_persona){
        $row = self::$db->getRow("select * from public.mg_personas where codigo_persona = ?", array("{$codigo_persona}"));
        
        $lobPersona = new CMgPersona($row{'codigo_persona'}, $row{'numero_identificacion'}, $row{'nombres'}, $row{'apellidos'}, $row{'sexo'}, $row{'nacionalidad'}, $row{'fecha_nacimiento'}, $row{'direccion'}, $row{'telefono'}, $row{'correo_electronico'}, $row{'estado_civil'});
        
        return $lobPersona;
    }
    
    function updateALL($codigo_persona,$numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $fechaNacimiento){
            $updaterow = self::$db->updateRow("UPDATE public.mg_personas SET numero_identificacion = ?, nombres = ?, apellidos = ?, sexo = ?, nacionalidad = ?, fecha_nacimiento = ? WHERE codigo_persona = ?", array("{$numero_identificacion}","{$nombres}","{$apellidos}","{$sexo}","{$nacionalidad}","{$fechaNacimiento}", $codigo_persona));     
    }
    
    function insertREC($numero_identificacion, $nombres, $apellidos, $sexo, $nacionalidad, $fechaNacimiento){
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_personas (numero_identificacion, nombres, apellidos, sexo, nacionalidad, fecha_nacimiento) VALUES (?,?,?,?,?,?)", array ("{$numero_identificacion}", "{$nombres}", "{$apellidos}", "{$sexo}", "{$nacionalidad}", "{$fechaNacimiento}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.mg_personas WHERE codigo_persona = ?", array("{$id}"));
    }
}

?>

