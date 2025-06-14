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

?>
