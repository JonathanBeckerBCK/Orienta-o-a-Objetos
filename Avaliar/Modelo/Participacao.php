<?php

require_once('Instrumento.php');

class Participacao extends Instrumento
{
  
    public function getNotaFinal()
    {
        $nota = $this->nota;

        if($nota <= 10)
        {
            return $nota;
        }
        return 10;
        
          
    }


}
