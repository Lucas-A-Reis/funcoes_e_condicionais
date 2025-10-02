<?php

include 'elfo.php';


function funcaoteste(){
    
    global $elfos; 
    foreach ($elfos['Finrod']['feitos'] as $feito){
        echo '<p>feitos:'.$feito.'</p>';
    };
    
    
};


funcaoteste();

?>