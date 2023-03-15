<?php

namespace exercicio_3;

class Fixo extends AbstractTelefone
{

    public function calculaCusto(int $tempo_ligacao): float
    {
        return $this->getCustoMinuto() * $tempo_ligacao;
    }
}