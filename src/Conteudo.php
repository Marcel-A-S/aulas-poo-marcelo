<?php
// src/Conteudo.php

class Conteudo

{
  private string $titulo;
  private string $genero;
  private int $ano;

 public function __construct(string $titulo, string $genero, int $ano) // isso são parâmetros

  {
    // Atribuindo os valores recebidos pelos parâmetros às propriedades
    $this->titulo = $titulo;
    $this->genero = $genero;
    $this->ano = $ano;


     $this->setAno($ano);
  }
  public function ehClassico(): bool

  {
    return $this->ano < 2000;
  }


  public function getGenero(): string
  {
    return $this->genero;
  }

  public function getAno(): string

  {
    return $this->ano;
  }

  public function setTitulo(string $titulo): void
  {

    $this->titulo = $titulo;
  }

  public function setGenero(string $genero): void

  {
    $this->genero = $genero;
  }

  public function setAno(int $ano): void

  {


    if ($ano > 0) {
      $this->ano = $ano;
    }
  }


}
