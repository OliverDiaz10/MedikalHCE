<?php
class CMgRegistroUsuario
{
    private $numeroRegistro;
    private $numeroIdentificacion;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $nacionalidad;
    private $direccion;
    private $celular;
    private $correoElectronico;
    private $codigoPaisResidencia;
    
     function __construct($pinNumeroRegistro, $pstNumeroIdent, $pstNombres, $pstApellidos, $pchSexo, $pstNacionalidad, $pstDireccion, $pstCelular, $pstCorreoElectronico, $pstCodigoPaisResidencia) {
       $this->numeroRegistro = $pinNumeroRegistro;
       $this->numeroIdentificacion = $pstNumeroIdent;
       $this->nombres = $pstNombres;
       $this->apellidos = $pstApellidos;
       $this->sexo = $pchSexo;
       $this->nacionalidad = $pstNacionalidad;
       $this->direccion = $pstDireccion;
       $this->celular = $pstCelular;
       $this->correoElectronico = $pstCorreoElectronico;
       $this->codigoPaisResidencia = $pstCodigoPaisResidencia;
     }
     
     function setNumeroRegistro($pinNumeroRegistro){
       $this->numeroRegistro = $pinNumeroRegistro;
     }
     function getNumeroRegistro(){
       return $this->numeroRegistro;
     }

     function setNumeroIdentificacion($pstNumeroIdent){
       $this->numeroIdentificacion = $pstNumeroIdent;
     }
     function getNumeroIdentificacion(){
       return $this->numeroIdentificacion;
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

     function setDireccion($pstDireccion){
       $this->direccion = $pstDireccion;
     }
     function getDireccion(){
       return $this->direccion;
     }

     function setCelular($pstCelular){
       $this->celular = $pstCelular;
     }
     function getCelular(){
       return $this->celular;
     }

     function setCorreoElectronico($pstCorreoElectronico){
       $this->correoElectronico = $pstCorreoElectronico;
     }
     function getCorreoElectronico(){
       return $this->correoElectronico;
     }

     function setCodigoPaisResidencia($pstCodigoPaisResidencia){
       $this->codigoPaisResidencia = $pstCodigoPaisResidencia;
     }
     function getCodigoPaisResidencia(){
       return $this->codigoPaisResidencia;
     }
}
?> 
