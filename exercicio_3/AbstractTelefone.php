<?php

namespace exercicio_3;


abstract class AbstractTelefone
{
    abstract public function calculaCusto(int $tempo_ligacao): float;

    private int $ddd;
    private int $numero;
    private float $custo_minuto;

    public function __construct(int $ddd, int $numero, float $custo_minuto)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
        $this->setCustoMinuto($custo_minuto);
    }


    public function setDdd(int $ddd): void
    {
        $this->ddd = $ddd;
    }


    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }


    public function setCustoMinuto(float $custo_minuto): void
    {
        $this->custo_minuto = $custo_minuto;
    }


    public function getDdd(): int
    {
        return $this->ddd;
    }


    public function getNumero(): int
    {
        return $this->numero;
    }


    public function getCustoMinuto(): float
    {
        return $this->custo_minuto;
    }
}