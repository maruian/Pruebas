<html>
<head><title>Hello World Program</title></head>
<body>
<?php 
  define("MATIES","EL MILLOR!");
  echo "<p><strong>Hello World!</strong>";
  echo "<br />Hola Mundo!</p>";
  echo "<br /><strong>";
  echo MATIES;
  echo "</strong>";
  $age = 15.0;
  $age_f = sprintf("%01.2f", $age);
  echo $age;
  $def = date_default_timezone_get();
  $mydate = date("Y/m/d");
  echo $mydate,"<br/>";
  echo $def,"<br/>";
  $importantDate = strtotime("December 1 1981");
  $today = strtotime("now");
  $hours = (($today - $importantDate)/60)/60;
  echo $hours;
  echo "<iframe width=\"200\" height=\"50\" src=\"horas.php\" frameborder=\"0\"></iframe>";
  $hora = time();
  $f_hora = date("M-d-Y",$hora);
  echo $f_hora."<br/>";
  $valor = 0 or 1;
  echo $valor;
  
?>
</body>
</html>