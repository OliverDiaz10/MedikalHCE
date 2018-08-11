<?php
include_once("CMgRegistroUsuario.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/db/Collector.php");
class CRegUsuarioCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.MG_REGISTRO_USUARIOS");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgRegistroUsuario($i{'numero_registro'}, $i{'numero_identificacion'}, $i{'nombres'}, $i{'apellidos'}, $i{'sexo'}, $i{'nacionalidad'}, $i{'direccion'}, $i{'celular'}, $i{'correo_electronico'}, $i{'codigo_pais_residencia'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($numeroRegistro){
        $row = self::$db->getRow("select * from public.MG_REGISTRO_USUARIOS where numero_registro = ?", array("{$numeroRegistro}"));
        
        $lobRegistroUsuario = new CMgRegistroUsuario($row{'numero_registro'}, $row{'numero_identificacion'}, $row{'nombres'}, $row{'apellidos'}, $row{'sexo'}, $row{'nacionalidad'}, $row{'direccion'}, $row{'celular'}, $row{'correo_electronico'}, $row{'codigo_pais_residencia'});
        
        return $lobRegistroUsuario;
    }
    
    function updateALL($numeroRegistro, $numeroIdentificacion, $nombres, $apellidos, $sexo, $nacionalidad, $direccion, $celular, $correoElectronico, $codigoPaisResidencia){
        if (empty($codigoPaisResidencia)) {
            $updaterow = self::$db->updateRow("UPDATE public.MG_REGISTRO_USUARIOS SET numero_identificacion = ?, nombres = ?, apellidos = ?, sexo = ?, nacionalidad = ?, direccion = ?, celular = ?, correo_electronico = ? WHERE numero_registro = ?", array("{$numeroIdentificacion}","{$nombres}","{$apellidos}","{$sexo}","{$nacionalidad}","{$direccion}","{$celular}","{$correoElectronico}",$numeroRegistro));
        }else{
            $updaterow = self::$db->updateRow("UPDATE public.MG_REGISTRO_USUARIOS SET numero_identificacion = ?, nombres = ?, apellidos = ?, sexo = ?, nacionalidad = ?, direccion = ?, celular = ?, correo_electronico = ?, codigo_pais_residencia = ? WHERE numero_registro = ?", array("{$numeroIdentificacion}","{$nombres}","{$apellidos}","{$sexo}","{$nacionalidad}","{$direccion}","{$celular}","{$correoElectronico}","{$codigoPaisResidencia}",$numeroRegistro));
        }
    }
    
    function insertREC($numeroIdentificacion, $nombres, $apellidos, $sexo, $nacionalidad, $direccion, $celular, $correoElectronico, $codigoPaisResidencia){
        if (empty($codigoPaisResidencia)) {
            $insertarow = self::$db->insertRow("INSERT INTO public.MG_REGISTRO_USUARIOS (numero_identificacion, nombres, apellidos, sexo, nacionalidad, direccion, celular, correo_electronico) VALUES (?,?,?,?,?,?,?,?)", array ("{$numeroIdentificacion}","{$nombres}","{$apellidos}","{$sexo}","{$nacionalidad}","{$direccion}","{$celular}","{$correoElectronico}"));
        }
        else{
            $insertarow = self::$db->insertRow("INSERT INTO public.MG_REGISTRO_USUARIOS (numero_identificacion, nombres, apellidos, sexo, nacionalidad, direccion, celular, correo_electronico, codigo_pais_residencia) VALUES (?,?,?,?,?,?,?,?,?)", array ("{$numeroIdentificacion}","{$nombres}","{$apellidos}","{$sexo}","{$nacionalidad}","{$direccion}","{$celular}","{$correoElectronico}","{$codigoPaisResidencia}"));
        }
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.MG_REGISTRO_USUARIOS WHERE numero_registro = ?", array("{$id}"));
    }
}

?>

