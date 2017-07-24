<?php

$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citrico"=>"mandarina",
                                "otros"=>"manzana"),
                 
                 "leche"=>array("animal"=>"vaca",
                                "vegetal"=>"coco"),
                
                 "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata"));
                                 
foreach($alimentos as $clave_alim=>$alim){

    echo "<strong>$clave_alim:</strong><br />";

    while(list($clave,$valor)=each($alim)){

        echo "$clave=$valor<br />";

    }
    echo "<br />";

}

?>