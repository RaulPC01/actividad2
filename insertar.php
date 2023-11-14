<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   $nombre=$_POST["nombre"];
   $apellido=$_POST["apellido"];
   $dni=$_POST["dni"];
   $curso=$_POST["curso"];

    $servername = "localhost";
    $username = "Raul";
    $password = "xu/BOxaOfvVA8kw*";
    $dbname = "escuela";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO alumnos (nombre, apellidos,dni,curso) VALUES ('$nombre', '$apellido', '$dni','$curso')";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno insertado correctamente.";
    } else {
        echo "Error al insertar alumnno: " . $conn->error;
    }

    $conn->close();
}
?>
