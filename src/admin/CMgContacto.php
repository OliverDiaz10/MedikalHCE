<?php
class CMgContacto
{
    private $numeroContacto;
    private $nombres;
    private $correoElectronico;
    private $asunto;
    private $mensaje;
    
     function __construct($pinNumeroContacto, $pstNombres, $pstCorreoElectronico, $pstAsunto, $pstMensaje) {
       $this->numeroContacto = $pinNumeroContacto;
       $this->nombres = $pstNombres;
       $this->correoElectronico = $pstCorreoElectronico;
       $this->asunto = $pstAsunto;
       $this->mensaje = $pstMensaje;
     }
     
     function setNumeroContacto($pinNumeroContacto){
       $this->numeroContacto = $pinNumeroContacto;
     }
     function getNumeroContacto(){
       return $this->numeroContacto;
     }

     function setNombres($pstNombres){
       $this->nombres = $pstNombres;
     }
     function getNombres(){
       return $this->nombres;
     }

     function setCorreoElectronico($pstCorreoElectronico){
       $this->correoElectronico = $pstCorreoElectronico;
     }
     function getCorreoElectronico(){
       return $this->correoElectronico;
     }

     function setAsunto($pstAsunto){
       $this->asunto = $pstAsunto;
     }
     function getAsunto(){
       return $this->asunto;
     }

     function setMensaje($pstMensaje){
       $this->mensaje = $pstMensaje;
     }
     function getMensaje(){
       return $this->mensaje;
     }
}
?> 
