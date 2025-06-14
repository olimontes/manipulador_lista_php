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

/**
 *  Função que ordena a lista em ordem decrescente
 */
function ordenar_decrescente($lista)
{
    $copia = $lista;
    // Usando a função rsort para ordenar em ordem decrescente
    rsort($copia);
    return $copia;
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
echo "Lista original: \t\t\t\t" . implode(", ", $numeros) . "\n";

// Aplicando ordenação crescente
$resultado = executar_estrategia($numeros, 'ordenar_crescente');
echo "Lista ordenada: \t\t\t\t" . implode(", ", $resultado) . "\n";


// Aplicando ordenação decrescente
$resultado = executar_estrategia($numeros, 'ordenar_decrescente');
echo "Lista ordenada decrescente: \t" . implode(", ", $resultado) . "\n";
?>
