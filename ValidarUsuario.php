<?php

/* Variables de servidor */
$host = "localhost";
$user = "root";
$password = "";
$dbname = "electro_tienda";

/* Conectando al servidor local de MySQL */
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$resultado = $conn->query($sql);

/**
 * Funcion que sirve para validar y limpiar un campo
 *
 * @param
 *            $campo
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
    var_dump($_POST);
    
    if ($resultado->num_rows > 0) {
        $filas = $resultado->fetch_assoc();
        
        if ($filas['username'] == $username && $filas['password'] == $password) {        
        
            header('login.php');
        }
    }
}
    
   
