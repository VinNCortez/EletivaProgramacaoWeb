<?php

namespace exercicio_3;

class PosPago extends AbstractCelular
{

    public function calculaCusto(int $tempo_ligacao): float
    {
        return ($this->getCustoMinuto() * 0.9) * $tempo_ligacao;
    }
}