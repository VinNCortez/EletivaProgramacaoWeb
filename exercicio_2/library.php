<?php

function verify_value_is_positive($value, $mensagem){
    if ($value < 0){
        throw new InvalidArgumentException($mensagem);
    }
}