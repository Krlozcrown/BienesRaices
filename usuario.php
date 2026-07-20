<?php 
//Importar la conexión
require 'includes/app.php';
$db = conectarDB();

//Crear email y password
$email = "correo2@correo.com";
$password = "1234567";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear al usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash');";
echo($query);

//Agregarlos a la base de datos
mysqli_query($db, $query);