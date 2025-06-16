<?php

//Remove elementos duplicados de uma lista mantendo a ordem original, a função recebe e retorna uma lista
function remover_duplicatas($lista) {
    //usando empty para verificar se a lista está vazia
    if (empty($lista)) {
        return [];
    }
    //usando array_unique para remover todos os valores duplicados do array, preservando a primeira ocorrência
    //usando array_values para reorganizar o array reindexando as chaves numéricas sequencialmente
    return array_values(array_unique($lista));
}

?>
