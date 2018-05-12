<?php
session_start();

echo $_POST['cantidad'];

//unset ($_SESSION['selected_val']);


if (!isset($_SESSION['cantidad_producto_1'])) {
    
    $_SESSION['cantidad_producto_1'] = $_POST['cantidad'];
    
}