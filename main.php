<?php
//
require_once 'remover_duplicatas.php';
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


//teste da função remover_duplicatas
echo "\n\n=== Teste da Função Remover Duplicatas ===\n\n";

//exibindo lista original
echo "Lista original: " . implode(", ", $numeros) . "\n";
//atribuindo a 'resultado1' a lista resultante da função 'remover_duplicatas', chamada pela função 'executar_strategia'
$resultado1 = executar_estrategia($numeros, 'remover_duplicatas');
//exibindo a lista sem duplicatas
echo "Sem duplicatas: " . implode(", ", $resultado1) . "\n\n";

?>
