<?php

namespace exercicio_2;



class Servente extends Funcionario
{
    public function getSalarioLiquido(): float
    {
        $adicinal_insalubrida = parent::getSalarioLiquido() * 0.05;
        return round(parent::getSalarioLiquido() + $adicinal_insalubrida,2);
    }
}