<?php
include 'helps.php';

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = validar_campo($_POST["username"]);
    $password = validar_campo($_POST["password"]);
    
    var_dump($username);
    var_dump($password);
    
    if ($resultado->num_rows > 0) {
        while ($filas = $resultado->fetch_assoc()) {
            
            if ($filas['username'] == $username &&
                    $filas['password'] == $password) {
                
                header('Location: index.php');
            } else {
                //header('Location: login-registro.php');
            }
        }
    }
}