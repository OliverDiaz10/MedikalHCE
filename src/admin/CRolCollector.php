<?php
include_once("CSgRol.php");
include_once("../db/Collector.php");
class CRolCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.sg_roles ");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CSgRol($i{'codigo_rol'}, $i{'descripcion'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoRol){
        $row = self::$db->getRow("select * from public.sg_roles where codigo_rol = ?", array("{$codigoRol}"));
        
        $lobRol = new CSgRol($row{'codigo_rol'}, $row{'descripcion'});
        
        return $lobRol;
    }
    
    function updateALL($codigoRol, $descripcion){
       
            $updaterow = self::$db->updateRow("UPDATE public.sg_roles  SET descripcion = ? WHERE codigo_rol = ?", array("{$descripcion}",$codigoRol));
    }
    
    function insertREC($codigoRol, $descripcion){
    
            $insertarow = self::$db->insertRow("INSERT INTO public.sg_roles (codigo_rol, descripcion) VALUES (?,?)", array ("{$codigoRol}","{$descripcion}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.sg_roles WHERE codigo_rol = ?", array("{$id}"));
    }
}

?>

