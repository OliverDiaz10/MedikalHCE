<?php
class CHcMedicos
{
    private $codigoPersona;
    private $especialidad;
    private $estado;
    
     function __construct($pinCodigoPersona, $pstEspecialidad, $pchEstado) {
       $this->codigoPersona = $pinCodigoPersona;
       $this->especialidad = $pstEspecialidad;
       $this->estado = $pchEstado;
     }
     
     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setEspecialidad($pstEspecialidad){
       $this->especialidad = $pstEspecialidad;
     }
     function getEspecialidad(){
       return $this->especialidad;
     }

     function setEstado($pchEstado){
       $this->estado = $pchEstado;
     }
     function getEstado(){
       return $this->estado;
     }
}
?> 
