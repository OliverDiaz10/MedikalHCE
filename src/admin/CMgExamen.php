<?php
class CMgExamen
{
    private $numero_examen;
    private $codigo_persona;
    private $codigo_institucion;
    private $codigo_medico;
    private $fecha_examen;
    private $tipo_examen;
    private $consideraciones_examen;
    private $explicacion_resultado;

    
     function __construct($numero_examen,$codigo_persona, $codigo_institucion, $codigo_medico, $fecha_examen, $tipo_examen,$consideraciones_examen,$explicacion_resultado) {

       $this->numero_examen = $numero_examen;
       $this->codigo_persona = $codigo_persona;
       $this->codigo_institucion = $codigo_institucion;
       $this->codigo_medico = $codigo_medico;
       $this->fecha_examen = $fecha_examen;
       $this->tipo_examen = $tipo_examen;
      $this->consideraciones_examen = $consideraciones_examen;
       $this->explicacion_resultado = $explicacion_resultado;
      }
     

    function setNumero_examen($numero_examen){
       $this->numero_examen = $numero_examen;
     }
     function getNumero_examen(){
       return $this->numero_examen;
     }


     function setCodigo_Persona($codigo_persona){
       $this->codigo_persona = $codigo_persona;
     }
     function getCodigo_Persona(){
       return $this->codigo_persona;
     }



     function setCodigo_institucion($codigo_institucion){
       $this->codigo_institucion = $codigo_institucion;
     }
     function getCodigo_institucion(){
       return $this->codigo_institucion;
     }

     function setCodigo_medico($codigo_medico){
       $this->codigo_medico = $codigo_medico;
     }
     function getCodigo_medico(){
       return $this->codigo_medico;
     }

     function setFecha_examen($fecha_examen){
       $this->fecha_examen = $fecha_examen;
     }
     function getFecha_examen(){
       return $this->fecha_examen;
     }

     function setTipo_examen($tipo_examen){
       $this->tipo_examen = $tipo_examen;
     }
     function getTipo_examen(){
       return $this->tipo_examen;
     }

 function setConsideraciones_examen($consideraciones_examen){
       $this->consideraciones_examen = $consideraciones_examen;
     }
     function getConsideraciones_examen(){
       return $this->consideraciones_examen;
     }

 function setExplicacion_resultado($explicacion_resultado){
       $this->explicacion_resultado = $explicacion_resultado;
     }
     function getExplicacion_resultado(){
       return $this->explicacion_resultado;
     }


     
}
?> 
