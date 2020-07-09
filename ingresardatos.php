    <?php 
    echo "<h2>Aqui ingresaremos El total de horas que hizo cada obrero en la semana.</h2>";
    if (isset($_GET["txtNO"])) {
        # code...
        $num = $_GET["txtNO"];


        echo '
        <form action="sumadehorastrabajadas.php" method="get">';
           // $form = "";
            
           // echo "obrero2 ";
           echo "<table style='width: 100%'>";
            for ($i=1; $i<=$num ; $i++) { 
                # code...
                echo "<tr>";

                echo "<td><label for='txtLunes".$i."'>horas del lunes".$i."</label>
                <input type='number' name='txtLunes".$i."' id='txtLunes".$i."' required ></td>";

                echo "<td><label for='txtMartes".$i."'>horas del martes".$i."</label>
                <input type='number' name='txtMartes".$i."' id='txtMartes".$i."' required></td>";

                echo "<td><label for='txtMiercoles".$i."'>horas del Miercoles".$i."</label>
                <input type='number' name='txtMiercoles".$i."' id='txtMiercoles".$i."' required></td>";

                echo "<td><label for='txtJueves".$i."'>horas del Jueves".$i."</label>
                <input type='number' name='txtJueves".$i."' id='txtJueves".$i."' required></td>";

                echo "<td><label for='txtViernes".$i."'>horas del Viernes".$i."</label>
                <input type='number' name='txtViernes".$i."' id='txtViernes".$i."' required></td>";

                echo "<td><label for='txtSabado".$i."'>horas del Sabado".$i."</label>
                <input type='number' name='txtSabado".$i."' id='txtSabado".$i."' required></td>";
                
                echo "</tr>";
            }
            echo "</table>";
            echo "<hr>";
            echo '<input type="hidden" name="txtNO" value="'.$num.'"><input type="submit" value="sumar"></form>';
    }



    ?>
