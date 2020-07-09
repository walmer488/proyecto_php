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
    <hr>
    <?php 

date_default_timezone_set('UTC');

echo date("d---m---Y");
echo "<hr>";
?>
<form action="" method="post">
    <label for="opcion">Seleccione una de estas cuatro opciones</label>
    <select name = "opcion" id = "opcion" required>
    <option value = "1">Fecha corta</option>
    <option value = "2">Fecha larga</option>
    <option value = "3">Fecha y hora</option>
    <option value = "4">Fecha abreviada</option>
    </select>
    <input type="submit" value="enviar" name = "enviar">
<hr>
</form>
</body>
</html>

<?php 
if(isset($_POST['enviar']))
{
    $valor = $_POST['opcion'];
    if($valor == 1)
    {
        echo date("D---d---F---Y");
    }
    else if 
    ($valor == 2)
    {
        echo date("D---d---F---Y");
    }
    else if ($valor ==3) {
        
        echo date("D---d---F---Y---G:ia");
    }
    else if ($valor == 4) {
        
        echo date("d/F/Y");
    }

}

?>