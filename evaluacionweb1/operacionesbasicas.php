<! DOCTYPE html>
<html lang = "en">
<cabeza>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title> Punto 1-operaciones básicas </title>
</head>
<cuerpo>
    <fieldset>
     <legend> Operaciones básicas </legend>
     <formulario de acción = "#" método = "POST">
     <label for = "N1"> primer numero </label>
     <input type = "number" name = "n1" required>
     <br> <br>
     <label for = "N2"> segundo numero </label>
     <input type = "number" name = "n2" required>
     <br> <br>
     <label for = "operaciones"> operaciones basicas </label>
     <select name = "operaciones" id = "opr">
          <option value = "sumar"> sumar </opcion>
          <option value = "restar"> restar </opcion>
          <option value = "multiplicar"> multiplicar </opcion>
          <option value = "dividir"> dividir </opcion>
    </select>
    <br> <br>
    <input type = "submit" name = "enviar" value = "Calcular">
     </form>
    </fieldset>
    <h1> Resultado </h1>
    <? php
    $ n1 = $ _ POST ["n1"];
    $ n2 = $ _ POST ["n2"];
    $ opc = $ _ POST ["operaciones"];
    if (isset ($ _ POST ["enviar"])) {

        cambiar ($ opc) {
            caso 'sumar':
                 $ Resultado = $ n1 + $ n2;
                 echo "La Suma de". $ n1. "+". $ n2. "= $ Resultado;
                rotura;

            caso 'restar':
                    $ Resultado = $ n1- $ n2;
                    echo "La resta de". $ n1. "-". $ n2. "= $ Resultado;
                   rotura;
                    
            caso 'multiplicador':
                    $ Resultado = $ n1 * $ n2;
                    echo "La multiplicación de". $ n1. "*". $ n2. "= $ Resultado;
                   rotura;

            caso 'dividir':
                    $ Resultado = $ n1 + $ n2;
                    echo "La division de". $ n1. "/". $ n2. "= $ Resultado;
                   rotura;
            
            defecto:
                echo "error ...", ...
                rotura;
            }
        }
    }
    ?>
</body>
</html>