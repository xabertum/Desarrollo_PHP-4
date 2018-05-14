<?php
include_once 'helps.php';
include_once 'assets/connection.php';


$sql = "SELECT * FROM users";
$resultado = $conn->query($sql);

/*Asignacion y validacion de usuario y password*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = validar_campo($_POST["username"]);
    $password = validar_campo($_POST["password"]);
    
    
    if ($resultado->num_rows > 0) {
        while ($filas = $resultado->fetch_assoc()) {
            
            if ($filas['username'] == $username &&
                    $filas['password'] == $password) {
                
                header('Location: index.php');
            } else {
                header('Location: login-registro.html');
            }
        }
    }
}