<?php

namespace exercicio_2;

class Motorista extends Funcionario
{
    private int $numero_carteira_motorista;

    public function __construct(string $nome, int $codigo, float $salarioBase, int $numero_carteira_motorista)
    {
        parent::__construct($nome, $codigo, $salarioBase);
        $this->setNumeroCarteiraMotorista($numero_carteira_motorista);
    }

    public function getNumeroCarteiraMotorista(): int
    {
        return $this->numero_carteira_motorista;
    }


    public function setNumeroCarteiraMotorista(int $numero_carteira_motorista): void
    {
        verify_value_is_positive($numero_carteira_motorista, "O número da certeira de motorista deve ser válido");
        $this->numero_carteira_motorista = $numero_carteira_motorista;
    }
}