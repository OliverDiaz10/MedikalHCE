<?php
include_once("CHcMedicos.php");
include_once("../db/Collector.php");
class CRegMedicosCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.hc_medicos");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CHcMedicos($i{'codigo_persona'}, $i{'especialidad'}, $i{'estado'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoPersona){
        $row = self::$db->getRow("select * from public.hc_medicos where codigo_persona = ?", array("{$codigoPersona}"));
        
        $lobCodigoPersona = new CHcMedicos($row{'codigo_persona'}, $row{'especialidad'}, $row{'estado'});
        
        return $lobCodigoPersona;
    }
    
    function updateALL($codigoPersona, $especialidad, $estado){
        
            $updaterow = self::$db->updateRow("UPDATE public.hc_medicos SET especialidad = ?, estado = ? WHERE codigo_persona = ?", array("{$especialidad}","{$estado}",$codigoPersona));
    }
    
    function insertREC($codigoPersona, $especialidad, $estado){
       
            $insertarow = self::$db->insertRow("INSERT INTO public.hc_medicos (codigo_persona, especialidad, estado) VALUES (?,?,?)", array ("{$codigoPersona}","{$especialidad}","{$estado}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.hc_medicos WHERE codigo_persona = ?", array("{$id}"));
    }
}

?>

