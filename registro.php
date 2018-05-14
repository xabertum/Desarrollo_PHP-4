<?php
include 'helps.php';
include 'assets/connection.php';

/* variables de usuario */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = validar_campo($_POST["username"]);
    $password = validar_campo($_POST["password"]);
    $password2 = validar_campo($_POST["password2"]);
    
    if ($password == $password2) {
       
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if ($conn->query($sql)) {
            
            header('Location: index.php');
        } else {
            echo 'failed ' . mysqli_error($conn);
        }
            
        } else {
            echo "<script>alert('Las contraseñas deben coincidir...');</script>";
            
   }
}


