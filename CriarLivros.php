https://github.com/ddomenicoifpr/orientObjetos2025/blob/main/aula7_arrays_objetos/aula7_arrays_objetos_exercicios_2.pdf

<?php

class Livro
{

    private string $titulo;
    private string $autor;
    private string $genero;
    private int $quantidadePaginas;
    private float $valorPago;


    /**
     * Get the value of titulo
     */

    public function __toString()
    {

        $l = "Autor do livro:" . $this->getAutor() . "\nGênero literario:" . $this->getGenero() . "\nQuantidade de paginas:" . $this->getQuantidadePaginas() . "\nTitulo:" . $this->getTitulo() . "\nPreço:" . $this->getValorPago() . "\n";

        return $l;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of quantidadePaginas
     */
    public function getQuantidadePaginas(): int
    {
        return $this->quantidadePaginas;
    }

    /**
     * Set the value of quantidadePaginas
     */
    public function setQuantidadePaginas(int $quantidadePaginas): self
    {
        $this->quantidadePaginas = $quantidadePaginas;

        return $this;
    }

    /**
     * Get the value of valorPago
     */
    public function getValorPago(): float
    {
        return $this->valorPago;
    }

    /**
     * Set the value of valorPago
     */
    public function setValorPago(float $valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

$Armazenar = array();

do {
    //Programa principal
    print "\n=== Cadastrar Livro ===\n";
    print "1.Inserir livro \n2.Listar livro \n3.Buscar livro \n4.Total gasto \n0.Sair do programa\n";

    $escolha = readline("Escolha:");

    switch ($escolha) {
        case 1:

            $Livros = new Livro();

            print "\n=== Insira um livro ===\n";
            $Livros->setAutor(readline("Autor do livro:"));
            $Livros->setGenero(readline("Gênero literario:"));
            $Livros->setQuantidadePaginas(readline("Quantidade de paginas:"));
            $Livros->setTitulo(readline("Qual o titulo:"));
            $Livros->setValorPago(readline("Qual o preço:"));

            //Inserir o livro no array

            array_push($Armazenar, $Livros);

            break;

        case 2:

            print "\n=== Listar livro ===\n";

            foreach ($Livros as $l) {

                print $l;
            }

            break;

        default:
            # code...
            break;
    }
} while ($escolha != 0);
