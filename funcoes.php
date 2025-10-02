<?php
    
    require "bd_cla.php";
    function checar_cla($nome_elfo, $numero_elfo){

        echo "elfo: $nome_elfo, ";

        if ($numero_elfo == 1){
            echo  'elfo Avari <br>';
        }
        else if ($numero_elfo == 2){
            echo 'elfo Falmari <br>';
        }
        else if ($numero_elfo == 3){
            echo 'elfo Sindar <br>';

        }
        else if ($numero_elfo == 4){
            echo 'elfo Vanyar <br>';
    
        }
        else if ($numero_elfo == 5){
            echo 'Elfo do Clã Ñoldor <br>';
    
        }
        else {
            echo 'número inválido';
        }
    };
    
    include 'elfo.php';
    include 'sistema_rank/niveis.php';
    include 'sistema_rank/ranks.php';

    function atribuir_missao($nome){
        missoes(rankeadora($elfos[$nome['nivel']]));
    };






    function cardElfo($nome){
        return "<div>
        <p>nome:".$elfos[$nome['nome_elfo']]."</p><br>
        <p>clã:".checar_cla($elfos[$nome['nome_elfo']], $elfos[$nome['numero_elfo']])."</p><br><p>".descrever_cla($elfos[$nome['numero_elfo']])."</p><br>".atribuir_missao($nome)."<br>
        <p>feitos:".$feito."</p>
        <p>filhos:".$filhos."</p></div>";
    };



    ?>