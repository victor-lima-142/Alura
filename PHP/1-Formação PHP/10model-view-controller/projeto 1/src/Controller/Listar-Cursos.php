<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
         $this->repositorioDeCursos = $entityManager
             ->getRepository(Curso::class);
    }

    public function processaRequisicao()
    {
        $cursos = $this->repositorioDeCursos->findAll();

        ?>
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <div class="jumbotron">
                    <h1>Listar cursos</h1>
                    <a href="/novo-curso" class="btn btn-primary mb-2">
                        Novo Curso
                    </a>
                </div>
                <ul class="list-group">
                    <?php foreach ($cursos as $curso): ?>
                    <li class="list-group-item">
                        <?= $curso->getDescricao(); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </body>
    </html>
<?php
}