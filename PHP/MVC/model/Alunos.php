<?php

namespace Model;

class Alunos {

  protected $db = null;

  public function _construct($db) {
    $this->db = $db;
  }

  public function getAlunos() {

    return $this->db->query("SELECT * FROM alunos ORDER BY nome");

  }

}
