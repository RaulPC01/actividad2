<?php
  $servername = "localhost";
  $username = "Raul";
  $password = "xu/BOxaOfvVA8kw*";
  $dbname = "escuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$sql = "SELECT * FROM alumnos";
$resultados = $conn->query($sql);

if ($resultados->num_rows > 0) {
    echo "<h1>Alumnos matriculados</h1>";
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>curso</th></tr>";

    while ($fila = $resultados->fetch_assoc()) {
        echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["nombre"] . "</td><td>" . $fila["apellidos"] . "</td><td>" . $fila["dni"] . "</td><td>" . $fila["curso"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron alumnos.";
}

$conn->close();
?>
