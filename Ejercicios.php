<?php

/********************************** Ejercicio 1 **********************************/
function invertirLista($arr){
    $arrInvertido = [];
    for($i = count($arr) - 1; $i >= 0; $i--){
        $arrInvertido[] = $arr[$i];
    }
    return $arrInvertido;
}
$lista = [10, 2, 3, 4, 5];
$listaInvertida = invertirLista($lista);
print_r($listaInvertida);
echo "\n";

/********************************** Ejercicio 2 **********************************/

function sumarPares($arr){
    $suma = 0;
    foreach($arr as $num){
        if($num % 2 == 0){
            $suma += $num;
        }
    }
    return $suma;
}
$lista = [6, 43, 3, 12, 5];
$sumaPares = sumarPares($lista);
print($sumaPares);
echo "\n";

/********************************** Ejercicio 3 **********************************/

function contarLetrasRepetidas($str){
    $letrasRepetidas = [];
    $arr = str_split($str);
    foreach($arr as $letra){
        if(isset($letrasRepetidas[$letra])){
            $letrasRepetidas[$letra]++;
        }else{
            $letrasRepetidas[$letra] = 1;
        }
    }
    return $letrasRepetidas;
}
$str = "vamos a contar letras repetidas";
$letrasRepetidas = contarLetrasRepetidas($str);
print_r($letrasRepetidas);
echo "\n";

/********************************** Ejercicio 4 **********************************/

function imprimirPiramide($n){
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n - $i; $j++){
            print " ";
        }
        for($j = 1; $j <= 2 * $i - 1; $j++){
            print "*";
        }
        print "\n";
    }
}
imprimirPiramide(5);
