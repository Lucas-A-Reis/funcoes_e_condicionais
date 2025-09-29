<?php

function rankeadora($nivel){
    if($nivel == 1){
        return 'D';
    }
    else if($nivel == 2){
        return 'C';
    }
    else if($nivel == 3){
        return 'B';
    }
    else if($nivel == 4){
        return 'A';
    }
    else if($nivel == 5){
        return 'S';
    }
    else {
        return 'Não identificado';
    }
}

?>