<?php
include 'Producto.php';

$cantidades = $_POST['cantidad'];

if (isset($cantidades)) {
    
    foreach ($cantidades as $cantidad) {
        
        $producto = new Producto();
        $producto->setCantidad($cantidad);
        $producto->setNombre("Producto_1");
        
        echo "cantidad:" . $producto->getCantidad();
    }
}

?>


