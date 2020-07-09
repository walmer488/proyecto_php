<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
        <li><a href="index.php">index</a></li>
        <li><a href="ejercicio1.php">ejercicio1</a></li>
        <li><a href="ejercicio2.php">ejercicio2</a></li>
        <li><a href="ejercicio6.php">ejercicio6</a></li>
</body>
</html>




<?php
    if (isset($_GET["txtNO"])) {
        $num = $_GET["txtNO"];

        # crear el formulario
        echo '
        <h1>La suma de las horas de los Obreros en la semana es:</h1>
        <hr>';
            $suma = 0;
            $suma2 = 0;
            $suma4 = 0;
            $suma3 = 10;
            //$mul2 = 10;
           // echo "Notas:<br>";
            #estructura for
            for ($i=1; $i <= $num; $i++) { 

                $suma = $_GET["txtLunes$i"] + $_GET["txtMartes$i"] + $_GET["txtMiercoles$i"] + $_GET["txtJueves$i"] + $_GET["txtViernes$i"] + $_GET["txtSabado$i"];

                echo 'Obrero'.$i.':  '.$suma.'<br><br>';

                echo "<hr>";

                $suma2 = $suma2 + $suma;

                $suma4 = $suma2 * $suma3;

            }
            echo "<h1>El total de horas que se trabajaron en cada día en la empresa:</h1> $suma2 <hr>";
            echo "<h1>Total que la empresa tiene que pagar por salarios, si el costo por hora es de 10 colones</h1>";

            echo 'El obrero tiene un salario de:'.$suma4.'<br><br>';
           // $promedio = $suma;

        // echo "<h2>La suma de las horas trabajadas es: $suma</h2>";
        # volver al inicio
       // echo '<a href="index.php">Calcular nuevamente...</a>';
    } 
    
?>