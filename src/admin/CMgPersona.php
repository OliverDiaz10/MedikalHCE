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
    private $direccion;
    private $telefono;
    private $correoElectronico;
    private $estadoCivil;
  
     function __construct($codigo_persona, $numero_identificacion, $pstNombres, $pstApellidos, $pchSexo, $pstNacionalidad, $pdaFechaNacimiento, $pstDireccion, $pstTelefono, $pstCorreo, $pchEstadoCivil) {
       $this->codigo_persona = $codigo_persona;
       $this->numero_identificacion = $numero_identificacion;
       $this->nombres = $pstNombres;
       $this->apellidos = $pstApellidos;
       $this->sexo = $pchSexo;
       $this->nacionalidad = $pstNacionalidad;
       $this->fechaNacimiento = $pdaFechaNacimiento;
       $this->direccion = $pstDireccion;
       $this->telefono = $pstTelefono;
       $this->correoElectronico = $pstCorreo;
       $this->estadoCivil = $pchEstadoCivil;
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

     function setDireccion($pstDireccion){
       $this->direccion = $pstDireccion;
     }
     function getDireccion(){
       return $this->direccion;
     }

     function setTelefono($pstTelefono){
       $this->telefono = $pstTelefono;
     }
     function getTelefono(){
       return $this->telefono;
     }

     function setCorreoElectronico($pstCorreo){
       $this->correoElectronico = $pstCorreo;
     }
     function getCorreoElectronico(){
       return $this->correoElectronico;
     }

     function setEstadoCivil($pchEstadoCivil){
       $this->estadoCivil = $pchEstadoCivil;
     }
     function getEstadoCivil(){
       return $this->estadoCivil;
     }

}
?> 
