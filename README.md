# Manipulador de Lista em PHP

Este é um projeto simples em PHP que demonstra a ordenação de uma lista de números em ordem crescente.

## Funcionalidades

- Ordenação de lista em ordem crescente
- Exibição da lista original e ordenada

## Como executar

1. Certifique-se de ter o PHP instalado em sua máquina
2. Execute o comando:

```bash
php manipulador_lista.php
```

## Exemplo de saída

```
Lista original: 4, 2, 7, 2, 1, 8, 4, 9, 6, 3
Lista ordenada: 1, 2, 2, 3, 4, 4, 6, 7, 8, 9
```

# Função: Remover Duplicatas

## Descrição
Esta função remove elementos duplicados de uma lista de números, mantendo apenas a primeira ocorrência de cada elemento e preservando a ordem original da lista.

## Implementação
```php
function remover_duplicatas($lista) {
    if (empty($lista)) {
        return [];
    }
    
    return array_values(array_unique($lista));
}
```

## Como usar
A função deve ser usada em conjunto com a função principal `executar_estrategia`:

```php
$lista = [1, 2, 3, 2, 4, 1, 5, 3];
$resultado = executar_estrategia($lista, 'remover_duplicatas');
// Resultado: [1, 2, 3, 4, 5]
```


## Características técnicas
- **Preserva ordem:** Mantém a ordem original dos elementos
- **Trata casos especiais:** Lista vazia, lista com um elemento, todos elementos iguais
- **Suporte a tipos:** Funciona com números inteiros e decimais

## Testes
O arquivo inclui testes automatizados que verificam:
- Remoção de duplicatas em lista mista
- Comportamento com lista sem duplicatas
- Tratamento de lista vazia
- Lista com todos elementos iguais
- Funcionamento com números decimais
