<?php

class produto {
    private $produto;

    public function __construct($produto) {
        $this->produto = $produto;
    }

    public function nome($nome){
        $this->produto['nome'] = $nome;
    }

    public function id($id){
        $this->produto['id'] = $id;
    }

    public function preco($preco){
        $this->produto['preco'] = $preco;
    }

    public function quantidade($quantidade){
        $this->produto['quantidade'] = $quantidade;
    }

    public function getProduto() {
        return $this->produto;
    }
    
    public function getNome() {
        return $this->produto['nome'];
    }

    public function getId() {
        return $this->produto['id'];
    }

    public function getPreco() {
        return $this->produto['preco'];
    }

    public function getQuantidade() {
        return $this->produto['quantidade'];
    }
}

$produto1 = new produto(
    [
        'nome' => '',
        'id' => '',
        'preco' => '',
        'quantidade' => '',
    ]
);
$produto1->nome('Caneta');
$produto1->id('1');
$produto1->preco('2,00');
$produto1->quantidade('100');

$produto2 = new produto(
    [
        'nome' => '',
        'id' => '',
        'preco' => '',
        'quantidade' => '',
    ]
);
$produto2->nome('Lapis');
$produto2->id('2');
$produto2->preco('1,00');
$produto2->quantidade('200');

$produto3 = new produto(
    [
        'nome' => '',
        'id' => '',
        'preco' => '',
        'quantidade' => '',
    ]
);
$produto3->nome('Cola');
$produto3->id('3');
$produto3->preco('5,00');
$produto3->quantidade('20');

class inventario {

    private $inventario;

    public function __construct(){   
        $this->inventario = [];
    }
    
    public function adicionarProduto($produto){
        $this->inventario[] = $produto;
    }

    public function removerProduto($nome){
        foreach ($this->inventario as $index => $produto){
            if($produto['nome'] === $nome){
                unset($this->inventario[$index]);
                $this->inventario = array_values($this->inventario);
                break;
            }
        }
    }

    public function atualizarQuantidade($nome, $quantidade){
        foreach ($this->inventario as $index => $produto){
            if($produto['nome'] === $nome){
                $this->inventario[$index]['quantidade'] = $quantidade;
                break;
            }
        }
    }

    public function consultarProduto($nome, $id, $preco, $quantidade) {
        foreach ($this->inventario as $produto) {
            if ($produto['nome'] === $nome && $produto['id'] === $id && $produto['preco'] === $preco && $produto['quantidade'] === $quantidade) {
                return 
                    "<p>Nome: " . $produto['nome'] . "</p>" .
                    "<p>Id: " . $produto['id'] . "</p>" .
                    "<p>Preço: " . $produto['preco'] . "</p>" .
                    "<p>Quantidade: " . $produto['quantidade'] . "</p>";
            }
        }
        return "Produto não encontrado.";
    }

    public function getInventario() {
        $output = '';
        foreach ($this->inventario as $produto) {
            $output .= "<p>Nome: " . $produto['nome'] . "</p>" .
                       "<p>Id: " . $produto['id'] . "</p>" .
                       "<p>Preço: " . $produto['preco'] . "</p>" .
                       "<p>Quantidade: " . $produto['quantidade'] . "</p><br>";
        }
        return $output;
    }
}

// Instanciar e testar o inventário
$inventario = new inventario;
$inventario->adicionarProduto($produto1->getProduto());
$inventario->adicionarProduto($produto2->getProduto());
$inventario->adicionarProduto($produto3->getProduto());

// Consultar produto e exibir
echo $inventario->consultarProduto($produto3->getNome(), $produto3->getId(), $produto3->getPreco(), $produto3->getQuantidade());

?>