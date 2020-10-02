<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Spring Step</title>
</head>
<body>
    <h1 align="center">Descuento de compra</h1>
    <form action="tienda.php" method="POST">
    <fieldset>
    <legend>Ingrese cantidad de compra</legend>
     <label for="cant">Cantidad de productos</label>
     <input type="text" placeholdede="escriba la cantidad de productos" productos name="cant" id="cant">
     <br><br>
     <label for="art1">Escriba el costo del articulo 1</label>
     <input type="text" placeholder="escriba el costo"name="art1" id="art1">
     <br><br>
     <label for="art2">Escriba el costo del articulo 2 2</label>
     <input type="text" placeholder="escriba la cantidad de productos"name="art2" id="art2">
     <br><br>
     <label for="art3">Escriba el costo del articulo 3</label>
     <input type="text" placeholder="escriba el costo" name="art3"id="art3">
     <b></b>
     <label for="desc">Descuento</label>
     <input type="text" placeholder="%" name="desc" id="desc">
     <br>
     <input type="submit" value="enviar" name="enviar" id="enviar">
    </fieldset>
    </form>
    <?php
      if (isset($_POST["enviar"])){
       $cant= $_POST["cant"];
       $art1= $_POST["art1"];
       $art2= $_POST["art2"];
       $art3= $_POST["art3"];
       $desc= $_POST["desc"];
       $total= $art1+$art2+$art3;
       $descuento= ($desc/100)*$total;
       $totalf=$total - $descuento;
       //RESULTADOS
       echo "<h2>Total</h2> <br>";
       echo"Descuento".$descuento. "<br>";
       echo "total final".$totalf. "<br>";
      }
       ?>

    
</body>
</html>
    