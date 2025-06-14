<?php

/**
 * Função que ordena a lista em ordem crescente
 */
function ordenar_crescente($lista)
{
    $copia = $lista;
    sort($copia);
    return $copia;
}

//Remove elementos duplicados de uma lista mantendo a ordem original
function remover_duplicatas($lista) {
    //usando empty para verificar se a lista está vazia
    if (empty($lista)) {
        return [];
    }
    //usando array_unique para remover todos os valores duplicados do array, preservando a primeira ocorrência
    //usando array_values para reorganizar o array reindexando as chaves numéricas sequencialmente
    return array_values(array_unique($lista));
}

/**
 * Função principal que executa uma estratégia específica sobre a lista
 */
function executar_estrategia($lista, $estrategia)
{
    return $estrategia($lista);
}

// Lista de exemplo
$numeros = [4, 2, 7, 2, 1, 8, 4, 9, 6, 3];

// Exibindo a lista original
echo "Lista original: " . implode(", ", $numeros) . "\n";

// Aplicando ordenação crescente
$resultado = ordenar_crescente($numeros);
echo "Lista ordenada: " . implode(", ", $resultado) . "\n";


// Exemplos de uso e testes da função remover_duplicatas
echo "\n\n=== Testes da Função Remover Duplicatas ===\n\n";

// Teste 1: Lista com duplicatas
$teste1 = [1, 2, 3, 2, 4, 1, 5, 3];
echo "Lista original: " . implode(", ", $teste1) . "\n";
$resultado1 = executar_estrategia($teste1, 'remover_duplicatas');
echo "Sem duplicatas: " . implode(", ", $resultado1) . "\n\n";

// Teste 2: Lista sem duplicatas
$teste2 = [1, 2, 3, 4, 5];
echo "Lista original: " . implode(", ", $teste2) . "\n";
$resultado2 = executar_estrategia($teste2, 'remover_duplicatas');
echo "Sem duplicatas: " . implode(", ", $resultado2) . "\n\n";

// Teste 3: Lista vazia
$teste3 = [];
echo "Lista original: " . (empty($teste3) ? "vazia" : implode(", ", $teste3)) . "\n";
$resultado3 = executar_estrategia($teste3, 'remover_duplicatas');
echo "Sem duplicatas: " . (empty($resultado3) ? "vazia" : implode(", ", $resultado3)) . "\n\n";

// Teste 4: Lista com todos elementos iguais
$teste4 = [7, 7, 7, 7, 7];
echo "Lista original: " . implode(", ", $teste4) . "\n";
$resultado4 = executar_estrategia($teste4, 'remover_duplicatas');
echo "Sem duplicatas: " . implode(", ", $resultado4) . "\n\n";

// Teste 5: Lista com números decimais
$teste5 = [1.5, 2.3, 1.5, 4.7, 2.3, 6.1];
echo "Lista original: " . implode(", ", $teste5) . "\n";
$resultado5 = executar_estrategia($teste5, 'remover_duplicatas');
echo "Sem duplicatas: " . implode(", ", $resultado5) . "\n";
?>
