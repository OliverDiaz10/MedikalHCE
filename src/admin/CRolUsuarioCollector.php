<?php
include_once("CSgRolUsuario.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/db/Collector.php");
class CRolUsuarioCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.SG_ROLES_X_USUARIO");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CSgRolUsuario($i{'codigo_usuario'}, $i{'codigo_rol'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }

    function selectALLxUsuario($codigoUsuario){
        $rows = self::$db->getRows("select * from public.SG_ROLES_X_USUARIO where codigo_usuario = ?", array("{$codigoUsuario}"));
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CSgRolUsuario($i{'codigo_usuario'}, $i{'codigo_rol'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }

    function selectPK($codigoUsuario, $codigoRol){
        $row = self::$db->getRow("select * from public.SG_ROLES_X_USUARIO where codigo_usuario = ? and codigo_rol = ?", array("{$codigoUsuario}","{$codigoRol}"));
        
        $lobRolUsuario = new CSgRolUsuario($row{'codigo_usuario'}, $row{'codigo_rol'});
        return $lobRolUsuario;
    }
    
    function insertREC($codigoUsuario, $codigoRol){
        $insertarow = self::$db->insertRow("INSERT INTO public.SG_ROLES_X_USUARIO (codigo_usuario, codigo_rol) VALUES (?,?)", array ("{$codigoUsuario}","{$codigoRol}"));
    }

    function deleteREC($codigoUsuario, $codigoRol){
        $deleterow = self::$db->deleteRow("DELETE FROM public.SG_ROLES_X_USUARIO WHERE codigo_usuario = ? and codigo_rol = ?", array("{$codigoUsuario}","{$codigoRol}"));
    }
}

?>

