<?php

// src/Serie.php

// Serie é uma subclasse

class Serie extends Conteudo
{

    private int $temporada;

    /* Mini-exercicios */
    // 1) Adicione uma propriedade especifica da Serie: temporadas
    // 2) Programe o uso dos construtores considerando superclasse e subclasse
    // 3) Faça getter/setter para esta propriedade



    // 4) (na index.php) Crie dois objetivos do tipo Serie
    // 5) (na index.php) Mostre estes dois objetos usando var_dump

    public function __construct(
        string $titulo,
        string $genero,
        int $ano,
        int $temporada
    ) 

    {

        // CONTEUDO
        parent::__construct($titulo, $genero, $ano);

        // FILHA
        $this->temporada = $temporada;
    }


    public function getTemporada(): int
    {
        return $this->temporada;
    }

    public function setTemporada(int $temporada): void
    {
        $this->temporada = $temporada;
    }

    public function getDescricao(): string

    {

        return " A serie $this->titulo possui $this->temporada temporadas.";
    }
}
