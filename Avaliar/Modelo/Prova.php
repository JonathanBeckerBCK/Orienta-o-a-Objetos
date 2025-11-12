<?php

require_once('Instrumento.php');

class Prova extends Instrumento
{
    public function getNotaFinal()
    {
        $nota = $this->nota + ($this->nota * 0.3); // 30%

        if($nota <= 10)
        {
            return $nota;
        }
        return 10;
    }

}