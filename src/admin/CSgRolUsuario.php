<?php
class CSgRolUsuario
{
    private $codigoUsuario;
    private $codigoRol;
    
     function __construct($pstCodigoUsuario, $pstCodigoRol) {
       $this->codigoUsuario = $pstCodigoUsuario;
       $this->codigoRol = $pstCodigoRol;
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
}
?> 
