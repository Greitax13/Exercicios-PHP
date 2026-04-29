<?php
function calcular($n1, $n2, $operador){

    if ($operador == "+"){
        $resultado = $n1 + $n2;
    }

    elseif ($operador == "-"){
        $resultado = $n1 - $n2;
    }

    elseif ($operador == "*"){
        $resultado = $n1 * $n2;
    }

    elseif ($operador == "/"){
        $resultado = $n1 / $n2;
    }

    else{
        $resultado = "Operador inválido";
    }

    return $resultado;
}

$n1 = 5;
$n2 = 10;
$operador = "*";

echo "Resultado: " . calcular($n1, $n2, $operador);
?>