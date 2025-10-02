<?php

include 'elfo.php';
include 'funcoes.php';

function funcaoteste($nome){
    
    global $elfos;

    echo '<p>nome: '.$elfos[$nome]['nome_elfo'].'</p><br>';

    echo checar_cla($elfos[$nome]['nome_elfo'], $elfos[$nome]['numero_elfo']).'</p>';


    echo 'Feitos:<br>';
    foreach ($elfos[$nome]['feitos'] as $feito){
        echo '<ul><li>'.$feito.'</li></ul>';
    };

    if($elfos[$nome]['filhos'] == false) {
        $filhos = "não teve filhos";
    } else {
        echo 'Filhos:<br>';
        foreach ($elfos[$nome]['filhos'] as $filho){
            echo '<ul><li>'.$filho.'</li></ul>';
        }
    }
};

funcaoteste('Ingwë');

?>