<?php
include 'Producto.php';


if (isset($_POST['cantidad'])) {
    
    $producto_1 = new Producto();
    $producto_1->setCantidad($_POST['cantidad']);
    $producto_1->setNombre("Producto_1");
    
    echo "cantidad:" . $producto_1->getCantidad();
    
    
}