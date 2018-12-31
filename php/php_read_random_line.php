<?php
    //Questo snippet ritorna una linea casuale letta all'interno del file "frasi.txt"
    $f_contents = file("frasi.txt"); 
    echo $f_contents[rand(0, count($f_contents) - 1)];
?>
