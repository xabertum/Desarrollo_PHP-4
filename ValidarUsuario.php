<?php

include 'connectDB.php';

/**
 * Funcion que sirva para validar y limpiar un campo
 *
 * @param  $campo
 * @return string
 */
function validar_campo ($campo)
{
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    
    return $campo;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = validar_campo($_POST["username"]);
    $password = validar_campo($_POST["password"]);
    
}


   
