<?php

    // Exercício: Sistema de Gerenciamento de Contas
    // Você deve criar um sistema simples de gerenciamento de contas bancárias em PHP. O sistema deve permitir que você crie uma conta, deposite e retire dinheiro, e visualize o saldo da conta. O foco deste exercício é entender o escopo das variáveis, especialmente a diferença entre variáveis globais e locais.

    // Requisitos:

    // Criação de Conta:
    // Crie uma função criarConta() que inicialize uma nova conta com um saldo inicial.
    // A função deve armazenar o saldo como uma variável global.

    // Depósito:
    // Crie uma função depositar($valor) que aumente o saldo da conta.
    // Use uma variável global para acessar o saldo e certifique-se de que o valor seja somado corretamente.

    // Saque:
    // Crie uma função sacar($valor) que subtraia o valor do saldo, se o saldo for suficiente.
    // Use uma variável global para acessar o saldo e certifique-se de que o valor seja subtraído corretamente.
    // Se o saldo for insuficiente, a função deve retornar uma mensagem de erro.

    // Visualização do Saldo:
    // Crie uma função verSaldo() que exiba o saldo atual da conta.
    // Use uma variável global para acessar e mostrar o saldo.

    // Encapsulamento e Escopo:

    // Refatore o código para evitar o uso de variáveis globais.
    // Use uma classe ContaBancaria que encapsule o saldo como uma propriedade privada.
    // Implemente os métodos depositar, sacar e verSaldo dentro da classe.

    // Execução do Sistema:

    // Instancie a classe e realize uma série de depósitos, saques e consultas de saldo.
    // Garanta que o saldo seja manipulado corretamente, refletindo as operações feitas.
    // Desafio Extra:
    // Múltiplas Contas: Modifique o sistema para que suporte múltiplas contas, cada uma com seu próprio saldo. Garanta que cada conta funcione de forma independente, manipulando corretamente o escopo das variáveis.

    class ContaBancaria {
        private $saldo;

        public function __construct($saldoInicial) {
            $this->saldo = $saldoInicial;
        }

        public function depositar($valor){
            $this->saldo += $valor;
        }

        public function sacar($valor){
            if($this->saldo >= $valor){
                $this->saldo -= $valor;
            } else {
                return "ERRO: Parece que você tem R$$this->saldo. Então não foi possivel realizar um saque de R$$valor!";
            }
        }

        public function verSaldo(){
            return $this->saldo;
        }
    }

    $minhaConta = new ContaBancaria(100);
    
    $minhaConta->depositar(50);
    $minhaConta->sacar(149);
    $saldoAtual = $minhaConta->verSaldo();

    function realOrReais($saldoAtual){
        if($saldoAtual == 1){
            return 'REAL';
        } elseif ($saldoAtual > 1 || $saldoAtual == 0) {
            return 'REAIS';
        }
    }

    echo "SALDO ATUAL: R$" . $saldoAtual . ' ' . realOrReais($saldoAtual);

?>