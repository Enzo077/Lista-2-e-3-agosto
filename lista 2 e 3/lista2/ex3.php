<?php

function capitalizeNames($names) {
    $result = array();

    foreach ($names as $name) {
        $result[] = ucfirst(strtolower($name));
    }

    return $result;
}

// Exemplo
$names = ["joão", "maria", "pEDRO", "eNzO"];
$capitalizedNames = capitalizeNames($names);


print_r($capitalizedNames);

?>