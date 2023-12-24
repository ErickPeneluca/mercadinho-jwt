<?php
// Verificando se a classe já foi declarada antes de declara-la
if (!class_exists('Produto')) {
    class Produto {
        // criando os atributos e usando propriedade protected para fazer com que os filhos desta classe tenha acesso
        protected string $nome;
        protected float $preco;
        protected int $quantidade;

        // como é possível ver ao longo do código, estou priorizando utilizar propriedades tipadas para ser fidedigno ao máximo nos tipos dos dados.
        // neste set, eu implementei 2 exceptions para ser lançadas que é a de verificar se o nome está vazio e a de verificar se a quantidade é menor que 1
        // com isso, alem de garantir que os dados chegarão bem na classe venda, irá me poupar o trabalho de verificálas na outra classe
        public function setProduto(array $data) {
            if (empty($data['nome'])) {
                throw new Exception(" O nome do produto não pode estar vazio");
            }

            $this->nome = $data['nome'];
            $this->preco = $data['preco'];

            if ($data['quantidade'] < 1) {
                throw new Exception("A quantidade deve obrigatoriamente ser maior que zero");
            }

            $this->quantidade = $data['quantidade'];
        }

        // este getProduto, foi bem padrão. Pedi o retorno dos dados que já foram preenchidos anteriormente e os separei com uma quebra de linha no html.
        public function getProduto() {
            return "Produto: {$this->nome} <br>Preço: {$this->preco} <br>Quantidade: {$this->quantidade}<br>";
        }
    }
}
?>