<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calcular</title>
</head>
<body>
<p>
<form name="form1" method="post" action="">
   <label for="num1">Valor 1: </label>
   <input type="text" name="num1" id="num1">
   <label for="num2">Valor 2: </label>
   <input type="text" name="num2" id="num2">
   <label for="operacion">Operacion: </label>
   <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
    <p>
       <input type="submit" name="enviar" id="enviar" value="Calcula!">
    </p>
</form>
</p>
</form>
<p>
  <?php
     include("calculadora.php");
  ?>
</body>
</html>
