<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios_Semana5_Guia5.</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <li><a href="index.php">index</a></li>
    <li><a href="ejercicio1.php">ejercicio1</a></li>
    <li><a href="ejercicio2.php">ejercicio2</a></li>
    <li><a href="ejercicio6.php">ejercicio6</a></li>
</body>
</html>
<br><br>
<?php
echo "<h2>1.Elabore un programa que lea una lista de nombres de aves en cualquier orden y luego
las ordene en orden alfabético.</h3>";
echo "<center>";
echo "<br>";
echo "<h3>Lista que no esta en orden alfabético.</h3>";
$nombres = array("Avestruz","torogoz","Aguilucho de ala rojiza"
, "Aguilucho lagunero", "Aguilucho palido");

echo "<pre>";
print_r($nombres) ;
echo "</pre>";
echo "<br>";
echo "<h3>Lista en orden alfabético.</h3>";
sort($nombres);
echo "<pre>";
print_r($nombres) ;
echo "</pre>";
echo "</center>";
?>