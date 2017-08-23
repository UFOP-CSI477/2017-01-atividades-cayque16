<?php

//Includes - framework
include './model/Database.php';
include './model/Alunos.php';
include './controller/AlunosController.php';

//Tratamento das rotas
use controller\AlunosController;

$op = $_GET['op'];

if($op == 1) {
  $aluno = new AlunosController;
  $aluno->listar();
}
