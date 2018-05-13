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