<?php

// Filme e uma subclasse que herda da
// superclasse Conteudo 
class Filme extends Conteudo
{
    // propriedade especifica da classe filme
    private int $duracao;

    /* Método construtor especifico da subclasse filme
    Responsavel por receber os valores no momento da criação de objeto filme (incluindo a duração) */

    public function __construct(string $titulo, string $genero, int $ano, int $duracao)
    {

        /* Nesyte ponto chamamos o construtor da superclasse (classe pai) usando parent::__construct(). Isso é necessario pois estes valores pertecem às propriedades da classe pai */
        parent::__construct($titulo, $genero, $ano);

        //  Já quanto à duração fazemos a atribuição aqui mesmo (afinal)
        $this->duracao = $duracao;
    }
    // Implementação obrigatória do método getDescrição em Filme
    public function getDescricao(): string

    {

        return " O filme $this->titulo possui $this->duracao minutos de duração.";
    }
}
