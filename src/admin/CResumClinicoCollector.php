<?php
include_once("CHcResumenClinico.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/db/Collector.php");
class CResumClinicoCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.HC_RESUMEN_CLINICO");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CHcResumenClinico($i{'codigo_persona'}, $i{'enfermedades_importantes'}, $i{'diagnosticos_recientes'}, $i{'planes_tratamiento'},$i{'prescripciones'},$i{'antecedentes_personales'},$i{'antecedentes_familiares'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoPersona){
        $row = self::$db->getRow("select * from public.HC_RESUMEN_CLINICO where codigo_persona = ?", array("{$codigoPersona}"));
        
        $lobResumenClinico = new CHcResumenClinico($row{'codigo_persona'}, $row{'enfermedades_importantes'}, $row{'diagnosticos_recientes'}, $row{'planes_tratamiento'}, $row{'prescripciones'}, $row{'antecedentes_personales'}, $row{'antecedentes_familiares'});
        return $lobResumenClinico;
    }
    
    function updateALL($codigoPersona, $enfermedadesImportantes, $diagnosticosRecientes, $planesTratamiento, $prescripciones, $antecedentesPersonales, $antecedentesFamiliares){
        $updaterow = self::$db->updateRow("UPDATE public.HC_RESUMEN_CLINICO SET enfermedades_importantes = ?, diagnosticos_recientes = ?, planes_tratamiento = ?, prescripciones = ?, antecedentes_personales = ?, antecedentes_familiares = ? WHERE codigo_persona = ?", array("{$enfermedadesImportantes}","{$diagnosticosRecientes}","{$planesTratamiento}","{$prescripciones}","{$antecedentesPersonales}","{$antecedentesFamiliares}",$codigoPersona));
    }
    
    function insertREC($codigoPersona, $enfermedadesImportantes, $diagnosticosRecientes, $planesTratamiento, $prescripciones, $antecedentesPersonales, $antecedentesFamiliares){
        $insertarow = self::$db->insertRow("INSERT INTO public.HC_RESUMEN_CLINICO (codigo_persona, enfermedades_importantes, diagnosticos_recientes, planes_tratamiento, prescripciones, antecedentes_personales, antecedentes_familiares) VALUES (?,?,?,?,?,?,?)", array ("{$codigoPersona}","{$enfermedadesImportantes}","{$diagnosticosRecientes}","{$planesTratamiento}","{$prescripciones}","{$antecedentesPersonales}","{$antecedentesFamiliares}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.HC_RESUMEN_CLINICO WHERE codigo_persona = ?", array("{$id}"));
    }
}
?>

