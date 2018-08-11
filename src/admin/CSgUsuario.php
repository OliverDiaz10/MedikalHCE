<?php
class CSgUsuario
{
    private $codigoUsuario;
    private $codigoPersona;
    private $clave;
    private $estado;
    
     function __construct($pstCodigoUsuario, $pinCodigoPersona, $pstClave, $pchEstado) {
       $this->codigoUsuario = $pstCodigoUsuario;
       $this->codigoPersona = $pinCodigoPersona;
       $this->clave = $pstClave;
       $this->estado = $pchEstado;
     }
     
     function setCodigoUsuario($pstCodigoUsuario){
       $this->codigoUsuario = $pstCodigoUsuario;
     }
     function getCodigoUsuario(){
       return $this->codigoUsuario;
     }

     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setClave($pstClave){
       $this->clave = $pstClave;
     }
     function getClave(){
       return $this->clave;
     }

     function setEstado($pchEstado){
       $this->estado = $pchEstado;
     }
     function getEstado(){
       return $this->estado;
     }
}
?> 
