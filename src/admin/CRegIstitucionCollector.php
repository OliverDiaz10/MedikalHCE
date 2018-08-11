<?php
include_once("CHcInstitucion.php");
include_once("../db/Collector.php");
class CRegIstitucionCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.hc_instituciones_salud");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CHcInstitucion($i{'codigo_institucion'}, $i{'nombre'}, $i{'razon_social'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoInstitucion){
        $row = self::$db->getRow("select * from public.hc_instituciones_salud where codigo_institucion = ?", array("{$codigoInstitucion}"));
        
        $lobIstitucion = new
            CHcInstitucion($row{'codigo_institucion'}, $row{'nombre'}, $row{'razon_social'});
        
        return $lobIstitucion;
    }
    
    function updateALL($codigoInstitucion, $nombre, $razonSocial){
        
            $updaterow = self::$db->updateRow("UPDATE public.hc_instituciones_salud SET nombre = ?, razon_social = ? WHERE codigo_institucion = ?", array("{$nombre}","{$razonSocial}",$codigoInstitucion));
    }
    
    function insertREC($codigoInstitucion, $nombre, $razonSocial){
      
            $insertarow = self::$db->insertRow("INSERT INTO public.hc_instituciones_salud (codigo_institucion, nombre, razon_social) VALUES (?,?,?)", array ("{$codigoInstitucion}","{$nombre}","{$razonSocial}"));
    }    
    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.hc_instituciones_salud WHERE codigo_institucion = ?", array("{$id}"));
    }
}
?>
