<?php
include_once("CHcAtencionEmergencias.php");
include_once("../db/Collector.php");
class CRegAtencionEmergenciasCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.hc_atencion_emergencias");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CHcAtencionEmergencias($i{'numero_atencion'}, $i{'codigo_persona'}, $i{'codigo_institucion'}, $i{'codigo_medico'}, $i{'fecha_atencion'}, $i{'tipo_emergencia'}, $i{'diagnostico'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($numeroAtencion){
        $row = self::$db->getRow("select * from public.hc_atencion_emergencias where numero_atencion = ?", array("{$numeroAtencion}"));
        
        $lobAtencionEmergencias = new CHcAtencionEmergencias($row{'numero_atencion'}, $row{'codigo_persona'}, $row{'codigo_institucion'}, $row{'codigo_medico'}, $row{'fecha_atencion'}, $row{'tipo_emergencia'}, $row{'diagnostico'});
        
        return $lobAtencionEmergencias;
    }
    function selectID($codigo){
        $rows = self::$db->getRows("select * from public.hc_atencion_emergencias where codigo_persona = ?", array("{$codigo}"));
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CHcAtencionEmergencias($i{'numero_atencion'}, $i{'codigo_persona'}, $i{'codigo_institucion'}, $i{'codigo_medico'}, $i{'fecha_atencion'}, $i{'tipo_emergencia'}, $i{'diagnostico'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function updateALL($numeroAtencion, $codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $tipoEmergencia, $diagnostico){
            $updaterow = self::$db->updateRow("UPDATE public.hc_atencion_emergencias SET codigo_persona = ?, codigo_institucion = ?, codigo_medico = ?, fecha_atencion = ?, tipo_emergencia = ?, diagnostico = ? WHERE numero_atencion = ?", array("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$tipoEmergencia}","{$diagnostico}",$numeroAtencion));
    }
    
    function insertREC($codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $tipoEmergencia, $diagnostico){
            $insertarow = self::$db->insertRow("INSERT INTO public.hc_atencion_emergencias (codigo_persona, codigo_institucion, codigo_medico, fecha_atencion, tipo_emergencia, diagnostico) VALUES (?,?,?,?,?,?)", array ("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$tipoEmergencia}","{$diagnostico}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.hc_atencion_emergencias WHERE numero_atencion = ?", array("{$id}"));
    }
}

?>

