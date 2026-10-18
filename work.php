<?php // Declaramos el inicio del código PHP
// Declaración de la clase
class Coche {
    // Atributos (propiedades)
    private $marca;
    private $modelo;

    // Constructor
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método para mostrar información
    public function mostrarInfo() {
        echo "Coche: " . $this->marca . " - " . $this->modelo . "\n";
    }

    // Método para cambiar el modelo
    public function setModelo($nuevoModelo) {
        $this->modelo = $nuevoModelo;
    }
}

// Instanciación de objetos
$coche1 = new Coche("Toyota", "Corolla");
$coche2 = new Coche("Honda", "Civic");

// Uso de métodos
$coche1->mostrarInfo();   // Muestra: Toyota - Corolla
$coche2->mostrarInfo();   // Muestra: Honda - Civic

$coche1->setModelo("Yaris"); // Cambiamos el modelo
$coche1->mostrarInfo();      // Muestra: Toyota - Yaris
?> 
