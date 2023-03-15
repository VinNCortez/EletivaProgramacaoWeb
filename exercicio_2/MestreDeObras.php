<?php

namespace exercicio_2;

class MestreDeObras extends Servente
{
    private int $quantidade_funcionarios_sob_supervisao;

    public function __construct(string $nome, int $codigo, float $salarioBase, int $quantidade_funcionarios_sob_supervisao)
    {
        parent::__construct($nome, $codigo, $salarioBase);
        $this->setQuantidadeFuncionariosSobSupervisao($quantidade_funcionarios_sob_supervisao);
    }


    public function getQuantidadeFuncionariosSobSupervisao(): int
    {
        return $this->quantidade_funcionarios_sob_supervisao;
    }


    public function setQuantidadeFuncionariosSobSupervisao(int $quantidade_funcionarios_sob_supervisao): void
    {
        verify_value_is_positive($quantidade_funcionarios_sob_supervisao, "A quantidade de funcionário sob supervisão deve ser positivo!");
        $this->quantidade_funcionarios_sob_supervisao = $quantidade_funcionarios_sob_supervisao;
    }

    public function getSalarioLiquido(): float
    {
        $salario_liquido = parent::getSalarioLiquido();
        $bonus = floor($this->quantidade_funcionarios_sob_supervisao / 10) * 0.1;
        return $salario_liquido + $salario_liquido * $bonus;
    }
}