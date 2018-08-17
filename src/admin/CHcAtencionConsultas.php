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
    private $tratamiento;
    private $prescripcion;
    
     function __construct($pinNumeroAtencion, $pinCodigoPersona, $pstCodigoInstitucion, $pinCodigoMedico, $pdtFechaAtencion, $pstEspecialidad, $pstDiagnostico, $pstTratamiento, $pstPrescripcion) {
       $this->numeroAtencion = $pinNumeroAtencion;
       $this->codigoPersona = $pinCodigoPersona;
       $this->codigoInstitucion = $pstCodigoInstitucion;
       $this->codigoMedico = $pinCodigoMedico;
       $this->fechaAtencion = $pdtFechaAtencion;
       $this->especialidad = $pstEspecialidad;
       $this->diagnostico = $pstDiagnostico;
       $this->tratamiento = $pstTratamiento;
       $this->prescripcion = $pstPrescripcion;
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

     function setTratamiento($pstTratamiento){
       $this->tratamiento = $pstTratamiento;
     }
     function getTratamiento(){
       return $this->tratamiento;
     }

     function setPrescripcion($pstPrescripcion){
       $this->prescripcion = $pstPrescripcion;
     }
     function getPrescripcion(){
       return $this->prescripcion;
     }
}
?> 
