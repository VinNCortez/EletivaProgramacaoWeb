<?php

namespace exercicio_3;

class PrePago extends AbstractCelular
{

    public function calculaCusto(int $tempo_ligacao): float
    {
        return ($this->getCustoMinuto() * 1.4) * $tempo_ligacao;
    }
}