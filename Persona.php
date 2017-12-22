<?php

class Persona {
public $Nombre;
public $Apellido;
public $Rut;

function __construct() {

   }

   public function saludar_persona(){
   return "Hola, soy ".$this->Nombre." ".$this->Apellido;
      }

  public function despedida_persona(){
    return "Chao cabro loh vimoh, vendisioune.";
    }

   public function setNombre($Nombre_input){
   $this->Nombre = $Nombre_input;
   }

   public function getNombre(){
   return $this->Nombre;
   }


public function setApellido($Apellido_input){
$this->Apellido = $Apellido_input;
}

  public function getApellido(){
    return $this->Apellido;
    }

public function setRut($Rut_input){
$this->Rut = $Rut_input;
}

  public function getRut(){
    return $this->Rut;
    }

}

$obj = new Persona();
$obj->setNombre("Juan");
$obj->setApellido("Gabriel");
$obj->setRut("21.666.676-3");
echo $obj->saludar_persona();
echo "<br>".$obj->despedida_persona();

$obj2 = new  Persona();
$obj2->setNombre("Roberto"); $obj2->setApellido("Durán"); $obj2->setRut("33.763.455-1");
echo "<br>".$obj2->saludar_persona().", no te vayai."."<br>Debo volver a mi planeta, ".$obj2->getNombre().".<br>Ah, bueno. Vendisuione entoncez";
echo "<br>".$obj->getNombre()." ".$obj->getApellido().". Rut: ".$obj->getRut();
echo "<br>".$obj2->getNombre()." ".$obj2->getApellido().". Rut: ".$obj2->getRut();

/* LOS MANTENIMIENTOS APLICADOS FUERON "CORRECTIVO" Y "PERFECTIVO"*/

?>
