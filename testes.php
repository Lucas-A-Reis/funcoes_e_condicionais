<?php

include 'elfo.php';

if($elfos[$nome]['filhos'] == true) {
        $filhos = "Sim";
    } else {
        $filhos = "Não";
}


function funcaoteste($nome){
    
    global $elfos; 
    foreach ($elfos[$nome]['feitos'] as $feito){
        echo '<ul><li>'.$feito.'</li></ul>';
    };

    echo ''


    
    
};

funcaoteste('Finrod');

?>