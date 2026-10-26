<?php
// Importando a superclasse/pai: Conteudo
require_once "src/Conteudo.php";

// Importando a subclasse/filha: Filme (que herda de Conteudo)
require_once "src/Filme.php";
require_once "src/Serie.php";

// Criando os objetos  e passando os dados para o construtor
$filme1 = new Filme('De Volta para o futuro', 'Ficção', 1985, 116);

$filme2 = new Filme('Toy Stoy', 'Animação', 1995, 145);

$filme3 = new Filme('Homem Aranha', 'Ação', 2026, 105);


$serie1 = new Serie('casa do dragão', 'ficcao', 2011, 2);

$serie2 = new Serie('Senhor dos aneis', 'ficcao', 2014, 6);





// echo "<pre>";
//var_dump ($serie1, $serie2);
// echo "</pre>";

$series = [$serie1, $serie2];


//echo "<pre>";
// var_dump($filme1, $filme2, $filme3);
//echo "</pre>";

$filmes = [$filme1, $filme2, $filme3];


/* Como a classe conteudo foi definida como abstrata, a linha a baixo não funcionará pois
não é possivel criar objeto/instância diretamente À partir de classes abstratas.
 */
// $conteudo = new Conteudo('Senhor dos Aneis', 'Fantasia', 2001);
// var_dump($conteudo);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="filmes">
            <?php foreach ($filmes as $filme): ?>
                <article class="card-filme">
                    <span class="genero"> <?= $filme->getGenero() ?> </span>
                    <h2> <?= $filme->getTitulo() ?> </h2>
                    <p class="ano">Lançamento: <?= $filme->getAno() ?> </p>

                    <p> <?= $filme->getDescricao() ?></p>

                    <?php if ($filme->ehClassico()):  ?>
                        <span class="classico">Clássico</span>
                    <?php endif; ?>

                </article>
            <?php endforeach; ?>
        </div>

        <hr>

        <div class="series">

            <?php foreach ($series as $serie): ?>
                <article class="card-serie">
                    <span class="genero"> <?= $serie->getGenero() ?></span>
                    <h2> <?= $serie->getTitulo() ?></h2>
                    <p class="ano"> Lançamento: <?= $serie->getAno() ?> </p>

                    <p> <?= $serie->getDescricao() ?></p>

                    <?php if ($serie->ehClassico()): ?>
                        <span class="classico">Classico</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>

        </div>


        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
                <li> Classe pai (ou superclase): <b>Conteudo</b></li>
                <li>Classe filha (subclasse): <b>Filme</b> <b>Serie</b> </li>
                <li> Herança utilizando <b>extends</b> </li>
                <li>Herança com propriedades e métodos</li>
                <li> Visibilidade <b>protected</b> na superclasse permitindo o acesso através das subclasses.</li>
                <li> Construtor da superclasse através de <b>parent::__construct()</b></li>
                <li>Propriedades especificas das subclasses</li>
            </ul>
        </div>

    </div>
</body>

</html>