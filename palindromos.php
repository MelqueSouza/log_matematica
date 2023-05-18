<?php

function contarLetrasImpares($sequencia) {
  $letras = array_count_values(str_split($sequencia));
  $impares = 0;

  foreach ($letras as $letra => $ocorrencias) {
    if ($ocorrencias % 2 !== 0) {
      $impares++;
    }
  }

  return $impares;
}

while ($sequencia = fgets(STDIN)) {
  $sequencia = trim($sequencia);

  $letrasImpares = contarLetrasImpares($sequencia);

  if ($letrasImpares <= 1) {
    echo "0\n";
  } else {
    echo ($letrasImpares - 1) . "\n";
  }
}
