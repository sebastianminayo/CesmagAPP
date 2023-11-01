<?php
include 'index.php';
include 'conexion.php';



$codigo = $_POST['codigoFac'];
$nombre = $_POST['nombreFac'];


$sql = "INSERT INTO facultades(Codigo_fac,Nombre_fac)VALUES ('$codigo','$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

