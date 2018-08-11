<?php
class CHcAtencionConsultas
{
    private $numeroAtencion;
    private $codigoPersona;
    private $codigoInstitucion;
    private $codigoMedico;
    private $fechaAtencion;
    private $especialidad;
    private $diagnostico;
    
     function __construct($pinNumeroAtencion, $pinCodigoPersona, $pstCodigoInstitucion, $pinCodigoMedico, $pdtFechaAtencion, $pstEspecialidad, $pstDiagnostico) {
       $this->numeroAtencion = $pinNumeroAtencion;
       $this->codigoPersona = $pinCodigoPersona;
       $this->codigoInstitucion = $pstCodigoInstitucion;
       $this->codigoMedico = $pinCodigoMedico;
       $this->fechaAtencion = $pdtFechaAtencion;
       $this->especialidad = $pstEspecialidad;
       $this->diagnostico = $pstDiagnostico;

     }
     
     function setNumeroAtencion($pinNumeroAtencion){
       $this->numeroAtencion = $pinNumeroAtencion;
     }
     function getNumeroAtencion(){
       return $this->numeroAtencion;
     }

     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setCodigoInstitucion($pstCodCodigoInstitucion){
       $this->codigoInstitucion = $pstCodigoInstitucion;
     }
     function getCodigoInstitucion(){
       return $this->codigoInstitucion;
     }

     function setCodigoMedico($pinCodigoMedico){
       $this->codigoMedico = $pinCodigoMedico;
     }
     function getCodigoMedico(){
       return $this->codigoMedico;
     }

     function setFechaAtencion($pdtFechaAtencion){
       $this->fechaAtencion = $pdtFechaAtencion;
     }
     function getFechaAtencion(){
       return $this->fechaAtencion;
     }

     function setEspecialidad($pstEspecialidad){
       $this->especialidad = $pstEspecialidad;
     }
     function getEspecialidad(){
       return $this->especialidad;
     }

     function setDiagnostico($pstDiagnostico){
       $this->diagnostico = $pstDiagnostico;
     }
     function getDiagnostico(){
       return $this->diagnostico;
     }
}
?> 
