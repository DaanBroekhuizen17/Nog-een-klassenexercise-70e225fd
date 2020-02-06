<?php


    echo("welke namen wilt u toevoegen");
    $namen = readline();
    $naam = explode(" ", $namen);

    echo("de studenten in de klas zijn".PHP_EOL);

    foreach($naam as $namen){
        echo("$namen".PHP_EOL);

    }



?>