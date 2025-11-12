<?php

abstract class Instrumento
{
    protected int $nota;
    
    
    public abstract function getNotaFinal();
    
    
    /**
     * Get the value of nota
     */
    public function getNota(): int
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota(int $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}
