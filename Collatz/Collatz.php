<?php

function calcule_par($numero) {
    if ($numero % 2 == 1) return -1;
    return $numero / 2;
}

function calcule_impar($numero2){
    if ($numero2 % 2 == 0 ) return -1;
    return (3*$numero2 + 1);
}

function calcule_Collatz($numero){
    $vetor = [];
    //$num1=calcule_par($numero);
    // $num2=calcule_impar($num1);
    while($numero!=1){
        if($numero % 2 == 0){
            array_push($vetor, $numero);
            $numero = calcule_par($numero);
        }else{
            array_push($vetor, $numero);
            $numero = calcule_impar($numero);
        }
    }
    array_push($vetor, 1);
    return $vetor;
}



function teste_calcule_par() {
    return
        calcule_par(2) == 1 &&
        calcule_par(4) == 2 &&
        calcule_par(10) == 5 &&
        calcule_par(1) == -1 &&
        calcule_par(3) == -1 &&
        calcule_par(11) == -1;
}

function teste_calcule_impar(){
    return
    calcule_impar(3) == 10 &&
    calcule_impar(15) == 46 &&
    calcule_impar(21) == 64 &&
    calcule_impar(4) == -1 &&
    calcule_impar(2) == -1;
}

function teste_calcule_collatz(){
    return calcule_Collatz(2) == [2,1] &&
    calcule_Collatz(3) == [3,10,5,16,8,4,2,1] &&
    calcule_Collatz(4) == [4,2,1] &&
    calcule_Collatz(5) == [5,16,8,4,2,1] &&
    calcule_Collatz(6) == [6,3,10,5,16,8,4,2,1];

}

echo "\ncalcule par " . (teste_calcule_par() ? "Funcionou" : "AINDA NÃO FUNCIONOU") . "\n";

echo "\ncalcule impar " . (teste_calcule_impar() ? "Funcionou" : "Ainda não funcionou") . "\n";

echo "\ncalcule collatz " . (teste_calcule_collatz() ? "Funcionou" : "Ainda não funcionou") . "\n";

    $maior = 0;
    $maior_elemento = 0;
for($i = 1; $i <= 1000000; $i++) {
    $vetor = calcule_Collatz($i);
    if($maior < sizeof($vetor)){
    $maior = sizeof($vetor); $maior_elemento = $i;    
    }

}
echo "maior elemento é $maior_elemento e a quantidade de elementos do array é $maior";

?>
