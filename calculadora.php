<style>

    .resultado {
        font-weight: bold;
        color: red;
    }


</style>

<?php
    
    function calcular($op) {
         
          global $numero1;
          global $numero2;

          if (!strcmp("Suma",$op)){
              
              $resultado=$numero1+$numero2;
              echo "<p class='resultado'>El resultado es: $resultado</p>";
       
          }

       
          if (!strcmp("Resta",$op)){
            
              $resultado=$numero1-$numero1;
              echo "<p class='resultado'>El resultado es: $resultado</p>";              
       
          }

          if (!strcmp("Multiplicación",$op)){
       
              $resultado=$numero1*$numero2;
              echo "<p class='resultado'>El resultado es: $resultado</p>";
       
          }

          if (!strcmp("División",$op)){
              
              if ($numero2 > 0) {
                 $resultado=$numero1/$numero2;      
                 echo "<p class='resultado'>El resultado es: $resultado</p>";
              } else {
                  echo "<p class='resultado'>No puedes dividir un número por cero!</p>";
              }
       
          }

          if (!strcmp("Módulo",$op)){
       
              $resultado=$numero1%$numero2;
              echo "<p class='resultado'>El resultado es: $resultado</p>";
       
          }

          if (!strcmp("Incremento",$op)){
              
              $numero1++;
              $resultado=$numero1;
              echo "<p class='resultado'>El resultado es: $resultado</p>";
          }

          if(!strcmp("Decremento",$op)){
              $numero1--;
              $resultado=$numero1;
              echo "<p class='resultado'>El resultado es: $resultado</p>";            
          }
       
       }
   
   
   if(isset($_POST["enviar"])){
       $numero1=$_POST["num1"];
       $numero2=$_POST["num2"];
       $operacion=$_POST["operacion"];

       calcular($operacion);
   }
?>
