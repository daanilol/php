<?php
    $name = "Danilo"; #variavel
    $lastName = "Lisboa"; #variavel

    const PAIS = "Brasil"; #constante

    function print_name() #funcao
    {
        global $name, $lastName; #variavel global
        echo "Muito prazer, $name $lastName! Você mora no " . PAIS . "!";
    }

    print_name(); #executar funcao
?>
