<?php
// Clase base Coche
class Coche {
    // Atributos protegidos: accesibles en esta clase y en clases hijas
    protected $marca;
    protected $modelo;

    // Constructor: inicializa los atributos al crear el objeto
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método para mostrar información del coche
    public function mostrarInfo() {
        echo "Coche: {$this->marca} - {$this->modelo}\n";
    }
}

// Clase hija que hereda de Coche
class CocheElectrico extends Coche {
    // Atributo adicional exclusivo de los coches eléctricos
    private $bateria;

    // Constructor: llama al constructor de la clase padre con 'parent::__construct'
    public function __construct($marca, $modelo, $bateria) {
        parent::__construct($marca, $modelo); // inicializa marca y modelo
        $this->bateria = $bateria;            // inicializa batería
    }

    // Sobrescribe el método mostrarInfo para incluir la batería
    public function mostrarInfo() {
        echo "Coche eléctrico: {$this->marca} - {$this->modelo}, Batería: {$this->bateria} kWh\n";
    }
}

// Instanciación de objetos
$coche1 = new Coche("Toyota", "Corolla");          // objeto de la clase base
$coche2 = new CocheElectrico("Tesla", "Model 3", 75); // objeto de la clase hija

// Uso de métodos
$coche1->mostrarInfo(); // Muestra: Coche: Toyota - Corolla
$coche2->mostrarInfo(); // Muestra: Coche eléctrico: Tesla - Model 3, Batería: 75 kWh
?>
