<?php

function removeDuplicates($inputArray) {
    // Usa array_unique para remover as duplicatas
    $cleanArray = array_unique($inputArray);

    
    $cleanArray = array_values($cleanArray);

    return $cleanArray;
}

// Exemplo
$inputList = [2, 3, 1, 2, 4, 3, 5];
$cleanList = removeDuplicates($inputList);


print_r($cleanList);

?>