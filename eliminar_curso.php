<?php

$curso_nombre=$_POST["curso_nombre"];

$servername = "localhost";
$username = "Raul";
$password = "xu/BOxaOfvVA8kw*";
$dbname = "escuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}


            $sql = "DELETE FROM alumnos WHERE curso = '$curso_nombre'";
            
            
            $sql = "DELETE FROM alumnos WHERE curso = '$curso_nombre'";
           
        
           

        ?>