<?php
    $executers = [
        'executer_1' => [ "ledNumero" => 4], 
        'executer_2' => [ "ledNumero" => 0], 
        'executer_3' => [ "ledNumero" => 2], 
        'executer_4' => [ "ledNumero" => 3], 
        'executer_5' => [ "ledNumero" => 12], 
        'executer_6' => [ "ledNumero" => 13], 
        'executer_7' => [ "ledNumero" => 14], 
        'executer_8' => [ "ledNumero" => 6]
    ];

    foreach($executers as $executer) {
        system("gpio -g mode {$executer["ledNumero"]} out");
        if($_POST[$executer] == 'ALLUMER')
        {
            system("gpio -g write {$executer["ledNumero"]} 1");
        }
        else
        {
            system("gpio -g write {$executer["ledNumero"]} 0");
        }
    
        header('Location: ../index.php');
    }
    
?>