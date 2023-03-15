<?php

namespace exercicio_3;

Abstract class AbstractCelular extends AbstractTelefone
{
    private string $nome_operadora;


    public function __construct(int $ddd, int $numero, float $custo_minuto, string $nome_operadora)
    {
        parent::__construct($ddd, $numero, $custo_minuto);
        $this->setNomeOperadora($nome_operadora);
    }


    public function setNomeOperadora(string $nome_operadora): void
    {
        $this->nome_operadora = $nome_operadora;
    }


    public function getNomeOperadora(): string
    {
        return $this->nome_operadora;
    }
}