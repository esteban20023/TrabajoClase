<?php
$valor = 100; // Este es el valor del cual deseas sacar el 30%
$porcentaje = 30; // El porcentaje que deseas calcular

$porcentajeCalculado = ($valor * $porcentaje) / 100;

echo "El 30% de $valor es: $porcentajeCalculado";
?>

<?php
class Employee
{
  public $valor1;
  public $porcentaje = 30;
  public $result;
 
  public function __construct($valor1, $porcentaje)
  {
    $this->valor1 = $valor1;
    $this->valor2 = $porcentaje;
  }


  public function getPorcentajeFrist(){
    $result = $this->valor1 * $this->porcentaje / 100;
    return $result;
  }
}
?>