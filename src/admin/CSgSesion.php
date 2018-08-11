<?php
class CSgSesion
{
    private $idSesion;
    private $codigoUsuario;
    private $codigoRol;
    private $fechaInicioSesion;
    private $fechaFinSesion;
    
     function __construct($pinIdSesion, $pstCodigoUsuario, $pstCodigoRol, $pdaFechaInicioSesion, $pdaFechaFinSesion) {
       $this->idSesion = $pinIdSesion;
       $this->codigoUsuario = $pstCodigoUsuario;
       $this->codigoRol = $pstCodigoRol;
       $this->fechaInicioSesion = $pdaFechaInicioSesion;
       $this->fechaFinSesion = $pdaFechaFinSesion;
     }
     
     function setIdSesion($pinIdSesion){
       $this->idSesion = $pinIdSesion;
     }
     function getIdSesion(){
       return $this->idSesion;
     }

     function setCodigoUsuario($pstCodigoUsuario){
       $this->codigoUsuario = $pstCodigoUsuario;
     }
     function getCodigoUsuario(){
       return $this->codigoUsuario;
     }

     function setCodigoRol($pstCodigoRol){
       $this->codigoRol = $pstCodigoRol;
     }
     function getCodigoRol(){
       return $this->codigoRol;
     }

     function setFechaInicioSesion($pdaFechaInicioSesion){
       $this->fechaInicioSesion = $pdaFechaInicioSesion;
     }
     function getFechaInicioSesion(){
       return $this->fechaInicioSesion;
     }

     function setFechaFinSesion($pdaFechaFinSesion){
       $this->fechaFinSesion = $pdaFechaFinSesion;
     }
     function getFechaFinSesion(){
       return $this->fechaFinSesion;
     }
}
?> 
