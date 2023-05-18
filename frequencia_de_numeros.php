<?php


$n = intval(readline('Digite os números: ')));

$contagem = array();


for ($i = 0; $i < $n; $i++) {
    $x = intval(readline(''));
    if (!isset($contagem[$x])) {
        $contagem[$x] = 0;
    }
    $contagem[$x]++;
}


ksort($contagem);
foreach ($contagem as $x => $count) {
    echo "$x aparece $count vez(es)\n";
}

?>