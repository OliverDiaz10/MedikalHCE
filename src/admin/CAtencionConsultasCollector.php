<?php
include_once("CHcAtencionConsultas.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/db/Collector.php");
class CAtencionConsultasCollector extends Collector
{
   
    function selectALL(){
        $rows = self::$db->getRows("select * from public.hc_atencion_consultas"); 
        $arrayData = array();
        foreach ($rows as $i){$aux = new CHcAtencionConsultas($i{'numero_atencion'}, $i{'codigo_persona'}, $i{'codigo_institucion'}, $i{'codigo_medico'}, $i{'fecha_atencion'}, $i{'especialidad'}, $i{'diagnostico'}, $i{'tratamiento'}, $i{'preescripcion'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($numeroAtencion){
        $row = self::$db->getRow("select * from public.hc_atencion_consultas where numero_atencion = ?", array("{$numeroAtencion}"));
        
        $lobAtencionConsultas = new CHcAtencionConsultas($row{'numero_atencion'}, $row{'codigo_persona'}, $row{'codigo_institucion'}, $row{'codigo_medico'}, $row{'fecha_atencion'}, $row{'especialidad'}, $row{'diagnostico'}, $row{'tratamiento'}, $row{'preescripcion'});
        
        return $lobAtencionConsultas;
    }
 
    
    function selectID($numeroPersona){
        $rows = self::$db->getRows("select * from public.hc_atencion_consultas where codigo_persona = ?", array("{$numeroPersona}"));
        $arrayData = array();
        foreach ($rows as $i){$aux = new CHcAtencionConsultas($i{'numero_atencion'}, $i{'codigo_persona'}, $i{'codigo_institucion'}, $i{'codigo_medico'}, $i{'fecha_atencion'}, $i{'especialidad'}, $i{'diagnostico'}, $i{'tratamiento'}, $i{'preescripcion'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function updateALL($numeroAtencion, $codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $especialidad, $diagnostico){
        //if (empty($codigoPaisResidencia)) {
        //    $updaterow = self::$db->updateRow("UPDATE public.hc_atencion_consultas SET codigo_persona = ?, codigo_institucion = ?, codigo_medico = ?, fecha_atencion = ?, especialidad = ?, diagnostico = ? WHERE numero_atencion = ?", array("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$especialidad}","{$diagnostico}"));
        //}else{
            $updaterow = self::$db->updateRow("UPDATE public.hc_atencion_consultas SET codigo_persona = ?, codigo_institucion = ?, codigo_medico = ?, fecha_atencion = ?, especialidad = ?, diagnostico = ? WHERE numero_atencion = ?", array("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$especialidad}","{$diagnostico}",$numeroAtencion));
        //}
    }
    
    function insertREC($codigoPersona, $codigoInstitucion, $codigoMedico, $fechaAtencion, $especialidad, $diagnostico){
        //if (empty($codigoPaisResidencia)) {
        //    $insertarow = self::$db->insertRow("INSERT INTO public.hc_atencion_consultas (codigo_persona, codigo_institucion, codigo_medico, fecha_atencion, especialidad, diagnostico) VALUES (?,?,?,?,?)", array ("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$especialidad}","{$diagnostico}"));
        //}
        //else{
            $insertarow = self::$db->insertRow("INSERT INTO public.hc_atencion_consultas (codigo_persona, codigo_institucion, codigo_medico, fecha_atencion, especialidad, diagnostico) VALUES (?,?,?,?,?,?)", array ("{$codigoPersona}","{$codigoInstitucion}","{$codigoMedico}","{$fechaAtencion}","{$especialidad}","{$diagnostico}"));
        //}
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.hc_atencion_consultas WHERE numero_atencion = ?", array("{$id}"));
    }
}

?>

