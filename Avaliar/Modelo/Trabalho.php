<?php

require_once('Instrumento.php');

class Trabalho extends Instrumento
{
    public function getNotaFinal()
    {
        $nota = $this->nota + ($this->nota * 0.2); // 20%
        
        if($nota <= 10)
        {
            return $nota;
        }
        return 10;
    }


}
