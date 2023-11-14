<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   $nombre=$_POST["nombre_curso"];
   $ano_curso=$_POST["ano_curso"];

    $servername = "localhost";
    $username = "Raul";
    $password = "xu/BOxaOfvVA8kw*";
    $dbname = "escuela";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO curso (nombre, ano) VALUES ('$nombre', '$ano_curso')";

    if ($conn->query($sql) === TRUE) {
        echo "Curso insertado correctamente.";
    } else {
        echo "Error al insertar Curso: " . $conn->error;
    }

    $conn->close();
}
?>
