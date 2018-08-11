<?php
class CHcInstitucion
{
    private $codigoInstitucion;
    private $nombre;
    private $razonSocial;
    
     function __construct($pstCodigoInstitucion, $pstNombre, $pstRazonSocial) {
       $this->codigoInstitucion = $pstCodigoInstitucion;
       $this->nombre = $pstNombre;
       $this->razonSocial = $pstRazonSocial;
     }
     
     function setCodigoInstitucion($pstCodigoInstitucion){
       $this->codigoInstitucion = $pstCodigoInstitucion;
     }
     function getCodigoInstitucion(){
       return $this->codigoInstitucion;
     }

     function setNombre($pstNombre){
       $this->nombre = $pstNombre;
     }
     function getNombre(){
       return $this->nombre;
     }

     function setRazonSocial($pstRazonSocial){
       $this->razonSocial = $pstRazonSocial;
     }
     function getRazonSocial(){
       return $this->razonSocial;
     }
}
?> 
