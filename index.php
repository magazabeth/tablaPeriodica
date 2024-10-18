<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Giovany Galeana Memije">
    <link rel="stylesheet" href="style.css">
    <title>Tabla periodica</title>
</head>
<body>
    
</body>
</html>


<?php 

require_once "conexión.php";
$sql = "SELECT * FROM elementos";
$resultado = $con->query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Numero Atomico</th>
</tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['Nombre'] . "</td>";
    echo "<td>" . $fila['NumeroAtomico'];
    echo "</tr>";
}

?>
