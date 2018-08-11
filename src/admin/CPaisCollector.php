<?php
include_once("CMgPais.php");
include_once("../db/Collector.php");
class CPaisCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_paises");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgPais($i{'codigo_pais'}, $i{'nombre_pais'}); 
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoPais){ 
        $row = self::$db->getRow("select * from public.mg_paises where codigo_pais = ?", array("{$codigoPais}"));
        
        $lobPais = new CMgPais($row{'codigo_pais'}, $row{'nombre_pais'}); 
        
        return $lobPais;
    }
    
    function updateALL($codigoPais, $nombrePais){
       
            $updaterow = self::$db->updateRow("UPDATE public.mg_paises  SET nombre_pais = ? WHERE codigo_pais = ?", array("{$nombrePais}",$codigoPais));
    }
    
    function insertREC($codigoPais, $nombrePais){
    
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_paises (codigo_pais, nombre_pais) VALUES (?,?)", array ("{$codigoPais}","{$nombrePais}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.mg_paises WHERE codigo_pais = ?", array("{$id}"));
    }
}

?>

