<?php
include 'helps.php';

/* Variables de servidor */
$host = "localhost";
$user = "root";
$passwordDB = "";
$dbname = "electro_tienda";

/* variables de usuario */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = validar_campo($_POST["username"]);
    $password = validar_campo($_POST["password"]);
    $password2 = validar_campo($_POST["password2"]);
    
    if ($password == $password2) {
    
    /* Conectando al servidor de MySQL */
    $conn = new mysqli($host, $user, $passwordDB, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql)) {
        
        header('Location: index.html');
    } else {
        echo 'failed ' . mysqli_error($conn);
    }
        
    } else {
        echo "<script>alert('Las contrase�as deben coincidir...');</script>";
        
    }
}


