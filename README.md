# Mercadinho JWT - Sistema de Ponto de Venda (PDV)

## Descrição do Projeto

O Mercadinho JWT é um sistema de Ponto de Venda (PDV) desenvolvido em PHP. O sistema inclui duas classes principais: `Produto` e `Venda`. Como proposto pelo desafio.

### Classe Produto

A classe `Produto` é responsável pelo cadastro de produtos e inclui os seguintes atributos:

- `nome`: Nome do produto.
- `preco`: Preço unitário do produto.
- `quantidade`: Quantidade em estoque.

A classe possui métodos para definir os dados do produto (`setProduto`) e exibir as informações do produto (`getProduto`).

### Classe Venda

A classe `Venda` herda os atributos da classe `Produto` e adiciona informações relacionadas à venda:

- `quantidade_venda`: Quantidade a ser vendida.
- `desconto`: Valor do desconto aplicado.

A classe possui métodos para registrar uma venda (`setVenda`) e obter os detalhes da venda (`getVenda`).

## Como Usar

1. Inclua os arquivos `Produto.php` e `Venda.php` no seu projeto.
2. Crie instâncias da classe `Produto` e `Venda` para cada operação desejada.
3. Utilize os métodos adequados para cada classe para realizar operações de cadastro e venda.

## Exemplo de Uso

```php
<?php
require_once 'Venda.php';
require_once 'Produto.php';

try {
    $produto = new Produto();

    $data = [
        'nome' => 'Erick',
        'preco' => 10,
        'quantidade' => 1
    ];
    
    $produto->setProduto($data);
    echo $produto->getProduto();

    $venda = new Venda();
    $venda->setVenda($produto, 2, 1);
    echo $venda->getVenda();
} catch (Exception $e) {
    echo $e;
}
?>
