<?php
    
    require "bd_cla.php";
    function checar_cla($nome_elfo, $numero_elfo){

        echo "elfo: $nome_elfo, ";

        if ($numero_elfo == 1){
            echo  'elfo do Clã Uchiha <br>';
        }
        else if ($numero_elfo == 2){
            echo 'elfo do Clã Hyuuga <br>';
        }
        else if ($numero_elfo == 3){
            echo 'elfo do Clã Nara <br>';

        }
        else if ($numero_elfo == 4){
            echo 'elfo do Clã Aburame <br>';
    
        }
        else if ($numero_elfo == 5){
            echo 'Elfo do Clã Ñoldor <br>';
    
        }
        else {
            echo 'número inválido';
        }
    };
    
    include 'elfo.php';

    checar_cla($Hinata['nome_elfo'], $Hinata['numero_elfo']);
    echo descrever_cla(2);

    
    include 'sistema_rank/niveis.php';
    include 'sistema_rank/ranks.php';

    $atribuir_missao = missoes(rankeadora($Hinata['nivel']));


    ?>