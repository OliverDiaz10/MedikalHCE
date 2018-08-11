<?php
include_once("CMgExamen.php");
include_once("../db/Collector.php");
class CExamenCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.hc_examenes_laboratorio");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgExamen($i{'numero_examen'},$i{'codigo_persona'}, $i{'codigo_institucion'}, $i{'codigo_medico'}, $i{'fecha_examen'}, $i{'tipo_examen'},$i{'consideraciones_examen'},$i{'explicacion_resultado'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($numero_examen){
        $row = self::$db->getRow("select * from public.hc_examenes_laboratorio where numero_examen = ?", array("{$numero_examen}"));
        
        $lobExamen = new CMgExamen($row{'numero_examen'}, $row{'codigo_persona'}, $row{'codigo_institucion'}, $row{'codigo_medico'}, $row{'fecha_examen'}, $row{'tipo_examen'}, $row{'consideraciones_examen'}, $row{'explicacion_resultado'});
        
        return $lobExamen;
    }
    
    function updateALL($numero_examen, $codigo_persona, $codigo_institucion, $codigo_medico, $fecha_examen, $tipo_examen, $consideraciones_examen, $explicacion_resultado){
            $updaterow = self::$db->updateRow("UPDATE public.hc_examenes_laboratorio SET codigo_persona = ?, codigo_institucion = ?, codigo_medico = ?, fecha_examen = ?, tipo_examen = ?, consideraciones_examen = ?, explicacion_resultado = ? WHERE numero_examen = ?", array("{$codigo_persona}","{$codigo_institucion}","{$codigo_medico}","{$fecha_examen}","{$tipo_examen}","{$consideraciones_examen}","{$explicacion_resultado}",$numero_examen));
    }

    function insertREC($codigo_persona, $codigo_institucion, $codigo_medico, $fecha_examen, $tipo_examen, $consideraciones_examen, $explicacion_resultado){
            $insertarow = self::$db->insertRow("INSERT INTO public.hc_examenes_laboratorio (codigo_persona, codigo_institucion, codigo_medico, fecha_examen, tipo_examen, consideraciones_examen, explicacion_resultado) VALUES (?,?,?,?,?,?,?)", array ("{$codigo_persona}","{$codigo_institucion}","{$codigo_medico}","{$fecha_examen}","{$tipo_examen}","{$consideraciones_examen}","{$explicacion_resultado}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.hc_examenes_laboratorio WHERE numero_examen = ?", array("{$id}"));
    }
}

?>

