<?php
/* Nombre script: procesa.php
 * Descripcion: Script que muestra toda la informacion pasada desde un formulario.
 *
 */
 echo "<html>\n<head>\n<title></title>\n</head>\n<body>\n";
       foreach ($_POST as $field => $value)
       {
           echo "$field = $value<br />\n";
       }
?>
</body>
</html>
