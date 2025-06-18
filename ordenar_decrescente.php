<?php
/**
 * Função que ordena a lista em ordem decrescente
 */
function ordenar_decrescente($lista)
{
    $copia = $lista;
    rsort($copia);
    return $copia;
}
?>