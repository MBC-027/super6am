<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <fieldset>
    <legend>Temperatura</legend>
    <formulario de acción="temperatura.php" metodo="POST">
    <label for= "n1">Tmedia </label>
    <input type = "number" name = "n1" required>
    <br><br>
    <label for= "n2">Tmax </label>
    <input type = "number" name = "n2" required>
    <br><br>
    <label for= "n3">Tmin </label>
    <input type = "number" name = "n3" required>
    <br><br>
    <label for= "n4">division</label>
    <input type = "number" name = "n4" required>
    <br><br>
    <label for = "operaciones"> operaciones</label>
    <option value = "sumar"> sumar </opcion>
          <option value = "dividir"> dividir </opcion>
          </select>
    <br> <br>
    <input type = "submit" name = "enviar Tmedia" value = "Calcular Tmedia">
     </form>
    </fieldset>
    <h1> Resultado </h1>
    <? php
    $ n1 = $ _ POST ["n1"];
    $ n2 = $ _ POST ["n2"];
    $ n3 = $ _ POST ["n3"];
    $ n4 = $ _ POST ["2"];
    $ opc = $ _ POST ["operaciones"];
    if (isset ($ _ POST ["enviar"])) {

        cambiar ($ opc) {
            caso 'sumar':
                 $ Resultado = $ n2 + $ n3;
                 echo "La Suma de". $ n2. "+". $ n3. "= $ Resultado;
                rotura;

            caso 'dividir':
                    $ Resultado = $ n2 + $ n3/2;
                    echo "La division de". $ n2.+ $n3 "/". $2. "= $ Resultado;
                   rotura;

                   defecto:
                echo "error ...", ...
                rotura;

                ?>
    </fieldset>
</body>
</html>