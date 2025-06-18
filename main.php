<?php
//
require_once 'remover_duplicatas.php';
require_once 'ordenar_decrescente.php';
/**
 * Função que ordena a lista em ordem crescente
 */
function ordenar_crescente($lista)
{
    $copia = $lista;
    sort($copia);
    return $copia;
}

//Função filtrar pares
function filtrar_pares($lista)
{
    return array_filter($lista, function ($num) {
        return $num % 2 === 0;
    });
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

//Filtra pares
$resultado = executar_estrategia($numeros, 'filtrar_pares');
print_r($resultado);

//teste da função ordenar_decrescente
echo "\n\n=== Teste da Função Ordenar Decrescente ===\n\n";

//exibindo lista original
echo "Lista original: " . implode(", ", $numeros) . "\n";
//atribuindo a 'resultado2' a lista resultante da função 'ordenar_decrescente', chamada pela função 'executar_strategia'
$resultado2 = executar_estrategia($numeros, 'ordenar_decrescente');
//exibindo a lista ordenada decrescentemente
echo "Ordenada decrescentemente: " . implode(", ", $resultado2) . "\n\n";

//teste da função remover_duplicatas
echo "\n\n=== Teste da Função Remover Duplicatas ===\n\n";

//exibindo lista original
echo "Lista original: " . implode(", ", $numeros) . "\n";
//atribuindo a 'resultado1' a lista resultante da função 'remover_duplicatas', chamada pela função 'executar_strategia'
$resultado1 = executar_estrategia($numeros, 'remover_duplicatas');
//exibindo a lista sem duplicatas
echo "Sem duplicatas: " . implode(", ", $resultado1) . "\n\n";

?>