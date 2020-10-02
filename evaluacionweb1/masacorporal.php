<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular masa corporal</title>
</head>
<body>
    <form action="masacorporal.php" method="POST">
    <table>
    <tr>formulario para calcular la masa corporal</tr>
    <tr><td>Peso:</td><td><input type="text" name="Peso" required="">></input></td></tr>
    <tr><td>Estatura:</td><td><input type="text" name="Estatura" required="">></input></td></tr>
    </tr>
    <tr><td><input type="submit" value="calcular"></td></tr>
    </table>
    </form>
    <?php
    $imc=0;
    $Peso= isset($_POST["Peso"])?$_POST["Peso"]:null;
    $Estatura= isset($_POST["Estatura"])?$_POST["Estatura"]:null;
    if($Estatura =0){
     $imc= $Peso/pow($Estatura, 2);
    echo "Su indice de masa corporal es:".round($imc.2)"<br>";
    if ($imc < 18.5) { 
        echo "Peso insuficiente";
    }
    elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo "Normopeso";
    }
    elseif ($imc >= 25 && $imc <= 26.9) {
        echo "Sobrepeso grado I";
    }
    elseif ($imc >= 27 && $imc <= 29.9) {
        echo "Obesidad grado II (preobesidad)";
    }
    elseif ($imc >= 30 && $imc <= 34.9 ) {
        echo " Obesidad tipo I";
    {
    elseif ($imc >= 35 && $imc <= 39.9 ) 
            echo " Obesidad tipo II";
    }
    elseif ($imc >= 40 && $imc <= 49.9 ) {
                echo " Obesidad tipo III (mórbida)";
    }
    elseif ($imc >= 50) {
        echo "Obesidad tipo IV(extrema)";
    }
    }
    
    ?>
</body>
</html>