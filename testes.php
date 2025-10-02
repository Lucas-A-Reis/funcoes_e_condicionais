<?php

include 'elfo.php';




function funcaoteste($nome){
    
    global $elfos; 
    foreach ($elfos[$nome]['feitos'] as $feito){
        echo '<ul><li>'.$feito.'</li></ul>';
    };

    if($elfos[$nome]['filhos'] == false) {
        $filhos = "não teve filhos";
    } else {
        foreach ($elfos[$nome]['filhos'] as $filho){
            echo '<ul><li>'.$filho.'</li></ul>';
        }
    }
};





funcaoteste('Ingwë');

?>