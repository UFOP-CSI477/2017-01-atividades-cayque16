<?php

namespace Controller;

use Model\Alunos;
use Model\Database;

class AlunosController {

  public function listar() {
    //Acesso ao modelo
    $aluno = new ALunos(Database::getInstance()->getDB());

    //Manipular dados
    $lista = $aluno->getAlunos();

    //Invocar a view
    include './view/alunos/lista.php';

  }

}
