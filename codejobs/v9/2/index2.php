
<?php
require 'trait2.php';

class ElMundoNoEsSuficiente {
    use HolaMundo;
    public function decirHola2() {
        echo '¡Hola!';
    }
}

$o = new ElMundoNoEsSuficiente();
$o->decirHola();
?>
