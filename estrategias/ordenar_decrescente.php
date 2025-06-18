<?php

function ordenar_decrescente($lista)
{
    $tamanho = count($lista);

    for ($i = 0; $i < $tamanho - 1; $i++) {
        $maior = $i;

        for ($j = $i + 1; $j < $tamanho; $j++) {
            if ($lista[$j] > $lista[$maior]) {
                $maior = $j;
            }
        }

        // Troca os elementos
        $temp = $lista[$i];
        $lista[$i] = $lista[$maior];
        $lista[$maior] = $temp;
    }

    return $lista;
}

// Testes da função
echo "=== Testes da função ordenar_decrescente ===\n\n";

// Teste 1: Array com números positivos
$teste1 = [5, 2, 8, 1, 9];
$resultado1 = ordenar_decrescente($teste1);
echo "Teste 1 - Array com números positivos:\n";
echo "Array original: " . implode(", ", $teste1) . "\n";
echo "Array ordenado: " . implode(", ", $resultado1) . "\n\n";

// Teste 2: Array com números negativos
$teste2 = [-5, -2, -8, -1, -9];
$resultado2 = ordenar_decrescente($teste2);
echo "Teste 2 - Array com números negativos:\n";
echo "Array original: " . implode(", ", $teste2) . "\n";
echo "Array ordenado: " . implode(", ", $resultado2) . "\n\n";

// Teste 3: Array com números mistos
$teste3 = [5, -2, 0, 8, -1, 9];
$resultado3 = ordenar_decrescente($teste3);
echo "Teste 3 - Array com números mistos:\n";
echo "Array original: " . implode(", ", $teste3) . "\n";
echo "Array ordenado: " . implode(", ", $resultado3) . "\n\n";

// Teste 4: Array com números repetidos
$teste4 = [5, 2, 5, 8, 2, 9];
$resultado4 = ordenar_decrescente($teste4);
echo "Teste 4 - Array com números repetidos:\n";
echo "Array original: " . implode(", ", $teste4) . "\n";
echo "Array ordenado: " . implode(", ", $resultado4) . "\n\n";

// Teste 5: Array com um único elemento
$teste5 = [5];
$resultado5 = ordenar_decrescente($teste5);
echo "Teste 5 - Array com um único elemento:\n";
echo "Array original: " . implode(", ", $teste5) . "\n";
echo "Array ordenado: " . implode(", ", $resultado5) . "\n";

?>