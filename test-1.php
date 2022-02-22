<?php

/**
 * Funcao de verificacao
 */
function test_sum($array, $random){
    
    sort($array);

    while(count($array) > 1){
        $max = array_pop($array);
        $min = array_shift($array);

        $result = $max + $min;

        if($result == $random){
            return "\n\nSim, a soma de $min e $max eh igual a $random.\n\n";
        }
        else if($result <  $random) {
            array_push($array, $max);
        } else{
            array_unshift($array, $min);
        }
    }

    return "\n\nNao, nenhuma das somas possiveis tem como resultado $random.\n\n";    
}

/**
 * Execucao do programa
 */
$array = [1, 20, 3, 14, -5];

$random = 15;

echo test_sum($array, $random);