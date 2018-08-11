<?php
class CHcAtencionEmergencias
{
    private $numeroAtencion;
    private $codigoPersona;
    private $codigoInstitucion;
    private $codigoMedico;
    private $fechaAtencion;
    private $tipoEmergencia;
    private $diagnostico;
    
     function __construct($pinNumeroAtencion, $pstCodigoPersona, $pstCodigoInstitucion, $pstCodigoMedico, $pstFechaAtencion, $pstTipoEmergencia, $pstDiagnostico) {
       $this->numeroAtencion = $pinNumeroAtencion;
       $this->codigoPersona = $pstCodigoPersona;
       $this->codigoInstitucion = $pstCodigoInstitucion;
       $this->codigoMedico = $pstCodigoMedico;
       $this->fechaAtencion = $pstFechaAtencion;
       $this->tipoEmergencia = $pstTipoEmergencia;
       $this->diagnostico = $pstDiagnostico;
     }
     
     function setNumeroAtencion($pinNumeroAtencion){
       $this->numeroAtencion = $pinNumeroAtencion;
     }
     function getNumeroAtencion(){
       return $this->numeroAtencion;
     }

     function setCodigoPersona($pstCodigoPersona){
       $this->codigoPersona = $pstCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setCodigoInstitucion($pstCodigoInstitucion){
       $this->codigoInstitucion = $pstCodigoInstitucion;
     }
     function getCodigoInstitucion(){
       return $this->codigoInstitucion;
     }

     function setCodigoMedico($pstCodigoMedico){
       $this->codigoMedico = $pstCodigoMedico;
     }
     function getCodigoMedico(){
       return $this->codigoMedico;
     }

     function setFechaAtencion($pstFechaAtencion){
       $this->fechaAtencion = $pstFechaAtencion;
     }
     function getFechaAtencion(){
       return $this->fechaAtencion;
     }

     function setTipoEmergencia($pstTipoEmergencia){
       $this->tipoEmergencia = $pstTipoEmergencia;
     }
     function getTipoEmergencia(){
       return $this->tipoEmergencia;
     }

     function setDiagnostico($pstDiagnostico){
       $this->diagnostico = $pstDiagnostico;
     }
     function getDiagnostico(){
       return $this->diagnostico;
     }
}
?> 
