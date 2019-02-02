<?php
$numero=5;
function fatorial($numero){
    $resultado = 1;
    for ($contador = $numero; $contador >= 1; $contador--) {
        $resultado = $resultado * $contador;
    }
    return $resultado;
}
$fatorial = fatorial($numero);
    echo "O fatorial de $numero é $fatorial";

