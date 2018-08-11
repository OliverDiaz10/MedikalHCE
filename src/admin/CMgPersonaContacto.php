<?php
class CMgPersonaContacto
{
    private $codigo_persona;
    private $direccion;
    private $celular;
    private $correo_electronico;
    private $codigo_pais_residencia;
  
    
     function __construct($codigo_persona, $direccion, $celular, $correo_electronico, $codigo_pais_residencia) {
       $this->codigo_persona = $codigo_persona;
       $this->direccion = $direccion;
       $this->celular = $celular;
       $this->correo_electronico = $correo_electronico;
       $this->codigo_pais_residencia = $codigo_pais_residencia;
      }
     
     function setCodigo_Persona($codigo_persona){
       $this->codigo_persona = $codigo_persona;
     }
     function getCodigo_Persona(){
       return $this->codigo_persona;
     }

     function setDireccion($direccion){
       $this->direccion = $direccion;
     }
     function getDireccion(){
       return $this->direccion;
     }

     function setCelular($celular){
       $this->celular = $celular;
     }
     function getCelular(){
       return $this->celular;
     }

     function setCorreo_electronico($correo_electronico){
       $this->correo_electronico = $correo_electronico;
     }
     function getCorreo_electronico(){
       return $this->correo_electronico;
     }

     function setCodigo_pais_residencia($codigo_pais_residencia){
       $this->codigo_pais_residencia = $codigo_pais_residencia;
     }
     function getCodigo_pais_residencia(){
       return $this->codigo_pais_residencia;
     }


     
}
?> 
