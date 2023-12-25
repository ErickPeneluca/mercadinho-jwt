<?php
// utilizando a classe produto
require_once 'Produto.php';
// fazendo a classe venda herdar da classe produto
    class Venda extends Produto
{
    // criando os atributos da classe venda. Sendo que o ultimo foi criado na intencao de armazenar os dados do produto utilizados anteriormente
    // todos os atributos sao privates, pois nesta classe ocorre a ultima interacao e manipulacao destes dados
    private int $quantidade_vendas;
    private float $descontos;
    private Produto $produto;
    
    // definindo a funcao setVenda, onde esse p representa o produto que ja estava sendo utilizado anteriormente, 
    // d representa o valor de desconto e o v representa a quantidade de vendas 
    public function setVenda($p, $d,$v) {
        //logo abaixo eu faco com que a classe consiga fazer o recebimento dos dados passados pelo Produto e receba seus novos valores dos atributos atraves do set.
        $this->produto = $p;
        $this->nome = $p->nome;
        $this->preco = $p->preco;
        $this->quantidade = $p->quantidade;

        $this->descontos = $d;
        $this->quantidade_vendas = $v;
        
        // aqui eu deveria fazer uma serie de verificacoes, mas foram todas poupadas por conta das exceptions que eu criei na classe anterior
        // por conta disso o codigo ficou mais enxuto
        if($this->quantidade >= $v) {
           //logo depois de verificar se existia a quantidade de produtos suficiente para serem vendidas, e feito o calculo do desconto e a atualizacao desses valores do produto
           //e por consequencia a autorizacao da venda
           $this->quantidade -= $this->quantidade_vendas;
           $this->preco -= $this->descontos;
            echo "<br> Venda permitida <br>";
        
        } else {
            echo "<br>Venda negada<br>";
        }
    }
    // listar a venda, com o nome do produto, o preco com desconto e a quantidade atualizada do estoque logo depois de vendido.
    public function getVenda() {
        echo "<br> Produto: {$this->nome} <br>Preço atualizado: {$this->preco} <br>Quantidade atualizada: {$this->quantidade}<br>";
    }
}