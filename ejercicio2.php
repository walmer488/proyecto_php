<!DOCTYPE html>
<html lang="es">
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
    <?php 
echo "<h2>2. En la empresa constructora Simón S.A. se tienen registradas las horas trabajadas por
sus obreros en cada uno de los 6 días laborales de la semana. Diseñe un programa que
lea los datos y luego calcule lo siguiente:
• El total de horas que hizo cada obrero en la semana.
• El total de horas que se trabajaron en cada día en la empresa.
• El total que la empresa tiene que pagar por salarios, si el costo por hora es de
10 colones.</h2>";
echo "<hr>";


/*if (isset($_GET['txtNO'])) {
    # code...
    $num = $_GET['txtNO'];
}*/
?>
<form action="ingresardatos.php" method="get">
    <label for="txtNO">Ingrese la cantidad de obreros</label>
    <input type="number" name= "txtNO" id = "txtNO" required>
    <input type="submit" value="Enviar">
</form>
</body>
</html>

