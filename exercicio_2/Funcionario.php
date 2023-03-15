<?php

namespace exercicio_2;

use InvalidArgumentException;

class Funcionario
{
    private string $nome;
    private int $codigo;
    private float $salarioBase;


    public function __construct(string $nome, int $codigo, float $salarioBase){
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
    }

    public function __toString(): string{
        return "{get_class($this)}\n
                Código: {$this->getCodigo()}\n
                Nome: {$this->getNome()}\n
                Salário Base {$this->getSalarioBase()}\n
                Salário Líquido: {$this->getSalarioLiquido()}";
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function getCodigo(): int
    {
        return $this->codigo;
    }


    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }


    public function setSalarioBase(float $salarioBase): void
    {
        verify_value_is_positive($salarioBase, "O salário base não pode ser negativo");
        $this->salarioBase = $salarioBase;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }


    public function getSalarioLiquido(): float
    {
        $inss = $this->getSalarioBase() * 0.1;
        $ir = $this->getSalarioBase() > 2000.0 ? 0.0 : ($this->getSalarioBase() - 2000.0) * 0.12;
        return $this->getSalarioBase() - $ir - $inss;
    }
}