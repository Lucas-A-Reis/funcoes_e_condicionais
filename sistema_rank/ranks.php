<?php

$spec_ops = array('investigar lavagem de dinheiro do PCC', 'combater tráfico humano', 'explodir o stf' ); 
$confrontos = array('fechar a biqueira', 'abater assaltantes', 'prender bicheiro');
$short_escort = array('ser segurança do mercadinho local', 'escoltar transporte de mercadorias', 'ser segurança da festa');
$ajudas = array('resgatar gatinhos', 'dar apavoro no vizinho barulhento', 'podar árvores');
$secret = array( 'afundar todos os piratas somali', 'publicar a lista de clientes do epstein', 'reconquistar jerusalém');

function missoes($rank){
    
    global $spec_ops, $confrontos, $short_escort, $ajudas, $secret;
    
    if ($rank == 'A'){
        return $spec_ops[rand(0,2)];
    }
    elseif ($rank == 'B'){
        return $confrontos[rand(0,2)];
    }
    elseif ($rank == 'C'){
        return $short_escort[rand(0,2)];
    }
    elseif ($rank == 'D'){
        return $ajudas[rand(0,2)];
    }
    elseif ($rank == 'S'){
        return $secret[rand(0,2)];
    }
}

?>