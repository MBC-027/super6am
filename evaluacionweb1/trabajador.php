<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo semanal de un trabajador de Postobón</title>
</head>
<body>
    <?php
    $horastrabajadas=$_POST["horastrabajadas"];
    $horasextra=$_POST["horasextra"];
    $salariototal=
    $salariohrs=$horastrabajadas*20000;
    $salariohoras=$salariototal*20000;
    $salariohorasextra=$horasextra*25000
    $salariosemanal=
    $salariohoras+$salariohorasextra;
    if($salariototal<-40){
        echo Trabajo ',$salariototal,' horas. Su salario es: "$salariohoras";
        else{
            echo 'Trabajo ',$salariototal,' horas. Su salario es:',$salariosemanal;
        }
    }
    ?>
</body>
</html>