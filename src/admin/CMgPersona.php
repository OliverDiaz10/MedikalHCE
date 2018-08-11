<?php
class CMgPersona
{
    private $codigo_persona;
    private $numero_identificacion;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $nacionalidad;
    private $fechaNacimiento;
  
     function __construct($codigo_persona, $numero_identificacion, $pstNombres, $pstApellidos, $pchSexo, $pstNacionalidad, $pdaFechaNacimiento) {
       $this->codigo_persona = $codigo_persona;
       $this->numero_identificacion = $numero_identificacion;
       $this->nombres = $pstNombres;
       $this->apellidos = $pstApellidos;
       $this->sexo = $pchSexo;
       $this->nacionalidad = $pstNacionalidad;
       $this->fechaNacimiento = $pdaFechaNacimiento;
      }
     
     function setCodigo_Persona($codigo_persona){
       $this->codigo_persona = $codigo_persona;
     }
     function getCodigo_Persona(){
       return $this->codigo_persona;
     }

     function setNumero_Identificacion($numero_identificacion){
       $this->numero_identificacion = $numero_identificacion;
     }
     function getNumero_Identificacion(){
       return $this->numero_identificacion;
     }

     function setNombres($pstNombres){
       $this->nombres = $pstNombres;
     }
     function getNombres(){
       return $this->nombres;
     }

     function setApellidos($pstApellidos){
       $this->apellidos = $pstApellidos;
     }
     function getApellidos(){
       return $this->apellidos;
     }

     function setSexo($pchSexo){
       $this->sexo = $pchSexo;
     }
     function getSexo(){
       return $this->sexo;
     }

     function setNacionalidad($pstNacionalidad){
       $this->nacionalidad = $pstNacionalidad;
     }
     function getNacionalidad(){
       return $this->nacionalidad;
     }

     function setFechaNacimiento($pdaFechaNacimiento){
       $this->fechaNacimiento = $pdaFechaNacimiento;
     }
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     }
     
}
?> 
