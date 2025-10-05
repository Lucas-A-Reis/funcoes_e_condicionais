<?php

include 'elfo.php';
include 'funcoes.php';

echo '<dialog>
        <h3>Ñoldor</h3>
        <p>'.checar_cla('Finrod', 5).'</p>
        <button>Fechar</button>
    </dialog>';

function funcaoteste($nome){
    
    global $elfos;

    echo '<p>nome: '.$elfos[$nome]['nome_elfo'].'</p>';

    echo checar_cla($elfos[$nome]['nome_elfo'], $elfos[$nome]['numero_elfo']).'</p>';

    echo '<p>'.descrever_cla($elfos[$nome]['numero_elfo']).'</p>';

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




