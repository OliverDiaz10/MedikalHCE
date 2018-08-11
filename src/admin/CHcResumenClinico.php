<?php
class CHcResumenClinico
{
    private $codigoPersona;
    private $enfermedadesImportantes;
    private $diagnosticosRecientes;
    private $planesTratamiento;
    private $prescripciones;
    private $antecedentesPersonales;
    private $antecedentesFamiliares;
    
     function __construct($pinCodigoPersona, $pstEnfermedadesImportantes, $pstDiagnosticosRecientes, $pstPlanesTratamiento, $pstPrescripciones, $pstAntecedentesPersonales, $pstAntecedentesFamiliares) {
       $this->codigoPersona = $pinCodigoPersona;
       $this->enfermedadesImportantes = $pstEnfermedadesImportantes;
       $this->diagnosticosRecientes = $pstDiagnosticosRecientes;
       $this->planesTratamiento = $pstPlanesTratamiento;
       $this->prescripciones = $pstPrescripciones;
       $this->antecedentesPersonales = $pstAntecedentesPersonales;
       $this->antecedentesFamiliares = $pstAntecedentesFamiliares;
     }
     
     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setEnfermedadesImportantes($pstEnfermedadesImportantes){
       $this->enfermedadesImportantes = $pstEnfermedadesImportantes;
     }
     function getEnfermedadesImportantes(){
       return $this->enfermedadesImportantes;
     }

     function setDiagnosticosRecientes($pstDiagnosticosRecientes){
       $this->diagnosticosRecientes = $pstDiagnosticosRecientes;
     }
     function getDiagnosticosRecientes(){
       return $this->diagnosticosRecientes;
     }

     function setPlanesTratamiento($pstPlanesTratamiento){
       $this->planesTratamiento = $pstPlanesTratamiento;
     }
     function getPlanesTratamiento(){
       return $this->planesTratamiento;
     }

     function setPrescripciones($pstPrescripciones){
       $this->prescripciones = $pstPrescripciones;
     }
     function getPrescripciones(){
       return $this->prescripciones;
     }

     function setAntecedentesPersonales($pstAntecedentesPersonales){
       $this->antecedentesPersonales = $pstAntecedentesPersonales;
     }
     function getAntecedentesPersonales(){
       return $this->antecedentesPersonales;
     }

     function setAntecedentesFamiliares($pstAntecedentesFamiliares){
       $this->antecedentesFamiliares = $pstAntecedentesFamiliares;
     }
     function getAntecedentesFamiliares(){
       return $this->antecedentesFamiliares;
     }
}
?> 
