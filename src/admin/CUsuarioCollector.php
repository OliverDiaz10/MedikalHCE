<?php
include_once("CSgUsuario.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/db/Collector.php");
class CUsuarioCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.SG_USUARIOS");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CSgUsuario($i{'codigo_usuario'}, $i{'codigo_persona'}, $i{'clave'}, $i{'estado'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigoUsuario){
        $row = self::$db->getRow("select * from public.SG_USUARIOS where codigo_usuario = ?", array("{$codigoUsuario}"));
        
        $lobUsuario = new CSgUsuario($row{'codigo_usuario'}, $row{'codigo_persona'}, $row{'clave'}, $row{'estado'});
        return $lobUsuario;
    }
    
    function updateALL($codigoUsuario, $codigoPersona, $clave, $estado){
        $updaterow = self::$db->updateRow("UPDATE public.SG_USUARIOS SET clave = ?, estado = ?, codigo_persona = ? WHERE codigo_usuario = ?", array("{$clave}","{$estado}","{$codigoPersona}",$codigoUsuario));
        }
    
    function insertREC($codigoUsuario, $codigoPersona, $clave, $estado){
        $insertarow = self::$db->insertRow("INSERT INTO public.SG_USUARIOS (codigo_usuario, codigo_persona, clave, estado) VALUES (?,?,?,?)", array ("{$codigoUsuario}","{$codigoPersona}","{$clave}","{$estado}"));
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.SG_USUARIOS WHERE codigo_usuario = ?", array("{$id}"));
    }
}
?>

